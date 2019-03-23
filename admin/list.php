<?php 

require_once __DIR__.'/../app/start.php';

$pages = $db->query("
    SELECT id, label, title, slug 
    FROM pages 
    ORDER BY created DESC 
")->fetchAll(PDO::FETCH_ASSOC);

// dd($pages);

require VIEW_ROOT .'/admin/list.php';
