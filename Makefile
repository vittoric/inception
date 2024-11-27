all: volumes
	@echo "\033[1;32m✅ Creating volumes...\033[0m"
	@docker compose -f ./srcs/docker-compose.yml up -d --build
	@echo "\033[1;32m✅ All set! Containers are up and built\033[0m"

down:
	@echo "\033[1;33m⬇️ Taking down containers...\033[0m"
	@docker compose -f ./srcs/docker-compose.yml down
	@echo "\033[1;32m✅ All set! Containers stopped\033[0m"

re: fclean all

volumes:
	@echo "\033[1;34m⚙️ Creating necessary volumes...\033[0m"
	@mkdir -p $$HOME/data/mariadb/
	@echo "\033[1;34m📁 Volume for MariaDB created: $$HOME/data/mariadb/\033[0m"
	@mkdir -p $$HOME/data/wordpress/
	@echo "\033[1;34m📁 Volume for WordPress created: $$HOME/data/wordpress/\033[0m"
	@echo "\033[1;32m✅ All set! Volumes created\033[0m"

fclean: clean
	@echo "\033[1;31m❌ Removing volumes...\033[0m"
	- sudo rm -rf $$HOME/data
	@echo "\033[1;32m✅ All set! Volumes removed\033[0m"

clean:
	@echo "\033[1;31m❌ Cleaning Docker resources...\033[0m"
	- docker stop $$(docker ps -qa)
	- docker rm $$(docker ps -qa)
	- docker rmi -f $$(docker images -qa)
	- docker volume rm $$(docker volume ls -q)
	- docker network rm $$(docker network ls -q)
	- docker system prune -a -f
	@echo "\033[1;32m✅ All set! Docker resources cleaned\033[0m"

.PHONY: all down clean fclean re volumes
