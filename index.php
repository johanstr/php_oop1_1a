<?php
@include_once('src/Table.php');
@include_once('src/Trow.php');
@include_once('src/Tcell.php');

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
      <table border="1">
         <tr>
            <td>1</td>
            <td>Product 1</td>
            <td>2</td>
            <td>&euro; 1,00</td>
            <td>&euro; 2,00</td>
         </tr>
         <tr>
            <td>1</td>
            <td>Product 2</td>
            <td>3</td>
            <td>&euro; 2,00</td>
            <td>&euro; 6,00</td>
         </tr>
      </table>
   </body>
</html>