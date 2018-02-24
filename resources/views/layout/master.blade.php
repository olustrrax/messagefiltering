<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>Messages Filtering</title> 
  <link rel="icon" type="image/ico" href="/assets/img/icon1.png"/>
  <link rel="stylesheet" href="{{ asset('css/master.css') }}">
  <meta http-equiv="refresh" content="3;url=http://localhost:8080/home" />
  <script type="text/javascript" src="{{ URL::asset('js/MDB/js/mdb.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/chart.js') }}"></script>
  <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}">
</head>




<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">                     
        </button>
        <a class="navbar-brand" href="">Filtering</a>
      </div>
      {{--  <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#about">ข้อความที่ถูกคัดกรองทั้งหมด</a></li>
          <li><a href="#services">สถิติการพบข้อความ Bully ในแต่ละวัน</a></li>
        </ul>
      </div>  --}}
    </div>
  </nav>
  <div class="jumbotron" style="height:350px">
    <div class="contrainer">
      <div class="row">
        <div class="col-lg-5">
          <h1>Message Filtering</h1>      
          <p>ระบบคัดกรองข้อความ Cyber Bullying</p> 

        </div> 

        <div class="col-lg-1 col-md-1">
            <img src="/assets/img/line3.png">
        </div>

        <div class="col-lg-6 col-md-6">
            
          <h3><i>Chart</i></h3> 
          @php
            $namePos = "width: ".$avgPos."%";
            $nameNeg = "width: ".$avgNeg."%";
          @endphp
          <label style="color:yellowgreen">POSITIVE: ข้อความปกติ</label>
          <div class="progress">
            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{$avgPos}}" aria-valuemin="0" aria-valuemax="90" style="{{$namePos}}">
                {{$Positive}} ข้อความ
            </div>
          </div>
          <label style="color:salmon">NEGATIVE: ข้อความ Bully</label>
          <div class="progress">
            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="{{$avgNeg}}" aria-valuemin="0" aria-valuemax="90" style="{{$nameNeg}}">
                {{$Negative}} ข้อความ
            </div>
          </div>
          <h4 style="text-align: center">ข้อความทั้งหมด <span style="color:darkorange">{{$total}}</span> ข้อความ</h4>
        </div>
      </div>
    </div>
  </div>




  <div class="row">
    <div class="contrainer">
      <div class="col-lg-12">
        <div class='content'>
          @yield('content') 
        </div>
      </div>
      {{--  <div class="col-lg-5"></div>  --}}
    </div>
  </div>
  
  
  <canvas id="barChart"></canvas>


</body>
</html>

