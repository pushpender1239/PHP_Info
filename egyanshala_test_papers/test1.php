<!DOCTYPE html>
<html lang="en">
<head>
<title>Test1</title>

<!-- Required meta tags always come first -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="x-ua-compatible" content="ie=edge">

<!-- Main Font -->
<script src="js/webfontloader.min.js"></script>
<script>
		WebFont.load({
			google: {
				families: ['Roboto:300,400,500,700:latin']
			}
		});
	</script>

<!-- Bootstrap CSS -->
<link rel="stylesheet" type="text/css" href="Bootstrap/dist/css/bootstrap-reboot.css">
<link rel="stylesheet" type="text/css" href="Bootstrap/dist/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="Bootstrap/dist/css/bootstrap-grid.css">

<!-- Main Styles CSS -->
<link rel="stylesheet" type="text/css" href="css/main.min.css">
<link rel="stylesheet" type="text/css" href="css/fonts.min.css">
</head>
<body>

<!-- Header-BP -->
<header class="header bg-blue" id="site-header">
  <div class="page-title test-title">
    <h6>eGyanshala</h6>
  </div>
  <div class="header-content-wrapper"> </div>
</header>

<!-- ... end Header-BP --> 

<!-- Responsive Header-BP -->

<header class="header header-responsive bg-blue" id="site-header-responsive"> 
<a href="" class="logo">
				<div class="img-wrap">
					<img src="img/logo-colored-small.png" alt="Olympus">
				</div>
				<div class="title-block">
					<h6 class="logo-title">olympus</h6>
					<div class="sub-title">SOCIAL NETWORK</div>
				</div>
			</a>
  
</header>

<!-- ... end Responsive Header-BP -->
<div class="header-spacer"></div>

