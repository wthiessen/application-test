<html>
<?php

$people = array(
   array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
   array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
   array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
   array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
   array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EBaseFM Interview test</title>
    <style>
        body {font: normal 14px/1.5 sans-serif;}
    </style>
    <script>
    </script>
</head>

<table>
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th></th>
    </tr>
    <tr>
    <?php foreach ($people as $person) {
        echo '<tr><td>'.$person['first_name'].'</td>';
        echo '<td>'.$person['last_name'].'</td>';
        echo '<td>'.$person['email'].'</td>';
        echo '<td><button onClick="alert(\''.$person['first_name'].' '.$person['last_name'].' '.$person['email'].'\')">Alert</button></td></tr>';
    }
    ?>
</table> 

<!-- Write a simple app which loops through the given $people array and displays it in a table.

Add a button to each row which, when clicked, will alert the person's name and email.

Place your code in index.php. Feel free to use the snippets below to get started.
Snippets
People -->

<!-- 
HTML Doctypes

<!doctype html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
	"http://www.w3.org/TR/html4/strict.dtd">

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">

Javascript libraries

Mootools <script src="//ajax.googleapis.com/ajax/libs/mootools/1.5.2/mootools.min.js"></script>
JQuery <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
AngularJS <script src="ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script> -->

</html>