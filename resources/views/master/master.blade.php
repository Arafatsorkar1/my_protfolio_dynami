<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Fotor Personal Portfolio">
    <meta name="keywords" content="portfolio,resume,personal,cv,one page">
    <meta name="author" content="Yucel Yilmaz">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" href="{{asset('/')}}assets/fonts/flat_icons/flaticon.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/fonts/font_awesome/css/all.css">

    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,500i,600,600i,700,700i,800,800i&amp;display=swap&amp;subset=latin-ext" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('/')}}assets/css/frameworks.css">

    <link rel="stylesheet" href="{{asset('/')}}assets/css/style.css">
    <style>
        .box {
            border: 2px solid #ccc;
            padding: 10px;
            width: 800px;
            height:250px;
        }

        .description {
            font-size: 16px;
            color: #333;
            margin-bottom: 10px;
        }

        .details {
            font-size: 14px;
            color: #777;
        }

        body {
            background-color: #ffffff;
            color: #333333;
        }

        /* Your dark mode styles go here */
        body.dark-mode {
            background-color: #000000;
            color: #ffffff;
        }


        .flex-container {
            display: flex;
            flex-wrap: wrap; /* Allow items to wrap to the next row */
            gap: 20px; /* Adjust the gap between items as needed */
        }

        /* Flex item class */
        .flex-item {
            width: 500px; /* Adjust the width as needed */
            min-height: 300px; /* Adjust the minimum height as needed */
            border: 5px solid #ccc;
            padding: 10px;
            box-sizing: border-box;
        }
        #downloadButton {
            margin-top: 10px;
            padding: 10px 15px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        /* Optional styling to disable the details button */
        details[open] summary button {
            pointer-events: none;
            background-color: #ccc;
        }
    </style>


    <title>@yield('title')</title>
</head>

<body data-spy="scroll" data-target="#fixedNavbar">


<div class="page-wrapper">

<header class="header fixed-top default-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg p-0 bg-transparent">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#fixedNavbar" aria-controls="fixedNavbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="togler-icon-inner">
                        <span class="line-1"></span>
                        <span class="line-2"></span>
                        <span class="line-3"></span>
                        </span>
            </button>
            <div class="collapse navbar-collapse main-menu justify-content-end" id="fixedNavbar" >
                <ul class="navbar-nav navbar-expand " >
                    <li class="nav-item">
                        <a class="nav-link"  href="{{route('home.home')}}"    >
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('about.about')}}"  >About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('education.education')}}" >Education</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="{{route('service.service')}}" >Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="{{route('portfolio.portfolio')}}" >Portfolio</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link"  href="{{route('contact.add')}}">Contact</a>
                    </li>

                    <li class="nav-item" >
                        <a class="nav-link menu-link btn" id="toggle-mode" >
{{--                            <img src="{{ asset('assets/img/Capture.PNG') }}" alt="" height="60" width="130" >--}}
                            <button class="btn btn-secondary">Mode</button>
                        </a>
                    </li>
                </ul>

            </div>
        </nav>
    </div>
</header>

</div>







@yield('body')
@include('includes.sidebar')
@include('includes.footer')
<script src="{{asset('/')}}assets/js/jquery.js"></script>
<script src="{{asset('/')}}assets/js/typed.js"></script>
<script src="{{asset('/')}}assets/js/plugins.js"></script>


<script src="{{asset('/')}}assets/js/main.js"></script>


<script>
    var options = {
        strings: ["Android Application Developer", "Web Developer", "Youtuber"],
        typeSpeed: 40,
        backSpeed: 40,
        loop: true
    }
    var typed = new Typed("#typed-text", options);
</script>

<script>
    // Function to toggle dark and white mode
    function toggleDarkMode() {
        document.body.classList.toggle("dark-mode");
    }

    // Check if the user has a preferred color scheme (light/dark) set in their OS/browser
    if (window.matchMedia("(prefers-color-scheme: dark)").matches) {
        document.body.classList.add("dark-mode");
    }

    // Add event listener to the button
    const toggleButton = document.getElementById("toggle-mode");
    toggleButton.addEventListener("click", toggleDarkMode);



    // JavaScript to handle the download button click
    const downloadButton = document.getElementById('downloadButton');
    const detailsContent = ``;

    downloadButton.addEventListener('click', function() {
        // Create a new Blob with the details content
        const blob = new Blob([detailsContent], { type: 'text/plain' });

        // Create a new anchor element to trigger the download
        const anchor = document.createElement('a');
        anchor.href = URL.createObjectURL(blob);
        anchor.download = 'details.txt'; // Specify the file name
        anchor.style.display = 'none';

        // Append the anchor to the document and click it to trigger the download
        document.body.appendChild(anchor);
        anchor.click();

        // Remove the anchor element after the download has started
        document.body.removeChild(anchor);
    });

    // JavaScript to handle the "Show Details" button click and disable it
    const showButton = document.getElementById('showButton');
    const details = document.querySelector('details');

    showButton.addEventListener('click', function() {
        details.open = !details.open;
    });
</script>
</body>

</html>
