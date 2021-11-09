<?php
    include 'dashboard/functions.inc.php';
    if(isset($_POST['submit'])) {
        loginuser();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <title>Signin - Beacon Aid</title>
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
   <meta name="theme-color" content="#ffffff" />
   <link type="text/css" href="dashboard/assets/css/bootstrap.css" rel="stylesheet" />
   <link rel="icon" href="dashboard/assets/logo.png" />
</head>

<body>
   <main>
      <section class="vh-lg-100 mt-5 mt-lg-0 bg-soft d-flex align-items-center">
         <div class="container mt-5">
            <div class="row justify-content-center form-bg-image"
               data-background-lg="dashboard/assets/img/illustrations/signin.svg">
               <div class="col-12 d-flex align-items-center justify-content-center">
                  <div class="bg-white shadow border-0 rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                     <div class="text-center text-md-center mb-4 mt-md-0">
                        <h1 class="mb-0 h3">User Login - Beacon Aid</h1>
                     </div>
                     <form action="" method="POST" class="mt-4" autocomplete="off">
                        <div class="form-group mb-4">
                           <label for="email">Your Email</label>
                           <div class="input-group">
                              <span class="input-group-text" id="basic-addon1">
                                 <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z">
                                    </path>
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                 </svg>
                              </span>
                              <input type="email" name="email" class="form-control" placeholder="example@company.com" id="email"
                                 autofocus required value="<?php echo isset($_POST['submit']) && isset($_POST['email']) ? $_POST['email'] : null ?>" />
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="form-group mb-4">
                              <label for="password">Your Password</label>
                              <div class="input-group">
                                 <span class="input-group-text" id="basic-addon2">
                                    <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd"
                                          d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                          clip-rule="evenodd"></path>
                                    </svg>
                                 </span>
                                 <input type="password" name="password" placeholder="Password" class="form-control" id="password"
                                    required value="<?php echo isset($_POST['submit']) && isset($_POST['password']) ? $_POST['password'] : null ?>" />
                              </div>
                           </div>
                        </div>
                        <div class="d-grid">
                           <button type="submit" name="submit" class="btn btn-gray-800">
                              Sign In
                           </button>
                        </div>
                     </form>
                     <br>
                     <p class="text-danger"><?php include 'dashboard/_formErrors.php'; ?></p>
                     <div class="d-flex justify-content-center align-items-center mt-4">
                        <span class="fw-normal">
                           Want to have an account?
                           <a href="./signup.php" class="fw-bold">Signup here</a>
                        </span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </main>
   </body>

   </html>