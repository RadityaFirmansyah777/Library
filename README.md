# Library System

## Description

Simple Library Information System built using Laravel.

This project was created as part of the Laravel Environment Setup assignment for Meeting 4.

## Requirements

* PHP >= 8.4
* Composer
* MySQL
* Laravel

## Installation

### 1. Clone Repository

Clone this repository from GitHub:

```bash
git clone https://github.com/RadityaFirmansyah777/Library.git
cd Library
```

### 2. Install Dependencies

Install Laravel dependencies using Composer:

```bash
composer install
```

### 3. Configure Environment

Copy `.env.example` to `.env`:

```bash
copy .env.example .env
```

Then configure the database in the `.env` file:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=library_system
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Generate Application Key

```bash
php artisan key:generate
```

### 5. Create Database

Create a MySQL database named:

```text
library_system
```

### 6. Run Database Migration

Run the migration:

```bash
php artisan migrate
```

### 7. Run Laravel

Start the Laravel development server:

```bash
php artisan serve
```

Open the application in your browser:

```\text
http://127.0.0.1:8000
```

## Author

Name: Muhammad Raditya Firmansyah
University: Universitas Singaperbangsa Karawang (UNSIKA)
