<?php
session_start();
if(session_destroy())
{
echo '<a href="index.php"></a>';
}
?>