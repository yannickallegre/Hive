<?php

class Client
{
    private $notifier;

    public function __construct(NotifierInterface $notifier)
    {
        $this->notifier = $notifier;
    }

    public function notify()
    {
        return $this->notifier->notify();
    }
}
