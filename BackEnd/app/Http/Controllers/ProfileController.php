<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class ProfileController extends Controller
{
    public function index(){
        return Profile::all();
    }
    public function store(Request $request){
        return Profile::create($request->all());
    }

    public function update(Request $request, $id){
        $profile = Profile::findOrFail($id);
        $profile->update($request->all());
        return $profile;
    }

    public function delete($id){
        $profile = Profile::findOrFail($id);
        $profile->delete();
        return 204;
    }
}
