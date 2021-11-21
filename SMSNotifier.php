<?php

final class SMSNotifier implements ComponentInterface, NotifierDecoratorInterface
{
    private $component;

    public function __construct(ComponentInterface $component = null)
    {
        $this->component = $component;
    }

    public function notify()
    {
        if ($this->component !== null) {
            $this->component->notify();
        }


        $this->sendSMS();
    }

    private function sendSMS()
    {
        //
    }
}
