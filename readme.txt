Q. Create a database, create `users` table in it. Then from HTML, CSS, PHP create a login form (can use predefined username, password for admin) after admin login there will be another form open for adding user, this form will contain 2 inputs one for username and another will be for password after clicking *Add User* button new user will be added to that login portal and his username, password will save in your DB's `users` table.

Following points will have grace marks.

1. Elegant login form
2. AJAX implementation for adding user 
3. User encryption for saving user's passwords in DB

=== Instructions ===

1. Create a database titled `login`.
2. Create table titled `users` in DB, can use following SQL query to create `users` table.
- `CREATE TABLE users(id int NOT NULL AUTO_INCREMENT, username varchar(255), email varchar(255), password varchar(255), PRIMARY KEY(id));`
3. Can update server URL, DB name into `db-connection.php` file.
4. Run `login.php` file first.
5. Can use following temporary login details for first time.
- Username = `admin`, Password = `admin`