{include file="header.tpl"}

    <form class="form-signin" action="/login" method="POST">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputLogin" class="sr-only">Login</label>
        <input type="text" name="username" id="inputLogin" class="form-control" placeholder="Login" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <input type="hidden" name="back_url" value="{$back_url}">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>

{include file="footer.tpl"}