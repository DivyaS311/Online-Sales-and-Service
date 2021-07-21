<?php
include 'includes/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="msapplication-tap-highlight" content="no">
            <title>Details</title>

            <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">

            <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">

            <meta name="msapplication-TileColor" content="#00bcd4">
            <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">

     
   </head>
   <body>
        
            <header id="header" class="page-topbar">
                
                    <div class="navbar-fixed">
                        <nav class="navbar-color">
                            <div class="nav-wrapper">
                                <ul class="left">                      
                                <li><h1 class="logo-wrapper"><a href="index.php" class="brand-logo darken-1"><img src="images/materialize-logo.png" alt="logo"></a> <span class="logo-text">Logo</span></h1></li>
                                </ul>				
                            </div>
                        </nav>
                    </div>
                    
            </header>

            <div id="main">      
                <div class="wrapper">  
                    <aside id="left-sidebar-nav">
                            <ul id="slide-out" class="side-nav fixed leftside-navigation">
                                        <li class="no-padding">
                                            <ul class="collapsible collapsible-accordion">
                                                <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-editor-insert-invitation"></i> Orders</a>
                                                    <div class="collapsible-body">
                                                        <ul>
                                                            <li><a href="orders.php">All Orders</a>
                                                            </li>
                                                            <?php
                                                                $sql = mysqli_query($con, "SELECT DISTINCT status FROM orders WHERE customer_id = $user_id;");
                                                                while($row = mysqli_fetch_array($sql)){
                                                                echo '<li><a href="orders.php?status='.$row['status'].'">'.$row['status'].'</a>
                                                                </li>';
                                                                }
                                                                ?>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </li>
                                </li>
                            </ul>
                        </aside>
                    </div>
                </div>
               <footer class="page-footer">
                    <div class="footer-copyright">
                        <div class="container">
                            <span>Copyright © 2021 <a class="grey-text text-lighten-4" href="#" target="_blank">Sawant</a> All rights reserved.</span>
                            <span class="right"> Design and Developed by <a class="grey-text text-lighten-4" href="#">Sawant</a></span>
                        </div>
                    </div>
               </footer>


            <script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>    
  
            <script type="text/javascript" src="js/plugins/angular.min.js"></script>

            <script type="text/javascript" src="js/materialize.min.js"></script>

            <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

            <script type="text/javascript" src="js/plugins/jquery-validation/jquery.validate.min.js"></script>
            
            <script type="text/javascript" src="js/plugins/jquery-validation/additional-methods.min.js"></script>
            
            <script type="text/javascript" src="js/plugins.min.js"></script>

            <script type="text/javascript" src="js/custom-script.js"></script>
  </body>
</html>