@extends('admin.layout.master')

@section('content')
@if (Session::has('msgd'))
<div class="alert alert-danger" role="alert" style="text-align: center; background-color: #fc424a; color: black">
{{ Session::get('msgd') }}
</div>
@endif
@if (Session::has('msge'))
<div class="alert alert-warning" role="alert" style="text-align: center; background-color: #ffab00;  color: black">
{{ Session::get('msge') }}
</div>
@endif



<div class="col grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
          <div class="row">
            <h4 class="card-title col-6">الحجوزات</h4>
          </div>


        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>اسم المريض</th>
                <th>رقم التليفون</th>
                <th> الايميل</th>
                <th>التخصص--اسم الطبيب</th>
                <th>تاريخ الزيارة</th>
                <th>حذف</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($appoints as $appoint)
              <tr>

                <td>{{ $appoint->name }}</td>
                <td>{{ $appoint->phon_number }}</td>
                <td>{{ $appoint->email }}</td>
                <td>{{ $appoint->dr_name }}</td>
                <td>{{ $appoint->date }}</td>

              <form action="{{ route('appointment.destroy',$appoint->id) }}" method="post">
            @csrf
            @method('delete')
            <td><button class="btn btn-outline-danger ">حذف</button></td>
            </form>

              </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
