## Laravel App for Everytic

Simple Laravel app for Everytic

### Requirements
1. The following features must be completed:
  
    a. List all users currently stored in the database
 
    b. Ability to add new users
  
    c. Ability to delete existing users
    
2. Create the routes for each of the above features
3. Implement a respository design pattern with models when interfacing with the database
4. Ensure the code in the controllers and repositories are tested using phpunit.

Getting Started
---------------

#### Via Cloning The Repository:

```bash
# Get the project
git clone https://github.com/adeadedoja/developer-test.git

# Change directory
cd developer-test

# Create a database
# And update .env file with database credentials
# DB_CONNECTION=mysql
# DB_HOST=127.0.0.1
# DB_DATABASE=
# DB_USERNAME=root
# DB_PASSWORD=

# Install Composer dependencies
composer install

# Install npm dependencies
npm install

# Run npm script
npm run dev

# Run your migrations
php artisan migrate

# See the DB 
php artisan db:seed --class=UsersTableSeeder

# Serve
php artisan serve
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
