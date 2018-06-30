<!DOCTYPE html>
<html lang="en">
<head>
<title>My Test</title>

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

<!-- Fixed Sidebar Left -->

<div class="fixed-sidebar">
  <div class="fixed-sidebar-left sidebar--small" id="sidebar-left"> <a href="02-ProfilePage.html" class="logo">
    <div class="img-wrap"> <img src="img/logo.png" alt="eGyanshala"> </div>
    </a>
    <div class="mCustomScrollbar" data-mcs-theme="dark">
      <ul class="left-menu">
        <li> <a href="#" class="js-sidebar-open">
          <svg class="olymp-menu-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="OPEN MENU">
            <use xlink:href="svg-icons/sprites/icons.svg#olymp-menu-icon"></use>
          </svg>
          </a> </li>
        <li> <a href="03-Newsfeed.html">
          <svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="right"   data-original-title="My Test">
            <use xlink:href="svg-icons/sprites/icons.svg#olymp-newsfeed-icon"></use>
          </svg>
          </a> </li>
        <li> <a href="16-FavPagesFeed.html">
          <svg class="olymp-star-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Buy Product">
            <use xlink:href="svg-icons/sprites/icons.svg#olymp-star-icon"></use>
          </svg>
          </a> </li>
        <li> <a href="17-FriendGroups.html">
          <svg class="olymp-happy-faces-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Reports">
            <use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-faces-icon"></use>
          </svg>
          </a> </li>
        <li> <a href="18-MusicAndPlaylists.html">
          <svg class="olymp-headphones-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Notification">
            <use xlink:href="svg-icons/sprites/icons.svg#olymp-headphones-icon"></use>
          </svg>
          </a> </li>
        <li> <a href="19-WeatherWidget.html">
          <svg class="olymp-weather-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Bookmarks">
            <use xlink:href="svg-icons/sprites/icons.svg#olymp-weather-icon"></use>
          </svg>
          </a> </li>
        <li> <a href="20-CalendarAndEvents-MonthlyCalendar.html">
          <svg class="olymp-calendar-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="News">
            <use xlink:href="svg-icons/sprites/icons.svg#olymp-calendar-icon"></use>
          </svg>
          </a> </li>
        <li> <a href="24-CommunityBadges.html">
          <svg class="olymp-badge-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Test Question Bank">
            <use xlink:href="svg-icons/sprites/icons.svg#olymp-badge-icon"></use>
          </svg>
          </a> </li>
      </ul>
    </div>
  </div>
  <div class="fixed-sidebar-left sidebar--large" id="sidebar-left-1"> <a href="02-ProfilePage.html" class="logo">
    <div class="img-wrap"> <img src="img/logo.png" alt="eGyanshala"> </div>
    <div class="title-block">
      <h6 class="logo-title">Account</h6>
    </div>
    </a>
    <div class="mCustomScrollbar" data-mcs-theme="dark">
      <ul class="left-menu">
        <li> <a href="#" class="js-sidebar-open">
          <svg class="olymp-close-icon left-menu-icon">
            <use xlink:href="svg-icons/sprites/icons.svg#olymp-close-icon"></use>
          </svg>
          <span class="left-menu-title">Collapse Menu</span> </a> </li>
        <li> <a href="03-Newsfeed.html">
          <svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="right"   data-original-title="NEWSFEED">
            <use xlink:href="svg-icons/sprites/icons.svg#olymp-newsfeed-icon"></use>
          </svg>
          <span class="left-menu-title">My Test</span> </a> </li>
        <li> <a href="16-FavPagesFeed.html">
          <svg class="olymp-star-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="FAV PAGE">
            <use xlink:href="svg-icons/sprites/icons.svg#olymp-star-icon"></use>
          </svg>
          <span class="left-menu-title">Buy Product</span> </a> </li>
        <li> <a href="17-FriendGroups.html">
          <svg class="olymp-happy-faces-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="FRIEND GROUPS">
            <use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-faces-icon"></use>
          </svg>
          <span class="left-menu-title">Reports</span> </a> </li>
        <li> <a href="18-MusicAndPlaylists.html">
          <svg class="olymp-headphones-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="MUSIC&PLAYLISTS">
            <use xlink:href="svg-icons/sprites/icons.svg#olymp-headphones-icon"></use>
          </svg>
          <span class="left-menu-title">Notification</span> </a> </li>
        <li> <a href="19-WeatherWidget.html">
          <svg class="olymp-weather-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="WEATHER APP">
            <use xlink:href="svg-icons/sprites/icons.svg#olymp-weather-icon"></use>
          </svg>
          <span class="left-menu-title">Bookmarks</span> </a> </li>
        <li> <a href="20-CalendarAndEvents-MonthlyCalendar.html">
          <svg class="olymp-calendar-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="CALENDAR AND EVENTS">
            <use xlink:href="svg-icons/sprites/icons.svg#olymp-calendar-icon"></use>
          </svg>
          <span class="left-menu-title">News</span> </a> </li>
        <li> <a href="24-CommunityBadges.html">
          <svg class="olymp-badge-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Community Badges">
            <use xlink:href="svg-icons/sprites/icons.svg#olymp-badge-icon"></use>
          </svg>
          <span class="left-menu-title">Test Question Banks</span> </a> </li>
      </ul>
    </div>
  </div>
