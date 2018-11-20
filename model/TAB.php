<html> 
<body> 

<?php  

  // afficher un menu de login membre simple 
  echo ' 
  <table> 
  <form action="liens.php" method="post" name="login_form"> 
  <tr> 
  <td>Votre login</td> 
  <td><input type="text" name="login" value="" size="20" maxlength="42"></td> 
  </tr> 
  <tr>
  <td>Votre password</td> 
  <td><input type="password" name="pass" value="" size="20" maxlenght="12"></td> 
  </tr> 
  <tr> 
  <td> 
  <input type="submit" name="valider" value="val"> 
  <input type="reset" name="annuler" value="anu"> 
  </td> 
  </tr> 
  </form> 
  </table> '; 

?>  