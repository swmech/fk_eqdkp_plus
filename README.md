# fk_eqdkp_plus
EQDkp Plus running in a docker container.

### History
Kenluin (RIP, friend) first adapted EQDkp Plus (EP) for Frayed Knot's use.  After his death access was lost to the original site, and as one of the app admins I started keeping database backups locally "just in case."

That turned out to be A Good Thing, if a lucky one.  In March of 2026 the site started experiencing issues that kept us from being able to enter raid data.  It still served content, but attempting to update data failed.  I snagged one last backup, thinking that we'd be able to re-install and re-host the EP software and restore from backup.  It wasn't that easy.

EP hasn't been maintained for about 5 years now, and requires an ancient version of PHP. No hosting company that I could find supported that version of PHP.  I tried using AI to port the EP implementation to a current version of PHP.  That, um, didn't work (where "didn't work" means "an abject failure).  I implemented a Google Sheets system to temporarily take the place of the DKP tracking functionality of the old site, leaving things like the raid and loot rules active on the old site (which kept getting more and more unreliable).

Eventually I hit on the idea of using a 7.4 PHP Docker container to run the site.  That's where this implementation came from.  If you don't know what Docker is then this might not be the project for you.

### Building/Deploying

#### local
You'll need:
1. Docker Desktop (free for personal use)
2. Git (and optionally a Git GUI like SourceTree or Turtle Git)
3. Site secrets (see that section, below)

Clone [this repo](https://github.com/swmech/fk_eqdkp_plus).  Create a file called `.env` in the root of that local repo in the following format.
```
DB_USER=<non-root database user name>
DB_PASSWORD=<database user password>
DB_ROOT_PASSWORD=<database root user password>
ENCRYPTION_KEY=<site encryption key>
```
Substitute the appropriate Site Secrets (local vs. production) for the `<values>` in that file.

Run `docker compose up -d`


#### "production"
This is currently being hosted on [Railway](https://railway.com), and is automatically redeployed whenever changes are pushed to this repo.  This isn't going to happen very often, as now that it's running I don't intend to try to add features/functionality to the old codebase.

### Site Secrets
Here's where things get complex and sensitive.
TODO - outline the secret splitting between Kiras, Ciraele, Miro, Slaine, Majique, Ellamental
