# Event sourcing demo
## Setup
````bash
laravel new event-sourcing-demo
cd event-sourcing-demo
composer require spatie/laravel-event-sourcing
php artisan vendor:publish --provider="Spatie\EventSourcing\EventSourcingServiceProvider" --tag="migrations"
php artisan migrate
php artisan vendor:publish --provider="Spatie\EventSourcing\EventSourcingServiceProvider" --tag="config"
````
