# Hello Teacher - Motivational Quotes Plugin

Inspire teachers daily with motivational quotes related to teaching, inspiration, motivation, and professional growth.

## Features

- ✅ Daily random motivational quotes for teachers
- ✅ **24+ curated quotes** about teaching and professional growth
- ✅ Category-based filtering (Teaching, Inspiration, Motivation, Professional Growth)
- ✅ Beautiful quote display with gradient background
- ✅ Easy one-click refresh to get new quotes
- ✅ Menu integration in teacher sidebar
- ✅ Database seeding for quick setup
- ✅ Free & open-source plugin

## Installation

### 1. Via Plugin Console (Admin UI)

- Go to **SiteAdmin** → **Manage Plugins**
- Click **"Stage New Plugin"**
- Select **"Local path"** method
- Choose: `custompackages/gegok12/hello-teacher`
- Click **"Stage for Installation"**
- Monitor installation via Plugin Console

### 2. Via CLI

```bash
# Run migrations
php artisan migrate

# Seed motivational quotes
php artisan db:seed --class="Gegok12\\HelloTeacher\\Database\\Seeders\\MotivationalQuoteSeeder"
```

## Usage

### For Teachers

1. Log in as a Teacher
2. Click **"Daily Inspiration"** in the sidebar menu
3. Read the motivational quote of the day
4. Click **"Get Another Quote"** to refresh
5. Use category filters to browse quotes by topic

### For Administrators

- Same features available under **"Daily Quotes"** in admin menu

## Database Schema

```sql
CREATE TABLE motivational_quotes (
    id INT PRIMARY KEY,
    quote TEXT,
    author VARCHAR(255),
    category VARCHAR(50),  -- teaching, inspiration, motivation, professional_growth
    is_active BOOLEAN DEFAULT TRUE,
    created_at TIMESTAMP,
    updated_at TIMESTAMP
);
```

## Quotes Included

### Teaching (8 quotes)
- "Teaching is the one profession that creates all other professions."
- "The art of teaching is the art of assisting discovery."
- And more...

### Inspiration (6 quotes)
- "Your attitude determines your altitude."
- "The only way to do great work is to love what you do."
- And more...

### Motivation for Teachers (8 quotes)
- "A good teacher is like a candle..."
- "Teaching is a noble profession..."
- And more...

### Professional Growth (4 quotes)
- "The capacity to learn is a gift..."
- "Teaching is learning twice."
- And more...

## Total: 26 motivational quotes

## Routes

### Teacher Portal
- `GET /teacher/inspiration` - Display random quote
- `GET /teacher/inspiration/{category}` - Display quote by category

### Admin Portal
- `GET /admin/quotes` - Display random quote
- `GET /admin/quotes/{category}` - Display quote by category

## File Structure

```
custompackages/gegok12/hello-teacher/
├── plugin.json                    # Plugin manifest
├── composer.json                  # Dependencies
├── readme.md                       # This file
├── src/
│   ├── HelloTeacherServiceProvider.php
│   ├── Models/
│   │   └── MotivationalQuote.php
│   └── Http/Controllers/
│       └── QuoteController.php
├── routes/
│   ├── admin.php
│   └── teacher.php
├── resources/
│   └── views/
│       ├── hello-teacher/
│       │   └── teacher/
│       │       └── menu.blade.php
│       └── quote/
│           └── index.blade.php
└── database/
    ├── migrations/
    │   └── 2026_09_23_000000_create_motivational_quotes_table.php
    └── seeders/
        └── MotivationalQuoteSeeder.php
```

## Testing

This is a free plugin designed for testing the plugin system. It demonstrates:
- ✅ Database migrations
- ✅ Model usage
- ✅ Controllers and routing
- ✅ Blade views
- ✅ Database seeding
- ✅ Menu hook integration
- ✅ Route registration per portal

## License

MIT

## Author

GeGoK12 Team

## Support

For issues or suggestions, please contact: team@gegok12.com

---

**Status:** ✅ Free Plugin - Ready for Testing
