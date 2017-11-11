<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1" />
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Messages Filtering</title> 


      <style type="text/css">
          .vertical-center {
          min-height: 100%;  /* Fallback for browsers do NOT support vh unit */
          min-height: 100vh; /* These two lines are counted as one :-)       */
          display: flex;
          align-items: center;
        }
        .jumbotron {
          background-image: url('img/cover2.png');
          background-color: #242C54;
          color: #fff;
          padding: 100px 25px;
          font-family: Montserrat, sans-serif;
        }
        .navbar {
          margin-bottom: 0;
          background-color: #f4511e;
          z-index: 9999;
          border: 0;
          font-size: 12px !important;
          line-height: 1.42857143 !important;
          letter-spacing: 4px;
          border-radius: 0;
          font-family: Montserrat, sans-serif;
      }
      .navbar li a, .navbar .navbar-brand {
          color: #fff !important;
      }
      .navbar-nav li a:hover, .navbar-nav li.active a {
          color: #f4511e !important;
          background-color: #fff !important;
      }
      .navbar-default .navbar-toggle {
          border-color: transparent;
          color: #fff !important;
      }

      </style>
</head>



<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">                     
        </button>
        <a class="navbar-brand" href="#myPage">Filtering</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#about">ข้อความที่ถูกคัดกรองทั้งหมด</a></li>
          <li><a href="#services">ข้อความที่แม่นยำมากกว่า80%</a></li>
        </ul>
      </div>
    </div>
  </nav>

    <div class="jumbotron">
      <h1>       Message Filtering  </h1>      
      <p>       ระบบคัดกรองข้อความที่ก่อให้เกิดความขัดแย้งในสังคม</p>   
    </div>
    <div class='content'>
      @yield('content') 
    </div>


</body>
</html>

