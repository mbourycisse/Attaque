<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $resultat = mysqli_query($con,$query);
    if(mysqli_num_rows($resultat) > 0){
        echo "Connexion reussie";

    }else{
        echo "Identifiants incorrects";
    }
    }
    ?>
    <section class="vh-100" style="background-color: #508bfc;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card shadow-2-strong" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
      
                  <h3 class="mb-5">Sign in</h3>
                  <form method="POST" action="">
                  <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="username">Username</label>
                    <input type="text" name="username" class="form-control form-control-lg" />
                  </div>
      
                  <div data-mdb-input-init class="form-outline mb-4">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control form-control-lg" />
                  </div>
      
               
      
                  <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
                </form>
                  <hr class="my-4">
      
    
      
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> 
</body>
</html>