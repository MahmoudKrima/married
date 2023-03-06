@extends('account.layout.app')
@section('content')

		<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="page-header">
					<div class="row align-items-center">

                        @if (Auth::user()->personal_info == 1)
						<div class="col">
							<h3 class="page-title mt-5 bg-danger text-light p-2 rounded" style="text-align:right">المعلومات الشخصيه</h3>
                         </div>
                         @endif
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
                        @if (session()->has('success_specification_add'))
                        <div class="alert alert-success">{{session()->get('success_specification_add')}}</div>
                        @endif
                        @if (Auth::user()->personal_info == 1)
                        <table class="table" style="text-align:center">
                            <thead>
                              <tr>
                                <th scope="col">الجنسية</th>
                                <th scope="col">بلد الاصل</th>
                                <th scope="col">المدينة</th>
                                <th scope="col">أسكن فى منطقة</th>
                                <th scope="col">العمر</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row"> {{$personalinfo->national->name}}</th>
                                <th scope="row"> {{$personalinfo->original_Country->name}}</th>
                                <th scope="row"> {{( $personalinfo->citym->name)}}</th>
                                <th scope="row"> {{$personalinfo->liveIN}}</th>
                                <th scope="row"> {{$personalinfo->age}}</th>
                              </tr>
                            </tbody>
                          </table>
                          @else
                          <div class="alert alert-info" role="alert">
                            <i class="far fa-user"></i>   لم يتم اضافة معلومات شخصية بعد يرجي اضافة معلومات
                        </div>
                          @endif
					</div>
                    <div class="col-12">
                    @if (Auth::user()->specification == 1)
                    <div class="col">
                        <h3 class="page-title mt-5 bg-primary text-light p-2 rounded" style="text-align:right">المواصفات المطلوبة لشريك حياتك</h3>
                     </div>
                    <table class="table" style="text-align:center">
                        <thead>
                          <tr>
                            <th scope="col">لون البشرة</th>
                            <th scope="col">الطول</th>
                            <th scope="col">العرق</th>
                            <th scope="col">الوزن</th>
                            <th scope="col">كتلة الجسم</th>
                            <th scope="col">التدخين</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>{{$specification->skin_colour}}</td>
                            <td>{{$specification->height}}</td>
                            <td>{{$specification->human_race}}</td>
                            <td>{{$specification->weight}}</td>
                            <td>{{$specification->body_mass}}</td>
                            <td> {{$specification->smoke == 1 ? "نعم " : "لا"}}</td>

                          </tr>


                        </tbody>
                      </table>
                    @else
                    <div class="alert alert-info" role="alert">
                        <i class="far fa-user"></i>   لم يتم اضافة مواصفات عنك  يرجي اضافة مواصفات
                    </div>
                    @endif
                </div>
				</div>

			</div>
		</div>
	</div>
@endsection
