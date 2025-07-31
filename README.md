# Event Management System

This is a full-stack web application for managing events, built with **Laravel 12 (backend)** and **React.js (frontend)**. It allows users to view, create, update, and delete events. Events are organized into collapsible sections by **Today**, **Upcoming**, and **Past**.


## Features

### Backend (Laravel 12)

- RESTful API to manage events
- Seeder for 15 real-world demo events
- MySQL database integration
- Eloquent models and controllers
- Protected admin routes

### Frontend (React.js)

- Axios to fetch events from backend API
- Events grouped by:
  - 📅 Today
  - 🔮 Upcoming
  - ⏳ Past
- Collapsible panels per category
- "Refresh" button to re-fetch events
- Styled with basic CSS and responsive layout

## How to Run This Project

### Prerequisites

- Node.js
- PHP 8.1+
- Composer
- MySQL
- Git (for pushing repo)

### Backend Setup (Laravel)

```bash
cd backend-app

# Install dependencies
composer install

# Copy environment settings
cp .env.example .env

# Generate app key
php artisan key:generate

# Set your DB credentials in .env
DB_DATABASE=event_db
DB_USERNAME=root
DB_PASSWORD=

# Run migrations and seeders
php artisan migrate --seed

# Start the Laravel server
php artisan serve
```

### Front-end Setup (React)

```bash
cd frontend-app

# Install dependencies
npm install

# Start development server
npm start
```
