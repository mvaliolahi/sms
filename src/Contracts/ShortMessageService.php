<?php

namespace Mvaliolahi\SMS\Contracts;

/**
 * @package Mvaliolahi\SMS
 */
interface ShortMessageService
{
    public function send($number, $message);
}
