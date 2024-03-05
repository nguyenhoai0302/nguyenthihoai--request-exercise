<form action="{{ url('/post') }}" method="POST">
    @csrf

    <div> <p>Name: <input type="text" name="name" value=""></p> </div>
    <div> <p>UserName: <input type="text" name="username" value=""></p> </div>
    <div> <p>Password: <input type="password" name="password"></p> </div>
    <div>
        <button type="submit">Register</button>
    </div>
</form>
