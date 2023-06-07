<?php
/* For displaying errors....good practice while developing */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/*

Exercise 6: Using an API to get data and populate a form.

--Include functions.php

--In functions.php, create a function called getQuestions(), which performs an API request
based on the category id ($_GET["catId"]), using this URL (replacing *** with the category id):
https://opentdb.com/api.php?amount=5&category=***&difficulty=easy&type=multiple
Use file_get_contents() to make the API call, and json_decode to convert the response.
Then, loop through the response to present the questions. Each question should be in a container
showing the questions, and radio buttons for the answers.

You don't have to worry about shuffling answers, etc. Just focus on taking the response data
and creating html to insert below.

--Augment the h1 element below to display the category name.



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
        <h1>Category: </h1>







    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>