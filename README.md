# Restaurant Management Platform - Laravel

[![Laravel](https://img.shields.io/badge/Laravel-10.x-FF2D20?logo=laravel)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.1+-777BB4?logo=php)](https://php.net)
[![Stripe](https://img.shields.io/badge/Stripe-Payment_Gateway-008CDD?logo=stripe)](https://stripe.com)
[![License](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE)

A comprehensive restaurant management system with multi-provider authentication, recipe management, and secure payment processing.

## ✨ Features

### 🔐 Authentication & Security
- **Multi-provider OAuth** (Google/GitHub) via Socialite
- **Role-Based Access Control** (RBAC) with middleware protection
- **Rate limiting** for API endpoints
- **Strict input validation** with Form Request classes
- **CSRF protection** and secure session management

### 🍽️ Recipe Management
- **Full CRUD operations** for recipes
- **Administrative dashboard** with data visualization
- **Image handling** for recipe photos
- **Category/tag system** for organization

### 💳 Payment Processing
- **Stripe integration** for secure transactions
- **Payment history tracking**
- **Receipt generation**
- **Subscription management**

### ⚙️ Technical Implementation
- **SOLID principles** with dependency injection
- **Service Container** architecture
- **Optimized database schema** with:
  - Proper table relationships
  - Eager loading to prevent N+1
  - Laravel Debugbar for monitoring
- **Laravel Scout** for advanced search
- **Queue system** for background jobs

## 🚀 Installation

```bash
# Clone repository
git clone https://github.com/yourusername/restaurant-platform.git

# Install dependencies
composer install
npm install

# Setup environment
cp .env.example .env
php artisan key:generate

# Configure OAuth credentials
# Add Google/GitHub keys to .env

# Configure Stripe
STRIPE_KEY=your_stripe_key
STRIPE_SECRET=your_stripe_secret

# Run migrations
php artisan migrate --seed

# Compile assets
npm run build
