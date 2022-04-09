@extends('user.layout.master')

@section('title')
 home
@endsection
@section('contint')
@if (Session::has('msg'))
<div class="alert alert-success" style="text-align: center" role="alert">
{{ Session::get('msg') }}
</div>
@endif
<div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <h1 style="color: #00D9A5" >مركز بلسم الطبي</h1>
        <h2 class="display-4">نخبة من افضل الاطباء </h2>
        <h2 class="display-4">   خدمة طبية متميزة </h2>
      </div>
    </div>
  </div>


  <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-secondary text-white">
                <span class="mai-chatbubbles-outline"></span>
              </div>
              <p><span>تواصل</span> مع الاطباء</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white">
                <span class="mai-shield-checkmark"></span>
              </div>
              <p>الرعاية الطبية</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-accent text-white">
                <span class="mai-basket"></span>
              </div>
              <p><span>صيديلية متكاملة</p>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .page-section -->

    <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp" style="text-align: center">
            <h1 style="text-align: center;color: #00D9A5 ;font-size: 40px; padding-bottom: 100px">من نحن</h1>
            <p class="text-grey mb-4">نحن مجموعة أطباء نسعى لتحقيق وتطبيق أعلى معايير الجودة والسلامة داخل مركزنا
                 الطبي، نهتم بمرضاناً باعتبارهم أهلنا وأحبابنا ،نجتهد ونتطور بشكل دائم للإطلاع على أحدث الدراسات الطبية حول العالم لكي نختصر رحلة العلاج على المريض ونُقدم الطُرق العلاجية السريعة والفعالة والآمنة على صحة مرضانا.</p>
           <p class="text-grey mb-4">طاقمنا الطبي يضم نُخبة من الأطباء والتمريض وأخصائيين العلاج الطبيعي، حيث يتمتع بكفاءة عالية ويسعد باستقبالكم دائماً وتوفير سُبل العلاج المناسبة لكم، و لقد سبق اختبارهم لاحقاً قبل تشييد مركز بلسم الطبي، لذلك فهو مكان العلاج الآمن لكم ولأحبابكم</p>

                 <a  href="about.html" class="btn btn-primary">المزيد</a>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1" style="padding-bottom:100px ">
              <img src="{{URL::asset('assets/img/img1.jpg') }}" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->

  <div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp"style="color: #00D9A5;font-size: 40px">الاطباء</h1>
      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">

        @foreach ($doctors as $doctor)

        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="{{ URL::asset('doctorimg').'/'.$doctor->img_name }}" style="height: 260px" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href=""><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">Dr.{{ $doctor->name }}</p>
              <span class="text-sm text-grey">{{ $doctor->speciality }}</span>
            </div>
          </div>
        </div>

        @endforeach
      </div>
    </div>
  </div>


  <div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp" style="color: #00D9A5;font-size: 40px">حجز موعد</h1>

      <form class="main-form" action="{{ route('appoint') }}" method="post">
          @csrf
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" class="form-control" placeholder="Full name" name="name">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" class="form-control" placeholder="Email address.." name="email">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" class="form-control" name="date">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="dr_name" id="departement" class="custom-select">
                <option value="null">اختر الطبيب</option>
            @foreach ($doctors as $item)
                        <option value="{{ $item->name }}--{{ $item->speciality }}">Dr.{{ $item->name }}--{{ $item->speciality }}</option>

            @endforeach
            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" class="form-control" placeholder="Number.." name="number">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="nots" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
          </div>
        </div>
<button type="submit" class="btn btn-primary mt-3 wow zoomIn" style="background-color:#00D9A5;">حجز الان</button>
      </form>


    </div>
  </div> <!-- .page-section -->

  <div class="page-section banner-home bg-image" style="background-image: url(../assets/img/banner-pattern.svg);">
    <div class="container py-5 py-lg-0">
      <div class="row align-items-center">
        <div class="col-lg-4 wow zoomIn">
          <div class="img-banner d-none d-lg-block">
            <img src="../assets/img/mobile_app.png" alt="">
          </div>
        </div>
        <div class="col-lg-8 wow fadeInRight">
          <h1 class="font-weight-normal mb-3">يمكنك تنزيل التطبيق الان من جوجل بلاي او ابل ستوري</h1>
          <a href="#"><img src="../assets/img/google_play.svg" alt=""></a>
          <a href="#" class="ml-2"><img src="../assets/img/app_store.svg" alt=""></a>
        </div>
      </div>
    </div>
  </div> <!-- .banner-home -->

@endsection