<!-- ... start test tabs -->
<form>
<div class="container-fluid">
  <div class="row">
    <div class="col col-xl-10 col-lg-8 col-md-12 col-sm-12 col-12">
      <div class="ui-block-title">
        <div class="h6 title">Radilogy: Test Name</div>
        <ul class="list-inline marks">
          <li><span><span>Maximum mark:</span>100</span></li>
          <li><span><span>Negative mark:</span>10</span></li>
        </ul>
      </div>
      <div class="ui-block">
        <!-- News Feed Form  -->
        <div class="news-feed-form gate-exam">
          <!-- Nav tabs -->
          <div class="row">
          <div class="col-md-8">
          <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item que-nu"> <a class="nav-link inline-items"><span>Question1</span> </a> </li>
            <li class="nav-item"> <a class="nav-link active inline-items" data-toggle="tab" href="#home-1" role="tab" aria-expanded="true"><span>Physics</span> </a> </li>
            <li class="nav-item"> <a class="nav-link inline-items" data-toggle="tab" href="#profile-1" role="tab" aria-expanded="false"><span>Chemistary</span> </a> </li>
            <li class="nav-item"> <a class="nav-link inline-items" data-toggle="tab" href="#blog" role="tab" aria-expanded="false"> <span>Bioloagy</span> </a> </li>
            <li class="nav-item"> <a class="nav-link inline-items" data-toggle="tab" href="#matematics" role="tab" aria-expanded="false"> <span>Mathematic</span> </a> </li>
          </ul>
          </div>
          <div class="col-md-4">
          <div class="view-full-btn">
          <a href="" class="btn btn-bg-secondary">view full screen</a>
          <span class="calculator-icon"><i class="fas fa-calculator"></i></span>
          </div>
          </div>
          </div>
          <!-- Tab panes -->
          <div class="tab-content">
            <div class="tab-pane active" id="home-1" role="tabpanel" aria-expanded="true">
            <div class="question-box">
              <p>Q2. Radioisotopes are frequently used in the study of cells. Assume a culture of E. coli is grown in a culture medium containing radioactive sulphur. At the end of 48 hours, it is expected to find the radioactive label located in </p>
              
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios">
                    A.	
                    DNA </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios">
                    B.	
                    enzymes </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios">
                    C.	
                    RNA </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios">
                    D.	
                    all of these </label>
                </div>
              </div>
              
            </div>
            <div class="tab-pane" id="profile-1" role="tabpanel" aria-expanded="true">
              <div class="question-box">
                <p>Q1. The archaebacterium Halobacterium, an extreme halophile, and Sulfolobus, a thermoacidophile, can be cultured in the presence of antibiotics such as streptomycin and chloramphenicol because </p>
                
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios">
                      A.they contain ether-linked isoprenoids in their plasma membrane </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios">
                      B.they lack murein in their cell wall </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios">
                      C.they contain 80S, as opposed to 70S, ribosomes </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios">
                      D.all of the above </label>
                  </div>
                
             
              </div>
            </div>
            <div class="tab-pane" id="blog" role="tabpanel" aria-expanded="true">
              <div class="question-box">
                <p>Q1. The archaebacterium Halobacterium, an extreme halophile, and Sulfolobus, a thermoacidophile, can be cultured in the presence of antibiotics such as streptomycin and chloramphenicol because </p>
                
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios">
                      A.they contain ether-linked isoprenoids in their plasma membrane </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios">
                      B.they lack murein in their cell wall </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios">
                      C.they contain 80S, as opposed to 70S, ribosomes </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios">
                      D.all of the above </label>
                  </div>
                
             
              </div>
            </div>
            <div class="tab-pane" id="matematics" role="tabpanel" aria-expanded="true">
              <div class="question-box">
                <p>Q1. The archaebacterium Halobacterium, an extreme halophile, and Sulfolobus, a thermoacidophile, can be cultured in the presence of antibiotics such as streptomycin and chloramphenicol because </p>
               
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios">
                      A.they contain ether-linked isoprenoids in their plasma membrane </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios">
                      B.they lack murein in their cell wall </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios">
                      C.they contain 80S, as opposed to 70S, ribosomes </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios">
                      D.all of the above </label>
                  </div>
              
                
              </div>
            </div>
          </div>
        </div>
        <!-- ... end News Feed Form  -->
      </div>
    </div>
    <aside class="col col-xl-2 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-12 col-12">
      <div class="ui-block"> 
        
        <!-- W-Activity-Feed -->
        
        <ul class="widget w-activity-feed notification-list">
          <li>
            <div class="author-thumb"> <img src="img/avatar49-sm.jpg" alt="author"> </div>
            
            <div class="notification-event">
            <span class="h6 notification-friend">Marina Polson</span>
							
							<span class="notification-date"><time class="entry-date updated bold" datetime="2004-07-24T18:18">Time Left: 2:39:02 </time></span>
						</div>

          </li>
        </ul>
        
        <!-- .. end W-Activity-Feed --> 
      </div>
      <div class="ui-block">
        <div class="ui-block-title">
          <h6 class="title">Question Palette</h6>
        </div>
        
        <!-- W-Activity-Feed -->
        
        <div class="question-status">
              <ul>
            <li><a href="" class="common tagged">Q01</a></li>
            <li><a href="" class="common attempt">Q02</a></li>
            <li><a href="" class="common attempt">Q03</a></li>
            <li><a href="" class="common attempt">Q04</a></li>
            <li><a href="" class="common attempt">Q05</a></li>
            <li><a href="" class="common attempt">Q06</a></li>
            <li><a href="" class="common attempt">Q07</a></li>
            <li><a href="" class="common attempt">Q08</a></li>
            <li><a href="" class="common attempt">Q09</a></li>
            <li><a href="" class="common attempt">Q10</a></li>
            <li><a href="" class="common attempt">Q11</a></li>
            <li><a href="" class="common attempt">Q12</a></li>
            <li><a href="" class="common attempt">Q13</a></li>
            <li><a href="" class="common attempt">Q14</a></li>
            <li><a href="" class="common attempt">Q15</a></li>
            <li><a href="" class="common attempt">Q16</a></li>
            <li><a href="" class="common attempt">Q17</a></li>
            <li><a href="" class="common attempt">Q18</a></li>
            <li><a href="" class="common attempt">Q19</a></li>
            <li><a href="" class="common attempt">Q20</a></li>
            <li><a href="" class="common attempt">Q21</a></li>
            <li><a href="" class="common attempt">Q22</a></li>
            <li><a href="" class="common attempt">Q23</a></li>
            <li><a href="" class="common attempt">Q24</a></li>
            <li><a href="" class="common attempt">Q25</a></li>
            <li><a href="" class="common attempt">Q26</a></li>
          </ul>
            </div>
        <hr>
        <div class="gides">
          <h6>Legends:</h6>
          <ul class="list-inline">
            <li><span> <span class="statistics-point answerd"></span> Answerd </span></li>
            <li><span> <span class="statistics-point not-answerd"></span> Answerd </span></li>
            <li><span> <span class="statistics-point marked"></span> Answerd </span></li>
            <li><span> <span class="statistics-point not-visited"></span> Answerd </span></li>
          </ul>
        </div>
        <div class="action">
          
            <button class="btn btn-border-think c-grey btn-transparent custom-color">View QP</button>
            <button class="btn btn-border-think c-grey btn-transparent custom-color" style="float: right;">Instructions</button>
            <br>
            <button class="btn btn-blue full-width">Submit</button>
          
        </div>
        
        <!-- .. end W-Activity-Feed --> 
      </div>
    </aside>
    
    
    <div class="fixed-bottom for-submit-test">
    <div class="post-additional-info inline-items"> <a href="#" class="btn btn-smoke btn-sm btn-light-bg">Mark For Review</a> <a href="#" class="btn btn-smoke btn-sm btn-light-bg">Clear</a>
                <div class="comments-shared"> <a href="#" class="btn btn-blue btn-md-2">Save &amp; Next</a> </div>
              </div>
    
    </div>
  </div>
</div>
</form>

<!-- ... end start test tabs --> 

<!-- JS Scripts -->
<script src="js/jquery-3.2.1.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/jquery.mousewheel.js"></script>
<script src="js/perfect-scrollbar.js"></script>
<script src="js/jquery.matchHeight.js"></script>
<script src="js/svgxuse.js"></script>
<script src="js/imagesloaded.pkgd.js"></script>
<script src="js/Headroom.js"></script>
<script src="js/velocity.js"></script>
<script src="js/ScrollMagic.js"></script>
<script src="js/jquery.waypoints.js"></script>
<script src="js/jquery.countTo.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/material.min.js"></script>
<script src="js/bootstrap-select.js"></script>
<script src="js/smooth-scroll.js"></script>
<script src="js/selectize.js"></script>
<script src="js/swiper.jquery.js"></script>
<script src="js/moment.js"></script>
<script src="js/daterangepicker.js"></script>
<script src="js/simplecalendar.js"></script>
<script src="js/fullcalendar.js"></script>
<script src="js/isotope.pkgd.js"></script>
<script src="js/ajax-pagination.js"></script>
<script src="js/Chart.js"></script>
<script src="js/chartjs-plugin-deferred.js"></script>
<script src="js/circle-progress.js"></script>
<script src="js/loader.js"></script>
<script src="js/run-chart.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<script src="js/jquery.gifplayer.js"></script>
<script src="js/mediaelement-and-player.js"></script>
<script src="js/mediaelement-playlist-plugin.min.js"></script>
<script src="js/base-init.js"></script>
<script defer src="fonts/fontawesome-all.js"></script>
<script src="Bootstrap/dist/js/bootstrap.bundle.js"></script>
</body>
</html>
