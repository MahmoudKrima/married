<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Hotel Dashboard Template</title>
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('dashboard/assets')}}/img/favicon.png">
	<link rel="stylesheet" href="{{asset('dashboard/assets')}}/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{asset('dashboard/assets')}}/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="{{asset('dashboard/assets')}}/plugins/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="{{asset('dashboard/assets')}}/css/feathericon.min.css">
	<link rel="stylesheet" href="{{asset('dashboard/assets')}}/plugins/morris/morris.css">
	<link rel="stylesheet" type="text/css" href="{{asset('dashboard/assets')}}/css/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" href="{{asset('dashboard/assets')}}/css/style.css"> </head>

<body>
	<div class="main-wrapper">
		<div class="header">
			<div class="header-left">
				<a href="index.html" class="logo"> <img src="{{asset('dashboard/assets')}}/img/hotel_logo.png" width="50" height="70" alt="logo"> <span class="logoclass">HOTEL</span> </a>
				<a href="index.html" class="logo logo-small"> <img src="{{asset('dashboard/assets')}}/img/hotel_logo.png" alt="Logo" width="30" height="30"> </a>
			</div>
			<a href="javascript:void(0);" id="toggle_btn"> <i class="fe fe-text-align-left"></i> </a>
			<a class="mobile_btn" id="mobile_btn"> <i class="fas fa-bars"></i> </a>
			<ul class="nav user-menu">

				<li class="nav-item dropdown has-arrow">
					<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"> <span class="user-img">
                    <img class="rounded-circle" src="{{asset('dashboard/assets')}}/img/profiles/avatar-01.jpg" width="31" alt="Soeng Souy"></span> </a>
					<div class="dropdown-menu">

                        <a class="dropdown-item">{{ Auth::user()->name }}</a>
                        {{-- <a class="dropdown-item" href="profile.html">My Profile</a> --}}

                        {{-- log out link as form --}}
                        <a  class="dropdown-item"
                         href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                        {{-- another log out link as form  and is correct --}}
                        {{-- <form  method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="dropdown-item" href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();"</a>
                                {{ __('Log Out') }}
                        </form> --}}
                    </div>
				</li>
		</div>
		<div class="sidebar" id="sidebar">
			<div class="sidebar-inner slimscroll">
				<div id="sidebar-menu" class="sidebar-menu">
					<ul>

						<li class="list-divider"></li>
                        <li> <a href="{{url('/dashboard2')}}"><i class="fas fa-home"></i> <span>الصفحة الرئيسية</span></a> </li>
                        <li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> المعلومات الشخصيه </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
                                @if (Auth::user()->personal_info == 1 )
								<li><a href="{{ route('personalinfo.edit',Auth::user()->id) }}">تعديل المعلومات الشخصيه</a></li>
								<li><a href="{{ url('/personalinfo') }}">شاهد  معلوماتك الشخصيه </a></li>
                                @endif
                                @if (Auth::user()->personal_info == 0 )
								<li><a href="{{ url('/personalinfo/create') }}">أضف معلوماتك الشخصيه </a></li>
                                @endif

							</ul>
						</li>
                        <li class="submenu"> <a href="#"><i class="fas fa-cube"></i> <span> المواصفات  </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
                                @if (Auth::user()->specification == 0 )
								<li><a href="{{ url('/specification/create') }}">أضف المواصفات  </a></li>
                                @else
								<li><a href="{{ route('specification.edit', Auth::user()->id)}}">تعديل المواصفات  </a></li>
                                @endif


							</ul>
						</li>

						<li class="submenu"> <a href="#"><i class="fas fa-suitcase"></i> <span> الوظيفه </span></a></li>
                        <li> <a href="pricing.html"><i class="far fa-money-bill-alt"></i> <span>المعيشه</span></a> </li>
                        <li> <a href="{{route('search.index')}}"><i class="far fa-heart"></i> <span>البحث عن شريك حياتك</span></a> </li>

						<li class="list-divider"></li>

					</ul>
				</div>
			</div>
		</div>
@yield('content')

<script src="{{asset('dashboard/assets')}}/js/jquery-3.5.1.min.js"></script>
<script src="{{asset('dashboard/assets')}}/js/popper.min.js"></script>
<script src="{{asset('dashboard/assets')}}/js/bootstrap.min.js"></script>
<script src="{{asset('dashboard/assets')}}/js/moment.min.js"></script>
<script src="{{asset('dashboard/assets')}}/js/select2.min.js"></script>
<script src="{{asset('dashboard/assets')}}/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="{{asset('dashboard/assets')}}/plugins/raphael/raphael.min.js"></script>
<script src="{{asset('dashboard/assets')}}/js/bootstrap-datetimepicker.min.js"></script>
<script src="{{asset('dashboard/assets')}}/js/script.js"></script>
<script>
$(function() {
    $('#datetimepicker3').datetimepicker({
        format: 'LT'
    });
});
</script>
</body>

</html>
