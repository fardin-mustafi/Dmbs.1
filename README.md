Hello
# DBMS Project (Login & Signup System)

A simple DBMS course project that implements user registration and login using **PHP + MySQL**, with a clean HTML/CSS frontend and basic JavaScript features.

## ✨ Features
- User Signup (Registration)
- User Login (Authentication)
- Database connection using `db.php`
- Password visibility toggle (JavaScript)
- Basic success/error handling

## 🧰 Tech Stack
- Frontend: HTML, CSS, JavaScript
- Backend: PHP
- Database: MySQL

## 📁 Project Structure
- `index.html` — Main/landing page (login page structure)
- `login.php` — Login functionality (server-side)
- `signup.php` — Signup functionality (server-side)
- `db.php` — Database connection script
- `css/` — Stylesheets
- `js/` — JavaScript files (e.g., password toggle)
- `signup/` — Signup page UI/assets (if any)

## ⚙️ Setup & Run (Localhost)
### Requirements
- XAMPP / WAMP / Laragon (any PHP + MySQL server)

### Steps
1. Clone or download the project
2. Move the project folder into:
   - XAMPP: `C:\xampp\htdocs\`
3. Start **Apache** and **MySQL** from XAMPP Control Panel
4. Create a database in phpMyAdmin (example: `dbms_project`)
5. Update database credentials inside `db.php`:
   - host, username, password, database name
6. Import your SQL table (if you have `.sql` file).  
   *(Recommended: create a `sql/` folder and add schema there.)*
7. Open in browser:
   - `http://localhost/<project-folder>/index.html`

## 🔐 Notes
- Don’t upload real database passwords or secrets in public repos.
- If you add SQL schema, put it in `sql/schema.sql` for easy setup.

## 👤 Author
**Fardin Mustafi**
