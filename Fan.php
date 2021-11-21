<?php

require_once('ConcertsPlanner.php');

final class Fan implements \SplObserver
{
    public function getLocation()
    {
        return 'Marseille';
    }

    public function getFollowedGroups()
    {
        return [
            'Tartanpion',
            '...',
        ];
    }
    public function update(\SplSubject $subject): void
    {
        $state = $subject->getState();

        if (in_array($state['group'], $this->followedGroups())
            && $state['location'] === $this->getLocation()) {
                // Notifier l'utilisateur !
            }
    }
}
