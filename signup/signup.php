
<?php
include_once '../header/header.php';
?>

<h1 class="display-1 d-flex justify-content-center mt-5">Reel Investment Strategies </h1>


<section class="signup-form container">
    <h3 class="d-flex justify-content-center mt-5">Sign Up</h3>
    <form action="../signup/signUp-inc.php" method="post"   class="row g-3">
            <div class="col-md-6">
                <input type="text" class="form-control" placeholder="First name" aria-label="First name">
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
            </div>
        <div class="col-md-6">
            <label for="userEmail" class="form-label">Email</label>
            <input type="email" class="form-control" id="userEmail" placeholder="Email address">
        </div>
        <div class="col-md-6">
            <label for="userPassword" class="form-label">Password</label>
            <input type="password" class="form-control" id="userPassword" placeholder="password">
        </div>
        <div class="col-12">
            <label for="repeatPassword" class="form-label"></label>Repeat Password</label>
            <input type="password" class="form-control" id="repeatPassword" placeholder="Retype password">
        </div>
        <div class="col-12">
            <label for="userName" class="form-label">User Name</label>
            <input type="text" class="form-control" id="userName" placeholder="User name">
        </div>
        <?php

        ?>
        <div class="col-12 mt-2 ">
            <button type="submit" class="btn btn-primary" name="submit" >Sign in</button>
        </div>
    </form>
</section>









<?php
include_once '../docs/footer.php'
?>