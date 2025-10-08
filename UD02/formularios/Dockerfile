# Imagen base con PHP
FROM php:8.2-apache

# Copiamos todos los archivos del proyecto dentro del servidor web de Apache
COPY . /var/www/html/

# Exponemos el puerto 80 (Render usa automáticamente el puerto asignado)
EXPOSE 80

# Arranca Apache en primer plano
CMD ["apache2-foreground"]
