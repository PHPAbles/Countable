<?php

declare(strict_types=1);

namespace Potter\Countable;

use Countable;

interface CountableInterface extends Countable
{
    public function count(): int;
}
