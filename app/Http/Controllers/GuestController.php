<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;

class GuestController extends Controller
{
    public function create() {
        return view('guest.create');
    }

    public function store(Request $request) {

        $post = Guest::create([
            'name' => $request->name,
            'address' => $request->address,
            'tel' => $request->tel
        ]);

        return back();
    }
}
