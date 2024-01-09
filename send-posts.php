<?php

if (isset($_GET['selected_posts'])) {
    $selectedPosts = explode(',', $_GET['selected_posts']);
    // $data = [];
    // Fetch and display posts based on the received post IDs
    foreach ($selectedPosts as $postId) {
        $api_url = 'https://livefit4ever.com/wp-json/wp/v2/posts/' . $postId;

        $ch = curl_init($api_url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($ch);
		if (curl_errno($ch)) 
		{
		    echo json_encode(array('error' => 'Curl error: ' . curl_error($ch)));
		} 
		else 
		{
		    $data[] = json_decode($response, true);
		    // $img_link = $data['yoast_head_json']['og_image'][0]['url'];
		    // echo '<h2>' . $data['title']['rendered'] . '</h2>';
		    // echo '<p>' . $data['excerpt']['rendered'] . '</p>';
		    // echo '<a href="'.$img_link.'" target="_blank">Image Link</a> ';
		    // echo '<a href="'.$data['link'].'" target="_blank">Page Link</a>';
		}

    }
} else {
    echo 'No post IDs received.';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container my-5">
  <h2>Email marketing</h2>
  <hr>
  <form action="send_email_post.php" method="post">
  	<div class="row">
	  	<?php $i=1; foreach ($data as $value): ?>
		    <div class="form-group col-md-4">
			    <div class="form-group col-12">
			    	<h4>Post <?php echo $i; ?></h4>
			    </div>
			    <div class="form-group col-md-12">
			      <label for="title">Title:</label>
			      <input type="text" class="form-control" readonly id="title" placeholder="Enter title" name="title[]" value="<?php echo $value['title']['rendered'] ?>">
			    </div>
			    <input type="hidden" name="image_url[]" value="<?php echo $value['yoast_head_json']['og_image'][0]['url'] ?>">
			    <div class="form-group col-md-12">
			      <label for="content">Content</label>
			      <textarea class="form-control" readonly id="content" placeholder="Enter content" name="content[]" rows="5"><?php $cont = strip_tags($value['excerpt']['rendered']); echo $cont; ?></textarea>
			    </div>
			    <hr>
		    </div>
	    <?php $i++; endforeach ?>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
