#!/usr/bin/env bash

set -e


CONTENEDOR_INICIADO="MARCA_CONTENEDOR_INICIADO"
if [ ! -f /$CONTENEDOR_INICIADO ]; then
    touch /$CONTENEDOR_INICIADO
    cd /var/www/html \
    && cat .env \
    && rm -rf composer.lock \
    && chown -R www-data:www-data /var/www/html \
    && composer install \
    && php artisan key:generate \
    && php artisan migrate --force \
    && php artisan db:seed 
else
    echo "---- No es el primer inicio del Contenedor ----"
    status=$(nc -z db 3306; echo $?)
    echo $status
    while [ $status != 0 ]
    do
        sleep 3s
        status=$(nc -z db 3306; echo $?)
        echo $status
    done
fi

chown -R www-data:www-data /var/www/html \
&& php artisan migrate \
php artisan serve &

exec "$@"