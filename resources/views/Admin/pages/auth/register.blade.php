<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="{{ asset('Admin/') }}/images/logos/favicon.png" />
  <link rel="stylesheet" href="{{ asset('Admin/') }}/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="#" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="{{ asset('Admin/') }}/images/logos/dark-logo.svg" width="180" alt="">
                </a>
                <p class="text-center">Your Social Campaigns</p>
                
                <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Tên người dùng</label>
                    <input type="text" class="form-control" name="name" id="exampleInputtext1" aria-describedby="textHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                  </div>

                  {{-- submit --}}
                  {{-- <a type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">
                    Đăng ký
                </a> --}}
                <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" >  Đăng ký</button>
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold">Bạn có sẵn sàng để tạo một tài khoản?</p>
                    <a class="text-primary fw-bold ms-2" href="{{ route('showlogin') }}">Đăng nhập</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="{{ asset('Admin/') }}/libs/jquery/dist/jquery.min.js"></script>
  <script src="{{ asset('Admin/') }}/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
