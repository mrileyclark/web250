# ASGN10: Update and Delete Bird Records

## Overview

This assignment completes the **CRUD (Create, Read, Update, Delete)** operations for the bird directory application. Building on ASGN09, it adds the ability to edit existing Bird records and delete records using the existing `wnc_birds` database and `birds` table.

## Application Structure

- **`private/classes/Bird.php`** — Acts as the model and contains the database methods, including `update()` and `delete()`.
- **`public/birds.php`** — Displays the bird directory with links to view, update, and delete each record.
- **`public/bird_edit.php`** — Displays the edit form, loads the selected Bird, validates submitted values, and saves changes.
- **`public/bird_delete.php`** — Displays a deletion confirmation and processes the confirmed deletion.
- **`private/classes/Database.php`** — Handles the PDO database connection.
- **`private/initialize.php`** — Loads the application setup, classes, and database configuration.

The application continues moving toward the MVC pattern. The `Bird` class acts as the model and handles database operations, while the public pages handle form processing and display.

## Updating and Deleting Bird Records

The `Bird::update()` method uses a prepared SQL `UPDATE` statement with named placeholders and explicit `bindValue()` calls to update all six editable Bird fields. The `WHERE id = :id` condition ensures that only the selected Bird record is updated without changing its primary key.

The `Bird::delete()` method uses a prepared SQL `DELETE` statement and binds the Bird ID as an integer. It uses `rowCount()` to confirm that exactly one record was deleted. The `WHERE id = :id` condition is essential because it limits the deletion to the selected Bird rather than deleting every record in the table.

Both methods use the existing PDO database connection and keep submitted values separate from the SQL statement.

## Update and Delete Pages

The `bird_edit.php` page uses **GET** to validate the Bird ID, load the selected record, and pre-fill the form with its current values. When the form is submitted using **POST**, the page loads the Bird again, copies the submitted values into the object, validates the required common and scientific names, and calls `update()`. After a successful update, the user is redirected to the bird directory.

The `bird_delete.php` page uses **GET** to load the selected Bird and display a confirmation with its ID and common name. The confirmation form sends the ID in a hidden field using **POST**. Only after submission does the page call `delete()` and redirect to the bird directory. The Cancel link returns to the directory without changing the database.

## Running Locally

1. Start Apache and MySQL using XAMPP.
2. Use the existing `wnc_birds` database.
3. Create `private/db_credentials.php` from `private/db_credentials.example.php` and enter your local database settings.
4. Open `public/index.php` through your local server.
5. Test creating a temporary Bird, updating that same Bird, and then deleting it. This verifies the CRUD workflow while keeping the original seed records intact.

## Git Workflow

Development takes place on the `dev-update-delete` branch. After completing and testing the assignment, the branch is pushed to GitHub, merged into `main`, and the updated `main` branch is pushed.

## Project Links

- **GitHub:** [ASGN10 Repository](https://github.com/mrileyclark/web250/tree/main/asgn10)
- **Hosted Application:** [ASGN10 Bird Directory](https://maryaclark.net/web250/asgn10/public/index.php)
