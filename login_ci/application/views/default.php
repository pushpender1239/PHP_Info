<!DOCTYPE html>
<html lang="en">
<head>
<title>My Test</title>

<!-- Required meta tags always come first -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="x-ua-compatible" content="ie=edge">

<!-- Main Font -->
<script src="<?php echo base_url();?>web_assets/js/webfontloader.min.js"></script>
<script>
		WebFont.load({
			google: {
				families: ['Roboto:300,400,500,700:latin']
			}
		});
	</script>

<!-- Bootstrap CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>web_assets/Bootstrap/dist/css/bootstrap-reboot.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>web_assets/Bootstrap/dist/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>web_assets/Bootstrap/dist/css/bootstrap-grid.css">

<!-- Main Styles CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>web_assets/css/main.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>web_assets/css/fonts.min.css">
</head>
<body>

<!-- Fixed Sidebar Left -->

<div class="fixed-sidebar">
  <div class="fixed-sidebar-left sidebar--small" id="sidebar-left"> <a href="<?php echo site_url();?>login_register" class="logo">
    <div class="img-wrap"> <img src="<?php echo base_url();?>web_assets/img/logo-colored.png" alt="eGyanshala"> </div>
    </a>
    <div class="mCustomScrollbar" data-mcs-theme="dark">
      <ul class="left-menu">
        <li> <a href="#" class="js-sidebar-open">
          <svg class="olymp-menu-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="OPEN MENU">
            <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg"></use>
          </svg>
          </a> </li>
        <li> <a href="test1.php">
          <svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="right"   data-original-title="My Test">
            <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-newsfeed-icon"></use>
          </svg>
          </a> </li>
        <li> <a href="<?php echo site_url();?>test_question_bank">
          <svg class="olymp-star-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Buy Product">
            <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-star-icon"></use>
          </svg>
          </a> </li>
        <li> <a href="17-FriendGroups.html">
          <svg class="olymp-happy-faces-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Reports">
            <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-happy-faces-icon"></use>
          </svg>
          </a> </li>
        <li> <a href="<?php echo site_url();?>test_question_bank">
          <svg class="olymp-headphones-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Notification">
            <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-headphones-icon"></use>
          </svg>
          </a> </li>
        <li> <a href="<?php echo site_url();?>bookmarks">
          <svg class="olymp-weather-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Bookmarks">
            <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-weather-icon"></use>
          </svg>
          </a> </li>
        <li> <a href="<?php echo site_url();?>news">
          <svg class="olymp-calendar-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="News">
            <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-calendar-icon"></use>
          </svg>
          </a> </li>
        <li> <a href="test_question_bank.php">
          <svg class="olymp-badge-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Test Question Bank">
            <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-badge-icon"></use>
          </svg>
          </a> </li>
      </ul>
    </div>
  </div>
  <div class="fixed-sidebar-left sidebar--large" id="sidebar-left-1"> <a href="<?php echo site_url();?>login_register" class="logo">
    <div class="img-wrap"> <img src="<?php echo base_url();?>web_assets/img/logo.png" alt="eGyanshala"> </div>
    <div class="title-block">
      <h6 class="logo-title">Account</h6>
    </div>
    </a>
    <div class="mCustomScrollbar" data-mcs-theme="dark">
      <ul class="left-menu">
        <li> <a href="#" class="js-sidebar-open">
          <svg class="olymp-close-icon left-menu-icon">
            <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-close-icon"></use>
          </svg>
          <span class="left-menu-title">Collapse Menu</span> </a> </li>
        <li> <a href="test1.php">
          <svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="right"   data-original-title="NEWSFEED">
            <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-newsfeed-icon"></use>
          </svg>
          <span class="left-menu-title">My Test</span> </a> </li>
        <li> <a href="<?php echo site_url();?>application/views/<?php echo site_url();?>application/views/<?php echo site_url();?>test_question_bank">
          <svg class="olymp-star-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="FAV PAGE">
            <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-star-icon"></use>
          </svg>
          <span class="left-menu-title">Buy Product</span> </a> </li>
        <li> <a href="17-FriendGroups.html">
          <svg class="olymp-happy-faces-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="FRIEND GROUPS">
            <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-happy-faces-icon"></use>
          </svg>
          <span class="left-menu-title">Reports</span> </a> </li>
        <li> <a href="<?php echo site_url();?>test_question_bank">
          <svg class="olymp-headphones-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="MUSIC&PLAYLISTS">
            <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-headphones-icon"></use>
          </svg>
          <span class="left-menu-title">Notification</span> </a> </li>
        <li> <a href="<?php echo site_url();?>bookmarks">
          <svg class="olymp-weather-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="WEATHER APP">
            <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-weather-icon"></use>
          </svg>
          <span class="left-menu-title">Bookmarks</span> </a> </li>
        <li> <a href="<?php echo site_url();?>news">
          <svg class="olymp-calendar-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="CALENDAR AND EVENTS">
            <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-calendar-icon"></use>
          </svg>
          <span class="left-menu-title">News</span> </a> </li>
        <li> <a href="test_question_bank.php">
          <svg class="olymp-badge-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Community Badges">
            <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-badge-icon"></use>
          </svg>
          <span class="left-menu-title">Test Question Banks</span> </a> </li>
      </ul>
    </div>
  </div>
