<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedBackConttroller extends Controller
{public function store(Request $request)
    {
    $validation = $request->validate([
        'name' => 'required|string|max:60',
        'email' => 'required|string',
        'subject' => 'required|string|max:255',
        'msg' => 'required|string',

    ]);

    $feedback = Feedback::create([

        'name' => $request->name,
        'email' => $request->email,
        'subject' => $request->subject,
        'msg' => $request->msg,


    ]);

    return redirect()->back()->with('helpCreate', '1');
}
}
