<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RelationshipManageController extends Controller
{
    //

    public function lists()
    {
            return view('relation.lists');
    }

    public function many_to_many()
    {
            return view('relation.many_to_many');
    }
}
