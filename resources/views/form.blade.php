<form action="test" method="post">
     <input name="test" value="asdasdasd" />
     <input type="submit" name="submit" value="submit" />
     <input name="_token" value="<?php echo csrf_token(); ?>" />
</form>