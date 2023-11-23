<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class abc extends Controller {
    public function home() {
        return view( 'welcome' );
    }

    public function login() {
        return view( 'Data' );
    }

    public function register( Request $request ) {
        echo '<pre>';

        print_r( $request->input( 'username' ) );
        echo '<br>';
        print_r( $request->all() );
        $request->validate( [
            'username'=>'required',
            'password'=> 'required'

        ] );

    }

}
