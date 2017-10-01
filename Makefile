PROJECT_PATH=${PWD}
STACK_NAME=web-demo
access-composer:
	docker run -it --rm \
		-v $(PROJECT_PATH)/back:/app \
		composer:1.5.2 \
		bash

compose-up:
	docker-compose up --build -d

compose-down:
	docker-compose down

viz:
	docker service create \
  		--name=viz \
  		--publish=8080:8080/tcp \
  		--constraint=node.role==manager \
  		--mount=type=bind,src=/var/run/docker.sock,dst=/var/run/docker.sock \
  		dockersamples/visualizer
