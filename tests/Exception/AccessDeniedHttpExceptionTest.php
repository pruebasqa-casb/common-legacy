<?php

declare(strict_types=1);

namespace Linio\Exception;

use PHPUnit\Framework\TestCase;

class AccessDeniedHttpExceptionTest extends TestCase
{
    public function testHasCorrectStatusCode()
    {
        $exception = new AccessDeniedHttpException('foobar');
        $this->assertEquals(403, $exception->getStatusCode());
    }
}
