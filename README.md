# User Authentication System
This is a basic user authentication system implemented in PHP and MySQL. 

The system consists of two main components: a login form and a registration form.

## Features
- User registration with username and password
- Passwords are stored in the database using Argon2id algorithm
- User login with username and password
- Session management to keep users logged in across pages
- Basic client-side form validation with HTML5
- Basic server-side form validation with PHP
- Error messages are displayed to the user when needed

## Requirements
- PHP 7.x or later
- MySQL database
- Web server (e.g. Apache)

## Installation
1. Clone the repository to your web server's document root directory
2. Create a new database on your MySQL server
3. Import the usersdb.sql file into your database to create the necessary table
4. Edit the $dbhost, $dbuser, $dbpass, and $dbname variables in both login.php and register.php to match your MySQL server configuration
5. Open http://localhost/login.php in your web browser to access the login form

## Files
**login.php**: The login form and authentication logic

**register.php**: The registration form and user creation logic

**welcome.php**: Welcome page after successful login

**styles.css**: A simple stylesheet for the forms

## Future improvements
- Secure against SQL injection attacks
- Implement a password strength checker
- Add option to login with Google
- Make the usernames case-sensitive
