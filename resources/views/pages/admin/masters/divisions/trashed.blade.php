@extends('layouts.admin')

@section('title', 'Master - Divisi')    

@section('data-color', 'bg-gradient-x-red-pink') 

@section('content')
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
          <div class="content-header-left col-md-4 col-12 mb-2">
            <h3 class="content-header-title">Divisi</h3>
          </div>
          <div class="content-header-right col-md-8 col-12">
            <div class="breadcrumbs-top float-md-right">
              <div class="breadcrumb-wrapper mr-1">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item"><a href="{{ route('masters.divisions.index') }}">Divisi</a>
                  </li>
                  <li class="breadcrumb-item active">Sampah
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
                        <h4 class="card-title">List Data Sampah</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                


                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Bidang Minat</th>
                                        <th scope="col" class="text-right">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @php $number=1 @endphp --}}
                                    @foreach ($datas as $data)
                                        <tr>
                                            <th scope="row">{{ $data->id }}</th>
                                            <td>{{ $data->name }}</td>
                                            <td class="text-right">
                                                <a href="{{ route('masters.divisions.restore', $data->id) }}" class="btn btn-sm btn-success"><i class="ft-repeat"></i> <span class="d-none d-xl-inline">Restore</span></a>
                                                
                                                <form action="{{ route('masters.divisions.force-delete', $data->id) }}" class="d-inline" method="POST">
                                                    @csrf @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger"><i class="ft-trash"></i> <span class="d-none d-xl-inline">Hapus Permanent</span></button>
                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div>{{ $datas->links() }}</div>
                        <div class="card-body">
                            <a href="{{ route('masters.divisions.index') }}" class="btn btn-warning mr-1 text-white">
                                <i class="ft-arrow-left"></i> Kembali
                            </a>
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