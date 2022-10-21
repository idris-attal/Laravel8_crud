## Laravel 8 CRUD EXAMPLE

This is Laravel 8 CURD tutorial where you can see a simple demo of how CRUD Application works in Laravel. 
This application has A sample Form of Student Registration along with the subject that he want to take and the subject names are in the form of dropdowns.


## Configuarations
    1- Configure your database in the .env file
    2- Run "composer install"
    3- Generate the application key via this command : "php artisan key:generate"
    4- Run migrations via this command: "php artisan migrate"


## API EndPoints
    Post GET All http://localhost:8000/students
    Post GET Single http://localhost:8000/students/1
    Post POST Create http://localhost:8000/students
    Post PUT Update http://localhost:8000/students/1
    Post DELETE destroy http://localhost:8000/students/1