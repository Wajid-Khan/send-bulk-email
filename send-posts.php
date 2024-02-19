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
  <title>Send Bulk Email</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container my-5">
  <h2>Send Bulk Email</h2>
  <hr>
  <form action="send_email_post.php" method="post">
 
	  	<?php $i=1; foreach ($data as $value): ?>
		    
			    <div>
			    	<h4>Post <?php echo $i; ?></h4>
			    </div>
			    <input type="hidden" name="image_url[]" value="<?php echo $value['yoast_head_json']['og_image'][0]['url'] ?>">
			    <input type="hidden" name="link[]" value="<?php echo $value['link']; ?>">
			    <div class="row">
				    <div class="form-group col-md-4">
				      <label for="title">Title:</label>
				      <textarea class="form-control" readonly id="title" name="title[]" rows="5"><?php echo $value['title']['rendered'] ?></textarea>
				    </div>
				    <div class="form-group col-md-8">
				      <label for="content">Content</label>
				      <textarea class="form-control" readonly id="content" placeholder="Enter content" name="content[]" rows="5"><?php $cont = strip_tags($value['excerpt']['rendered']); echo $cont; ?></textarea>
				    </div>
			    	<hr>
		    	</div>
	    <?php $i++; endforeach ?>

    <button type="submit" class="btn btn-primary" id="clearStorage">Submit</button>
  </form>
  <a href="preview.php?ids=<?php echo $_GET['selected_posts']; ?>" class="btn btn-primary" id="preview" target="_blank" style="float: right;margin-top: -37px;">Preview</a>
  <!-- <form action="preview.php" method="post">
  	<input type="hidden" name="ids" value="<?php echo $_GET['selected_posts']; ?>">
  	<button type="submit" class="btn btn-primary" id="preview" >Preview</button>
  </form> -->
</div>

<script>
	$('#clearStorage').on('click', function() {
        localStorage.removeItem('checkedValues');
        checkedValues = [];
        $('#result').val('');
    });
</script>
</body>
</html>
