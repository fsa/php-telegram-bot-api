<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Method;

use FSA\Telegram\Entity\Update;

class GetUpdates extends AbstractMethod
{
    public int $offset;
    public int $limit;
    public int $timeout;
    /** @var string[] */
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

    /**
     * @param string[] $allowed_updates
     */
    public function setAllowedUpdates(array $allowed_updates): static
    {
        $this->allowed_updates = $allowed_updates;
        return $this;
    }

    public function getResponseClassName(): ?string
    {
        return Update::class;
    }
}
