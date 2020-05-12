<?php

namespace Mvaliolahi\SMS\Drivers\Kavenegar;

class KavenegarConfig
{
    private $baseURL = 'https://api.kavenegar.com/v1/';
    private $apiKey;
    private $sender;
    
    /**
     * Get the value of baseURL
     */ 
    public function getBaseURL()
    {
        return $this->baseURL;
    }

    /**
     * Set the value of baseURL
     *
     * @return  self
     */ 
    public function setBaseURL($baseURL)
    {
        $this->baseURL = $baseURL;

        return $this;
    }

    /**
     * Get the value of apiKey
     */ 
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * Set the value of apiKey
     *
     * @return  self
     */ 
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;

        return $this;
    }

    /**
     * Get the value of sender
     */ 
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * Set the value of sender
     *
     * @return  self
     */ 
    public function setSender($sender)
    {
        $this->sender = $sender;

        return $this;
    }
}
