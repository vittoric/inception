FROM debian:buster

RUN apt-get update && apt-get install -y php-fpm php-mysql curl

# Crear directorio para el archivo PID de PHP-FPM
RUN mkdir -p /run/php && chown -R www-data:www-data /run/php

COPY conf/www.conf /etc/php/7.3/fpm/pool.d/.
COPY tools/script.sh .

RUN chmod +x script.sh

EXPOSE 9000

CMD ["./script.sh"]
