<a href="<?php echo site_url('users/add'); ?>">Add New User</a>
<table border=1>
    <tr>
        <td>Id</td>
        <td>Email</td>
        <td>Password</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Actions</td>
    </tr>
    <?php foreach($users as $user) { ?>
    <tr>
        <td><?php echo $user['id']; ?></td>
        <td><?php echo $user['email']; ?></td>
        <td><?php echo $user['password']; ?></td>
        <td><?php echo $user['firstname']; ?></td>
        <td><?php echo $user['lastname']; ?></td>
        <td><a href="<?php echo site_url('users/edit/'.$user['id']); ?>">Edit</a> | <a href="<?php echo site_url('users/delete/'.$user['id']); ?>">Delete</a></td>
    </tr>
    <?php } ?>
</table>