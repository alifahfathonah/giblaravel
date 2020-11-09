@extends('layouts.admin')

@section('title', 'Dashboard')    

@section('data-color', 'bg-gradient-x-purple-blue')    

@section('content')
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
          <div class="content-header-left col-md-4 col-12 mb-2">
            <h3 class="content-header-title">Charts</h3>
          </div>
          <div class="content-header-right col-md-8 col-12">
            <div class="breadcrumbs-top float-md-right">
              <div class="breadcrumb-wrapper mr-1">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item active">Members
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body">
          <div class="row match-height">
              <div class="col-12">
                  <div class="">
                        <a href="#" class="btn btn-lg btn-success my-3">
                            <i class="ft-plus" style="font-size: 1.3em;"></i> <span class="d-none d-lg-inline">Tambah Data </span>
                        </a>
                  </div>
              </div>
          </div>
          <div class="row match-height">
              <div class="col-12">
                  <div class="card">
                      <div class="card-header">
                          <h4 class="card-title">Title</h4>
                          <a class="heading-elements-toggle">
                              <i class="fa fa-ellipsis font-medium-3"></i>
                          </a>
                          <div class="heading-elements">
                              <ul class="list-inline mb-0">
                                  <li>
                                      <a href="#">
                                          <i class="ft-eye"></i>
                                      </a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                      <div class="card-content p-2">
                         
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Member Status</th>
                                        <th scope="col" class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($members as $data)
                                        <tr>
                                            <th>{{ $data->id }}</th>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->role }}</td>
                                            <td>{{ $data->member_status }}</td>
                                            <td class="text-right">
                                                <a href="" class="btn btn-sm btn-info"><i class="ft-eye"></i> <span class="d-none d-xl-inline">Preview</span></a>
                                                <a href="" class="btn btn-sm btn-warning"><i class="ft-edit"></i> <span class="d-none d-xl-inline">Edit</span></a>
                                                <a href="" class="btn btn-sm btn-danger"><i class="ft-trash-2"></i> <span class="d-none d-xl-inline">Delete</span></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        {{ $members->links() }}

                      </div>

                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>
@endsection