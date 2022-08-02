## Commands Prod

- ssh localhost -p222 - docker connect
- php8.1 -n artisan migrate:fresh --seed
- php8.1 -n artisan migrate:refresh --path=/database/migrations/2021_11_11_100732_create_raid_bosses_table.php
- php8.1 -n artisan db:seed --class=RaidBossSeeder

- COMPOSER_MEMORY_LIMIT=-1 php8.1 .local/bin/composer update

## Optimise

- php8.1 -n artisan cache:clear - reset cache
- php8.1 -n artisan config:clear - if need update config
- php8.1 -n artisan route:clear - if need add routes

- php8.1 -n artisan config:cache - config all caches
- php8.1 -n artisan route:cache - cache all routes
- php8.1 -n artisan config:cache - generate cache

## Build

- npm run prod

## Commands

- php8.1 -n artisan parse:start - Start prices parse
- php8.1 -n artisan run prod - Build assets