</div>
<!-- ... end Fixed Sidebar Left --> 

<!-- Fixed Sidebar Left -->

<div class="fixed-sidebar fixed-sidebar-responsive">
  <div class="fixed-sidebar-left sidebar--small" id="sidebar-left-responsive"> <a href="#" class="logo js-sidebar-open"> <img src="img/logo.png" alt="Olympus"> </a> </div>
  <div class="fixed-sidebar-left sidebar--large" id="sidebar-left-1-responsive"> <a href="#" class="logo">
    <div class="img-wrap"> <img src="img/logo.png" alt="Olympus"> </div>
    <div class="title-block">
      <h6 class="logo-title">Account</h6>
    </div>
    </a>
    <div class="mCustomScrollbar" data-mcs-theme="dark">
      <div class="control-block">
        <div class="author-page author vcard inline-items">
          <div class="author-thumb"> <img alt="author" src="img/author-page.jpg" class="avatar"> <span class="icon-status online"></span> </div>
          <a href="02-ProfilePage.html" class="author-name fn">
          <div class="author-title"> Vikash Singh
            <svg class="olymp-dropdown-arrow-icon">
              <use xlink:href="svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon"></use>
            </svg>
          </div>
          <span class="author-subtitle">vikashsingh@gmail.com</span> </a> </div>
      </div>
      <div class="ui-block-title ui-block-title-small">
        <h6 class="title">MAIN SECTIONS</h6>
      </div>
      <ul class="left-menu">
        <li> <a href="#" class="js-sidebar-open">
          <svg class="olymp-close-icon left-menu-icon">
            <use xlink:href="svg-icons/sprites/icons.svg#olymp-close-icon"></use>
          </svg>
          <span class="left-menu-title">Collapse Menu</span> </a> </li>
        <li> <a href="mobile-index.html">
          <svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="right"   data-original-title="My Test">
            <use xlink:href="svg-icons/sprites/icons.svg#olymp-newsfeed-icon"></use>
          </svg>
          <span class="left-menu-title">My Test</span> </a> </li>
        <li> <a href="Mobile-28-YourAccount-PersonalInformation.html">
          <svg class="olymp-star-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Buy Product">
            <use xlink:href="svg-icons/sprites/icons.svg#olymp-star-icon"></use>
          </svg>
          <span class="left-menu-title">Buy Product</span> </a> </li>
        <li> <a href="mobile-29-YourAccount-AccountSettings.html">
          <svg class="olymp-happy-faces-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Reports">
            <use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-faces-icon"></use>
          </svg>
          <span class="left-menu-title">Reports</span> </a> </li>
        <li> <a href="Mobile-30-YourAccount-ChangePassword.html">
          <svg class="olymp-headphones-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Notification">
            <use xlink:href="svg-icons/sprites/icons.svg#olymp-headphones-icon"></use>
          </svg>
          <span class="left-menu-title">Notification</span> </a> </li>
        <li> <a href="Mobile-31-YourAccount-HobbiesAndInterests.html">
          <svg class="olymp-weather-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Bookmarks">
            <use xlink:href="svg-icons/sprites/icons.svg#olymp-weather-icon"></use>
          </svg>
          <span class="left-menu-title">Bookmarks</span> </a> </li>
        <li> <a href="Mobile-32-YourAccount-EducationAndEmployement.html">
          <svg class="olymp-calendar-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="News">
            <use xlink:href="svg-icons/sprites/icons.svg#olymp-calendar-icon"></use>
          </svg>
          <span class="left-menu-title">News</span> </a> </li>
        <li> <a href="Mobile-33-YourAccount-Notifications.html">
          <svg class="olymp-badge-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Test Questions Bank">
            <use xlink:href="svg-icons/sprites/icons.svg#olymp-badge-icon"></use>
          </svg>
          <span class="left-menu-title">Test Questions Bank</span> </a> </li>
      </ul>
      <div class="ui-block-title ui-block-title-small">
        <h6 class="title">YOUR ACCOUNT</h6>
      </div>
      <ul class="account-settings">
        <li> <a href="#">
          <svg class="olymp-menu-icon">
            <use xlink:href="svg-icons/sprites/icons.svg#olymp-menu-icon"></use>
          </svg>
          <span>Profile Settings</span> </a> </li>
        <li> <a href="#">
          <svg class="olymp-logout-icon">
            <use xlink:href="svg-icons/sprites/icons.svg#olymp-logout-icon"></use>
          </svg>
          <span>Log Out</span> </a> </li>
      </ul>
    </div>
  </div>
</div>

<!-- ... end Fixed Sidebar Left --> 

