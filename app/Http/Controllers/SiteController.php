<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Email;

class SiteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        return view('home.index');
    }

    // TODO: add validation
    public function enroll(Request $request)
    {
        // 
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255|unique:emails|regex:/^([a-zA-Z]+@gradtouch\.com)$/',
        ]);

        if ($validator->fails()) {
            return view('home.index', [
                'errors' => $validator->errors(),
            ]);
        }

        $email = new Email($request->all());
        $email->created_at = date('Y-m-d H:i:s');

        if ($email->save()) {
            return view('home.index', [
                'message' => 'Success! Thanks for enrolling!',
            ]);
        }

        return view('home.index');
    }


}
