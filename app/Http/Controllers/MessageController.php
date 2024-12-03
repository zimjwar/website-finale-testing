<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(){
        return Message::all();
    }

    public function store(Request $request){

        $request->validate([
            'sender_id'=> 'required|exists:users,id',
            'recipient_id'=>'required|exists:users,id',
            'message'=> 'required|string',
        ]);

      return Message::create($request->all());
    }
    public function show($id){
        return Message::findOrFail($id);
    }

    public function send(Request $request)
{
    $validated = $request->validate([
        'sender_id' => 'required|exists:users,id',
        'recipient_id' => 'required|exists:users,id',
        'message' => 'required|string',
    ]);

    Message::create($validated);

    return redirect()->back()->with('success', 'Message sent successfully!');
}

    public function update(Request $request, $id){
        $message= Message::findOrFail($id);
        $message->update($request->all());

        return $message;
    }

    public function destroy($id){
     $message= Message::findOrFail($id);
     $message->delete();
     return response()->json(['message' => 'Message deleted']);
    }
}
