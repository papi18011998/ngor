<?php
$erreur=[];
// verification du nom complet
if(isset($_POST['name']) && !empty($_POST['name'])){
    $name = htmlspecialchars($_POST['name']);
}else{
    $erreur["name"] = "Votre nom complet est obligatoire";
}
// verification de l'email
if(isset($_POST['email']) && !empty($_POST['email'])){
    $email = htmlspecialchars($_POST['email']);
}else{
    $erreur["email"] = "Votre email est obligatoire"; 
}
// verification du mot de passe
if(isset($_POST['passe']) && !empty($_POST['passe'])){
    $passe = htmlspecialchars($_POST['passe']);
}else{
    $erreur["passe"] = "Votre mot de passe est obligatoire"; 
}
// verification du telephone
if(isset($_POST['tel']) && !empty($_POST['tel'])){
    $tel = htmlspecialchars($_POST['tel']);
}else{
    $erreur["tel"] = "Votre telephone est obligatoire";
}
if(isset($_POST['conf']) && $_POST['passe'] == $_POST['conf'] ){
    $conf = htmlspecialchars($_POST['conf']);
}else{
    $erreur["conf"] = "Vos mots de passe ne correspondent pas";
}
//verification des erreurs
if (!empty($erreur)) {
    foreach($erreur as $values){
        echo $values.'<br>';
    }
} else {
    include "bddConnect.php";
    $sql="SELECT * FROM user WHERE email=?";
     $req=$pdo->prepare($sql);
     $req->execute([$email]);
     $compter=$req->fetchAll();
     $res=count($compter);
    if ($res===0) { 
       $hash = hash("sha512",$passe);
       $sql="INSERT INTO user (id,nomComplet,email,passe,tel) VALUES (NULL,?,?,?,?);";
       $req=$pdo->prepare($sql);
       $req->execute([$name,$email,$hash,$tel]);
      echo "<font color='green'>UTILISATEUR AJOUTE AVEC SUCCÈS.</font>";
      echo $hash;
    
     }else{
      echo "<font color='red'>DÉSOLÉ MAIS CET EMAIL EXISTE DÉJA DANS NOTRE BASE DE DONNEES.<br>CLIQUEZ <a href='index.php'>ICI</a> POUR RÉESSAYER UN AUTRE LOGIN</font>";
     }
}

?>