init: dc-build dc-up cli-composer-install
rebuild: dc-down init
up: dc-up
down: dc-down
stop: dc-stop
logs: dc-logs
ps: dc-ps

dc-up:
	docker compose up -d
dc-down:
	docker compose down
dc-stop:
	docker compose stop
dc-build:
	docker compose build
dc-logs:
	docker compose logs -f
dc-ps:
	docker ps

cli-composer-install:
	docker compose run --rm -it php-cli composer install
cli-vendor-remove:
	docker compose run --rm -it php-cli rm -rf ./vendor
cli-composer-reinstall: cli-vendor-remove cli-composer-install

cli-sh:
	docker compose run --rm -it php-cli sh