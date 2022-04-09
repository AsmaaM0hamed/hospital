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
            <h4 class="card-title col-6">الاطباء</h4>
           <a href="{{ route('doctor.create') }}"  type="button" class="btn btn-outline-success col-6">اضافة طبيب</a>
          </div>


        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>اسم الطبيب</th>
                <th>رقم التليفون</th>
                <th>التخصص</th>
                <th>الصورة</th>
                <th>تعديل</th>
                <th>حذف</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($doctors as $doctor)
              <tr>

                <td>{{ $doctor->name }}</td>
                <td>{{ $doctor->phon }}</td>
                <td>{{ $doctor->speciality }}</td>
                <td><img style="width: 150px;border-radius: 0; height: 102px;" src="{{ URL::asset('doctorimg')."/". $doctor->img_name }} "alt=""></td>
                <td><a href="{{ route('doctor.edit',$doctor->id) }}"class="btn btn-outline-warning ">تعديل</a></td>
              <form action="{{ route('doctor.destroy',$doctor->id) }}" method="post">
            @csrf
            @method('delete')
            <td><button class="btn btn-outline-danger ">حذف</button></td>
            </form>
                {{-- <td><a href=""class="btn btn-outline-danger ">حذف</a></td> --}}
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
