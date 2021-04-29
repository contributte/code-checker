<?php declare(strict_types = 1);

namespace Contributte\CodeChecker;

use Nette\CodeChecker\Result;

final class CustomTasks
{

	public static function tabIndentationChecker(string $contents, Result $result, ?string $origContents = null): void
	{
		$origContents = $origContents ?? $contents;

		if (preg_match('#^(\t*+)\ (?!\*)\s*#m', $contents, $m, PREG_OFFSET_CAPTURE) && !$m[1][0]) {
			$result->error(
				'Used space to indent instead of tab',
				self::offsetToLine($origContents, $m[0][1])
			);
		}
	}

	private static function offsetToLine(string $s, int $offset): int
	{
		return $offset ? substr_count($s, "\n", 0, $offset) + 1 : 1;
	}

}
