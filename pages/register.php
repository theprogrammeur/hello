
<!Doctype>
<html>
     <head>
          <meta charset="UTF-8"/>
             <link rel="Stylesheet"  href="style.css"/>
             <link rel="Stylesheet"  href="css/bootstrap-responsive.min.css"/>
             <link rel="Stylesheet"  href="css/bootstrap.min.css"/>
          <meta name="viewport" content="width=device-width   initial-scale=1.0">
         <title>CITHADD</title>
		 <style type="text/css">
body { padding-top: 140px; background:url(images/stud.jpg) no-repeat center fixed;background-size:cover;}
.error{color:red;}
         </style>
       </head>
     <body>
	 
	 
<div class="container-fluid">

     <div class="row-fluid">
               <nav class="navbar navbar-default navbar-fixed-top ">
                 <div class="navbar-inner">
               <ul class="nav">
                 <li> <a  href="#" style="color:blue";class="brand"> <strong> HAITCHAT</strong></a></li>
               </ul>
<form class="navbar-form pull-right">
<input type="text" style="width:150px; height:28px;" class="input-small search-query" placeholder="Ex: Projets,Services...">
<button type="submit" class=" btn btn-primary ">Search</button>
</form>

                 </div>
                </nav>
      </div>

<div class="row-fluid">

<?php 
	  if(isset($_POST['submit']))
	  {
		  $sexe=$nom=$prenom=$email=$pseudo=$situation=$password=$propos=$password2=" ";
		function securisation($donnees)
		{
			$donnees=trim($donnees);
			$donnees=stripslashes($donnees);
			$donnees=strip_tags($donnees);
			return $donnees;
		}
		
		$sexe=securisation($_POST['sexe']);
		$nom=securisation($_POST['nom']);
		$prenom=securisation($_POST['prenom']);
		$email=securisation($_POST['email']);
		$situation=securisation($_POST['situation']);
		$password=securisation($_POST['password']);
		$password2=securisation($_POST['password2']);
		$propos=securisation($_POST['propos']);
		$pseudo=securisation($_POST['pseudo']);
		
		if(empty($nom))
		{
			$errors[]="veuillez saisir votre nom";
		}
		if(empty($prenom))
		{
			$errors[]="veuillez saisir votre prenom";
		}
		if(empty($propos))
		{
			$errors[]="veuillez ecrire dans le champs de texte";
		}
		if(empty($password))
		{
			$errors[]="veuillez saisir votre password";
		}
		if($password!=$password2)
		{
			$errors[]="Vos deux password doivent etre identiques";
		}
		if(empty($pseudo))
		{
			$errors[]="veuillez saisir votre pseudo";
		}
		
		if(!filter_var($email,FILTER_VALIDATE_EMAIL))
		{
			$errors[]="veuillez saisir votre Email";
		}
		
		if(!empty($errors))
		{
			foreach($errors as $error)
			{
				echo "<div class='error'>" .$error. "</div>";
			}
		}
		
		
	  }
	  ?>






<div class="span6 offset3">

<div class="well" style="background-color: rgba(255, 255, 255, 0.6); border-radius:18px;">
<div class="page-header text-center" style="color:blue; "><h3>FORMULAIRE D'INSCRIPTION</h3></div>
<form method="POST" class=" form-horizontal text-center" action="">

<div class="control-group">
<label class="control-label" for="nom">Nom :</label>
<div class="controls">
<input type="text" name="nom"style="height:25px;"class="input-medium" placeholder="Votre nom"/> 
</div>
</div>

<div class="control-group">
<label class="control-label" for="prenom">Prenom :</label>
<div class="controls">
<input type="text"style="height:25px;" name="prenom"placeholder="Votre prenom"/>
</div>
</div>

<div class="control-group">
<label class="control-label" for="pseudo">Pseudo</label>
<div class="controls">
<input type="text" style="height:25px;" name="pseudo"placeholder="Votre pseudo"/>
</div>
</div>

<div class="control-group">
<label class="control-label" name="sexe" for="sexe">Sexe</label>
<div class="controls">
<select name="sexe">
<option value="femme">Femme</option>
<option value="Homme">Homme</option>
</select>
</div>
</div>

<div class="control-group">
<label class="control-label" for="situation">Situation</label>
<div  class="controls">
<select name="situation">
<option value="Celibataire">Celibataire</option>
<option value="Veuf">Veuf(ve)</option>
<option value="Marie">Marie(e)</option>
<option value="Divorce">Divorce(e)</option>
</select>
</div>
</div>

<div class="control-group">
<label class="control-label" for="email" >Email :</label>
<div class="controls">
<input type="email" style="height:25px;" name="email"placeholder="Votre email" maxlength="" />
</div>
</div>

<div class="control-group">
<label class="control-label" for="password"><strong>Votre password :</strong></label>
<div class="controls">
<input type="password"style="height:25px;" name="password" maxlength="15"/>
</div>
</div>

<div class="control-group">
<label class="control-label"for="password2"><strong>Retapez votre password :</strong></label>
<div class="controls">
<input type="password" style="height:25px;" name="password2"maxlength="15"/></br></br>
</div>
</div>
<div class="control-group">
<label class="control-label"for="propos"><strong>A propos de toi</strong></label>
<div class="controls">
<textarea type="text" rows="6" cols="10" name="propos"/></textarea></br></br>
</div>
</div>
<input type="submit" name="submit" class="btn btn-primary" value="Envoyer">
</form>
<p class="text-center"><a href='index.php?page=login' class="text-center">Deja inscrit sur le site</a></p>
</div>
</div>

</div>

</div>
<script src="js/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"> </script>
</body>
</html>
  