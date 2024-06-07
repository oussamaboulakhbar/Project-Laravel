# Laravel Project
## Technologies Utilisées

- **Frontend et Backend**:
    <div>
        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/tailwindcss/tailwindcss-original.svg" width=55 />
        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/laravel/laravel-original.svg" width=55 />
            
    </div>
- **Base de Données**:
  <div>
       <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/mysql/mysql-original.svg" width=55 />
  </div>

## Getting Started

Follow these steps to get the application up and running on your local machine.

### Prerequisites

- PHP >= 7.3
- Composer
- Node.js
- NPM
- MySQL
- XAMPP (or any other local server environment)

### Installation

1. **Clone the repository**
    ```sh
    git clone https://github.com/Oussama1975/project-laravel-Kacimi.git
    ```

2. **Navigate to the project directory**
    ```sh
    cd project-laravel-Kacimi
    ```

3. **Install PHP dependencies**
    ```sh
    composer install
    ```

4. **Install Node.js dependencies**
    ```sh
    npm install
    ```

5. **Rename `.env.example` to `.env`**
    ```sh
    mv .env.example .env
    ```

6. **Configure the `.env` file**

    Update the following lines in your `.env` file to match your database configuration:
    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3307 # use the port your MySQL is running on
    DB_DATABASE=laravel # choose any name
    DB_USERNAME=root
    DB_PASSWORD=
    ```

    Also, ensure the session driver is set to file:
    ```env
    SESSION_DRIVER=file
    ```

7. **Generate the application key**
    ```sh
    php artisan key:generate
    ```

8. **Run database migrations**
    ```sh
    php artisan migrate
    ```

9. **Create a symbolic link for storage**
    ```sh
    php artisan storage:link
    ```

10. **Serve the application**
    ```sh
    php artisan serve
    ```

### Running the Application

1. **Open a new terminal** and run the queue worker:
    ```sh
    php artisan queue:work
    ```

2. **Open another terminal** and compile the assets:
    ```sh
    npm run dev
    ```

3. **Run XAMPP** (or your preferred local server environment).

4. **Open your browser** and navigate to:
    ```
    https://localhost:8000/login
    ```
    Register if you don't have an account.

### Additional Notes

- Ensure that your MySQL server is running on the specified port (`3307` in this case).
- If you encounter any issues, check the `.env` file for any missing or incorrect configurations.
- You may need to run the commands as an administrator depending on your operating system and its configurations.

Happy coding!
