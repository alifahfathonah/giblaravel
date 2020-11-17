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
                              @foreach ($new_users as $data)
                                  <a href="{{ route('members.show', $data->id) }}" class="media border-0 new-member-hover">
                                    <table>
                                        <tr style="height: 60%">
                                            <td rowspan="2" style="padding-right: 17px">
                                                @if ($data->photo)
                                                    <div class="rounded-circle overflow-hidden custom-list-photo-member image-profile-in-detail-page" style="width: 45px;height: 45px;background-image: url({{ Storage::url($data->photo) }});"></div>
                                                @else
                                                    <img src="{{ $data->getUrlfriendlyAvatar() }}" alt="{{ $data->name }}" class="media-object rounded-circle image-profile-in-detail-page" width="45">
                                                @endif
                                            </td>
                                            <td style="width: 400px"><span class="new-member-heading">{{ $data->fullname }}</span></td>
                                            <td><span class="new-member-heading">{!! $data->gender ? $data->gender == 'L' ? 'Laki - Laki' : 'Perempuan' : '<span class="text-warning" style="font-size: 0.8em"><i class="ft-alert-circle"></i> belum isi data</span>' !!}</span></td>
                                        </tr>
                                        <tr style="height: 40%">
                                            <td><span class="new-member-secondary">Nama</span></td>
                                            <td><span class="new-member-secondary">Gender</span></td>
                                        </tr>
                                    </table>
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