<?php

declare(strict_types=1);

namespace Linio\Exception;

use PHPUnit\Framework\TestCase;

class BadRequestHttpExceptionTest extends TestCase
{
    public function testHasCorrectStatusCode()
    {
        $exception = new BadRequestHttpException('foobar');
        $this->assertEquals(400, $exception->getStatusCode());
    }
}
