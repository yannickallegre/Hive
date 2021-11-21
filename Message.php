<?php

declare(strict_types=1);

namespace Forum {
    class Message
    {}
}

namespace Messenger {
    class Message
    {}
}

namespace App\Domain\Messenger {
    class Message
    {}
}

namespace {
    use App\Domain\Messenger\Message;

    $forumMessage = new \Forum\Message;
    $messengerMessage = new Message;

    var_dump($forumMessage);
    var_dump($messengerMessage);
}
