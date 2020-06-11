<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\League;
use App\Type;
use App\Viewer;
use App\Index;
use Session;
class HomeController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function users(){
        $users=User::all();
        return view('users')->with('users',$users);
    }
    public function leagues(){
        return view('leagues');
    }

    public function lstore(Request $request){
        $this->validate($request,[
            'league'=>'required|unique:leagues'
        ]);
        League::create($request->all());
        Session::flash('success','the league has been successfully added');
        return back();
    }
    public function cstore(Request $request){
        $this->validate($request,[
            'type'=>'required|unique:types'
        ]);
        Type::create($request->all());
        Session::flash('success','the Category has been successfully added');
        return back();
    }
    public function sstore(Request $request){
        $this->validate($request,[
            'number'=>'required'
        ]);
        Viewer::create($request->all());
        Session::flash('success','the Subscriber has been successfully added');
        return back();
    }
    public function AllLeagues(){
        $leagues=League::all();
        return view('AllLeagues')->with('leagues',$leagues);
    }
    public function AllCategories(){
        $categories=Type::all();
        return view('AllCategories')->with('categories',$categories);
    }

    public function categories(){
        return view('categories');
    }
    public function viewers(){
        return view('Viewers');
    }
    public function allViewers(){
        $viewers=Viewer::all();
        return view('AllViewers')->with('viewers',$viewers);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $game=Index::find($id);
        $game->outcome=$request->code;
        $game->save();
        Session::flash('success','Game Successfully Updated');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=Viewer::find($id);
        $user->destroy($id);
        Session::flash('error','User Successfully Deleted');
        return back();
    }
    public function games(){
        $leagues=League::all();
        $types=Type::all();
        return view('games')
        ->with('leagues',$leagues)
        ->with('types',$types)
        ;
    }

    public function gStore(Request $request){
        $this->validate($request,[
            'teams'=>'required',
            'startTime'=>'required',
            'prediction'=>'required',
            'league'=>'required',
            'type'=>'required',
        ]);
    Index::create([
        'teams'=>$request->teams,
        'startTime'=>$request->startTime,
        'prediction'=>$request->prediction,
        'league'=>$request->league,
        'type'=>$request->type,
        'outcome'=>0
    ]);
    Session::flash('success','Match Successfully Added');
    return back();
    }
    public function AllGames(){
        $games=Index::all();
        return view('AllGames')->with('games',$games);
    }
}
