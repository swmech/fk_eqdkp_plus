FROM php:7.4-apache

# 1. Install system dependencies for extensions (GD, Zip, MBString, etc.)
RUN apt-get update || apt-get update --fix-missing \
    && apt-get install -y --no-install-recommends --fix-missing \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    libxml2-dev \
    libonig-dev \
    libcurl4-openssl-dev \
    openssl \
    && rm -rf /var/lib/apt/lists/*

# 2. Install and enable PHP extensions
# Note: json, hash, openssl, and fopen are usually built-in to this image
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) \
    gd \
    zip \
    xml \
    mbstring \
    curl \
    bcmath \
    mysqli \
    pdo_mysql

# Enable Apache SSL modules
RUN a2enmod ssl rewrite

# Copy the certs
COPY ./certs/server.crt /etc/ssl/certs/server.crt
COPY ./certs/server.key /etc/ssl/private/server.key

COPY apache-ssl.conf /etc/apache2/sites-available/apache-ssl.conf

# Enable the SSL site
RUN a2ensite apache-ssl.conf

# Move your code into the container's web root
COPY ./src /var/www/html/

# Ensure only mpm_prefork is enabled to prevent duplicate MPM startup crashes
RUN rm -f /etc/apache2/mods-enabled/mpm_event.* \
    && rm -f /etc/apache2/mods-enabled/mpm_worker.* \
    && a2dismod mpm_event mpm_worker || true \
    && a2enmod mpm_prefork

# Set permissions so Apache can serve the files
RUN chown -R www-data:www-data /var/www/html

# Expose HTTP and HTTPS
EXPOSE 80
EXPOSE 443

# Run entrypoint script at startup to handle MPM conflict
ENTRYPOINT ["/usr/local/bin/docker-entrypoint.sh"]

