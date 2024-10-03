# TaskMate

**TaskMate** is a dynamic to-do list web application built using **HTML**, **CSS**, **JavaScript**, and **PHP**. The application helps users manage tasks efficiently by prioritizing them, tracking their status, and organizing them by date. TaskMate also provides detailed reporting and customization options like themes.

## Project Overview

The landing page includes:
- **Signup** and **Signin** forms for new and returning users.
- A bottom section displaying **all members' info**.

After signing in, users are taken to their task dashboard which displays:
- **Tasks**: Each task is listed with its:
  - **Priority**: Tasks are color-coded:
    - **Low** (green)
    - **Medium** (yellow)
    - **High** (red)
  - **Status**: Tasks are arranged in order:
    - **Pending**
    - **On Progress**
    - **Completed**
  - **Date**: The due date for the task.
  - **Detail & Description**: A brief about the task.
  - **Edit/Delete buttons** for managing tasks.

## Features

### Task Management
- **Add, Edit, Delete Tasks**: Users can manage their tasks easily using the provided options.
- **Prioritization**: Tasks are arranged from **High** to **Low** priority.
- **Status Updates**: Track task progress as **Pending**, **On Progress**, or **Completed**, arranged in this order.
  
### Side Toggle Menu
Users can access the following through a side toggle menu:
- **Add Task**: Quickly add new tasks.
- **Report/History**:
  - View task history and progress.
  - Access reports for **Daily**, **Weekly**, **Monthly**, and **Yearly** tasks with their current statuses.
  - A **Calendar** to filter tasks by specific dates.
- **Manage Account**: Update user account information.
- **Signout**: Log out of the system.

### Calendar
A **calendar** on the main page helps users arrange and view their tasks based on specific dates.

### Theme Picker
TaskMate offers 5 customizable themes:
- **Default**: Burgundy
- **Pink**
- **Blue**
- **Green**
- **Dark**

Users can switch themes according to their preferences.

## Installation

To set up and run the TaskMate project on your local machine, follow these steps:

### Prerequisites

Ensure you have the following installed on your system:
- **PHP**: TaskMate runs on a PHP backend, so you'll need a PHP server. I used XAMPP but you can also use WAMP or LAMP.
- **MySQL**: TaskMate uses a database to store user information and tasks.
- **Web Browser**: Any modern browser (Chrome, Firefox, Edge, etc.).

### Steps

1. **Clone the Repository**:
   - Clone this repository to your local machine using:
     ```bash
     git clone https://github.com/Yordi-Dereje/TaskMate.git
     ```

2. **Set Up the Database**:
   - Import the `database.sql` file into your MySQL database. You can do this via phpMyAdmin or the MySQL command line.
   - Create a new database, and import the provided SQL file:
     ```bash
     mysql -u username -p database_name < database.sql
     ```

3. **Configure Database Connection**:
   - In the project directory, locate the `config.php` file and update the database credentials:
     ```php
     <?php
     $host = "localhost";  // Database host
     $user = "root";       // Database username
     $pass = "";           // Database password
     $db   = "taskmate";   // Database name
     ?>
     ```

4. **Run the Application**:
   - Start your PHP server (XAMPP, WAMP, or LAMP) and move the project folder to the server’s `htdocs` directory (for XAMPP/WAMP users).
   - Open your web browser and visit `http://localhost/taskmate/`.

5. **Access the Application**:
   - The landing page should now load, where you can **Sign Up** or **Sign In** to manage your tasks.


## Usage

1. **Signup** or **Signin** to access your TaskMate dashboard.
2. **Add Tasks** with details such as priority, description, and due date.
3. **Edit/Delete Tasks** as needed.
4. Use the **Side Toggle** to add new tasks, view task history/reports, manage your account, or sign out.
5. **Arrange Tasks** by specific dates using the calendar feature.
6. Customize your experience using the **Theme Picker** to choose your preferred theme.

## Task Reports
The **Reports** feature provides detailed insights into your tasks:
- View tasks over a range of **Daily**, **Weekly**, **Monthly**, and **Yearly** periods.
- Track progress and statuses of your projects.

## Account Management
Through the **Manage Account** section, users can update their personal information and preferences, ensuring that their account details are always up-to-date.

## Signout
Use the **Signout** option from the side toggle menu to securely log out of the TaskMate application.
