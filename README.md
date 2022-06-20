# ideliver API Based

Create new table using phpmyadmin


Navigate to db folder and load the ideliver.sql into the newly created table

navigate to api/classes/Common_model.php and find class (dbConfig) change the db settings to your SQL setting eg:'mysql:host=127.0.0.1;dbname=ideliver', 'root', '' '

once that is created, upload or copy the ideliver folder on to the root folder (public_html).

run the token APIs 

1. http://localhost/ideliver/api/token

2. http://localhost/ideliver/api/token/dawnwing

To run Quotes test run
navigate to public folder and run the test.php file, and the Downing test files.

# ideliver Laravel Based


run the database migration.
create token http://127.0.0.1:8000/dawning/token

run the application http://127.0.0.1:8000/quotes/create
