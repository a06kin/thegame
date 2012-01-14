<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['mongo_uri'] = "a06kin:support19@staff.mongohq.com:10015/tt";

// Persistant connections
$config['mongo_persist'] = TRUE;
$config['mongo_persist_key'] = 'ci_mongo_persist';

// Get results as an object instead of an array
$config['mongo_return'] = 'array'; // Set to object

// When you run an insert/update/delete how sure do you want to be that the database has received the query?
// safe = the database has receieved and executed the query
// fysnc = as above + the change has been committed to harddisk <- NOTE: will introduce a performance penalty
$config['mongo_query_safety'] = 'safe';

// Supress connection error password display
$config['mongo_supress_connect_error'] = TRUE;

// If you are having problems connecting try changing this to TRUE
$config['host_db_flag'] = FALSE;