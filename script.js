document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll(".reserveer-btn").forEach(button => {
        button.addEventListener("click", function() {
            window.location.href = "reserveren.php";
        });
    });
});


