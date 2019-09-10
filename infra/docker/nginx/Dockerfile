FROM nginx:1.10

ADD /infra/docker/nginx/vhost.conf /etc/nginx/conf.d/default.conf

VOLUME /var/log/log
WORKDIR /var/www/html
EXPOSE 80
