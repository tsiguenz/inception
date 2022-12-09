FROM debian:buster

RUN apt-get update && \
	apt-get install mariadb-server -y && \
	apt-get clean

COPY docker-entrypoint.sh /
COPY 50-server.cnf /etc/mysql/mariadb.conf.d/

ENTRYPOINT ["sh", "./docker-entrypoint.sh"]

CMD ["mysqld"]

EXPOSE 3306
