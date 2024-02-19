FROM php:7.4-apache

# Mengatur direktori kerja
WORKDIR /var/www/html

# Menyalin file-file aplikasi ke dalam container
COPY . /var/www/html/

# Menginstall ekstensi PHP yang diperlukan
RUN docker-php-ext-install mysqli

# Menginstall nano
RUN apt-get update && apt-get install -y nano

# Mengatur konfigurasi Apache
RUN a2enmod rewrite
RUN a2enmod ssl
COPY apache-config.conf /etc/apache2/sites-available/000-default.conf

# Menyalin sertifikat SSL ke dalam container
COPY ssl/oziesejahtera.crt /etc/ssl/certs/oziesejahtera.crt
COPY ssl/oziesejahtera.key /etc/ssl/private/oziesejahtera.key

# Expose port 443 untuk SSL
EXPOSE 443
