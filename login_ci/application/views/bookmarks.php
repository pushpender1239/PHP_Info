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
    <div class="img-wrap"> <img src="<?php echo base_url();?>web_assets/img/logo.png" alt="eGyanshala"> </div>
    </a>
    <div class="mCustomScrollbar" data-mcs-theme="dark">
      <ul class="left-menu">
        <li> <a href="#" class="js-sidebar-open">
          <svg class="olymp-menu-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="OPEN MENU">
            <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-menu-icon"></use>
          </svg>
          </a> </li>
        <li> <a href="test1.php">
          <svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="right"   data-original-title="My Test">
            <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-newsfeed-icon"></use>
          </svg>
          </a> </li>
        <li> <a href="<?php echo site_url();?>buy_product">
          <svg class="olymp-star-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Buy Product">
            <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-star-icon"></use>
          </svg>
          </a> </li>
        <li> <a href="17-FriendGroups.html">
          <svg class="olymp-happy-faces-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Reports">
            <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-happy-faces-icon"></use>
          </svg>
          </a> </li>
        <li> <a href="<?php echo site_url();?>notification">
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
        <li> <a href="<?php echo site_url();?>test_question_bank">
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
        <li> <a href="#" class="js-sidebar-open" >
          <svg class="olymp-close-icon left-menu-icon">
            <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-close-icon"></use>
          </svg>
          <span class="left-menu-title">Collapse Menu</span> </a> </li>
        <li> <a href="test1.php">
          <svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="right"   data-original-title="NEWSFEED">
            <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-newsfeed-icon"></use>
          </svg>
          <span class="left-menu-title">My Test</span> </a> </li>
        <li> <a href="<?php echo site_url();?>buy_product">
          <svg class="olymp-star-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="FAV PAGE">
            <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-star-icon"></use>
          </svg>
          <span class="left-menu-title">Buy Product</span> </a> </li>
        <li> <a href="17-FriendGroups.html">
          <svg class="olymp-happy-faces-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="FRIEND GROUPS">
            <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-happy-faces-icon"></use>
          </svg>
          <span class="left-menu-title">Reports</span> </a> </li>
        <li> <a href="<?php echo site_url();?>notification">
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
        <li> <a href="<?php echo site_url();?>test_question_bank">
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
  <div class="fixed-sidebar-left sidebar--small" id="sidebar-left-responsive"> <a href="#" class="logo js-sidebar-open"> <img src="<?php echo base_url();?>web_assets/img/logo.png" alt="Olympus"> </a> </div>
  <div class="fixed-sidebar-left sidebar--large" id="sidebar-left-1-responsive"> <a href="#" class="logo">
    <div class="img-wrap"> <img src="<?php echo base_url();?>web_assets/img/logo.png" alt="Olympus"> </div>
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

