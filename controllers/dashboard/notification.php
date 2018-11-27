<?php

require_once './models/announcement.php';

$announcements=get_ann($_SESSION['member_id']);
foreach($announcements as $announcement)
{
    if($announcement['ann_created_at']>$_SESSION['last_logged_out']){
        $_SESSION['announcement'][$announcement['pro_id']]=$announcement;
    }
}
?>