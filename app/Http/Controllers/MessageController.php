<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\Repositories\MessageRepository;

class MessageController extends Controller
{

  protected $messages;

  public function __construct(MessageRepository $messages)
  {
      $this->middleware('auth');

      $this->messages = $messages;
  }

  public function index(Request $request)
  {
      $messages = Message::orderBy('updated_at','desc')->get();
      return view('auth.messages.index', [
        'messages' => $messages,
    ]);
  }

  public function store(Request $request)
  {
      $this->validate($request, [
        'name' => 'required|max:255',
  ]);

      $request->user()->messages()->create([
        'name' => $request->name,
  ]);

      return redirect('/messages');
  }

  public function edit(Message $message)
  {
      return view('auth.messages.edit',compact('message'));
  }

  public function update(Request $request, Message $message)
  {
      $this->authorize('update', $message);

      $message->update([
            'name' => $request->body
  ]);
      return redirect('/messages');
}

  public function show(Message $message)//$id)
  {
    //$message = Message::find($id);
      return $message;
  }

  public function destroy(Request $request, Message $message)
  {

      $this->authorize('destroy', $message);

      $message->delete();

      return redirect('/messages');
  }
}
