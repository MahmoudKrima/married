@extends('account.layout.app')


@section('content')
<div class="page-wrapper">
			<div class="content container-fluid">
                <div class="col-12 mt-4">
                    <form method="POST" action="{{ route('search.filter',Auth::user()->id) }}">
                        @csrf
                        {{-- <input name="name" placeholder="البحث عن طريق الاسم" class="form-control" type="text">
                        <input name="name" placeholder="البحث عن طريق الاسم" class="form-control mt-3" type="text"> --}}
                        {{-- <div class="col-12 mx-auto">
                        <center>
                            <button class="btn btn-success mt-3" type="submit">اضغط هنا البحث عن شريك حياة مناسب لك</button>
                        </center>
                        </div> --}}
                    </form>
                </div>
                @if ($search )
                <div class="col">
                    <h3 class="page-title mt-5 bg-primary text-light p-2 rounded" style="text-align:right">المواصفات المطابقة لاختيارك</h3>
                 </div>
             <table class="table" style="text-align:center">
                <thead>
                  <tr>
                    <th scope="col">تفاصيل الشريك</th>
                    <th scope="col">الطول</th>
                    <th scope="col">الوزن</th>
                    <th scope="col">لون البشرة</th>
                    <th scope="col">العرق البشري</th>
                    <th scope="col">كتلة الجسم</th>
                    <th scope="col">نم اجراء عمليات تكميم او تجميل</th>
                    <th scope="col">التدخين</th>
                    <th scope="col">#</th>

                  </tr>
                </thead>
                <tbody>
                  <tr>
                    @forelse ( $search as $search )
                    <th>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$search->id}}">
                            <i class="fas fa-eye"></i>
                        </button>

                    </th>
                    <th >{{$search->height}} </th>
                    <th >{{$search->weight}} </th>
                    <th >{{$search->skin_colour}} </th>
                    <th >{{$search->human_race}} </th>
                    <th >{{$search->body_mass}} </th>
                    <th >{{$search->surgery == 0 ? "لا" : "نعم"}} </th>
                    <th >{{$search->smoke  == 0 ? "لا" : "نعم"}} </th>
                    <th >{{$loop->iteration}} </th>
                  </tr>

                  <!-- Modal -->
                <div class="modal fade" id="exampleModal{{$search->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">المعلومات الشخصية</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <label for="">الاسم</label>
                            <div class="col">محمود كارم</div>

                            <label for="">السن</label>
                            <div class="col">25</div>

                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                        </div>
                    </div>
                    </div>
                </div>
                    @empty
                    <th colspan="1000" scope="row">لا يوجد حاليا شريك نجاح يناسبك </th>
                    @endforelse
                  {{-- </tr> --}}
                </tbody>
              </table>
              @else
              <div class="bg-warning text-dark p-2 rounded">لا يوجد حاليا شريك نجاح يناسبك </div>

              @endif

            </div>
</div>

@endsection
