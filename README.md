## SMS Client (Kavegnegar, ...)

#### Install

```bash
composer require mvaliolahi/sms
```

#### 1. Instantiate
To generate document for your awesome API create an instance of http:

```php

    $kavenegar = new Kavenegar(
        (new KavenegarConfig())
            ->setApiKey('123456')
            ->setSender('123456789')
    );

    $sms = new \Mvaliolahi\SMS($kavenegar);

```

#### 2. Available methods:

```php
    public function send($number, $message);
```    


#### 3. Implements new client

Just impelement the `Mvaliolahi\SMS\Contracts\ShortMessageService` contract and done!