<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess Board</title>
</head>
<style>
h3{
    font-size: 30px;
    font-family: verdana;
}

</style>

<body>
<center><h3>Chess Board</h3></center>
   <center><table width="1050px" cellspacing="0px" border="1px">
  
      <?php
      for($row=1;$row<=8;$row++)
	  {
          echo "<tr>";
          for($column=1;$column<=8;$column++)
		  {
          $total=$row+$column;
          if($total%2==0)
		  {
          echo "<td height=100px width=30px bgcolor=white></td>";
          }
		  else
		  {
          echo "<td height=100px width=30px bgcolor=#006600></td>";
          }
          }
          echo "</tr>";
    }
          ?>

       </table>   
       </center>
    
</body>
</html>