<?php

namespace Mvaliolahi\SMS\Drivers\Kavenegar;

use Mvaliolahi\Http\Contracts\HttpClientContract;
use Mvaliolahi\Http\Curl;
use Mvaliolahi\SMS\Contracts\ShortMessageService;

/**
 * Class Kavenegar
 * @package Sibapp\Helpers\SMS\Gateways
 */
class Kavenegar implements ShortMessageService
{
    /**
     * @var HttpClientContract
     */
    protected $http;

    /**
     * @var mixed|string
     */
    protected $apiUrl;

    /**
     * @var string
     */
    protected $sender;

    /**
     * Kavenegar constructor.
     * @param KavenegarConfig $config
     */
    public function __construct(KavenegarConfig $config)
    {
        $this->apiUrl = $config->getBaseURL() . $config->getApiKey();
        $this->sender = $config->getSender();

        $this->http = new Curl;
    }

    /**
     * Send message to specified number.
     *
     * @param $number
     * @param $message
     * @return mixed
     */
    public function send($number, $message)
    {
        return $this->http->post($this->apiUrl . '/sms/send.json', [
            'receptor' => $number,
            'message'  => $message,
            'sender'   => $this->sender
        ]);
    }
}
