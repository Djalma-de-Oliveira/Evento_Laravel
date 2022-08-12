<?php

namespace App\Http\Controllers\Organization\Event;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        return view('organization.events.index');
    }
    public function create()
    {
        return view('organization.events.create');
    }
}
