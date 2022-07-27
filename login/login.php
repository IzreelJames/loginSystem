
<?php
include_once '../header/header.php';
?>

<h1 class="display-1 d-flex justify-content-center mt-5">Reel Investment Strategies </h1>

<section class="login-form container">
    <h2>Login</h2>
    <form action="includes:../login/login.php" method="post"   class="row g-3">
        <div class="col-12">
            <label for="userName" class="form-label">User Name</label>
            <input type="text" class="form-control" id="userName" placeholder="Username/Email">
        </div>
        <div class="col-md-6">
            <label for="userPassword" class="form-label">Password</label>
            <input type="password" class="form-control" id="userPassword" placeholder="password">
        </div>
        <div class="col-12 mt-2 ">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </form>
</section>

<?php
include_once '../docs/footer.php'
?>