extends(layouts.app)

@section('content')
    <h2>Login Form</h2>

    

    <form method = "post" action = "{{ url('/login') }}">
        @csrf


        <label for ="email">Email:</label>
        <input type = "email" name ="email" value = "{{old('email') }}" required>

        <br>

        <label for = "password"> Password:</label>
        <input type = "password" name = "password" required>

        <br>

        button type = "submit">Login</button>

    </form>
@endsection
