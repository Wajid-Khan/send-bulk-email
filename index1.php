<!DOCTYPE html>
<html lang="en">
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
    </style>
</head>
<body>
    <div class="container mt-5 mb-5">
        <h2>Email Marketing</h2>
        <input type="text" id="result" >
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Featured Image</th>
                    <th>Select Post</th>
                </tr>
            </thead>
            <tbody id="posts-table-body">
                <!-- Posts will be dynamically added here -->
            </tbody>
        </table>
        <!-- Add this inside the body tag -->
        <div id="loader" class="text-center mt-3" style="display: none;">
            <i class="fas fa-spinner fa-spin fa-3x"></i>
        </div>
        <div class="text-center">
            <button id="prevBtn" class="btn btn-primary mr-2">Previous</button>
            <button id="nextBtn" class="btn btn-primary mr-2">Next</button>
            <button id="sendBtn" class="btn btn-success">Send Selected Posts</button>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="main.js"></script>
</body>
</html>
