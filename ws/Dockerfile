FROM php:7.2-apache

#Añadir Extensiones:
RUN docker-php-ext-install mysqli
RUN docker-php-ext-install session
RUN docker-php-ext-install json
RUN docker-php-ext-install pdo
RUN docker-php-ext-install pdo_mysql 
RUN docker-php-ext-enable mysqli
RUN docker-php-ext-enable session
RUN docker-php-ext-enable json
RUN docker-php-ext-enable pdo
RUN docker-php-ext-enable pdo_mysql 

#Modificar permisos sobre carpetas:
RUN chown -R www-data:www-data /var/www
RUN chmod -R 755 /var/www
