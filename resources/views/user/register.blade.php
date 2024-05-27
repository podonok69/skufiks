<form action="" method="POST">
    @csrf
    <label for="">
        <p>Email</p>
        <input type="email" name="email">
    </label>
    <label for="">
        <p>Password</p>
        <input type="password" name="password">
    </label>
    <label for="">
        <p>Retype password</p>
        <input type="password" name="c_password">
    </label>
    <button type="submit">
        Регистрация
    </button>
</form>