</div>
<!-- ... end Fixed Sidebar Left --> 

<!-- Fixed Sidebar Left -->

<div class="fixed-sidebar fixed-sidebar-responsive">
  <div class="fixed-sidebar-left sidebar--small" id="sidebar-left-responsive"> <a href="#" class="logo js-sidebar-open"> <img src="<?php echo base_url();?>web_assets/img/logo.png" alt="eGyanshala"> </a> </div>
  <div class="fixed-sidebar-left sidebar--large" id="sidebar-left-1-responsive"> <a href="#" class="logo">
    <div class="img-wrap"> <img src="<?php echo base_url();?>web_assets/img/logo.png" alt="eGyanshala"> </div>
    <div class="title-block">
      <h6 class="logo-title">Account</h6>
    </div>
    </a>
    <div class="mCustomScrollbar" data-mcs-theme="dark">
      <div class="control-block">
        <div class="author-page author vcard inline-items">
          <div class="author-thumb"> <img alt="author" src="<?php echo base_url();?>web_assets/img/author-page.jpg" class="avatar"> <span class="icon-status online"></span> </div>
          <a href="<?php echo site_url();?>login_register" class="author-name fn">
          <div class="author-title"> Vikash Singh
            <svg class="olymp-dropdown-arrow-icon">
              <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon"></use>
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
            <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-close-icon"></use>
          </svg>
          <span class="left-menu-title">Collapse Menu</span> </a> </li>
        <li> <a href="mobile-index.html">
          <svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="right"   data-original-title="My Test">
            <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-newsfeed-icon"></use>
          </svg>
          <span class="left-menu-title">My Test</span> </a> </li>
        <li> <a href="Mobile-28-YourAccount-PersonalInformation.html">
          <svg class="olymp-star-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Buy Product">
            <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-star-icon"></use>
          </svg>
          <span class="left-menu-title">Buy Product</span> </a> </li>
        <li> <a href="mobile-29-YourAccount-AccountSettings.html">
          <svg class="olymp-happy-faces-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Reports">
            <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-happy-faces-icon"></use>
          </svg>
          <span class="left-menu-title">Reports</span> </a> </li>
        <li> <a href="Mobile-30-YourAccount-ChangePassword.html">
          <svg class="olymp-headphones-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Notification">
            <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-headphones-icon"></use>
          </svg>
          <span class="left-menu-title">Notification</span> </a> </li>
        <li> <a href="Mobile-31-YourAccount-HobbiesAndInterests.html">
          <svg class="olymp-weather-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Bookmarks">
            <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-weather-icon"></use>
          </svg>
          <span class="left-menu-title">Bookmarks</span> </a> </li>
        <li> <a href="Mobile-32-YourAccount-EducationAndEmployement.html">
          <svg class="olymp-calendar-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="News">
            <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-calendar-icon"></use>
          </svg>
          <span class="left-menu-title">News</span> </a> </li>
        <li> <a href="Mobile-33-YourAccount-Notifications.html">
          <svg class="olymp-badge-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Test Questions Bank">
            <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-badge-icon"></use>
          </svg>
          <span class="left-menu-title">Test Questions Bank</span> </a> </li>
      </ul>
      <div class="ui-block-title ui-block-title-small">
        <h6 class="title">YOUR ACCOUNT</h6>
      </div>
      <ul class="account-settings">
        <li> <a href="#">
          <svg class="olymp-menu-icon">
            <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-menu-icon"></use>
          </svg>
          <span>Profile Settings</span> </a> </li>
        <li> <a href="#">
          <svg class="olymp-logout-icon">
            <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-logout-icon"></use>
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
        <div class="author-thumb"> <img alt="author" src="<?php echo base_url();?>web_assets/img/author-page.jpg" class="avatar"> <span class="icon-status online"></span>
          <div class="more-dropdown more-with-triangle">
            <div class="mCustomScrollbar" data-mcs-theme="dark">
              <div class="ui-block-title ui-block-title-small">
                <h6 class="title">Your Account</h6>
              </div>
              <ul class="account-settings">
                <li> <a href="29-YourAccount-AccountSettings.html">
                  <svg class="olymp-menu-icon">
                    <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-menu-icon"></use>
                  </svg>
                  <span>Profile Settings</span> </a> </li>
                <li> <a href="#">
                  <svg class="olymp-logout-icon">
                    <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-logout-icon"></use>
                  </svg>
                  <span>Log Out</span> </a> </li>
              </ul>
            </div>
          </div>
        </div>
        <a href="<?php echo site_url();?>login_register" class="author-name fn">
        <div class="author-title"> Vikash Singh
          <svg class="olymp-dropdown-arrow-icon">
            <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon"></use>
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
<div class="container">
  <div class="row">
    <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
      <div class="clients-grid">
        <ul class="cat-list-bg-style align-center sorting-menu">
          <li class="cat-list__item active" data-filter="*"><a href="#" class="">All</a></li>
          <li class="cat-list__item" data-filter=".running"><a href="#" class="">Active</a></li>
          <li class="cat-list__item" data-filter=".upcoming"><a href="#" class="">Upcoming</a></li>
          <li class="cat-list__item" data-filter=".missed"><a href="#" class="">Missed</a></li>
          <li class="cat-list__item" data-filter=".complete"><a href="#" class="">Complete</a></li>
        </ul>
        <div class="row sorting-container" id="clients-grid-1" data-layout="masonry">
          <div class="col col-xl-3 col-lg-6 col-md-6 col-sm-6 col-6 sorting-item ecommerce running">
            <div class="ui-block"> 
              
              <!-- Friend Item -->
              
              <div class="friend-item">
                <div class="friend-header-thumb"> <img src="<?php echo base_url();?>web_assets/img/friend2.jpg" alt="friend"> </div>
                <div class="friend-item-content">
                  <div class="friend-avatar">
                    <div class="author-thumb"> <img src="<?php echo base_url();?>web_assets/img/avatar2.jpg" alt="author"> </div>
                    <div class="author-content"> <a href="#" class="h5 author-name">Course Name</a>
                      <div class="country">Test Name</div>
                    </div>
                  </div>
                  <div class="swiper-container swiper-swiper-unique-id-1 initialized swiper-container-horizontal" id="swiper-unique-id-1">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide swiper-slide-duplicate swiper-slide-prev swiper-slide-duplicate-next"> </div>
                      <div class="swiper-slide swiper-slide-active">
                        <div class="friend-count">
                          <div class="friend-count-item">
                            <div class="h6">28 May, 2018</div>
                            <div class="title">Start Date</div>
                          </div>
                          <div class="friend-count-item">
                            <div class="h6">30 May, 2018</div>
                            <div class="title">End Date</div>
                          </div>
                        </div>
                        <div class="friend-count">
                          <div class="friend-count-item">
                            <div class="h6">3 PM</div>
                            <div class="title">Time</div>
                          </div>
                          <div class="friend-count-item">
                            <div class="h6">45 Minutes</div>
                            <div class="title">Duration</div>
                          </div>
                        </div>
                        <div class="btn btn-blue btn-md-2">View</div>
                      </div>
                      <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 243px;">
                        <div class="friend-count" data-swiper-parallax="-500" style="transform: translate3d(500px, 0px, 0px); transition-duration: 0ms;">
                          <div class="friend-count-item">
                            <div class="h6">52</div>
                            <div class="title">Friends</div>
                          </div>
                          <div class="friend-count-item">
                            <div class="h6">240</div>
                            <div class="title">Photos</div>
                          </div>
                          <div class="friend-count-item">
                            <div class="h6">16</div>
                            <div class="title">Videos</div>
                          </div>
                        </div>
                        <div class="control-block-button" data-swiper-parallax="-100" style="transform: translate3d(100px, 0px, 0px); transition-duration: 0ms;"> <a href="#" class="btn btn-control bg-blue">
                          <svg class="olymp-happy-face-icon">
                            <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use>
                          </svg>
                          </a> <a href="#" class="btn btn-control bg-purple">
                          <svg class="olymp-chat---messages-icon">
                            <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use>
                          </svg>
                          </a> </div>
                      </div>
                    </div>
                    
                    <!-- If we need pagination --> 
                    
                  </div>
                </div>
              </div>
              
              <!-- ... end Friend Item --> </div>
          </div>
          <div class="col col-xl-3 col-lg-6 col-md-6 col-sm-6 col-6 sorting-item ecommerce upcoming">
            <div class="ui-block"> 
              
              <!-- Friend Item -->
              
              <div class="friend-item">
                <div class="friend-header-thumb"> <img src="<?php echo base_url();?>web_assets/img/friend1.jpg" alt="friend"> </div>
                <div class="friend-item-content">
                  <div class="friend-avatar">
                    <div class="author-thumb"> <img src="<?php echo base_url();?>web_assets/img/avatar1.jpg" alt="author"> </div>
                    <div class="author-content"> <a href="#" class="h5 author-name">Course Name</a>
                      <div class="country">Test Name</div>
                    </div>
                  </div>
                  <div class="swiper-container swiper-swiper-unique-id-1 initialized swiper-container-horizontal" id="swiper-unique-id-2">
                    <div class="swiper-wrapper" style="width: 972px; transform: translate3d(-243px, 0px, 0px); transition-duration: 0ms;">
                      <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" style="width: 243px;">
                        <div class="friend-count" data-swiper-parallax="-500" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;"> <a href="#" class="friend-count-item">
                          <div class="h6">28 May, 2018</div>
                          <div class="title">Start Date</div>
                          </a> <a href="#" class="friend-count-item">
                          <div class="h6">30 May, 2018</div>
                          <div class="title">End Date</div>
                          </a> </div>
                        <div class="friend-count" data-swiper-parallax="-500" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;"> <a href="#" class="friend-count-item">
                          <div class="h6">3 PM</div>
                          <div class="title">Time</div>
                          </a> <a href="#" class="friend-count-item">
                          <div class="h6">45 Minutes</div>
                          <div class="title">Duration</div>
                          </a> </div>
                        <button class="btn btn-blue btn-md-2">Coming soon</button>
                      </div>
                      <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 243px;">
                        <div class="friend-count" data-swiper-parallax="-500" style="transform: translate3d(500px, 0px, 0px); transition-duration: 0ms;"> <a href="#" class="friend-count-item">
                          <div class="h6">52</div>
                          <div class="title">Friends</div>
                          </a> <a href="#" class="friend-count-item">
                          <div class="h6">240</div>
                          <div class="title">Photos</div>
                          </a> <a href="#" class="friend-count-item">
                          <div class="h6">16</div>
                          <div class="title">Videos</div>
                          </a> </div>
                        <div class="control-block-button" data-swiper-parallax="-100" style="transform: translate3d(100px, 0px, 0px); transition-duration: 0ms;"> <a href="#" class="btn btn-control bg-blue">
                          <svg class="olymp-happy-face-icon">
                            <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use>
                          </svg>
                          </a> <a href="#" class="btn btn-control bg-purple">
                          <svg class="olymp-chat---messages-icon">
                            <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use>
                          </svg>
                          </a> </div>
                      </div>
                    </div>
                    
                    <!-- If we need pagination --> 
                    
                  </div>
                </div>
              </div>
              
              <!-- ... end Friend Item --> </div>
          </div>
          <div class="col col-xl-3 col-lg-6 col-md-6 col-sm-6 col-6 sorting-item ecommerce missed">
            <div class="ui-block"> 
              
              <!-- Friend Item -->
              
              <div class="friend-item">
                <div class="friend-header-thumb"> <img src="<?php echo base_url();?>web_assets/img/friend1.jpg" alt="friend"> </div>
                <div class="friend-item-content">
                  <div class="friend-avatar">
                    <div class="author-thumb"> <img src="<?php echo base_url();?>web_assets/img/avatar1.jpg" alt="author"> </div>
                    <div class="author-content"> <a href="#" class="h5 author-name">Course Name</a>
                      <div class="country">Test Name</div>
                    </div>
                  </div>
                  <div class="swiper-container swiper-swiper-unique-id-1 initialized swiper-container-horizontal" id="swiper-unique-id-3">
                    <div class="swiper-wrapper" style="width: 972px; transform: translate3d(-243px, 0px, 0px); transition-duration: 0ms;">
                      <div class="swiper-slide swiper-slide-duplicate swiper-slide-prev swiper-slide-duplicate-next" data-swiper-slide-index="1" style="width: 243px;"> </div>
                      <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" style="width: 243px;">
                        <div class="friend-count" data-swiper-parallax="-500" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;"> <a href="#" class="friend-count-item">
                          <div class="h6">28 May, 2018</div>
                          <div class="title">Start Date</div>
                          </a> <a href="#" class="friend-count-item">
                          <div class="h6">30 May, 2018</div>
                          <div class="title">End Date</div>
                          </a> </div>
                        <div class="friend-count" data-swiper-parallax="-500" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;"> <a href="#" class="friend-count-item">
                          <div class="h6">3 PM</div>
                          <div class="title">Time</div>
                          </a> <a href="#" class="friend-count-item">
                          <div class="h6">45 Minutes</div>
                          <div class="title">Duration</div>
                          </a> </div>
                        <button class="btn btn-blue btn-md-2 btn-muted" disabled>Expire</button>
                      </div>
                      <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 243px;">
                        <div class="friend-count" data-swiper-parallax="-500" style="transform: translate3d(500px, 0px, 0px); transition-duration: 0ms;"> <a href="#" class="friend-count-item">
                          <div class="h6">52</div>
                          <div class="title">Friends</div>
                          </a> <a href="#" class="friend-count-item">
                          <div class="h6">240</div>
                          <div class="title">Photos</div>
                          </a> <a href="#" class="friend-count-item">
                          <div class="h6">16</div>
                          <div class="title">Videos</div>
                          </a> </div>
                        <div class="control-block-button" data-swiper-parallax="-100" style="transform: translate3d(100px, 0px, 0px); transition-duration: 0ms;"> <a href="#" class="btn btn-control bg-blue">
                          <svg class="olymp-happy-face-icon">
                            <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use>
                          </svg>
                          </a> <a href="#" class="btn btn-control bg-purple">
                          <svg class="olymp-chat---messages-icon">
                            <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use>
                          </svg>
                          </a> </div>
                      </div>
                    </div>
                    
                    <!-- If we need pagination --> 
                    
                  </div>
                </div>
              </div>
              
              <!-- ... end Friend Item --> </div>
          </div>
          <div class="col col-xl-3 col-lg-6 col-md-6 col-sm-6 col-6 sorting-item ecommerce complete">
            <div class="ui-block"> 
              
              <!-- Friend Item -->
              
              <div class="friend-item">
                <div class="friend-header-thumb"> <img src="<?php echo base_url();?>web_assets/img/friend1.jpg" alt="friend"> </div>
                <div class="friend-item-content">
                  <div class="friend-avatar">
                    <div class="author-thumb"> <img src="<?php echo base_url();?>web_assets/img/avatar1.jpg" alt="author"> </div>
                    <div class="author-content"> <a href="#" class="h5 author-name">Course Name</a>
                      <div class="country">Test Name</div>
                    </div>
                  </div>
                  <div class="swiper-container swiper-swiper-unique-id-1 initialized swiper-container-horizontal" id="swiper-unique-id-4">
                    <div class="swiper-wrapper" style="width: 972px; transform: translate3d(-243px, 0px, 0px); transition-duration: 0ms;">
                      <div class="swiper-slide swiper-slide-duplicate swiper-slide-prev swiper-slide-duplicate-next" data-swiper-slide-index="1" style="width: 243px;"> </div>
                      <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" style="width: 243px;">
                        <div class="friend-count" data-swiper-parallax="-500" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;"> <a href="#" class="friend-count-item">
                          <div class="h6">28 May, 2018</div>
                          <div class="title">Start Date</div>
                          </a> <a href="#" class="friend-count-item">
                          <div class="h6">30 May, 2018</div>
                          <div class="title">End Date</div>
                          </a> </div>
                        <div class="friend-count" data-swiper-parallax="-500" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;"> <a href="#" class="friend-count-item">
                          <div class="h6">3 PM</div>
                          <div class="title">Time</div>
                          </a> <a href="#" class="friend-count-item">
                          <div class="h6">45 Minutes</div>
                          <div class="title">Duration</div>
                          </a> </div>
                        <button class="btn btn-blue btn-md-2">Complete</button>
                      </div>
                      <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 243px;">
                        <div class="friend-count" data-swiper-parallax="-500" style="transform: translate3d(500px, 0px, 0px); transition-duration: 0ms;"> <a href="#" class="friend-count-item">
                          <div class="h6">52</div>
                          <div class="title">Friends</div>
                          </a> <a href="#" class="friend-count-item">
                          <div class="h6">240</div>
                          <div class="title">Photos</div>
                          </a> <a href="#" class="friend-count-item">
                          <div class="h6">16</div>
                          <div class="title">Videos</div>
                          </a> </div>
                        <div class="control-block-button" data-swiper-parallax="-100" style="transform: translate3d(100px, 0px, 0px); transition-duration: 0ms;"> <a href="#" class="btn btn-control bg-blue">
                          <svg class="olymp-happy-face-icon">
                            <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use>
                          </svg>
                          </a> <a href="#" class="btn btn-control bg-purple">
                          <svg class="olymp-chat---messages-icon">
                            <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use>
                          </svg>
                          </a> </div>
                      </div>
                    </div>
                    
                    <!-- If we need pagination --> 
                    
                  </div>
                </div>
              </div>
              
              <!-- ... end Friend Item --> </div>
          </div>
          <div class="col col-xl-3 col-lg-6 col-md-6 col-sm-6 col-6 sorting-item ecommerce running">
            <div class="ui-block"> 
              
              <!-- Friend Item -->
              
              <div class="friend-item">
                <div class="friend-header-thumb"> <img src="<?php echo base_url();?>web_assets/img/friend1.jpg" alt="friend"> </div>
                <div class="friend-item-content">
                  <div class="friend-avatar">
                    <div class="author-thumb"> <img src="<?php echo base_url();?>web_assets/img/avatar1.jpg" alt="author"> </div>
                    <div class="author-content"> <a href="#" class="h5 author-name">Course Name</a>
                      <div class="country">Test Name</div>
                    </div>
                  </div>
                  <div class="swiper-container swiper-swiper-unique-id-1 initialized swiper-container-horizontal" id="swiper-unique-id-5">
                    <div class="swiper-wrapper" style="width: 972px; transform: translate3d(-243px, 0px, 0px); transition-duration: 0ms;">
                      <div class="swiper-slide swiper-slide-duplicate swiper-slide-prev swiper-slide-duplicate-next" data-swiper-slide-index="1" style="width: 243px;"> </div>
                      <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" style="width: 243px;">
                        <div class="friend-count" data-swiper-parallax="-500" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;"> <a href="#" class="friend-count-item">
                          <div class="h6">28 May, 2018</div>
                          <div class="title">Start Date</div>
                          </a> <a href="#" class="friend-count-item">
                          <div class="h6">30 May, 2018</div>
                          <div class="title">End Date</div>
                          </a> </div>
                        <div class="friend-count" data-swiper-parallax="-500" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;"> <a href="#" class="friend-count-item">
                          <div class="h6">3 PM</div>
                          <div class="title">Time</div>
                          </a> <a href="#" class="friend-count-item">
                          <div class="h6">45 Minutes</div>
                          <div class="title">Duration</div>
                          </a> </div>
                        <button class="btn btn-blue btn-md-2">View</button>
                      </div>
                      <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 243px;">
                        <div class="friend-count" data-swiper-parallax="-500" style="transform: translate3d(500px, 0px, 0px); transition-duration: 0ms;"> <a href="#" class="friend-count-item">
                          <div class="h6">52</div>
                          <div class="title">Friends</div>
                          </a> <a href="#" class="friend-count-item">
                          <div class="h6">240</div>
                          <div class="title">Photos</div>
                          </a> <a href="#" class="friend-count-item">
                          <div class="h6">16</div>
                          <div class="title">Videos</div>
                          </a> </div>
                        <div class="control-block-button" data-swiper-parallax="-100" style="transform: translate3d(100px, 0px, 0px); transition-duration: 0ms;"> <a href="#" class="btn btn-control bg-blue">
                          <svg class="olymp-happy-face-icon">
                            <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use>
                          </svg>
                          </a> <a href="#" class="btn btn-control bg-purple">
                          <svg class="olymp-chat---messages-icon">
                            <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use>
                          </svg>
                          </a> </div>
                      </div>
                    </div>
                    
                    <!-- If we need pagination --> 
                    
                  </div>
                </div>
              </div>
              
              <!-- ... end Friend Item --> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Window-popup Update Header Photo -->

