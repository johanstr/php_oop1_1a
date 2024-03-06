<?php
@include_once('src/Table.php');

$users = [
   [ 'id' => 1, 'naam' => 'Joop Kopstoot', 'email' => 'joop@kopstoot.com' ],
   [ 'id' => 2, 'naam' => 'Johny Kebab', 'email' => 'johny@kebab.com' ],
   [ 'id' => 3, 'naam' => 'Wilhelm van Hot naar Her', 'email' => 'hot@her.com' ],
   [ 'id' => 4, 'naam' => 'Truus von Miepenstein', 'email' => 'truus@miepenstein.com' ],
   [ 'id' => 5, 'naam' => 'Miepie Kip', 'email' => 'miepie@kip.com' ],
];

$user_table = new Table($users);
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
      <title>Voorbeeld tabel</title>

      <link rel="stylesheet" href="css/style.css">
   </head>

   <body>
      <?php $user_table->draw(); ?>
   </body>
</html>