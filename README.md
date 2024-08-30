# Ditgrasi Backend API

This repository contains the backend API for the Ditgrasi Case Study project built using Laravel.

## Prerequisites

- PHP 8.x or later
- Composer
- MySQL or any other supported database

## Installation

1. **Clone the repository:**

   ```bash
   git clone https://github.com/herzinanda/case-study-ditgrasi-api
   cd case-study-ditgrasi-api
   ```

2. **Install dependencies:**

   ```bash
   composer install
   ```

3. **Setup environment variables:**

   - Copy `.env.example` to `.env`

     ```bash
     cp .env.example .env
     ```

   - Set the database credentials and other necessary configurations in the `.env` file.

4. **Create a database:**

   Create a database in MySQL (or your preferred database) and set the name in the `.env` file.

5. **Run database migrations:**

   ```bash
   php artisan migrate
   ```

6. **Seed the database:**

   ```bash
   php artisan db:seed
   ```

7. **Start the server:**

   ```bash
   php artisan serve
   ```

   The server will be running at `http://127.0.0.1:8000`.

## API Endpoints

You can check the available API endpoints in the `routes/api.php` file.

## Testing

To run the test suite:

```bash
php artisan test
```