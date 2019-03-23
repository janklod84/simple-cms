<?php  

require_once __DIR__.'/../app/start.php';

if(isset($_GET['id']))
{
	// delete
	$deletePage = $db->prepare("
		DELETE FROM pages 
		WHERE id = :id
	");

	$deletePage->execute(['id' => $_GET['id']]);
}

header('Location: ' . BASE_URL .'/admin/list.php');

