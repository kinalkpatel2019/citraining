<form action="<?php echo site_url('users/update'); ?>" method="post">
    <input type="hidden" name="id" value="<?php echo $user['id']; ?>"/>
    First Name : <input type="text" name="firstname" value="<?php echo $user['firstname']; ?>"/><br/>
    Last Name : <input type="text" name="lastname" value="<?php echo $user['lastname']; ?>"/><br/>
    Email : <input type="email" name="email" value="<?php echo $user['email']; ?>"/><br/>
    Password : <input type="password" name="password" value="<?php echo $user['password']; ?>"/><br/>
    <input type="submit" name="submit" value="Update"/>
</form>