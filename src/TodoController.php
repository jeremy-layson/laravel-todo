<?php

namespace RenielDev\Todo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TodoController extends Controller
{
    public function index(Request $request)
    {
        echo 'Welcome in Todo App.';
    }
}
