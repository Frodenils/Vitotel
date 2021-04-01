<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Contact</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>
    <header>
        <h1>Les amis de Vitotel</h1><img src="lesamisdevitotel.jpg" alt="logo Vitotel">
    </header>
    <nav>    <ul>
        <li><span><a href="index.html"> Accueil </a></span> </li>
        <li> <a href="association.html"> Les amis de Vitotel </a> </li>
        <li> <a href="histoire.html"> Histoire </a> </li>
        <li> <a href="regnerv2.html"> Vitotel en 1913 </a> </li>
        <li> <a href="saintmichel.html"> Saint michel de Vitotel</a> </li>
        <li> <a href="photos1.html"> Photos </a> </li>
        <li> <a href="saintclair.html"> Saint Clair </a> </li>
        <li> <a href="manifestation.html"> Agenda </a> </li>
        <li> <a href="expositions.html"> Expositions </a> </li>
        <li> <a href="formulaire.html">Contact</a> </li>
    </ul>
</nav>
<main>
    <article>
        <h2 align="center" class="littletitle">Vous souhaitez nous contacter ?  </h2>


        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Name: <input type="text" name="fname"><br/>
    E-mail: <input type="text" name="email"><br/>
    Website: <input type="text" name="website"><br/>
    Comment: <textarea name="comment" rows="5" cols="40"></textarea><br/>
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="other">Other<br/>
    <input type="submit">
    
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"
  
	 && $nameErr == "" && $emailErr == ""
	&& $genderErr == "" && $websiteErr == "" ) {

            $name = $_POST['name'];
            $email = $_POST['email'];
            $website = $_POST['website'];
            $comment = $_POST['comment'];
            $gender = $_POST ['gender'];

	$emailTo = 'tomjaf.9@gmail.com'; //'contact@vitotel.fr'
      $subject = '[LEs amis de vitotel] - un message de ' . $name;

      $message = 'Bonjour,<br/>';
      $message = $message . '<br/>';
      $message = $message . 'Voici un message de la part de ' . $name . '<br/>';
      $message = $message . 'Adresse email : ' . $email . '<br/>';
      $message = $message . 'Site web : ' . $website . '<br/>';
      $message = $message . 'commentaire : ' . $comment . '<br/>';
      $message = $message . '<br/>';
      $message = $message . 'cordialement<br/>';
      $message = $message . '<br/>';
      $message = $message . 'Mail automatiquement généré par le site internet<br/>';

      $headers = "MIME-version: 1.0\n";
      $headers .= "Content-type: text/html; charset=utf-8\n";
      $headers .= "from:" . $email;
      $error = !mail($emailTo, $subject, $message, $headers);

      print($error);


}
      ?>
        </center>
        <center><br><br>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10434.874205318301!2d0.8807852769140482!3d49.16795022014243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e110307c1369e5%3A0x40c14484fbb8a30!2s27110%20Vitot!5e0!3m2!1sfr!2sfr!4v1614954050887!5m2!1sfr!2sfr"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </center>
        












    </article>
        
        

        
        </aside>
    </main>
    <footer>
        <p>© Francis Durand -- Contact : contact@vitotel.fr <br>
            Les amis de Vitotel, association loi 1901
             </p>
        <p>License :<a href="https://www.creativecommons.org/licenses/by-nc-sa/2.0/" target="_blank">Creative Commons</a></p>
    </footer>
</body>
</html>