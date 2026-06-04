# PHP + MariaDB Docker Project

## 📌 Description
This project is a simple web application built with PHP and MariaDB, containerized using Docker and Docker Compose.  
It demonstrates communication between a web service and a database service.

---

## 🧱 Project Structure

- `index.php` - displays list of courses from database
- `db.php` - database connection file
- `init.sql` - database initialization script
- `Dockerfile` - builds PHP Apache image
- `compose.yml` - defines multi-container setup

---

## ⚙️ Services

### Web (PHP Apache)
- Runs PHP application
- Accessible on: http://localhost:8080
- Connects to MariaDB service via hostname `db`

### Database (MariaDB)
- Stores course data
- Automatically initialized using `init.sql`
- Database name: `courses_db`

---

## 🚀 How to Run

### 1. Build and start containers
```bash
docker compose up --build