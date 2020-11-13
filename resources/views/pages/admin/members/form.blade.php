@php

    $divisions = App\Models\Master\Division::all();
    $specializations = App\Models\Master\Specialization::all();
    $jobs = App\Models\Master\Job::all();
    $graduates = App\Models\Master\Graduate::all();
    $majors = App\Models\Master\Major::all();
    $amanahs = App\Models\Master\Amanah::all();

    $provinces = DB::table('indonesia_provinces')->get();
    $cities = DB::table('indonesia_cities')->get();
    
    $isEdit = isset($data);
    $method = $isEdit ? method_field('PUT') : ''; 
    $route = $isEdit ? route('members.update', $data->id) : route('members.store');
@endphp

@extends('layouts.admin')

@if ($isEdit)
    
  @section('title', 'Member ~Edit')    

@else

  @section('title', 'Member ~Tambah')    
    
@endif

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
                  <li class="breadcrumb-item active">{{ $isEdit ? 'Edit' : 'Tambah' }}
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body">

        <!-- Table head options start -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">{{ $isEdit ? 'Edit' : 'Tambah' }} Data</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body">
                            
                            <form class="form" action="{{ $route }}" method="POST" enctype="multipart/form-data">
                                @csrf {{ $method }}
                                <div class="form-body">
                                  
                                  <div class="row">
                                    <div class="col-md-12">
                                      <div class="form-group">
                                          <label for="fullnameInput">Nama Lengkap</label>
                                          <input type="text" id="fullnameInput" class="form-control round" placeholder="nama lengkap" name="fullname" value="{{ $isEdit ? $data->fullname : '' }}" required>
                                      </div>
                                    </div>

                                    <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="nameInput">Nama Panggilan</label>
                                          <input type="text" id="nameInput" class="form-control round" placeholder="nama panggilan" name="name" value="{{ $isEdit ? $data->name : '' }}" required>
                                      </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="emailInput">Email</label>
                                          <input type="text" id="emailInput" class="form-control round" placeholder="email" name="email" value="{{ $isEdit ? $data->email : '' }}" required>
                                      </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="passwordInput">Password</label>
                                          <input type="text" id="passwordInput" class="form-control round" placeholder="password" name="password" required>
                                      </div>
                                    </div>
                                    
                                    {{-- <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="passwordConfirmationInput">Konfirmasi Password</label>
                                          <input type="text" id="passwordConfirmationInput" class="form-control round" placeholder="konfirmasi password" required>
                                      </div>
                                    </div> --}}
                                    
                                    <div class="col-md-3">
                                      <div class="form-group skin skin-flat">
                                          <label for="roleInput">Role</label>
                                          <select name="" id="" class="form-control round">
                                            <option value="MEMBER">Member</option>
                                            <option value="ADMIN">Admin</option>
                                          </select>
                                      </div>
                                    </div>
                                    <div class="col-md-3">
                                      <div class="form-group skin skin-flat">
                                          <label for="genderSelect">Jenis Kelamin</label>
                                          <select name="gender" id="genderSelect" class="form-control round">
                                            <option value="L">Laki - Laki</option>
                                            <option value="P">Perempuan</option>
                                          </select>
                                      </div>
                                    </div>
                                    
                                    <div class="col-md-12">
                                      <div class="form-group">
                                          <label for="phoneInput">Nomor HP</label>
                                          <input type="text" id="phoneInput" class="form-control round" placeholder="nomor hp" name="phone_number" value="{{ $isEdit ? $data->phone_number : '' }}" required>
                                      </div>
                                    </div>

                                    <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="placeOfBirthInput">Tempat Lahir</label>
                                          <input type="text" id="placeOfBirthInput" class="form-control round" placeholder="tempat lahir" name="place_of_birth" value="{{ $isEdit ? $data->place_of_birth : '' }}" required>
                                      </div>
                                    </div>

                                    <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="dateOfBirthInput">Tanggal Lahir</label>
                                          <input type="date" id="dateOfBirthInput" class="form-control round" placeholder="Y-m-d" name="date_of_birth" value="{{ $isEdit ? $data->date_of_birth : '' }}" required>
                                      </div>
                                    </div>

                                    <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="maritalSelect">Marital Status</label>
                                          <select name="marital_status" id="maritalSelect" class="form-control round">
                                            <option value="KAWIN">Kawin</option>
                                            <option value="BELUM_KAWIN">Belum Kawin</option>
                                            <option value="CERAI_HIDUP">Cerai Hidup</option>
                                            <option value="CERAI_MATI">Cerai Mati</option>
                                          </select>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group skin skin-flat">
                                          <label for="bloodSelect">Golongan Darah</label>
                                          <select name="blood_type" id="bloodSelect" class="form-control round">
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="AB">AB</option>
                                            <option value="O">O</option>
                                          </select>
                                      </div>
                                    </div>

                                    <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="dateOfBirthInput">Provinsi</label>
                                          <select name="graduate_id" id="graduateSelect" class="form-control round">
                                            @foreach ($provinces as $province)
                                              <option value="{{ $province->id }}">{{ $province->name }}</option>                                                
                                            @endforeach
                                          </select>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group skin skin-flat">
                                          <label for="roleInput">Kabupaten</label>
                                          <select name="graduate_id" id="graduateSelect" class="form-control round">
                                            @foreach ($cities as $city)
                                              <option value="{{ $city->id }}">{{ $city->name }}</option>                                                
                                            @endforeach
                                          </select>
                                      </div>
                                    </div>
                                    
                                    <div class="col-md-12">
                                      <div class="form-group skin skin-flat">
                                          <label for="roleInput">Alamat Lengkap</label>
                                          <textarea class="form-control round" name="" id="" rows="7"></textarea>
                                      </div>
                                    </div>

                                    <div class="col-md-4">
                                      <div class="form-group skin skin-flat">
                                          <label for="graduateSelect">Pendidikan</label>
                                          <select name="graduate_id" id="graduateSelect" class="form-control round">
                                            @foreach ($graduates as $graduate)
                                              <option value="{{ $graduate->id }}">{{ $graduate->name }}</option>                                                
                                            @endforeach
                                          </select>
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="form-group skin skin-flat">
                                          <label for="majorSelect">Jurusan Pendidikan</label>
                                          <select name="major_id" id="majorSelect" class="form-control round">
                                            @foreach ($majors as $major)
                                              <option value="{{ $major->id }}">{{ $major->name }}</option>                                                
                                            @endforeach
                                          </select>
                                      </div>
                                    </div>

                                    <div class="col-md-4">
                                      <div class="form-group skin skin-flat">
                                          <label for="jobSelect">Pekerjaan Sekarang</label>
                                          <select name="job_id" id="jobSelect" class="form-control round">
                                            @foreach ($jobs as $job)
                                              <option value="{{ $job->id }}">{{ $job->name }}</option>                                                
                                            @endforeach
                                          </select>
                                      </div>
                                    </div>

                                    <div class="col-md-6">
                                      <div class="form-group skin skin-flat">
                                          <label for="specializationSelect">Peminatan</label>
                                          <select name="specialization_id" id="specializationSelect" class="form-control round">
                                            @foreach ($specializations as $specialization)
                                              <option value="{{ $specialization->id }}">{{ $specialization->name }}</option>                                                
                                            @endforeach
                                          </select>
                                      </div>
                                    </div>

                                    <div class="col-md-6">
                                      <div class="form-group skin skin-flat">
                                          <label for="divisionSelect">Divisi</label>
                                          <select name="division_id" id="divisionSelect" class="form-control round">
                                            @foreach ($divisions as $divisi)
                                              <option value="{{ $divisi->id }}">{{ $divisi->name }}</option>                                                
                                            @endforeach
                                          </select>
                                      </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="amanahSelect">Amanah</label>
                                          <select name="amanah_id" id="amanahSelect" class="form-control round">
                                            @foreach ($amanahs as $amanah)
                                              <option value="{{ $amanah->id }}">{{ $amanah->name }}</option>                                                
                                            @endforeach
                                          </select>
                                      </div>
                                    </div>

                                    <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="placeOfBirthInput">Upload Foto Profil</label>
                                          <div class="custom-file">
                                            <input type="file" id="placeOfBirthInput" class="form-control round" placeholder="foto" name="place_of_birth" value="" required>
                                          </div>
                                      </div>
                                    </div>

                                  </div>

                                </div>

                                <div class="form-actions">
                                    <a href="{{ route('members.index') }}" class="btn btn-warning mr-1 text-white">
                                        <i class="ft-arrow-left"></i> Kembali
                                    </a>
                                    <button type="submit" class="btn btn-success">
                                        <i class="la la-check-square-o"></i> {{ $isEdit ? 'Confirm' : 'Submit' }}
                                    </button>
                                </div>
                            </form>

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