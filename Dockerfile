# Menggunakan image PHP dan Apache
FROM php:7.4-apache

# Mengatur direktori kerja
WORKDIR /var/www/html

# Menyalin file-file aplikasi ke dalam container
COPY . /var/www/html/

# Menginstall ekstensi PHP yang diperlukan
RUN docker-php-ext-install mysqli

# Mengatur konfigurasi Apache
RUN a2enmod rewrite
COPY apache-config.conf /etc/apache2/sites-available/000-default.conf

# Expose port 80
EXPOSE 80
