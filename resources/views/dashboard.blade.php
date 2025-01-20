<x-app-layout>
<link rel="stylesheet" href="{{asset('build/assets/css/kaiadmin.min.css')}}">
    <!-- Fonts and icons -->
   <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["assets/css/fonts.min.css"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <!-- CSS Files -->

  
    

    <!-- CSS Just for demo purpose, don't include it in your project -->

  <style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}
@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}
.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}
</style><style type="text/css">.jqstooltip { position: absolute;left: 0px;
    top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;
    background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
    -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
    color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;
    padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style><style>
        @font-face {
            font-family: 'NotoSans_online_security'; 
            src: url(chrome-extension://llbcnfanfmjhpedaedhbcnpgeepdnnok/assets/fonts/noto-sans-regular.woff);
        }

        @font-face {
            font-family: 'NotoSans_medium_online_security'; 
            src: url(chrome-extension://llbcnfanfmjhpedaedhbcnpgeepdnnok/assets/fonts/noto-sans-medium.ttf);
        }

        @font-face {
            font-family: 'NotoSans_bold_online_security'; 
            src: url(chrome-extension://llbcnfanfmjhpedaedhbcnpgeepdnnok/assets/fonts/noto-sans-bold.woff);
        }

        @font-face {
            font-family: 'NotoSans_semibold_online_security'; 
            src: url(chrome-extension://llbcnfanfmjhpedaedhbcnpgeepdnnok/assets/fonts/noto-sans-semibold.ttf);
        }
        .nav-link{
font-size: 15px !important;
        }
    .icon-wrapper {
      width: 20px;
      height: 20px;
      display: inline-block;
    }
  </style>
</head>
  <body>
    

        <div class="container">
          <div class="page-inner">
          <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
              <div>
                <h3 class="fw-bold mb-3">{{$greetings}}, {{$first_name}}!</h3>
                <h6 class="op-7 mb-2">{{$login_at}}</h6>
              </div>
              <div class="ms-md-auto py-2 py-md-0 col-sm-6">
                <a href="#" class="btn btn-primary btn-round"><b>Balance:{{$credits_balance}} Credits</b></a>
              </div>
            </div>
            <div class="row flex-row h-auto">
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div class="icon-big text-center icon-primary bubble-shadow-small">
                        <i class="bi bi-briefcase"></i>
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                          <p class="card-category">Leads</p>
                          <h4 class="card-title">  {{$number_of_leads}}</h4>
                          <a href="/seller/dashboard/" class="pr-4 text-grey-200 hover-dark noline text-sm text-capitalize">View</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div class="icon-big text-center icon-success bubble-shadow-small">
                          <i class="bi bi-envelope-check-fill"></i>
                        </div>
                      </div>
                      
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                          <p class="card-category">Unread Leads</p>
                          <h4 class="card-title">{{$unread_leads}}</h4>
                          <a href="/seller/dashboard/" class="pr-4 text-grey-200 hover-dark noline text-sm text-capitalize">View</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> 

              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div class="icon-big text-center icon-info bubble-shadow-small">
                          <i class="bi bi-people"></i>
                          
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                          <p class="card-category">Responses</p>
                          <h4 class="card-title">  {{ $contacted_lead}}</h4>
                          <a href="/responses/" class="pr-4 text-grey-200 hover-dark noline text-sm text-capitalize">View</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div class="icon-big text-center icon-success bubble-shadow-small">
                        <i class="bi bi-hand-thumbs-up"></i>
                        </div>
                      </div>
                      
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                          <p class="card-category">Responses Hired</p>
                          <h4 class="card-title">{{$unread_leads}}</h4>
                          <a href="/seller/dashboard/" class="pr-4 text-grey-200 hover-dark noline text-sm text-capitalize">View</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
             
            </div>
            <div class="row flex-row h-auto">
              <div class="col-md-4">
                <div class="card card-primary card-round col sellerdash-col h-auto d-flex flex-column justify-content-between ">
                  <div class="card-header">
                    <div class="card-head-row">
                      <div class="card-title fw-bold float-end text-primary">
                      <div class="d-flex justify-content-between align-items-center flex-wrap">
          
            <div class=" mb-0  text-primary"><a <a href="/settings/">Profile Review</a></div>
        </div>
                        <div class="dropdown">
                          <button class="btn btn-sm btn-label-light dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Export
                          </button>
                          
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href=#">Something else here</a>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                    <hr>
                    <div class="card-category">Enhancing your profile is an excellent way to attract more customers.</div>
                  </div>
                
                  <div class="card-body pb-0">
                    <div class="mb-4 mt-2">
                      <h2>97%</h2>
                      <div class="progress" style="height:8px">
                <div class="progress-bar" role="progressbar" style="width: 97%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
                    </div>
                    <div class="pull-in"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                      <canvas id="dailySalesChart" width="506" height="150" style="display: block; width: 506px; height: 150px;" class="chartjs-render-monitor"></canvas>
                    </div>
                  </div>
                </div>
                <div class="card card-round">
                <div class="card-body pb-0">
                    <div class="card-title fw-bold float-end text-primary">Account Settings
                    <a href="/settings" class="text-grey-200 noline hover-dark ">
                                      
                                    </a>
                    </div>
                    <hr>
                    <p class="mb-2">Standard</p>
                 
                    <div class="flex-wrap category-list  ">
                                      
                                        <div class="card-title ">
                                        <i class="icon-big text-center icon-info bubble-shadow-small bi bi-person"></i>
                                         </div>
                                        <a href="/settings">
                            Upgrade to Pro
                          </a>
  
   
                          <div class="flex-wrap category-list  ">
                                     
                                     <div class="badge badge-pill border border-grey-100 text-grey-800 font-weight-normal text-xs p-2 mr-2 my-auto text-truncate mw-100">
                                           
                                         </div>
                                      
                                     </div>
                                 </div>
                             </div>
             </div>
                </div>
                
                <div class="col-md-4">
                <div class="card card-primary card-round col sellerdash-col h-auto d-flex flex-column justify-content-between ">
                  <div class="card-header">
                    <div class="card-head-row">
                    <div class="card-title fw-bold float-end text-primary">
                      <div class="d-flex justify-content-between align-items-center flex-wrap">
            <div class=" mb-0  text-primary"><a <a href="/settings/">Leads Settings</a></div>
           
        </div>
                  
                        <div class="dropdown">
                          <button class="btn btn-sm btn-label-light dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Export
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href=#">Something else here</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <hr>
                    <div class="card-category h1  float-end">List my services</div>
                  </div>
                  <div class="card-body pb-0">
                    <div class="mb-4 mt-2">
                    <div class="flex-wrap category-list  ">
                                        @foreach($latest_services_limited as $service)
                                        <div class="badge   text-xs    "><p class="border border-grey-100 text-grey-800 font-weight-normal my-auto mr-2 p-2 badge-pill  text-truncate">{{$service}} </p></div>
                                        @endforeach

                                        @if($service_badge>0)
                                         
                                        <div class="badge badge-pill border border-grey-100 text-grey-800 font-weight-normal text-xs p-2 mr-2 my-auto text-truncate mw-100">
                                               +{{$service_badge}}
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                  
                    <div class="pull-in"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                      <canvas id="dailySalesChart" width="506" height="150" style="display: block; width: 506px; height: 150px;" class="chartjs-render-monitor"></canvas>
                    </div>
                  </div>
                </div>
                <div class="card card-round">
                  <div class="card-body pb-0">
                    <div class="card-title fw-bold float-end text-primary">Location
                    <a href="/settings" class="text-grey-200 noline hover-dark ">
                                   
                                    </a>
                    </div>
                    <hr>
                    <p class="mb-2">You're attracting customers within</p>
                 
                    <div class="flex-wrap category-list  ">
                                      
                                        <div class="card-title ">
                                        <i class="icon-big text-center icon-info bubble-shadow-small bi bi-geo-alt-fill"></i>
                                          <p>{{$location}} </p></div>
                                       
                                        <div class="badge badge-pill border border-grey-100 text-grey-800 font-weight-normal text-xs p-2 mr-2 my-auto text-truncate mw-100">
                                              
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                </div>
                
                <div class="col-md-4">
                <div class="card card-primary card-round col sellerdash-col h-auto d-flex flex-column justify-content-between ">
                  <div class="card-header">
                    <div class="card-head-row">
                    <div class="card-title fw-bold float-end text-primary">
                      <div class="d-flex justify-content-between align-items-center flex-wrap">
            <div class=" mb-0  text-primary"><a <a href="/settings/">Ongoing Tasks</a></div>
           
        </div>
                        <div class="dropdown">
                          <button class="btn btn-sm btn-label-light dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Export
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href=#">Something else here</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <hr>
                    <div class="card-category">Current Tasks in Progress: <b>Building</b> </div>
                    <div class="card-category">Task Location: <b>Plumstead</b></div>
                    <div class="card-category">Task Description:<b> Builing a House</b></div>
                    <div class="card-category">Expected Completion:<b> 11/02/2025</b></div>
                  </div>
                  <hr>
                  <div class="card-body pb-0">
                    <div class="mb-4 mt-2">
                      <h2>Graph</h2>
                    </div>
                    <div class="pull-in"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                      <canvas id="dailySalesChart" width="506" height="150" style="display: block; width: 506px; height: 150px;" class="chartjs-render-monitor"></canvas>
                    </div>
                  </div>
                </div>
               
                  <div class="card card-round">
                  <div class="card-body pb-0">
                    <div class="card-title fw-bold float-end text-primary">
                    
                                    Help
                                   
                                    <hr>
                    </div>
                    <div class="text-dark-blue text-xs ml-2">
                                            <p class="text-left mb-3">
                                            Explore our <a class="text-nowrap text-dark-blue hover-light" href="/help"><u>Help Centre</u></a> for guidance and expert tips.
                                            </p>
                                            <p class="text-left mb-2">
                                                Email: <a class="text-dark-blue text-nowrap noline" href="mailto:support@fortai.com">fortai.com</a>
                                            </p>
                                            <p class="text-dark-blue mb-0">
                                                Call <a class="text-nowrap text-dark-blue" href="tel:+27612685933">86 331 2093</a>
                                            </p>
                                            <p class=" text-grey-400   mb-2">
                                                open Monday-Friday, 8:30am-5:30pm
                                            </p>
                                        </div>
                    <div class="flex-wrap category-list  ">
                                     
                                        <div class="badge badge-pill border border-grey-100 text-grey-800 font-weight-normal text-xs p-2 mr-2 my-auto text-truncate mw-100">
                                              
                                            </div>
                                         
                                        </div>
                                    </div>
                                </div>
                </div>
                </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                
          </div>
        </div>

        <footer class="footer">
          <div class="container-fluid d-flex justify-content-between">
            <nav class="pull-left">
              <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link" href="http://www.Fortai.com/">
                   Fortai
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"> Help </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"> Licenses </a>
                </li>
              </ul>
            </nav>
            <div class="copyright">
              2024, made with <i class="fa fa-heart heart text-danger"></i> by
              <a href="http://www.Fortai.com/">Fortai</a>
            </div>
            <div>
              Distributed by
              <a target="_blank" href="https://fortai.com/">Fortai</a>.
            </div>
          </div>
        </footer>
      </div>

      
    </div>
    <!--   Core JS Files   -->
   
    <script src="{{asset('build/assets/js/jquery-3.7.1.min.js.download')}}"></script>
    <script src="{{asset('build/assets/js/popper.min.js.download')}}"></script>
    <script src="{{asset('build/assets/js/bootstrap.min.js.download')}}"></script>
    <script src="{{asset('build/assets/js/jquery.scrollbar.min.js.download')}}"></script>
    <script src="{{asset('build/assets/js/chart.min.js.download')}}"></script>
    <script src="{{asset('build/assets/js/jquery.sparkline.min.js.download')}}"></script>
    <script src="{{asset('build/assets/js/circles.min.js.download')}}"></script>
    <script src="{{asset('build/assets/js/datatables.min.js.download')}}"></script>
    <script src="{{asset('build/assets/js/bootstrap-notify.min.js.download')}}"></script>
    <script src="{{asset('build/assets/js/jsvectormap.min.js.download')}}"></script>
    <script src="{{asset('build/assets/js/world.js.download')}}"></script>
    <script src="{{asset('build/assets/js/sweetalert.min.js.download')}}"></script>
    <script src="{{asset('build/assets/js/kaiadmin.min.js.download')}}"></script>
    <script src="{{asset('build/assets/js/setting-demo.js.download')}}"></script>
    <script src="{{asset('build/assets/js/demo.js.download')}}"></script>
    <script src="{{asset('build/assets/js/core/webfont.min.js')}}"></script>
    
   
    <script>
      $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#177dff",
        fillColor: "rgba(23, 125, 255, 0.14)",
      });

      $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#f3545d",
        fillColor: "rgba(243, 84, 93, .14)",
      });

      $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#ffa534",
        fillColor: "rgba(255, 165, 52, .14)",
      });
    </script>
  

<div class="jvm-tooltip"></div>
<div style="left: -1000px; overflow: scroll; position: absolute; top: -1000px; border: none; box-sizing: content-box; height: 200px; margin: 0px; padding: 0px; width: 200px;">
    <div style="border: none; box-sizing: content-box; height: 200px; margin: 0px; padding: 0px; width: 200px;"></div></div></body></html>

    </x-app-layout>