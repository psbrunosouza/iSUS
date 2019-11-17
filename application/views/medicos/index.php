<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Urologia</title>
   </head>
   <body>

   </body>
</html>

   <h1> <?php echo $titulo ?> </h1>

   <table border="1">
      <tr>
         <td>Médico</td>
      </tr>

   <?php
      foreach ($tabela as $linha){
         echo "<tr>" .
               "<td>". $linha->nomeMedico . "</td>" .
               "</tr>";
      }
    ?>
</table>
