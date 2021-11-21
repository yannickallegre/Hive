<?php

declare(strict_types=1);

use Domain\Display;
use Domain\Forum\Message as ForumMessage;
use Domain\Messenger\Message as MessengerMessage;

class MessagePrinter
{
    public static function printMessage($message)
    {
        echo sprintf('%s %s', $message->getContent(), $message->getAuthor()->name);
    }
}
