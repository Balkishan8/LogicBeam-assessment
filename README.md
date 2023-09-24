# LogicBeam-assessment


```markdown
# Authentication System README

## Overview
This is a simple PHP-based authentication system for user registration, login, and dashboard access. It allows users to sign up, log in, and view a personalized dashboard.

## Features
- User Registration
- Secure Password Storage
- User Login
- Personalized Dashboard
- Logout Functionality

## Prerequisites
- A web server environment (e.g., XAMPP, WAMP, or LAMP) set up on your local machine.This one is in XAMPP.
- PHP installed on your server.
- MySQL database server.

## Installation
1. Clone or download this repository to your local machine.
2. Create a MySQL database named `auth_system`.
3. Import the database schema from `auth_system.sql` into your database.
4. Configure your database connection by updating the following lines in `register.php` and `authenticate.php`:
   ```php
   $connection = new mysqli('localhost', 'your_username', 'your_password', 'auth_system');
   ```
   Replace `'your_username'` and `'your_password'` with your MySQL database credentials.

## Usage
1. Access the signup page: `http://localhost/auth_demo/signup.html`
2. Fill out the registration form to create a new user account.
3. Access the login page: `http://localhost/auth_demo/login.html`
4. Log in with your registered email and password.
5. After logging in, you will be redirected to the dashboard page, where you can see a welcome message and a logout button.
6. Click the logout button to log out.

## Security
- Passwords are securely hashed using PHP's `password_hash()` function. However just for understanding purpose you can make it normal.
- User sessions are used for authentication and stored securely in PHP sessions.



In this README template:

- Provide an overview of your project.
- List the features of the authentication system.
- Include prerequisites for running the code.
- Explain installation steps, including setting up the database.
- Describe how to use the system with step-by-step instructions.
- Mention security considerations.
  ```
