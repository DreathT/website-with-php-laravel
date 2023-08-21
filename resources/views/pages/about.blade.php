@extends('layouts.website')
@section('title', 'About')
@section('content')

<!-- ***** About Us Page ***** -->
<div class="page-heading-about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Radio City Musical Hall</h2>
                <span>September 24-28, 2021 in Rio de Janeiro</span>
            </div>
        </div>
    </div>
</div>

<div class="about-item">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="left-image">
                    <img src="/images/about-image.jpg" alt="party time">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="right-content">
                    <div class="about-map-image">
                        <img src="/images/about-map-image.jpg" alt="party location">
                    </div>
                    <div class="down-content">
                        <h4>Radio City Musical Hall</h4>
                        <ul>
                            <li>August 24 Friday</li>
                            <li>09:30 AM - 07:00 PM</li>
                        </ul>
                        <span><i class="fa fa-ticket"></i> Tickets Starting From $34.00</span>
                        <div class="main-dark-button">
                            <a href=" {{ route('ticketDetails') }} ">Purchase Tickets</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="about-upcoming-shows">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <h2>About The Upcoming Show</h2>
                <p><p>ArtXibition Event Template is brought to you by Tooplate website and it included total 7 HTML pages.
                    These are <a href=" {{ route('index') }} ">Homepage</a>, <a href=" {{ route('about') }} ">About</a>,
                    <a href=" {{ route('rentVenue') }} ">Rent a venue</a>, <a href=" {{ route('showsEvents') }} ">shows &amp; events</a>,
                    <a href=" {{ route('eventDetails') }} ">event details</a>, <a href=" {{ route('tickets') }} ">tickets</a>, and <a href=" {{ route('ticketDetails') }} ">ticket details</a>.
                    You can feel free to modify any page as you like. If you have any question, please visit our <a href="https://www.tooplate.com/contact" target="_blank">Contact page</a>.</p></p>
                <h4>Items That Are Restricted</h4>
                <ul>
                    <li>* Flash Cameras</li>
                    <li>* Food & Drinks</li>
                    <li>* Any kind of flashy objects</li>
                </ul>
                <h4>Directions & Car Parking</h4>
                <p>Art party vegan mixtape before they sold out raclette, cliche banh mi mumblecore ugh hell of. Art party kene
                    ugh umami, readymade tbh small batch austin distillery aesthetic.Shoreditch narwhal livers edge actually godar
                    affogato sartorial waistcoat ugh raw denim stumptown.
                </p>
                <div class="text-button">
                    <a href=" {{ route('eventDetails') }} ">Need Directions? <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="next-shows">
                    <h4><i class="fa fa-clock-o"></i> Get The Next Show Tickets</h4>
                    <ul>
                        <li>
                            <h5>Copacabana Festival</h5>
                            <span>Sep 24 Fri<br>08:30 AM - 11:00 PM</span>
                            <div class="icon-button">
                                <a href=" {{ route('ticketDetails') }} ">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                            </div>
                        </li>
                        <li>
                            <h5>Rock Music Festival</h5>
                            <span>Sep 22 Wed<br>11:00 AM - 09:00 PM</span>
                            <div class="icon-button">
                                <a href=" {{ route('ticketDetails') }} ">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                            </div>
                        </li>
                        <li>
                            <h5>Water Splash Festival</h5>
                            <span>July 18 Friday<br>10:00 AM - 11:00 PM</span>
                            <div class="icon-button">
                                <a href=" {{ route('ticketDetails') }} ">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="also-like">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>You Might Also Like...</h2>
            </div>
            <div class="col-lg-4">
                <div class="like-item">
                    <div class="thumb">
                        <a href=" {{ route('eventDetails') }} "><img src="/images/like-01.jpg" alt=""></a>
                        <div class="icons">
                            <ul>
                                <li><a href=" {{ route('eventDetails') }} "><i class="fa fa-arrow-right"></i></a></li>
                                <li><a href=" {{ route('ticketDetails') }} "><i class="fa fa-ticket"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="down-content">
                        <span>Sept 10 to 14, 2021</span>
                        <a href=" {{ route('eventDetails') }} "><h4>Wonder Land Music and Arts Festival</h4></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="like-item">
                    <div class="thumb">
                        <a href=" {{ route('eventDetails') }} "><img src="/images/like-02.jpg" alt=""></a>
                        <div class="icons">
                            <ul>
                                <li><a href=" {{ route('eventDetails') }} "><i class="fa fa-arrow-right"></i></a></li>
                                <li><a href=" {{ route('ticketDetails') }} "><i class="fa fa-ticket"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="down-content">
                        <span>Oct 11 to 16, 2021</span>
                        <a href=" {{ route('eventDetails') }} "><h4>Big Water Splashing Festival</h4></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="like-item">
                    <div class="thumb">
                        <a href=" {{ route('eventDetails') }} "><img src="/images/like-03.jpg" alt=""></a>
                        <div class="icons">
                            <ul>
                                <li><a href=" {{ route('eventDetails') }} "><i class="fa fa-arrow-right"></i></a></li>
                                <li><a href=" {{ route('ticketDetails') }} "><i class="fa fa-ticket"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="down-content">
                        <span>Nov 10 to 18, 2021</span>
                        <a href=" {{ route('eventDetails') }} "><h4>Tiger Dance Hip Hop Festival</h4></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

