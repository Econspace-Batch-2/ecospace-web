# ECONOMIC SPACE MAIN REPOSITORY

## 📃 Prerequisites
1. PHP 8.2 >=
2. Composer 2.7.7 >=
3. Node v20.10.0 >=

## ⚙️ How to Setup Laravel for Development
1. Clone repository by using `git clone https://github.com/Econspace-Batch-2/ecospace-web.git`
2. Install all Laravel dependencies by using `composer install`
3. Copy all needed env from `.env.example` to `.env` by using `cp .env.example .env`
4. Generate APP_KEY inside .env by using `php artisan key:generate`
5. Setup by adding credentials to the database (Can be PSQL, MySQL, etc). Here's an example:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```
6. Migrate the models to database using `php artisan migrate`
7. Install all Client Side dependencies using `npm install`
8. The setup is completed. Now running Vite for the client side using `npm run dev` (if run correctly, it should be running on `localhost:5173`)
9. Don't forget to run the Laravel too by using `php artisan serve` (If run correctly, it should be running on `localhost:8000`)
10. Try to open `localhost:8000`, and now it should be running peacefully 🎉🎉


## 🎯 Our Goals
1. Increase modularity of current economic space website
2. Migrate all style from Bootstrap and SaSS to TailwindCSS
3. Reduce redundancy and increase readability of the codebase