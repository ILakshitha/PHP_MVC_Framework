<?php require APPROOT."/views/inc/header.php"; ?>

<!--Top Navigation-->
<?php require APPROOT."/views/inc/components/topnavbar.php"; ?>

<h1>User sign up<h1>
    <p>please fill the form for register</p>

<div class="container" style="">
<form>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Enter Your Name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter Your Email">
            </div>
            <div class="form-group">
                <label for="username">User Name</label>
                <input type="text" id="username" name="username" placeholder="Enter Your Username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter Password">
            </div>
            <div class="form-group">
                <label for="repeat-password">Password Repeat</label>
                <input type="password" id="repeat-password" name="repeat-password" placeholder="Enter Password Again">
            </div>
            <button type="submit" class="submit-btn">Register</button>
        </form>
       <p>New Here ?<a href="login.php">Log In.</a></p>
       </div>

</div>

<?php require APPROOT."/views/inc/footer.php"; ?>