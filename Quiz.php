<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quiz</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/icons/favicon.ico" />
    



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body id="Quiz">
    <section class="container">
      <div class="content row">
      <?php include"header.php";?>
        <section class="main col col-xs-8">
      <?php include"article-venue.php";?>
       
          <?php include "aside-lastyr.php";?>
 

          
        </section>
        <section class="sidebar col col-xs-4">
           <?php include "register.php";?>
           <?php include"article-introquiz.php";?>
           <?php include "aside-schedule.php";?>

          
        </section>
      
      </div>
      <?php include "footer.php";?>

    </section>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script scr="js/myscript.js"></script>
     <script src="js/myscript.js"></script>

  </body>
</html>
