@section('head')
    <style>
        .gradient-custom {
            /* fallback for old browsers */
            background: #f6d365;
            
            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1));
            
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1))
            }
    </style>
@endsection

@extends('main')

@section('content')
<section class="vh-100" style="background-color: #f4f5f7;">
    <div class="container py-3 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-lg-6 mb-4 mb-lg-0">
          <div class="card mb-3" style="border-radius: .5rem;">
            <div class="row g-0">
              <div class="col-md-4 gradient-custom text-center text-white"
                style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                <img src="{{Auth::user()->image}}"
                  alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
                  <a style="color:white" href="/profile/editimage">Change</a>
                <h5>{{ Auth::user()->name }}</h5>
                {{-- <p>Web Designer</p> --}}
                <a style="color:white" href="/profile/edit">
                    <i class="far fa-edit mb-5"></i>
                </a>
              </div>
              <div class="col-md-8">
                <div class="card-body p-4">
                  <h6>Information</h6>
                  <hr class="mt-0 mb-4">
                  <div class="row pt-1">
                    <div class="col-6 mb-3">
                      <h6>Email</h6>
                      <p class="text-muted">{{ Auth::user()->email }}</p>
                    </div>
                    <div class="col-6 mb-3">
                      <h6>Phone</h6>
                      <p class="text-muted">123 456 789</p>
                    </div>
                  </div>
                  <h6>Projects</h6>
                  <hr class="mt-0 mb-4">
                  <div class="row pt-1">
                    <div class="col-6 mb-3">
                      <h6>Recent</h6>
                      <p class="text-muted">Lorem ipsum</p>
                    </div>
                    <div class="col-6 mb-3">
                      <h6>Most Viewed</h6>
                      <p class="text-muted">Dolor sit amet</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection