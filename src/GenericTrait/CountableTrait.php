<?php declare(strict_types=1);

namespace Core\GenericTraits\GenericTrait;

use ArrayAccess;


trait CountableTrait
{
    abstract protected function &items(): array|ArrayAccess;
    public function count(): int
    {
        return count($this->items());
    }
}
