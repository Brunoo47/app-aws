<?php

namespace App\Infrastructure\AWS;

use Aws\S3\S3Client;

class S3Storage implements \StorageInterface
{
    private $client;

    public function __construct()
    {
        $this->client = AwsClientFactory::createS3();
    }

    public function upload(
        string $fileName,
        string $content,
        string $path
    ): string
    {

        $key = $path . '/' . $fileName;

        $this->client->putObject([
            'Bucket' => getenv('AWS_BUCKET'),
            'Key' => $key,
            'Body' => $content
        ]);

        return $key;
    }
}