<!-- Header-BP -->
<header class="header" id="site-header">
  <div class="page-title">
    <h6>Account</h6>
  </div>
  <div class="header-content-wrapper">
    <div class="control-block">
      <div class="author-page author vcard inline-items more">
        <div class="author-thumb"> <img alt="author" src="img/author-page.jpg" class="avatar"> <span class="icon-status online"></span>
          <div class="more-dropdown more-with-triangle">
            <div class="mCustomScrollbar" data-mcs-theme="dark">
              <div class="ui-block-title ui-block-title-small">
                <h6 class="title">Your Account</h6>
              </div>
              <ul class="account-settings">
                <li> <a href="29-YourAccount-AccountSettings.html">
                  <svg class="olymp-menu-icon">
                    <use xlink:href="svg-icons/sprites/icons.svg#olymp-menu-icon"></use>
                  </svg>
                  <span>Profile Settings</span> </a> </li>
                <li> <a href="#">
                  <svg class="olymp-logout-icon">
                    <use xlink:href="svg-icons/sprites/icons.svg#olymp-logout-icon"></use>
                  </svg>
                  <span>Log Out</span> </a> </li>
              </ul>
            </div>
          </div>
        </div>
        <a href="02-ProfilePage.html" class="author-name fn">
        <div class="author-title"> Vikash Singh
          <svg class="olymp-dropdown-arrow-icon">
            <use xlink:href="svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon"></use>
          </svg>
        </div>
        <span class="author-subtitle">vikashsingh@gmail.com</span> </a> </div>
    </div>
  </div>
</header>

<!-- ... end Header-BP --> 

<!-- Responsive Header-BP -->



<!-- ... end Responsive Header-BP -->
<div class="header-spacer"></div>
<form>
<div class="container">
<h2 class="text-center">Test Question Bank</h2>
      <div class="row">
      
    <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="ui-block responsive-flex">
        <div class="ui-block-title">
              <div class="w-select">
            <div class="title">Select Course</div>
            <fieldset class="form-group">
                  <select class="selectpicker form-control">
                <option value="DA">Bioloagy</option>
                <option value="NU">Number of Likes</option>
                <option value="NU">Number of Shared</option>
              </select>
                </fieldset>
          </div>
              <div class="w-select">
            <div class="title">Select Subject</div>
            <fieldset class="form-group">
                  <select class="selectpicker form-control">
                <option value="DA">Bioloagy</option>
                <option value="NU">Number of Likes</option>
                <option value="NU">Number of Shared</option>
              </select>
                </fieldset>
          </div>
              <div class="w-select">
            <div class="title">Select Test Series</div>
            <fieldset class="form-group">
                  <select class="selectpicker form-control">
                <option value="DA">English</option>
                <option value="NU">Hindi</option>
              </select>
                </fieldset>
          </div>
          </div>
      </div>
        </div>
  </div>
    </div>
<div class="container">
<div class="row">
<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<div class="question-box">
<p>Q1. Radioisotopes are frequently used in the study of cells. Assume a culture of E. coli is grown in a culture medium containing radioactive sulphur. At the end of 48 hours, it is expected to find the radioactive label located in </p>
              <div class="options">
              <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios">
                    A.	
                    DNA </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios">
                    A.	
                    DNA </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios">
                    A.	
                    DNA </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios">
                    A.	
                    DNA </label>
                </div>
              </div>
</div>
<div class="question-box">
<p>Q1. Radioisotopes are frequently used in the study of cells. Assume a culture of E. coli is grown in a culture medium containing radioactive sulphur. At the end of 48 hours, it is expected to find the radioactive label located in </p>
              <div class="options">
              <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios">
                    A.	
                    DNA </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios">
                    A.	
                    DNA </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios">
                    A.	
                    DNA </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios">
                    A.	
                    DNA </label>
                </div>
              </div>
</div>
<div class="question-box">
<p>Q1. Radioisotopes are frequently used in the study of cells. Assume a culture of E. coli is grown in a culture medium containing radioactive sulphur. At the end of 48 hours, it is expected to find the radioactive label located in </p>
              <div class="options">
              <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios">
                    A.	
                    DNA </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios">
                    A.	
                    DNA </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios">
                    A.	
                    DNA </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios">
                    A.	
                    DNA </label>
                </div>
              </div>
</div>
<div class="question-box">
<p>Q1. Radioisotopes are frequently used in the study of cells. Assume a culture of E. coli is grown in a culture medium containing radioactive sulphur. At the end of 48 hours, it is expected to find the radioactive label located in </p>
              <div class="options">
              <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios">
                    A.	
                    DNA </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios">
                    A.	
                    DNA </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios">
                    A.	
                    DNA </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios">
                    A.	
                    DNA </label>
                </div>
              </div>
</div>
<div class="question-box">
<p>Q1. Radioisotopes are frequently used in the study of cells. Assume a culture of E. coli is grown in a culture medium containing radioactive sulphur. At the end of 48 hours, it is expected to find the radioactive label located in </p>
              <div class="options">
              <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios">
                    A.	
                    DNA </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios">
                    A.	
                    DNA </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios">
                    A.	
                    DNA </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios">
                    A.	
                    DNA </label>
                </div>
 </div>
 
</div>

</div>
</div>
</div> 
</form>
<a class="back-to-top" href="#"> <img src="svg-icons/back-to-top.svg" alt="arrow" class="back-icon"> </a> 

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