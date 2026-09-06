#!/bin/bash
set -e

# Disable all MPM modules to wipe any conflicting state forced at container start
a2dismod mpm_event 2>/dev/null || true
a2dismod mpm_worker 2>/dev/null || true
a2dismod mpm_prefork 2>/dev/null || true

# Re-enable only mpm_prefork
a2enmod mpm_prefork

# Hand execution off to standard Apache foreground process
exec apache2-foreground

