## run first
```shell
cd php_laravel
docker run --rm -v $(pwd)/src/app:/app composer install
sudo cp src/app/.env.example src/app/.env
docker run --rm -v $(pwd)/src/app:/app composer php artisan key:generate

sudo chown -R vagrant:vagrant src/app
sudo chown -R 33:33 src/app
sudo chmod -R 777 /src/app/storage

# remove all container
# docker rm -f $(docker ps -aq)

# rebuild and start
docker-compose down; docker-compose build --no-cach --parallel; docker-compose up -d --build --remove-orphans
```

sudo php src/app/artisan make:controller ProfileController
sudo php src/app/artisan make:migration create_flights_table

docker-compose exec mysql bash
mysql -u root -p
CREATE DATABASE `laravel`;
sudo php src/app/artisan migrate
sudo php src/app/artisan migrate --force
sudo php src/app/artisan migrate:status

sudo php src/app/artisan db
sudo php src/app/artisan db mysql


sudo mkdir -p ./log/app
sudo chown -R 33:33 ./log/app

## check
docker-compose logs

curl localhost:8000
curl localhost/user

composer create-project laravel/laravel ./src/app
sudo chown -R 33:33 src/app

php ./src/app/artisan serve --host=0.0.0.0 --port=8000

# install php on host
sudo apt install php7.4
sudo apt install php7.4-common php7.4-mysql php7.4-xml php7.4-xmlrpc php7.4-curl php7.4-gd php7.4-imagick php7.4-cli php7.4-dev php7.4-imap php7.4-mbstring php7.4-opcache php7.4-soap php7.4-zip php7.4-intl php7.4-bcmath php7.4-bz2 php7.4-fpm

php -v

sudo php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
sudo php -r "if (hash_file('sha384', 'composer-setup.php') === '906a84df04cea2aa72f40b5f787e49f22d4c2f19492ac310e8cba5b96ac8b64115ac402c8cd292b8a03482574915d1a8') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
sudo php composer-setup.php
sudo php -r "unlink('composer-setup.php');"
sudo mv composer.phar /usr/local/bin/composer