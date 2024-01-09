<?php  

    foreach ($_POST['title'] as $key => $title) 
    {
        $result[] = 
        [
            'title' => $title,
            'image_url' => $_POST['image_url'][$key],
            'content' => $_POST['content'][$key],
        ];
    }
echo '<pre>';
print_r($result);

?>