<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ERAKOMP</title>
    <link rel="stylesheet" href="https://cdn.erakomp.co.id/assets/compro/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        #myBtn {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 30px;
            z-index: 99;
            font-size: 18px;
            border: none;
            outline: none;
            background-color: transparent;
            color: white;
            cursor: pointer;
            padding: 15px;
            border-radius: 4px;
        }

        #myBtn:hover {
            background-color: transparent;
        }

        .fa {
            padding: 10px;
            font-size: 15px;
            width: 15px;
            text-align: center;
            text-decoration: none;
            margin: 5px 2px;
            border-radius: 50%;
            transition: transform .2s;
        }

        .fa:hover {
            transform: scale(1.5);
            color: dodgerblue;
            background-color: transparent;
        }

        .fa-facebook {
            background: dodgerblue;
            color: white;
        }

        .fa-linkedin {
            background: dodgerblue;
            color: white;
        }

        .fa-youtube {
            background: dodgerblue;
            color: white;
        }

        .fa-instagram {
            background: dodgerblue;
            color: white;
        }


        .fa-twitter {
            background: dodgerblue;
            color: white;
        }
    </style>

</head>

<body>

    @yield('content')
</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    
<script>
    //Get the button
    var mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () { scrollFunction() };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
</html>