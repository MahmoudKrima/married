@extends('account.layout.app')
@section('content')

		<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="page-header">
					<div class="row align-items-center">
						<div class="col">
							<h3 class="page-title mt-5" style="text-align:right">أضف المعلومات الشخصيه</h3> </div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
                                        @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
						<form style="text-align:right" method="POST" action="{{route('personalinfo.store')}}">
                            @csrf
							<div class="row formtype">
								<div class="col-md-6">
									<div class="form-group">
										<label>المدينة</label>
										<select class="form-control" id="city" name="city">
                                            <option disabled selected style="text-align:right">اختر المدينة</option>
                                            @foreach ($city as $cityies)
                                            <option style="text-align:right" value="{{ $cityies->id }}">{{ $cityies->name}}</option>
                                            @endforeach
										</select>
									</div>
								</div>
                                <div class="col-md-6">
									<div class="form-group">
										<label>الجنسية</label>
										<select class="form-control" id="nationality " name="nationality">
											<option disabled selected style="text-align:right" >اختر الجنسية</option>
                                            @foreach ($Nationality as $Nationalities)
                                            <option style="text-align:right" value="{{ $Nationalities->id }}">{{ $Nationalities->name}}</option>
                                            @endforeach
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>بلد الأصل</label>
                                        <select class="form-control" id="originalyCountry " name="originalyCountry">
                                        <option style="text-align:right" >أختار</option>
                                        @foreach ($originalyCountry as $originalyCountries)
                                        <option style="text-align:right" value="{{ $originalyCountries->id }}">{{ $originalyCountries->name}}</option>
                                        @endforeach
                                        </select>
									</div>
								</div>
                                <div class="col-md-6">
                                    <label for="location" class="form-label">أسكن فى منظقة </label>
                                    <input type="text" class="form-control" id="liveIN" name="liveIN">
                                </div>
                                <div class="col-md-6">
                                    <label for="age" class="form-label">العمر</label>
                                    <input type="text" class="form-control" id="age" name="age" >
                                </div>
                                <div class="col-md-6">
                                    <label for="note" class="form-label">إترك ملاحظه</label>
                                    <textarea  class="form-control" id="note" name="notes" rows="3"></textarea>
                                </div>
                                </div>
                            <input type="submit" class="btn btn-primary buttonedit ml-2" value="Save">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
