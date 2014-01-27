<html><head><title>Tables</title></head><body>

<h3>Setting up...</h3>

<?php
include_once 'config.php';

createTable('members',
            'user VARCHAR(16),
            pass VARCHAR(16),
            INDEX(user(6))');

?>

<br />...done.
</body></html>