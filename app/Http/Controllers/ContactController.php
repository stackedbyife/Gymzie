<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

    class ContactController extends Controller
{
    public function show()
    {
        return view('index');
    }
        public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string|min:10',
        ]);

        //  email
        Mail::raw($request->message, function($message) use ($request) {
            $message->to('colesobr@gmail.com')
                    ->subject('New Contact Message from ' . $request->name)
                    ->replyTo($request->email);
        });

        return back()->with('success', 'Thanks for contacting us! We will get back to you soon.');
    }
}

?>
