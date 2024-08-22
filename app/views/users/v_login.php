<?php require APPROOT."/views/inc/header.php"; ?>

<?php require APPROOT."/views/inc/components/topnavbar.php"; ?>



<div class="container" style="">
<form action="<?php echo URLROOT?>/users/login">
            <div class="form-group">
                <label for="name">Name OR UserName</label>
                <input type="text" id="name" name="name" placeholder="Enter Your Name">
                <span class="invalid"><?php echo $data['name_err']?></span>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter Your Email">
                <span class="invalid"><?php echo $data['name_err']?></span>
            </div>
           
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter Password">
                <span class="invalid"><?php echo $data['name_err']?></span>
            </div>
            
            <button type="submit" class="submit-btn">Login</button>
        </form>
       <p>New Here ?<a href="login.php">Sign Up</a></p>
       </div>

       <?php require APPROOT."/views/inc/footer.php"; ?>