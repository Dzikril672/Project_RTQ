<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        ///get data feedback dan menampilkan 20 data per halamannya
        $getFeedback = Feedback::paginate(20);

        return view('dashboard.maindashboard', compact('getFeedback'));
    }


}