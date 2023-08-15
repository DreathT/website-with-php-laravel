<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index() {

        $page['page'] = 'home' ;
        return view('pages.index',$page);

    }

    public function about() {

        $page['page'] = 'about' ;
        return view('pages.about',$page);

    }

    public function eventDetails() {

        $page['page'] = 'eventDetails' ;
        return view('pages.eventDetails',$page);

    }

    public function rentVenue() {

        $page['page'] = 'rentVenue';
        return view('pages.rentVenue',$page);

    }

    public function showsEvents() {

        $page['page'] = 'showsEvents' ;
        return view('pages.showsEvents',$page);

    }

    public function ticketDetails() {

        $page['page'] = 'ticketDetails' ;
        return view('pages.ticketDetails',$page);

    }

    public function tickets() {

        $page['page'] = 'tickets' ;
        return view('pages.tickets',$page);

    }

}
