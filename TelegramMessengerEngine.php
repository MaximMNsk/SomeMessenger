<?php

namespace application;
use interfaces\MessengerEngine;
use interfaces\Messenger;
use application\TelegramMessenger;

class TelegramMessengerEngine implements MessengerEngine
{

    private $message;

    public function __construct(string $message)
    {
        $this->message = $message;
    }

    /**
     * Create Telegram object and send message
     * @return Messenger
     */
    public function sendMessage() : Messenger
    {
        return new TelegramMessenger($this->message);
    }
}