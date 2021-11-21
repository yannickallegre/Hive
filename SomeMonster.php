<?php

class SomeMonster
{
    public function attack()
    {
        if (!$this->isSleepy()) {
            if ($this->isBlind()) {
                // ...
            }

            if ($this->isCrazy()) {
                // ...
            }

            if ($this->isPoisoned()) {
                // ...
            }
        }

        // ...
    }

    public function move()
    {
        if (!$this->isSleepy())
        {
            // ...
        }

        // ...
    }
}
