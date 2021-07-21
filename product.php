<?php
include 'account/includes/connect.php';


	if($_SESSION['customer_sid']==session_id())
	{
		?>



<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>DNS | Product</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/jks-icons.css">
<link rel="stylesheet" type="text/css" href="css/settings.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/owl.transitions.css">
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="css/zerogrid.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/loader.css">
<link rel="shortcut icon" href="images/favicon.png">

<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body>

<!--Loader-->
<div class="loader"> 
   <div class="cssload-container">
     <div class="cssload-circle"></div>
     <div class="cssload-circle"></div>
   </div>
</div>

<!--Header-->
<header id="main-navigation">
  <div id="navigation" data-spy="affix" data-offset-top="20">
    <div class="container">
      <div class="row">
      <div class="col-md-12">
        <nav class="navbar navbar-default">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#fixed-collapse-navbar" aria-expanded="false"> 
            <span class="icon-bar top-bar"></span> <span class="icon-bar middle-bar"></span> <span class="icon-bar bottom-bar"></span> 
            </button>
           <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo" class="img-responsive"></a> 
         </div>
        
            <div id="fixed-collapse-navbar" class="navbar-collapse collapse navbar-right">
              <ul class="nav navbar-nav">
                <li>
                   <a href="index.html">Home</a>
                   
                </li>
                <li><a href="product.html">Our Product</a></li>
                
                
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="faq.html">FAQ</a></li>
                  
                <li><a href="./account/register.php">Order Now</a></li>
                
              </ul>
            </div>
         </nav>
         </div>
       </div>
     </div>
  </div>
</header>

<!--Page header & Title-->
<section id="page_header">
<div class="page_title">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
         <h2 class="title">Our Product</h2>
         <p>Check out our Advance and some of our special Instrumet!</p>
      </div>
    </div>
  </div>
</div>  
</section>







 
<section id="gallery" class="padding">
  <div class="container">
      <div class="row">
     <div class="col-md-12 text-center">
        <h2 class="heading ">Best &nbsp; Quality</h2>
        <hr class="heading_space">
        <div class="work-filter">
          <ul class="text-center">
             <li><a href="javascript:;" data-filter="all" class="active filter">All Product</a></li>
             <li><a href="javascript:;" data-filter=".starters" class="filter">Handlers</a></li>
             <li><a href="javascript:;" data-filter=".drinks" class="filter">Nut Fixer</a></li>
             <li><a href="javascript:;" data-filter=".dinner" class="filter">Slatter</a></li>
             <li><a href="javascript:;" data-filter=".lunch" class="filter">Picker</a></li>
          </ul>
        </div>
      </div>
    </div>
     <div class="row">
      <div class="zerogrid">
        <div class="wrap-container">
          <div class="wrap-content clearfix home-gallery">
            <div class="col-1-4 mix work-item drinks">
              <div class="wrap-col">
                <div class="item-container">
                  <div class="image">
                    <img src="images/gallery1.jpg" alt="cook"/>
                    <div class="overlay">
                        <a class="video fancybox.iframe overlay-inner" href="https://player.vimeo.com/video/94224205?autoplay=1"><i class=" icon-eye6"></i></a>
                    </div>
                  </div> 
                </div>
              </div>
            </div>
            <div class="col-1-4 mix work-item starters">
              <div class="wrap-col">
                <div class="item-container">
                  <div class="image">
                    <img src="images/galler2.jpg" alt="cook"/>
                    <div class="overlay">
                        <a class="fancybox overlay-inner" href="images/galler2.jpg" data-fancybox-group="gallery"><i class=" icon-eye6"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-1-4 mix work-item dinner">
              <div class="wrap-col">
                <div class="item-container">
                  <div class="image">
                    <img src="images/gallery3.jpg" alt="cook"/>
                    <div class="overlay">
                        <a class="fancybox overlay-inner" href="images/gallery3.jpg" data-fancybox-group="gallery"><i class=" icon-eye6"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-1-4 mix work-item drinks">
              <div class="wrap-col">
                <div class="item-container">
                  <div class="image">
                    <img src="images/gallery4.jpg" alt="cook"/>
                    <div class="overlay">
                        <a class="fancybox overlay-inner" href="images/gallery4.jpg" data-fancybox-group="gallery"><i class=" icon-eye6"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>  
            <div class="col-1-4 mix work-item dinner">
              <div class="wrap-col">
                <div class="item-container">
                  <div class="image">
                    <img src="images/gallery5.jpg" alt="cook"/>
                    <div class="overlay">
                        <a class="fancybox overlay-inner" href="images/gallery5.jpg" data-fancybox-group="gallery"><i class=" icon-eye6"></i></a>
                    </div> 
                  </div>
                </div>
              </div>
            </div>
            <div class="col-1-4 mix work-item lunch">
              <div class="wrap-col">
                <div class="item-container">
                  <div class="image">
                    <img src="images/gallery6.jpg" alt="cook"/>
                    <div class="overlay">
                        <a class="fancybox overlay-inner" href="images/gallery6.jpg" data-fancybox-group="gallery"><i class=" icon-eye6"></i></a>
                    </div>
                  </div> 
                </div>
              </div>
            </div>
            <div class="col-1-4 mix work-item starters">
              <div class="wrap-col">
                <div class="item-container">
                  <div class="image">
                    <img src="images/gallery7.jpg" alt="cook"/>
                    <div class="overlay">
                        <a class="fancybox overlay-inner" href="images/gallery7.jpg" data-fancybox-group="gallery"><i class=" icon-eye6"></i></a>
                    </div>
                  </div> 
                </div>
              </div>
            </div>
            <div class="col-1-4 mix work-item starters">
              <div class="wrap-col">
                <div class="item-container">
                  <div class="image">
                    <img src="images/gallery8.jpg" alt="cook"/>
                    <div class="overlay">
                        <a class="video fancybox.iframe overlay-inner" href="https://player.vimeo.com/video/94224205?autoplay=1"><i class=" icon-eye6"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
       </div>
      </div>
  </div>
</section>


<section class="info_section paralax">
  <div class="container">
    <div class="row">
      <div class="col-md-2"> </div>
      <div class="col-md-8">
         <div class="text-left">
         <h2 class="heading_space">Deal of the Day</h2>
         <p class="heading_space detail">We are here for you!</p>
         <a href="order.html" class="btn-common-white page-scroll">Order Now</a>
         </div>          
      </div>
      <div class="col-md-2"></div>
    </div>
  </div>
</section>






<!--indtru Facilities-->
<section id="indtru" class="padding bg_grey">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="heading">Featured &nbsp; Inplants</h2>
        <hr class="heading_space">
      </div>
    </div>
    <div class="col-md-4">
      
      <hr class="heading_space">
      <ul class="menu_widget">
        <li>Diamond awl large<span>INR 499.00</span></li>
        <li>Diamond awl small<span>INR 249.00</span></li>
        <li>Cobs elevator large<span>INR 150.00</span></li>
        <li>Bristow retractor<span>INR 199.00</span></li>
        <li>Right angle retractor<span>INR 99.00</span></li>
        <li>Front Wire Cutter<span>INR 899.00</span></li>
        <li>Box spanner<span>INR 1250.00</span></li>
        <li>Bipolar<span>INR 399.00</span></li>
        <li>Bipolar Second<span>INR 199.00</span></li>
        <li>Left angle retractor<span>INR 199.00</span></li>
      </ul>
       <h3>Other Special Inplants</h3>
       <p>We are here for you!</p>
    </div>
      <div class="col-md-8 grid_layout">
      <div class="row">
      <div class="zerogrid">
          <div class="wrap-container">
            <div class="wrap-content clearfix">
              <div class="col-1-2">
              <div class="wrap-col first">
                  <div class="item-container"> 
                   <img src="images/grid-layout2.jpg" alt="cook"/>
                   <div class="overlay">
                       <a class="overlay-inner fancybox" href="images/grid-layout2.jpg" data-fancybox-group="gallery">
                           Inplants
                       </a> 
                   </div>
                  </div>
                </div>
              </div>
              <div class="col-1-2">
              <div class="wrap-col first">
                  <div class="item-container"> 
                   <img src="images/grid-layout3.jpg" alt="cook"/> 
                   <div class="overlay">
                      <a class="overlay-inner fancybox" href="images/grid-layout3.jpg" data-fancybox-group="gallery">
                         Inplants
                      </a>
                   </div>
                   </div>
                </div>
              </div>
              <div class="col-1-2">
              <div class="wrap-col">
                  <div class="item-container"> 
                   <img src="images/grid-layout4.jpg" alt="cook"/> 
                   <div class="overlay">
                       <a class="overlay-inner fancybox" href="images/grid-layout4.jpg" data-fancybox-group="gallery">
                          Inplants
                       </a>
                   </div>
                    </div>
                </div>
              </div>
              <div class="col-1-2">
              <div class="wrap-col">
                  <div class="item-container"> 
                   <img src="images/grid-layout5.jpg" alt="cook"/> 
                   <div class="overlay">
                       <a class="fancybox overlay-inner" href="images/grid-layout5.jpg" data-fancybox-group="gallery"> 
                         Inplants
                       </a>
                    </div>
                   </div>
                 </div>
               </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--Featured Instruments -->
<section id="news" class="bg_grey padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
      <h2 class="heading">special &nbsp; Inplants &nbsp; Equipments</h2>
      <hr class="heading_space">
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="worker_wrap_slider">
          <div id="news-slider" class="owl-carousel">
            <div class="item">
              <div class="news_content">
               <img src="images/news-img3.jpg" alt="Docotor">
               <div class="date_comment">
                  <span>33$</span>
                  <a href="#."><i class="icon-comment"></i> 2500</a>
               </div>
               <div class="comment_text">
                 <h3><a href="#.">Bristow retractor</a></h3>
                 <p>Have Nice Day</p>
               </div>
              </div>
            </div>
            <div class="item">
              <div class="news_content">
               <img src="images/news-img2.jpg" alt="Docotor">
               <div class="date_comment">
                  <span>21$</span>
                  <a href="#."><i class="icon-comment"></i> 1600</a>
               </div>
               <div class="comment_text">
                 <h3><a href="#.">Baipolar</a></h3>
                 <p>Have Nice Day</p>
               </div>
              </div>
            </div>
            <div class="item">
              <div class="news_content">
               <img src="images/news-img1.jpg" alt="Docotor">
               <div class="date_comment">
                  <span>26$</span>
                  <a href="#."><i class="icon-comment"></i> 2000</a>
               </div>
               <div class="comment_text">
                 <h3><a href="#.">Wire Cutter</a></h3>
                 <p>Have Nice Day</p>
               </div>
              </div>
            </div>
            
            <div class="item">
              <div class="news_content">
               <img src="images/food-2.jpg" alt="Docotor">
               <div class="date_comment">
                  <span>40$</span>
                   <a href="#."><i class="icon-comment"></i>3000</a>
               </div>
               <div class="comment_text">
                 <h3><a href="#.">Awl Small</a></h3>
                 <p>Have Nice Day!</p>
               </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<section id="testinomial" class="padding">
  <div class="container">
  <div class="row">
      <div class="col-md-12 text-center">
      <h2 class="heading">Our &nbsp; happy &nbsp; Customers</h2>
      <hr class="heading_space">
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
      <div id="testinomial-slider" class="owl-carousel text-center">
        <div class="item">
          <h3>Instruments from some of the finest Company in India!</h3>
          <p>Chris Martin</p>
        </div>
        <div class="item">
          <h3>Good Service, Nice staff and customer care.</h3>
          <p>Alex Hales</p>
        </div>
        <div class="item">
          <h3>Instruments from some of the finest Company in India!</h3>
          <p>Shane Robertson</p>
        </div>
       </div>
      </div>
    </div>
  </div>
</section>



<footer class="padding-top bg_black">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6 footer_column">
        <h4 class="heading">Who are we?</h4>
        <hr class="half_space">
        <p class="half_space"></p>
        <p>Launched in Mumbai, DNS has grown from a home project to one of the largest Inplants aggregators in the world. We are present in 24 countries and 10000+ cities globally, enabling our vision of better indtru for more people. We not only connect people to Orthodpedic instrument in every context but work closely with Hospitals to enable a sustainable ecosystem.</p>
      </div>
      <div class="col-md-3 col-sm-6 footer_column">
        <h4 class="heading">Quick Links</h4>
        <hr class="half_space">
        <ul class="widget_links">
          <li><a href="index.html">Home</a></li>
          <li><a href="product.html">Our Product</a></li>
          <li><a href="about.html">About Us</a></li>
          
          <li><a href="faq.html">Faq's</a></li>
          <li><a href="order.html">Order Now</a></li>
          
        </ul>
      </div>
      <div class="col-md-3 col-sm-6 footer_column">
        <h4 class="heading">Newsletter</h4>
        <hr class="half_space">
        <p class="icon"><i class="icon-dollar"></i>Sign up with your name and email to get updates fresh updates.</p>
        <div id="result1" class="text-center"></div>        
        
       <form action="http://themesindustry.us13.list-manage.com/subscribe/post-json?u=4d80221ea53f3a4487ddebd93&id=494727d648&c=?" method="get" onSubmit="return false" class="newsletter">
          <div class="form-group">
            <input type="email" placeholder="E-mail Address" required name="EMAIL" id="EMAIL" class="form-control" />
          </div>
          <div class="form-group">
            <input type="submit" class="btn-submit button3" value="Subscribe" />
          </div>
        </form>
      </div>
      <div class="col-md-3 col-sm-6 footer_column">
        <h4 class="heading">Get in Touch</h4>
        <hr class="half_space">
        <p></p>
        <p class="address"><i class="icon-location"></i>DNS, Plot no.G10, Dalvi and Son's,  New MIDC, Kudal, Sindhudurga, Maharashtra 416520.</p>
        <p class="address"><i class="fa fa-phone"></i>(+91) 888 444 0044</p>
        <p class="address"><i class="icon-mail"></i><a href="office@DNS.com">office@DNS.com</a></p>
      </div> 
    </div>
    <div class="row">
     <div class="col-md-12">
        <div class="copyright clearfix">
          <p>Copyright &copy; 2020 DNS. All Right Reserved</p>
          <ul class="social_icon">
               <li><a href="#" class="facebook"><i class="icon-facebook"></i></a></li>
               <li><a href="#" class="twitter"><i class="icon-twitter"></i></a></li>
               <li><a href="#" class="google"><i class="icon-google"></i></a></li>
              </ul>
        </div>
      </div>
    </div>
  </div>
</footer>

<a href="#" id="back-top"><i class="fa fa-angle-up fa-2x"></i></a>

<script src="js/jquery-2.2.3.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jquery.parallax-1.1.3.js"></script>
<script src="js/jquery.appear.js"></script>  
<script src="js/jquery-countTo.js"></script> 
<script src="js/owl.carousel.min.js" type="text/javascript"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/jquery.mixitup.min.js"></script>
<script src="js/functions.js" type="text/javascript"></script>

<script type="text/javascript">
    $("#formValidate").validate({
        rules: {
			<?php
			$result = mysqli_query($con, "SELECT * FROM product where not deleted;");
			while($row = mysqli_fetch_array($result))
			{
				echo $row["id"].':{
				min: 0,
				max: 10
				},
				';
			}
		echo '},';
		?>
        messages: {
			<?php
			$result = mysqli_query($con, "SELECT * FROM product where not deleted;");
			while($row = mysqli_fetch_array($result))
			{  
				echo $row["id"].':{
				min: "Minimum 0",
				max: "Maximum 10"
				},
				';
			}
		echo '},';
		?>
        errorElement : 'div',
        errorPlacement: function(error, element) {
          var placement = $(element).data('error');
          if (placement) {
            $(placement).append(error)
          } else {
            error.insertAfter(element);
          }
        }
     });
    </script>
</body>

</html>
<?php
	}
	else
	{
		if($_SESSION['admin_sid']==session_id())
		{
			header("location:admin-page.php");		
		}
		else{
			header("location:login.php");
		}
	}
?>