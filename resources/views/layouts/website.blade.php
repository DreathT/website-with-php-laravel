<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Tooplate">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>Event Detail Page</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="/css/font-awesome.css">

    <link rel="stylesheet" type="text/css" href="/css/owl-carousel.css">

    <link rel="stylesheet" href="/css/tooplate-artxibition.css">

</head>

<body>

<!-- ***** Preloader Start ***** -->
<div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- ***** Preloader End ***** -->

<!-- ***** Pre HEader ***** -->
<div class="pre-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-6">
                <span>Hey! The Show Is Starting In 5 Days.</span>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="text-button">
                    <a href=" {{ route('rentVenue') }} ">Contact Us Now! <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href=" {{ route('index') }} " class="logo">Take<em>Ticket</em></a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href=" {{ route('index') }} " @if($page == 'home'){!!  'class="active"'  !!}@endif>Home</a></li>
                        <li><a href=" {{ route('about') }} " @if($page == 'about'){!! 'class="active"' !!}@endif>About Us</a></li>
                        <li><a href=" {{ route('rentVenue') }} " @if($page == 'rentVenue'){!! 'class="active"' !!}@endif>Rent Venue</a></li>
                        <li><a href=" {{ route('showsEvents') }} " @if($page == 'showsEvents'){!! 'class="active"' !!}@endif>Shows & Events</a></li>
                        <li><a href=" {{ route('tickets') }} " @if($page == 'tickets'){!! 'class="active"' !!}@endif>Tickets</a></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

@yield('content')

<!-- *** Subscribe *** -->
<div class="subscribe">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h4>Subscribe Our Newsletter:</h4>
            </div>
            <div class="col-lg-8">
                <form id="subscribe" action="" method="get">
                    <div class="row">
                        <div class="col-lg-9">
                            <fieldset>
                                <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-3">
                            <fieldset>
                                <button type="submit" id="form-submit" class="main-dark-button">Submit</button>
                            </fieldset>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- *** Footer *** -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="address">
                    <h4>Sunny Hill Festival Address</h4>
                    <span>5 College St NW, <br>Norcross, GA 30071<br>United States</span>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Info</a></li>
                        <li><a href="#">Venues</a></li>
                        <li><a href="#">Guides</a></li>
                        <li><a href="#">Videos</a></li>
                        <li><a href="#">Outreach</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="hours">
                    <h4>Open Hours</h4>
                    <ul>
                        <li>Mon to Fri: 10:00 AM to 8:00 PM</li>
                        <li>Sat - Sun: 11:00 AM to 4:00 PM</li>
                        <li>Holidays: Closed</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="under-footer">
                    <div class="row">
                        <div class="col-lg-6">
                            <p>São Conrado, Rio de Janeiro</p>
                        </div>
                        <div class="col-lg-6">
                            <p class="copyright">Copyright 2023 TakeTicket Company

                                <br>Design: <a rel="nofollow" href="https://www.tooplate.com" target="_parent">Tooplate</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="sub-footer">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="logo"><span>Take<em>Ticket</em></span></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="menu">
                                <ul>
                                    <li><a href=" {{ route('index') }} " class="active">Home</a></li>
                                    <li><a href=" {{ route('about') }} ">About Us</a></li>
                                    <li><a href=" {{ route('rentVenue') }} ">Rent Venue</a></li>
                                    <li><a href=" {{ route('showsEvents') }} ">Shows & Events</a></li>
                                    <li><a href=" {{ route('tickets') }} ">Tickets</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="social-links">
                                <ul>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery -->
<script src="/js/jquery-2.1.0.min.js"></script>

<!-- Bootstrap -->
<script src="/js/popper.js"></script>
<script src="/js/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="/js/scrollreveal.min.js"></script>
<script src="/js/waypoints.min.js"></script>
<script src="/js/jquery.counterup.min.js"></script>
<script src="/js/imgfix.min.js"></script>
<script src="/js/mixitup.js"></script>
<script src="/js/accordions.js"></script>
<script src="/js/owl-carousel.js"></script>

<!-- Global Init -->
<script src="/js/custom.js"></script>

</body>

</html>
