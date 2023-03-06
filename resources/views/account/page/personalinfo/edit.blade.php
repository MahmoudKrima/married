@extends('account.layout.app')
@section('content')
		<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="page-header">
					<div class="row align-items-center">
						<div class="col">
							<h3 class="page-title mt-5" style="text-align:right">تحديث المعلومات الشخصيه</h3> </div>
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
						<form action="{{route('personalinfo.update' , $personalinfo->id)}}" method="POST" style="text-align:right">
                            @method('PUT')
                            @csrf
							<div class="row formtype">
								<div class="col-md-6">
									<div class="form-group">
										<label>الجنسيه</label>
										<select class="form-control" id="sel1" name="nationality">
                                            @foreach ( $Nationality as $Nationalit )
											<option
                                            @if ($personalinfo->nationality == $Nationalit->id)
                                            {{"selected"}}
                                            @endif
                                             value="{{$Nationalit->id}}">{{$Nationalit->name}}</option>
                                            @endforeach

										</select>
									</div>
								</div>
                                <div class="col-md-6">
									<div class="form-group">
										<label>المدينة</label>
										<select class="form-control" id="sel1" name="city">
                                            @foreach ( $city as $cit )
											<option
                                            @if ($personalinfo->city == $cit->id)
                                            {{"selected"}}
                                            @endif
                                            value="{{$cit->id}}">{{$cit->name}}</option>
                                            @endforeach
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>بلد الأصل</label>
										<select class="form-control" id="sel2" name="originalyCountry">
                                            @foreach ( $originalyCountry as $originalyCountr )
											<option
                                            @if ($personalinfo->originalyCountry == $originalyCountr->id)
                                            {{"selected"}}
                                            @endif
                                            value="{{$originalyCountr->id}}">{{$originalyCountr->name}}</option>
                                            @endforeach
										</select>
									</div>
								</div>
                                <div class="col-md-6">
                                    <label for="location" class="form-label">أسكن فى منظقة </label>
                                    <input value="{{$personalinfo->liveIN}}" type="text" class="form-control" id="location" name="liveIN">
                                </div>

                                <div class="col-md-6">
                                    <label for="note" class="form-label">إترك ملاحظه</label>
                                    <textarea  class="form-control" id="note" name="notes" rows="3">{{$personalinfo->notes}}</textarea>
                                </div>

                                <div class="col-md-6">
                                    <label for="age" class="form-label">العمر</label>
                                    <input value="{{$personalinfo->age}}" type="" class="form-control" id="age" name="age" >
                                </div>

							</div>
				                <button type="submit" class="btn btn-primary buttonedit ml-2">تعديل</button>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
