@extends('layouts.app')

@section('content')
    <h1 class="display-5 fw-bold text-body-emphasis">Dashboard</h1>
    <p class="lead">Welcome to your dashboard. Here you can manage your account, your clients and much more.</p>


    @foreach ($clients as $client)
       <div>
           <p>Name: {{ $client->name }}</p>
           <p>Email: {{ $client-email }}</p>
           <p>Telephone {{ $client->telephone }}</p>
           <p>Address {{ $client->address }}</p>
           <p>Company Logo: <img src = "{{ asset('storage/' . $client->company_logo) }}" alt = "Company Logo"></p>
        </div>
        <hr>
    @endforeach

    <a href = "{{ url('/clients/add') }}>Add New Client</a>
    
@endsection
