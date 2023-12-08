# Laravel Project Installation Guide

This document provides step-by-step instructions to set up and install a Laravel project.

## Prerequisites

Before you begin, make sure you have the following prerequisites installed on your machine:

- [PHP](https://www.php.net/) (>= 8.1)
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/) and [npm](https://www.npmjs.com/) (optional, for frontend assets)

## Step 1: Clone the Repository

```Git Bash
git clone https://github.com/n3o-d4rk3r/studentms.git
```
## Step 2: Configure Database Connection
Now create a databse name <b>submsdb</b> Open the .env file in a text editor and update the following lines with your database credentials:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=submsdb
DB_USERNAME=root
DB_PASSWORD=
```
Replace your_database_name, your_database_user, and your_database_password with your actual database name, username, and password.

## Step 3: Run Project
Hey run this comment your beautifull ide like Visual Studio
```
php artisan serve

```
