<x-app-layout>

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
</style></head>
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
            <div class="row">
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div class="icon-big text-center icon-primary bubble-shadow-small">
                        <i class="bi bi-graph-up"></i>
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
                        <div class="icon-big text-center icon-secondary bubble-shadow-small">
                          <i class="far fa-check-circle"></i>
                        </div>
                      </div>
                      
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                          <p class="card-category">Location</p>
                          <p class="card-category">You're receiving customers within</p>
                          <h4 class="card-title"> {{$location}}</h4>
                          <a href="/seller/dashboard/" class="pr-4 text-grey-200 hover-dark noline text-sm text-capitalize">View</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8">
                <div class="card card-round">
                  <div class="card-header">
                    <div class="card-head-row">
                      <div class="card-title">User Statistics</div>
                      <div class="card-tools">
                        <a href="#" class="btn btn-label-success btn-round btn-sm me-2">
                          <span class="btn-label">
                            <i class="fa fa-pencil"></i>
                          </span>
                          Export
                        </a>
                        <a href="#" class="btn btn-label-info btn-round btn-sm">
                          <span class="btn-label">
                            <i class="fa fa-print"></i>
                          </span>
                          Print
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="chart-container" style="min-height: 375px"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                      <canvas id="statisticsChart" width="1007" height="375" style="display: block; width: 1007px; height: 375px;" class="chartjs-render-monitor"></canvas>
                    </div>
                    <div id="myChartLegend"><ul class="0-legend html-legend"><li><span style="background-color:#f3545d"></span>Leads</li><li><span style="background-color:#fdaf4b"></span>Responses</li><li><span style="background-color:#177dff"></span>Active Users</li></ul></div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card card-primary card-round">
                  <div class="card-header">
                    <div class="card-head-row">
                      <div class="card-title">Daily Sales</div>
                      <div class="card-tools">
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
                    <div class="card-category">March 25 - April 02</div>
                  </div>
                  <div class="card-body pb-0">
                    <div class="mb-4 mt-2">
                      <h2>$4,578.58</h2>
                    </div>
                    <div class="pull-in"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                      <canvas id="dailySalesChart" width="506" height="150" style="display: block; width: 506px; height: 150px;" class="chartjs-render-monitor"></canvas>
                    </div>
                  </div>
                </div>
                <div class="card card-round">
                  <div class="card-body pb-0">
                    <div class="h1 fw-bold float-end text-primary">Services
                    <a href="/settings" class="text-grey-200 noline hover-dark text-xs">
                                        Edit
                                    </a>
                    </div>
                    <h2 class="mb-2">You'll receive leads in these categories</h2>
                 
                    <div class="flex-wrap category-list  ">
                                        @foreach($latest_services_limited as $service)
                                        <div class="text-muted badge badge-pill border border-grey-100 text-grey-800 font-weight-normal text-xs p-2 mr-2 my-auto text-truncate "><p>{{$service}} |</p></div>
                                        @endforeach

                                        @if($service_badge>0)
                                         
                                        <div class="badge badge-pill border border-grey-100 text-grey-800 font-weight-normal text-xs p-2 mr-2 my-auto text-truncate mw-100">
                                               +{{$service_badge}}
                                            </div>
                                            @endif
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