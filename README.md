<h3>Laravel Role and Permission Project</h3>

This is a Laravel project with role and permission management functionality. The project includes features to manage users, roles, and products.
Installation

Functionalities

The project provides the following functionalities:

    Manage Users
    Manage Roles
    Manage Products


In the Manage Users section, the admin (with ID number 1) is designated as the super admin. The super admin has all permissions and can create, edit, view, and delete users. The super admin can also define whether a user is an admin or not.
Manage Roles

In the Manage Roles section, the admin can select which features can be accessed by admin or user roles.
Manage Products

In the Manage Products section, the admin can create, edit, view, and delete products
<br><br><br>
<h3>To install the required packages, run the following commands in your terminal:</h3>


    <code>composer require spatie/laravel-permission
    composer require laravelcollective/html</code>

Next, add the Spatie service provider to your config/app.php file:

    <code>'providers' => [
        // ...
        Spatie\Permission\PermissionServiceProvider::class,
    ], </code>

You can also publish the Spatie configuration file and migrations using the following command:


    <code> php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider" </code>

Finally, run the migrations to create the necessary tables:

    <code> php artisan migrate </code>

Authentication

To enable authentication in your Laravel 8 application, follow these steps:

Step 1: Install Laravel/UI

First, install the Laravel/UI package by running the following command:


    <code> composer require laravel/ui </code>

Step 2: Generate Auth Scaffolding

Next, generate the auth scaffolding using the Laravel/UI command. In this example, we will use the Bootstrap framework.


    <code> php artisan ui bootstrap --auth </code>

Finally, run the following commands to compile your assets:

    <code>npm install
    npm run dev </code>

<h3>Contributing</h3>

If you wish to contribute to this project, please fork the project on GitHub and submit a pull request. <br><br>

<h2>Mahfuz<h2>
