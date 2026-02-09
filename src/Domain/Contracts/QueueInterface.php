<?php

namespace App\Domain\Contracts;

interface QueueInterface
{
    public function send(string $message);
}
