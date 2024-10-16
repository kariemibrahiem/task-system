<?php

namespace App\Http\Controllers;

use App\DataTrait;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    use DataTrait;
    // we don't focus in the user operations just the login , authorization and authontication
    
    public function index(){
        return $this->getdata(new User() , 'admin.index');
    }
}
