<?php 

include('dbconnectionHandler.php');

$query = "SELECT posts.post_id,posts.post_author_id,accounts.Username,posts.post_date_time,posts.post_tags,posts.likers,content 
FROM `posts_regular` 
INNER JOIN `posts` 
ON posts.post_id = posts_regular.post_id 
INNER JOIN `accounts` 
ON accounts.UID = posts.post_author_id;";

$result = mysqli_query($con, $query);
if($result && mysqli_num_rows($result) > 0) {
    $postsData = mysqli_fetch_assoc($result);
    
    echo <<<END
    <div class="[ panel panel-default ] panel-post">
    <div class="panel-heading">
      <img class="[ img-circle pull-left ]" src="img\uploadedpfp\defaultpictest.png" alt="" />
      <h3>$postsData[Username]</h3>
      <h5><span>$postsData[post_date_time]</span> </h5>
    </div>
    <div class="panel-body">
      <p>$postsData[content]</p>
    </div>
    <div class="panel-footer">
      <button type="button" class="[ btn btn-default ]"><i class="fa fa-thumbs-up fa-1x like" aria-hidden="true"></i></button>
      <button type="button" class="[ btn btn-default ]">Comment</button>
    </div>
    </div>
    END;
} else {
    echo "Hello";
}

?>