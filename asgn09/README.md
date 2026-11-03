# WEB 250 - asgn09: Create a Record

This starter is based on the completed reference version of asgn08. It already contains the read-only Active Record methods and pages so everyone can begin asgn09 from roughly the same structure.

## Assignment goal

Add the **Create** portion of CRUD using:

- `public/bird_new.php`
- a `Bird::create()` instance method
- a PDO prepared `INSERT`
- named placeholders and `bindValue()`

## Database

Use the existing `wnc_birds` database and `birds` table from the previous assignments.

## Credentials

Copy:

```text
private/db_credentials.example.php
```

to:

```text
private/db_credentials.php
```

Then enter the database settings for your own local or hosted environment.

`private/db_credentials.php` is ignored by Git and must not be committed.

## Student README TODO

Before submitting asgn09, replace or expand this README with the information requested in the assignment instructions, including your create flow, prepared-statement explanation, MVC direction, Git branch workflow, and final URLs.

# ASGN09: Create a Record with Active Record

## Overview
This assignment adds the **Create** operation to the Active Record-style bird directory application. It uses the existing `wnc_birds` database and `birds` table to insert new bird records.

## Application Structure
- **`private/classes/Bird.php`** — Acts as the model. It contains the database read methods and the new `create()` instance method.
- **`public/birds.php`** — Displays the bird directory and includes a link to create a new bird.
- **`public/bird_new.php`** — Displays the new-bird form, processes submitted values, performs basic required-field validation, and redirects to the directory after a successful insert.
- **`private/classes/Database.php`** — Handles the PDO database connection.
- **`private/initialize.php`** — Loads the application setup, classes, and database configuration.

The application is moving toward the MVC pattern, but it is not a complete MVC implementation yet. The `Bird` class acts as the model, while `birds.php` primarily displays the directory. The form-processing logic remains in `bird_new.php`.

## Creating a Bird Record
The `create()` method uses a PDO prepared `INSERT` statement with named placeholders. It binds the Bird object's properties to the placeholders using `bindValue()`, then executes the statement. This separates submitted values from the SQL structure and helps protect against SQL injection. After a successful insert, the method stores the new database ID in the Bird object using `lastInsertId()`.

The form requires a common name and scientific name. After a successful creation, the application redirects to `birds.php`, where the new record appears in the directory.

## Running Locally
1. Use XAMPP and make sure Apache and MySQL are running.
2. Use the existing `wnc_birds` database.
3. Create `private/db_credentials.php` from `private/db_credentials.example.php` and enter your local database settings.
4. Open `public/index.php` through your local server.
5. Test the bird directory, create form, new record, details link, and a bird name containing an apostrophe.

## Git Workflow
Development takes place on the `dev-create` branch. After testing the assignment, the branch is pushed to GitHub, merged into `main`, and the updated `main` branch is pushed.

## Project Links
- **GitHub:** https://github.com/mrileyclark/web250/tree/main/asgn09
- **Hosted application:** https://maryaclark.net/web250/asgn09/public/index.php