<header class="header header-responsive" id="site-header-responsive"> 
  <!-- Tab panes -->
  <div class="tab-content tab-content-responsive">
    <div class="tab-pane " id="request" role="tabpanel">
      <div class="mCustomScrollbar" data-mcs-theme="dark">
        <div class="ui-block-title ui-block-title-small">
          <h6 class="title">FRIEND REQUESTS</h6>
          <a href="#">Find Friends</a> <a href="#">Settings</a> </div>
        <ul class="notification-list friend-requests">
          <li>
            <div class="author-thumb"> <img src="<?php echo base_url();?>web_assets/img/avatar55-sm.jpg" alt="author"> </div>
            <div class="notification-event"> <a href="#" class="h6 notification-friend">Tamara Romanoff</a> <span class="chat-message-item">Mutual Friend: Sarah Hetfield</span> </div>
            <span class="notification-icon"> <a href="#" class="accept-request"> <span class="icon-add without-text">
            <svg class="olymp-happy-face-icon">
              <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use>
            </svg>
            </span> </a> <a href="#" class="accept-request request-del"> <span class="icon-minus">
            <svg class="olymp-happy-face-icon">
              <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use>
            </svg>
            </span> </a> </span>
            <div class="more">
              <svg class="olymp-three-dots-icon">
                <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
              </svg>
            </div>
          </li>
          <li>
            <div class="author-thumb"> <img src="<?php echo base_url();?>web_assets/img/avatar56-sm.jpg" alt="author"> </div>
            <div class="notification-event"> <a href="#" class="h6 notification-friend">Tony Stevens</a> <span class="chat-message-item">4 Friends in Common</span> </div>
            <span class="notification-icon"> <a href="#" class="accept-request"> <span class="icon-add without-text">
            <svg class="olymp-happy-face-icon">
              <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use>
            </svg>
            </span> </a> <a href="#" class="accept-request request-del"> <span class="icon-minus">
            <svg class="olymp-happy-face-icon">
              <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use>
            </svg>
            </span> </a> </span>
            <div class="more">
              <svg class="olymp-three-dots-icon">
                <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
              </svg>
            </div>
          </li>
          <li class="accepted">
            <div class="author-thumb"> <img src="<?php echo base_url();?>web_assets/img/avatar57-sm.jpg" alt="author"> </div>
            <div class="notification-event"> You and <a href="#" class="h6 notification-friend">Mary Jane Stark</a> just became friends. Write on <a href="#" class="notification-link">her wall</a>. </div>
            <span class="notification-icon">
            <svg class="olymp-happy-face-icon">
              <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use>
            </svg>
            </span>
            <div class="more">
              <svg class="olymp-three-dots-icon">
                <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
              </svg>
              <svg class="olymp-little-delete">
                <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-little-delete"></use>
              </svg>
            </div>
          </li>
          <li>
            <div class="author-thumb"> <img src="<?php echo base_url();?>web_assets/img/avatar58-sm.jpg" alt="author"> </div>
            <div class="notification-event"> <a href="#" class="h6 notification-friend">Stagg Clothing</a> <span class="chat-message-item">9 Friends in Common</span> </div>
            <span class="notification-icon"> <a href="#" class="accept-request"> <span class="icon-add without-text">
            <svg class="olymp-happy-face-icon">
              <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use>
            </svg>
            </span> </a> <a href="#" class="accept-request request-del"> <span class="icon-minus">
            <svg class="olymp-happy-face-icon">
              <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use>
            </svg>
            </span> </a> </span>
            <div class="more">
              <svg class="olymp-three-dots-icon">
                <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
              </svg>
            </div>
          </li>
        </ul>
        <a href="#" class="view-all bg-blue">Check all your Events</a> </div>
    </div>
    <div class="tab-pane " id="chat" role="tabpanel">
      <div class="mCustomScrollbar" data-mcs-theme="dark">
        <div class="ui-block-title ui-block-title-small">
          <h6 class="title">Chat / Messages</h6>
          <a href="#">Mark all as read</a> <a href="#">Settings</a> </div>
        <ul class="notification-list chat-message">
          <li class="message-unread">
            <div class="author-thumb"> <img src="<?php echo base_url();?>web_assets/img/avatar59-sm.jpg" alt="author"> </div>
            <div class="notification-event"> <a href="#" class="h6 notification-friend">Diana Jameson</a> <span class="chat-message-item">Hi James! It’s Diana, I just wanted to let you know that we have to reschedule...</span> <span class="notification-date">
              <time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time>
              </span> </div>
            <span class="notification-icon">
            <svg class="olymp-chat---messages-icon">
              <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use>
            </svg>
            </span>
            <div class="more">
              <svg class="olymp-three-dots-icon">
                <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
              </svg>
            </div>
          </li>
          <li>
            <div class="author-thumb"> <img src="<?php echo base_url();?>web_assets/img/avatar60-sm.jpg" alt="author"> </div>
            <div class="notification-event"> <a href="#" class="h6 notification-friend">Jake Parker</a> <span class="chat-message-item">Great, I’ll see you tomorrow!.</span> <span class="notification-date">
              <time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time>
              </span> </div>
            <span class="notification-icon">
            <svg class="olymp-chat---messages-icon">
              <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use>
            </svg>
            </span>
            <div class="more">
              <svg class="olymp-three-dots-icon">
                <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
              </svg>
            </div>
          </li>
          <li>
            <div class="author-thumb"> <img src="<?php echo base_url();?>web_assets/img/avatar61-sm.jpg" alt="author"> </div>
            <div class="notification-event"> <a href="#" class="h6 notification-friend">Elaine Dreyfuss</a> <span class="chat-message-item">We’ll have to check that at the office and see if the client is on board with...</span> <span class="notification-date">
              <time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 9:56pm</time>
              </span> </div>
            <span class="notification-icon">
            <svg class="olymp-chat---messages-icon">
              <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use>
            </svg>
            </span>
            <div class="more">
              <svg class="olymp-three-dots-icon">
                <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
              </svg>
            </div>
          </li>
          <li class="chat-group">
            <div class="author-thumb"> <img src="<?php echo base_url();?>web_assets/img/avatar11-sm.jpg" alt="author"> <img src="<?php echo base_url();?>web_assets/img/avatar12-sm.jpg" alt="author"> <img src="<?php echo base_url();?>web_assets/img/avatar13-sm.jpg" alt="author"> <img src="<?php echo base_url();?>web_assets/img/avatar10-sm.jpg" alt="author"> </div>
            <div class="notification-event"> <a href="#" class="h6 notification-friend">You, Faye, Ed &amp; Jet +3</a> <span class="last-message-author">Ed:</span> <span class="chat-message-item">Yeah! Seems fine by me!</span> <span class="notification-date">
              <time class="entry-date updated" datetime="2004-07-24T18:18">March 16th at 10:23am</time>
              </span> </div>
            <span class="notification-icon">
            <svg class="olymp-chat---messages-icon">
              <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use>
            </svg>
            </span>
            <div class="more">
              <svg class="olymp-three-dots-icon">
                <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
              </svg>
            </div>
          </li>
        </ul>
        <a href="#" class="view-all bg-purple">View All Messages</a> </div>
    </div>
    <div class="tab-pane " id="notification" role="tabpanel">
      <div class="mCustomScrollbar" data-mcs-theme="dark">
        <div class="ui-block-title ui-block-title-small">
          <h6 class="title">Notifications</h6>
          <a href="#">Mark all as read</a> <a href="#">Settings</a> </div>
        <ul class="notification-list">
          <li>
            <div class="author-thumb"> <img src="<?php echo base_url();?>web_assets/img/avatar62-sm.jpg" alt="author"> </div>
            <div class="notification-event">
              <div><a href="#" class="h6 notification-friend">Mathilda Brinker</a> commented on your new <a href="#" class="notification-link">profile status</a>.</div>
              <span class="notification-date">
              <time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time>
              </span> </div>
            <span class="notification-icon">
            <svg class="olymp-comments-post-icon">
              <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use>
            </svg>
            </span>
            <div class="more">
              <svg class="olymp-three-dots-icon">
                <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
              </svg>
              <svg class="olymp-little-delete">
                <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-little-delete"></use>
              </svg>
            </div>
          </li>
          <li class="un-read">
            <div class="author-thumb"> <img src="<?php echo base_url();?>web_assets/img/avatar63-sm.jpg" alt="author"> </div>
            <div class="notification-event">
              <div>You and <a href="#" class="h6 notification-friend">Nicholas Grissom</a> just became friends. Write on <a href="#" class="notification-link">his wall</a>.</div>
              <span class="notification-date">
              <time class="entry-date updated" datetime="2004-07-24T18:18">9 hours ago</time>
              </span> </div>
            <span class="notification-icon">
            <svg class="olymp-happy-face-icon">
              <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use>
            </svg>
            </span>
            <div class="more">
              <svg class="olymp-three-dots-icon">
                <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
              </svg>
              <svg class="olymp-little-delete">
                <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-little-delete"></use>
              </svg>
            </div>
          </li>
          <li class="with-comment-photo">
            <div class="author-thumb"> <img src="<?php echo base_url();?>web_assets/img/avatar64-sm.jpg" alt="author"> </div>
            <div class="notification-event">
              <div><a href="#" class="h6 notification-friend">Sarah Hetfield</a> commented on your <a href="#" class="notification-link">photo</a>.</div>
              <span class="notification-date">
              <time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 5:32am</time>
              </span> </div>
            <span class="notification-icon">
            <svg class="olymp-comments-post-icon">
              <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use>
            </svg>
            </span>
            <div class="comment-photo"> <img src="<?php echo base_url();?>web_assets/img/comment-photo1.jpg" alt="photo"> <span>“She looks incredible in that outfit! We should see each...”</span> </div>
            <div class="more">
              <svg class="olymp-three-dots-icon">
                <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
              </svg>
              <svg class="olymp-little-delete">
                <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-little-delete"></use>
              </svg>
            </div>
          </li>
          <li>
            <div class="author-thumb"> <img src="<?php echo base_url();?>web_assets/img/avatar65-sm.jpg" alt="author"> </div>
            <div class="notification-event">
              <div><a href="#" class="h6 notification-friend">Green Goo Rock</a> invited you to attend to his event Goo in <a href="#" class="notification-link">Gotham Bar</a>.</div>
              <span class="notification-date">
              <time class="entry-date updated" datetime="2004-07-24T18:18">March 5th at 6:43pm</time>
              </span> </div>
            <span class="notification-icon">
            <svg class="olymp-happy-face-icon">
              <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use>
            </svg>
            </span>
            <div class="more">
              <svg class="olymp-three-dots-icon">
                <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
              </svg>
              <svg class="olymp-little-delete">
                <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-little-delete"></use>
              </svg>
            </div>
          </li>
          <li>
            <div class="author-thumb"> <img src="<?php echo base_url();?>web_assets/img/avatar66-sm.jpg" alt="author"> </div>
            <div class="notification-event">
              <div><a href="#" class="h6 notification-friend">James Summers</a> commented on your new <a href="#" class="notification-link">profile status</a>.</div>
              <span class="notification-date">
              <time class="entry-date updated" datetime="2004-07-24T18:18">March 2nd at 8:29pm</time>
              </span> </div>
            <span class="notification-icon">
            <svg class="olymp-heart-icon">
              <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-heart-icon"></use>
            </svg>
            </span>
            <div class="more">
              <svg class="olymp-three-dots-icon">
                <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
              </svg>
              <svg class="olymp-little-delete">
                <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-little-delete"></use>
              </svg>
            </div>
          </li>
        </ul>
        <a href="#" class="view-all bg-primary">View All Notifications</a> </div>
    </div>
    <div class="tab-pane " id="search" role="tabpanel">
      <form class="search-bar w-search notification-list friend-requests">
        <div class="form-group with-button">
          <input class="form-control js-user-search" placeholder="Search here people or pages..." type="text">
        </div>
      </form>
    </div>
  </div>
  <!-- ... end  Tab panes --> 
  
</header>

<!-- ... end Responsive Header-BP -->
<div class="header-spacer"></div>

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
<div class="bookmark">
              <a href="#" class="btn btn-control btn-bookmark">
								<svg class="olymp-like-post-icon"><use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-like-post-icon"></use></svg>
							</a>
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
<div class="bookmark">
              <a href="#" class="btn btn-control btn-bookmark">
								<svg class="olymp-like-post-icon"><use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-like-post-icon"></use></svg>
							</a>
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
<div class="bookmark">
              <a href="#" class="btn btn-control btn-bookmark">
								<svg class="olymp-like-post-icon"><use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-like-post-icon"></use></svg>
							</a>
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
<div class="bookmark">
              <a href="#" class="btn btn-control btn-bookmark">
								<svg class="olymp-like-post-icon"><use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-like-post-icon"></use></svg>
							</a>
              </div>
</div>


</div>
</div>
</div> 

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