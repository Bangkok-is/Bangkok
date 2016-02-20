<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>สถานที่น่าเที่ยวในกรุงเทพมหานคร</title>

  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/modern-business.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kanit&subset=thai,latin' rel='stylesheet' type='text/css'>
  <style>
      @font-face {
          font-family: 'Kanit', sans-serif;
          src: url(sansation_light.woff);
          }

          div {
            font-family: 'Kanit', sans-serif;
          }
  </style>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Bangkok</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="/">หน้าหลัก</a>
                    </li>
                    <li>
                        <a href="/about">ข้อมูลทั่วไป</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">สถานที่ท่องเที่ยว <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                              <a href="/Grand-Palace">พระบรมมหาราชวัง</a>
                          </li>
                          <li>
                              <a href="/Jatujak-Market">ตลาดนัดสวนจตุจักร</a>
                          </li>
                          <li>
                              <a href="/Madame-Tussauds-Bangkok">พิพิธภัณฑ์หุ่นขี้ผึ้งมาดามทุสโซ</a>
                          </li>
                          <li>
                              <a href="/Wat-Arun-Rajwararam">วัดอรุณราชวราราม ราชวรมหาวิหาร</a>
                          </li>
                          <li>
                              <a href="/Dusit-Zoo">สวนสัตว์ดุสิตเขาดินวนา</a>
                            </li>
                          <li>
                              <a href="/Lumpini-Park">สวนลุมพินี</a>
                          </li>
                          <li>
                              <a href="/Wat-Phra-Kaew">วัดพระศรีรัตนศาสดาราม</a>
                          </li>
                          <li>
                              <a href="/MBK-Center">เอ็มบีเคเซ็นเตอร์</a>
                          </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">ร้านอาหาร <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/Chocolate-Ville">Chocolate Ville</a>
                            </li>
                            <li>
                                <a href="/Grill101">Grill101 - Urban Grill & Bar</a>
                            </li>
                            <li>
                                <a href="/Wattana-Panich">วัฒนาพานิช ก๋วยเตี๋ยวเนื้อ</a>
                            </li>
                            <li>
                                <a href="/MrSeafood">Mr. Seafood</a>
                            </li>
                            <li>
                                <a href="/Mon-Fresh-Milk">มนต์นมสด</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">ที่พัก <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/Shangri-la-hotel-Bangkok">โรงแรมแชงกรี-ลา กรุงเทพ</a>
                            </li>
                            <li>
                                <a href="/Baiyoke-sky-hotel">โรงแรมใบหยก สกาย</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">
       <div class="row">
         <div class="col-lg-12 col-lg-offset col-md-10 col-sm-10 col-xs-10">
          <!-- bc -->
           <div class="row">
           <div class="col-lg-12">
               <h1 class="page-header"> <?= $title ?> </h1>
            
             <ol class="breadcrumb">
                 <li><a href="/">Home</a>
                 </li>
                 <li class="active"> <?= $title ?></li>
             </ol>
           </div>
           </div>


           <?= $content ?>
         </div>
       </div>
     </div>

    <!-- Footer -->
    <footer><center>
        <div class="row">
            <div class="col-lg-10">
                <p>*Website นี้จัดทำขึ้นเพื่อประกอบการเรียนการสอนเท่านั้น และทางผู้จัดทำต้องขอขอบคุณแหล่งข้อมูลที่เกี่ยวข้องกับเว็บไซต์นี้ทั้งหมด*</p>
            </div>
        </div></center>
    </footer>

    </div>
<!-- /.container -->
    </div>
<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Script to Activate the Carousel -->
<script>
$('.carousel').carousel({
    interval: 5000 //changes the speed
})
</script>

  </body>

</html>
