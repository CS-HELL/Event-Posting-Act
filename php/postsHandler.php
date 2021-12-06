<?php 

include('dbconnectionHandler.php');
include('functions.php');

$results = retrieve_posts($con);

if(mysqli_num_rows($results) > 0) {
  while($postsData = mysqli_fetch_assoc($results)){
    $img_path = "img/uploadedpfp/".$postsData['Profile_Pic'];
      echo <<<END
      <div class="[ panel panel-default ] panel-post">
      <div class="panel-heading">
        <img class="[ img-circle pull-left ]" src="$img_path" alt="" />
        <h3>$postsData[Username]</h3>
        <h5><span>$postsData[post_datetime]</span> </h5>
      </div>
      <div class="panel-body">
        <p><b>$postsData[post_title]</b></p>
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
  echo "End of Posts";
}

      

?>