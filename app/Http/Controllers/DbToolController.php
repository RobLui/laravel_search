<?php

namespace App\Http\Controllers;

use AdvanceSearch\AdvanceSearchProvider\Search;
use Illuminate\Http\Request;
use function view;

class DbToolController extends Controller
{
    public function index(Request $req ) {
        return view('dbtool');
    }

    public function searchFunction(Request $req) {

        $validator = $req->validate(
            [
                'searchtext' => 'required|max:255',
            ]
        );

        if ($validator)
        {
            $s = new Search();

            $user = $s->search(
                'User',
                ['email','name'],
                $req->searchtext,
                null,
                null,
                true ,
                1000
            );

            $test = $s->search(
                'Test',
                ['title','text','tag'],
                $req->searchtext,
                null,
                null,
                true ,
                1000
            );
            return view('dbtool')
                ->withUser($user)
                ->withTest($test)
                ;
        }
        return view('dbtool');
    }

}
