all:
	docker compose -f srcs/docker-compose.yml up -d

stop:
	-docker stop $(shell docker ps -q) 2> /dev/null

clean:
	docker rm $(shell docker ps -aq) 2> /dev/null

fclean: stop
	-docker system prune -af --volumes 2> /dev/null

re: stop
	docker compose -f srcs/docker-compose.yml up -d --build

.PHONY: all stop clean fclean re
