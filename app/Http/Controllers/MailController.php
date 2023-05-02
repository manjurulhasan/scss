<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactMailRequest;
use App\Jobs\ContactMailSendJob;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function mailSend(ContactMailRequest $request) {
        ContactMailSendJob::dispatch($request->all());
        return back()->with('success', 'Mail successfully sent to admin.');
    }
}
