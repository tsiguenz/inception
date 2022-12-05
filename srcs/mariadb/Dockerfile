FROM debian:buster

RUN apt-get update \
	&& apt-get install mariadb-server -y \
	&& apt-get clean \
	&& service mysql start

CMD ["mysqld"]
