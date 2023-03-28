# laravel-user-auth

A brief description of your project goes here.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

- PHP 8 or higher
- Composer
- Node.js and npm

### Installing

1. Clone the repository: `git clone https://github.com/tr-shishir/laravel-user-auth`
2. Navigate to the project directory: ```cd your-project```
3. Install PHP dependencies: ```composer install```
4. Install JavaScript dependencies: ```npm install```
5. Rename the `.env.example` file to `.env`
6. Generate a new application key: `php artisan key:generate`
7. Set up your database in the `.env` file: `DB_CONNECTION=mysql` `DB_HOST=127.0.0.1` `DB_PORT=3306` `DB_DATABASE=your_database_name` `DB_USERNAME=your_database_username` `DB_PASSWORD=your_database_password`
8. Migrate the database: `php artisan migrate --seed`
9. Compile the assets: `npm run dev`
10. Start the development server: `php artisan serve`


### Admin Access
`User` : `Admin`
`Email` : `admin@admin.com`
`Password` : `12345678`

