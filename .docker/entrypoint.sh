#!/bin/bash -l

# Setup Composer
composer install --no-progress

# Install npm packages
npm install
npm run build

# Setup new .env.testing
yes | cp .env.actions.testing .env.testing

# Run integration tests
composer test:integration
