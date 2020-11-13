@extends('layouts.admin')

@section('title', 'Member')    

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
                  <li class="breadcrumb-item active">List
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
                        <h4 class="card-title">List Data</h4>
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
                                
                                <a href="{{ route('members.create') }}" class="btn btn-md btn-primary">
                                    <i class="ft-plus" style="font-size: 1.3em;"></i> <span class="d-none d-lg-inline">Tambah Data</span>
                                </a>
                                
                                <a href="{{ route('members.view-trashed') }}" class="btn btn-md btn-info">
                                    <i class="ft-trash-2" style="font-size: 1.3em;"></i> <span class="d-none d-lg-inline">Lihat Data Sampah</span>
                                </a>

                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama Lengkap</th>
                                        <th scope="col">Nama Panggilan</th>
                                        <th scope="col" class="text-right">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @php $number=1 @endphp --}}
                                    @foreach ($datas as $data)
                                        <tr>
                                            <th scope="row">{{ $data->id }}</th>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->nickname }}</td>
                                            <td class="text-right">
                                                <a href="{{ route('members.show', $data->id) }}" class="btn btn-sm btn-info"><i class="ft-eye"></i> <span class="d-none d-xl-inline">Lihat</span></a>
                                                <a href="{{ route('members.edit', $data->id) }}" class="btn btn-sm btn-warning"><i class="ft-edit"></i> <span class="d-none d-xl-inline">Edit</span></a>
                                                
                                                <form action="{{ route('members.destroy', $data->id) }}" class="d-inline" method="POST">
                                                    @csrf @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger"><i class="ft-trash"></i> <span class="d-none d-xl-inline">Hapus</span></button>
                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-body">{{ $datas->links() }}</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Table head options end -->

        </div>
      </div>
    </div>
@endsection