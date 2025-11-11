<?php

if($_SERVER['HTTP_HOST'] == 'localhost') {
  /* Local Database Connection */
  define('DBHOST', 'localhost');
  define('DBNAME', 'php_mvc');
  define('DBUSER', 'root');
  define('DBPASS', '');

  /* Specify the default Url */
  define('ROOT','http://localhost/fallax_projects/php_mvc_htmx/public');

  // true mean show errors
  define('DEBUG', true);
  
} else {
  /* Local Database Connection */
  define('DBHOST', '');
  define('DBNAME', '');
  define('DBUSER', '');
  define('DBPASS', '');

  /* Specify the default Url */
  define('ROOT','http://localhost:8000');

  // false means don't show errors 
  define('DEBUG', false);
}


define('APP_NAME', 'My Website');
define('APP_DESC', 'My Website Description');
