<?php

/**
 * Telegram Bot API 6.0
 */

namespace FSA\Telegram;

class GetUpdates extends Query
{
    public int $offset;
    public int $limit;
    public int $timeout;
    public array $allowed_updates;

    public function setOffset(int $offset): static
    {
        $this->offset = $offset;
        return $this;
    }

    public function setLimit(int $limit): static
    {
        $this->limit = $limit;
        return $this;
    }

    public function setTimeout(int $timeout): static
    {
        $this->timeout = $timeout;
        return $this;
    }

    public function setAllowedUpdates(array $allowed_updates): static
    {
        $this->allowed_updates = $allowed_updates;
        return $this;
    }

    public function addAllowedUpdates(string $allowed_update): static
    {
        $this->allowed_updates[] = $allowed_update;
        return $this;
    }
}
