# PHP Login System & E-Commerce Dashboard

A simple and secure PHP-based login system featuring a functional administrative dashboard, product listing, and a session-based shopping cart. This project was developed as part of the SNSINFOTECH Innovations Internship Program.

## 🚀 Features
**Authentication**: Secure login page that captures User ID and Password to verify users against a MySQL database
**Responsive Dashboard**: A clean UI displaying key business metrics like Total Products, Orders, and Revenue
**Product Management**: Browse available items such as Smartphones, Laptops, and Smart Watches
**Shopping Cart**: Session-based cart functionality to add products and calculate total costs
**Logout**: Securely terminates user sessions and redirects to the login page

## 🛠️ Tools Used
**Frontend**: HTML5, CSS3 (Custom styling for clean layout and alignment)
**Backend**: PHP (Session handling and database logic)
**Database**: MySQL
**Server Environment**: XAMPP / WAMP
##Database Structure
**The system uses a table named users to manage credentials.**
Field     Type       Description
id         INT      Primary Key (Auto-increment)
userId    VARCHAR    Unique User ID or Email
password  VARCHAR    User Password

**SQL Query to Create the Table:**

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    userId VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);

**Implementation & Setup**
The application follows a structured logic where a user enters credentials on the login page, which are then processed by PHP to verify a match within the MySQL database. Upon successful authentication, the user is redirected to the Admin Dashboard, while a failure triggers an error message. To set this up, clone the repository into your local server's root directory (e.g., C:/xampp/htdocs/), create a database named login-system in phpMyAdmin, and execute the SQL query provided in the Database Structure section. This project was designed to meet key evaluation criteria, specifically focusing on task completion with a working system, clean and structured PHP code quality, and effective problem-solving through logical error handling.
