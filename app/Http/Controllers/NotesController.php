<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Card;
use App\Note;
use App\Http\Requests;

class NotesController extends Controller
{
     public function store(Request $request, Card $card)
	{
	
	 $this->validate($request, ['body'=> 'required']);
	 $note= new Note;
	 $note->body = $request->body;
	 $card->notes()->save($note);
	 return back();
	 
	 //$card->notes()->save( new Note(['body' => $request->body]) );
	 }
	 
	 public function edit(Note $note)
	{
	 return view ('notes.edit', compact('note'));
	 
	 }
	 
	 public function update(Request $request, Note $note)
	{
	 //return view ('notes.edit', compact('note'));
	 $note->update($request->all());
	 return back();
	 }
}
