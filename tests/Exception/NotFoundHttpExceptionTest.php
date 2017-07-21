<?php

declare(strict_types=1);

namespace Linio\Exception;

use PHPUnit\Framework\TestCase;

class NotFoundHttpExceptionTest extends TestCase
{
    public function testHasCorrectStatusCode()
    {
        $exception = new NotFoundHttpException('foobar');
        $this->assertEquals(404, $exception->getStatusCode());
    }
}
