# Monolithic App Deployment

This project demonstrates deployment of a simple **monolithic PHP login application** using Docker, AWS EC2 and GitHub Actions CI/CD.

The application contains a login page where user credentials are verified from a MariaDB database. After successful login, the user is redirected to a welcome page with a logout option.

---

## Technologies Used

- PHP  
- Nginx  
- MariaDB  
- Docker  
- Docker Compose  
- AWS EC2  
- GitHub Actions (CI/CD)

---

## Application Architecture

User → Nginx → PHP Application → MariaDB Database

The application is containerized using Docker and deployed on an EC2 instance. GitHub Actions is used to automate the build and deployment process.

---

## Docker Setup

The project contains:

- **Dockerfile** – builds the PHP application image  
- **docker-compose.yml** – runs multiple containers (Nginx, PHP app, MariaDB)

Containers created:

- Nginx container (web server)
- PHP application container
- MariaDB container (database)

Database data is stored using **persistent Docker volumes** so that it is not lost when containers restart.

---

## CI/CD Pipeline

GitHub Actions is used to automate deployment.

Workflow steps:

1. Developer creates a Pull Request to the `develop` branch
2. Once the PR is merged, GitHub Actions pipeline runs
3. Docker image of the application is built
4. The image is pushed to DockerHub
5. GitHub Actions connects to the EC2 instance via SSH
6. The latest Docker image is pulled
7. Containers are restarted using Docker Compose

This ensures that any approved change in the repository is automatically deployed.

---

## Project Structure

```
monolith-php
│
├── app
├── infrastructure
├── public
├── Dockerfile
├── docker-compose.yml
├── .github/workflows/deploy.yml
└── README.md
```

---

## Features

- User login authentication  
- Session handling  
- Welcome page after login  
- Logout functionality  
- Containerized deployment  
- Automated CI/CD pipeline  

---
 
