@extends('layouts.website')
@section('title', 'Event Details')
@section('content')

<!-- ***** About Us Page ***** -->
<div class="page-heading-rent-venue">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Event Details</h2>
                <span>Check out our latest Shows & Events and be part of us.</span>
            </div>
        </div>
    </div>
</div>

<div class="shows-events-schedule">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Event Listing</h2>
                </div>
            </div>
            <div class="col-lg-12">
                <ul>
                    <li>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="title">
                                    <h4>Sunny Hill Festival</h4>
                                    <span>140 Tickets Available</span>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="time"><span><i class="fa fa-clock-o"></i> Sep 16, 2021<br>18:00 to 22:00</span></div>
                            </div>
                            <div class="col-lg-3">
                                <div class="place"><span><i class="fa fa-map-marker"></i>Copacabana Beach, <br>Rio de Janeiro</span></div>
                            </div>
                            <div class="col-lg-3">
                                <div class="main-dark-button">
                                    <a href=" {{ route('ticketDetails') }} ">Purchase Tickets</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="title">
                                    <h4>Gala Rock Festival</h4>
                                    <span>128 Tickets Available</span>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="time"><span><i class="fa fa-clock-o"></i> Sep 18, 2021<br>18:00 to 22:00</span></div>
                            </div>
                            <div class="col-lg-3">
                                <div class="place"><span><i class="fa fa-map-marker"></i>Copacabana Beach, <br>Rio de Janeiro</span></div>
                            </div>
                            <div class="col-lg-3">
                                <div class="main-dark-button">
                                    <a href=" {{ route('ticketDetails') }} ">Purchase Tickets</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="title">
                                    <h4>Hip Hop Farm</h4>
                                    <span>160 Tickets Available</span>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="time"><span><i class="fa fa-clock-o"></i> Sep 20, 2021<br>18:00 to 22:00</span></div>
                            </div>
                            <div class="col-lg-3">
                                <div class="place"><span><i class="fa fa-map-marker"></i>Copacabana Beach, <br>Rio de Janeiro</span></div>
                            </div>
                            <div class="col-lg-3">
                                <div class="main-dark-button">
                                    <a href=" {{ route('ticketDetails') }} ">Purchase Tickets</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="title">
                                    <h4>Balada Music</h4>
                                    <span>240 Tickets Available</span>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="time"><span><i class="fa fa-clock-o"></i> Oct 14, 2021<br>18:00 to 22:00</span></div>
                            </div>
                            <div class="col-lg-3">
                                <div class="place"><span><i class="fa fa-map-marker"></i>Copacabana Beach, <br>Rio de Janeiro</span></div>
                            </div>
                            <div class="col-lg-3">
                                <div class="main-dark-button">
                                    <a href=" {{ route('ticketDetails') }} ">Purchase Tickets</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="title">
                                    <h4>Beerland Festival</h4>
                                    <span>360 Tickets Available</span>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="time"><span><i class="fa fa-clock-o"></i> Oct 20, 2021<br>18:00 to 22:00</span></div>
                            </div>
                            <div class="col-lg-3">
                                <div class="place"><span><i class="fa fa-map-marker"></i>Copacabana Beach, <br>Rio de Janeiro</span></div>
                            </div>
                            <div class="col-lg-3">
                                <div class="main-dark-button">
                                    <a href=" {{ route('ticketDetails') }} ">Purchase Tickets</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="title">
                                    <h4>Bump & Bass</h4>
                                    <span>168 Tickets Available</span>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="time"><span><i class="fa fa-clock-o"></i> Oct 22, 2021<br>18:00 to 22:00</span></div>
                            </div>
                            <div class="col-lg-3">
                                <div class="place"><span><i class="fa fa-map-marker"></i>Copacabana Beach, <br>Rio de Janeiro</span></div>
                            </div>
                            <div class="col-lg-3">
                                <div class="main-dark-button">
                                    <a href=" {{ route('ticketDetails') }} ">Purchase Tickets</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-12">
                <div class="pagination">
                    <ul>
                        <li><a href="#">Prev</a></li>
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

