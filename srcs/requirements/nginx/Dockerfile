FROM debian:buster

RUN apt-get update && apt-get install -y nginx openssl

RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
-keyout /etc/ssl/private/nginx.key -out /etc/ssl/certs/nginx.crt -subj "/C=ES/L=Madrid/CN=vcodrean.42.fr"

COPY conf/default /etc/nginx/sites-available/.

CMD ["nginx", "-g", "daemon off;"]
