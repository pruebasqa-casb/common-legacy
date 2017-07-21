<?php

declare(strict_types=1);

namespace Linio\Exception;

use PHPUnit\Framework\TestCase;

class UnauthorizedHttpExceptionTest extends TestCase
{
    public function testHasCorrectStatusCode()
    {
        $exception = new UnauthorizedHttpException('foobar');
        $this->assertEquals(401, $exception->getStatusCode());
    }
}
