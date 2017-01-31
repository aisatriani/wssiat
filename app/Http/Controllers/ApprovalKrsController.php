<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApprovalKrsController extends Controller
{
    public function index()
    {
        return view('approval.index');
    }
}
