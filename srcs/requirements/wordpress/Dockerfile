FROM debian:buster

RUN apt-get update && apt-get install -y php-fpm php-mysql curl

COPY conf/www.conf /etc/php/8.2/fpm/pool.d/.
COPY tools/script.sh .

RUN chmod +x script.sh

EXPOSE 9000

CMD ["./script.sh"]
