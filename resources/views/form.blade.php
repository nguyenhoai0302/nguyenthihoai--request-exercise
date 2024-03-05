<form action="{{ url('/post') }}" method="POST">
    @csrf

    <p>Name</p>
    <div>
        <input type="text" name="name" value="">
    </div>

    <p>UserName</p>
    <div>
        <input type="text" name="username" value="">
    </div>

    <p>Password</p>
    <div class="">
        <input type="password" name="password">
    </div>
    <br>

    <div>
        <button type="submit">Register</button>
    </div>
</form>
