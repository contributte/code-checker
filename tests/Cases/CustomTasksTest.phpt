<?php declare(strict_types = 1);

namespace Tests\Cases;

use Contributte\CodeChecker\CustomTasks;
use Contributte\Tester\Toolkit;
use Nette\CodeChecker\Result;
use Tester\Assert;

require_once __DIR__ . '/../bootstrap.php';

Toolkit::test(static function (): void {
	$result = new Result();
	CustomTasks::tabIndentationChecker("\t\ttest\n", $result);
	Assert::same([], $result->getMessages());
});

Toolkit::test(static function (): void {
	$result = new Result();
	CustomTasks::tabIndentationChecker(" test\n", $result);
	Assert::count(1, $result->getMessages());
});
