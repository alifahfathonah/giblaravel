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
            <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Profile #{{ $data->id }}</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <div class="form-body">

                              @if ($data->fullname)
                                <div class="form-group">
                                    <label for="nameInput">Nama Panjang</label>
                                    <h1>{{ $data->fullname }}</h1>
                                </div>
                              @endif

                              <div class="form-group">
                                  <label for="nameInput">Nama Panggilan</label>
                                  <h1>{{ $data->name }}</h1>
                              </div>

                              <div class="form-group">
                                  <label for="nameInput">Email</label>
                                  <h1>{{ $data->email }}</h1>
                              </div>

                            </div>

                            <div class="form-actions">
                                <a href="{{ route('members.index') }}" class="btn btn-warning mr-1 text-white">
                                    <i class="ft-arrow-left"></i> Kembali
                                </a>
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