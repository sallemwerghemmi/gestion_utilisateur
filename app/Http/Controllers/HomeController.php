<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users_list;
use App\Groups;
use DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
   
        $groups = Groups::all();
        $users = DB::select( DB::raw("SELECT users_lists.id ,first_name,last_name,group_id, groups.name FROM `users_lists` INNER JOIN groups where  users_lists.group_id = groups.id ;"));

        return view('welcome',compact('users','groups'));
    }

    public function addgroupe()
    {
      
        return view('pages.addgroupe');

    }

    public function postGroupe(Request $Request)
    {

 
        $Groups = Groups::create([

                'name'=> $Request->nom_groupe

        ]);

        return redirect('/')->with('success','Le groupe a été ajouter avec success ');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adduser(){

        $groups = Groups::all();

        return view('pages.adduser',compact('groups'));
    }

    public function postUser(Request $Request) {

            $user = Users_list::create([

            'first_name'=> $Request->nom,
            'last_name' => $Request->prenom,
            'group_id' => $Request->group

        ]);

        return redirect('/')->with('success','L utilisateur a été ajouter avec success .');
    }

    public function deleteUser($id){

         Users_list::whereId($id)->delete();
   
         return redirect('/')->with('warning','L utilisateur a été supprimer avec success .');

    }

    public function showUser($id){

        $groups = Groups::all();
        $user=Users_list::find($id);
        return view('pages.edituser',compact('user','groups'));
    }

    public function editUser(Request $Request , $id){

        Users_list::where('id', $id)

                  ->update([
                    'first_name'=> $Request->nom,
                    'last_name' => $Request->prenom,
                    'group_id' => $Request->group

                ]);

     return redirect('/')->with('success','La modification a été effectué avec succes .');
    }

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
