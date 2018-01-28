# laravel-stock-market

## Exercise
The investor John T. Thompson has shares in companies around the world. 
Since John likes to travel he is also constantly searching for new opportunities. 
To be able to compare stock prices  over different markets from anywhere in the world, John would like 
to have a web application that  helps him to decide which stocks are interesting for him.  

Currently John´s focus is on stocks that are traded on the following markets::
1. New York Stock Exchange  
1. London Stock Exchange 
1. Hong Kong Stock Exchange
1. Shanghai Stock Exchange
1. Deutsche Börse Frankfurt Your task consists of multiple steps. 

Please read the whole document before beginning to avoid  any surprises while y ou work on the exercise. 

### The business logic 
Please help John building a n application for him that can do the following things:
1. Possibility to create new company profiles in the system 
1. Add company stocks and corresponding prices to an exchange market  
    1. no historical values need to be saved (one current stock value is sufficient)  
    1. all markets will use the same currency 
1. Display reports of t he stock and company exchanges (details on the second part)  

For the implementation, you can use following, simplified context for financial markets:

Companies can trade different types of stock (typically common stock and preferred stock) on  multiple markets. 
The company can choose individually per market, whether both, neither or just  one of the stock types is traded. 
Each market has their own trade value for stock traded on their exchange

### The frontend 
John is a businessman a nd does not know how to access databases. 
Please help him by creating  multiple forms so that he is able to enter company profiles and add stock to the company and  markets. 
Since he would also like to see different key figures please create dashboards showing  the following information.   
1. Overview of all companies and what stock they have on which markets  
1. Overview of all stock exchanges and what companies stock is traded there  
1. The possibility to see the currently highest trade value and corresponding markets 


## Installation

```shell
git clone https://github.com/javadmalek/laravel-stock-market.git
cd laravel-stock-market
composer install
```

```shell
php artisan key:generate
Create a database and inform .env
php artisan migrate --seed      to create and populate tables
php artisan serve               to start the app on http://localhost:8000/
```
- Config .env file

## Project structure
   
       .
       ├── app                          # The app directory, as you might expect, contains the core code of your application. 
       │    └── Console                 # The Events directory, as you might expect, houses event classes. Events may be used to alert other parts of your application that a given action has occurred, providing a great deal of flexibility and decoupling. 
       │    └── Events                  # This directory does not exist by default, but will be created for you by the event:generate and  make:event Artisan commands.
       │    └── Exceptions              # The Exceptions directory contains your application's exception handler and is also a good place to place any exceptions thrown by your application. 
       │    └── Http                    # The Http directory contains your controllers, middleware, and form requests. 
       │    └── Jobs                    # The Jobs directory, of course, houses the queueable jobs for your application. Jobs may be queued by your application or run synchronously within the current request lifecycle.
       │    └── Listeners               # This directory does not exist by default, but will be created for you if you execute the  event:generate or make:listener Artisan commands. 
       │    └── Policies                # This directory does not exist by default, but will be created for you if you execute the make:policy Artisan command. 
       │    └── Providers               # The Providers directory contains all of the service providers for your application. 
       │
       ├── bootstrap                    # The bootstrap directory contains a few files that bootstrap the framework and configure autoloading, as well as a cache directory that contains a few framework generated files for bootstrap performance optimization. 
       │
       ├── config                       # The config directory, as the name implies, contains all of your application's configuration files.
       │
       ├── database                     # The database directory contains your database migration and seeds. 
       │
       ├── public                       # The public directory contains the front controller and your assets (images, JavaScript, CSS, etc.). 
       │
       ├── resources                    # The resources directory contains your views as well as your raw, un-compiled assets such as LESS, SASS, or JavaScript. 
       │
       ├── storage                      # The storage directory contains your compiled Blade templates, file based sessions, file caches, and other files generated by the framework. This directory is segregated into app, framework, and  logs directories.
       │    └── storage/app/public      # The storage/app/public directory may be used to store user-generated files, such as profile avatars, that should be publicly accessible. 
       │
       ├── Tests                        # The tests directory contains your automated tests. An example PHPUnit is provided out of the box. 
       │
       ├── Vendor                       # The vendor directory contains your Composer dependencies.
       │
       ├── CONTRIBUTORS.md             
       ├── composer.json 
       ├── server.php      
       ├── README.md
       └── TODO.md
