# Laravel Task Manager Project

This project is a comprehensive example of a microservices architecture using Laravel and Laravel Sail for containerization. It demonstrates the integration of various services including MySQL, Redis, Memcached, MeiliSearch, MinIO, MailHog, and Selenium for a robust and scalable application. Authorization is handled by the `laravel/sanctum` package, and advanced queries are facilitated by `spatie/laravel-query-builder`.

## Technologies Used

- **Laravel/Sanctum**: For JWT-based API authorization.
- **Spatie/Laravel-Query-Builder**: Allows advanced filtering, sorting, and including of Eloquent relationships based on API requests.
- **MySQL**: Main database.
- **Redis & Memcached**: For caching mechanisms.
- **MeiliSearch**: A powerful, fast, open-source, easy to use and deploy search engine.
- **MinIO**: High performance, Kubernetes-friendly object storage.
- **MailHog**: For testing email sending functionality.
- **Selenium**: For automated testing of web applications.

## Features

- **RBAC**: Role-Based Access Control for managing user permissions.
- **Migrations**: Database schema management.
- **Many-To-Many Relationships**: Complex data relationships handled seamlessly.
- **Validation**: Robust input validation for API requests.
- **Gates & Policies**: Fine-grained access control mechanisms.
- **Observers**: For handling model events in a centralized location.
- **Resources & Collections**: Efficient data transformation for API responses.

## Getting Started

### Prerequisites

Ensure you have Docker installed on your system to use Laravel Sail.

### Installation

1. Clone the repository:
   `git clone https://github.com/shaxzodbe/task-manager`
2. Navigate into the project directory: 
   `cd <project-directory>`
3. Start the Docker environment using Laravel Sail: 
   `./vendor/bin/sail up -d`
4. Run migrations and seeders: 
   `./vendor/bin/sail artisan migrate --seed`
5. Access the application at `http://localhost:8080`.

### Configuration

- **MinIO**: Configure the `createbuckets` script as per your requirement for bucket creation.
- **MailHog**: No additional configuration required for development use.
- **Selenium**: Use the provided Selenium container for automated testing.

## Usage

Refer to the API documentation (not provided here) for detailed usage of endpoints, including authorization headers, request parameters, and response formats.

## Contributing

Contributions are welcome! Please refer to the project's issues and pull requests for areas where you can help.

## License

This project is open-sourced software licensed under the MIT license.