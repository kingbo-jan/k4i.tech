<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>k4i</title>
    <style>
        /* Reset margins and paddings */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Layout setup */
        body {
            display: flex;
            font-family: Helvetica, sans-serif;
            background-color: #fffff4;
        }

        /* Sidebar styling */
        .sidebar {
            width: 300px;
            height: 100vh;
            background-color: #093425;
            color: white;
            padding: 20px;
            padding-left: 0;
            position: sticky;
            top: 0;
            z-index: 50;
            box-shadow: 0 10px 5px grey;
            
        }

        .sidebar #title {
            color: #fffff4;
            text-decoration: none;
            font-size: 4em;
            font-weight: bold;
            margin: 0.7em;
        }
        
        .sidebar #title:hover {
            text-decoration: underline;
        }

        .sidebar a {
            color: #fffff4;
            text-decoration: none;
            font-size: 2.5em;
            font-weight: bold;
            margin: 1em;
        }

        /* Content styling */
        .content {
            flex-grow: 1;
            padding: 20px;
            overflow-y: auto;
            height: 100vh;
            width: 30vw;
        }

        /* Example long content for scrolling */
        .content p {
            margin-bottom: 15px;
        }


        /* Style for the clickable rectangles */
        .rectangle {
            background-color: transparent;
            outline: 1px solid black;
            color: white;
            padding: 20px;
            margin: 10px 0;
            text-align: center;
            font-size: 1.2em;
            cursor: pointer;
            width: 30%;
            height: 500px;
            box-shadow: 5px 10px black;
        }


        .card-container {
            display: flex;
            justify-content: space-between;
            gap: 10px;
            flex-wrap: wrap;
            /* Allow items to wrap to the next line when the container gets too narrow */
            padding: 1em;
        }

        .content h2 {
            font-size: 10em;
            text-align: right;
        }

        #projects h2 {
            font-size: 7em;
            text-align: left;
            color: white;
        }
        /* .typing {
            font-size: 10em;
            font-family: monospace;
            white-space: nowrap;
            overflow: hidden;
            border-right: 2px solid black;
            padding-right: 10px;
            animation: blink-caret 0.75s step-end infinite;
        } */

        #landingpage {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        #landingpage h1 {
            font-size: 10em;
            padding: 0;
            margin: 0;
        }
        .sidebar a:hover {
            color: green;
        }

        #copyright p {
            color: #fffff4;
            position: fixed;
            bottom: 0;
            padding: 0 5px 0 5px;
            margin-bottom: 0.5em;
            font-size: 13px;
            text-align: left
            
        }

        #resume {
            height: 100vh;
        }

       .cv { 
           display:flex;
       }
       .cv a {
            font-size: 1em;
            border: 3px solid #fffff4;
            border-radius: 10px;
            padding: 1em 2em 1em 2em;
            max-width: 200px;
            text-align: center;
            margin-left: 2.5em;
        }

        .cv a:hover {
            border-color: green;
        }

        
        .social-links { 
            display: flex;
            margin: 1em 2em 2em 2.5em;
            gap: 20px
        }
        
        .social-links img {
            width: 1em;
            height: 1em;
        }
        
        .social-links a {
            margin: 0;
        }
    </style>
</head>

<body>
    <!-- Left Sticky Sidebar -->
    <div class="sidebar">
        <a href="https://k4i.tech" id="title">k4i</a>
        <br><br><br><br><br><br>
        <br>
        <a href="#aboutme">about me</a>
          <a href="#projects">projects</a>
        <a href="#skills">skills</a>
        <a href="#contact">contact</a>
        <br><br><br><br>
        <div class="cv">
            <a href="KingboCV.pdf" target="_blank">View CV</a>
        </div>
        <div class = "social-links">
            <a href = "https://github.com/kingbo-jan/kbjn-cybersecurity" target = _blank><img src = "githublogo" alt = "github logo"> </a>
            <a href = "https://www.linkedin.com/in/kingbojan/" target = _blank><img src = "linkedinlogo" alt = "linkedin logo"> </a>
            <a href = "https://github.com/kingbo-jan/kbjn-cybersecurity" target = _blank><img src = "email.png" alt = "email logo"> </a>
        </div>
     
        <br><br><br><br><br><br><br><br><br>
        <section id="copyright">
            <p>© 2024. All Rights Reserved.</p>
        </section>
    </div>

    <!-- Right Scrollable Content Area -->
    <div class="content">

        <section id = "landingpage">
            <h1>COMING SOON</h1>
        </section>

        <section id="projects">
            <h2>projects</h2>
            <div class="card-container">
                <div class="rectangle" onclick="window.location.href='https://example1.com';">Project 1</div>
                <div class="rectangle" onclick="window.location.href='https://example1.com';">Project 1</div>
                <div class="rectangle" onclick="window.location.href='https://example1.com';">Project 1</div>  
                <div class="rectangle" onclick="window.location.href='https://example1.com';">Project 1</div>
                <div class="rectangle" onclick="window.location.href='https://example1.com';">Project 1</div>
                <div class="rectangle" onclick="window.location.href='https://example1.com';">Project 1</div>   
            </div>
        </section>

        <section id="skills">
            <h2>skills</h2>
        </section>

        <section id="contact">

        </section>
    </div>

    <!-- <div class="typing" id="typing"></div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const text = "Coming Soon";
            const typingElement = document.getElementById("typing");
            let index = 0;

            function type() {
                if (index < text.length) {
                    typingElement.innerHTML += text.charAt(index);
                    index++;
                    setTimeout(type, 100);  // Adjust the speed here
                }
            }

            type();
        });
    </script> -->





</body>

</html>