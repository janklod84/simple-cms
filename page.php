<?php 
require_once __DIR__.'/app/start.php';


if(empty($_GET['page']))
{
	$page = false;

}else{

	$slug = $_GET['page'];
    
    $page = $db->prepare("
    	SELECT * 
    	FROM pages 
    	WHERE slug = :slug
    	LIMIT 1
    ");

    $page->execute(['slug' => $slug]);

    $page = $page->fetch(PDO::FETCH_ASSOC);

    if($page)
    {
    	 $page['created'] = new Datetime($page['created']);

    	 if($page['updated'])
    	 {
    	 	  $page['updated'] = new Datetime($page['updated']);
    	 }
    }
}

require VIEW_ROOT .'/page/show.php'; 