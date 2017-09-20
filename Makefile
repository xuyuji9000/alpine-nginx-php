PROJECT_PATH=${PWD}
composer:
	docker run -it --rm \
		-v $(PROJECT_PATH)/code:/app \
		composer:1.5.2 \
		bash
