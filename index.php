<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio website</title>
    <link rel="stylesheet" href="indexStyle.css">
    <style>
        body {
            background-color: #f0f0f0;
            color: whitepurple;  
            font-family: Arial, sans-serif;
            text-align: center;
            padding-top: 50px;
    
            
        }

        .contact-info {
            position: absolute;
            right: 0px;
            bottom: 0px;
            padding: 1rem;
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 1rem;
            margin: .5rem;
            border: 3px solid rgba(0, 0, 0, 0.6);
        }

        .contact-info p {
            margin-bottom: 10px;
        }

        .contact-info a {
            color: white;
            text-decoration: none;
            margin-bottom: 100px;
        }

        .contact-info a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <?php
    // This PHP code includes the navigation bar
    include 'nav.php';
    ?>




    <div class="welcome-message">
        <h1>Welcome to My Website!</h1>
        <p>Feel free to explore and learn more about my projects and skills.</p>
    </div>


    <div class="contact-info">
        <h2>Contact Information</h2>
        <p>Phone: <a href="tel:+12185085497">+12185085497</a></p>
        <p>Email: <a href="harrison.segero@livebemidjistate.edu">harrison.segero@livebemidjistate.edu</a></p>
        <p>Location: Bemidji, USA</p>
        <p>GitHub: <a href="https://github.com/Harrymullabu" target="_blank">github.com/Harrymullabu</a></p>
    </div>

</body>

</html>