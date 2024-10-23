#!/bin/bash

docker compose exec app php artisan $1 $2 $3
chown -Rf $USER:$USER app