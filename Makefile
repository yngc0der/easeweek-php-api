cs: ## Fix CS violations
	./vendor/bin/php-cs-fixer fix --verbose

cs_dry_run: ## Display CS violations without fixing it
	PHP_CS_FIXER_IGNORE_ENV=1 ./vendor/bin/php-cs-fixer fix --verbose --dry-run

jane:
	./vendor/bin/jane-openapi generate --config-file=.jane-openapi.php
