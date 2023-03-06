@extends('account.layout.app')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title mt-5" style="text-align:right">تعديل المواصفات</h3>
                    </div>
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
                    <form method="POST" action="{{ route('specification.update', $specification->id) }}"
                        style="text-align:right">
                        @csrf
                        @method('PUT')
                        <div class="row formtype">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>الطول</label>
                                    <input value="{{ $specification->height }}" type="number" class="form-control"
                                        id="location" name="height">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>لون البشرة</label>
                                    <select style="text-align:right" class="form-control" id="sel1" name="skin_colour">
                                        <option disabled selected>إختر</option>
                                        <option {{ $specification->skin_colour == 'أبيض نقي' ? 'selected' : '' }}>أبيض نقي
                                        </option>
                                        <option {{ $specification->skin_colour == 'أبيض عادي' ? 'selected' : '' }}>أبيض عادي
                                        </option>
                                        <option {{ $specification->skin_colour == 'قمحي يميل للبياض' ? 'selected' : '' }}>
                                            قمحي يميل للبياض</option>
                                        <option {{ $specification->skin_colour == 'قمحي' ? 'selected' : '' }}>قمحي</option>
                                        <option {{ $specification->skin_colour == 'قمحي يميل للسمار' ? 'selected' : '' }}>
                                            قمحي يميل للسمار</option>
                                        <option {{ $specification->skin_colour == 'أسمر فاتح' ? 'selected' : '' }}>أسمر فاتح
                                        </option>
                                        <option {{ $specification->skin_colour == 'أسمر' ? 'selected' : '' }}> أسمر</option>
                                        <option {{ $specification->skin_colour == 'عرق أسمر' ? 'selected' : '' }}> عرق أسمر
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>الوزن </label>
                                    <input value="{{ $specification->weight }}" type="number" class="form-control"
                                        id="location" name="weight">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="location" class="form-label"> العرق </label>
                                <select style="text-align:right" class="form-control" id="sel1" name="human_race">
                                    <option selected disabled>إختر</option>
                                    <option {{ $specification->human_race == 'عرق أسمر' ? 'selected' : '' }}>عرق أسمر
                                    </option>
                                    <option {{ $specification->human_race == 'عرق أبيض' ? 'selected' : '' }}>عرق أبيض
                                    </option>
                                    <option {{ $specification->human_race == 'عرق قمحي' ? 'selected' : '' }}>عرق قمحي
                                    </option>
                                    <option {{ $specification->human_race == 'عرق قمحي فيهم عرق أسمر' ? 'selected' : '' }}>
                                        عرق قمحي فيهم عرق أسمر</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="location" class="form-label">كتلة الجسم</label>
                                <input value="{{ $specification->body_mass }}" type="number" class="form-control"
                                    id="location" name="body_mass">
                            </div>

                            <div class="col-md-6">
                                <label for="location" class="form-label">كيف  تصغ / تصغين مستوى جمالك </label>
                                <input value=" {{ $specification->beauty }}" type="text" class="form-control"
                                    id="location" name="beauty">
                            </div>

                            <div class="col-md-6">
                                <label for="location" class="form-label"> الحاله الصحية </label>
                                <input value=" {{ $specification->Health_status }}" type="text" class="form-control"
                                    id="location" name="Health_status">
                            </div>

                            <div class="col-md-6">
                                <label for="location" class="form-label">هل هناك عملية تكميم/ تجميل</label>
                                <select style="text-align:right" class="form-control" id="sel1" name="surgery">
                                    <option disabled selected>إختر</option>
                                    <option {{ $specification->surgery == '0' ? 'selected' : '' }} value="0">نعم
                                    </option>
                                    <option {{ $specification->surgery == '1' ? 'selected' : '' }} value="1">لا
                                    </option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="note" class="form-label">المظهر الخارجي </label>
                                <textarea class="form-control" id="note" name="exterior" rows="3">{{ $specification->exterior }}</textarea>
                            </div>

                            <div class="col-md-6">
                                <label for="age" class="form-label">تحدث / تحدثى عن نفسك</label>
                                <textarea class="form-control" id="note" name="about_your_self" rows="3">{{ $specification->about_your_self }}</textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="age" class="form-label"> هل تود/ تودين ذكر شئ عن وضعك الصحى ؟</label>
                                <textarea class="form-control" id="note" name="mention_something" rows="3">{{ $specification->mention_something }}</textarea>
                            </div>

                            <div class="col-md-6 mt-4">
                                <label for="age" class="form-label">التدخين</label>
                                <select style="text-align:right" class="form-control" id="sel1" name="smoke">
                                    <option disabled selected>إختر</option>
                                    <option {{ $specification->smoke == '0' ? 'selected' : '' }} value="0">نعم
                                    </option>
                                    <option {{ $specification->smoke == '1' ? 'selected' : '' }} value="1">لا
                                    </option>
                                </select>
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
