<?php

/**
 * Telegram Bot API 6.4
 */

namespace FSA\Telegram\Entity;

class VideoChatParticipantsInvited extends AbstractEntity
{

    public array $users;

    protected function parseArray($key, $value)
    {
        $result = [];
        switch ($key) {
            case 'users':
                foreach ($value as $entity) {
                    $result[] = new User($entity);
                }
                break;
        }
        return $result;
    }

}
