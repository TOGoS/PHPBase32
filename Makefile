default: run-unit-tests

.PHONY:
	default \
	run-unit-tests \
	test-dependencies

composer.lock: | composer.json
	composer install

vendor: composer.lock
	composer install

test-dependencies: vendor vendor/bin/phpunit

run-unit-tests: test-dependencies
	vendor/bin/phpunit test
