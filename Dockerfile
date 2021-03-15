# Start from node base image to have access to npm
FROM node

# Create container directory and copy in current directory
WORKDIR /container
COPY . /container

# Set up node dependencies
RUN npm install
RUN npm run dev

# Second stage from compatible php version
FROM php:7.4-fpm-alpine3.13

# Copy container directory from previous stage
COPY --from=0 /container .

# Copy php-extension installer from Docker Hub image and install required php extensions
COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/bin
RUN install-php-extensions gd zip

# Install composer and get php dependencies
COPY --from=composer /usr/bin/composer /usr/bin
RUN composer update
