<?php
    include('config.php');
    
    spl_autoload_register('myAutoLoad');
    new Home\Inicial();
?>