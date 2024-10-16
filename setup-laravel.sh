#!/bin/bash

# Check if .env file exists, if not, copy .env.example
if [ ! -f .env ]; then
  echo "Copying .env.example to .env"
  cp .env.example .env
else
  echo ".env file already exists"
fi

# Generate Laravel application key
echo "Generating application key..."
php artisan key:generate

# Install or update Composer dependencies
if [ -f composer.lock ]; then
  echo "Running composer install..."
  composer install
else
  echo "Running composer update..."
  composer update
fi

# Install npm dependencies and run npm audit fix
echo "Running npm install..."
npm install

echo "Running npm audit fix..."
npm audit fix

# Build the frontend assets
echo "Running npm build..."
npm run build

# Run migrations
echo "Running database migrations..."
php artisan migrate

# Start Laravel development server
echo "Starting Laravel development server..."
php artisan serve
