<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="C:\Users\HP\Desktop\Maadi STEM School for Girls\font-awesome-4.7.0\css\font-awesome.css">
    <link rel="shortcut icon" href="super plankton.png" type="image/x-icon">  
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Spectral:wght@300&display=swap" rel="stylesheet">   
    <title>Survey</title>
    <style>
    <?php include 'CSS/style.css'; ?>

    .navigation a:nth-child(2){
        background-color: white;
        color: green;
    }
    </style>
</head>
<body>
    <header>
        <section class="header">
            <div class="header">
                <div class="inner-header">
                    <div class="logo-container">
                    <a href="index.html">
                    <img src="superhero.png">
                    </a>
                    </div>
                    <span><a href="index.html">Super Planktons</a></span>
                    <ul class="navigation">
                        <a href="index.html"><li>Home</li></a>
                        <a href="survey.php"><li>Survey</li></a>
                        <a href="Resources.html"><li>Resources</li></a>
                        <a href="mission and vission.html"><li>Mission & Vission</li></a>  
                            <i class="fa fa-headphones fa-2x" aria-hidden="true"></i>
                        </li></a>
                    </ul>
                </div>
            </div>
        </section>
    </header>
    <main>
        <section class="sur-page">
            <div class="sur-pic">
        <img src="survey.png" width="100%">
            </div>
        <div class="survey-sp">
        <div class="survey">
            <div class="survey-inside">
            <h1>Survey</h1>
                <form class="text" action="contact.php" method="POST">
                <input type="text" name="name" placeholder="Your Full Name">
                <input type="email" name="mail" placeholder="Your Email">
                <input type="text" name="subject" placeholder="subject">
                <select>
                <option name="Did this site help you to understand Earth's superpowers?">Did this website help you to understand Earth's superpowers?</option>
                <option value="yes" name="yes">Yes</option>
                <option value="maybe" name="maybe">Maybe</option>
                <option value="no" name="no">No</option>
                </select>
                <textarea name="message" placeholder="what extra superpower do you wish phytoplanktons have?"></textarea>
                <textarea name="message" placeholder="Write your question, anything about planktons?"></textarea>
                <button type="submit" name="Submit">Submit</button>
            </form>
            </div>
        </div>
        </section>
    </main>

    <footer>
        <section class="footer">
            <div class="footer">
                <div class="footer-logo">
                    <a href="index.html">
                    <img src="super plankton.png" type="audio/mpeg">
                    </a>
                </div>
                    <span><a href="index.html"><h2>Super Planktons</h2></a></span>
                <div class="footer-nav">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="survey.php">Survey</a></li>
                        <li><a href="Resources.html">Resources</a></li>
                        <li><a href="mission.html">Mission & Vission</a></li>
                    </ul>
                </div>
                <div class="copyright">copyright © 2021. All Right Reserved</div>
            </div>
        </section>
    </footer>
</body>
</html>
