

# AIUB Portal

[![YouTube Demo](https://img.shields.io/badge/YouTube-Demo-red)](https://www.youtube.com/watch?v=qnYy-t61mw0)

AIUB Portal is a comprehensive university management system designed to streamline academic and administrative tasks for students, teachers, HR personnel, and registrars. Built using the **Model-View-Controller (MVC)** architecture, the portal ensures modularity, scalability, and maintainability.

---

## Features

### **Registrar Module**
- Manage student, teacher, and HR details.
- Course management and enrollment.
- Library resource management.
- User account management.
- Payment processing.
- Leave request handling.

### **HR Module**
- Payroll processing.
- Leave management.
- Financial information management.
- Employee profile management.

### **Student Module**
- Course registration and management.
- Grade reports and academic records.
- Payment and billing system.
- Access to notices and resources.
- Profile management.

### **Teacher Module**
- Course offering and student management.
- Grade submission.
- Leave request handling.
- Resource upload and management.
- Profile management.

---

## Project Structure

The project follows the **MVC architecture** and is organized as follows:

```
Aula_Portal/
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
├── R&DME.md
└── aiub_portal.sql
```

---

## Technologies Used

- **Backend:** PHP (MVC Architecture)
- **Frontend:** HTML, CSS, JavaScript
- **Database:** MySQL
- **Version Control:** Git

---

## Installation and Setup

### **Step 1: Clone the Repository**
```sh
git clone https://github.com/your-repo/aiub-portal.git
cd aiub-portal
```

### **Step 2: Configure the Database**
1. Import the `aiub_portal.sql` file into your MySQL database.
2. Update the database credentials in the configuration files (e.g., `config.php` or relevant model files).

### **Step 3: Start the Server**
1. Use a local server like **XAMPP** or **WAMP** to serve the project.
2. Navigate to `http://localhost/aiub_portal/` in your browser.

---

## Contribution Guidelines

We welcome contributions! Here’s how you can help:

1. **Fork the repository.**
2. Create a new branch for your feature or bugfix:
   ```sh
   git checkout -b feature-name
   ```
3. Commit your changes:
   ```sh
   git commit -m 'Add feature or fix'
   ```
4. Push your branch:
   ```sh
   git push origin feature-name
   ```
5. Open a **Pull Request** for review.

---

## License

This project is licensed under the **MIT License**. See the [LICENSE](LICENSE) file for details.

---

## Contact

For any issues, questions, or suggestions, feel free to reach out:

- **Email:** [niyazmahmud48@gmail.com](mailto:niyazmahmud48@gmail.com)
- **GitHub Issues:** [Open an Issue](https://github.com/your-repo/aiub-portal/issues)

---


