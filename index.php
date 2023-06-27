<?php

namespace application;
use application\TelegramMessengerEngine;

/**
 * Some logic
 */

$TMessenger = new TelegramMessengerEngine('Some message');
$TMessenger->sendMessage();