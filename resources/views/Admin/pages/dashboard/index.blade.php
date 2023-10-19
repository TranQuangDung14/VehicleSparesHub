@extends('Admin.layouts.master')

@section('title', 'Bảng điều khiển')

@section('content')
{{-- <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
data-sidebar-position="fixed" data-header-position="fixed"> --}}


{{-- <aside class="left-sidebar">
  @include('Admin.partial.sidebar')
  </aside> --}}

<!--  Main wrapper -->
{{-- <div class="body-wrapper"> --}}
  <!--  Header Start -->
    {{-- <header class="app-header">
    @include('Admin.partial.header')
    </header> --}}

  <!--  Header End -->
  <div class="container-fluid">
    <!--  Row 1 -->
    <div class="row">

      <div class="col-lg-4">
        <div class="row">
          <div class="col-lg-12">
            <!-- Monthly Earnings -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-start">
                  <div class="col-8">
                    <h5 class="card-title mb-9 fw-semibold">Sản phẩm</h5>
                    <h4 class="fw-semibold mb-3">{{$products}}</h4>
                  </div>
                  <div class="col-4">
                    <div class="d-flex justify-content-end">
                      <div
                        class="text-white bg-danger rounded-circle p-6 d-flex align-items-center justify-content-center">
                        <i class="ti ti-brand-producthunt fs-6"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      
        </div>
      </div>
      <div class="col-lg-4">
        <div class="row">
          <div class="col-lg-12">
            <!-- Monthly Earnings -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-start">
                  <div class="col-8">
                    <h5 class="card-title mb-9 fw-semibold"> Khách hàng </h5>
                    <h4 class="fw-semibold mb-3">{{$user}}</h4>
                  </div>
                  <div class="col-4">
                    <div class="d-flex justify-content-end">
                      <div
                        class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                        <i class="ti ti-user fs-6"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              {{-- <div id="earning"></div> --}}
            </div>
          </div>
      
        </div>
      </div>
      <div class="col-lg-4">
        <div class="row">
          <div class="col-lg-12">
            <!-- Monthly Earnings -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-start">
                  <div class="col-8">
                    <h5 class="card-title mb-9 fw-semibold">Đơn hàng </h5>
                    <h4 class="fw-semibold mb-3">{{$orders}}</h4>
                  </div>
                  <div class="col-4">
                    <div class="d-flex justify-content-end">
                      <div
                        class="text-white bg-warning rounded-circle p-6 d-flex align-items-center justify-content-center">
                        <i class="ti ti-garden-cart fs-6"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              {{-- <div id="earning"></div> --}}
            </div>
          </div>
      
        </div>
      </div>
    </div>
    <div class="row">
            <div class="col-lg-12 d-flex align-items-strech">
        <div class="card w-100">
          <div class="card-body">
            <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
              <div class="mb-3 mb-sm-0">
                <h5 class="card-title fw-semibold">Sales Overview</h5>
              </div>
              <div>
                <select class="form-select">
                  <option value="1">March 2023</option>
                  <option value="2">April 2023</option>
                  <option value="3">May 2023</option>
                  <option value="4">June 2023</option>
                </select>
              </div>
            </div>
            <div id="chart"></div>
          </div>
        </div>
      </div>
    </div>

    {{-- <div class="row">
      <div class="col-lg-4 d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body p-4">
            <div class="mb-4">
              <h5 class="card-title fw-semibold">Recent Transactions</h5>
            </div>
            <ul class="timeline-widget mb-0 position-relative mb-n5">
              <li class="timeline-item d-flex position-relative overflow-hidden">
                <div class="timeline-time text-dark flex-shrink-0 text-end">09:30</div>
                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                  <span class="timeline-badge border-2 border border-primary flex-shrink-0 my-8"></span>
                  <span class="timeline-badge-border d-block flex-shrink-0"></span>
                </div>
                <div class="timeline-desc fs-3 text-dark mt-n1">Payment received from John Doe of $385.90</div>
              </li>
              <li class="timeline-item d-flex position-relative overflow-hidden">
                <div class="timeline-time text-dark flex-shrink-0 text-end">10:00 am</div>
                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                  <span class="timeline-badge border-2 border border-info flex-shrink-0 my-8"></span>
                  <span class="timeline-badge-border d-block flex-shrink-0"></span>
                </div>
                <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">New sale recorded <a
                    href="#" class="text-primary d-block fw-normal">#ML-3467</a>
                </div>
              </li>
              <li class="timeline-item d-flex position-relative overflow-hidden">
                <div class="timeline-time text-dark flex-shrink-0 text-end">12:00 am</div>
                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                  <span class="timeline-badge border-2 border border-success flex-shrink-0 my-8"></span>
                  <span class="timeline-badge-border d-block flex-shrink-0"></span>
                </div>
                <div class="timeline-desc fs-3 text-dark mt-n1">Payment was made of $64.95 to Michael</div>
              </li>
              <li class="timeline-item d-flex position-relative overflow-hidden">
                <div class="timeline-time text-dark flex-shrink-0 text-end">09:30 am</div>
                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                  <span class="timeline-badge border-2 border border-warning flex-shrink-0 my-8"></span>
                  <span class="timeline-badge-border d-block flex-shrink-0"></span>
                </div>
                <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">New sale recorded <a
                    href="#" class="text-primary d-block fw-normal">#ML-3467</a>
                </div>
              </li>
              <li class="timeline-item d-flex position-relative overflow-hidden">
                <div class="timeline-time text-dark flex-shrink-0 text-end">09:30 am</div>
                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                  <span class="timeline-badge border-2 border border-danger flex-shrink-0 my-8"></span>
                  <span class="timeline-badge-border d-block flex-shrink-0"></span>
                </div>
                <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">New arrival recorded
                </div>
              </li>
              <li class="timeline-item d-flex position-relative overflow-hidden">
                <div class="timeline-time text-dark flex-shrink-0 text-end">12:00 am</div>
                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                  <span class="timeline-badge border-2 border border-success flex-shrink-0 my-8"></span>
                </div>
                <div class="timeline-desc fs-3 text-dark mt-n1">Payment Done</div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-8 d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body p-4">
            <h5 class="card-title fw-semibold mb-4">Recent Transactions</h5>
            <div class="table-responsive">
              <table class="table text-nowrap mb-0 align-middle">
                <thead class="text-dark fs-4">
                  <tr>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Id</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Assigned</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Name</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Priority</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Budget</h6>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="border-bottom-0"><h6 class="fw-semibold mb-0">1</h6></td>
                    <td class="border-bottom-0">
                        <h6 class="fw-semibold mb-1">Sunil Joshi</h6>
                        <span class="fw-normal">Web Designer</span>
                    </td>
                    <td class="border-bottom-0">
                      <p class="mb-0 fw-normal">Elite Admin</p>
                    </td>
                    <td class="border-bottom-0">
                      <div class="d-flex align-items-center gap-2">
                        <span class="badge bg-primary rounded-3 fw-semibold">Low</span>
                      </div>
                    </td>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-0 fs-4">$3.9</h6>
                    </td>
                  </tr>
                  <tr>
                    <td class="border-bottom-0"><h6 class="fw-semibold mb-0">2</h6></td>
                    <td class="border-bottom-0">
                        <h6 class="fw-semibold mb-1">Andrew McDownland</h6>
                        <span class="fw-normal">Project Manager</span>
                    </td>
                    <td class="border-bottom-0">
                      <p class="mb-0 fw-normal">Real Homes WP Theme</p>
                    </td>
                    <td class="border-bottom-0">
                      <div class="d-flex align-items-center gap-2">
                        <span class="badge bg-secondary rounded-3 fw-semibold">Medium</span>
                      </div>
                    </td>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-0 fs-4">$24.5k</h6>
                    </td>
                  </tr>
                  <tr>
                    <td class="border-bottom-0"><h6 class="fw-semibold mb-0">3</h6></td>
                    <td class="border-bottom-0">
                        <h6 class="fw-semibold mb-1">Christopher Jamil</h6>
                        <span class="fw-normal">Project Manager</span>
                    </td>
                    <td class="border-bottom-0">
                      <p class="mb-0 fw-normal">MedicalPro WP Theme</p>
                    </td>
                    <td class="border-bottom-0">
                      <div class="d-flex align-items-center gap-2">
                        <span class="badge bg-danger rounded-3 fw-semibold">High</span>
                      </div>
                    </td>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-0 fs-4">$12.8k</h6>
                    </td>
                  </tr>
                  <tr>
                    <td class="border-bottom-0"><h6 class="fw-semibold mb-0">4</h6></td>
                    <td class="border-bottom-0">
                        <h6 class="fw-semibold mb-1">Nirav Joshi</h6>
                        <span class="fw-normal">Frontend Engineer</span>
                    </td>
                    <td class="border-bottom-0">
                      <p class="mb-0 fw-normal">Hosting Press HTML</p>
                    </td>
                    <td class="border-bottom-0">
                      <div class="d-flex align-items-center gap-2">
                        <span class="badge bg-success rounded-3 fw-semibold">Critical</span>
                      </div>
                    </td>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-0 fs-4">$2.4k</h6>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
    {{-- <div class="row">
      <div class="col-sm-6 col-xl-3">
        <div class="card overflow-hidden rounded-2">
          <div class="position-relative">
            <a href="#"><img src="{{ asset('Admin/') }}/images/products/s4.jpg" class="card-img-top rounded-0" alt="..."></a>
            <a href="#" class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i class="ti ti-basket fs-4"></i></a>                      </div>
          <div class="card-body pt-3 p-4">
            <h6 class="fw-semibold fs-4">Boat Headphone</h6>
            <div class="d-flex align-items-center justify-content-between">
              <h6 class="fw-semibold fs-4 mb-0">$50 <span class="ms-2 fw-normal text-muted fs-3"><del>$65</del></span></h6>
              <ul class="list-unstyled d-flex align-items-center mb-0">
                <li><a class="me-1" href="#"><i class="ti ti-star text-warning"></i></a></li>
                <li><a class="me-1" href="#"><i class="ti ti-star text-warning"></i></a></li>
                <li><a class="me-1" href="#"><i class="ti ti-star text-warning"></i></a></li>
                <li><a class="me-1" href="#"><i class="ti ti-star text-warning"></i></a></li>
                <li><a class="" href="#"><i class="ti ti-star text-warning"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-xl-3">
        <div class="card overflow-hidden rounded-2">
          <div class="position-relative">
            <a href="#"><img src="{{ asset('Admin/') }}/images/products/s5.jpg" class="card-img-top rounded-0" alt="..."></a>
            <a href="#" class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i class="ti ti-basket fs-4"></i></a>                      </div>
          <div class="card-body pt-3 p-4">
            <h6 class="fw-semibold fs-4">MacBook Air Pro</h6>
            <div class="d-flex align-items-center justify-content-between">
              <h6 class="fw-semibold fs-4 mb-0">$650 <span class="ms-2 fw-normal text-muted fs-3"><del>$900</del></span></h6>
              <ul class="list-unstyled d-flex align-items-center mb-0">
                <li><a class="me-1" href="#"><i class="ti ti-star text-warning"></i></a></li>
                <li><a class="me-1" href="#"><i class="ti ti-star text-warning"></i></a></li>
                <li><a class="me-1" href="#"><i class="ti ti-star text-warning"></i></a></li>
                <li><a class="me-1" href="#"><i class="ti ti-star text-warning"></i></a></li>
                <li><a class="" href="#"><i class="ti ti-star text-warning"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-xl-3">
        <div class="card overflow-hidden rounded-2">
          <div class="position-relative">
            <a href="#"><img src="{{ asset('Admin/') }}/images/products/s7.jpg" class="card-img-top rounded-0" alt="..."></a>
            <a href="#" class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i class="ti ti-basket fs-4"></i></a>                      </div>
          <div class="card-body pt-3 p-4">
            <h6 class="fw-semibold fs-4">Red Valvet Dress</h6>
            <div class="d-flex align-items-center justify-content-between">
              <h6 class="fw-semibold fs-4 mb-0">$150 <span class="ms-2 fw-normal text-muted fs-3"><del>$200</del></span></h6>
              <ul class="list-unstyled d-flex align-items-center mb-0">
                <li><a class="me-1" href="#"><i class="ti ti-star text-warning"></i></a></li>
                <li><a class="me-1" href="#"><i class="ti ti-star text-warning"></i></a></li>
                <li><a class="me-1" href="#"><i class="ti ti-star text-warning"></i></a></li>
                <li><a class="me-1" href="#"><i class="ti ti-star text-warning"></i></a></li>
                <li><a class="" href="#"><i class="ti ti-star text-warning"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-xl-3">
        <div class="card overflow-hidden rounded-2">
          <div class="position-relative">
            <a href="#"><img src="{{ asset('Admin/') }}/images/products/s11.jpg" class="card-img-top rounded-0" alt="..."></a>
            <a href="#" class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i class="ti ti-basket fs-4"></i></a>                      </div>
          <div class="card-body pt-3 p-4">
            <h6 class="fw-semibold fs-4">Cute Soft Teddybear</h6>
            <div class="d-flex align-items-center justify-content-between">
              <h6 class="fw-semibold fs-4 mb-0">$285 <span class="ms-2 fw-normal text-muted fs-3"><del>$345</del></span></h6>
              <ul class="list-unstyled d-flex align-items-center mb-0">
                <li><a class="me-1" href="#"><i class="ti ti-star text-warning"></i></a></li>
                <li><a class="me-1" href="#"><i class="ti ti-star text-warning"></i></a></li>
                <li><a class="me-1" href="#"><i class="ti ti-star text-warning"></i></a></li>
                <li><a class="me-1" href="#"><i class="ti ti-star text-warning"></i></a></li>
                <li><a class="" href="#"><i class="ti ti-star text-warning"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
    <div class="py-6 px-6 text-center">
      <p class="mb-0 fs-4">Design and Developed by <a href="#" target="_blank" class="pe-1 text-primary text-decoration-underline">abc@gmail.com</a> Distributed by <a href="#">ThemeWagon</a></p>
    </div>
  </div>
{{-- </div> --}}
{{-- </div> --}}
<script src="{{ asset('Admin/') }}/libs/simplebar/dist/simplebar.js"></script>
<script src="{{ asset('Admin/') }}/libs/apexcharts/dist/apexcharts.min.js"></script>
<script src="{{ asset('Admin/') }}/js/dashboard.js"></script>
@endsection
