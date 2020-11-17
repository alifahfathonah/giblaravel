@extends('layouts.admin')

@section('title', 'Member ~Detail')    

@section('data-color', 'bg-gradient-x-blue-cyan') 

@section('content')
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
          <div class="content-header-left col-md-4 col-12 mb-2">
            <h3 class="content-header-title">Member</h3>
          </div>
          <div class="content-header-right col-md-8 col-12">
            <div class="breadcrumbs-top float-md-right">
              <div class="breadcrumb-wrapper mr-1">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item"><a href="{{ route('members.index') }}">Member</a>
                  </li>
                  <li class="breadcrumb-item active">Detail Profil
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body">

        <!-- Table head options start -->
        <div class="row">

            <div class="col-xl-4 mb-3">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">ID #{{ $data->id }}</h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                  <div class="heading-elements">
                      <ul class="list-inline mb-0">
                          {{-- <li><a data-action="expand"><i class="ft-maximize"></i></a></li> --}}
                          <li><a href="{{ route('members.edit', $data->id) }}" class="text-warning"><i class="ft-edit"></i> Edit Profile</a></li>
                          <li>
                            <form action="{{ route('members.destroy', $data->id) }}" class="d-inline" method="POST">
                              @csrf @method('DELETE')
                              <button type="submit" class="text-danger" style="background: none;border: 0px;"><i class="ft-trash"></i> Delete Profile</button>
                            </form>
                          </li>
                      </ul>
                  </div>
                </div>
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    @if ($data->photo)
                      <div class="rounded-circle overflow-hidden custom-list-photo-member image-profile-in-detail-page" style="width: 300px;height: 300px;background-image: url({{ Storage::url($data->photo) }});">
                        <div class="h-100 w-100 photo-detail-tag-box">
                          <div class="button-detail-profile">
                            <a href="#" class="btn btn-warning"><i class="ft-edit"></i></a>
                            <a href="#" class="btn btn-danger"><i class="ft-x "></i></a>
                            <a href="{{ route('members.profile-photo-download', $data->id) }}" class="btn btn-info"><i class="ft-download "></i></a>
                          </div>
                          <div class="h-100 w-100 bg-black photo-detail-tag-bg"></div>
                        </div>
                      </div>
                    @else
                      <img src="{{ $data->getUrlfriendlyAvatar() }}" alt="{{ $data->name }}" class="rounded-circle" width="150">
                      <a href="#" class="btn btn-sm btn-info" style="position: absolute;transform: translateY(155px)"><i class="ft-edit"></i> Add Photo Profile</a>
                    @endif
                    <div class="@if ($data->photo) mt-3 @else mt-5 @endif">
                      <h4>{{ $data->fullname ? $data->fullname : $data->name }}</h4>
                      <p class="text-secondary mb-1">{{ $data->division_id ? $data->division->name : 'Belum Masuk Divisi' }}</p>
                      <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                      <button class="btn btn-primary">Follow</button>
                      <button class="btn btn-outline-primary">Message</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
                    <span class="text-secondary">https://bootdey.com</span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-xl-8">
              <div class="card">
                <div class="card-body">
                  
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nama Lengkap</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $data->fullname }}
                    </div>
                  </div>
                  <hr>
                  
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nama Panggilan</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $data->name }}
                    </div>
                  </div>
                  <hr>

                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $data->email }}
                    </div>
                  </div>
                  <hr>

                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nomor HP</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {!! $data->phone_number ?? '<span class="text-warning">belum isi data</span>' !!}
                    </div>
                  </div>
                  <hr>
                  
                  @if ($data->province_id)
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Provinsi</h6>
                      </div>
                      <div class="col-sm-3 text-secondary">
                        {{ $data->province_id }}
                      </div>
                    </div>
                    <hr>
                  @endif
                  
                  @if ($data->regency_id)
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Kabupaten / Kota</h6>
                      </div>
                      <div class="col-sm-3 text-secondary">
                        {{ $data->regency_id }}
                      </div>
                    </div>
                    <hr>
                  @endif

                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Alamat Lengkap</h6>
                    </div>
                    <div class="col-sm-3 text-secondary">
                      {!! $data->address ?? '<span class="text-warning">belum isi data</span>' !!}
                    </div>
                  </div>

                </div>
              </div>
              <div class="row gutters-sm">
                <div class="col-xl-6">
                  <div class="card">
                    <div class="card-body">

                      <div class="row">
                        <div class="col-sm-4">
                          <h6 class="mb-0">TTL</h6>
                        </div>
                        <div class="col-sm-8 text-secondary">
                          @if ($data->place_of_birth || $data->date_of_birth)
                            {{ $data->place_of_birth }}, {{ date('d F Y', strtotime($data->date_of_birth)) }}
                          @else
                            <span class="text-warning">belum isi data</span>
                          @endif
                        </div>
                      </div>
                      <hr>

                      <div class="row">
                        <div class="col-sm-4">
                          <h6 class="mb-0">Gender</h6>
                        </div>
                        <div class="col-sm-8 text-secondary">
                          {!! $data->gender ? $data->gender == 'L' ? 'Laki - Laki' : 'Perempuan' : '<span class="text-warning">belum isi data</span>' !!}
                        </div>
                      </div>
                      <hr>

                      <div class="row">
                        <div class="col-sm-4">
                          <h6 class="mb-0">Status Perkawinan</h6>
                        </div>
                        <div class="col-sm-8 text-secondary">
                          @if ($data->marital_status)
                            {{ $data->marital_status == 'BELUM_KAWIN' ? 'Solo Player' : null }}
                            {{ $data->marital_status == 'KAWIN' ? 'Sudah Laku' : null }}
                            {{ $data->marital_status == 'CERAI_HIDUP' ? 'Cerai Hidup' : null }}
                            {{ $data->marital_status == 'CERAI_MATI' ? 'Cerai Mati' : null }}
                          @else
                            <span class="text-warning">belum isi data</span>
                          @endif
                        </div>
                      </div>
                      <hr>

                      <div class="row">
                        <div class="col-sm-4">
                          <h6 class="mb-0">Golongan Darah</h6>
                        </div>
                        <div class="col-sm-8 text-secondary">
                          {!! $data->blood_type ?? '<span class="text-warning">belum isi data</span>' !!}
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <div class="col-xl-6">
                  <div class="card">
                    <div class="card-body">

                      <div class="row">
                        <div class="col-sm-6">
                          <h6 class="mb-0">Pendidikan Terakhir</h6>
                        </div>
                        <div class="col-sm-6 text-secondary">
                          @if ($data->graduate_id)
                            {{ $data->graduate->name }}
                          @else
                            <span class="text-warning">belum isi data</span>
                          @endif
                        </div>
                      </div>
                      <hr>

                      <div class="row">
                        <div class="col-sm-6">
                          <h6 class="mb-0">Jurusan Pendidikan</h6>
                        </div>
                        <div class="col-sm-6 text-secondary">
                          @if ($data->major_id)
                            {{ $data->major->name }}
                          @else
                            <span class="text-warning">belum isi data</span>
                          @endif
                        </div>
                      </div>
                      <hr>

                      <div class="row">
                        <div class="col-sm-6">
                          <h6 class="mb-0">Hobi</h6>
                        </div>
                        <div class="col-sm-6 text-secondary">
                          @if ($data->hobby)
                            {{ $data->hobby }}
                          @else
                            <span class="text-warning">belum isi data</span>
                          @endif
                        </div>
                      </div>
                      <hr>

                      <div class="row">
                        <div class="col-sm-6">
                          <h6 class="mb-0">Peminatan Kerja</h6>
                        </div>
                        <div class="col-sm-6 text-secondary">
                          @if ($data->specialization_id)
                            {{ $data->specialization->name }}
                          @else
                            <span class="text-warning">belum isi data</span>
                          @endif
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-body">

                   <div class="row">
                    <div class="col-sm-6">
                      <h6 class="mb-0">Tanggal Bergabung</h6>
                    </div>
                    <div class="col-sm-6 text-secondary">
                      @if ($data->created_at)
                        {{ date('dS F Y', strtotime($data->created_at)) }}
                      @else
                        <span class="text-warning">belum isi data</span>
                      @endif
                    </div>
                  </div>
                  <hr>

                   <div class="row">
                    <div class="col-sm-6">
                      <h6 class="mb-0">Divisi</h6>
                    </div>
                    <div class="col-sm-6 text-secondary">
                      @if ($data->division_id)
                        {{ $data->division->name }}
                      @else
                        <span class="text-warning">belum isi data</span>
                      @endif
                    </div>
                  </div>
                  <hr>

                   <div class="row">
                    <div class="col-sm-6">
                      <h6 class="mb-0">Amanah</h6>
                    </div>
                    <div class="col-sm-6 text-secondary">
                      @if ($data->amanah_id)
                        {{ $data->amanah->name }}
                      @else
                        <span class="text-warning">belum ada amanah</span>
                      @endif
                    </div>
                  </div>

                </div>
              </div>
            </div>
        </div>
        <!-- Table head options end -->

        </div>
      </div>
    </div>
@endsection