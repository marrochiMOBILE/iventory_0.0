<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INVENTORY</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="py-4"></div>
    <div class="container mt-5">
        <div class="row justify-content-md-center ">
            <div class="col-12 col-xl-4">
                <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Login</h5>
                    <hr>
                    <form action="proses/p_login.php" method="post">
                    <div class="form-group">
                        <b><label for="formGroupExampleInput">username</label></b>
                        <input type="text" name="username" class="form-control" id="formGroupExampleInput" >
                    </div>
                    <div class="form-group">
                        <b><label for="formGroupExampleInput2">password</label></b>
                        <input type="text" name="password" class="form-control" id="formGroupExampleInput2" >
                    </div>
                    <button class="btn btn-success">Submit</button>
                    </form>
                   
                </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>