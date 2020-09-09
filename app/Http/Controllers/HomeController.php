<?php

namespace App\Http\Controllers;

use Illuminate\Http\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\User;
use App\Models\Room;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    function home_index() {
        $room_lists = Room::select('fullname','check_in_date','remark','room_number','nickname')->where('active', 1)->orderBy('room_number','asc')->get();

        $data = [
          'room_list' => $room_lists
        ];

        return view('design_pofo.pages.manage_bill', $data);
    }

    function home_login($username, $password) {
      $userLogin = User::where('name', $username);
      Auth::login($userLogin->first());
      return Auth::getUser()->id;
      return redirect('/');
    }

    function home_logout() {
      Auth::logout();
      return redirect('/login');
    }
}
