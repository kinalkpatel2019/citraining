<form action="<?php echo site_url('users/insert'); ?>" method="post">
    First Name : <input type="text" name="firstname" /><br/>
    Last Name : <input type="text" name="lastname" /><br/>
    Email : <input type="email" name="email" /><br/>
    Password : <input type="password" name="password" /><br/>
    <input type="submit" name="submit" value="Add"/>
</form>