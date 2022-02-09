PHP registration form
***
To start the project you need to:
1. Rename the __dbExample.php__ file in the __config__ folder to __db.php__.

2. Create a database, or use yours.

3. Create two tables __users__ and __country__.DB dump files are in the root of the project __db_dump_country.sql__ and __db_dump_users.sql__.
 
4. In the __country__ table, you need to add the countries that will be indicated in the form.

5. Add database settings to db.php file
>'dsn'  => 'mysql:host=```host```:3306;dbname=```db name```;charset=utf8',

>'user' => '```user```',

>'pass' => '```db password```'
