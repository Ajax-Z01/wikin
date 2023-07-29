<?php

namespace App\Http\Controllers;

use App\Models\forgotpassword;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Password;

class forgotpasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Send reset password email.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
    }
    public function index()
    {
        return view('auth.forgotpassword');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
     * @param  \App\Models\forgotpassword  $forgotpassword
     * @return \Illuminate\Http\Response
     */
    public function show(forgotpassword $forgotpassword)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\forgotpassword  $forgotpassword
     * @return \Illuminate\Http\Response
     */
    public function edit(forgotpassword $forgotpassword)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\forgotpassword  $forgotpassword
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, forgotpassword $forgotpassword)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\forgotpassword  $forgotpassword
     * @return \Illuminate\Http\Response
     */
    public function destroy(forgotpassword $forgotpassword)
    {
        //
    }
}
