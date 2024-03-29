<?php
session_start();
require ("../db_connect.php");
if (!isset($_SESSION['login']))
      {
		http_response_code(404);
		die();
	  }
$query = "SELECT * FROM `admins`";
		
		$result = mysqli_query($connection, $query);
		
		$set = mysqli_fetch_assoc($result);
?>
<?php require("../functions.php"); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- include libraries(jQuery, bootstrap) -->
		<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 
		<link rel="stylesheet" href="../styles/common.css">
		<!-- include summernote css/js -->
		<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
		<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
		<title>Administrator</title>
		<style type="text/css">
			::-webkit-scrollbar-track
			{
			border-radius: 16px;
			background-color: rgba(0,0,0,0);
			}

			::-webkit-scrollbar
			{
			width: 3px;
			border-radius: 10px;
			background-color: rgba(0,0,0,0);
			}

			::-webkit-scrollbar-thumb
			{
			border-radius: 15px;
			background-color: rgba(0,0,0,.3);
			}
			.form-post {
				height: 80vh;
				max-width: 1200px;
				margin: 10vh auto 0;
				background: #d4d4d4;
				overflow: auto;
				border-radius: 15px;
				display: flex;
				flex-direction: column;
				padding: 30px 50px;
			}

			.form-post input {
				background: #fff;
				border: 1px solid #000;
				border-radius: 5px;
				padding: 10px 15px;
				margin: 15px 0;
			}

			.form-post .ta {
				background: #fff;
				opacity: 1;
				resize: vertical
				border: 1px solid #000;
				padding: 30px;
				border-radius: 5px;
				margin: 15px 0;
				display: block;
				min-height: 50vh;
			}

			/* .form-post .ta.b {
				min-height: initial;
				height: auto;
				padding:0;
			} */

			.btn {
				padding: 5px 20px;
				margin: 0 auto;
				font-size: 20px;
			}

		</style>
	</head>
	<body>
	<header id="header" class="header">
    <div class="topbar">
      <div class="container">
        <div class="logo-box">
          <div class="logo-wrapper">
            <a class="logo" href="/">
              <svg data-bbox="39.975 30.05 120 139.95" xmlns="http://www.w3.org/2000/svg" viewBox="39.975 30.05 120 139.95" role="img" width="56" height="68">
                <g>
                  <path d="M159.3 116.9c-1-1-2.6-1-3.6 0l-9.3 9.3-7.7-7.7c12-13.3 15.1-31.6 9.5-47.7-2.3-6.5-5.9-12.7-11.1-17.9-8.5-8.5-19.6-13.4-31.5-13.9-5-.5-11.4 1-11.4 1-8.4 1.6-16.2 5.5-22.6 11.3l-7.7-7.7 9.3-9.3c1-1 1-2.6 0-3.5-1-1-2.6-1-3.6 0l-11.1 11c-24.7 24.7-24.7 65 0 89.7 11.9 11.9 27.3 18 42.9 18.5-.9 4.7-4.2 15-15.1 15h-3.1c-1.4 0-3.6 1.1-3.6 2.5s2.2 2.5 3.6 2.5H125c1.4 0 2.5-1.1 2.5-2.5s-1.1-2.5-2.5-2.5H99.2c4.5-4.3 6.6-10.4 7.3-15.1 15.2-.8 30.1-6.8 41.7-18.4l11.1-11.1c.9-1 .9-2.6 0-3.5zm-17.5-48.6h-5.3l-7.3-8.6c-.3-.4-.7-.7-1.2-.8-12.4-3.5-13.9-2.5-14.8-2-.7.5-1.9 1.1-2.7 1.6l-8.2-3.8-3.3-3.4 3.4-7.3c.3 0 .6-.1.8-.1 11.4 0 22.2 4.4 30.2 12.5 3.7 3.6 6.3 7.6 8.4 11.9zM73.1 56.4c6.5-6.5 14.7-10.5 23.6-11.9l-2.9 6.2c-.4.9-.2 2 .5 2.8l4.8 5c.2.2.5.4.7.5l9.7 4.6c.7.3 1.6.3 2.2 0 0 0 2.4-1.3 3.9-2.2 1.5 0 6.2 1.1 10.3 2.2l7.5 8.9c.5.6 1.2.9 1.9.9h8.4c4.9 14.8 1.6 31.8-10.2 43.6-8.1 8.1-18.8 12.5-30.2 12.5-11.4 0-22.1-4.5-30.2-12.5-5-5.1-8.4-11.1-10.4-17.5l4.4-1.4 5.8 4.2c.4.3 1 .5 1.5.5.7 0 1.4-.3 1.9-.9L85 91.7c.7-.7.8-1.8.4-2.7-.4-.9-1.3-1.5-2.3-1.5H77l-3.2-2.2-.2-4.2 4.1-2.8c.7-.5.9-1.5.9-2.3V61.1c0-1.4-.9-2.2-2.3-2.2h-5.1c.6-.8 1.2-1.7 1.9-2.5zm-4.3 30.4c0 .8.4 1.5 1.1 2l4.9 3.4c.4.3.9.4 1.4.4h1.4L74 96.9l-5-3.6c-.6-.5-1.5-.6-2.2-.4l-5.5 1.7c-1.9-10.4 0-21.4 5.9-30.7h6.5V75l-4.1 2.9c-.7.5-1.1 1.3-1.1 2.2l.3 6.7zM62.1 128C40 105.9 39.5 70.3 60.5 47.4l7.5 7.5c-1.4 1.5-2.7 3.1-3.9 4.7 0 0-.1.1-.1.2-12.7 18.6-10.9 44.2 5.6 60.7 9 9 21 14 33.8 14 11.9 0 23.1-4.5 31.8-12.4l7.5 7.5c-22.9 20.9-58.5 20.5-80.6-1.6z"></path>
                  <path d="M78.5 108v8.6c0 1.1.8 2.2 1.9 2.4l13 2.9h21c.5 0 1-.2 1.4-.4l6-5c.7-.5 1.1-1.3 1.1-2.1v-8.7c0-.6-.2-1.1-.5-1.5L114.5 94c-.6-.8-1.6-1.1-2.5-.9-.9.2-1.7.9-1.9 1.9-.4 1.6-.9 3.5-1.4 5-1.6-1.2-3.9-2.9-7.5-5.1l-9.3-5.8c-.6-.4-1.5-.5-2.2-.2-.7.3-1.3.9-1.5 1.6L86 97.8l-6.9 8.7c-.4.4-.6.9-.6 1.5zm5.1.9l6.7-8.4c.2-.3.4-.6.5-.9l1.4-4.7 6.4 4.1c3.7 2.4 8.2 5.5 8.7 5.9.3 1 1.4 1.9 2.5 1.9 1.7 0 2.5-.6 3.9-5.6l4.3 5.6v6.5l-6.2 3.9-17.8.1-10.3-2.6v-5.8z"></path>
                  <path d="M126.6 91c.4.3 1 .5 1.5.5.2 0 .5 0 .7-.1l9.3-2.7c1.1-.3 1.5-1.3 1.5-2.4v-6.8c0-1.4-.8-2.5-2.2-2.5h-9.3c-1.4 0-2.5 1.1-2.5 2.5V89c-.1.8.3 1.5 1 2zm4-9h4.3v2.4l-4.3 1.2V82z"></path>
                </g>
              </svg>
              <h1>Первая школа</h1>
            </a>
          </div>
        </div>

        <div class="hamburger" id="hamburger">
          <div class="icon-left"></div>
          <div class="icon-right"></div>
        </div>

        <?php require("../floor/f1.php");?>

      </div>
    </div> <!-- topbar END -->
  </header>

  <?php
       if (isset($_POST['submit']))
       {
		//    var_dump($_POST);
          $topic = $_POST['topic'];
          $comment = $_POST['comment'];
          $inf = $_POST['editordata'];
          $query = "INSERT INTO `news`(`topic`,`comment`,`inf`) VALUES ('{$topic}','{$comment}','{$inf}')";
          $result= mysqli_query($connection,$query);
	   }
  	?>

		<form class="form-post" action="admin.php" method="post">
			<h3>Topic</h3>
			<input type="text" name="topic" required>
			<h3>Comment</h3>
			<textarea class="ta" name="comment"></textarea>
			<h3>Edit news!</h3>
			<!-- <div class="ta b"> -->
  				<textarea id="summernote" name="editordata"></textarea>
			<!-- </div> -->
			<input class="btn" type="submit" name="submit" value="Load!">
		</form>
		<script>
			    $(document).ready(function() {
        $('#summernote').summernote({
            height: 200,
            onImageUpload: function(files, editor, welEditable) {
                sendFile(files[0], editor, welEditable);
            }
        });
        function sendFile(file, editor, welEditable) {
            data = new FormData();
            data.append("file", file);
            $.ajax({
                data: data,
                type: "POST",
                url: "",
                cache: false,
                contentType: false,
                processData: false,
                success: function(url) {
                    editor.insertImage(welEditable, url);
                }
            });
        }
    });

		</script>
	</body>
</html>