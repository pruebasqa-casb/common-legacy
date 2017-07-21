<?php

declare(strict_types=1);

namespace Linio\Exception;

use PHPUnit\Framework\TestCase;

class MethodNotAllowedHttpExceptionTest extends TestCase
{
    public function testHasCorrectStatusCode()
    {
        $exception = new MethodNotAllowedHttpException('foobar');
        $this->assertEquals(405, $exception->getStatusCode());
    }
}
