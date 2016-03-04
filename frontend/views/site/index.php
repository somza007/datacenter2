<?php

/* @var $this yii\web\View */

$this->title =  'ระบบ DataCenter 50 Pansa Hospital';
use yii\helpers\Html;
?>
<body background="/datacenter/image/background.jpg">
<div class="site-index">   
 
    <div class="jumbotron">
        <center><marquee bgcolor="#" direction="left" scrollamount="9" width="100%">
     <h1>ระบบ DataCenter 50 Pansa Hospital</h1>
            </marquee></center>
        

        <p class="lead">มีปัญหาระบบเว็บไซต์ขัดข้องกรุณาแจ้ง 1413 งานสารสนเทศทางการแพทย์</p>
        
     
        <!--<img src = "/datacenter/image/boss.jpg" width="200" height="150" border="1">  -->
       
        
    
     <p class="lead">วิสัยทัศน์ : “เราจะเป็นโรงพยาบาลสงฆ์ภาคตะวันออกเฉียงเหนือที่มีคุณภาพได้มาตรฐาน บริการด้วยหัวใจความเป็นมนุษย์” </p>
     
    </div>
   
 <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <center><h2>ประวัติความเป็นมา</h2></center>
                       <center>  <img src = "/datacenter/image/about1.jpg" > </center>
                <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เนื่องจากในอดีตที่ผ่านมา พระสงฆ์ในชนบทของประเทศไทย เวลาอาพาธจะเข้ารับการบำบัดรักษาสุขภาพ
                    ที่โรงพยาบาลท้องถิ่นในอำเภอหรือในจังหวัดของตน ปะปนและแออัดกับคนไข้คฤหัสถ์ ซึ่งมีจำนวนมากอยู่แล้ว
                    จนเตียงและห้องไม่เพียงพออันเป็นภาพไม่เหมาะสม และในกรณีที่เป็นเรื่องสำคัญ ก็จะเข้าไปรับการบำบัดรักษาที่
                    โรงพยาาลสงฆ์ในกรุงเทพฯซึ่งก็มีปัญหาในเรื่องหาที่พำนักก่อนเข้าโรงพยาบาลรวมถึงปัญหาค่าใช้จ่ายที่จำเป็นต่างๆ
                    เช่น ค่าพาหนะและภัตตาหาร ตลอดถึงจะต้องหาพระเถระผู้ใหญ่ให้การรับรองเข้าโรงพยาบาล เป็นต้น.</p>

                <p><a class="btn btn-default" href="#http://www.yiiframework.com/doc/">อ่านต่อ &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <center><h2>พันธกิจโรงพยาบาล</h2></center>
                <center>  <img src = "/datacenter/image/head-about1.jpg" > </center>

                <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ให้บริการ ส่งเสริม ป้องกัน รักษา  ฟื้นฟู แบบองค์รวมแก่ผู้ป่วยที่เป็นพระภิกษุสงฆ์ สามเณรในภาคตะวันออกเฉียงเหนือ
                    และประชาชนในเขตพื้นที่ที่รับผิดชอบอย่างมีคุณภาพ ได้มาตรฐานเพื่อให้ผู้รับบริการมีความเชื่อมั่นและพึงพอใจ
                    ส่งเสริมกิจกรรมเพื่อเทิดพระเกียรติสมเด็จพระบรมโอรสาธิราชฯ สยามกุฎราชกุมาร และสมเด็จพระสังฆราช
                    ส่งเสริมและสนับสนุนการมีส่วนร่วมของเครือข่าย วัดและชุมชนเพื่อสร้างสังคมสุขภาพที่ดี.</p>

                <p><a class="btn btn-default" href="#http://www.yiiframework.com/forum/">อ่านต่อ &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <center><h2>ประวัติผู้อำนวยการ</h2></center>
                <center>  <img src = "/datacenter/image/boss.jpg" > </center>
                <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ผู้อำนวยการโรงพยาบาล ๕๐ พรรษา มหาวชิราลงกรณ
                    <br> นายแพทย์พรเจริญ  เจียมบุญศรี.</p>

                <p><a class="btn btn-default" href="#http://www.yiiframework.com/extensions/">อ่านต่อ &raquo;</a></p>
            </div>
        </div>

    </div>
    <center><p><a class="btn btn-lg btn-success" href="http://localhost/datacenter/frontend/web/">กลับหน้าหลัก</a></p></center>
    <?php  
    $route1=  Yii::$app->urlManager->createUrl('test/test1');
    ?>
    <a href="<?=$route1?>">ไปที่ test1</a>
    <br>
    
        <?php  
    $route2=  Yii::$app->urlManager->createUrl(['test/test2','name'=>'somza','lname'=>'tasawang']);
    ?>
    <a href="<?=$route2?>">ไปที่ test2</a>
    <br>
    
    <?=\yii\helpers\Html::a('ลิ้งแบบที่ 3',['test/test1','a'=>'1']) ?>
     <br>
    
  
</div>

