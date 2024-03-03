@extends('layouts.app')

@section('content')
    <h2>Create Client</h2>

    <form method = "post" action = "{{ url('/clients') }}" enctype = "multipart/form-data">
        @csrf

        <label for = "name">Name *</label>
        <input type = "text" name = "name" required>
        <br>

        <label for = "email">Email *</label>
        <input type = "email" name = "email" requried>
        <br>

        <label for = "phone"> Phone *</label>
        <input type = "text" name = "phone" required>
        <br>

        <label for = "address"> Address *</label>
        <input type = "text" name = "address" required>
        <br>

        <label for = "company_logo">Company Logo *</label>
        <div>
            <input type = "file" name = "company_logo" accept = "image/*" required>
            <button type = "button" onclick = "document.querySelector('input[name = company_logo]').click()">Browse</button>
        </div>
        <br>

        <button type = "submit">Creat</button>
    </form>
@endsection
