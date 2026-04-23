# 360 Business & Services

Business services web platform built with Laravel for company formation, registrations, compliances, consulting, lead capture, career applications, and online payment collection.

## Table of Contents

- [360 Business \& Services](#360-business--services)
    - [Table of Contents](#table-of-contents)
    - [Project Description](#project-description)
    - [Tech Stack](#tech-stack)
    - [Core Features](#core-features)
    - [Service Modules](#service-modules)
    - [Installation and Usage](#installation-and-usage)
        - [Prerequisites](#prerequisites)
        - [Setup](#setup)
        - [Run in Development](#run-in-development)
        - [Build for Production](#build-for-production)
    - [Configuration](#configuration)
    - [Useful Commands](#useful-commands)
    - [Deployment Checklist](#deployment-checklist)
    - [Troubleshooting](#troubleshooting)
    - [Project Structure](#project-structure)
    - [Maintenance Notes](#maintenance-notes)
    - [🚫 License \& Usage](#-license--usage)

## Project Description

360 Business & Services is a multi-page service website designed for business and legal support workflows. It presents service offerings and captures customer intent through multiple form channels.

The platform currently includes:

- Service discovery pages across business setup, registrations, compliances, and consulting
- Contact, query, registration, and partner lead forms
- Career application submission flow
- Blog, FAQ, case study, pricing, and policy pages
- PhonePe payment initiation and callback processing
- Mail sending support for business workflows

## Tech Stack

| Layer             | Technology                                     |
| ----------------- | ---------------------------------------------- |
| Backend           | PHP 8.1+, Laravel 10                           |
| Frontend          | Blade templates, JavaScript, CSS               |
| Asset Build       | Vite 5, laravel-vite-plugin                    |
| Database          | MySQL with Eloquent ORM and Laravel migrations |
| HTTP Integrations | Guzzle                                         |
| Auth/API Package  | Laravel Sanctum                                |
| Mail              | Laravel Mailables                              |
| Payment           | PhonePe (redirect + callback flow)             |

## Core Features

- Multi-section marketing and services website with clean route grouping
- Lead capture forms for registration, contact, partner, and queries
- Career application submission endpoint
- Payment page with PhonePe gateway redirect and callback handling
- Dynamic content sections for blogs, FAQ, and case studies
- Auto-generated sitemap route for SEO indexing
- Utility endpoints for cache, route, view, and config refresh

## Service Modules

Main service categories exposed through route modules:

- Start a Business: proprietorship, partnership, OPC, LLP, private/limited company, NGO variants, e-commerce
- Registrations: GST, MSME, trade license, FSSAI, ISO, trademark, copyright, IEC, labor and related services
- Compliances: tax filing, GST returns, PF/TDS, invoicing, statutory/internal/external audits
- Consulting: notices, agreements, payroll, HR, management advisory, virtual CFO, property services
- Business support pages: about, services, pricing, guarantee, terms, privacy, contact, partner, career

## Installation and Usage

### Prerequisites

- PHP 8.1 or higher
- Composer 2+
- Node.js 18+ and npm
- MySQL 8+ (or compatible)

### Setup

1. Clone the repository and move to the project directory.
2. Install backend dependencies:

```bash
composer install
```

3. Install frontend dependencies:

```bash
npm install
```

4. Create environment and app key:

```bash
cp .env.example .env
php artisan key:generate
```

5. Update `.env` with database, mail, and app URL values.
6. Run migrations:

```bash
php artisan migrate
```

7. Link storage (if media/files are used):

```bash
php artisan storage:link
```

### Run in Development

Use separate terminals:

```bash
php artisan serve
```

```bash
npm run dev
```

Default local URL:

- http://127.0.0.1:8000

### Build for Production

```bash
npm run build
```

## Configuration

Minimum important environment keys:

```env
APP_NAME="360 Business & Services"
APP_ENV=local
APP_DEBUG=true
APP_URL=http://127.0.0.1:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password

MAIL_MAILER=smtp
MAIL_HOST=your_smtp_host
MAIL_PORT=587
MAIL_USERNAME=your_username
MAIL_PASSWORD=your_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@example.com
MAIL_FROM_NAME="360 Business"
```

Notes:

- Keep payment credentials in environment variables and do not hardcode secrets.
- Disable debug mode in production.

## Useful Commands

```bash
# Application optimization and cache management
php artisan optimize
php artisan cache:clear
php artisan config:clear
php artisan config:cache
php artisan route:clear
php artisan route:cache
php artisan view:clear

# Test suite
php artisan test
```

## Deployment Checklist

1. Set `APP_ENV=production` and `APP_DEBUG=false`.
2. Configure production database and SMTP credentials.
3. Run `composer install --no-dev --optimize-autoloader`.
4. Run `php artisan migrate --force`.
5. Run `npm ci` and `npm run build`.
6. Run `php artisan config:cache` and `php artisan route:cache`.
7. Run `php artisan storage:link` if file uploads are required.
8. Validate payment callback URL and email delivery on staging before go-live.

## Troubleshooting

- 419 or CSRF issues:
  Check session/cookie config in `.env` and ensure form tokens are present.
- CSS/JS not loading:
  Run `npm run build` (production) or `npm run dev` (local), then clear browser cache.
- Migration errors:
  Verify DB credentials and database permissions.
- Mail not sending:
  Recheck `MAIL_*` settings and test SMTP connection.

## Project Structure

```text
app/
	Http/Controllers/      # All page, form, and workflow controllers
	Models/                # Eloquent models (Register, Contact, Partner, Payment, etc.)
resources/
	views/                 # Blade templates
	js/                    # Frontend scripts
	css/                   # Frontend styles
routes/
	web.php                # Web routes and utility endpoints
database/
	migrations/            # Schema migrations
public/
	assets/                # Public static assets
```

## Maintenance Notes

- Keep routes organized by module to preserve readability in `routes/web.php`.
- Move payment and mail credentials from code to `.env`-driven configuration.
- Add/expand automated tests for form submissions and payment callback verification.

## 🚫 License & Usage

© 2026 Rittik Sadhukhan. All rights reserved.

This project is proprietary and developed for a specific client.

You are NOT allowed to:

- Copy this code
- Modify or reuse this project
- Distribute any part of this code

Without explicit written permission from the owner.
