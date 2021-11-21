<?php

interface FileWritableInterface
{
    /**
     * Check if a file is writable.
     * 
     * @return bool
     */
    public function isWritable();
}

class IsHtaccessFileWritable implements FileWritableInterface
{
    /**
     * {@inheritdoc}
     */
    public function isWritable()
    {
        /*...*/
    }
}

class IsRobotsFileWritable implements FileWritableInterface
{
    /**
     * {@inheritdoc}
     */
    public function isWritable()
    {
        /*...*/
    }
}
