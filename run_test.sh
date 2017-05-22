cp .env .env.backup
mv .env.testing .env
php artisan key:generate
php artisan config:clear
php artisan config:cache
php artisan migrate
vendor/bin/phpunit --coverage-html  ./coverage.html
mv .env .env.testing
mv .env.backup .env
php artisan config:clear 
php artisan config:cache

