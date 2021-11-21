<?php
declare(strict_types=1);

namespace Messenger {
    use Domain\Display\MessageInterface;
    use Domain\User\User;
    require_once('../Display/MessageInterface.php');

    class Message implements MessageInterface
    {
        private $content;
        private $author;
    
        public function __construct(User $author, string $content)
        {
            $this->author = $author;
            $this->content = $content;
        }

        public function getContent(): string
        {
            return $this->content;
        }
        
        public function getAuthor(): User
        {
            return $this->author;
        }
    }
}