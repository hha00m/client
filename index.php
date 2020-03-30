<?php
if(!isset($_SESSION)){
  session_start();
}
$access_roles = [1];
if(! in_array($_SESSION['login'],$access_roles)){
    header("location: login.php");
    die();
}
require_once("config.php");
?>
<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=2, viewport-fit=cover" />
    <meta name="description" content="في هذه الصفحة الرئيسية لشركة النهر تستطيع ان تتعرف على الطلبيات الخاصة بك الواصة والراجعة والكثير من المعلومات">
    <meta name="الصفحة الرئيسية للعميل" property="og:title" content="معلومات متكاملة للعميل في هذه الصفحة خاصة بعملاء شركة النهر">

    <title>الصفحة الرئيسية للعميل</title>
    <link href="https://fonts.googleapis.com/css?family=Cairo:300,300i,400,400i,500,500i,700,700i,900,900i|Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <link rel="stylesheet" type="text/css" href="styles/framework.css">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css">

</head><!--#FF6347;-->

<body class="theme-light" data-background="none" data-highlight="orange">
    <style type="text/css">
        .bg-div1 {
            background-color:#f96332; 
            color: #000000;
        }

        .bg-div2 {
            background-color: #f96332;
        }

        .bg-div3 {
            background-color: #f96332;
        }

        .bg-div4 {
            background-color: #f96332;
        }

        .bg-div5 {
            background-color: #f96332;
        }

        .bg-div6 {
            background-color: #E9DF00;
        }

        .bg-div7 {
            background-color: #03FCBA;
        }

        .bg-div8 {
            background-color: #4CAF50;
            color: #000000;
        }

        .bg-div9 {
            background-color: #0B4EBC;
            color: white;
        }

        .bg-div10 {
            background-color: #F4B400;
            color: #2E2E2E;
        }
    </style>
    <div id="page">

        <div id="page-preloader">
            <div class="loader-main">
                <div class="preload-spinner border-highlight"></div>
            </div>
        </div>

        <div class="header header-fixed header-logo-center">
            <a href="index.php" class="header-title"> شركة النهر</a>
            <a href="logout.php" data-toggle-theme-switch class="header-icon header-icon-4">خروج</a>
        </div>

        <div id="footer-menu" class="footer-menu-3-icons footer-menu-style-2">
            <a href="index.php" class="active-nav"><i class="fa fa-home"></i><span>الرئسية</span></a>
            <a href="notfcation.php"><i class="fa fa-bell"></i><span class="color-black">الاشعارات</span></a>
            <a href="profile.php"><i class="fa fa-user"></i><span>الصفحة الشخصية</span></a>
            <div class="clear"></div>
        </div>

        <div class="page-content header-clear-medium">
            <div class="content-boxed">
                <a href="#" class="footer-title bottom-10"><span class=" text-center color-black">خلاصة للطلبيات والمبالغ &#128512;</span></a>
                <div class="content">
                <div class="one-third first-column">
                    <a href="#">
                        <div data-height="80" class="bg-div10 caption  shadow-huge bottom-20 ">
                            <div class="caption-center center-text">
                                <h1 class="center-text  bold font-18" id="earning-last30">0,0</h1>
                            </div>
                            <div class="caption-bottom">
                                <p class="center-text color-black">٣٠ يوم</p>
                            </div>
                            <div class="caption-overlay color-black text-right " id="orders-last30"><i class="fas fa-box-open"></i></div>

                        </div>
                    </a>
                </div>

                <div class="one-third ">
                    <a href="#">
                        <div data-height="80" class="bg-div9  caption shadow-huge  bottom-20 ">
                            <div class="caption-center">
                                <h1 class="center-text  bolder font-18" id="earning-last7">0,0 </h1>
                            </div>
                            <div class="caption-bottom">
                                <p class="center-text color-white">٧ أيام</p>
                            </div>
                            <div class="caption-overlay  text-right " id="orders-last7"><i class="fas fa-box-open" ></i></div>
                        </div>
                    </a>
                </div>
                <div class="one-third last-column">
                    <a href="#">
                        <div data-height="80" class="bg-div8 caption  shadow-huge bottom-20 ">
                            <div class="caption-center">
                                <h1 class="center-text  bolder font-18" id="earning-last1">0,0 </h1>
                            </div>
                            <div class="caption-bottom">
                                <p class="center-text color-black ">اليوم</p>
                            </div>
                            <div class="caption-overlay text-right " id="orders-last1"> <i class="fas fa-box-open"></i></div>
                        </div>
                    </a>
                </div>
                </div>
                <span class="footer-title bottom-10">
                        <span class=" text-center color-black  ">
                             كيف ممكن اساعدك. أختر
                        </span>
                </span>
                <div class="clear">

                    <!--       End of this section       -->
                  <a href="orders.php">
                        <div data-instant-id="instant-1" data-height="120" class="bg-div1 caption caption-margins round-tiny shadow-huge bottom-10">
                            <div class="caption-center">
                                <h1 class="center-text  bolder font-18"><i class="fas fa-list-alt fa-1x   top-0 bottom-0 "></i> الطلبيات</h1>
                                <p class="center-text under-heading  color-black">البحث و عرض الطلبيات</p>
                            </div>
                            <div class="caption-bottom">
                                <p class="center-text color-black ">اضافه طلبية</p>
                            </div>

                            <div class="caption-overlay"></div>
                        </div>
                    </a>
                </div>
                <div class="one-half">
                    <a href="receipt.php">
                        <div data-instant-id="instant-2" data-height="120" class="bg-div1 caption caption-margins round-tiny shadow-huge">
                            <div class="caption-center">
                                <h1 class="center-text   bolder font-18"><i class="fas fa-plus-circle  fa-1x  top-0 bottom-0 "></i> طلب وصولات</h1>
                                <p class="center-text color-black  under-heading">طلب وصولات فارغه او جاهزه</p>
                            </div>
                            <div class="caption-bottom">
                                <p class="center-text  color-black">طلب وصولات</p>
                                <p class="center-text color-black   "></p>
                            </div>

                            <div class="caption-overlay "></div>
                        </div>
                    </a>
                </div>
                <div class="one-half last-column">
                    <a href="addorders.php">
                        <div data-instant-id="instant-2" data-height="120" class="bg-div1 caption caption-margins round-tiny shadow-huge">
                            <div class="caption-center">
                                <h1 class="center-text   bolder font-18"><i class="fas fa-plus-circle  fa-1x  top-0 bottom-0   "></i>اضافة طلبيه</h1>
                                <p class="center-text color-black  under-heading">تقرير بجميع الرواجع</p>
                            </div>
                            <div class="caption-bottom">
                                <p class="center-text  color-black">انقر للعرض</p>
                                <p class="center-text color-black   "></p>
                            </div>

                            <div class="caption-overlay "></div>
                        </div>
                    </a>
                </div>
                <div class="clear">
                    <a href="print.php">
                        <div data-instant-id="instant-4" data-height="120" class="bg-div1 caption caption-margins round-tiny shadow-huge  ">
                            <div class="caption-center">
                                <h1 class="center-text bolder font-18"><i class="fas fa-file  fa-1x top-0 bottom-0  "></i> طباعة </h1>
                                <p class="center-text  color-black under-heading"></p>

                            </div>
                            <div class="caption-bottom">
                                <p class="center-text color-black  ">انقر للعرض</p>
                                <p class="center-text  "></p>
                            </div>
                            <div class="caption-overlay  "></div>
                        </div>
                    </a>
                </div>
                <div class="one-half">
                    <a href="returned.php">
                        <div data-instant-id="instant-2" data-height="120" class="bg-div1 caption caption-margins round-tiny shadow-huge">
                            <div class="caption-center">
                                <h1 class="center-text   bolder font-18"><i class="fas fa-times-circle  fa-1x  top-0 bottom-0   "></i> الرواجع</h1>
                                <p class="center-text color-black  under-heading"> كشوفات بالطلبيات الراجعه </p>
                            </div>
                            <div class="caption-bottom">
                                <p class="center-text  color-black">انقر للعرض</p>
                                <p class="center-text color-black   "></p>
                            </div>

                            <div class="caption-overlay "></div>
                        </div>
                    </a>
                </div>

                <div class="one-half last-column">
                    <a href="earnings.php">
                        <div data-instant-id="instant-4" data-height="120" class="bg-div1 caption caption-margins round-tiny shadow-huge  ">
                            <div class="caption-center">
                                <h1 class="center-text bolder font-18"><i class="fas fa-coins  fa-1x top-0 bottom-0"> </i> كشوفات </h1>
                                <p class="center-text  color-black under-heading">كشوفات بالطلبات المستلمة</p>

                            </div>
                            <div class="caption-bottom">
                                <p class="center-text color-black  ">انقر للعرض</p>
                                <p class="center-text  "></p>
                            </div>
                            <div class="caption-overlay  "></div>
                        </div>
                    </a>
                </div>
                <div class="clear last-column">
                    <a href="charts.php">
                        <div data-instant-id="instant-5" data-height="120" class="bg-div1 caption caption-margins round-tiny shadow-huge bottom-10">
                            <div class="caption-center">
                                <h1 class="center-text bolder font-18"><i class="fas fa-chart-pie  fa-1x  top-0 bottom-0  "></i> احصائيات</h1>
                                <p class="center-text  color-black under-heading">تقرير أحصائي للعميل</p>

                            </div>
                            <div class="caption-bottom">
                                <p class="center-text color-black  ">انقر للعرض</p>
                                <p class="center-text  "></p>
                            </div>
                            <div class="caption-overlay "></div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>


    <script type="text/javascript" src="scripts/jquery.js"></script>
    <script type="text/javascript" src="scripts/plugins.js"></script>
    <script type="text/javascript" src="scripts/custom.js"></script>
    <script type="text/javascript">

function static(){
  $.ajax({
  url:"php/_static.php",
  type:"POST",
  data:$("#searchForm").serialize(),
  success:function(res){
    console.log(res);
    $.each(res.last1,function(){
       if(this.client_price != null){
          $("#earning-last1").text(this.client_price);
       }
       if(this.orders != null){
         $("#orders-last1").append("&nbsp;"+this.orders);
       }
    });
    $.each(res.last7,function(){
       if(this.client_price != null){
          $("#earning-last7").text(this.client_price);
       }
       if(this.orders != null){
         $("#orders-last7").append("&nbsp;"+this.orders);
       }
    });
    $.each(res.last30,function(){
       if(this.client_price != null){
          $("#earning-last30").text(this.client_price);
       }
       if(this.orders != null){
         $("#orders-last30").append("&nbsp;"+this.orders);
       }
    });
  },
  error:function(e){
    console.log(e);
  }
});
}
static();
</script>
</body>

</html>