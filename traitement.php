<html>
  <head>
    <title>réponse du serveur</title>
  </head>
  <body>
  <?php print "Hello dear ";
    print $_POST["last_name"] ;
    print " ";
    print $_POST["first_name"];
    print "<BR><BR><HR>";
    print " your mail adress is : ";
    print $_POST["mail"];
    print " Your message have been send to me, thanks :)"; 
    ?>
  </body>
</html> 

