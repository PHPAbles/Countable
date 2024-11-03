<?php

declare(strict_types=1);

namespace PHPAbles;

use Countable;

interface CountableInterface extends Countable
{
    public function count(): int;
}
