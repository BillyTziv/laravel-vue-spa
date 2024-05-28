docker ps

docker exec -it your_laravel_container php artisan config:cache
docker exec -it your_laravel_container php artisan route:cache
docker exec -it your_laravel_container php artisan view:cache
docker exec -it your_laravel_container php artisan optimize

docker-compose down

docker-compose up -d

docker exec -it <mysql_container_id> mysql -u root -p
password: secret

docker-compose exec laravel_app php artisan migrate
