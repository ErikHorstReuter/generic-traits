<?php declare(strict_types=1);

namespace Core\GenericTrait;

use ArrayAccess;


trait IteratorTrait
{
    abstract protected function &items(): array|ArrayAccess;

    public function current(): mixed
    {
        return current($this->items());
    }

    public function next(): void
    {
        $items = &$this->items();
        next($items);
    }

    public function key(): string|int|null
    {
        return key($this->items());
    }

    public function valid(): bool
    {
        return key($this->items()) !== null;
    }

    public function rewind(): void
    {
        $items = &$this->items();
        reset($items);
    }
}
