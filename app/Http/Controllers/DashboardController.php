<?php

namespace App\Http\Controllers;


class DashboardController extends Controller
{
    public function index() {
        return view('dashboard.index');
    }

    public function calendar() {
        return view('dashboard.calendar');
    }

    public function create() {
        return view('dashboard.create');
    }

    public function forms() {
        return view('dashboard.forms');
    }

    public function tables() {
        return view('dashboard.tables');
    }
}