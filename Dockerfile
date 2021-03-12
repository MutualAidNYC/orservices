# Start from node base image to have access to npm
FROM node

# Create container directory and copy in current directory
WORKDIR /container
COPY . /container

# Set up node dependencies
RUN npm install
RUN npm run dev

# Second stage from compatible php version
FROM php:7.3

# Copy container directory from previous stage
COPY --from=0 /container .

# Install composer and get php dependencies
COPY --from=composer /usr/bin/composer /usr/bin/composer
RUN composer update
