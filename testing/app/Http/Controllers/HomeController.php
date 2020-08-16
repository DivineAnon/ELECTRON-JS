<?php

namespace App\Http\Controllers;

use App\AdminMenuAuthorization;
use App\LoanTransaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.dashboard-imputer');
    }

    public function indexRadio()
    {
        return view('pages.dashboard-radio');
    }

    public function indexValidator()
    {
        return view('pages.dashboard-validator');
    }

    public function indexAdmin()
    {
        return view('pages.dashboard-admin');
    }
}
