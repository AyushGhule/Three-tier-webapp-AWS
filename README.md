# QuickLoan – Three Tier Cloud Application

QuickLoan is a web-based loan application system built using a **three-tier architecture** and deployed on **AWS Cloud**.  
This project demonstrates frontend–backend–database integration along with cloud infrastructure deployment using Infrastructure as Code.

---

## Project Overview

The application allows users to submit loan applications through a web interface. The requests are processed by a backend service and stored securely in a cloud-hosted database.

The system is deployed using AWS services and follows best practices for scalable and secure cloud applications.

---

## Three Tier Architecture

### 1. Web Tier (Frontend)
- HTML and CSS used for UI
- Hosted on EC2 using Apache Web Server
- Collects loan application data from users

### 2. Application Tier (Backend)
- PHP handles business logic
- Processes form submissions
- Communicates with database securely

### 3. Data Tier (Database)
- MySQL database hosted on AWS RDS
- Stores loan application data
- Access restricted using security groups

### Request Flow
User → Web Server → PHP Backend → RDS Database

---

## AWS Services Used

- Amazon EC2 – Application hosting
- Amazon RDS (MySQL) – Managed database
- Amazon VPC – Network isolation
- Security Groups – Traffic control
- AWS CloudFormation – Infrastructure provisioning

---

## Tech Stack

- Frontend: HTML, CSS
- Backend: PHP
- Database: MySQL
- Web Server: Apache
- Cloud: AWS
- IaC Tool: CloudFormation

---

## Project Folder Structure

quickloan-three-tier-app/
│
├── frontend/
│ ├── index.html
│ └── style.css
│
├── backend/
│ ├── apply.php
│ ├── submit_application.php
│ └── db_connect.example.php
│
├── database/
│ └── init.sql
│
├── cloudformation/
│ └── vpc-ec2.yml
│
├── config/
│ └── quickloan.conf
│
└── README.md



---

## Security Practices Implemented

- Database credentials are not stored in source code
- Environment variables used for sensitive configuration
- Sensitive files excluded using `.gitignore`
- Prepared SQL statements used to prevent SQL injection
- Database access restricted via AWS security groups

---

## Deployment Overview

1. Infrastructure created using CloudFormation.
2. EC2 instances configured with Apache and PHP.
3. RDS MySQL instance configured.
4. Application files deployed to EC2.
5. Database connection configured securely.
6. Application made accessible via web browser.

---

## Interview Highlights

This project demonstrates:
- Real-world three-tier architecture
- Cloud deployment using AWS
- Infrastructure as Code usage
- Secure backend development
- End-to-end application deployment

---

## Author

Ayush Ghule
