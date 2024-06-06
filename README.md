# PHP Script for AWS S3 Bucket

## Description
This PHP application allows users to upload ZIP files to a specified AWS S3 bucket. It's designed for easy deployment and use, making it ideal for projects requiring file storage and retrieval.

## Installation
Clone the repository and install dependencies with Composer.

```bash
git clone https://github.com/omerfayyaz/php-script-for-s3-bucket.git

cd php-script-for-s3-bucket

composer install
```

## Usage
1. Configure your AWS credentials and bucket information in a `.env` file in the root directory.

```env
AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_REGION=
S3_BUCKET_NAME=
````

2. Start your local server or deploy the application to a live server.

```bash
php -S localhost:8000
```

3. Access `index.php` from your browser to upload ZIP files.
Navigate to `http://localhost:8000/index.php` in your web browser.

## Contributing
Contributions are welcome! Please read the contributing guidelines on how to propose bugfixes, improvements, or new features.


## License
This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details.

## Acknowledgments
- AWS SDK for PHP for providing the tools to interact with AWS services.
- vlucas/phpdotenv for managing environment variables.