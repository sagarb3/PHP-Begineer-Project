<link rel="stylesheet" href="css/custom.css">
  <section class="loadbar">
               <?php include "loader.php";?>
            </section>

<div class="content row">
    <div class="col-xs-12">
        <header class="clearfix col col-xs-12">
            <section id="branding">
                <a href="#"><img src="images/misc/logo3new.jpg" height="200" width="100%" alt="My logo for "></a>
            </section>
            <div class="navbar ">
                <ul class="nav navbar-nav nav-tabs" role="navigation">
                    <li ><a href="index.php">Home</a></li>
                    <li><a href="Quiz.php">Quiz</a></li>
                    <li><a href="AboutUs.php">AboutUs</a></li>
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Students&nbsp<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                        <li><a tabindex="-1"  href="Students.php">All</a></li>
                        <li class="divider"></li>
                        <li><a tabindex="-1" href="Students.php#Good">Good</a></li>
                        <li><a tabindex="-1" href="Students.php#Average">Average</a></li>
                        <li><a  tabindex="-1" href="Students.php#Poor">Poor</a></li>
                        <li><a  tabindex="-1" href="Students.php#Not">Not</a></li>
                    </ul>

                    </li>
                    <li><a href="Details.php">Details</a></li>
                </ul>
            </div>
          
            <section id="modal" class="modal fade">
                <div class="modal-body">
                    <img src="" alt="Modal Photo" id="modalimage" height="600px" width="100%">
                </div>
            </section>
        </header>
    </div>
</div>




