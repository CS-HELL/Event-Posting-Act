<?php 

include('dbconnectionHandler.php');

$query = "SELECT post_id,post_author_uid,accounts.Username,post_type,post_datetime,post_title,post_content,likers_uid
FROM `user_posts` 
INNER JOIN `accounts` 
ON accounts.UID = user_posts.post_author_uid";

$result = mysqli_query($con, $query);
if(mysqli_num_rows($result) > 0) {
    while($postsData = mysqli_fetch_assoc($result)){
      echo <<<END
      <div class="[ panel panel-default ] panel-post">
      <div class="panel-heading">
        <img class="[ img-circle pull-left ]" src="img\uploadedpfp\defaultpictest.png" alt="" />
        <h3>$postsData[Username]</h3>
        <h5><span>$postsData[post_datetime]</span> </h5>
      </div>
      <div class="panel-body">
        <p>$postsData[post_title]</p>
        <p>$postsData[post_content]</p>
      </div>
      <div class="panel-footer">
        <button type="button" class="[ btn btn-default ]"><i class="fa fa-thumbs-up fa-1x like" aria-hidden="true"></i></button>
        <button type="button" class="[ btn btn-default ]">Comment</button>
      </div>
      </div>
      END;

      echo <<<END
      <div class="[ panel panel-default ] panel-post">
      <div class="panel-heading">
        <img class="[ img-circle pull-left ]" src="img\uploadedpfp\defaultpictest.png" alt="" />
        <h3>$postsData[Username]</h3>
        <h5><span>$postsData[post_datetime]</span> </h5>
      </div>
      <div class="panel-body">
        <p>$postsData[post_title]</p>
        <p>$postsData[post_content]</p>
      </div>
      <div class="panel-footer">
        <button type="button" class="[ btn btn-default ]"><i class="fa fa-thumbs-up fa-1x like" aria-hidden="true"></i></button>
        <button type="button" class="[ btn btn-default ]">Comment</button>
      </div>
      </div>
      END;
    }
} else {
    echo "Hello";
}

?>