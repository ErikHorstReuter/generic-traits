<?php declare(strict_types=1);

namespace Core\GenericTraits\GenericTrait;

use ArrayAccess;


trait ArrayAccessTrait
{
    abstract protected function &items(): array|ArrayAccess;

    public function offsetExists(mixed $offset): bool
    {
        return array_key_exists($offset, $this->items());
    }

    public function offsetGet(mixed $offset): mixed
    {
        return $this->items()[$offset] ?? null;
    }

    public function offsetSet(mixed $offset, mixed $value): void
    {
        if ($offset === null) {
            $this->items()[] = $value;
        } else {
            $this->items()[$offset] = $value;
        }
    }

    public function offsetUnset(mixed $offset): void
    {
        unset($this->items()[$offset]);
    }
}
