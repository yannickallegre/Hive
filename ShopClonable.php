<?php

interface ShopClonable
{
    public function cloneWithTheme(Shop $shop, Theme $theme) : Shop;
}
