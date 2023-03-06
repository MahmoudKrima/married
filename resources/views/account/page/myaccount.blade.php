@extends('account.layout.app')
@section('content')
		<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="page-header">
					<div class="row align-items-center">
						<div class="col">
							<h3 class="page-title mt-5" style="text-align:right"> مرحبا {{ Auth::user()->name }}</h3>
							<h3 class="page-title mt-5 bg-primary p-2 text-light" style="text-align:right"> المعلومات الشخصية</h3>
                         </div>
					</div>
				</div>

                @if (session()->has('success'))
                <div class="alert alert-success">{{session()->get('success')}}</div>
                @endif

                 @if (session()->has('success_update'))
                <div class="alert alert-success">{{session()->get('success_update')}}</div>
                @endif
                @if(!$personalinfo)
                <div class="alert alert-danger" role="alert">
                    لم يتم اضافة معلومات شخصية بعد يرجي اضافة معلومات من هنا
                </div>
                  <a class="btn btn-success" href="{{route('personalinfo.create')}}">اضغط هنا </a>
                @endif
				<div class="row">
					<div class="col-lg-12">
                        <table class="table" style="text-align:right">
                            <thead>
                                <tr>
                                    <td >أسكن في منطقة</td>
                                    <td >المدينه</td>
                                    <td >بلد الاصل</td>
                                    <td >الجنسيه</td>
                                    <td >العمر</td>
                                    <td >الأسم</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td >{{ $personalinfo->liveIN}}</td>
                                    <td> {{( $personalinfo->citym->name)}}</td>
                                    <td >{{$personalinfo->original_Country->name}}</td>
                                    <td > {{$personalinfo->national->name}}</td>
                                    <td >{{ $personalinfo->age}}</td>
                                    <td >{{Auth::user()->name}}</td>
                            </tbody>
                          </table>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
