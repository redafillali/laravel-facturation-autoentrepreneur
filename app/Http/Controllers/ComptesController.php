<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComptesController extends Controller {
    // index

    public function index() {
        return view( 'comptes.index' );
    }
}
