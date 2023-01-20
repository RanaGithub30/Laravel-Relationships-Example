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
}
