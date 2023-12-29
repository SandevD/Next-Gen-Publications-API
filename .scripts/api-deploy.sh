#!/bin/bash
set -e

echo "🎉 Deployment started ..."
echo "=========================="

eval "$(ssh-agent -s)"
ssh-add ~/.ssh/id_rsa_api

# Enter maintenance mode or return true
# if already is in maintenance mode
(php artisan down) || true

# Pull the latest version of the app
echo "🚚 Fetching the latest version of the app ..."
echo "=============================================="
git reset --hard
git clean -df
git pull origin main

# Install composer dependencies
echo "📦️ Installing dependancies ..."
echo "==============================="
composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader

# Clear the old cache
echo "🔥 Clearing cache ..."
echo "======================"
php artisan clear-compiled

# Clear the old sessions
rm -f /home/nextgen/api.nextgen.pub/core/storage/framework/sessions/*

# Recreate cache
php artisan optimize:clear -q
php artisan config:cache -q
php artisan route:cache -q
php artisan view:cache -q
php artisan config:clear -q

# Run database migrations
echo "🗃️ Running database migrations ..."
echo "==================================="
php artisan migrate:fresh --seed -n

#Fix Permissions
echo "🔐 Fixing permissions ..."
echo "==========================="
find /home/nextgen/api.nextgen.pub -type d -print0 | xargs -0 chmod 0755
find /home/nextgen/api.nextgen.pub -type f -print0 | xargs -0 chmod 0644
find /home/nextgen/api.nextgen.pub -type f -name "*.php" | xargs chmod 640

# Exit maintenance mode
php artisan up

echo "✅ Deployment finished!"
echo "========================"
