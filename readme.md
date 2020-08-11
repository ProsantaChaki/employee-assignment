#Employee (Assignment)


## Installation Guide

- First clone or download this project.
- Rename .env.example file to .env inside your project root and fill the database information. (windows won't let you do it, so you have to open your console cd your project root directory and run mv .env.example .env )
- Open the console and cd your project root directory
- Run composer install or php composer.phar install
- Run php artisan key:generate
- Run php artisan migrate
- Run php artisan db:seed to run seeders.
- Run php artisan serve
- Now open the project in browser and go /login 
- Username: 'admin@admin.com' , Password: 'password', That already set as the value of those input fields
- Click the employee from left menu for the assignment 

