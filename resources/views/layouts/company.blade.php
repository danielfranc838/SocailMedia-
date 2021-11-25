
<!DOCTYPE html>
<html>


<head>
<meta charset="UTF-8">
<title>{{ env('SOCIAL_MEDIA_NAME')}}</title>
<link rel="shortcut icon" href="{{ asset('images/logo.png') }}" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/flatpickr.min.css">
<link rel="stylesheet" type="text/css" href="css/line-awesome.css">
<link rel="stylesheet" type="text/css" href="css/line-awesome-font-awesome.min.css">
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="lib/slick/slick.css">
<link rel="stylesheet" type="text/css" href="lib/slick/slick-theme.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
</head>
<body>
<div class="wrapper">
@include('includes.header')
<section class="companies-info">
<div class="container">
<div class="company-title">
<h3>All Companies</h3>
</div>
<div class="companies-list">
<div class="row">
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="company_profile_info">
<div class="company-up-info">
<img src="images/resources/cmp-icon.png" alt="">
<h3>Facebook Inc.</h3>
<h4>Establish Feb, 2004</h4>
<ul>
<li><a href="#" title="" class="follow">Follow</a></li>
<li><a href="#" title="" class="message-us"><i class="fa fa-envelope"></i></a></li>
</ul>
</div>
<a href="{{ route('company_profile') }}" title="" class="view-more-pro">View Profile</a>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="company_profile_info">
<div class="company-up-info">
<img src="images/resources/cmp-icon1.png" alt="">
<h3>Google Inc.</h3>
<h4>Establish Feb, 2004</h4>
<ul>
<li><a href="#" title="" class="follow">Follow</a></li>
<li><a href="#" title="" class="message-us"><i class="fa fa-envelope"></i></a></li>
</ul>
</div>
<a href="{{ route('company_profile') }}" title="" class="view-more-pro">View Profile</a>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="company_profile_info">
<div class="company-up-info">
<img src="images/resources/cmp-icon2.png" alt="">
<h3>Pinterest</h3>
<h4>Establish Feb, 2004</h4>
<ul>
<li><a href="#" title="" class="follow">Follow</a></li>
<li><a href="#" title="" class="message-us"><i class="fa fa-envelope"></i></a></li>
</ul>
</div>
<a href="{{ route('company_profile') }}" title="" class="view-more-pro">View Profile</a>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="company_profile_info">
<div class="company-up-info">
<img src="images/resources/cmp-icon3.png" alt="">
<h3>Microsoft Inc.</h3>
<h4>Establish Feb, 2004</h4>
<ul>
<li><a href="#" title="" class="follow">Follow</a></li>
<li><a href="#" title="" class="message-us"><i class="fa fa-envelope"></i></a></li>
</ul>
</div>
<a href="{{ route('company_profile') }}" title="" class="view-more-pro">View Profile</a>
</div>
</div>


</div>
</div>
<div class="process-comm">
<div class="spinner">
<div class="bounce1"></div>
<div class="bounce2"></div>
<div class="bounce3"></div>
</div>
</div>
</div>
</section>
@include('includes.footer')
</div>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/popper.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/flatpickr.min.js"></script>
<script type="text/javascript" src="lib/slick/slick.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>


</html>
