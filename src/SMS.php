<?php

namespace Mvaliolahi\SMS;


use Mvaliolahi\SMS\Contracts\ShortMessageService;

/**
 * @package Mvaliolahi\SMS
 */
class SMS implements ShortMessageService
{
    /**
     * SMS driver Implementation
     *
     * @var ShortMessageService
     */
    protected $driver;

    /**
     * SMS constractor
     *
     * @param ShortMessageService $driver
     */
    public function __construct(ShortMessageService $driver)
    {
        $this->driver = $driver;
    }

    /**
     * Send Message using current driver.
     *
     * @param string $number
     * @param string $message
     * @return this
     */
    public function send($number, $message)
    {
        $this->driver->send($number, $message);

        return $this;
    }
}
