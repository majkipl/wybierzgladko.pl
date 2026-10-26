# Wybierz Gładko (Russell Hobbs) – Landing Page & Panel Zgłoszeń

[![Laravel](https://img.shields.io/badge/Laravel-8.0-red.svg)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-7.4-blue.svg)](https://www.php.net/)
[![MySQL](https://img.shields.io/badge/MySQL-8.0-orange.svg)](https://www.mysql.com/)
[![Docker](https://img.shields.io/badge/Docker-Enabled-2496ED.svg)](https://www.docker.com/)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](LICENSE)

Dedykowana aplikacja internetowa zrealizowana w ramach kampanii promocyjnej **„Wybierz Gładko”** dla marki Russell Hobbs. System łączy responsywny landing page promujący portfolio produktów (żelazka, generatory pary, parownice) z interaktywnym formularzem rejestracji zgłoszeń promocyjnych, formularzem kontaktowym oraz zabezpieczonym panelem administracyjnym i API REST.

---

## Spis treści

- [Główne funkcjonalności](#główne-funkcjonalności)
- [Stos technologiczny](#stos-technologiczny)
- [Architektura środowiska Docker](#architektura-środowiska-docker)
- [Wymagania systemowe](#wymagania-systemowe)
- [Instalacja i pierwsze uruchomienie](#instalacja-i-pierwsze-uruchomienie)
- [Domyślne dane dostępowe](#domyślne-dane-dostępowe)
- [Struktura katalogów](#struktura-katalogów)
- [Przydatne polecenia deweloperskie](#przydatne-polecenia-deweloperskie)
- [Testy jednostkowe i integracyjne](#testy-jednostkowe-i-integracyjne)
- [Uwagi techniczne](#uwagi-techniczne)

---

## Główne funkcjonalności

### 1. Część publiczna (Frontend)
- **Prezentacja oferty produktowej:** Szczegółowe widoki i landing pages dedykowane poszczególnym modelom żelazek i generatorów pary (m.in. Power Steam Ultra, One Temperature, Impact, Pearl Glide Rose, Steam Genie, Cordless One Temperature, Copper Express, Quiet Super Steam, Colour Control Supreme).
- **Formularz zgłoszeniowy (`/formularz`):** Dynamiczny formularz rejestracji uczestników akcji promocyjnej wraz z walidacją danych i dedykowanym widokiem z podziękowaniem (`/formularz/podziekowania`).
- **Formularz kontaktowy (`/kontakt`):** Obsługa zapytań użytkowników z powiadomieniami e-mail zintegrowanymi ze środowiskiem SMTP.
- **Informacje o gwarancji:** Podstrona warunków gwarancji i zasad uczestnictwa (`/gwarancja`).

### 2. Panel administracyjny (Backend)
- **Uwierzytelnianie i autoryzacja:** Dostęp oparty o role (rola administratora) z zabezpieczeniem tras middleware (`auth`, `verified`, `jwt.access`, `can:isAdmin`).
- **Zarządzanie zgłoszeniami (`/panel/zgloszenie`):** Przegląd, podgląd szczegółów i weryfikacja nadesłanych formularzy promocyjnych.
- **Zarządzanie opiniami (`/panel/opinie`):** Pełny moduł CRUD do zarządzania recenzjami i opiniami o produktach.

### 3. REST API
- **Bezpieczeństwo:** Uwierzytelnianie oparte na kluczach API oraz tokenach JWT (`tymon/jwt-auth`).
- **Endpointy:** Obsługa pobierania zgłoszeń (`/api/applications`) oraz operacji na opiniach (`/api/reviews`).

---

## Stos technologiczny

### Backend
- **PHP:** `^7.4`
- **Framework:** **Laravel 8** (`^8.0`)
- **Autoryzacja API:** `tymon/jwt-auth` (`^1.0.1`)
- **Baza danych:** MySQL `8.0` / Doctrine DBAL (`^3.2`)
- **Serwer WWW:** Apache 2.4 (mod_rewrite, prefork)

### Frontend
- **Silnik szablonów:** Laravel Blade
- **Style i UI:** Sass / SCSS, Bootstrap 4 (`^4.0.0`)
- **Skrypty:** JavaScript (ES6), jQuery (`^3.5.1`), Isotope Layout, LightSlider, Parallax.js
- **Bundler:** Laravel Mix 5 (`^5.0.1`) / Webpack

### Środowisko i konteneryzacja
- **Docker & Docker Compose**
- **Composer:** `^1.10.13`
- **Node.js:** `12.19.0` & **npm:** `6.14.8`
- **Narzędzia developerskie:** phpMyAdmin (`5.0.4`), Mailcatcher (lokalny serwer SMTP i interfejs webowy)

---

## Architektura środowiska Docker

Aplikacja jest w pełni skonteneryzowana przy użyciu Docker Compose. Składa się z następujących usług:

| Usługa | Obraz bazowy | Port lokalny (domyślny) | Opis |
|---|---|---|---|
| **httpd** | `php:7.4-apache` (custom) | `8780:80` | Aplikacja Laravel + Apache + PHP 7.4 + Composer + Node.js |
| **db_mysql** | `mysql:8.0.17` | `8786:3306` | Baza danych MySQL |
| **phpmyadmin** | `phpmyadmin:5.0.4` | `8782:80` | Webowy klient bazy danych MySQL |
| **mailcatcher** | `schickling/mailcatcher` | `8788:1080` (Web)<br>`8787:1025` (SMTP) | Przechwytywanie i podgląd testowych wiadomości e-mail |

> [!NOTE]
> Mapowanie portów na hoście można dostosować w pliku konfiguracyjnym `.env` (zmienne z prefiksem `DOCKER_*`).

---

## Wymagania systemowe

Przed uruchomieniem upewnij się, że na maszynie zainstalowane są:
- **Docker Engine** (wersja `20.10+` lub Docker Desktop)
- **Docker Compose** (wersja `v2+`)
- **Git**

---

## Instalacja i pierwsze uruchomienie

### Krok 1: Klonowanie repozytorium
```bash
git clone <adres_repozytorium> wybierzgladko.pl
cd wybierzgladko.pl
```

### Krok 2: Konfiguracja zmiennych środowiskowych
Skopiuj przykładowy plik konfiguracyjny do `.env`:
```bash
cp .env.example .env
```
W razie potrzeby dostosuj parametry w pliku `.env`, w szczególności porty kontenerów oraz dane bazy danych:
```dotenv
APP_NAME=wybierz-gladko-ss20
DOCKER_DOMAIN=${APP_NAME}

DOCKER_HTTPD_PORT=8780
DOCKER_MYSQL_PORT=8786
DOCKER_PHPMYADMIN_PORT=8782
DOCKER_MAILCATCHER_SMTP=8787
DOCKER_MAILCATCHER_WEB=8788

DB_CONNECTION=mysql
DB_HOST=${DOCKER_DOMAIN}-mysql
DB_PORT=3306
DB_DATABASE=rh_wg_ss20
DB_USERNAME=rh_wg_ss20
DB_PASSWORD=rh_wg_ss20
DB_ROOTPASSWORD=root_pass_ss20
```

### Krok 3: Budowa i uruchomienie kontenerów
Uruchom kontenery w tle z wymuszeniem budowy:
```bash
docker compose up -d --build
```

### Krok 4: Automatyczna inicjalizacja (entrypoint)
Podczas pierwszego uruchomienia kontener `httpd` automatycznie wykonuje skrypt startowy `docker/php/entrypoint.sh`, który realizuje:
1. Ustawienie uprawnień dla katalogów `storage/` i `public/`.
2. Instalację zależności PHP (`composer install`).
3. Instalację zależności JavaScript i budowę assetów produkcyjnych (`npm install && npm run build`).
4. Wygenerowanie klucza aplikacji (`php artisan key:generate`).
5. Utworzenie struktury bazy danych wraz z danymi początkowymi (`php artisan migrate:fresh --seed`).
6. Czyszczenie pamięci podręcznej frameworka (cache, konfiguracja, routing).
7. Konfigurację sekretu JWT (`php artisan jwt:secret`).
8. Utworzenie linku symbolicznego do publicznego magazynu plików (`storage`).

Postęp inicjalizacji można śledzić poleceniem:
```bash
docker compose logs -f httpd
```

---

## Domyślne dane dostępowe

Po zakończeniu inicjalizacji usługi są dostępne pod adresami:

| Aplikacja / Narzędzie | URL | Dane logowania |
|---|---|---|
| **Strona główna (Frontend)** | [http://localhost:8780](http://localhost:8780) | — |
| **Panel administracyjny** | [http://localhost:8780/panel](http://localhost:8780/panel) | Login: `admin@example.com`<br>Hasło: `asd123` |
| **phpMyAdmin** | [http://localhost:8782](http://localhost:8782) | Serwer: `wybierz-gladko-ss20-mysql`<br>Użytkownik: `rh_wg_ss20` (lub `root`)<br>Hasło: zgodne z `.env` |
| **Mailcatcher (Web UI)** | [http://localhost:8788](http://localhost:8788) | — |

---

## Struktura katalogów

```text
wybierzgladko.pl/
├── app/
│   ├── Enums/               # Typy wyliczeniowe (np. role użytkowników)
│   ├── Http/
│   │   ├── Controllers/     # Kontrolery frontendu, panelu i API
│   │   ├── Middleware/      # Filtry HTTP (m.in. JWT, autoryzacja API)
│   │   └── Requests/        # Klasy walidacji formularzy (FormRequest)
│   └── Models/              # Modele Eloquent (Application, Review, User)
├── config/                  # Pliki konfiguracyjne aplikacji
├── database/
│   ├── factories/           # Fabryki danych testowych (Faker)
│   ├── migrations/          # Migracje schematu bazy danych
│   └── seeds/               # Seadery danych początkowych
├── docker/
│   └── php/                 # Konfiguracja PHP, Apache i skrypt entrypoint.sh
├── public/                  # Publiczny katalog serwera WWW (skompilowane assety)
├── resources/
│   ├── js/                  # Źródła skryptów JavaScript
│   ├── sass/                # Arkusze stylów SCSS (front i panel)
│   └── views/               # Szablony Blade (front, back, auth, layouts)
├── routes/
│   ├── api.php              # Trasy REST API
│   └── web.php              # Trasy aplikacji webowej (front i panel)
├── tests/                   # Testy automatyczne (Feature i Unit)
├── docker-compose.yaml      # Definicja kontenerów i powiązań sieciowych
├── Dockerfile_Httpd         # Definicja obrazu kontenera aplikacyjnego
├── package.json             # Zależności i skrypty npm
└── composer.json            # Zależności PHP Composer
```

---

## Przydatne polecenia deweloperskie

Wszystkie operacje zaleca się wykonywać wewnątrz działającego kontenera `httpd`.

### Zarządzanie kontenerami
```bash
# Uruchomienie kontenerów w tle
docker compose up -d

# Zatrzymanie kontenerów
docker compose stop

# Wyłączenie kontenerów i usunięcie sieci
docker compose down

# Podgląd statusu kontenerów
docker compose ps

# Podgląd logów aplikacji w czasie rzeczywistym
docker compose logs -f httpd
```

### Polecenia Artisan (Laravel)
```bash
# Interaktywna konsola Tinker
docker compose exec httpd php artisan tinker

# Czyszczenie pamięci podręcznej (cache, config, routing, views)
docker compose exec httpd php artisan optimize:clear

# Ponowne uruchomienie migracji z seedami
docker compose exec httpd php artisan migrate:fresh --seed

# Wyświetlenie zarejestrowanych tras
docker compose exec httpd php artisan route:list
```

### Kompilacja assetów (Laravel Mix)
```bash
# Jednorazowa kompilacja w trybie developerskim
docker compose exec httpd npm run dev

# Kompilacja produkcyjna (minifikacja)
docker compose exec httpd npm run prod

# Uruchomienie obserwatora zmian plików (watch)
docker compose exec httpd npm run watch
```

### Composer
```bash
# Aktualizacja / doinstalowanie pakietu
docker compose exec httpd composer require <nazwa-pakietu>

# Przeładowanie autoloadera
docker compose exec httpd composer dump-autoload
```

---

## Testy jednostkowe i integracyjne

Projekt posiada skonfigurowany zestaw testów automatycznych oparty o PHPUnit.

Aby uruchomić testy wewnątrz kontenera:
```bash
# Za pośrednictwem narzędzia Laravel Artisan Test Runner
docker compose exec httpd php artisan test

# Bezpośrednio przez PHPUnit
docker compose exec httpd ./vendor/bin/phpunit
```

---

## Uwagi techniczne

- **Wsparcie dla starszych wydań Debiana (Bullseye EOL):**
  Obraz bazowy `php:7.4-apache` opiera się na dystrybucji Debian 11 (Bullseye), której pakiety zostały przeniesione do archiwum `archive.debian.org`. Plik `Dockerfile_Httpd` zawiera odpowiednio skonfigurowane źródła APT oraz regułę `Acquire::Check-Valid-Until "false"`.
- **Wielomodułowa instalacja Node.js:**
  Ze względu na wycofanie zewnętrznych skryptów repozytoriów dla starszych wersji Node, instalacja Node.js 12 i npm realizowana jest w Dockerfile bezpośrednio z oficjalnego obrazu `node:12.19.0` metodą multi-stage copy.
- **Prawa dostępu do plików:**
  Katalogi `storage/` oraz `bootstrap/cache/` wymagają uprawnień do zapisu przez użytkownika `www-data`. Skrypt `entrypoint.sh` dba o ich prawidłowe nadanie przy każdym starcie kontenera.
