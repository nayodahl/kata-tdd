php := server
docker := docker compose
compose := $(docker) --file docker-compose.yml
docker_exec := $(compose) exec
args = $(filter-out $@,$(MAKECMDGOALS))

start:
	$(docker) up -d

bash:
	$(docker_exec) $(php) bash

test:
	$(docker_exec) $(php) bash -c "./bin/phpunit --testdox --color"

coverage:
	$(docker_exec) $(php) bash -c "php -dxdebug.mode=coverage ./bin/phpunit --testdox --color --coverage-html coverage"
.PHONY: coverage

stop:
	$(docker) stop

rm:
	$(docker) rm $(php) --force

build:
	$(docker) up -d --build

rebuild: stop rm build

composer:
	$(docker_exec) $(php) composer $(args)
