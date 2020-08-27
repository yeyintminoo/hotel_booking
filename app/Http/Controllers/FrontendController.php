    <?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Reservation;

class FrontendController extends Controller
{
     public function home(){
        $rooms = Room::all();
        // $rooms = Room::orderBy()->take()->get();
    	return view('frontend.home',compact('rooms'));
    }

    public function room(){
        $reservations = Reservation::all();
        // $reservations = reservation::take()->get();
    	return view('frontend.room',compact('reservations'));
    }
    
    public function frontendgallery(){
        return view('frontend.gallery');
    }

    public function frontendcontact(){
    	return view('frontend.contact');
    }

    public function frontendabout(){
        return view('frontend.about');
    }

    public function frontendcheckout(){
        return view('frontend.checkout');
    }

    public function frontendregister(){
        return view('frontend.register');
    }

    public function frontendlogin(){
        return view('frontend.login');
    }

    public function getRooms(Request $request){
        $sid = $request->sid;
        if($sid == 0){
            $rooms = Room::all();
        }else{
            $rooms = reservation::find($sid)->rooms;
        }
        
        return $rooms;
    }
}
