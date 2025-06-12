# � Restaurant Management System

**A secure, multi-auth Laravel application with payment processing and advanced architecture patterns**

## ✨ Key Features
- 🔐 **Multi Authentication System**
  - Admin/POS/User roles with middleware protection
  - Social Login (Google & GitHub via Socialite)
- 💳 **Stripe Payment Integration**
- 🛡️ **Security Features**
  - Rate-Limited Routes
  - CSRF Protection
  - Password Hashing
- 🌍 **Multi-Language Support** (mcamara/laravel-localization)
- 🔍 **Advanced Search** (Laravel Scout)
- ⚙️ **Architecture**
  - Service Container Binding
  - Dependency Injection
  - Repository Pattern
- 🚀 **Performance Optimizations**
  - Eager Loading relationships
  - Route Model Binding
  - Database Indexing

## 🛠️ Tech Stack
- **Framework**: Laravel 10
- **Database**: MySQL (Migrations with relationships)
- **Payment**: Stripe API
- **Auth**: Laravel Sanctum + Socialite
- **Search**: Laravel Scout
- **DI**: Laravel Service Container

## 🚀 Installation

```bash
# Clone project
git clone https://github.com/your/repo.git && cd restaurant-system

# Install dependencies
composer install
npm install

# Configure environment
cp .env.example .env
php artisan key:generate

# Database setup
php artisan migrate:fresh --seed

# Run development server
php artisan serve
