<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Contact</title>
</head>
<body id="php_page">
    <div class="php_form">
        <?php print "Hello dear ";
            print $_POST["last_name"] ;
            print " ";
            print $_POST["first_name"];
            print "<BR><BR><HR>";
            print " your mail adress is : ";
            print $_POST["mail"];
            print " Your message have been send to me, thanks"; 
        ?>
    </div>
    <div class="back_top">
        <a href="index.html">Return Home</a>
    </div>
</body>
</html>