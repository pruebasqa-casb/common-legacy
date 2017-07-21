<?php

declare(strict_types=1);

namespace Linio\Exception;

use PHPUnit\Framework\TestCase;

class ForbiddenHttpExceptionTest extends TestCase
{
    public function testHasCorrectStatusCode()
    {
        $exception = new ForbiddenHttpException('foobar');
        $this->assertEquals(403, $exception->getStatusCode());
    }
}
