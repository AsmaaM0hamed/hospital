@extends('admin.layout.master')

@section('content')

@if (Session::has('msg'))
<div class="alert alert-success" role="alert">
{{ Session::get('msg') }}
</div>
@endif


<div class="col grid-margin stretch-card" >
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">تعديل  </h3>

        <form class="forms-sample" method="POST" action="{{ route('doctor.update',$doctors->id) }}" enctype="multipart/form-data">
            @csrf
            @method('put')
          <div class="form-group">
            <label for="exampleInputUsername1">name</label>
            <input value="{{ $doctors->name }}" type="text" class="form-control" name="dr_name" required style="color: white;background-color: #9b9b9b;">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">phon number</label>
            <input value="{{ $doctors->phon }}"type="text" class="form-control" name="dr_number" required style="color: white;background-color: #9b9b9b;">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">speciality</label>
            <select class="custom-select form-control"name="dr_speciality"requird style="color: white;">
                <option value="{{ $doctors->speciality }}" ></option>
                <option value="قلب">قلب</option>
                <option value="باطنة">باطنة</option>
                <option value="عيون">عيون</option>
              </select>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">doctor img</label>
            <input value="{{ $doctors->img_name }}" type="file" class="form-control" name="img"style="color: white" required>
          </div>
          <button type="submit" class="btn btn-primary me-2">Submit</button>
          <button class="btn btn-dark">Cancel</button>
        </form>

      </div>
    </div>
  </div>
@endsection
