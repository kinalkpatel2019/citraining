<form action="<?php echo site_url('countries/update'); ?>" method="post">
    <input type="hidden" name="id" value="<?php echo $country['id']; ?>"/>
    Title : <input type="text" name="title" value="<?php echo $country['title']; ?>"/><br/>
    <input type="submit" name="submit" value="Update"/>
</form>