<a href="<?php echo site_url('states/add'); ?>">Add New State</a>
<table border=1>
    <tr>
        <td>Id</td>
        <td>Title</td>
        <td>Actions</td>
    </tr>
    <?php foreach($states as $state) { ?>
    <tr>
        <td><?php echo $state['id']; ?></td>
        <td><?php echo $state['title']; ?></td>
        <td><a href="<?php echo site_url('states/edit/'.$state['id']); ?>">Edit</a> | <a href="<?php echo site_url('states/delete/'.$state['id']); ?>">Delete</a></td>
    </tr>
    <?php } ?>
</table>