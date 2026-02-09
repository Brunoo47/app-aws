<?php

namespace App\Infrastructure\AWS;

use Aws\S3\S3Client;

class AwsClientFactory
{
    public static function createS3(): S3Client
    {
        return new S3Client([
            'version' => 'latest',
            'region' => getenv('AWS_REGION'),
            'credentials' => [
                'key' => getenv('AWS_ACCESS_KEY_ID'),
                'secret' => getenv('AWS_SECRET_ACCESS_KEY'),
            ]
        ]);
    }
}
