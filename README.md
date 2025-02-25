

# 🎓 AIUB Portal - University Management System

[![YouTube Demo](https://img.shields.io/badge/▶️_Watch_Demo-FF0000?logo=youtube)](https://www.youtube.com/watch?v=qnYy-t61mw0)

A comprehensive university management platform built using PHP MVC architecture, serving students, faculty, HR, and administrative staff.

## 🌟 Key Features

### 📋 Registrar Module
- Manage student, teacher, and HR details.
- Course management and enrollment.
- Library resource management.
- User account management.
- Payment processing.
- Leave request handling.

### 👩💼 HR Module
- Payroll processing.
- Leave management.
- Financial information management.
- Employee profile management.

### 🎓 Student Portal
- Course registration and management.
- Grade reports and academic records.
- Payment and billing system.
- Access to notices and resources.
- Profile management.

### 👨🏫 Faculty Module
- Course offering and student management.
- Grade submission.
- Leave request handling.
- Resource upload and management.
- Profile management.

## 🛠️ Technology Stack

| Layer        | Technologies                                                                 |
|--------------|------------------------------------------------------------------------------|
| Frontend | HTML5, CSS3, JavaScript (ES6+), Bootstrap 5                                 |
| Backend  | PHP 7.4+ (MVC Architecture), RESTful APIs                                   |
| Database | MySQL 5.7+ (InnoDB), Database Normalization                                 |
| Security | Password hashing (bcrypt), CSRF protection, Input validation                |
| Tools    | Composer, PHPMailer, DataTables.js, Chart.js                                |

## 📂 Project Structure

```bash
Aiub_Portal/
│
├── MVC/
│   ├── Controller/
│   │   ├── Registrar/
│   │   ├── HR/
│   │   ├── Student/
│   │   ├── Teacher/
│   │   ├── changepass_controller.php
│   │   ├── forgetpass_controller.php
│   │   ├── login_controller.php
│   │   └── resetpass_controller.php
│   ├── Model/
│   │   ├── Registrar/
│   │   ├── HR/
│   │   ├── Student/
│   │   ├── Teacher/
│   │   ├── changepass_model.php
│   │   ├── forgetpass_model.php
│   │   ├── login_model.php
│   │   └── resetpass_model.php
│   ├── View/
│   │   ├── Registrar/
│   │   ├── HR/
│   │   ├── Student/
│   │   ├── Teacher/
│   │   ├── changepass_view.php
│   │   ├── forgetpass_view.php
│   │   ├── login_view.php
│   │   └── resetpass_view.php
│
├── README.md
└── aiub_portal.sql
```
```

## 🚀 Installation Guide

### Prerequisites
- Web server (Apache/Nginx)
- PHP 7.4+ with PDO, MySQLi extensions
- MySQL 5.7+ or MariaDB 10.3+
- Composer (for dependency management)

### Setup Instructions

1. Clone Repository
   ```bash
   git clone https://github.com/Niyaz-Mahmud/aiub-portal.git
   cd aiub-portal
   ```

2. Install Dependencies
   ```bash
   composer install
   ```

3. Database Configuration
   ```bash
   mysql -u root -p < aiub_portal.sql
   Update config/database.php with your credentials
   ```

4. Configure Environment
   ```php
   // config/database.php
   return [
       'host' => 'localhost',
       'database' => 'aiub_portal',
       'username' => 'root',
       'password' => ''
   ];
   ```

5. Launch Application
   ```bash
   php -S localhost:8000 -t public/
   ```
   Visit `http://localhost:8000` in your browser

## 🤝 Contributing

We welcome contributions! Please follow these guidelines:

1. Read our [Contribution Guide](CONTRIBUTING.md)
2. Set up development environment:
   ```bash
   git clone https://github.com/your-repo/aiub-portal.git
   cd aiub-portal && git checkout develop
   ```
3. Follow our coding standards:
   - PSR-12 coding style
   - Meaningful commit messages
   - Database migrations for schema changes
4. Write unit tests using PHPUnit
5. Submit PR to `develop` branch

## 📜 License

MIT Licensed - See [LICENSE](LICENSE) for full text.

## 📞 Contact

Project Maintainer: Niyaz Mahmud  
Email: [niyazmahmud48@gmail.com](mailto:niyazmahmud48@gmail.com)  
Issue Tracker: [GitHub Issues](https://github.com/Niyaz-Mahmud/aiub-portal/issues)

---

Acknowledgments  
- AIUB for academic requirements
- PHP Community for MVC best practices
- Open-source contributors for libraries used
```
