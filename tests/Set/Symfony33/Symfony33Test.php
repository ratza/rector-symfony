<?php

declare(strict_types=1);

namespace Rector\Symfony\Tests\Set\Symfony33;

use Iterator;
use Rector\Testing\PHPUnit\AbstractRectorTestCase;

final class Symfony33Test extends AbstractRectorTestCase
{
    /**
     * @dataProvider provideData()
     */
    public function test(string $filePath): void
    {
        $this->doTestFile($filePath);
    }

    public function provideData(): Iterator
    {
        return $this->yieldFilesFromDirectory(__DIR__ . '/Fixture');
    }

    public function provideConfigFilePath(): string
    {
        return __DIR__ . '/config/symfony33.php';
    }
}
