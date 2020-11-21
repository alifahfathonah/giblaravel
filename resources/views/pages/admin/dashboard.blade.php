@extends('layouts.admin')

@section('title', 'Dashboard')    

@push('after-link')
	
@endpush

@section('data-color', 'bg-chartbg')    

@section('content')
		<div class="app-content content">
			<div class="content-wrapper">
				<div class="content-wrapper-before" style="height: 200px"></div>
				<div class="content-header row"></div>
				<div class="content-body">
					<div class="row match-height">
							<div class="col-12">
									<div class="">
											<h1 style="padding-bottom: 40px;color: white;">PASKAS Data Member</h1>
											{{-- <div id="gradient-line-chart1" class="height-250 GradientlineShadow1"></div> --}}
									</div>
							</div>
					</div>
					<div class="row">
							{{-- MemberCount --}}
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
							{{-- /MemberCount --}}
							{{-- MemberChart --}}
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
							{{-- /MemberChart --}}
					</div>

					<div class="row match-height">
							{{-- NewMember --}}
							<div class="col-xl-8">
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
																					<i class="ft-list"></i> 
																			</a>
																	</li>
															</ul>
													</div>
											</div>
											<div class="card-content">
													<div id="recent-buyers" class="media-list">
															@foreach ($new_users as $data)
																	<a href="{{ route('members.show', $data->id) }}" class="media border-0 new-member-hover">
																		<div class="d-flex w-100">
																			<div class="pr-2">
																				@if ($data->photo)
																						<div class="rounded-circle overflow-hidden custom-list-photo-member image-profile-in-detail-page" style="width: 45px;height: 45px;background-image: url({{ Storage::url($data->photo) }});"></div>
																				@else
																						<img src="{{ $data->getUrlfriendlyAvatar() }}" alt="{{ $data->name }}" class="media-object rounded-circle image-profile-in-detail-page" width="45">
																				@endif
																			</div>
																			<div class="w-100 row">
																				<div class="col-md-4">
																					<div class="row">
																						<div class="col-12">
																							<div class=""><strong>{{ $data->name }}</strong></div>
																						</div>
																						<hr>
																						<div class="col-12">
																							<div class=""><small><i>{{ $data->fullname }}</i></small></div>
																						</div>
																					</div>
																					<hr class="p-0 mb-0 d-block d-md-none">
																				</div>
																				<div class="col-md-4">
																					<div class="row">
																						<div class="col-12">
																							<div class="">{!! $data->gender ? $data->gender == 'L' ? 'Laki - Laki' : 'Perempuan' : '<span class="text-warning" style="font-size: 0.8em"><i class="ft-alert-circle"></i> belum isi data gender</span>' !!}</div>
																						</div>
																						<div class="col-12">
																							<small><i>
																								{!! $data->date_of_birth ? Carbon\Carbon::parse($data->date_of_birth)->age : '<span class="text-warning" style="font-size: 0.8em"><i class="ft-alert-circle"></i> belum isi data tanggal lahir</span>' !!}
																								{{ $data->date_of_birth ? 'Tahun' : null }}
																							</small></i>
																						</div>
																					</div>
																					<hr class="p-0 mb-0 d-block d-md-none">
																				</div>
																				<div class="col-md-4">
																					<div class="row">
																						<div class="col-12">
																							<div class="">{{ date('F', strToTime($data->created_at)) }}</div>
																						</div>
																						<div class="col-12">
																							{{ date('d - m - Y', strToTime($data->created_at)) }}
																						</div>
																					</div>
																				</div>
																			</div>
																			<div class="d-flex pr-2" style="align-items: center">
																				<i class="ft-eye eye-hover"></i>
																			</div>
																		</div>
																</a>
															@endforeach
													</div>
											</div>
									</div>
							</div>
					{{-- /NewMember --}}
					{{-- MemberDomisiliCount --}}
							<div class="col-xl-4">
								<div class="row">
									<div class="col-xl-12">
										<div class="card">
											<div class="card-header">
													<h4 class="card-title">Jumlah Member Pada Setiap Wilayah DIY</h4>
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
													<div class="media-list">
															@foreach ($DIY_cities as $data)
																@php $countUser = count(App\Models\User::where('regency_id', $data->id)->get() ) @endphp
																<a href="{{ $countUser > 0 ? route('members.show', $data->id) : '#' }}" class="media border-0 domisili-count-hover {{ $countUser == 0 ? 'null-member-domisili' : null }}">
																	<div class="row w-100">
																		<div class="col-6">
																			<span>{{ Str::title($data->name) }}</span>
																		</div>
																		<div class="col-6 text-right">
																			<span>{{ $countUser }}</span>
																		</div>
																	</div>
																</a>
															@endforeach
													</div>
											</div>
										</div>
									</div>
									<div class="col-xl-12">
									</div>
								</div>
									
							</div>
					 {{-- /MemberDomisiliCount --}}
					</div>
				</div>
			</div>
		</div>
@endsection