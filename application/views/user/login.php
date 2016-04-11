<div class="container">

<h2><?php echo $title; ?></h2>

<?php
    echo validation_errors('<div class="alert alert-danger" role="alert">','</div>');

    $attributes = array('class' => 'form-signin');

     echo form_open('user/login',$attributes);
?>
    <h2 class="form-signin-heading">Please sign in</h2>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" name="inputEmail" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="Password" required>
    <div class="checkbox">
        <label>
            <input type="checkbox" name='remember-me' value="remember-me"> Remember me
        </label>
    </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>

</div> <!-- /container -->