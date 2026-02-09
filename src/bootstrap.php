<?php

use Dotenv\Dotenv;
use App\Domain\UseCases\UploadFile;
use App\Infrastructure\AWS\S3Storage;
use App\Application\Services\FileUploader;

require __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

$storage = new S3Storage();
$useCase = new UploadFile($storage);

return new FileUploader($useCase);
