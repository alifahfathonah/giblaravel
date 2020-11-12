@extends('layouts.admin')

@section('title', 'Dashboard')    

@section('data-color', 'bg-chartbg')    

@section('content')
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before" style="height: 200px"></div>
        <div class="content-header row"></div>
        <div class="content-body">
          <!-- Chart -->
          <div class="row match-height">
              <div class="col-12">
                  <div class="">
                      <h1 style="padding-bottom: 40px;color: white;">PASKAS Data Member</h1>
                      {{-- <div id="gradient-line-chart1" class="height-250 GradientlineShadow1"></div> --}}
                  </div>
              </div>
          </div>
          <!-- Chart -->
          <!-- eCommerce statistic -->
          <div class="row">
              <a class="col-xl-4" href="{{ route('members.index') }}">
                  <div class="card pull-up ecom-card-1 bg-white">
                      <div class="card-content ecom-card2 height-180 jumlah-member-box">
                          <h5 class="text-muted danger position-absolute p-1">Jumlah Member</h5>
                          <div>
                              {{-- <i class="ft-users danger font-large-1 float-right p-1"></i> --}}
                          </div>
                            <div class="jumlah-member-icon-bg">
                                <i class="ft-users"></i>
                            </div>
                          <div class="jumlah-member-count-box">
                            <div>
                                <h1>{{ $users->count() }}</h1>
                                <span>members</span>
                            </div>
                          </div>
                      </div>
                  </div>
              </a>
              <a class="col-xl-8 col-md-12" href="#">
                  <div class="card pull-up ecom-card-1 bg-white">
                      <div class="card-content ecom-card2 height-180">
                          <h5 class="text-muted danger position-absolute p-1">Total Anggota Per-Divisi</h5>
                          <div>
                              <i class="ft-pie-chart danger font-large-1 float-right p-1"></i>
                          </div>
                      </div>
                  </div>
              </a>
          </div>
          <!--/ eCommerce statistic -->

          <div class="row">
              <div class="col-xl-4 col-lg-12">
                <div class="card">
                    <div class="card-header ">
                        <h4 class="card-title">Customer Stats</h4>
                        <a class="heading-elements-toggle">
                            <i class="la la-ellipsis-v font-medium-3"></i>
                        </a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li>
                                    <a data-action="reload">
                                        <i class="ft-rotate-cw"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="card-body text-center">
                            <div class="card-header pt-0 pb-0">
                                <p class="danger darken-2">Total Customers</p>
                                <h3 class="display-4 blue-grey lighten-2">14,962</h3>
                            </div>
                            <div class="card-content">
                                <div id="new-customers" class="height-150 donutShadow"></div>
                                <ul class="list-inline clearfix mt-2">
                                    <li>
                                        <h1 class="blue-grey lighten-2 text-bold-400">1465</h1>
                                        <span class="danger darken-2">
                                            <i class="ft-user"></i> Average New Customers</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
          </div>
          <!-- Statistics -->
          <div class="row match-height">
              <div class="col-12">
                  <div class="card">
                      <div class="card-header">
                          <h4 class="card-title">Member Baru</h4>
                          <a class="heading-elements-toggle">
                              <i class="fa fa-ellipsis font-medium-3"></i>
                          </a>
                          <div class="heading-elements">
                              <ul class="list-inline mb-0">
                                  <li>
                                      <a href={{ route('members.index') }}>
                                          <i class="ft-eye"></i>
                                      </a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                      <div class="card-content">
                          <div id="recent-buyers" class="media-list">
                              @foreach ($new_users as $user)
                                  <a href="{{ route('members.show', $user->id) }}" class="media border-0">
                                    <div class="media-left pr-1">
                                        <span class="avatar avatar-md">
                                            <img class="media-object rounded-circle" src="{{ $user->getUrlfriendlyAvatar() }}" alt="avatar">
                                            {{-- <img class="media-object rounded-circle" src="/chameleon/theme-assets/images/portrait/small/avatar-s-7.png" alt="Generic placeholder image"> --}}
                                            <i></i>
                                        </span>
                                    </div>
                                    <div class="media-body w-100">
                                        <span class="list-group-item-heading">{{ $user->name }}

                                        </span>
                                        <ul class="list-unstyled users-list m-0 float-right">
                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Product 1" class="avatar avatar-sm pull-up">
                                                <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="/chameleon/theme-assets/images/portfolio/portfolio-1.jpg"
                                                    alt="Avatar">
                                            </li>
                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Product 2" class="avatar avatar-sm pull-up">
                                                <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="/chameleon/theme-assets/images/portfolio/portfolio-2.jpg"
                                                    alt="Avatar">
                                            </li>
                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Product 3" class="avatar avatar-sm pull-up">
                                                <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="/chameleon/theme-assets/images/portfolio/portfolio-4.jpg"
                                                    alt="Avatar">
                                            </li>
                                        </ul>
                                        <p class="list-group-item-text mb-0">
                                            <span class="blue-grey lighten-2 font-small-3"> {{ $user->fullname }} </span>
                                        </p>
                                    </div>
                                </a>
                              @endforeach
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!--/ Statistics -->
        </div>
      </div>
    </div>
@endsection