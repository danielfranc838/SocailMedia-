<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title>{{ env('SOCIAL_MEDIA_NAME') }}</title>
<link rel="shortcut icon" href="{{ asset('images/logo.png') }}" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/line-awesome.css">
<link rel="stylesheet" type="text/css" href="css/line-awesome-font-awesome.min.css">
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.min.css">
<link rel="stylesheet" type="text/css" href="lib/slick/slick.css">
<link rel="stylesheet" type="text/css" href="lib/slick/slick-theme.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
</head>
<body>
<div class="wrapper">
@include('includes.header')
<section class="messages-page">
<div class="container">
<div class="messages-sec">
<div class="row">
<div class="col-lg-4 col-md-12 no-pdd">
<div class="msgs-list">
<div class="msg-title">
<h3>Messages</h3>
<ul>
<li><a href="#" title=""><i class="fa fa-cog"></i></a></li>
<li><a href="#" title=""><i class="fa fa-ellipsis-v"></i></a></li>
</ul>
</div>
<div class="messages-list">
<ul>
<li class="active">
<div class="usr-msg-details">
<div class="usr-ms-img">
<img src="images/resources/m-img1.png" alt="">
<span class="msg-status"></span>
</div>
<div class="usr-mg-info">
<h3>John Doe</h3>
<p>Lorem ipsum dolor <img src="images/smley.png" alt=""></p>
</div>
<span class="posted_time">1:55 PM</span>
<span class="msg-notifc">1</span>
</div>
</li>
<li>
<div class="usr-msg-details">
<div class="usr-ms-img">
<img src="images/resources/m-img2.png" alt="">
</div>
<div class="usr-mg-info">
<h3>David Vane</h3>
<p>Vestibulum ac diam..</p>
</div>
<span class="posted_time">1:55 PM</span>
</div>
</li>
<li>
<div class="usr-msg-details">
<div class="usr-ms-img">
<img src="images/resources/m-img3.png" alt="">
</div>
<div class="usr-mg-info">
<h3>Nancy Dilan</h3>
<p>Quam vehicula.</p>
</div>
<span class="posted_time">1:55 PM</span>
</div>
</li>
<li>
<div class="usr-msg-details">
<div class="usr-ms-img">
<img src="images/resources/m-img4.png" alt="">
<span class="msg-status"></span>
</div>
<div class="usr-mg-info">
<h3>Norman Kenney</h3>
<p>Nulla quis lorem ut..</p>
</div>
<span class="posted_time">1:55 PM</span>
</div>
</li>
<li>
<div class="usr-msg-details">
<div class="usr-ms-img">
<img src="images/resources/m-img5.png" alt="">
<span class="msg-status"></span>
</div>
<div class="usr-mg-info">
<h3>James Dilan</h3>
<p>Vivamus magna just..</p>
</div>
<span class="posted_time">1:55 PM</span>
</div>
</li>
<li>
<div class="usr-msg-details">
<div class="usr-ms-img">
<img src="images/resources/m-img6.png" alt="">
</div>
<div class="usr-mg-info">
<h3>Mike Dorn</h3>
<p>Praesent sapien massa.</p>
</div>
<span class="posted_time">1:55 PM</span>
</div>
</li>
<li>
<div class="usr-msg-details">
 <div class="usr-ms-img">
<img src="images/resources/m-img7.png" alt="">
</div>
<div class="usr-mg-info">
<h3>Patrick Morison</h3>
<p>Convallis a pellente...</p>
</div>
<span class="posted_time">1:55 PM</span>
</div>
</li>
</ul>
</div>
</div>
</div>
<div class="col-lg-8 col-md-12 pd-right-none pd-left-none">
<div class="main-conversation-box">
<div class="message-bar-head">
<div class="usr-msg-details">
<div class="usr-ms-img">
<img src="images/resources/m-img1.png" alt="">
</div>
<div class="usr-mg-info">
<h3>John Doe</h3>
<p>Online</p>
</div>
</div>
<a href="#" title=""><i class="fa fa-ellipsis-v"></i></a>
</div>
<div class="messages-line">
<div class="main-message-box">
<div class="messg-usr-img">
<img src="images/resources/m-img1.png" alt="">
</div>
<div class="message-dt">
<div class="message-inner-dt img-bx">
<img src="images/resources/mt-img1.png" alt="">
<img src="images/resources/mt-img2.png" alt="">
<img src="images/resources/mt-img3.png" alt="">
</div>
<span>Sat, Aug 23, 1:08 PM</span>
</div>
</div>
<div class="main-message-box ta-right">
<div class="message-dt">
<div class="message-inner-dt">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
</div>
<span>Sat, Aug 23, 1:08 PM</span>
</div>
<div class="messg-usr-img">
<img src="images/resources/m-img2.png" alt="">
</div>
</div>
<div class="main-message-box st3">
<div class="message-dt st3">
<div class="message-inner-dt">
<p>Cras ultricies ligula.<img src="images/smley.png" alt=""></p>
</div>
<span>5 minutes ago</span>
</div>
<div class="messg-usr-img">
<img src="images/resources/m-img1.png" alt="">
</div>
</div>
<div class="main-message-box ta-right">
<div class="message-dt">
<div class="message-inner-dt">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
</div>
<span>Sat, Aug 23, 1:08 PM</span>
</div>
<div class="messg-usr-img">
<img src="images/resources/m-img2.png" alt="">
</div>
</div>
<div class="main-message-box st3">
<div class="message-dt st3">
<div class="message-inner-dt">
<p>Lorem ipsum dolor sit amet</p>
</div>
<span>2 minutes ago</span>
</div>
<div class="messg-usr-img">
<img src="images/resources/m-img1.png" alt="">
</div>
</div>
<div class="main-message-box ta-right">
<div class="message-dt">
<div class="message-inner-dt">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
</div>
<span>Sat, Aug 23, 1:08 PM</span>
</div>
<div class="messg-usr-img">
<img src="images/resources/m-img2.png" alt="">
</div>
</div>
<div class="main-message-box st3">
<div class="message-dt st3">
<div class="message-inner-dt">
<p>....</p>
</div>
<span>Typing...</span>
</div>
<div class="messg-usr-img">
<img src="images/resources/m-img1.png" alt="">
</div>
</div>
</div>
<div class="message-send-area">
<form>
<div class="mf-field">
<input type="text" name="message" placeholder="Type a message here">
<button type="submit">Send</button>
</div>
<ul>
<li><a href="#" title=""><i class="fas fa-smile"></i></a></li>
<li><a href="#" title=""><i class="fas fa-camera"></i></a></li>
<li><a href="#" title=""><i class="fas fa-paperclip"></i></a></li>
</ul>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
@include('includes.footer')
</div>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/popper.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.mCustomScrollbar.js"></script>
<script type="text/javascript" src="lib/slick/slick.min.js"></script>
<script type="text/javascript" src="js/scrollbar.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>


</html>
