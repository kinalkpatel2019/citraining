<form action="<?php echo site_url('cities/update'); ?>" method="post">
    <input type="hidden" name="id" value="<?php echo $city['id']; ?>"/>
    Title : <input type="text" name="title" value="<?php echo $city['title']; ?>"/><br/>
    <input type="submit" name="submit" value="Update"/>
</form>