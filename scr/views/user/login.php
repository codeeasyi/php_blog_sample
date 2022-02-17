<?php include ('../src/views/layout/header.php') ?>

<br>
<br>

<div class="wrapper">
    <form method="POST" method="login" class="form-signin">       
      <h2 class="form-signin">Username</h2>
      <input type="text" class="form-control" name="username" placeholder="Username" required="" autofocus="" />

      <h2 class="form-signin">Password</h2>
      <input type="password" class="form-control" name="password" placeholder="Password" required=""/>      
      <br>

      <?php if(!empty($error)): ?>
        <p style="color:red"><?php echo $error; ?></p>
      <?php endif; ?>

      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>   
    </form>
</div>

<?php include ('../src/views/layout/footer.php') ?>