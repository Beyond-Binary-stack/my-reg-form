# Registration Form Project

A PHP-based user registration and authentication system with a modern UI.

## Features

- User registration with validation
- User login/logout functionality
- User profile management
- Responsive design with Bootstrap
- Database integration with MySQL

## Project Structure

```
RegForm/
├── images/          # Static images (logo, phone)
├── layout/          # Header and footer templates
├── tools/           # Database connection utilities
├── index.php        # Home page
├── register.php     # Registration form
├── login.php        # Login form
├── profile.php      # User profile page
├── logout.php       # Logout functionality
└── README.md        # This file
```

## Database Setup

The project uses MySQL database. You need to create the following table:

```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    phone VARCHAR(20) NOT NULL,
    address TEXT NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME NOT NULL
);
```

## Deployment Options

### Option 1: InfinityFree (Recommended - Free)
1. Sign up at [infinityfree.net](https://infinityfree.net)
2. Create a new hosting account
3. Upload all project files to the `htdocs` folder
4. Your database is already configured in `tools/db.php`

### Option 2: 000WebHost (Free)
1. Sign up at [000webhost.com](https://000webhost.com)
2. Create a new website
3. Upload files via File Manager
4. Create MySQL database and update `tools/db.php`

### Option 3: Shared Hosting (Paid)
1. Choose a hosting provider (Hostinger, Bluehost, etc.)
2. Upload files via FTP or File Manager
3. Create MySQL database
4. Update database credentials in `tools/db.php`

## Configuration

Update the database connection details in `tools/db.php`:

```php
$servername = 'your_database_host';
$user = 'your_database_username';
$pass = 'your_database_password';
$db_name = 'your_database_name';
```

## Requirements

- PHP 7.0 or higher
- MySQL 5.6 or higher
- Web server (Apache/Nginx)

## Security Notes

- Change default database credentials
- Use HTTPS in production
- Consider implementing CSRF protection
- Add rate limiting for login attempts 