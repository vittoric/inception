FROM debian:bullseye

RUN apt-get update && apt-get install -y nginx openssl

COPY default /etc/nginx/sites-available/.

CMD ["nginx", "-g", "daemon off;"]
