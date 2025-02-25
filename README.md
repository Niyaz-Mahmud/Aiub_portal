Youtube Link: https://www.youtube.com/watch?v=qnYy-t61mw0

# AIUB Portal

## Overview
AIUB Portal is a university management system designed to streamline academic and administrative tasks for students, teachers, HR personnel, and registrars. This portal follows the Model-View-Controller (MVC) architecture to maintain modularity and scalability.

## Features
### **Registrar Module**
- Manage student, teacher, and HR details
- Course management and enrollment
- Library resource management
- User account management
- Payment processing
- Leave request handling

### **HR Module**
- Payroll processing
- Leave management
- Financial information management
- Employee profile management

### **Student Module**
- Course registration and management
- Grade reports and academic records
- Payment and billing system
- Access to notices and resources
- Profile management

### **Teacher Module**
- Course offering and student management
- Grade submission
- Leave request handling
- Resource upload and management
- Profile management

## Project Structure
```
Aula_Portal/
│
├── MVC/
│   ├── Controller/
│   │   ├── Registrar/
│   │   │   ├── registar_checkout_book_controller.php
│   │   │   ├── registrar_add_HR_details_controller.php
│   │   │   ├── registrar_add_book_controller.php
│   │   │   ├── registrar_add_course_controller.php
│   │   │   ├── registrar_add_registar_details_controller.php
│   │   │   ├── registrar_add_student_details_controller.php
│   │   │   ├── registrar_add_teacher_details_controller.php
│   │   │   ├── registrar_add_user_controller.php
│   │   │   ├── registrar_change_account_info_controller.php
│   │   │   ├── registrar_course_management_controller.php
│   │   │   ├── registrar_dashboard_controller.php
│   │   │   ├── registrar_leave_status_controller.php
│   │   │   ├── registrar_manage_user_controller.php
│   │   │   ├── registrar_manage_library_resource_controller.php
│   │   │   ├── registrar_payment_controller.php
│   │   │   ├── registrar_profile_controller.php
│   │   │   ├── registrar_request_leave_controller.php
│   │   │   ├── registrar_student_info_controller.php
│   │   │   ├── registrar_student_info_details_controller.php
│   │   │   ├── registrar_teacher_info_controller.php
│   │   │   └── registrar_teacher_info_details_controller.php
│   │   ├── HR/
│   │   │   ├── hr_add_payment_controller.php
│   │   │   ├── hr_dashboard_controller.php
│   │   │   ├── hr_leave_management_controller.php
│   │   │   ├── hr_payroll_process_controller.php
│   │   │   ├── hr_profile_controller.php
│   │   │   ├── hr_student_financial_information_controller.php
│   │   │   ├── hr_teacher_info_details_controller.php
│   │   │   └── hr_teacher_info_controller.php
│   │   ├── Student/
│   │   │   ├── Student_offered_Course_controller.php
│   │   │   ├── student_course_and_results_controller.php
│   │   │   ├── student_dashboard_controller.php
│   │   │   ├── student_drop_course_controller.php
│   │   │   ├── student_enrolled_courses_controller.php
│   │   │   ├── student_grade_report_controller.php
│   │   │   ├── student_notice_controller.php
│   │   │   ├── student_pay_bill_controller.php
│   │   │   ├── student_payment_controller.php
│   │   │   ├── student_profile_controller.php
│   │   │   ├── student_registration_system_controller.php
│   │   │   └── student_resource_controller.php
│   │   ├── Teacher/
│   │   │   ├── uploads/
│   │   │   ├── teacher_accept_Drop_controller.php
│   │   │   ├── teacher_add_notice_controller.php
│   │   │   ├── teacher_dashboard_controller.php
│   │   │   ├── teacher_leave_status_controller.php
│   │   │   ├── teacher_offered_courses_controller.php
│   │   │   ├── teacher_payment_controller.php
│   │   │   ├── teacher_profile_controller.php
│   │   │   ├── teacher_publish_notice_controller.php
│   │   │   ├── teacher_registration_system_controller.php
│   │   │   ├── teacher_request_leave_controller.php
│   │   │   ├── teacher_resource_manage_controller.php
│   │   │   ├── teacher_submit_grade_controller.php
│   │   │   ├── teacher_submit_grade_controller_2.php
│   │   │   ├── teacher_upload_marks_controller.php
│   │   │   └── teacher_upload_resource_controller.php
│   │   ├── changepass_controller.php
│   │   ├── forgetpass_controller.php
│   │   ├── login_controller.php
│   │   └── resetpass_controller.php
│   ├── Model/
│   │   ├── Registrar/
│   │   │   ├── registar_checkout_book_model.php
│   │   │   ├── registrar_add_HR_details_model.php
│   │   │   ├── registrar_add_book_model.php
│   │   │   ├── registrar_add_course_model.php
│   │   │   ├── registrar_add_registar_details_model.php
│   │   │   ├── registrar_add_student_details_model.php
│   │   │   ├── registrar_add_teacher_details_model.php
│   │   │   ├── registrar_add_user_model.php
│   │   │   ├── registrar_change_account_info_model.php
│   │   │   ├── registrar_course_management_model.php
│   │   │   ├── registrar_dashboard_model.php
│   │   │   ├── registrar_leave_status_model.php
│   │   │   ├── registrar_manage_user_model.php
│   │   │   ├── registrar_manage_library_resource_model.php
│   │   │   ├── registrar_payment_model.php
│   │   │   ├── registrar_profile_model.php
│   │   │   ├── registrar_request_leave_model.php
│   │   │   ├── registrar_student_info_model.php
│   │   │   ├── registrar_student_info_details_model.php
│   │   │   ├── registrar_teacher_info_model.php
│   │   │   └── registrar_teacher_info_details_model.php
│   │   ├── HR/
│   │   │   ├── hr_add_payment_model.php
│   │   │   ├── hr_dashboard_model.php
│   │   │   ├── hr_leave_management_model.php
│   │   │   ├── hr_payroll_process_model.php
│   │   │   ├── hr_profile_model.php
│   │   │   ├── hr_student_financial_information_model.php
│   │   │   ├── hr_teacher_info_details_model.php
│   │   │   └── hr_teacher_info_model.php
│   │   ├── Student/
│   │   │   ├── Student_offered_Course_model.php
│   │   │   ├── student_course_and_results_model.php
│   │   │   ├── student_dashboard_model.php
│   │   │   ├── student_drop_course_model.php
│   │   │   ├── student_enrolled_courses_model.php
│   │   │   ├── student_grade_report_model.php
│   │   │   ├── student_notice_model.php
│   │   │   ├── student_pay_bill_model.php
│   │   │   ├── student_payment_model.php
│   │   │   ├── student_profile_model.php
│   │   │   ├── student_registration_system_model.php
│   │   │   └── student_resource_model.php
│   │   ├── Teacher/
│   │   │   ├── teacher_accept_Drop_model.php
│   │   │   ├── teacher_add_notice_model.php
│   │   │   ├── teacher_dashboard_model.php
│   │   │   ├── teacher_leave_status_model.php
│   │   │   ├── teacher_offered_courses_model.php
│   │   │   ├── teacher_payment_model.php
│   │   │   ├── teacher_profile_model.php
│   │   │   ├── teacher_publish_notice_model.php
│   │   │   ├── teacher_registration_system_model.php
│   │   │   ├── teacher_request_leave_model.php
│   │   │   ├── teacher_resource_manage_model.php
│   │   │   ├── teacher_submit_grade_model.php
│   │   │   ├── teacher_submit_grade_model_2.php
│   │   │   ├── teacher_upload_marks_model.php
│   │   │   └── teacher_upload_resource_model.php
│   │   ├── changepass_model.php
│   │   ├── forgetpass_model.php
│   │   ├── login_model.php
│   │   └── resetpass_model.php
│   ├── View/
│   │   ├── Registrar/
│   │   │   ├── registar_checkout_book_view.php
│   │   │   ├── registrar_add_HR_details_view.php
│   │   │   ├── registrar_add_book_view.php
│   │   │   ├── registrar_add_course_view.php
│   │   │   ├── registrar_add_registar_details_view.php
│   │   │   ├── registrar_add_student_details_view.php
│   │   │   ├── registrar_add_teacher_details_view.php
│   │   │   ├── registrar_add_user_view.php
│   │   │   ├── registrar_change_account_info_view.php
│   │   │   ├── registrar_course_management_view.php
│   │   │   ├── registrar_dashboard_view.php
│   │   │   ├── registrar_leave_status_view.php
│   │   │   ├── registrar_manage_user_view.php
│   │   │   ├── registrar_manage_library_resource_view.php
│   │   │   ├── registrar_payment_view.php
│   │   │   ├── registrar_profile_view.php
│   │   │   ├── registrar_request_leave_view.php
│   │   │   ├── registrar_student_info_view.php
│   │   │   ├── registrar_student_info_details_view.php
│   │   │   ├── registrar_teacher_info_view.php
│   │   │   └── registrar_teacher_info_details_view.php
│   │   ├── HR/
│   │   │   ├── hr_add_payment_view.php
│   │   │   ├── hr_dashboard_view.php
│   │   │   ├── hr_leave_management_view.php
│   │   │   ├── hr_payroll_process_view.php
│   │   │   ├── hr_profile_view.php
│   │   │   ├── hr_student_financial_information_view.php
│   │   │   ├── hr_teacher_info_details_view.php
│   │   │   └── hr_teacher_info_view.php
│   │   ├── Student/
│   │   │   ├── Student_offered_Course_view.php
│   │   │   ├── student_course_and_results_view.php
│   │   │   ├── student_dashboard_view.php
│   │   │   ├── student_drop_course_view.php
│   │   │   ├── student_enrolled_courses_view.php
│   │   │   ├── student_grade_report_view.php
│   │   │   ├── student_notice_view.php
│   │   │   ├── student_pay_bill_view.php
│   │   │   ├── student_payment_view.php
│   │   │   ├── student_profile_view.php
│   │   │   ├── student_registration_system_view.php
│   │   │   └── student_resource_view.php
│   │   ├── Teacher/
│   │   │   ├── teacher_accept_Drop_view.php
│   │   │   ├── teacher_add_notice_view.php
│   │   │   ├── teacher_dashboard_view.php
│   │   │   ├── teacher_leave_status_view.php
│   │   │   ├── teacher_offered_courses_view.php
│   │   │   ├── teacher_payment_view.php
│   │   │   ├── teacher_profile_view.php
│   │   │   ├── teacher_publish_notice_view.php
│   │   │   ├── teacher_registration_system_view.php
│   │   │   ├── teacher_request_leave_view.php
│   │   │   ├── teacher_resource_manage_view.php
│   │   │   ├── teacher_submit_grade_view.php
│   │   │   ├── teacher_submit_grade_view_2.php
│   │   │   ├── teacher_upload_marks_view.php
│   │   │   └── teacher_upload_resource_view.php
│   │   ├── changepass_view.php
│   │   ├── forgetpass_view.php
│   │   ├── login_view.php
│   │   └── resetpass_view.php
│
├── R&DME.md
└── aiub_portal.sql
```

## Technologies Used
- **Backend:** PHP (MVC Architecture)
- **Database:** MySQL
- **Frontend:** HTML, CSS, JavaScript

## Installation and Setup
### **Step 1: Clone the Repository**
```sh
 git clone https://github.com/your-repo/aiub-portal.git
 cd aiub-portal
```
### **Step 2: Configure the Database**
- Import `aiub_portal.sql` into your MySQL database.
- Update database credentials in the configuration files.

### **Step 3: Start the Server**
- Use a local server (XAMPP, WAMP) to serve the project.
- Navigate to `http://localhost/aiub_portal/` in your browser.

## Contribution Guidelines
1. Fork the repository.
2. Create a feature branch (`git checkout -b feature-name`).
3. Commit your changes (`git commit -m 'Add feature'`).
4. Push to the branch (`git push origin feature-name`).
5. Open a Pull Request for review.

## License
This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Contact
For any issues or suggestions, please reach out at niyazmahmud48@gmail.com(mailto:niyazmahmud48@gmail.com).

