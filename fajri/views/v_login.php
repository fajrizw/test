<!DOCTYPE html>
<html>
    <head>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/js/first.js">
    <link rel="stylesheet" href="assets/css/stylelogs.css">
</head>

    <body>
    
<form class="form-horizontal" action="login.php" method="POST">
    <div class="form-group">
        <label class="huruf">Username</label>
        <div class="col-sm-10">
            <input type="text" name="username" placeholder="username..." class="form-control" />
</div>
</div>

<div class="form-group">
    <label class="huruf">Password</label>
    <div class="col-sm-10">
        <input type="password" name="password" placeholder="password..." class="form-control"  id="password">
        <i class="bi bi-eye-slash" id="togglePassword"></i>
</div>

<div class="form-group">
    <label class="enter"></label>
    <div class="col-sm-6">
        <button type="submit" class="btn btn-primary">Login</button>

</div>
</div>

</form>
<script>
        const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#password");

        togglePassword.addEventListener("click", function () {
            // toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            
            // toggle the icon
            this.classList.toggle("bi-eye");
        });

      
    </script>
</body>

</html>