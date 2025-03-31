<?php
  /*
  $_SERVER['PHP_SELF'] → 
    Returns the filename of the currently executing script.
  $_SERVER['SERVER_NAME'] → 
    Returns the name of the server (e.g., "example.com").
  $_SERVER['HTTP_HOST'] → 
    Returns the Host header from the request (often the same as SERVER_NAME but can differ).
  $_SERVER['REQUEST_METHOD'] →
    Returns the request method used (GET, POST, etc.).
  $_SERVER['SCRIPT_FILENAME'] → 
    Returns the absolute path of the executing script.
  $_SERVER['QUERY_STRING'] → 
    Returns the query string from the URL.
  $_SERVER['REMOTE_ADDR'] → 
    Returns the IP address of the client making the request.
  $_SERVER['HTTP_USER_AGENT'] → 
    Returns details about the user's browser and operating system.
  $_SERVER['REQUEST_URI'] → 
    Returns the URI of the current page request.
  */

  echo "Current Script: " . $_SERVER['PHP_SELF'] . "<br>";
  echo "Server Name: " . $_SERVER['SERVER_NAME'] . "<br>";
  echo "Host header from the request: " . $_SERVER['HTTP_HOST'] . "<br>";
  echo "Returns the request method used (GET, POST, etc): " . $_SERVER['REQUEST_METHOD'] . "<br>";
  echo "Absolute path of executing script: " . $_SERVER['SCRIPT_FILENAME'] . "<br>";
  echo "The QUERY STRING from the URL: " . $_SERVER['QUERY_STRING'] . "<br>";
  echo "Client IP: " . $_SERVER['REMOTE_ADDR'] . "<br>";
  echo "User Agent: " . $_SERVER['HTTP_USER_AGENT'] . "<br>";
  echo "URI of the current page request: " . $_SERVER['REQUEST_URI'] . "<br><br><br>";
?>
