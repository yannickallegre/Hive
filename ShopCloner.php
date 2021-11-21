<?php

require_once('ShopClonable.php');

class ShopCloner implements ShopClonable
{
    public function cloneWithTheme(Shop $shop, Theme $theme)
    {
        $newShope = clone $shop;
        $newShope->setTheme($theme);

        return $newShope;
    }
}
