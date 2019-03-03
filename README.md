# Department-of-Computer-CMRU

----
## Important for hosting

 
> 1. Support PHP version >= 7.1 (Recommended 7.2 or higher)

> 2. Access by root permission.

----
## Deploy
1. Upload file from git repository to hosting https://github.com/Gr4vity4/Department-of-Computer-CMRU

2. Follow command on your hosting

>
   
    $ composer install
    
    $ copy .env.example .env

    $ php artisan key:generate

    # This step config your database in .env file.

    $ php artisan storage:link

    $ php artisan db:seed

    # Now check your domain, It's should to work.
