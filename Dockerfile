FROM php:8.1-apache
RUN apt-get update && apt-get install -y \
    && docker-php-ext-install mysqli
RUN a2dismod mpm_event mpm_worker 2>/dev/null; a2enmod mpm_prefork
COPY . /var/www/html/
EXPOSE 80
CMD ["apache2-foreground"]