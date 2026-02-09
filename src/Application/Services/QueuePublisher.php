<?php

namespace App\Application\Services;

use App\Domain\UseCases\SendMessage;

class QueuePublisher
{
    private $useCase;

    public function __construct(SendMessage $useCase)
    {
        $this->useCase = $useCase;
    }

    public function publish(string $msg)
    {
        $this->useCase->execute($msg);
    }
}