<div class="modal fade" id="update-header-photo" tabindex="-1" role="dialog" aria-labelledby="update-header-photo" aria-hidden="true">
  <div class="modal-dialog window-popup update-header-photo" role="document">
    <div class="modal-content"> <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
      <svg class="olymp-close-icon">
        <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-close-icon"></use>
      </svg>
      </a>
      <div class="modal-header">
        <h6 class="title">Update Header Photo</h6>
      </div>
      <div class="modal-body"> <a href="#" class="upload-photo-item">
        <svg class="olymp-computer-icon">
          <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-computer-icon"></use>
        </svg>
        <h6>Upload Photo</h6>
        <span>Browse your computer.</span> </a> <a href="#" class="upload-photo-item" data-toggle="modal" data-target="#choose-from-my-photo">
        <svg class="olymp-photos-icon">
          <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-photos-icon"></use>
        </svg>
        <h6>Choose from My Photos</h6>
        <span>Choose from your uploaded photos</span> </a> </div>
    </div>
  </div>
</div>

<!-- ... end Window-popup Update Header Photo --> 

<!-- Window-popup Choose from my Photo -->

<div class="modal fade" id="choose-from-my-photo" tabindex="-1" role="dialog" aria-labelledby="choose-from-my-photo" aria-hidden="true">
  <div class="modal-dialog window-popup choose-from-my-photo" role="document">
    <div class="modal-content"> <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
      <svg class="olymp-close-icon">
        <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-close-icon"></use>
      </svg>
      </a>
      <div class="modal-header">
        <h6 class="title">Choose from My Photos</h6>
        
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-expanded="true">
            <svg class="olymp-photos-icon">
              <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-photos-icon"></use>
            </svg>
            </a> </li>
          <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-expanded="false">
            <svg class="olymp-albums-icon">
              <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-albums-icon"></use>
            </svg>
            </a> </li>
        </ul>
      </div>
      <div class="modal-body"> 
        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane active" id="home" role="tabpanel" aria-expanded="true">
            <div class="choose-photo-item" data-mh="choose-item">
              <div class="radio">
                <label class="custom-radio"> <img src="<?php echo base_url();?>web_assets/img/choose-photo1.jpg" alt="photo">
                  <input type="radio" name="optionsRadios">
                </label>
              </div>
            </div>
            <div class="choose-photo-item" data-mh="choose-item">
              <div class="radio">
                <label class="custom-radio"> <img src="<?php echo base_url();?>web_assets/img/choose-photo2.jpg" alt="photo">
                  <input type="radio" name="optionsRadios">
                </label>
              </div>
            </div>
            <div class="choose-photo-item" data-mh="choose-item">
              <div class="radio">
                <label class="custom-radio"> <img src="<?php echo base_url();?>web_assets/img/choose-photo3.jpg" alt="photo">
                  <input type="radio" name="optionsRadios">
                </label>
              </div>
            </div>
            <div class="choose-photo-item" data-mh="choose-item">
              <div class="radio">
                <label class="custom-radio"> <img src="<?php echo base_url();?>web_assets/img/choose-photo4.jpg" alt="photo">
                  <input type="radio" name="optionsRadios">
                </label>
              </div>
            </div>
            <div class="choose-photo-item" data-mh="choose-item">
              <div class="radio">
                <label class="custom-radio"> <img src="<?php echo base_url();?>web_assets/img/choose-photo5.jpg" alt="photo">
                  <input type="radio" name="optionsRadios">
                </label>
              </div>
            </div>
            <div class="choose-photo-item" data-mh="choose-item">
              <div class="radio">
                <label class="custom-radio"> <img src="<?php echo base_url();?>web_assets/img/choose-photo6.jpg" alt="photo">
                  <input type="radio" name="optionsRadios">
                </label>
              </div>
            </div>
            <div class="choose-photo-item" data-mh="choose-item">
              <div class="radio">
                <label class="custom-radio"> <img src="<?php echo base_url();?>web_assets/img/choose-photo7.jpg" alt="photo">
                  <input type="radio" name="optionsRadios">
                </label>
              </div>
            </div>
            <div class="choose-photo-item" data-mh="choose-item">
              <div class="radio">
                <label class="custom-radio"> <img src="<?php echo base_url();?>web_assets/img/choose-photo8.jpg" alt="photo">
                  <input type="radio" name="optionsRadios">
                </label>
              </div>
            </div>
            <div class="choose-photo-item" data-mh="choose-item">
              <div class="radio">
                <label class="custom-radio"> <img src="<?php echo base_url();?>web_assets/img/choose-photo9.jpg" alt="photo">
                  <input type="radio" name="optionsRadios">
                </label>
              </div>
            </div>
            <a href="#" class="btn btn-secondary btn-lg btn--half-width">Cancel</a> <a href="#" class="btn btn-primary btn-lg btn--half-width">Confirm Photo</a> </div>
          <div class="tab-pane" id="profile" role="tabpanel" aria-expanded="false">
            <div class="choose-photo-item" data-mh="choose-item">
              <figure> <img src="<?php echo base_url();?>web_assets/img/choose-photo10.jpg" alt="photo">
                <figcaption> <a href="#">South America Vacations</a> <span>Last Added: 2 hours ago</span> </figcaption>
              </figure>
            </div>
            <div class="choose-photo-item" data-mh="choose-item">
              <figure> <img src="<?php echo base_url();?>web_assets/img/choose-photo11.jpg" alt="photo">
                <figcaption> <a href="#">Photoshoot Summer 2016</a> <span>Last Added: 5 weeks ago</span> </figcaption>
              </figure>
            </div>
            <div class="choose-photo-item" data-mh="choose-item">
              <figure> <img src="<?php echo base_url();?>web_assets/img/choose-photo12.jpg" alt="photo">
                <figcaption> <a href="#">Amazing Street Food</a> <span>Last Added: 6 mins ago</span> </figcaption>
              </figure>
            </div>
            <div class="choose-photo-item" data-mh="choose-item">
              <figure> <img src="<?php echo base_url();?>web_assets/img/choose-photo13.jpg" alt="photo">
                <figcaption> <a href="#">Graffity & Street Art</a> <span>Last Added: 16 hours ago</span> </figcaption>
              </figure>
            </div>
            <div class="choose-photo-item" data-mh="choose-item">
              <figure> <img src="<?php echo base_url();?>web_assets/img/choose-photo14.jpg" alt="photo">
                <figcaption> <a href="#">Amazing Landscapes</a> <span>Last Added: 13 mins ago</span> </figcaption>
              </figure>
            </div>
            <div class="choose-photo-item" data-mh="choose-item">
              <figure> <img src="<?php echo base_url();?>web_assets/img/choose-photo15.jpg" alt="photo">
                <figcaption> <a href="#">The Majestic Canyon</a> <span>Last Added: 57 mins ago</span> </figcaption>
              </figure>
            </div>
            <a href="#" class="btn btn-secondary btn-lg btn--half-width">Cancel</a> <a href="#" class="btn btn-primary btn-lg disabled btn--half-width">Confirm Photo</a> </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ... end Window-popup Choose from my Photo --> 

