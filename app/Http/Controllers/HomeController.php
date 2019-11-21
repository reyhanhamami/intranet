<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Event;
use App\Pencerahan;
use App\mastertype;
use App\Pengumuman;
use App\Personal;
use App\Tasks;
use App\User;
use Mikrotik;
use PEAR2\Net\RouterOS;
use Auth;
use Illuminate\Support\Facades\Hash;
use jjsquady\MikrotikApi\Contracts\MikrotikContract;
use jjsquady\MikrotikApi\Core\Client;
use jjsquady\MikrotikApi\Exceptions\ConnectionException;
use jjsquady\MikrotikApi\Commands\Interfaces;
use jjsquady\MikrotikApi\Entity\InterfaceEntity;
use jjsquady\MikrotikApi\Tests\Traits\CreateApplication;
use Orchestra\Testbench\TestCase;
use jjsquady\MikrotikApi\Entity\Accounting;
use jjsquady\MikrotikApi\Entity\Address;
use jjsquady\MikrotikApi\Entity\Arp;

class HomeController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function dashboard(){
        $conn = Mikrotik::connect()->getConnection();
        if ($conn->isConnected()) {
             // Get all interfaces
             $interfaces = Interfaces::bind($conn)->get();
             $getIPs = $client->sendSync(new RouterOS\Request('/ip address print'));
             
             // panggil data event 
             $events = Event::paginate(5);
             $eventfirst = DB::table('events')->orderBy('id_eventcooporate', 'asc')->pluck('id_eventcooporate')->first();
             // panggil data inner join pencerahan on mastertype
             $mastertype = DB::table('pencerahan')->join('mastertype', 'pencerahan.type', '=', 'mastertype.id_type')->select('pencerahan.*', 'mastertype.nama')->get();
             // panggil data pengumuman
             $pengumuman = Pengumuman::get();
             // ambil pengumuman id pertama
             $pengumumanfirst = DB::table('pengumuman')->orderBy('id_pengumuman', 'asc')->pluck('id_pengumuman')->first();
             // panggil data personal event dan ambil juga id urutan pertamanya
             $personalevent = Personal::paginate(5);
             $personaleventfirst = DB::table('eventpersonal')->orderBy('id_eventpersonal', 'asc')->pluck('id_eventpersonal')->first();
             // panggil data tasks join user and where employee.tasks = id.user
             $user = user::get();
             $tasks = Tasks::get();
             $tasks->where('employee','=','admin');
            //  dd($client);
             // $tasks = DB::table('tasks')->join('users', 'tasks.employee', '=', 'users.id')->select('tasks.*', 'users.*')->get();
             $tes = DB::table('tasks')->join('users', 'tasks.employee', '=', 'users.id')->select('tasks.*', 'users.*')->get();
             // dd($name);
             return view('index', compact('events' , 'mastertype','eventfirst', 'pengumuman','pengumumanfirst', 'personalevent','personaleventfirst', 'tasks','interfaces','client','getIPs'));
        }
    }
    public function changepassword(){
        return view('administrator.chagepassword');
    }
    
    public function postpassword(Request $request){
        $a = $request->passwordlama;
        $b = md5($a);
        $tess = $b == Auth::user()->pswd;
        $tes = !(Hash::check($request->get('current-password'), Auth::user()->pswd));
        $asd = !$tess;
      
    if ($asd) {
    // The passwords matches
    return redirect()->back()->with("error","tidak cocok dengan kata sandi lama anda. coba lagi.");
    }
    
    if(strcmp($request->passwordlama, $request->get('passwordbaru')) == 0){
    //Current password and new password are same
    return redirect()->back()->with("error","Password tidak boleh sama dengan password sebelumnya.");
    }
    if(!(strcmp($request->get('passwordbaru'), $request->get('passwordconfirm'))) == 0){
                //New password and confirm password are not same
                return redirect()->back()->with("error","kata sandi baru tidak cocok dengan konfirmasi kata sandi, pastikan cocokan lagi");
    }
    //Change Password
    $user = Auth::user();
    $user->pswd = md5($request->get('passwordbaru'));
    $user->save();
    
    return redirect()->back()->with("success","Kata sandi berhasil diubah!");
    
    }
}
