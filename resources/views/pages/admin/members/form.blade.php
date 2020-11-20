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

@push('after-link')
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/4.0.0/css/jasny-bootstrap.min.css">
@endpush

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
                            
                            <form class="form" id="locations" action="{{ $route }}" method="POST" enctype="multipart/form-data">
                                @csrf {{ $method }}
                                <div class="form-body">
                                  
                                  <div class="row">
                                    <div class="col-md-12">
                                      <div class="form-group">
                                          <label for="fullnameInput">Nama Lengkap</label>
                                          <input type="text" id="fullnameInput" class="form-control round" placeholder="nama lengkap" name="fullname" value="{{ $isEdit ? $data->fullname : 'Checking Check' }}" required>
                                      </div>
                                    </div>

                                    <div class="col-md-4">
                                      <div class="form-group">
                                          <label for="nameInput">Nama Panggilan</label>
                                          <input type="text" id="nameInput" class="form-control round" placeholder="nama panggilan" name="name" value="{{ $isEdit ? $data->name : 'Check' }}" required>
                                      </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                      <div class="form-group">
                                          <label for="emailInput">Email</label>
                                          <input type="email" id="emailInput" class="form-control round" placeholder="email" name="email" value="{{ $isEdit ? $data->email : 'check@gmail.com' }}" required>
                                      </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                      <div class="form-group">
                                          <label for="passwordInput">Password</label>
                                          <input type="password" id="passwordInput" class="form-control round" placeholder="password" name="password" {{ $isEdit ? null : 'required' }} value="">
                                      </div>
                                    </div>
                                    
                                    {{-- <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="passwordConfirmationInput">Konfirmasi Password</label>
                                          <input type="text" id="passwordConfirmationInput" class="form-control round" placeholder="konfirmasi password" required>
                                      </div>
                                    </div> --}}
                                    
                                    <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="phoneInput">Nomor HP</label>
                                          <input type="number" id="phoneInput" class="form-control round" placeholder="nomor hp" name="phone_number" value="{{ $isEdit ? $data->phone_number : '08522112314' }}">
                                      </div>
                                    </div>

                                    <div class="col-md-3">
                                      <div class="form-group skin skin-flat">
                                          <label for="roleInput">Role</label>
                                          <select name="role" id="roleInput" class="form-control round">
                                            <option value="MEMBER" {{ $isEdit ? $data->role == 'MEMBER' ? 'selected' : null : null }}>Member</option>
                                            <option value="ADMIN" {{ $isEdit ? $data->role == 'ADMIN' ? 'selected' : null : null }}>Admin</option>
                                          </select>
                                      </div>
                                    </div>
                                    <div class="col-md-3">
                                      <div class="form-group skin skin-flat">
                                          <label for="genderSelect">Jenis Kelamin</label>
                                          <select name="gender" id="genderSelect" class="form-control round">
                                            <option value=""><i>~ pilih jenis kelamin ~</i></option>
                                            <option value="L" {{ $isEdit ? $data->gender == 'L' ? 'selected' : null : null }}>Laki - Laki</option>
                                            <option value="P" {{ $isEdit ? $data->gender == 'P' ? 'selected' : null : null }}>Perempuan</option>
                                          </select>
                                      </div>
                                    </div>

                                    <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="placeOfBirthInput">Tempat Lahir</label>
                                          <input type="text" id="placeOfBirthInput" class="form-control round" placeholder="tempat lahir" name="place_of_birth" value="{{ $isEdit ? $data->place_of_birth : 'SEMARANG' }}" >
                                      </div>
                                    </div>

                                    <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="dateOfBirthInput">Tanggal Lahir</label>
                                          <input type="date" id="dateOfBirthInput" class="form-control round" placeholder="Y-m-d" name="date_of_birth" value="{{ $isEdit ? $data->date_of_birth : '2000-02-01' }}" >
                                      </div>
                                    </div>

                                    <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="maritalSelect">Status Perkawinan</label>
                                          <select name="marital_status" id="maritalSelect" class="form-control round">
                                            <option value=""><i>~ pilih status perkawinan ~</i></option>
                                            <option value="KAWIN" {{ $isEdit ? $data->marital_status == 'KAWIN' ? 'selected' : null : null }}>Kawin</option>
                                            <option value="BELUM_KAWIN" {{ $isEdit ? $data->marital_status == 'BELUM_KAWIN' ? 'selected' : null : null }}>Belum Kawin</option>
                                            <option value="CERAI_HIDUP" {{ $isEdit ? $data->marital_status == 'CERAI_HIDUP' ? 'selected' : null : null }}>Cerai Hidup</option>
                                            <option value="CERAI_MATI" {{ $isEdit ? $data->marital_status == 'CERAI_MATI' ? 'selected' : null : null }}>Cerai Mati</option>
                                          </select>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group skin skin-flat">
                                          <label for="bloodSelect">Golongan Darah</label>
                                          <select name="blood_type" id="bloodSelect" class="form-control round">
                                            <option value=""><i>~ pilih golongan darah ~</i></option>
                                            <option value="A" {{ $isEdit ? $data->blood_type == 'A' ? 'selected' : null : null }}>A</option>
                                            <option value="B" {{ $isEdit ? $data->blood_type == 'B' ? 'selected' : null : null }}>B</option>
                                            <option value="AB" {{ $isEdit ? $data->blood_type == 'AB' ? 'selected' : null : null }}>AB</option>
                                            <option value="O" {{ $isEdit ? $data->blood_type == 'O' ? 'selected' : null : null }}>O</option>
                                          </select>
                                      </div>
                                    </div>

                                    <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="province_id">Provinsi <span class="text-danger" style="font-size: 12px">*tempat menetap sekarang</span></label>
                                          <select name="province_id" id="province_id" class="form-control round" v-if="provinces" v-model="provinces_id">
                                            <option v-for="province in provinces" :value="province.id">@{{ province.name }}</option>                                                
                                          </select>
                                          <select v-else class="form-control round">
                                            <option value="">Gagal mengambil data</option>
                                          </select>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group skin skin-flat">
                                          <label for="regency_id">Kabupaten <span class="text-danger" style="font-size: 12px">*tempat menetap sekarang</span></label>
                                          <select name="regency_id" id="regency_id" class="form-control round" v-if="cities" v-model="cities_id">
                                            <option v-for="city in cities" :value="city.id">@{{ city.name }}</option>                                                
                                          </select>
                                          <select v-else class="form-control round">
                                            <option value="">Gagal mengambil data</option>
                                          </select>
                                      </div>
                                    </div>
                                    
                                    <div class="col-md-12">
                                      <div class="form-group skin skin-flat">
                                          <label for="addressArea">Alamat Lengkap</label>
                                          <textarea class="form-control round" name="address" id="addressArea" rows="7">Jalan Jalan</textarea>
                                      </div>
                                    </div>

                                    <div class="col-md-6">
                                      <div class="form-group skin skin-flat">
                                          <label for="graduateSelect">Pendidikan</label>
                                          <select name="graduate_id" id="graduateSelect" class="form-control round">
                                            <option value=""><i>~ pilih pendidikan terakhir ~</i></option>
                                            @foreach ($graduates as $graduate)
                                              <option value="{{ $graduate->id }}">{{ $graduate->name }}</option>                                                
                                            @endforeach
                                          </select>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group skin skin-flat">
                                          <label for="majorSelect">Jurusan Pendidikan</label>
                                          <select name="major_id" id="majorSelect" class="form-control round">
                                            <option value=""><i>~ pilih jurusan pendidikan terakhir ~</i></option>
                                            @foreach ($majors as $major)
                                              <option value="{{ $major->id }}">{{ $major->name }}</option>                                                
                                            @endforeach
                                          </select>
                                      </div>
                                    </div>

                                    <div class="col-md-6">
                                      <div class="form-group skin skin-flat">
                                          <label for="jobSelect">Pekerjaan Sekarang</label>
                                          <select name="job_id" id="jobSelect" class="form-control round">
                                            <option value=""><i>~ pilih pekerjaan sekarang ~</i></option>
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
                                            <option value=""><i>~ pilih minat dalam bidang apa ~</i></option>
                                            @foreach ($specializations as $specialization)
                                              <option value="{{ $specialization->id }}">{{ $specialization->name }}</option>                                                
                                            @endforeach
                                          </select>
                                      </div>
                                    </div>

                                    <div class="col-xl-6">
                                      <div class="row">
                                        
                                        <div class="col-12">
                                          <div class="form-group skin skin-flat">
                                              <label for="divisionSelect">Divisi</label>
                                              <select name="division_id" id="divisionSelect" class="form-control round">
                                                <option value=""><i>~ pilih divisi ~</i></option>
                                                @foreach ($divisions as $divisi)
                                                  <option value="{{ $divisi->id }}">{{ $divisi->name }}</option>                                                
                                                @endforeach
                                              </select>
                                          </div>
                                        </div>

                                        <div class="col-md-12">
                                          <div class="form-group">
                                              <label for="amanahSelect">Amanah</label>
                                              <div class="row p-2">
                                                @foreach ($amanahs as $amanah)
                                                  <label class="col-6 col-lg-4 col-xl-3 label-amanah-hover">
                                                    <input name="amanah_id[]" type="checkbox" class="mr-1 form-check-input" value="{{ $amanah->id }}" {{ $isEdit ? in_array($amanah->id, $selected_amanahs) ? 'checked' : null : null }}>
                                                    {{ $amanah->name }}
                                                  </label>
                                                @endforeach
                                              </div>
                                          </div>
                                        </div>
                                        
                                      </div>
                                    </div>
																		
																		@if ($isEdit)
																			@if ($data->photo)
																				<div class=" col-md-6">
																					<div class="form-group">
																						<label for="photoInput">Upload Foto Profil</label> 
																						<div data-provides="fileinput" class="fileinput form-control custom-upload-photo-box fileinput-exists">
																							<div data-trigger="fileinput" class="fileinput-preview img-thumbnail" style="width: 200px; height: 150px; line-height: 150px;">
																								<img src="{{ Storage::url($data->photo) }}">
																							</div> 
																							<div>
																								<span class="btn btn-outline-secondary btn-file">
																									<span class="fileinput-new">Select image</span> 
																									<span class="fileinput-exists">Change</span> 
																									<input type="hidden" value="" name="">
																									<input type="file" name="photo">
																								</span> 
																								<a href="#" data-dismiss="fileinput" class="btn btn-outline-secondary fileinput-exists">Remove</a>
																							</div>
																						</div>
																					</div>
																				</div>		
																			@else
																				<div class=" col-md-6">
																					<div class="form-group">
																						<label for="photoInput">Upload Foto Profil</label> 
																						<div data-provides="fileinput" class="fileinput form-control custom-upload-photo-box fileinput-exists">
																							<div data-trigger="fileinput" class="fileinput-preview img-thumbnail" style="width: 200px; height: 150px; line-height: 150px;">
																								<img src="{{ $data->getUrlfriendlyAvatar() }}" style="width: 100%">
																							</div> 
																							<div>
																								<span class="btn btn-outline-secondary btn-file">
																									<span class="fileinput-new">Select image</span> 
																									<span class="fileinput-exists">Change</span> 
																									<input type="hidden" value="" name="">
																									<input type="file" name="photo">
																								</span> 
																								<a href="#" data-dismiss="fileinput" class="btn btn-outline-secondary fileinput-exists">Remove</a>
																							</div>
																						</div>
																					</div>
																				</div>		
																			@endif
																		@else
																			<div class=" col-md-6">
																				<div class="form-group">
																						<label for="photoInput">Upload Foto Profil</label>
																						<div class="fileinput fileinput-new form-control custom-upload-photo-box" data-provides="fileinput">
																							<div class="fileinput-preview img-thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
																							<div>
																								<span class="btn btn-outline-secondary btn-file">
																									<span class="fileinput-new">Select image</span>
																									<span class="fileinput-exists">Change</span>
																									<input type="file" name="photo">
																								</span>
																								<a href="#" class="btn btn-outline-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
																							</div>
																						</div>
																				</div>
																			</div>
																		@endif

                                  </div>

                                </div>

                                <div class="form-actions button-on-bottom">
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

@push('after-script')
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>
<script src="https://unpkg.com/vue-toasted"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
  var locations = new Vue({
    el: "#locations",
    mounted() {
      this.getProvincesData();
      this.getCitiesData();
    },
    data: {
      provinces: null,
      cities: null,
      provinces_id: '{{ $isEdit ? $data->province_id : null }}',
      cities_id: '{{ $isEdit ? $data->regency_id : null }}',
    },
    methods: {
      getProvincesData() {
        var self = this;
        axios.get('{{ route("api-provinces") }}')
          .then(function(response){
            self.provinces = response.data;
          });
      },
      getCitiesData() {
        var self = this;
        axios.get('{{ url("api/cities") }}/' + self.provinces_id)
          .then(function(response){
            self.cities = response.data;
          });
      },
    },
    watch: {
      provinces_id: function(val, oldval) {
        this.cities_id = null;
        this.getCitiesData();
      }
    }
  });
</script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/4.0.0/js/jasny-bootstrap.min.js"></script>
@endpush