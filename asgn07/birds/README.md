Part 9 - Explain the design

Answer each question in two or three sentences:

1. Why does this many-to-many design use three tables instead of putting one bird_id in
bird_images?

The database uses three tables because one bird species can have multiple images, and one image may be associated with multiple bird species. The bird_images linking table connects bird records to image records using their IDs, avoiding duplicated information and allowing the many-to-many relationship to work correctly.

2. What happens to the links, image records, and physical JPEG files when a species record is
deleted?

When a species record is deleted, its associated links in the linking table are removed according to the database's configured deletion rules. The image records and physical JPEG files are not automatically deleted just because a species is removed, which helps prevent images used by other species from being lost.

3. What does the PDO DSN contain, and why is Database::$connection static?

The PDO Data Source Name (DSN) contains the information PDO needs to connect to the database, including the database driver, host, database name, and the character set and port. Database::$connection is static so the class can share one connection instead of creating a separate connection each time it is accessed.

4. What is the difference between query() and fetchColumn() in the count example?

PDO's query() executes an SQL statement and returns a statement object when the query succeeds. fetchColumn() retrieves a single column value from the next row of that result, which is useful for getting a record count from a query such as SELECT COUNT(*).


Also record the three counts from the working page. Mention any legitimate pre-existing records that
make your counts different from the supplied seed-only totals. 

After importing the SQL file again, I refreshed the page to verify that the original seed records were not duplicated. The counts displayed on my working page were:

Bird species: 8
Bird images: 17
Bird-image links: 18

The expected seed-only counts are 8 bird species, 17 bird images, and 18 bird-image links. 

Explain briefly what happened during the incorrect-database-name test. Do not include a password or raw error log containing local account
details.

I tested the application's behavior when the database name was incorrect. A message returned stating database check failed and to check the
server, credentials and imported tables. Suggested to check local PHP error log for details.
