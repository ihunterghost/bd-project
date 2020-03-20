#Instalar o composer
#Comandos

composer global require "laravel/installer"
composer create-project laravel/laravel
composer require laravel/ui --dev
php artisan ui vue --auth
npm install

#Alterar .env
#Alterar config/database.php
#Alterar o arquivo php.ini, descomentando a parte do pdo_pgsql
#No linux usar o comando
sudo apt install php-pgsql