<a href="<?php echo site_url('cities/add'); ?>">Add New City</a>
<table border=1>
    <tr>
        <td>Id</td>
        <td>Title</td>
        <td>Actions</td>
    </tr>
    <?php foreach($cities as $city) { ?>
    <tr>
        <td><?php echo $city['id']; ?></td>
        <td><?php echo $city['title']; ?></td>
        <td><a href="<?php echo site_url('cities/edit/'.$city['id']); ?>">Edit</a> | <a href="<?php echo site_url('cities/delete/'.$city['id']); ?>">Delete</a></td>
    </tr>
    <?php } ?>
</table>