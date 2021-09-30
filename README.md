## Blog 1
A blog, scaffolded with Laravel, including an administrator dashboard

## How to install
-   Clone this repository: `git clone https://github.com/TomWGreen/blog1.git`
-   Shift focus: `cd blog1/`
-   Install the dependencies: `composer install`
-   Create a new database & create/update your `.env` file accordingly
-   Run the migrations: `php artisan migrate` 
-   Create storage links: `php artisan storage:link`
-   Create a user: `php artisan nova:user`
-   Generate an encryption key `php artisan key:generate`
-   Lunch the built-in PHP webserver `php artisan serve`
-   Login to the administration dashboard: [http://127.0.0.1:8000/admin] utilising the user details captured above
-   Insert the 'General' website information using the admin dashboard
-   Optionally, insert categories, tags & posts using the admin dashboard
-   Visit: [http://127.0.0.1:8000/] to see the blog homepage

## Directory Permissions
Directories within the `storage` and the `bootstrap/cache` directories should be writable by your web server or the application might not run correctly.