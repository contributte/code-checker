.PHONY: install
install:
	composer update

.PHONY: qa
qa: phpstan cs

.PHONY: cs
cs:
ifdef GITHUB_ACTION
	vendor/bin/phpcs --standard=ruleset.xml --encoding=utf-8 --extensions="php,phpt" --colors -nsp -q --report=checkstyle src | cs2pr
else
	vendor/bin/phpcs --standard=ruleset.xml --encoding=utf-8 --extensions="php,phpt" --colors -nsp src
endif

.PHONY: csf
csf:
	vendor/bin/phpcbf --standard=ruleset.xml --encoding=utf-8 --extensions="php,phpt" --colors -nsp src

.PHONY: phpstan
phpstan:
	vendor/bin/phpstan analyse -c phpstan.neon

.PHONY: tests
tests:
	echo "OK"
