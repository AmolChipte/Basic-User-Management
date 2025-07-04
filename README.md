# Basic User Management (Laravel CRUD App)

A simple user management system built using **PHP Laravel Framework**. This project demonstrates core **CRUD operations**: Create, Read, Update, and Delete — along with Laravel validation, Blade templating, and route handling.

---

## Features

- Add New Users
- List All Users
- Edit User Information
- Delete Users with Confirmation
- Form Validation with Error Handling
- Flash Messages for Success Feedback
- Clean Table & Form Design with Basic CSS

---

## Tech Stack

- **PHP** 8.x+
- **Laravel** 10.x
- **MySQL** or SQLite
- **Blade Templates**
- **Vanilla CSS** (no npm or Tailwind used)

---

## Installation

1. Clone the repository:

```bash
git clone https://github.com/AmolChipte/Basic-User-Management.git
cd Basic-User-Management
```

2. Install PHP dependencies:

```bash
composer install
```

3. Create a copy of `.env`:

```bash
cp .env.example .env
```

4. Generate the application key:

```bash
php artisan key:generate
```

5. Set your database credentials in `.env` / ( You Can Export Database crud_app_db ):

```env
DB_DATABASE=your_db_name
DB_USERNAME=root
DB_PASSWORD=your_password
```

6. Run the migrations:

```bash
php artisan migrate
```

7. Serve the app:

```bash
php artisan serve
```

Then visit: [http://localhost:8000](http://localhost:8000)

---

## Project Structure

- `routes/web.php` – Web routes for user actions
- `app/Http/Controllers/UserController.php` – Handles user logic
- `resources/views/` – Blade templates for form and table
- `database/migrations/` – User table schema

---

## Screenshots

- HOME
  ![home](https://github.com/user-attachments/assets/fc75d72e-f85e-4016-8f6b-46ad10d3d23b)
  
- LIST OF USERS
  ![list](https://github.com/user-attachments/assets/359fd086-8fda-4541-8e5b-5e8476aa5751)

- ADD USER
  ![add](https://github.com/user-attachments/assets/cda6ba14-174e-4118-8cae-a849f717efcc)

- UPDATE USER
  ![update](https://github.com/user-attachments/assets/dcf35de9-8645-4ca7-938b-6dc3ac314250)

- DELETE USER
  ![delete](https://github.com/user-attachments/assets/9ff4f815-6c5b-443a-965d-eb37a0139179)

---

## Contributing

Pull requests are welcome! Feel free to improve styling, add features, or fix bugs.

---

## License

This project is open-source and free to use under the [MIT License](LICENSE).

---

> Created with ❤️ using Laravel by [Amol Chipte](https://github.com/AmolChipte)
