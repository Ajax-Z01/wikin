<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function sendMessageToUser(Request $request, $userId)
    {
        // Validate input and check if the user exists
        $request->validate([
            'subject' => 'required|string|max:255',
            'content' => 'required|string|max:255',
        ]);

        $user = User::find($userId);

        if (!$user) {
            return redirect()->back()->withErrors("User not found.");
        }

        // Create a new message
        $message = new Message();
        $message->user_id = $user->id;
        $message->subject = $request->input('subject');
        $message->content = $request->input('content');
        $message->save();

        // Optionally, you can send notifications or alerts to the user about the new message

        return redirect()->back()->withSuccess("Message sent successfully.");
    }
}
