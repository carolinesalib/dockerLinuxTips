FROM debian:jessie

MAINTAINER Caroline Salib <carolinesalibc@gmail.com>

RUN apt-get update && apt-get install -y apache2 php5 php5-pgsql && apt-get clean

EXPOSE 80

ADD site /var/www/site
ADD apache.conf /etc/apache2/sites-enabled/000-default.conf

# ENTRYPOINT ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
