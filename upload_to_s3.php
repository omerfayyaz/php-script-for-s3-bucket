<?php
require 'vendor/autoload.php';

use Aws\S3\S3Client;
use Aws\Exception\AwsException;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$s3Client = new S3Client([
    'version' => 'latest',
    'region'  => $_ENV['AWS_REGION'],
    'credentials' => [
        'key'    => $_ENV['AWS_ACCESS_KEY_ID'],
        'secret' => $_ENV['AWS_SECRET_ACCESS_KEY'],
    ],
]);

$bucketName = $_ENV['S3_BUCKET_NAME'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES["zipFile"]) && $_FILES["zipFile"]["error"] == 0) {
        $file_Path = $_FILES["zipFile"]["tmp_name"];
        $key = 'packages/' . basename($_FILES["zipFile"]["name"]);

        try {
            $result = $s3Client->putObject([
                'Bucket' => $bucketName,
                'Key'    => $key,
                'SourceFile' => $file_Path,
                'ContentType' => 'application/zip',
            ]);
            echo "File uploaded successfully. File URL: " . $result['ObjectURL'] . "\n";
        } catch (AwsException $e) {
            echo "Error uploading file: " . $e->getMessage() . "\n";
        }
    } else {
        echo "Error: " . $_FILES["zipFile"]["error"];
    }
}
?>