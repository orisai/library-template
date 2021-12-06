<?php declare(strict_types = 1);

namespace Tests\TODOname\space\Unit;

use PHPUnit\Framework\TestCase;
use TODOname\space\Example;

final class ExampleTest extends TestCase
{

	public function test(): void
	{
		self::assertTrue(Example::exampleFunction());
	}

}
