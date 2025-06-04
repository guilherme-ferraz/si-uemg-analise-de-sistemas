docker-composer up --build

docker ps


se nao houver APP_KEY no .env:
    php artisan key:generate


se nao houver base:
    php artisan migrate


Iteragir com container:
    docker exec -it poo-web-1 /bin/bash

atualizar dependencias do laravel:
    composer install/update
    
subir servidor:
    php artisan serve --host=0.0.0.0 --port=8000


