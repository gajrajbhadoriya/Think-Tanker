<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Animated Design</title>
    <style>
                body {
                margin: 0;
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                }

                .container {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    padding: 50px;
                }

                .content {
                    flex: 1;
                }

                .fade-in {
                    opacity: 0;
                }

                .image-container {
                    width: 40%;
                    text-align: center;
                    overflow: hidden;
                }

                .slide-in {
                    transform: translateX(100%);
                }

    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <h1 class="fade-in">Welcome to Our Website</h1>
            <p class="fade-in">Discover amazing content and beautiful designs.</p>
            <button class="btn fade-in">Learn More</button>
        </div>
        <div class="image-container slide-in">
            <img src="image.jpg" alt="Image">
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
    // Fade-in animation for text
    $(".fade-in").each(function(index) {
        $(this).delay(300 * index).animate({ opacity: 1 }, 800);
    });

    // Slide-in animation for image
    $(".slide-in").animate({ transform: "translateX(0)" }, 1000);
});

    </script>
</body>
</html>
