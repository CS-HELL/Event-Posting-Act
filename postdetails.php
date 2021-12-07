<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/posts.css">
</head>


<body>
    <header>
        <a class="name" href="index.php">AsTronK</a>
        <ul class="navigation">
            <li><a class="ahref" href="#"><i class="fa fa-bars" style="font-size:23px;"></i></a>
                <ul>
                    <li><a class="ahref" href="index.php">Home</a></li>
                    <li><a class="ahref" href="#">Profile</a></li>
                    <li><a class="ahref" href="php/logoutHandler.php"><i class="fa fa-sign-out-alt"></i> Sign Out</a></li>
                </ul>
            </li>
        </ul>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div class="sidebar-left" id="sidebar-left">
                </div>
            </div>
            <div class="col-sm-6">

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

            </div>
            <div class="col-sm">
                <div class="sidebar-right"></div>
            </div>
        </div>
    </div>

    <!-- <div class="container">
    <div class="sidebar-left" id="sidebar-left">
     
    </div>

    <div class="middle-content" id="mid-content">
      
    </div>

    <div class="sidebar-right"></div>
  </div> -->

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" language="javascript" src="js/script.js"></script>

<footer></footer>

</html>


<!-- <div class="panel-post-tags">
          <ul>
            <li>Post Regular</li>
            <li>Post Event</li>
            <li>Post Poll</li>
          </ul>
        </div> -->