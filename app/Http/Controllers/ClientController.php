<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    
    public function create() {
        return view('clients');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:clients|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'company_logo' => 'required|image|mimes:jpeg,png,jpg|max:2048',


        ]);

        $companyLogoPath = $request->file('company_logo')->store('company_logos', 'public');


        $client = Client::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'address' => $validatedData['address'],
            'company_logo' => $companyLogoPath,

        ]);

        return redirect('/dashboard')->with('Success', 'Client created successfully.');
        
    }
}
