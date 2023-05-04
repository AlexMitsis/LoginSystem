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
To get started, you'll need to have a MySQL server installed and running on your local machine.
If you don't have it installed, you can download it from the official MySQL website and follow the installation instructions.
Once you have MySQL installed and running, you can create the necessary database and table by following the steps below:
1. Open a web browser and go to http://localhost/phpmyadmin/.
2. Log in to your MySQL server using your username and password.
3. Click on the "Databases" tab in the top menu.
4. Enter "usersdb" in the "Create database" field and click the "Create" button.
5. Once the database has been created, click on its name in the left sidebar to select it.
6. Click on the "SQL" tab in the top menu.
7. Copy and paste the following SQL code into the SQL query box:
```SQL
CREATE TABLE users2 (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(30) NOT NULL,
  password VARCHAR(255) NOT NULL
)
```
8. Click the "Go" button to execute the SQL code and create the "users2" table in the "usersdb" database.
9. Clone the repository to your web server's document root directory
10. Open http://localhost/login.php in your web browser to access the login form

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
