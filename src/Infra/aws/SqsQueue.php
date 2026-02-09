<?php

namespace App\Infrastructure\AWS;

use App\Domain\Contracts\QueueInterface;
use Aws\Sqs\SqsClient;

class SqsQueue implements QueueInterface
{
    private $client;
    private $queueUrl;

    public function __construct()
    {
        $this->client = AwsClientFactory::create('sqs');
        $this->queueUrl = getenv('AWS_SQS_URL');
    }

    public function send(string $message)
    {
        $this->client->sendMessage([
            'QueueUrl' => $this->queueUrl,
            'MessageBody' => $message
        ]);
    }
}
