<?php

namespace App\Http\Controllers;

use App\Mail\Answer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Expr\New_;

class TicketsController extends Controller
{
    private $tickets = [
        ["name" => "giorgio", "user_email" => "giorgio@gmail.com", "created_at" => "09-02-2024", "descrption" => "descrizione", "status" => "aperto"],
        ["name" => "rossi", "user_email" => "verde@gmail.com", "created_at" => "09-02-2024", "description" => "descrizione", "status" => "aperto"],
        ["name" => "bianchi", "user_email" => "bianchi@gmail.com", "created_at" => "09-02-2024", "description" => "descrizione", "status" => "aperto"],
        ["name" => "verde", "user_email" => "verde@gmail.com", "created_at" => "09-02-2024", "description" => "descrizione", "status" => "aperto"],
        ["name" => "nero", "user_email" => "nero@gmail.com", "created_at" => "09-02-2024", "description" => "descrizione", "status" => "aperto"],
    ];

    public function index()
    {
        return view('tickets', ['tickets' => $this->tickets]);
    }

    public function show($id)
    {
        return view('ticket', ['ticket' => $this->tickets[$id], 'id' => $id], );
    }

    public function send(Request $request)
    {
        $ticket= $this->tickets[$request->id];
        Mail::to($ticket['user_email'])->send(new Answer ($ticket["name"],$ticket['created_at'],$request->answer));
        return redirect()->back()->with(['success'=>'Il ticket è stato gestito correttamente.']);
    }

}