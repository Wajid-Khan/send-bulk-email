// main.js (Frontend JavaScript)

document.addEventListener("DOMContentLoaded", function () {
    const postsTableBody = document.getElementById('posts-table-body');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const sendBtn = document.getElementById('sendBtn');
    const loader = document.getElementById('loader');

    const checkboxes = document.querySelectorAll('.post-checkbox');
    const resultInput = document.getElementById('result');

    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function () {
            alert()
            updateResult();
        });
    });

    function updateResult() {
        const checkedValues = Array.from(checkboxes)
            .filter(checkbox => checkbox.checked)
            .map(checkbox => {
                const hiddenInput = checkbox.nextElementSibling; // Assuming hidden input is the next sibling
                return hiddenInput.value;
            });

        resultInput.value = checkedValues.join(', ');
    }

    let currentPage = 1;

    // Function to toggle loader visibility
    function toggleLoader(show) {
        loader.style.display = show ? 'block' : 'none';
    }

    // Function to toggle button state
    function toggleButtons(disabled) {
        prevBtn.disabled = disabled;
        nextBtn.disabled = disabled;
        sendBtn.disabled = disabled;
    }

    // Function to fetch and display posts
    function fetchPosts() {
        toggleLoader(true); // Show loader
        toggleButtons(true); // Disable buttons

        fetch(`main.php?per_page=10&page=${currentPage}`)
            .then(response => response.json())
            .then(data => {
                // Clear existing table rows
                postsTableBody.innerHTML = '';

                // Loop through each post and add a row to the table
                data.forEach(post => {
                    const newRow = `
                        <tr>
                            <td>${post.title.rendered}</td>
                            <td>${post.excerpt.rendered}</td>
                            <td>
                                ${post._embedded && post._embedded['wp:featuredmedia'] && post._embedded['wp:featuredmedia'][0] ? 
                                    `<img src="${post._embedded['wp:featuredmedia'][0].source_url}" alt="Featured Image" style="max-width: 100px;">` :
                                    'N/A'
                                }
                            </td>
                            <td>
                                <input type="checkbox" class="post-checkbox" data-post-id="${post.id}" onclick="updateResult1()">
                                <input type="hidden" class="hidden-input" value="${post.id}" >
                            </td>
                        </tr>
                    `;
                    postsTableBody.innerHTML += newRow;
                });

                toggleLoader(false); // Hide loader
                toggleButtons(false); // Enable buttons
            })
            .catch(error => {
                console.error('Error fetching posts:', error);
                toggleLoader(false); // Hide loader on error
                toggleButtons(false); // Enable buttons on error
            });
    }

    // Event listener for Previous button
    prevBtn.addEventListener('click', function () {
        if (currentPage > 1) {
            currentPage--;
            fetchPosts();
        }
    });

    // Event listener for Next button
    nextBtn.addEventListener('click', function () {
        currentPage++;
        fetchPosts();
    });

    // Event listener for Send button
    sendBtn.addEventListener('click', function () {
        const selectedPosts = Array.from(document.querySelectorAll('.post-checkbox:checked'))
            .map(checkbox => checkbox.getAttribute('data-post-id'));

        // Redirect to another page with selected posts
        if (selectedPosts.length > 0) {
            window.location.href = `send-posts.php?selected_posts=${selectedPosts.join(',')}`;
        } else {
            alert('No posts selected.');
        }
    });

    function updateResult1() {
        alert()
        const checkedValues = $('.post-checkbox:checked').map(function() {
            const hiddenInput = $(this).next('.hidden-input'); // Assuming hidden input is the next sibling
            return hiddenInput.val();
        }).get();

        $('#result').val(checkedValues.join(', '));
    }

    

    // Initial fetch when the page loads
    fetchPosts();
});
