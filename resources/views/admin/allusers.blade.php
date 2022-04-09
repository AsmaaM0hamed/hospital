
@extends('admin.layout.master')

@section('content')


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
                <th>اسم المستخدم</th>
                <th>رقم التليفون</th>
                <th>العنوان</th>
                <th>الايميل</th>
                <th>الحالة</th>
                <th>حذف</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
              <tr>

                <td>{{ $user->name }}</td>
                <td>{{ $user->phone }}</td>
                <td>{{ $user->address }}</td>
                <td>{{ $user->email }}</td>
@if ($user->type == 0)


<form action="{{ route('user.update',$user->id) }}" method="post">
    @csrf
@method('put')
    <td><button class="btn btn-outline-warning ">مستخدم</button></td>
    </form>

@else

<form action="{{ route('user.update',$user->id) }}" method="post">
    @csrf
@method('put')
    <td><button class="btn btn-outline-success ">ادمن</button></td>
    </form>
@endif


              <form action="{{ route('user.destroy',$user->id) }}" method="post">
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
