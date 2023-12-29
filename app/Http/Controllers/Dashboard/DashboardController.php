<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use App\Models\Grade;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $totalBookCount = Book::count();
        $categoryCount = Category::count();
        $totalGrade = Grade::count();
        $totalUsers = User::count();


        return view('dashboard.index',compact('totalBookCount','categoryCount','totalGrade','totalUsers'));
    }
}
