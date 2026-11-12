FROM php:8.3-apache
RUN sed -i 's/Listen 80/Listen 8080/' /etc/apache2/ports.conf \
 && sed -i 's/:80>/:8080>/' /etc/apache2/sites-available/000-default.conf
COPY index.php /var/www/html/index.php
