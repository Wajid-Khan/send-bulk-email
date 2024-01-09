<?php
$api_url = 'https://livefit4ever.com/wp-json/wp/v2/posts';
// Set the parameters for pagination
if(isset($_GET['per_page']))
{
    $per_page = $_GET['per_page'];
}
else
{
    $per_page = 10;
}
if(isset($_GET['page']))
{
    $page = $_GET['page'];
}
else
{
    $page = 1;
}

$params = array(
    'per_page' => $per_page,  // Number of posts per page
    'page'     => $page,   // Page number
    '_embed'   => true // Include embedded data, including featured images
);

// $api_url .= '?' . http_build_query($params);
// $ch = curl_init($api_url);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// $response = curl_exec($ch);

// if (curl_errno($ch)) 
// {
//     echo 'Curl error: ' . curl_error($ch);
// } 
// else 
// {
//     $data = json_decode($response, true);
//     foreach ($data as $post) 
//     {

//         $data1[] = array(
//             'title' => $post['title']['rendered'],
//             'excerpt' => $post['excerpt']['rendered'],
//             'image' => $post['_embedded']['wp:featuredmedia'][0]['source_url'],
//         );
//     }

// }
$data1 = 
    [
        [
            'title' => 'title 1',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit dui, augue ullamcorper inceptos velit eget vestibulum est, risus proin iaculis lobortis integer molestie tristique. Laoreet natoque egestas orci viverra, pellentesque tempus.',
            'image' => 'https://livefit4ever.com/wp-content/uploads/2023/12/habits-that-damage-kidneys.webp',
        ],
        [
            'title' => 'title 2',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit dui, augue ullamcorper inceptos velit eget vestibulum est, risus proin iaculis lobortis integer molestie tristique. Laoreet natoque egestas orci viverra, pellentesque tempus.',
            'image' => 'https://livefit4ever.com/wp-content/uploads/2023/12/habits-that-damage-kidneys.webp',
        ],
        [
            'title' => 'title 3',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit dui, augue ullamcorper inceptos velit eget vestibulum est, risus proin iaculis lobortis integer molestie tristique. Laoreet natoque egestas orci viverra, pellentesque tempus.',
            'image' => 'https://livefit4ever.com/wp-content/uploads/2023/12/habits-that-damage-kidneys.webp',
        ],
        [
            'title' => 'title 4',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit dui, augue ullamcorper inceptos velit eget vestibulum est, risus proin iaculis lobortis integer molestie tristique. Laoreet natoque egestas orci viverra, pellentesque tempus.',
            'image' => 'https://livefit4ever.com/wp-content/uploads/2023/12/habits-that-damage-kidneys.webp',
        ],
        [
            'title' => 'title 5',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit dui, augue ullamcorper inceptos velit eget vestibulum est, risus proin iaculis lobortis integer molestie tristique. Laoreet natoque egestas orci viverra, pellentesque tempus.',
            'image' => 'https://livefit4ever.com/wp-content/uploads/2023/12/habits-that-damage-kidneys.webp',
        ],
        [
            'title' => 'title 6',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit dui, augue ullamcorper inceptos velit eget vestibulum est, risus proin iaculis lobortis integer molestie tristique. Laoreet natoque egestas orci viverra, pellentesque tempus.',
            'image' => 'https://livefit4ever.com/wp-content/uploads/2023/12/habits-that-damage-kidneys.webp',
        ],
    ];
// curl_close($ch);
?>
<div style="width: 90%;margin: auto;">
    <table border="1" cellspacing="1">
        <thead>
            <tr>
                <td>Title</td>
                <td>Content</td>
                <td>Image</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data1 as $d): ?>
            <tr>
                <td><?php echo $d['title'] ?></td>
                <td><?php echo mb_strimwidth($d['excerpt'], 0, 150, '...'); ?></td>
                <td><img src="<?php echo $d['image'] ?>" width="20%" /></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <br>
    <button>Previous</button>
    <button style="float: right;">Next</button>
</div>
    

