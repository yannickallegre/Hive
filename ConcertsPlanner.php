<?php

final class ConcertsPlanner implements \SplSubject
{
    private $observers;
    private $state;

    public function __construct()
    {
        $this->observers = new \SplObjectStorage();
    }

    public function attach(\SplObserver $observer): void
    {
        $this->observers->attach($observer);
    }

    public function detach(\SplObserver $observer): void
    {
        $this->observers->detach($observer);
    }

    public function getState()
    {
        return $this->state;
    }

    public function plan($groupName, $date, $location)
    {
        $this->state = [
            'group' => $groupName,
            'date' => date('d/m/Y', $date),
            'location' => $location,
        ];

        // ...
        $this->notify();
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}
