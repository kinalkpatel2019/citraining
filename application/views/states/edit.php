<form action="<?php echo site_url('states/update'); ?>" method="post">
    <input type="hidden" name="id" value="<?php echo $state['id']; ?>"/>
    Title : <input type="text" name="title" value="<?php echo $state['title']; ?>"/><br/>
    <input type="submit" name="submit" value="Update"/>
</form>