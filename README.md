# Laravel Simplified

This repository is a clone of Laravel with some additions and changes to get started more quickly with new projects.
- Removed sanctum to prevent the creation of a `personal_access_tokens` table.
- Removed default homepage, migrations, etc. for a completely blank start.
- Added a third party debug bar showing queries, views and some other processing information.
- Added helpers for flash feedback and HTML generation.
- Added a very basic layout and a method to wrap views into it to render a full page.
- Customized the most often used stubs for files created through Artisan commands.
- Moved the views folder to the app folder to put them closer to controllers and models.