<a class="back-to-top" href="#"> <img src="<?php echo base_url();?>web_assets/svg-icons/back-to-top.svg" alt="arrow" class="back-icon"> </a> 

<!-- JS Scripts --> 
<script src="<?php echo base_url();?>web_assets/js/jquery-3.2.1.js"></script> 
<script src="<?php echo base_url();?>web_assets/js/jquery.appear.js"></script> 
<script src="<?php echo base_url();?>web_assets/js/jquery.mousewheel.js"></script> 
<script src="<?php echo base_url();?>web_assets/js/perfect-scrollbar.js"></script> 
<script src="<?php echo base_url();?>web_assets/js/jquery.matchHeight.js"></script> 
<script src="<?php echo base_url();?>web_assets/js/svgxuse.js"></script> 
<script src="<?php echo base_url();?>web_assets/js/imagesloaded.pkgd.js"></script> 
<script src="<?php echo base_url();?>web_assets/js/Headroom.js"></script> 
<script src="<?php echo base_url();?>web_assets/js/velocity.js"></script> 
<script src="<?php echo base_url();?>web_assets/js/ScrollMagic.js"></script> 
<script src="<?php echo base_url();?>web_assets/js/jquery.waypoints.js"></script> 
<script src="<?php echo base_url();?>web_assets/js/jquery.countTo.js"></script> 
<script src="<?php echo base_url();?>web_assets/js/popper.min.js"></script> 
<script src="<?php echo base_url();?>web_assets/js/material.min.js"></script> 
<script src="<?php echo base_url();?>web_assets/js/bootstrap-select.js"></script> 
<script src="<?php echo base_url();?>web_assets/js/smooth-scroll.js"></script> 
<script src="<?php echo base_url();?>web_assets/js/selectize.js"></script> 
<script src="<?php echo base_url();?>web_assets/js/swiper.jquery.js"></script> 
<script src="<?php echo base_url();?>web_assets/js/moment.js"></script> 
<script src="<?php echo base_url();?>web_assets/js/daterangepicker.js"></script> 
<script src="<?php echo base_url();?>web_assets/js/simplecalendar.js"></script> 
<script src="<?php echo base_url();?>web_assets/js/fullcalendar.js"></script> 
<script src="<?php echo base_url();?>web_assets/js/isotope.pkgd.js"></script> 
<script src="<?php echo base_url();?>web_assets/js/ajax-pagination.js"></script> 
<script src="<?php echo base_url();?>web_assets/js/Chart.js"></script> 
<script src="<?php echo base_url();?>web_assets/js/chartjs-plugin-deferred.js"></script> 
<script src="<?php echo base_url();?>web_assets/js/circle-progress.js"></script> 
<script src="<?php echo base_url();?>web_assets/js/loader.js"></script> 
<script src="<?php echo base_url();?>web_assets/js/run-chart.js"></script> 
<script src="<?php echo base_url();?>web_assets/js/jquery.magnific-popup.js"></script> 
<script src="<?php echo base_url();?>web_assets/js/jquery.gifplayer.js"></script> 
<script src="<?php echo base_url();?>web_assets/js/mediaelement-and-player.js"></script> 
<script src="<?php echo base_url();?>web_assets/js/mediaelement-playlist-plugin.min.js"></script> 
<script src="<?php echo base_url();?>web_assets/js/base-init.js"></script> 
<script defer src="<?php echo base_url();?>web_assets/fonts/fontawesome-all.js"></script> 
<script src="<?php echo base_url();?>web_assets/Bootstrap/dist/js/bootstrap.bundle.js"></script>
</body>
</html>