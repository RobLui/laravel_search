<?php

namespace App\Http\Controllers;

use AdvanceSearch\AdvanceSearchProvider\Search;
use Illuminate\Http\Request;
use function preg_match;
use function view;

class DbToolController extends Controller
{
    public function index(Request $req ) {
        return view('dbtool');
    }

    public function searchFunction(Request $req) {

        if(!preg_match('#(?<=<)\w+(?=[^<]*?>)#', $req->searchtext) && !preg_match('#<#',$req->searchtext)) {

            $validator = $req->validate(
                [
                    'searchtext' => 'required|max:255',
                ]
            );

            if ($validator) {
                $s = new Search();

                // USERS
                $user = $s->search(
                    'User',
                    ['email', 'name'],
                    $req->searchtext,
                    null,
                    null,
                    true,
                    1000
                );

                // TESTS
                $test = $s->search(
                    'Test',
                    ['title', 'text', 'tag'],
                    $req->searchtext,
                    null,
                    null,
                    true,
                    1000
                );

                // CHARACTERS
                $character = $s->search(
                    'Character',
                    ['title', 'name', 'text'],
                    $req->searchtext,
                    null,
                    null,
                    true,
                    1000
                );

                return view('dbtool')
                    ->withUser($user)
                    ->withTest($test)
                    ->withCharacter($character);
            }
        }
        return view('dbtool');
    }

}
