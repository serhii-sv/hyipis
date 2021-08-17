hyipis

How to install:

- git clone git@github.com:serhii-sv/hyipis.git
- cd hyipis
- If you would like to use Docker (installing may take some while, first time installing 30-60 min depends on your perfomance):
    - git clone https://github.com/Laradock/laradock.git laradock-hyipis
    - cd laradock-hyipis
    - cp .env.example .env
    - docker-compose up -d nginx mysql php-fpm phpmyadmin workspace redis mailhog
    - docker-compose exec workspace bash
- composer install
- cp .env.example .env
- php artisan key:generate
- php artisan clean:demo
- chmod -R 777 storage/logs/ storage/framework