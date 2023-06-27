<?php

namespace application;
use interfaces\Messenger;
class TelegramMessenger implements Messenger
{
    private $config;


    public function __construct()
    {
        $this->setConfig(['telegramData' => [] ]);
    }

    /**
     * Set private config
     * @param array $settings
     * @return void
     */
    public function setConfig(array $settings)
    {
         $this->config = $settings;
    }

    /**
     * Get config from any point
     * @return array
     */
    public function getConfig() : array
    {
        return $this->config;
    }

    /**
     * @param string $message
     */
    public function send(string $message)
    {
        $connectionSettings = $this->getConfig([]);
        // TODO: Implement send() method.
    }

}