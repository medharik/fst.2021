<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php include("_css.php") ?>
</head>

<body>
    <div class="container">
        <?php
        if (isset($_GET['cn']) && $_GET['cn'] == 'no') {

        ?>
            <div class="alert alert-danger">Login/Mot de passe incorrects</div>
        <?php } ?>
        <form action="check_login.php" method="post">
            <div class="row">
                <div class="col-md-6 shadow mx-auto p-2">
                    <div>
                        <label for="exampleInputEmail1" class="form-label">Login</label>
                        <input type="text" class="form-control" name="login" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="passe" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

        </form>
    </div>

</body>

</html>