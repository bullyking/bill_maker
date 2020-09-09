<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Date;
use Auth;
use Carbon\Carbon;

use App\User;
use App\Models\Room;
use App\Models\TitleName;
use App\Models\Gender;


class RoomController extends Controller
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

    function onLoadRoomList() {
      $gender = Gender::get();
      $title = TitleName::get();
      $room_lists = Room::select('idRoom','fullname','check_in_date','remark','room_number','nickname','active')->orderBy('room_number','asc')->get();
      $room_detail = $this->onGetRoomDetail('new', 0);
      // dd($room_detail);
      $data = [
        'genders' => $gender,
        'title' => $title,
        'room_lists' => $room_lists,
        'room_detail' => $room_detail
      ];

      return view('design_pofo.pages.rooms_list', $data);
    }

    function onRenderRoomDetail($type,$id) {
      $gender = Gender::get();
      $title = TitleName::get();
      $room_lists = Room::select('idRoom','fullname','check_in_date','remark','room_number','nickname','active')->orderBy('room_number','asc')->get();
      $room_detail = $this->onGetRoomDetail($type, $id);

      $data = [
        'genders' => $gender,
        'title' => $title,
        'room_lists' => $room_lists,
        'room_detail' => $room_detail
      ];

      return view('design_pofo.pages.manage_room_sidebar', $data)->render();
    }

    function onSaveRoomDetail(Request $request) {
      if ($request->type == 'new') {
        // code...
        $save_room = new Room();
        $save_room->created_at = Carbon::now()->toDateTimeString();
      } else {
        $save_room = Room::where('idRoom', $request->idRoom)->first();
      }

      $save_room->IDTitleName = $request->title_name;
      $save_room->idGender = $request->gender;
      $save_room->fullname = $request->fullname;
      $save_room->nickname = $request->nickname;
      $save_room->age = $request->age > 0 ? $request->age : NULL;
      $save_room->dob = $request->dob != '' ? $request->dob.' '.Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())->format('H:i:s') : NULL;
      $save_room->contact = $request->contact;
      $save_room->room_number = $request->room_number;
      $save_room->room_price = $request->room_price;
      $save_room->cable_price = $request->cable_price;
      $save_room->trash_price = $request->trash_price;
      $save_room->remark = $request->remark;
      $save_room->check_in_date = $request->check_in_date != '' ? $request->check_in_date.' '.Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())->format('H:i:s') : NULL;
      $save_room->updated_at = Carbon::now()->toDateTimeString();
      $save_room->save();

      return $request;
    }

    function onGetRoomDetail($type, $id) {
      if($type == 'new') {
        $room_detail = Room::select('idRoom')->first();
        $room_detail->title_name = 2;
        $room_detail->fullname = '';
        $room_detail->nickname = '';
        $room_detail->age = 0;
        $room_detail->dob = Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())->format('d/m/Y');
        $room_detail->gender = 2;
        $room_detail->contact = '';
        $room_detail->email = '';
        $room_detail->room_number = 0;
        $room_detail->room_price = 0;
        $room_detail->cable_price = 0;
        $room_detail->trash_price = 0;
        $room_detail->check_in_date = Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())->format('d/m/Y');
        $room_detail->remark = '';
      } else {
        $room_detail = Room::where('idRoom', $id)->first();
      }

      return $room_detail;
    }
}
