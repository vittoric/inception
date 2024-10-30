all: volumes
	@docker compose -f ./srcs/docker-compose.yml up -d --build

down:
	@docker compose -f ./srcs/docker-compose.yml down

re: 
	fclean all

volumes:
	@mkdir -p srcs/volumes
	@mkdir -p srcs/volumes/mysql
	@mkdir -p srcs/volumes/wordpress
	@mkdir -p srcs/volumes/phpmyadmin

clean:
	@doker stop $$(docker ps -qa)
	@docker rm $$(docker ps -qa)
	@docker rmi $$(docker images -qa)
	@docker volume rm $$(docker volume ls -q)
	@doker network rm $$(docker network ls -q)
	@docker system prune -af
	

fclean: clean
	@sudo rm -rf srcs/volumes

re: fclean all

.PHONY: all clean fclean re volumes down