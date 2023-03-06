@extends('account.layout.app')
@section('content')
		<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="page-header">
					<div class="row align-items-center">
						<div class="col">
							<h3 class="page-title mt-5" style="text-align:right">أضف مواصفاتك</h3> </div>
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
						<form action="{{route('specification.store')}}" method="POST" style="text-align:right">
                            @csrf
							<div class="row formtype">
								<div class="col-md-6">
									<div class="form-group">
										<label>الطول</label>
                                        <input type="number" class="form-control" id="lenght" name="height">
									</div>
								</div>
                                <div class="col-md-6">
									<div class="form-group">
										<label>لون البشرة</label>
										<select  style="text-align:right" class="form-control" id="colorscreen" name="skin_colour">
											<option disabled selected>إختر</option>
											<option value="أبيض نقي">أبيض نقي</option>
											<option value="أبيض عادي">أبيض عادي</option>
											<option value="قمحي يميل للبياض">قمحي يميل للبياض</option>
											<option value="قمحي">قمحي</option>
											<option value="قمحي يميل للسمار">قمحي يميل للسمار</option>
											<option value="أسمر فاتح">أسمر فاتح</option>
											<option value="أسمر"> أسمر</option>
											<option value="عرق أسمر"> عرق أسمر</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>الوزن </label>
                                        <input type="number" class="form-control" id="weight" name="weight">
									</div>
								</div>
                                <div class="col-md-6">
                                    <label for="location" class="form-label"> العرق  </label>
                                    <select style="text-align:right" class="form-control" id="sel1" name="human_race">
                                        <option disabled selected>إختر</option>
                                        <option value="عرق أسمر">عرق أسمر</option>
                                        <option value="عرق أبيض">عرق أبيض</option>
                                        <option value="عرق قمحي">عرق قمحي</option>
                                        <option value="عرق قمحي فيهم عرق أسمر">عرق قمحي فيهم عرق أسمر</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label for="location" class="form-label">كتلة الجسم</label>
                                    <input type="number" class="form-control" id="location" name="body_mass">
                                </div>

                                <div class="col-md-6">
                                    <label for="location" class="form-label">كيف تصغ / تصغين مستوى جمالك </label>
                                    <input type="text" class="form-control" id="location" name="beauty">
                                </div>

                                <div class="col-md-6">
                                    <label for="location" class="form-label"> الحاله الصحية </label>
                                    <input type="text" class="form-control" id="location" name="Health_status">
                                </div>

                                <div class="col-md-6">
                                    <label for="location" class="form-label">هل هناك عملية تكميم/ تجميل</label>
                                    <select style="text-align:right" class="form-control" id="sel1" name="surgery">
                                        <option disabled selected>إختر</option>
                                        <option value="0">نعم</option>
                                        <option value="1">لا</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label for="note" class="form-label">المظهر الخارجي </label>
                                    <textarea class="form-control" id="note" name="exterior" rows="3"></textarea>
                                </div>

                                <div class="col-md-6">
                                    <label for="age" class="form-label">تحدثى عن نفسك</label>
                                    <textarea class="form-control" id="note" name="about_your_self" rows="3"></textarea>
                                </div>
                                <div class="col-md-6">
                                    <label for="age" class="form-label"> هل تودين/ تود ذكر شئ عن وضعك الصحى ؟</label>
                                    <textarea class="form-control" id="note" name="mention_something" rows="3"></textarea>
                                </div>

                                <div class="col-md-6 mt-4">
                                    <label for="age" class="form-label">التدخين</label>
                                    <select style="text-align:right" class="form-control" id="sel1" name="smoke">
                                        <option disabled selected>إختر</option>
                                        <option value="0">نعم</option>
                                        <option value="1">لا</option>
                                    </select>

                                </div>
							</div>
				        <button type="submit" class="btn btn-primary buttonedit ml-2">اضافة</button>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
