@php
    $isEdit = isset($data);
    $method = $isEdit ? method_field('PUT') : ''; 
    $route = $isEdit ? route('members.update', $data->id) : route('members.store');
@endphp

@extends('layouts.admin')

@if ($isEdit)
    
  @section('title', 'Master - Member ~Edit')    

@else

  @section('title', 'Master - Member ~Tambah')    
    
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
                                    <div class="col-12">
                                      <div class="form-group">
                                          <label for="fullnameInput">Nama Lengkap</label>
                                          <input type="text" id="fullnameInput" class="form-control round" placeholder="nama lengkap" name="fullname" value="{{ $isEdit ? $data->fullname : '' }}" required>
                                      </div>
                                    </div>

                                    <div class="col-6">
                                      <div class="form-group">
                                          <label for="nameInput">Nama Panggilan</label>
                                          <input type="text" id="nameInput" class="form-control round" placeholder="nama panggilan" name="name" value="{{ $isEdit ? $data->name : '' }}" required>
                                      </div>
                                    </div>
                                    
                                    <div class="col-6">
                                      <div class="form-group">
                                          <label for="emailInput">Email</label>
                                          <input type="text" id="emailInput" class="form-control round" placeholder="email" name="email" value="{{ $isEdit ? $data->email : '' }}" required>
                                      </div>
                                    </div>
                                    
                                    <div class="col-6">
                                      <div class="form-group">
                                          <label for="passwordInput">Password</label>
                                          <input type="text" id="passwordInput" class="form-control round" placeholder="password" name="password" required>
                                      </div>
                                    </div>
                                    
                                    {{-- <div class="col-6">
                                      <div class="form-group">
                                          <label for="passwordConfirmationInput">Konfirmasi Password</label>
                                          <input type="text" id="passwordConfirmationInput" class="form-control round" placeholder="konfirmasi password" required>
                                      </div>
                                    </div> --}}
                                    
                                    <div class="col-3">
                                      <div class="form-group skin skin-flat">
                                          <label for="roleInput">Role</label>
                                          <div class="iradio_flat-red">
                                            <input type="radio" name="input-radio-4" id="input-radio-15" class="iradio_flat-green">
                                            <label for="input-radio-15">MEMBER</label>
                                          </div>
                                          <div class="iradio_flat-red">
                                            <input type="radio" name="input-radio-4" id="input-radio-16" class="iradio_flat-green">
                                            <label for="input-radio-16">ADMIN</label>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="col-3">
                                      <div class="form-group skin skin-flat">
                                          <label for="roleInput">Jenis Kelamin</label>
                                          <div class="iradio_flat-red">
                                            <input type="radio" name="input-radio-4" id="input-radio-15" class="iradio_flat-green">
                                            <label for="input-radio-15">Laki - Laki</label>
                                          </div>
                                          <div class="iradio_flat-red">
                                            <input type="radio" name="input-radio-4" id="input-radio-16" class="iradio_flat-green">
                                            <label for="input-radio-16">Perempuan</label>
                                          </div>
                                          <div class="iradio_flat-red">
                                            <input type="radio" name="input-radio-4" id="input-radio-16" class="iradio_flat-green">
                                            <label for="input-radio-16">Lainnya</label>
                                          </div>
                                      </div>
                                    </div>
                                    
                                    <div class="col-6">
                                      <div class="form-group">
                                          <label for="phoneInput">Nomor HP</label>
                                          <input type="text" id="phoneInput" class="form-control round" placeholder="nomor hp" name="phone_number" value="{{ $isEdit ? $data->phone_number : '' }}" required>
                                      </div>
                                    </div>
                                    
                                    <div class="col-6">
                                      <div class="form-group">
                                          <label for="phoneInput">Nomor HP</label>
                                          <input type="text" id="phoneInput" class="form-control round" placeholder="nomor hp" name="phone_number" value="{{ $isEdit ? $data->phone_number : '' }}" required>
                                      </div>
                                    </div>

                                    <div class="col-6">
                                      <div class="form-group">
                                          <label for="placeOfBirthInput">Tempat Lahir</label>
                                          <input type="text" id="placeOfBirthInput" class="form-control round" placeholder="tempat lahir" name="place_of_birth" value="{{ $isEdit ? $data->place_of_birth : '' }}" required>
                                      </div>
                                    </div>

                                    <div class="col-6">
                                      <div class="form-group">
                                          <label for="dateOfBirthInput">Tanggal Lahir</label>
                                          <input type="date" id="dateOfBirthInput" class="form-control round" placeholder="Y-m-d" name="date_of_birth" value="{{ $isEdit ? $data->date_of_birth : '' }}" required>
                                      </div>
                                    </div>

                                    <div class="col-6">
                                      <div class="form-group">
                                          <label for="dateOfBirthInput">Marital Status</label>
                                          <select name="" id="" class="form-control round">
                                            <option value="">KAWIN</option>
                                          </select>
                                      </div>
                                    </div>
                                    <div class="col-6">
                                      <div class="form-group skin skin-flat">
                                          <label for="roleInput">Golongan Darah</label>
                                          <select name="" id="" class="form-control round">
                                            <option value="">A</option>
                                          </select>
                                      </div>
                                    </div>

                                    <div class="col-6">
                                      <div class="form-group">
                                          <label for="dateOfBirthInput">Provinsi</label>
                                          <select name="" id="" class="form-control round">
                                            <option value=""></option>
                                          </select>
                                      </div>
                                    </div>
                                    <div class="col-6">
                                      <div class="form-group skin skin-flat">
                                          <label for="roleInput">Kabupaten</label>
                                          <select name="" id="" class="form-control round">
                                            <option value=""></option>
                                          </select>
                                      </div>
                                    </div>
                                    
                                    <div class="col-12">
                                      <div class="form-group skin skin-flat">
                                          <label for="roleInput">Alamat Lengkap</label>
                                          <textarea class="form-control round" name="" id="" rows="7"></textarea>
                                      </div>
                                    </div>

                                    <div class="col-6">
                                      <div class="form-group skin skin-flat">
                                          <label for="roleInput">Pendidikan</label>
                                          <select name="" id="" class="form-control round">
                                            <option value="">S4</option>
                                          </select>
                                      </div>
                                    </div>
                                    <div class="col-6">
                                      <div class="form-group skin skin-flat">
                                          <label for="roleInput">Jurusan Pendidikan</label>
                                          <select name="" id="" class="form-control round">
                                            <option value="">Ilmu Teknologi</option>
                                          </select>
                                      </div>
                                    </div>

                                    <div class="col-6">
                                      <div class="form-group skin skin-flat">
                                          <label for="roleInput">Pekerjaan Sekarang</label>
                                          <select name="" id="" class="form-control round">
                                            <option value="">Nanem Bayem</option>
                                          </select>
                                      </div>
                                    </div>

                                    <div class="col-6">
                                      <div class="form-group skin skin-flat">
                                          <label for="roleInput">Peminatan</label>
                                          <select name="" id="" class="form-control round">
                                            <option value="">Editor</option>
                                          </select>
                                      </div>
                                    </div>

                                    <div class="col-6">
                                      <div class="form-group skin skin-flat">
                                          <label for="roleInput">Divisi</label>
                                          <select name="" id="" class="form-control round">
                                            <option value="">Divisi 1</option>
                                          </select>
                                      </div>
                                    </div>

                                    <div class="col-6">
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