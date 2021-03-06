<?php

namespace App\Http\Controllers;

use App\Singapura;
use App\Sydney;
use App\Cambodia;
use App\Taiwan;
use App\China;
use App\Hongkong;
use App\Bukumimpi;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class IndexController extends Controller
{
    public function index()
    {
    	$singapura = Singapura::all()->last();

    	$singapuras = Singapura::all();

        $collection = collect($singapuras);

        $sorted = $collection->sortByDesc('periode');

    	return view('index.index', compact('singapura','sorted'));
    }

    public function showsingapura()
    {
    	$singapura = Singapura::all()->last();

    	$singapuras = Singapura::all();

        $collection = collect($singapuras);

        $sorted = $collection->sortByDesc('periode');

        $users = Singapura::paginate(10);

    	return view('index.singapura', compact('singapura','sorted','users'));
    }
    
    public function showuser()
    {
        $user = User::all()->last();

        $users = User::all();

        $collection = collect($users);

        $sorted = $collection->sortByDesc('name');

        $users = User::paginate(10);

        return view('index.userlist', compact('user','sorted','users'));
    }
    
    public function showhasilsingapura()
    {
        $singapura = Singapura::all()->last();

        $singapuras = Singapura::orderBy('periode','desc')->paginate(10);

        $collection = collect($singapuras);

        
        return view('index.hasilsingapura', compact('singapura','singapuras','users'));
    }

    public function showanalisissingapura()
    {
        $singapura = Singapura::all()->last();

         $singapuras = Singapura::orderBy('periode','desc')->paginate(10);

        $collection = collect($singapuras);


        
        
        return view('index.analisissingapura', compact('singapura','singapuras','satux1'));
    }

    public function showsydney()
    {
        $sydney = Sydney::all()->last();

        $sydneys = Sydney::all();
        
        $collection = collect($sydneys);

        $sorted = $collection->sortByDesc('periode');

        return view('index.sydney', compact('sydney','sorted'));
    }
    public function showhasilsydney()
    {
        $sydney = Sydney::all()->last();

        $sydneys = Sydney::orderBy('periode','desc')->paginate(10);

        $collection = collect($sydneys);

        

        return view('index.hasilsydney', compact('sydney','sydneys'));
    }
     public function showanalisissydney()
    {
        $sydney = Sydney::all()->last();

         $sydneys = Sydney::orderBy('periode','desc')->paginate(10);

        $collection = collect($sydneys);


        
        
        return view('index.analisissydney', compact('sydney','sydneys'));
    }
    public function showcambodia()
    {
        $cambodia = Cambodia::all()->last();

        $cambodias = Cambodia::all();

        $collection = collect($cambodias);

        $sorted = $collection->sortByDesc('periode');
        

        return view('index.cambodia', compact('cambodia','sorted'));
    }
    public function showhasilcambodia()
    {
        $cambodia = Cambodia::all()->last();

        $cambodias = Cambodia::orderBy('periode','desc')->paginate(10);

        $collection = collect($cambodias);

        

        return view('index.hasilcambodia', compact('cambodia','cambodias'));
    }
     public function showanalisiscambodia()
    {
        $cambodia = Cambodia::all()->last();

         $cambodias = Cambodia::orderBy('periode','desc')->paginate(10);

        $collection = collect($cambodias);


        
        
        return view('index.analisiscambodia', compact('cambodia','cambodias','satux1'));
    }
    public function showtaiwan()
    {
        $taiwan = Taiwan::all()->last();

        $taiwans = Taiwan::all();
        
        $collection = collect($taiwans);

        $sorted = $collection->sortByDesc('periode');

        return view('index.taiwan', compact('taiwan','sorted'));
    }
    public function showhasiltaiwan()
    {
        $taiwan = Taiwan::all()->last();

        $taiwans = Taiwan::orderBy('periode','desc')->paginate(10);

        $collection = collect($taiwans);

        

        return view('index.hasiltaiwan', compact('taiwan','sorted'));
    }
    public function showanalisistaiwan()
    {
        $taiwan = Taiwan::all()->last();

         $taiwans = Taiwan::orderBy('periode','desc')->paginate(10);

        $collection = collect($taiwans);


        
        
        return view('index.analisistaiwan', compact('taiwan','taiwans','satux1'));
    }
    public function showchina()
    {
        $china = China::all()->last();

        $chinas = China::all();
        
        $collection = collect($chinas);

        $sorted = $collection->sortByDesc('periode');

        return view('index.china', compact('china','sorted'));
    }
    public function showhasilchina()
    {
        $china = China::all()->last();

        $chinas = China::orderBy('periode','desc')->paginate(10);

        $collection = collect($chinas);

       

        return view('index.hasilchina', compact('china','chinas'));
    }
    public function showanalisischina()
    {
        $china = China::all()->last();

         $chinas = China::orderBy('periode','desc')->paginate(10);

        $collection = collect($chinas);


        
        
        return view('index.analisischina', compact('china','chinas','satux1'));
    }
    public function showhongkong()
    {
        $hongkong = Hongkong::all()->last();

        $hongkongs = Hongkong::all();
        
        $collection = collect($hongkongs);

        $sorted = $collection->sortByDesc('periode');

        return view('index.hongkong', compact('hongkong','sorted'));
    }
    public function showhasilhongkong()
    {
        $hongkong = Hongkong::all()->last();

        $hongkongs = Hongkong::orderBy('periode','desc')->paginate(10);

        $collection = collect($hongkongs);

        

        return view('index.hasilhongkong', compact('hongkong','hongkongs'));
    }
    public function showanalisishongkong()
    {
        $hongkong = Hongkong::all()->last();

         $hongkongs = Hongkong::orderBy('periode','desc')->paginate(10);

        $collection = collect($hongkongs);


        
        
        return view('index.analisishongkong', compact('hongkong','hongkongs','satux1'));
    }
    public function showbukumimpi()
    {
        return view('index.bukumimpi', compact('bukumimpi'));
    }
    public function showjadwalkeluaran()
    {
        return view('index.jadwalkeluaran', compact('jadwalkeluaran','jadwalkeluarans'));
    }
    public function shownumbergenerator()
    {
        return view('index.numbergenerator', compact('numbergenerator','numbergenerators'));
    }


}
