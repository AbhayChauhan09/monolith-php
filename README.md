# Monolith PHP Login Application

This is a simple monolithic PHP login application created as part of my DevOps learning task.

The application runs on Nginx with PHP-FPM and connects to a MariaDB database.  
The login page is available at the root location and authentication is done using database records.

---

## 📁 Project Structure

monolith-php/
- app/
  - index.php
  - db.php
  - welcome.php
  - logout.php
- public/
  - css/
  - js/
  - images/
- infra/
  - nginx/
    - monolith.conf

---

## ⚙️ Requirements

- Nginx
- PHP
- PHP-FPM
- MariaDB

---

## 🛠️ Steps to Run Locally

1. Install Nginx, PHP and MariaDB.
2. Start nginx and php-fpm services.
3. Create a database named:

   monolith_db

4. Inside the database, create a users table with fields:
   - id
   - username
   - password

5. Insert at least one test user manually.
6. Update the database connection inside `db.php`:

    ```php
    $host = "localhost";
    $user = "root";
    $password = "your_password";
    $database = "monolith_db";

7. Place the project inside /var/www/.
8. Configure nginx root to /var/www/monolith-php/app.
9. Restart nginx. 