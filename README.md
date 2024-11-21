
# To-Do List Application

A simple and stylish **To-Do List** application built with PHP, MySQL, and modern Japanese-inspired design. This application allows users to manage their daily tasks effectively with features like task creation, editing, deletion, and marking tasks as completed.

---

## Features

- **Add Tasks:** Easily add new tasks to your to-do list.
- **Edit Tasks:** Update task details if needed.
- **Delete Tasks:** Remove tasks you no longer need.
- **Mark as Completed:** Check tasks when they’re done, and they will automatically be crossed out.
- **Responsive Design:** Works seamlessly on both desktop and mobile devices.
- **Modern Japanese-Inspired UI:** Minimalistic and elegant design for a better user experience.

---

## Folder Structure

```
todolist/
├── config/
│   ├── database/
│   │   └── todolist_db.sql     # Database schema
│   └── db.php                  # Database connection file
├── public/
│   ├── css/
│   │   └── style.css           # Application styles
│   ├── add.php                 # Add task logic
│   ├── checklist.php           # Toggle task completion
│   └── index.php               # Main application interface
├── delate.php                  # Delete task logic
├── edit.php                    # Edit task logic
```

---

## Installation Guide

### Prerequisites

1. A local server (e.g., XAMPP, WAMP, or MAMP).
2. PHP 7.4 or higher.
3. MySQL database.

### Steps

1. **Clone or Download the Repository**
   ```bash
   git clone https://github.com/yourusername/todolist.git
   ```
2. **Import Database**
   - Open your database manager (e.g., phpMyAdmin).
   - Create a new database called `todolist_db`.
   - Import the file `todolist/config/database/todolist_db.sql` into the database.

3. **Configure Database Connection**
   - Open `config/db.php`.
   - Update the following details to match your database setup:
     ```php
     $host = 'localhost';
     $dbname = 'todolist_db';
     $user = 'root';       // Your MySQL username
     $password = '';       // Your MySQL password
     ```

4. **Run the Application**
   - Place the `todolist` folder in your server’s root directory (e.g., `htdocs` for XAMPP).
   - Access the app in your browser:  
     ```
     http://localhost/todolist/public/index.php
     ```

---

## Usage

1. Open the application in your browser.
2. Use the **input field** to add new tasks.
3. Check tasks when completed to automatically cross them out.
4. Use the **Edit** and **Delete** buttons to modify or remove tasks.

---

## Screenshots

### Home Page
![Home Page](https://via.placeholder.com/600x400?text=Home+Page)

### Adding a Task
![Add Task](https://via.placeholder.com/600x400?text=Add+Task)

---

## Built With

- **Frontend:** HTML, CSS (Modern Japanese Design)
- **Backend:** PHP
- **Database:** MySQL

---

## Author

- **Your Name**  
  GitHub: [@IzziVanSatoru ](https://github.com/IzziVanSatoru/php-todolist-V1.git)  

---

## License

This project is licensed under the MIT License. See the `LICENSE` file for details.

---
