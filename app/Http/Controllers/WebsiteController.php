<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index() {

        $page['page'] = 'home' ;
        return view('index',$page);

    }

    public function about() {

        $page['page'] = 'about' ;
        return view('about',$page);

    }

    public function eventDetails() {

        $page['page'] = 'eventDetails' ;
        return view('eventDetails',$page);

    }

    public function rentVenue() {

        $page['page'] = 'rentVenue';
        return view('rentVenue',$page);

    }

    public function showsEvents() {

        $page['page'] = 'showsEvents' ;
        return view('showsEvents',$page);

    }

    public function ticketDetails() {

        $page['page'] = 'ticketDetails' ;
        return view('ticketDetails',$page);

    }

    public function tickets() {

        $page['page'] = 'tickets' ;
        return view('tickets',$page);

    }

}
