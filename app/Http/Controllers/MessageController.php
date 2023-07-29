<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contact;
use App\Models\Message;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class MessageController extends Controller
{
    /**
     * Show the message for every users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::id(); // Mendapatkan id user yang sedang login
        $messages = Message::where('user_id', $user_id)->where('is_read', 0)->with('user')->orderBy('created_at', 'desc')->get();

        $contacts = Contact::orderBy('created_at', 'desc')->get();

        return view('dashboard.sidebar.informasi.informasi', compact('messages', 'contacts'));
    }

    public function sendMessageToUser(Request $request, $user_id)
    {
        // Validate input and check if the user exists
        $request->validate([
            'user_id' => 'required',
            'name' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'content' => 'required|string|max:255',
        ]);

        $user = User::find($user_id);

        if (!$user) {
            return redirect()->back()->withErrors("User not found.");
        }

        // Create a new message
        $message = new Message();
        $message->user_id = $user->id;
        $message->name = $request->input('name');
        $message->subject = $request->input('subject');
        $message->content = $request->input('content');
        $message->save();

        // Optionally, you can send notifications or alerts to the user about the new message

        return redirect()->back()->withSuccess("Message sent successfully.");
    }

    public function destroy($id)
    {
        $message = Message::find($id);
        $message->delete();

        $notification = new Notification();
        $notification->model()->associate($message); // Menghubungkan dengan model Post
        $notification->content = 'Content has been deleted.';
        $notification->save();

        return redirect()->route('informasi')->withSuccess('Informasi berhasil dihapus.');
    }

    public function destroy2($id)
    {
        $message = Contact::find($id);
        $message->delete();

        $notification = new Notification();
        $notification->model()->associate($message); // Menghubungkan dengan model Post
        $notification->content = 'Content has been deleted.';
        $notification->save();

        return redirect()->route('informasi')->withSuccess('Informasi berhasil dihapus.');
    }
}
