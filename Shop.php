<?php

class Shop
{
    private $theme;

    public function getTheme()
    {
        return $this->theme;
    }

    public function setTheme(Theme $theme)
    {
        $this->theme = $theme;
    }

    public function __clone()
    {
        // maintenant qu'il est différent
        // on pourra mettre à jour le theme seulement sur la copie
        $this->theme = clone $this->theme;
    }
}
