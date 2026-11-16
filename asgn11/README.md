# WEB-250 ASGN11
## Members, Login, and Bird Permissions

### Application Overview

The WNC Birds application is a bird directory that allows visitors to view bird records and members to manage them. Users can register for an account, log in, and log out. Logged-in members can create, update, and delete bird records.

### Visitor and Member Permissions

**Visitors (not logged in):**
- View the bird directory.
- View individual bird details.
- Register for an account.
- Log in to an existing account.
- Cannot create, update, or delete bird records.

**Members (logged in):**
- View the bird directory and individual bird details.
- Create new bird records.
- Update existing bird records.
- Delete bird records.
- Log out of their account.

### Composer

Composer is used to manage the application's PHP dependencies. The application uses the `vlucas/phpdotenv` package to load environment variables from the `.env` file. Composer's autoloader loads the installed dependencies when the application starts.

### Environment Variables and GitHub

Database credentials are stored in a local `.env` file instead of being written directly into the application code. The `.env` file is listed in `.gitignore` so it is not committed to GitHub. This helps protect database usernames, passwords, and other private configuration information.

### Password Protection

Member passwords are protected using PHP's `password_hash()` function before being stored in the database. During login, `password_verify()` checks the submitted password against the stored password hash. Plain-text passwords are never stored in the database.

### Development Branch

Development for this assignment takes place on the `dev-users-login` branch.

## Running Locally

1. Start Apache and MySQL using XAMPP.
2. Use the existing `wnc_birds` database and its `birds` table.
3. Make sure the `members` table exists with the required fields.
4. Configure the database credentials in the `.env` file.
5. Install Composer dependencies if they are not already installed.
6. Start the PHP development server from the `asgn11` directory:

   ```bash
   /Applications/XAMPP/xamppfiles/bin/php -S localhost:55000 -t public
   ```

7. Open the application at `http://localhost:55000/index.php`.
8. Register a new member account and test logging in and logging out.
9. Test that visitors cannot access the Create, Update, or Delete pages directly.
10. Log in and verify that members can create, update, and delete Bird records.

## Git Workflow

Development takes place on the `dev-users-login` branch. After completing and testing the assignment, the branch can be pushed to GitHub, merged into `main`, and the updated `main` branch pushed.

## Project Links

- **GitHub:** https://github.com/mrileyclark/web250/tree/main/asgn11
- **Hosted Application:** https://maryaclark.net/web250/asgn11/public/index.php
