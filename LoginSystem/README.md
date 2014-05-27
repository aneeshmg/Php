Simple Login system
--------------------

* Uses PHP Sessions and MySQL database
* Value of the pass field in the users table is given by md5(rd + <set-or-entered-password>), where + means concatenation
* index.php accepts the username and password and passes them onto the login.php
* login.php connects to the database and checks the given values against the values stored
* login.php starts a session and redirects to home.php if login is successful else to index.php
* logout.php destroys the session created by login.php
* config.php contains the database configuration files required for database connection
