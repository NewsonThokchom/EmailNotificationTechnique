<?php

namespace App\Http\Controllers;

use App\Events\TaskEvent;
use App\Models\SendNotification;
use App\Models\User;
use App\Notifications\SendNotification as NotificationsSendNotification;
use Illuminate\Http\Request;
// use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Notification;

class SendNotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sendNotificationForm');
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

        // $user = User::first();
        // send to single a user
        // $user->notify(new NotificationsSendNotification($user));

        $users = User::get();
        event(new TaskEvent($users));

        return Redirect::back()->with('message', 'Email successfully sent');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SendNotification  $sendNotification
     * @return \Illuminate\Http\Response
     */
    public function show(SendNotification $sendNotification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SendNotification  $sendNotification
     * @return \Illuminate\Http\Response
     */
    public function edit(SendNotification $sendNotification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SendNotification  $sendNotification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SendNotification $sendNotification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SendNotification  $sendNotification
     * @return \Illuminate\Http\Response
     */
    public function destroy(SendNotification $sendNotification)
    {
        //
    }
}
