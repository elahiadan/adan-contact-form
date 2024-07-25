<?php

namespace Adan\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public $ACTIVE = 1;
    public $INACTIVE = 0;
    // public $TODAYDATETIME = date("Y-m-d H:i:s");

    public function __construct()
    {
    }

    public function index()
    {
        return view('adan::form');
    }

    public function store(Request $request){
        $data = $request->all();
        dd($data,$request);

        // Your database operations here
        // Example:
        // $user = User::create($data);
        // $user->status = $this->ACTIVE;
        // $user->save();
    }
}
