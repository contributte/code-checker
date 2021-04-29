.PHONY: install qa cs csf phpstan

install:
	composer update

qa: phpstan cs

cs:
ifdef GITHUB_ACTION
	vendor/bin/codesniffer -q --report=checkstyle src  | cs2pr
else
	vendor/bin/codesniffer src
endif

csf:
	vendor/bin/codefixer src

phpstan:
	vendor/bin/phpstan analyse -l max -c phpstan.neon src
