## About

Landing Page in Laravel 8

## Technologies

- **PHP ^7.4**
- **MySQL ^8.0.17**
- **PhpMyAdmin ^5.0.4**
- **MailCatcher**
- **Composer ^1.10.13**
- **Node ^12.19.0**
- **Laravel ^8.0**
- **JQuery ^3.5.1**
- **Bootstrap ^4.0.0**
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
