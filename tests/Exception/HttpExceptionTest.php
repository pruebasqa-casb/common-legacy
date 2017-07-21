<?php

declare(strict_types=1);

namespace Linio\Exception;

use PHPUnit\Framework\TestCase;
use Psr\Log\LogLevel;

class HttpExceptionTest extends TestCase
{
    public function testIsCreatingHeaders()
    {
        $exception = new HttpException('foobar', 500, 42, LogLevel::WARNING, ['Content-Type' => 'application/json']);
        $this->assertEquals(['Content-Type' => 'application/json'], $exception->getHeaders());
        $this->assertEquals(LogLevel::WARNING, $exception->getLogLevel());
    }

    public function testIsSettingStatusCode()
    {
        $exception = new HttpException('foobar', 500);
        $this->assertEquals(500, $exception->getStatusCode());
    }
}
