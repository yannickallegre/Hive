<?php

interface UrlFileCheckerInterface
{
    /**
     * Check if .htaccess file for Front Office is writable
     * 
     * @return bool
     */
    public function isHtaccessFileWritable() : bool;

    /**
     * Check if robots.txt file for Front Office is writable
     * 
     * @return bool
     */
    public function isRobotsFileWritable() : bool;
}
