<?php

// require "Database.php";
use Core\Database;


$config =  require base_path('config.php');

$db = new Database($config['database']);
$current_user_id = 1;

// require "Response.php";

 $note = $db->query("select * from notes where id = :id",['id'=> $_GET['id']])->findOrFail();

//Refactoring

//if($note['user_id'] !== $current_user_id){
 //   abort( Response::FORBIDDEN);
//}
//databaseထဲကuser_idနဲuserဆီကပေးတဲ့dataမတူရင်
authorize($note['user_id'] == $current_user_id);

view("notes/show.view.php", ['heading' => 'Note Detail', 'note' => $note]);

 