<?php

namespace App\Domain\UseCases;

use App\Domain\Contracts\QueueInterface;

class SendMessage
{
    private $queue;

    public function __construct(QueueInterface $queue)
    {
        $this->queue = $queue;
    }

    public function execute(string $message)
    {
        $this->queue->send($message);
    }
}
