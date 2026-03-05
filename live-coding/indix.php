<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method ="POST">
        <label> NOM: </label>
        <input type="text" name="nom">
        <label> PRENOM: </label>
        <input type="text" name="prenom">
        <label> AGE: </label>
        <input type="text" name="age">
        <button type="submit" name="ok">ok</button>
</form>
</body>
</html>
<?php
   if(isset($_POST["ok"])){
     $nom= $_POST["nom"];
     $prenom= $_POST["prenom"];
     $age= $_POST["age"];
       $found=true;
       if(!empty($nom)&& !empty($prenom)&& !empty($age)){
          $found=false;

       }else{
        if($age <18){
            echo"tous les champs doivent être remplis et l'âge doit être supérieur à 18";
            $found=false;
        }
        $found===true;
        
       }
       echo $nom .$prenom .$age ."@ofppt.ma";

   }