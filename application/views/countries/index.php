<a href="<?php echo site_url('countries/add'); ?>">Add New Country</a>
<table border=1>
    <tr>
        <td>Id</td>
        <td>Title</td>
        <td>Actions</td>
    </tr>
    <?php foreach($countries as $country) { ?>
    <tr>
        <td><?php echo $country['id']; ?></td>
        <td><?php echo $country['title']; ?></td>
        <td><a href="<?php echo site_url('countries/edit/'.$country['id']); ?>">Edit</a> | <a href="<?php echo site_url('countries/delete/'.$country['id']); ?>">Delete</a></td>
    </tr>
    <?php } ?>
</table>