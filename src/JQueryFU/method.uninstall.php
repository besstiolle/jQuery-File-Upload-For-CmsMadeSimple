<?php
if (!function_exists('cmsms')) exit;

$db = cmsms()->GetDb();

$this->RemovePermission('Use JqueryFU');
$this->DeleteTemplate();

// put mention into the admin log
$this->Audit( 0, $this->Lang('friendlyname'), $this->Lang('uninstalled'));

?>