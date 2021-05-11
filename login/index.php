<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Login</title>
</head>

<body style="background-color:antiquewhite">
    <div class="container my-auto">
        <div class="row text-center">
            <div class="col-12">
                <h2>Login Form</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-12">

                <form method="post" action="checklogin.php">
                    <div class="form-group">
                        <label for="uid">Username</label>
                        <input type="text" class="form-control" name="uid" id="uid" aria-describedby="emailHelp" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="pw">Password</label>
                        <input type="password" class="form-control" id="pw" name="pw" placeholder="Password">
                    </div>
                    <div class="row text-center pt-3">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Sign In</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.min.js"></script>
</body>

</html>