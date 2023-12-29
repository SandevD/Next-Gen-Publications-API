<?php

namespace App\Http\Controllers;

use App\Mail\ContactSubmited;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
        $contactData = new Contact();
        $contactData->frist_name = $request->first_name;
        $contactData->last_name = $request->last_name;
        $contactData->email = $request->email;
        $contactData->phone = $request->phone;       
        $contactData->subject = $request->subject;
        $contactData->message = $request->message;
        $contactData->save();

        $title = 'New Contact Form Submission';
        $content = "<table style='text-align:left'><tr><td>Frist Name</td><td>{$request->first_name}</td></tr><tr><td>Email</td><td>{$request->email}</td></tr><tr><td>Phone</td><td>{$request->phone}</td></tr><tr><td>Subject</td><td>{$request->subject}</td></tr><tr><td>Message</td><td>{$request->message}</td></tr></table>";

        Mail::to('rpmanager@nextgen.pub')->send(new ContactSubmited($title, $content));

                //Autoresponse to the sender
                $title = 'Thank you!';
                $content = 'Your message has been received by our team and we will get back to you as soon as possible.';
                Mail::to($request->email)->send(new ContactSubmited($title, $content));

        return response()->json("sss");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
