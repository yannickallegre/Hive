<?php


namespace Domain\Display {
    use Domain\User\User;

    interface ContentAwareInterface
    {
        public function getContent(): string;
    }

    interface AuthorAwareInterface
    {
        public function getAuthor(): User;
    }

    interface MessageInterface extends ContentAwareInterface, AuthorAwareInterface
    {
    }
}
