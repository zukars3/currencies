# Currencies

### Displays currencies from RSS feed

![gif image showing usage](/currencies.gif)

###### In main view you can see currencies and values for latest available day, but if you click on currency, you can see its value for the past three available days

#### Change database and other settings in .env.example and rename it to .env (REMEMBER THAT IT IS A HIDDEN FILE)
#### SQL dump file is available in project root directory, but you don't actually need it, just create empty database, register it in .env file and run migrations
##### Please run following commands:
###### composer install
###### composer dump-autoload
###### php artisan key:generate
###### php artisan migrate:fresh
##### To run server run commands:
###### php artisan serve
##### To update currencies run command:
###### php artisan currencies:update


1. CurrenciesController
    * index(): calculates date of previous working day, gets currencies of last available day, paginates
    and opens home view
    * distinctCurrency(): gets values of currency for last three available days and opens currency view

1. Currency model
    * Fillable values defined
    * scopeDate gets currencies and values of specific date
    * scopeName gets values of a specific currency for all available dates
    
1. CurrenciesService
    * Implements CurrenciesServiceInterface
    * update(): Gets the feed data, makes asociative array out of it, puts it in database
   
1. Views
    * Bootstrap
