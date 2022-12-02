FROM debian:buster
COPY certificat.csr certificat.key default.conf /
RUN apt-get update \
	&& apt-get install nginx -y \
	&& apt-get install openssl -y \
	&& apt-get clean
# script entrypoint who copy the conf file of nginx
CMD ["nginx", "-g", "daemon off;"]
#EXPOSE 8080
