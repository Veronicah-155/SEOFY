<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
 public function page() {
return view('users.page');
}

    public function services() {
   return view('users.services');
   }

   public function blog() {
    return view('users.blog');
    }

    public function contact() {
        return view('users.contact');
        }

        public function create() {
            return view('users.getstarted');
            }
}
