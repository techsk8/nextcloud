# nextcloud

This is a simple nextcloud docker compose setup.

## How to use

Edit the `docker-compose.yml` file and set your desired values for paths, passwords, etc, then run the following:

```bash
docker compose up -d
```

Finish setting up the instance by either proxying the container's 443 through nginx/NPM or whatever you use as reverse proxy, or go to yourIP:8080.

## Config file

I've included a more populated nextcloud config file to use as a reference to enable the use of redis and other things. You can find your original config file at `nextcloud/www/nextcloud/config/config.php`. Start by adding configs to your original config file. Always make a backup of that file before any mods.

## Debugging

On your own! :)
