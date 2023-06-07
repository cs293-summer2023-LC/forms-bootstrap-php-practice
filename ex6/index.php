<?php
/* For displaying errors....good practice while developing */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/*

Exercise 6: Using an API to get data and populate a form.

-Include functions.php in this file and in results.php

- In functions.php, create a function called getCategories()
that calls the trivia API for the list of categories using file_get_contents(), and this URL:
    https://opentdb.com/api_category.php
Use json_decode to convert the response into a PHP object, and var_dump() it.
Once you see the structure, create a foreach loop to create option 
elements to populate a select form menu. Use id as the option value, and name as the text.

-In index.php, create a form that uses the GET method, and points to results.php.
Add the select menu, with name set to catId, and populate the options with getCategories().

See results.php for more instructions.

*/





?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <h1>Pick a category:</h1>







    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>