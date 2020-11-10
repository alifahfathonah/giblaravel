@php
    $isEdit = isset($data);
    $method = $isEdit ? method_field('PUT') : ''; 
    $route = $isEdit ? route('masters.jobs.update', $data->id) : route('masters.jobs.store');
@endphp

@extends('layouts.admin')

@if ($isEdit)
    
  @section('title', 'Master - Pekerjaan ~Edit')    

@else

  @section('title', 'Master - Pekerjaan ~Tambah')    
    
@endif

@section('data-color', 'bg-gradient-x-red-pink') 

@section('content')
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
          <div class="content-header-left col-md-4 col-12 mb-2">
            <h3 class="content-header-title">Pekerjaan</h3>
          </div>
          <div class="content-header-right col-md-8 col-12">
            <div class="breadcrumbs-top float-md-right">
              <div class="breadcrumb-wrapper mr-1">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item"><a href="{{ route('masters.jobs.index') }}">Pekerjaan</a>
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

                                    <div class="form-group">
                                        <label for="nameInput">Nama</label>
                                        <input type="text" id="nameInput" class="form-control round" placeholder="nama pekerjaan" name="name" value="{{ $isEdit ? $data->name : '' }}" required>
                                    </div>

                                </div>

                                <div class="form-actions">
                                    <a href="{{ route('masters.jobs.index') }}" class="btn btn-warning mr-1 text-white">
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