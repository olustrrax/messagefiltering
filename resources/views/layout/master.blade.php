<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>Messages Filtering</title> 
  <link rel="icon" type="image/ico" href="/assets/img/icon.png"/>
  <link rel="stylesheet" href="{{ asset('css/master.css') }}">

</head>



<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">                     
        </button>
        <a class="navbar-brand" href="">Filtering</a>
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
    <h1>Message Filtering</h1>      
    <p>ระบบคัดกรองข้อความ Cyber Bullying</p>   
  </div>
  <div class='content'>
    @yield('content') 
  </div>


</body>
</html>

