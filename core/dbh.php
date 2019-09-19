<?php
$dbh = mysqli_connect('localhost', 'root', '', 'teamstack');

// this check for errors and if there are any, it kills the database so everything stop working
if (mysqli_connect_error()) {
  echo "Database connection failed with the following errors: ". mysqli_connect_error();
  die();

}
