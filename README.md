# Online Learning Platform

## Overview

The Online Learning Platform is a robust e-learning solution developed using the PHP/Symfony framework with Twig templates. It empowers both instructors and students by offering features such as user registration, authentication, course creation, enrollment, learning path management, and progress tracking. The platform also includes an admin dashboard for administrative tasks.

## Key Features

1. **User Registration and Authentication:**
   - Instructors and students can seamlessly register and authenticate on the platform.

2. **Course Creation, Uploading, and Management for Instructors:**
   - Instructors enjoy the capability to create, upload, and manage courses effortlessly.

3. **Enrollment, Learning Path, and Progress Tracking for Students:**
   - Students can easily enroll in courses, follow a structured learning path, and monitor their progress.

## Technology Stack

1. **Symfony 6.3 Framework:**
   - Leveraged Symfony 6.3 as the core framework for efficient development.

2. **Twig for Templates:**
   - Utilized Twig for crafting templates and rendering views.

3. **Symfony Maker Bundle:**
   - Employed the Symfony Maker Bundle for streamlined creation of entities, controllers, migrations, and other essential components.

4. **CRUD Operations:**
   - Implemented comprehensive CRUD operations for each entity where necessary.

5. **Symfony Forms:**
   - Integrated Symfony Forms to facilitate user-friendly form interactions within the application.

6. **Composer:**
   - Managed project dependencies effectively using Composer.

7. **MySQL Database:**
   - Established a MySQL database to store user, course, and other relevant data.

8. **Docker Compose:**
   - Implemented a Docker Compose file to create containers, ensuring a consistent development environment.

9. **Doctrine ORM:**
   - Leveraged Doctrine ORM for seamless database interactions, including migration creation and application.

10. **Config Files:**
    - Organized configuration settings using YAML files within the `config` directory.

## Getting Started

### Prerequisites

Before diving into the platform, ensure the following prerequisites are met:

- **PHP:** Have PHP installed on your local machine.
- **Docker:** Install Docker and Docker Compose on your local machine.
- **Composer:** Ensure Composer is installed to manage project dependencies.



### Installation


1. Clone the repository:

   ```shell
   git clone https://github.com/demarillacizere/online-learning-platform.git
   cd online-learning-platform

### Using Symphony

- Run your Composer to install all dependencies
   ```shell
   composer install

- Create a `.env` file and copy environment variables for your database in the `.env.example` file and ensure you assign the correct value.

### Using Docker

- Run ```docker-compose up --build```

2. Create your database

   ```shell
   php bin/console database:create

3. Create your database migrations:

   ```shell
   php bin/console make:migration

4. Run the database migrations to create the required tables:

   ```shell
   php bin/console doctrine:migrations:migrate


## Usage with Symfony Server

1. Start the development server:

   ```shell
   symfony server:start

2. Access the site on `http//localhost:8000` after serving the symfony server.

## Usage with Docker
- Access the site on `http//localhost:1001` 
- Access PHP MyAdmin server on `http//localhost:1002` and use the correct creedentials to login.

## Contributing

Contributions are welcome! Feel free to open an issue or submit a pull request.

## License

This project is licensed under the [Apache](license) License.
