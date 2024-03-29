<?php

$api_url = 'https://livefit4ever.com/wp-json/wp/v2/posts'; // Replace with the actual URL of the WordPress site

// Get pagination parameters from the query string
$per_page = 10;
$page = isset($_GET['page']) ? $_GET['page'] : 1;

// Set the parameters for the API request
$params = array(
    'per_page' => $per_page,
    'page'     => $page,
    '_embed'   => true // Include embedded data, including featured images
);

// Append the parameters to the API URL
$api_url .= '?' . http_build_query($params);

$ch = curl_init($api_url);

// Set cURL options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute cURL session and get the response
$response = curl_exec($ch);

// Check for cURL errors
if (curl_errno($ch)) {
    echo json_encode(array('error' => 'Curl error: ' . curl_error($ch)));
} else {
    $data = json_decode($response, true);
    foreach($data as $post) {
        $posts[] = array(
                'id' => $post['id'],
                'title' => $post['title']['rendered'],
                'excerpt' => $post['excerpt']['rendered'],
                'image' => $post['_embedded']['wp:featuredmedia'][0]['source_url']
        );
    }
    
}

// Close cURL session
curl_close($ch);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Marketing</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Include Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <style>
        .post-checkbox{
            width: 20px;
            height: 20px;
        }
        .overlay {
          display: none;
          position: fixed;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background-color: rgba(255, 255, 255, 0.7);
          justify-content: center;
          align-items: center;
          z-index: 999;
        }

        .loader {
          text-align: center;
        }

        .loader img {
          width: 450px; /* Adjust the size of the loader image */
        }
    </style>
</head>
<body >
    <div class="container my-5 ">
        <div class="overlay" id="overlay">
            <div class="loader">
              <img src="assets/loader.gif" alt="Loader">
            </div>
        </div>
        <h3>Livefit4ever blogs for sending bulk email</h3>
        <form method="get" action="send-posts.php">
            <div class="row">
                <div class="col-md-6">
                    <input type="text" id="result" name="selected_posts" class="form-control" readonly required>
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary" onclick="showLoader()" id="submit_posts">Submit</button>
                    <button type="button" id="clearStorage" class="btn btn-primary">Clear</button>
                </div>
            </div>
        </form>
        <br>
        <!-- <hr> -->
        
        <table class="table" >
            <thead>
                <tr>
                    <th>Post Id</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Featured Image</th>
                </tr>
            </thead>
            <tbody id="posts-table-body">
                <?php if(!empty($posts)): foreach($posts as $post): ?>
                    <tr>
                        <td><?php echo $post['id']; ?> <input type="checkbox" id="checkbox" class="post-checkbox" value="<?php echo $post['id']; ?>" ></td>
                        <td><?php echo $post['title'] ?></td>
                        <td><?php echo $post['excerpt'] ?></td>
                        <td><img src="<?php echo $post['image'] ?>" width="40%"> </td>
                    </tr>
                <?php endforeach; endif; ?>
            </tbody>
        </table>
        <?php if(isset($_GET['page']) && ($_GET['page'] > 1)): ?>
            <a href="index.php?page=<?php if(isset($_GET['page'])): echo $_GET['page'] - 1; endif; ?>" class="btn btn-primary" onclick="showLoader()">Prev</a>
        <?php else: ?>
            <a href="javascript:vooid(0)" class="btn btn-primary disabled" onclick="showLoader()">Prev</a>
        <?php endif; ?>
        <a style="float:right;" href="index.php?page=<?php if(isset($_GET['page'])): echo $_GET['page'] + 1; else: echo 2; endif; ?>" 
        class="btn btn-primary" onclick="showLoader()">Next</a>
    </div>
        

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {

            $('#submit_posts').click(function(){
                var result = $('#result').val();
                var stringArray = result.split(',');
                if (stringArray.length === 6) 
                {
                    return true;
                }
                else if(stringArray.length < 6)
                {
                    alert('Please select 6 posts');
                    return false;
                } else if(result === '')
                {
                    alert('Please select posts');
                    return false;
                }
                else
                {
                    alert('Please select 6 posts');
                    return false;
                }
                    
            }); 

            $('#overlay').css('display','none');
            // Initialize checkedValues with values from local storage
            var checkedValues = JSON.parse(localStorage.getItem('checkedValues')) || [];

            // Update the result input field with initial values
            $('#result').val(checkedValues.join(','));

            $('.post-checkbox').on('click', function() {
                var checkboxValue = $(this).val();

                if ($(this).is(':checked') && checkedValues.indexOf(checkboxValue) === -1) {
                    // Add the value only if it doesn't exist in the array
                    checkedValues.push(checkboxValue);
                } else if (!$(this).is(':checked')) {
                    // Remove the value from the array if the checkbox is unchecked
                    checkedValues = checkedValues.filter(function(value) {
                        return value !== checkboxValue;
                    });
                }

                // Update local storage
                localStorage.setItem('checkedValues', JSON.stringify(checkedValues));

                // Update the result input field
                $('#result').val(checkedValues.join(','));
            });
            $('#clearStorage').on('click', function() {
                // Clear local storage and update the result input field
                localStorage.removeItem('checkedValues');
                checkedValues = [];
                $('#result').val('');
            });
        });
        function showLoader() {
          var overlay = document.getElementById("overlay");
          overlay.style.display = "flex"; // Show overlay

          // Simulate an asynchronous task (e.g., AJAX request) that takes some time
          setTimeout(function() {
            // Hide overlay after the task is complete
            overlay.style.display = "none";
          }, 2000); // Adjust the time based on your task duration
        }
    </script>
</body>
</html>