# Project Name - Laravel Backend

## Introduction

This document provides instructions on how to set up and run the Laravel backend using Docker.

## Prerequisites

Before you begin, ensure that you have the following installed:

- Docker: [Get Docker](https://docs.docker.com/get-docker/)
- Docker Compose: [Install Docker Compose](https://docs.docker.com/compose/install/)

## Getting Started

1. **Clone the repository:**

   ```bash
   git clone https://github.com/kianisanaullah/backendapi.git
   cd backendapi

2. Create a .env file:
   Copy the .env.example file to .env:
   cp .env.example .env

3. Update the necessary environment variables in the .env file.
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=news_feed
DB_USERNAME=root
DB_PASSWORD=secret

4. Build and start the Docker containers for the backend:
   docker-compose build
   docker-compose up -d

5. Run migrations and seed the database:
   docker-compose exec backend php artisan migrate --seed

6. Access the Laravel application:

    Open your web browser and go to http://localhost:8000

7. Stop the Docker containers:
    docker-compose down
