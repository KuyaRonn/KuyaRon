<!DOCTYPE html>
<html>
<head>
    <title>DOWNTOWN Q</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: Arial, Helvetica, sans-serif; /* Corrected typo in font name */
            color: rgb(11, 11, 11);
			background-color: rgb(0, 0, 50);
        }
        .container {
        height: 2000px; /* Making the container taller to enable scrolling */
        background-color: #f0f0f0;
		}
        body, html {
            height: 100%;
        }
        
        .header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 20px 20px;
            padding-right: 10%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1000;
            color: rgb(255, 255, 255);
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            background-color: rgba(0, 0, 0, 0.15);
        }
        
        .mylogo {
            position: relative;
            font-size: 25px;
            color: rgb(255, 255, 255);
            text-decoration: none;
            font-weight: 800;
            cursor: pointer;
        }
        
        .navbar a {
            font-size: 1.1em;
            color: white;
            text-decoration: none;
            font-weight: 700;
            margin-left: 30px;
        }
        
        .navbar a:hover {
            color: blue;
        }
        
        .home {
            position: relative;
            width: 100%;
            overflow-x: auto; /* Enable horizontal scrolling */
			overflow-y: auto;  /* Enable vertical scrolling */
            height: 100vh;
			padding-top: 120px;
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            background-color: rgb(0, 0, 50);
            padding: 70px 10%;
        }
        
        .content {
            max-width: 600px;
        }
        
        .content h3 {
            font-size: 32px;
            font-weight: 700;
            color: rgb(235, 235, 255);
        }
        
        .content h1 {
            font-size: 50px;
            font-weight: 700;
            margin: -3px 0;
            color: white;
        }
        
        span {
            color: blue;
        }
        
        .content p {
            font-size: 20px;
            color: rgb(183, 183, 183);
            text-decoration: none;
            margin: 30px 15px 30px 0;
        }
        
        .image-container {
            position: absolute;
            top: 25%;
            right: 100px;
            width: 500px;
            height: 500px;
            border-radius: 50%;
            overflow: hidden;
        }
        
        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        html {
            scroll-behavior: smooth;
        }
		
		.scroll-to-top-button {
            position: relative;
            bottom: 55px;
            left: 970px;
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
			z-index: 1000;
        }
		/* Scrollbar styles */
        ::-webkit-scrollbar {
            width: 12px; /* Width of the scrollbar */
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1; /* Color of the track */
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #888; /* Color of the scroll thumb */
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #555; /* Color of the scroll thumb on hover */
        }
        
        /* Scroll arrows */
        ::-webkit-scrollbar-button:start:decrement {
            background-color: #aaa;
            border: none;
        }

        ::-webkit-scrollbar-button:end:increment {
            background-color: #aaa;
            border: none;
        }

        ::-webkit-scrollbar-button:vertical:start:increment {
            height: 16px;
        }

        ::-webkit-scrollbar-button:vertical:end:decrement {
            height: 16px;
        }

        ::-webkit-scrollbar-button:horizontal:start:decrement {
            width: 16px;
        }

        ::-webkit-scrollbar-button:horizontal:end:increment {
            width: 16px;
        }

        ::-webkit-scrollbar-button:horizontal {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <header class="header">
        <a href="#" class="mylogo">God of <span> QC</span></a>
        <nav class="navbar">
            <a href="#">Home</a>
            <a href="#" onclick="scrollToAbout()"><span>DOWNTOWN Q</span></a>
			<a href="#">Services</a>
            <a href="#">Contact Me</a>
        </nav>
    </header>
    
    <div class="home">
        <div class="content">
            <h3>HEV ABI NGA PALA</h3>
            <h1><span>MAY ARI NG QC</span></h1>
            <p>Beb abi <3</p>
        </div>
        <div class="image-container">
            <img src="bebabi.jpg" alt="lll. ALAM MO BA GIRL.png">
        </div>
    </div>
	<div id="About" class="container">
        <h2>About</h2>
        <p>This is the about section</p>
    </div>
    <div id="services" class="container">
        <h2>Services</h2>
        <p>This is the services section</p>
    </div>
    <div id="contact" class="container">
        <h2>Contact Me</h2>
        <p>This is the contact me section</p>
    </div>
	<button class="scroll-to-top-button" onclick="scrollToTop()">Scroll to Top</button>
	<nav class="navbar">
            <a href="#" onclick="scrollToAbout()">About</a>
        </nav>

    <script>
		 function scrollToAbout() {
            var aboutSection = document.getElementById("About");
            aboutSection.scrollIntoView({ behavior: 'smooth' });
        }
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth' // Smooth scrolling animation
            });
        }
    </script>
</body>
</html>