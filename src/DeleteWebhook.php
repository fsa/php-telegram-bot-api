<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram;

class DeleteWebhook extends AbstractMethod
{
    public bool $drop_pending_updates;

    public function setDropPendingUpdates(bool $drop_pending_updates): static
    {
        $this->drop_pending_updates = $drop_pending_updates;

        return $this;
    }
}
