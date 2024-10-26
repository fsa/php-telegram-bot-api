<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Method;

class GetUpdates extends AbstractMethod
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

    public function setAllowedUpdates(string|array $allowed_updates): static
    {
        $this->allowed_updates = $allowed_updates;
        return $this;
    }
}
