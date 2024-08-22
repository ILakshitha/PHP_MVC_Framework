<?php require APPROOT."/views/inc/header.php"; ?>

<!--Top Navigation-->
<?php require APPROOT."/views/inc/components/topnavbar.php"; ?>

<h1>User sign up<h1>
    <p>please fill the form for register</p>

<div class="container" style="">
<form action="<?php echo URLROOT?>/users/register">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Enter Your Name"  value="<?php echo $data['name'];?>">
                <span class="invalid"><?php echo $data['name_err'];?></span>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter Your Email"  value="<?php echo $data['email'];?>">
                <span class="invalid"><?php echo $data['email_err'];?></span>
            </div>
            <div class="form-group">
                <label for="username">User Name</label>
                <input type="text" id="username" name="username" placeholder="Enter Your Username" value="<?php echo $data['username'];?>">
                <span class="invalid"><?php echo $data['username_err'];?></span>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter Password"  value="<?php echo $data['password'];?>">
                <span class="invalid"><?php echo $data['password_err']?></span>
            </div>
            <div class="form-group">
                <label for="repeat-password">Password Repeat</label>
                <input type="password" id="repeat-password" name="repeat-password" placeholder="Enter Password Again"  value="<?php echo $data['repeat_password'];?>">
                <span class="invalid"><?php echo $data['repeat_password_err']?></span>
            </div>
            <button type="submit" class="submit-btn">Register</button>
        </form>
       <p>New Here ?<a href="login.php">Log In.</a></p>
       </div>
       

</div>

<?php require APPROOT."/views/inc/footer.php"; ?>