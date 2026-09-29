# Unique File Manager

A small PHP/MySQL file manager (2020 learning project). Users sign up, log in,
upload files and see their own files on a dashboard. Duplicate uploads are
detected with a CRC32 hash of the file content. The app lives in `cloud/`.

## Setup

1. Install PHP and MySQL/MariaDB (for example XAMPP) and put the repo under the
   web root.
2. Create an empty database named `data` and import the structure:

   ```sh
   mysql -u root -e "CREATE DATABASE data CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci"
   mysql -u root data < database/schema.sql
   ```

   `database/schema.sql` contains the table structure only (`files`, `register`,
   `relation`). It contains no user data.
3. Check the connection settings in `cloud/connect.php` (default: `localhost`,
   user `root`, empty password, database `data`) and change them for your
   environment. Do not commit real credentials.
4. Open `cloud/signup.php` in the browser and create your own account.

## Note

Earlier versions of this repository included database dumps. They were removed
from the entire history on 2026-09-29.
