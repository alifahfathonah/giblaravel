@extends('layouts.app')

@section('title', 'Dashboard')    

@section('data-color', 'bg-gradient-x-purple-blue')    

@section('content')
          <!-- Chart -->
          <!-- Chart -->
          <!-- eCommerce statistic -->
          <div class="row">
              <div class="col-xl-4 col-lg-6 col-md-12">
                  <div class="card pull-up ecom-card-1 bg-white">
                      <div class="card-content ecom-card2 height-180">
                          <h5 class="text-muted danger position-absolute p-1">Jumlah Member</h5>
                          <div>
                              <i class="ft-users danger font-large-1 float-right p-1"></i>
                          </div>
                          <div class="ct-golden-section height-75 position-relative pt-3  ">
                            <h1>2</h1>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!--/ eCommerce statistic -->

          <!-- Statistics -->
          <div class="row match-height">
              <div class="col-xl-4 col-lg-12">
                  <div class="card">
                      <div class="card-header">
                          <h4 class="card-title">Member Baru</h4>
                          <a class="heading-elements-toggle">
                              <i class="fa fa-ellipsis font-medium-3"></i>
                          </a>
                          <div class="heading-elements">
                              <ul class="list-inline mb-0">
                                  <li>
                                      <a data-action="reload">
                                          <i class="ft-user"></i>
                                      </a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                      <div class="card-content">
                          <div id="recent-buyers" class="media-list">
                              <a href="#" class="media border-0">
                                  <div class="media-left pr-1">
                                      <span class="avatar avatar-md avatar-online">
                                          <img class="media-object rounded-circle" src="/chameleon/theme-assets/images/portrait/small/avatar-s-7.png" alt="Generic placeholder image">
                                          <i></i>
                                      </span>
                                  </div>
                                  <div class="media-body w-100">
                                      <span class="list-group-item-heading">Kristopher Candy

                                      </span>
                                      <ul class="list-unstyled users-list m-0 float-right">
                                          <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Product 1" class="avatar avatar-sm pull-up">
                                              <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="/chameleon/theme-assets/images/portfolio/portfolio-1.jpg"
                                                  alt="Avatar">
                                          </li>
                                          <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Product 2" class="avatar avatar-sm pull-up">
                                              <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="/chameleon/theme-assets/images/portfolio/portfolio-2.jpg"
                                                  alt="Avatar">
                                          </li>
                                          <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Product 3" class="avatar avatar-sm pull-up">
                                              <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="/chameleon/theme-assets/images/portfolio/portfolio-4.jpg"
                                                  alt="Avatar">
                                          </li>
                                      </ul>
                                      <p class="list-group-item-text mb-0">
                                          <span class="blue-grey lighten-2 font-small-3"> #INV-12332 </span>
                                      </p>
                                  </div>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!--/ Statistics -->
@endsection