<h2>Login</h2>

<form action="/login" method="post">
    @csrf
    <input type="text" name="nik"  autocomplete="off">
    <input type="password" name="password" autocomplete="off">
    <button type="submit">Login</button>
</form>