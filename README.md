## About

Landing Page in Laravel 6

## Technologies

- **PHP ^7.3**
- **MySQL ^8.0.17**
- **PhpMyAdmin ^5.0.2**
- **MailCatcher**
- **Composer ^1.9.0**
- **Node ^12.13.0**
- **Laravel ^6.0**
- **JQuery ^3.2**
- **Bootstrap ^4.1.3**
- **Docker**

## Setup

Copy .env form .env.example

```bash
$ cp .env .env.example
```

Modify the .env file as desired.

```bash
$ docker-compose build --no-cache

$ docker-compose up -d
```

## Run

The local server will be started on the port defined in the DOCKER_HTTPD_PORT environment variable in the .env file, e.g.: http://localhost:8080 .
