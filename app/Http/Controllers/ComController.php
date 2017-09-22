<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\com;

class ComController extends Controller
{
    //

    public function create(Request $req){

        $req->validate([

            'comment' => 'required|min:5'

            ]);

        $com = new com;

        $com->body = $req['comment'];

        $com->task_id = $req->id;

        $com -> save();
        return back();



    }
}
