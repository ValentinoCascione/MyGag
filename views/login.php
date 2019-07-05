
<?php
include $PATHS['header'];


if (isset($_POST['log'])) {
    session_start();

    $name = isset($_POST['username']) ? $_POST['username'] : '';
    $pass = $_POST['password']; 

    $log = getLogin($name, $pass);
    if (password_verify($pass, $log['password'])) {
        $_SESSION['username'] = $name;
        $_SESSION['id'] = $log['id'];
        $_SESSION['admin'] = $log['admin'];
        header('location:home');
    } else {
        ?>
        <h2>Ce compte n'existe pas</h2>
        <?php
        header('location:login');
    }
}

?>

<form action="login" method='post' class="form-login">
    Username<br/>
    <input class="form-control" type='text' name='username'><br/>
    Password<br/>
    <input class="form-control" type='password' name='password'><br/>
    <input class="btn btn-dark" type='submit' value='Login' name='log'>
</form>


<!-- // if (login) 

<header>
        <nav>
            <ul>
                <li><a href="./home">Home</a></li>
                <li><a href="./logout">Se déconnecter</a></li>
                <li><a href="./create">Créer un poste</a></li>
                <li><a href="./create">Modifier un poste/a></li>
            </ul>
        </nav>
    </header> -->