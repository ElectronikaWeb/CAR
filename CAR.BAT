@echo configurando base de datos

C:\xampp\mysql\bin\mysql -u root -t -e "DROP DATABASE car"

C:\xampp\mysql\bin\mysql -u root -t -e "CREATE DATABASE IF NOT EXISTS car"

C:\xampp\mysql\bin\mysql -h localhost -u root --default-character-set=utf8 car < C:\xampp\htdocs\car\car.sql

@echo Base de datos condensa_app actualizada

exit