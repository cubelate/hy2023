# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

This is a Laravel 10 web application with a Laravel Admin backend management system. The project appears to be for "华业" (Huaye) company website with both public-facing pages and administrative interface.

## Key Architecture Components

- **Frontend**: Laravel Blade views with Vite for asset compilation
- **Backend**: Laravel 10 framework with PHP 8.1+
- **Admin Panel**: Laravel Admin (encore/laravel-admin) for content management
- **Database**: Standard Laravel migrations with admin tables
- **Assets**: Vite build system with Laravel plugin
- **Analytics**: Laravel Visits package for tracking

## Development Commands

### Local Development
```bash
# Start development server
php artisan serve

# Run Vite development server for assets
npm run dev

# Build assets for production
npm run build
```

### Database Operations
```bash
# Run migrations
php artisan migrate

# Seed database (if seeders exist)
php artisan db:seed

# Refresh database with seeds
php artisan migrate:fresh --seed
```

### Testing
```bash
# Run all tests
php artisan test

# Run PHPUnit directly
vendor/bin/phpunit

# Run specific test suite
php artisan test --testsuite=Feature
php artisan test --testsuite=Unit
```

### Code Quality
```bash
# Format code with Laravel Pint
vendor/bin/pint

# Fix code style issues
vendor/bin/pint --dirty
```

### Cache and Optimization
```bash
# Clear all caches
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Optimize for production
php artisan optimize
```

### Laravel Admin
```bash
# Publish Laravel Admin assets
php artisan vendor:publish --tag=laravel-admin-assets

# Install Laravel Admin (already configured)
php artisan admin:install
```

## Project Structure

### Models
Located in `app/Models/`:
- `HyCompany.php` - Company information
- `HyNew.php`, `HyNewOld.php` - News/articles management
- `HyTeam.php` - Team members
- `HyHonor.php` - Company honors/awards
- `HyFormBp.php`, `HyFormReservation.php`, `HyFormResume.php` - Form submissions
- `HyIndexNew.php` - Homepage news content

### Admin Panel
Located in `app/Admin/`:
- `Controllers/` - Admin interface controllers
- `bootstrap.php` - Admin configuration bootstrap
- `routes.php` - Admin-specific routes

Admin panel is accessible and configured with Chinese language support ("华业管理后台").

### Routes
- `routes/web.php` - Public website routes (company pages, news, team, etc.)
- `routes/api.php` - API endpoints
- `app/Admin/routes.php` - Admin panel routes

### Public Pages
Based on routes, the site includes:
- Homepage (`/`)
- Case studies (`/case.html`, `/case2.html`)
- About page (`/about.html`)
- Contact (`/contact.html`)
- Services (`/empower.html`)
- Team pages (`/team.html`, `/team2.html`)
- News section (`/news.html`, `/news2.html`)
- News details (`/news_detail_{id}.html`)

### Views and Assets
- `resources/views/` - Blade templates
- `resources/htmls/` - Additional HTML resources
- Public assets served from `public/`
- Vite handles asset compilation (currently minimal configuration)

## Database

Uses standard Laravel migrations with additional tables for:
- Laravel Admin system (`admin_*` tables)
- Laravel Visits tracking (`visits` table)
- Personal access tokens (Sanctum)

## Special Considerations

1. **Laravel Admin**: The project uses a Chinese admin interface. Admin controllers and models are separate from main application logic.

2. **Visits Tracking**: Uses `awssat/laravel-visits` package for analytics.

3. **Wang Editor**: Custom admin extension for rich text editing (`laravel-admin-ext/wang-editor`).

4. **Static-style URLs**: Routes use `.html` extensions for SEO-friendly URLs.

## Environment Setup

1. Copy `.env.example` to `.env`
2. Configure database connection in `.env`
3. Run `php artisan key:generate`
4. Run `composer install`
5. Run `npm install`
6. Run migrations: `php artisan migrate`
7. Set up Laravel Admin if needed: `php artisan admin:install`

## Testing Configuration

PHPUnit is configured with:
- Unit tests in `tests/Unit/`
- Feature tests in `tests/Feature/`
- Test environment uses array drivers for cache, sessions, etc.
- Database testing can use SQLite in-memory (commented out in config)