<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.erakomp.co.id/assets/css/fontstyle.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.erakomp.co.id/assets/fontstyle.css">
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600&display=swap" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>ERATEAM</title>
  <link rel="stylesheet" href="https://cdn.erakomp.co.id/assets/compro/styleindex.css">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <style>
    body {
      background-image: url('https://erakomp.oss-ap-southeast-5.aliyuncs.com/compro/img/brick.png');
      background-repeat: no-repeat;
      background-size: cover;
    }

    .footer {
      margin-top: 30px;
      margin-bottom: 20px;
      height: 100px;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding-bottom: 20px;
    }

    .footerlinks a {
      margin: 5px;
      font-size: 16px;
      font-weight: 600;
      color: #fff;
    }

    .footerlinks .mainlink {
      color: #2f8be0;
    }

    .fa {
      padding: 10px;
      font-size: 15px;
      width: 35px;
      height: 35px;
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

    .grid {
      display: grid;
      grid-template-rows:
        repeat(4, 180px);
      grid-template-columns:
        repeat(3, 1fr);
      grid-gap: 5px;
    }

    .item:nth-child(1) {
      grid-row: 1 / 4;
    }

    .item:nth-child(2) {
      grid-column: 2 / 4;
      grid-row: 1 / 3;
    }

    .item:nth-child(3) {
      grid-column: 3 / 4;
      grid-row: 3 / 5;
    }

    .item:nth-child(4) {
      grid-column: 2 / 3;
      grid-row: 3 / 4;
    }

    .item:nth-child(5) {
      grid-column: 1 / 3;
      grid-row: 4 / 5;
    }

    /* styling code */

    .grid {
      margin: 20px auto;
      max-width: 1000px;
      background-color: black;
    }

    .grid>.item {
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }

    .nav {
      flex-direction: column;
      justify-content: space-around;
      padding: 20px;
      height: auto;
      overflow-y: hidden;
    }

    .nav h4 {
      font-size: 6vw;
      margin-top: 10px;
      margin-bottom: 14px;
    }

    .nav .links a {
      margin-right: 25px;
      font-size: 12px;
      font-weight: 600;
    }

    .logo img {
      transition: width 1s, height 1s, transform 1s;
    }

    .logo img:hover {
      -webkit-transform: rotate(40deg);
      transform: rotate(40deg);
      transition: width 1.5s, height 1.5s, transform 1.5s;

    }

    .nav {
      position: fixed;
      z-index: 1000;
      top: 0;
      right: 0;
      left: 0;
      height: 80px;
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      align-items: center;
      padding: 0 25px 0 25px;
      background-color: #fff;
      box-shadow: 0 19px 38px rgba(0, 0, 0, 0.10);
      border-bottom-left-radius: 10px;
      border-bottom-right-radius: 10px;
    }

    .nav .links a {
      margin-right: 25px;
      font-size: 16px;
      font-weight: 600;
      color: #000;
    }

    .nav .links .mainlink {
      color: #2f8be0;
    }

    .nav h4 {
      font-size: 22px;
      font-weight: bold;
      margin-left: 25px;

    }

    /* RESPONSIVE */


    @media only screen and (max-width: 600px) {

      .nav {
        flex-direction: column;
        justify-content: space-around;
        padding: 20px;
        height: auto;
        overflow-y: hidden;
      }

      .nav h4 {
        font-size: 6vw;
        margin-top: 10px;
        margin-bottom: 14px;
      }

      .nav .links a {
        margin-right: 25px;
        font-size: 12px;
        font-weight: 600;
      }
    }

    html,
    body {
      font-family: 'Poppins', sans-serif;
      overflow-x: hidden !important;
      margin: 0px !important;
      padding: 0px !important;
    }

    * {
      text-decoration: none !important;
    }
  </style>
</head>

<body>
@yield('content')
</body>

</html>