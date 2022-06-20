<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="{{asset('dashboard/img/favicon.ico')}}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="{{asset('dashboard/img/favicon.ico')}}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="{{asset('dashboard/img/favicon.ico')}}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

@yield('title')

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{{asset('dashboard/css/bootstrap.min.css')}}" rel="stylesheet" />
	
		<!-- Bootstrap RTL core CSS     -->
    <link href="{{asset('dashboard/css/bootstrap-rtl.min.css')}}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{asset('dashboard/css/animate.min.css')}}" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{asset('dashboard/css/light-bootstrap-dashboard.css')}}" rel="stylesheet"/>
	
	  <!--  Light Bootstrap RTL Version CSS    -->
    <link href="{{asset('dashboard/css/light-bootstrap-dashboard-rtl.css')}}" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{asset('dashboard/css/demo.css')}}" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/earlyaccess/droidarabickufi.css' rel='stylesheet' type='text/css'>
    <link href="{{asset('dashboard/css/pe-icon-7-stroke.css')}}" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="{{asset('dashboard/img/sidebar-5.jpg')}}">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="{{url('/admin')}}" class="simple-text">
                <i class="pe-7s-display1"></i>
                عيادة نسمة
                </a>
            </div>
                

            <ul class="nav">
                <li class="active">
                    <a href="{{route('enter.index')}}">
                        <i class="pe-7s-display2"></i>
                        <p>مدخلات مريض</p>
                    </a>
                </li>
                <li>
                    <a href="{{route('employee.index')}}">
                        <i class="pe-7s-folder"></i>
                        <p>ملف موظق </p>
                    </a>
                </li>
                

                <li>
                    <a href="{{route('expenses.index')}}">
                        <i class="pe-7s-graph2"></i>
                        <p>المصروفات </p>
                    </a>
                </li>
                <li>
                    <a href="{{route('revenues.index')}}">
                        <i class="pe-7s-note"></i>
                        <p>الايرادات </p>
                    </a>
                </li>
                <li>
                    <a href="{{route('lab.index')}}">
                        <i class="pe-7s-refresh-cloud"></i>
                        <p>طلبات المعمل الفني   </p>
                    </a>
                </li>
                <li>
                    <a href="{{route('need.index')}}">
                        <i class="pe-7s-note2"></i>
                        <p>المستلزمات</p>
                    </a>
                </li>
                <li>
                    <a href="{{route('payment.index')}}">
                        <i class="pe-7s-browser"></i>
                        <p>الدفعات </p>
                    </a>
                </li>
                <li>
                    <a href="{{route('booked.index')}}">
                        <i class="pe-7s-bell"></i>
                        <p>حجزات </p>
                    </a>
                </li>
                <li>
                    <a href="{{route('articles.index')}}">
                        <i class="pe-7s-copy-file"></i>
                        <p>المقالات </p>
                    </a>
                </li>
      
                <li>
                    <a href="{{route('condition.index')}}">
                        <i class="pe-7s-photo"></i>
                        <p>حالات </p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">تعویض ناوبری</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{url('admin')}}">الرئيسية</a>
                    <i class="fa fa-search"></i>

                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                    <input class="form-control form-control-navbar"  id="myInput" type="text" placeholder="Search" aria-label="Search">                           
                        </li>    
                    </ul>
                    <ul class="nav navbar-nav navbar-left">         
                        <li>
                            <a href="#">
                                خروج
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
    

    </div>
</div>















</body>

    <!--   Core JS Files   -->
    <script src="{{asset('dashboard/js/jquery-1.10.2.js')}}" type="text/javascript"></script>
	<script src="{{asset('dashboard/js/bootstrap.min.js')}}" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="{{asset('dashboard/js/bootstrap-checkbox-radio-switch.js')}}"></script>

	<!--  Charts Plugin -->
	<script src="{{asset('dashboard/js/chartist.min.js')}}"></script>

    <!--  Notifications Plugin    -->
    <script src="{{asset('dashboard/js/bootstrap-notify.js')}}"></script>

    <!--  Google Maps Plugin    -->
    <script type="{{asset('dashboard/text/javascript')}}" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="{{asset('dashboard/js/light-bootstrap-dashboard.js')}}"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="{{asset('dashboard/js/demo.js')}}"></script>


</html>


	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{{asset('dashboard/css/bootstrap.min.css')}}" rel="stylesheet" />
	
		<!-- Bootstrap RTL core CSS     -->
    <link href="{{asset('dashboard/css/bootstrap-rtl.min.css')}}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{asset('dashboard/css/animate.min.css')}}" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{asset('dashboard/css/light-bootstrap-dashboard.css')}}" rel="stylesheet"/>
	
	  <!--  Light Bootstrap RTL Version CSS    -->
    <link href="{{asset('dashboard/css/light-bootstrap-dashboard-rtl.css')}}" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{asset('dashboard/css/demo.css')}}" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/earlyaccess/droidarabickufi.css' rel='stylesheet' type='text/css'>
    <link href="{{asset('dashboard/css/pe-icon-7-stroke.css')}}" rel="stylesheet" />

</head>
<body>





<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>



</body>
</html>
