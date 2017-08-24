1. Inclucing in this project:
- Laravel 5.4
- Bootrstrap 4
- Templates: getbootstrap, prettydoc

2. Files and folders to pay attention:
- .env: defining environment for website, such as database connection, mail server,...
- routes/web.php: routing addresses to appropriate views
- resources/views/: containing all views which will display and interact with the users
- database/migrations: defining structure of data
- app/ModelName.php: defining model of data and relationship among models
- app/Http/Controllers: handling process between models and views
- public: containing css, image, js,...

3. Useful commands to work with terminal:
- "laravel new ProjectName": creating a new project with full component, and displaying at the address "ProjectName.dev" (depending on the configuration of "valet" and "nginx" on computer)
- "php artisan make:model ModelName -mc": creating a model of data and generating migration (in database/migrations) and controller (in app/Http/Controllers)
- "php artisan migrate": adding migrations and database
- "php artisan tinker": where to test php command before actually using in project
- "valet share": to share website from localhost to global