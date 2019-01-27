<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
	echo '<script type="text/javascript">';
        echo 'location.href="/cve/index.php"';
        echo '</script>';
}
?>
