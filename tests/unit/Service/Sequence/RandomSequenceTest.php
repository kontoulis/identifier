<?php

declare(strict_types=1);

namespace Ramsey\Test\Identifier\Service\Sequence;

use Ramsey\Identifier\Service\Sequence\RandomSequence;
use Ramsey\Test\Identifier\TestCase;

class RandomSequenceTest extends TestCase
{
    public function testValue(): void
    {
        $sequence = new RandomSequence();
        $current = $sequence->current();
        $next = $sequence->next();

        $this->assertNotSame($current, $next);
        $this->assertSame($next, $sequence->current());

        // Assert that it doesn't change unless next() is called.
        $this->assertSame($next, $sequence->current());
    }
}
