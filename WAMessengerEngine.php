<?php

namespace application;

use interfaces\MessengerEngine;
use interfaces\Messenger;
use application\WAMessenger;

class WAMessengerEngine implements MessengerEngine
{
    private $message;

    public function __construct(string $message)
    {
        $this->message = $message;
    }

    /**
     * Create Whatsapp object and send message
     * @return Messenger
     */
    public function sendMessage() : Messenger
    {
        return new WAMessenger($this->message);
    }

}