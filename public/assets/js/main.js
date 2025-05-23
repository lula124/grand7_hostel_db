// main.js

// Example: Show a confirmation dialog before deleting a student/record
document.addEventListener('DOMContentLoaded', function() {
    const deleteButtons = document.querySelectorAll('.btn-danger');
    deleteButtons.forEach(function(btn) {
        btn.addEventListener('click', function(e) {
            if (!confirm('Are you sure you want to delete this record?')) {
                e.preventDefault();
            }
        });
    });
});

// Example: Highlight active navbar link
document.addEventListener('DOMContentLoaded', function() {
    const path = window.location.pathname;
    document.querySelectorAll('.navbar-nav .nav-link').forEach(function(link) {
        if (link.getAttribute('href') && path.includes(link.getAttribute('href'))) {
            link.classList.add('active');
        }
    });
});
