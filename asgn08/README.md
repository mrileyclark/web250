# ASGN08 – WNC Birds Active Record

## Project Purpose

This project practices the Active Record using PHP, PDO, and the `wnc_birds` MySQL database. It displays bird records and demonstrates how a class can handle database queries and convert database rows into PHP objects.

## Folder Structure

- `private/` – Database configuration, helper functions, and application classes.
- `private/classes/Database.php` – Creates the PDO database connection.
- `private/classes/Bird.php` – Contains bird properties and database methods.
- `public/index.php` – Displays database information and record counts.
- `public/birds.php` – Displays the bird directory.
- `public/bird.php` – Displays details for one bird.

## Bird Methods

- `find_all()` retrieves all birds ordered by common name and returns an array of `Bird` objects.
- `find_by_id($id)` retrieves one bird using a prepared statement and returns a `Bird` object or `null` if no record is found.
- `from_row($row)` converts a database row into a `Bird` object. Both retrieval methods use this shared method.
- `count_all()` returns the total number of bird records without hydrating each row into an object.

## Refactoring Explanation

- I updated the bird count to use Bird::count_all() and used from_row() to create Bird objects in both find_all() and find_by_id(). This keeps the code organized and avoids repeating the same code.

## Running the Project

### Locally with XAMPP

1. Start Apache and MySQL in XAMPP.
2. Create or import the `wnc_birds` database and required tables using phpMyAdmin.
3. Configure the local database credentials in `private/db_credentials.php`.
4. Open the local pages using the URLs below.

### On SiteGround

1. Upload the project files to the appropriate hosting directory.
2. Configure the hosted database connection using the hosting database credentials.
3. Ensure the hosted database contains the required tables and data.
4. Open the hosted pages using the URLs below.

Keep database credentials out of GitHub and this README. The local and hosted environments may use different database credentials.

## Navigation URLs

### Local URLs

- Assignment home: `http://localhost/web250/asgn08/public/index.php`
- Bird directory: `http://localhost/web250/asgn08/public/birds.php`
- Bird details: `http://localhost/web250/asgn08/public/bird.php?id=1`

### Hosted URLs

- Assignment home: `maryaclark.net/index.php`
- Bird directory: `maryaclark.net/birds.php`
- Bird details: `maryaclark.net/bird.php?id=1`

## Git Workflow

I used the `dev-active-record` branch to develop the assignment and committed changes incrementally. After testing the pages and reviewing the changes, the work can be merged into `main` and pushed to GitHub.
