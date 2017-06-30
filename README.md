# How to install
git clone https://github.com/rem42/symfony3-bootstrap-user-starter.git
composer install
php bin/console doctrine:schema:create
php bin/console avanzu:admin:fetch-vendor
php bin/console assets:install

# Sample DATA
php bin/console doctrine:fixtures:load