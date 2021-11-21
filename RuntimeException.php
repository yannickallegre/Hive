<?php


class EmailSendingErrorException extends RuntimeException
{
    public $message = 'Impossible d\'envoyer l\'email.';
}

class NotificationSendingErrorException extends RuntimeException
{
    public $message = 'Impossible d\'envoyer la notification.';
}

class ShortText extends RuntimeException
{
    public $message = 'Le texte fourni est trop court';
}
