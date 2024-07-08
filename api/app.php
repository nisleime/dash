<?php
  
  $conecta = mysqli_connect("149.56.250.246", "root", "Ncm@647534","DASHBOARD") or print (mysqli_error($conecta)); 
   
  $email               =  $_POST["email"];
  $json                =  $_POST["json"];
  $query               =  "UPDATE CADASTRO_EMPRESA SET ULTIMA_ATUALIZACAO_APP = DATE_SUB(NOW(),INTERVAL 3 HOUR), JSON_APP = '$json' where  email ='$email'"; 
  $contatos            =  mysqli_query($conecta,$query);
 
   
  $registro = mysqli_affected_rows($conecta);
 
  mysqli_close($conecta);

  echo $registro; 



 
?>



 

