<?php 

require_once __DIR__.'/app/start.php';


$pages = $db->query("
   SELECT id, label, slug 
   FROM pages
")->fetchAll(PDO::FETCH_ASSOC);


// dd($pages);

require_once VIEW_ROOT . '/home.php';
