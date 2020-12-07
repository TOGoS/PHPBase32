default: run-unit-tests

.PHONY:
	default \
	run-unit-tests \
	test-dependencies

composer.lock: | composer.json
	composer install

vendor: composer.lock
	composer install

test-dependencies: vendor vendor/bin/phpsimplertest

run-unit-tests: test-dependencies
	vendor/bin/phpsimplertest --bootstrap vendor/autoload.php src/test/php
