FROM debian:buster

# install nginx and openssl
RUN apt-get update && \
	apt-get install -y \
		nginx \
		openssl && \
	apt-get clean

# generate ssl key and certificat
RUN	mkdir /etc/certs/ && \
	openssl genrsa -out /etc/ssl/private/key.pem 4096 && \
	openssl req -new -x509 -sha512 -days 3650 -key /etc/ssl/private/key.pem -out \
		/etc/ssl/certs/cert.pem -subj "/C=FR/ST=Paris/L=Paris/O=42/OU=42 Department/CN=localhost"

COPY default.conf /etc/nginx/conf.d/default.conf

CMD ["nginx", "-g", "daemon off;"]

EXPOSE 9000
