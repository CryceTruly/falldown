<?php

header("Access-Control-Allow-Origin:*");

header("Content-Type:application/json");
include_once('../../../config/Database.php')
;

include_once('../../models/Post.php');


$database=new Database();
$post=new Post($database);
$database->connect();


$result->read();
$num=$result->rowCount();

if($num>0){
    $posts_arr=array();

    $posts_arr['data']=array();

    while($row=$result->fetch(PDO::FETCH_OBJ));

    extract($row);
    $post_item=array(

        'id'=>$id,
        'title'=>$title,
        'body'=> html_entity_decode($body),
        'category_id'=>$category_id,
        'category_name'=>$category_name

    );

    array_push($posts_arr['data'],   $post_item);

    echo json_encode($posts_arr);

}else{ 
    
}
    

?>