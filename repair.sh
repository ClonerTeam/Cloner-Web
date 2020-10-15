apt-get remove composer -y
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php composer-setup.php
mv composer.phar composer
chmod +x composer
mv composer /usr/bin/
php artisan key:generate
composer install
npm install
service nginx stop
service apache2 restart
service php7.4-fpm restart
service apache2 restart
