## Employee (Assignment)


### Installation Guide

- First clone or download this project.
- Rename .env.example file to .env inside your project root and fill the database information. (windows won't let you do it, so you have to open your console cd your project root directory and run mv .env.example .env )
- Open the console and cd your project root directory
- Run composer install or php composer.phar install
- Run php artisan key:generate
- Run php artisan migrate
- Run php artisan db:seed to run seeders.
- Run php artisan serve
- Now open the project in browser and go /login 
- Username: 'admin@admin.com' , Password: 'password',
- Click the employee from left menu for the assignment 

### User Manual
- Go to Employee menu (/admin/employee)
- To update any information click on the specific data
- All data of the table is editable, You need to click on data to make the field editable
- You can change page by using pagination button, your update will not lose
- When you click the Update Employee list button (Top of the table), It will update the database.

