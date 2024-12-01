
<x-customernav>
    <link rel="stylesheet" href="{{asset('build/assets/css/main_v2-built.645e5822f3.v2.css')}}">
    
    <!-- Marquee Section -->
    <div class="marquee-wrapper">
        <div class="marquee">
            <p>"Welcome to your dashboard! 🌟 We're here to make your experience seamless and efficient. Keep exploring, and don't forget to check out new features and updates tailored just for you!</p>
        </div>
    </div>

<link rel="stylesheet" href="{{asset('build/assets/css/main_v2-built.645e5822f3.v2.css')}}">
    <!-- Loading Overlay -->
    <div class="v2-loading-overlay">
        <div class="loading-box fade show mx-auto">
            <div class="d-flex flex-column py-4 align-items-center">
                <div class="spinner-border text-primary" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                <h4 class="loading-text pt-2">
                    Please wait ...
                </h4>
            </div>
        </div>
    </div>

    <!-- Main Content Wrapper -->
    <div class="full-width-wrapper full-height-with-header bg-light-grey">
        <div id="__rctBuyerPlist">
            <div class="" id="app" style="background-color: rgb(249, 249, 250);">
                <div class="container tw-mx-auto">
                    <!-- Header Section -->
                    <div class="pb-4">
                        <div class="top-row_root__3JOm6">
                            <h1>Your requests</h1>
                            <button class="Button_base__iY8s5 Button_lg__GH03D Button_minWidth__2dpSx Button_textBlue__796NH Button_bgLightBlue__0RMHv __btnPlaceRequest tw-border-0">
                                <span class="button-main">
                                    <span class="child-container Button_childContainer__ytwFQ">
                                    <a href="{{ route('createrequests') }}" class="text-gray">Place new request</a>
                                    </span>
                                </span>
                            </button>
                        </div>
                    </div>

                    <!-- Project List Section -->
                    
                    <div class="mb-4">
                        <div class="projectlistContainer" id="app">
                            <div data-testid="project_list" class="tw-flex tw-flex-row tw-grid sm:tw-grid-cols-1 md:tw-grid-cols-2 tw-gap-4">
                                <!-- Project List Item 1 -->
                                

                                <!-- Project List Item 2 -->
                                 @forelse ($user_leads as $lead)
                                <div data-cy="projectListItem" class="projectlist_item_projectListItem__+529Q tw-text-center tw-items-center tw-flex tw-flex-col tw-p-4 tw-shadow-md tw-bg-white tw-rounded tw-p-3">
                                    <h3 data-testid="_plistProjectLink" class="tw-pt-2 tw-text-center tw-cursor-pointer">
                                        {{$lead["service_name"]}}
                                    </h3>
                                    <p class="tw-text-center tw-text-sm tw-mb-4 tw-mt-1 tw-text-gray-400">
                                       {{$lead["date_entered"]}}
                                    </p>
                                    <div class="tw-flex tw-flex-col tw-grow tw-w-full">
                                        <div class="tw-pl-4 tw-pr-4">
                                            <div class="tw-flex tw-justify-center tw-mt-2 tw-mb-4">
                                                <div style="position: relative; width: 90px; height: 90px; display: flex; align-items: center; justify-content: center;">
                                                    <div style="width: 90px; height: 90px; background-color: #2D7AF1; opacity: 0.15; border-radius: 50%; position: absolute;"></div>
                                                    <i class="bi bi-check-circle-fill" style="font-size: 45px; color: purple;"></i>
                                                </div>
                                            </div>
                                            <p class="projectlist_item_text-grey-600__bDXRq tw-text-center tw-mb-3">
                                                We've got professionals ready and available!
                                            </p>
                                        </div>
                                    </div>
                                    <div class="tw-mt-3 tw-mb-2 tw-text-center">
                                        <a href="/customer/expertview/" data-testid="btn-viewquote" class="projectlist_item_linkButton__p+KBq tw-no-underline tw-drop-shadow-md tw-rounded tw-p-2 tw-text-white">
                                            View professionals
                                        </a>
                                    </div>
                                    <div class="actionsWrapper tw-pb-3 tw-mt-4 tw-items-center tw-text-center tw-text-sm">
                                        <a data-cy="btn_close_request" class="projectlist_item_link__eqrNt tw-pr-2">
                                            Close request
                                        </a>
                                        |
                                        <a data-cy="btn_hired" class="projectlist_item_link__eqrNt tw-pl-2">
                                            I hired someone
                                        </a>
                                    </div>
                                </div>
                                @empty
                                                 <h3>No Leads</h3>
                               @endforelse
                            </div>
                        </div>
                    </div>
     
                    <div class="pt-3">
                        <div class="__buyerNextBarkContainer">
                            <div class="all_pt-3__89f4A">
                                <div class="all_col-12__aAzEV all_mx-auto__ERNKZ all_pb-3__oPpO6">
                            <div class="all_d-flex__WrxK8 all_align-items-center__KVHPQ">
                                <h2>
                                 You may also need
                                </h2>
                                <div class="page-buttons all_d-flex__WrxK8 all_mt-2__B9L78 all_mt-md-0__hdzCb bark-carousel-buttons">
                                    <div class="all_d-none__gqjAc all_d-md-flex__kchcM">
                                        <div data-testid="btnPrev" data-cy="carousel-page-btn" data-cy-enabled="false" class="all_carousel-page-button__zlGq- all_border__2wTAl all_d-flex__WrxK8 all_justify-content-center__T3UG3 all_align-items-center__KVHPQ all_me-2__SToMN cursor-pointer all_disabled__01ag6">
                                            <img class="all_img-fluid__FB1iK" alt="left arrow" width="15" height="14" title="left arrow" src="https://development-bark-static.s3-eu-west-2.amazonaws.com/s/img/frontend-v2/icons/directory-v3/back.png!d=xgKUK">
                                        </div>
                                        <div data-testid="btnNext" data-cy="carousel-page-btn" data-cy-enabled="true" class="all_carousel-page-button__zlGq- all_border__2wTAl all_d-flex__WrxK8 all_justify-content-center__T3UG3 all_align-items-center__KVHPQ all_me-2__SToMN cursor-pointer ">
                                            <img class="all_img-fluid__FB1iK" alt="right arrow" width="15" height="14" title="right arrow" src="https://development-bark-static.s3-eu-west-2.amazonaws.com/s/img/frontend-v2/icons/directory-v3/forward.png!d=xgKUK">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="all_col-12__aAzEV all_mx-auto__ERNKZ">
                        <div class="all_row__thMJD all_flex-nowrap__b4Fi6 all_carousel-row__PGcKn all_d-md-flex__kchcM" id="next-bark-carousel">
                            <div class="all_col-4__Sc7Yb all_col-lg-3__fRtDD all_bark-carousel-item__k3eDJ " style="transform: translateX(0%);">
                                <div class="cursor-pointer category-link all_d-flex__WrxK8 all_flex-column__5eyyf all_h-100__3DMxF" data-category-id="35" data-bark-mode="bnb-project-dash">
                                    <div class="all_overflow-hidden__jfaju all_rounded-top__Lvd5h">
                                        <img class="all_img-fluid__FB1iK all_rounded-top__Lvd5h all_scale-image__1X-4- all_object-fit-cover__ZMOnA" src="https://d1vbfnp4jhzk1f.cloudfront.net/s/modal-thumbnail/35-1479228507889087712.png!d=72Qsoe" alt="General Builders">
                                    </div>
                                    <div class="all_border__2wTAl all_br-bottom__Y6N-k all_flex-grow-1__izlZH">
                                        <p class="all_mb-0__hrCwX all_p-3__wnB5p all_text-grey-600__UN2jF">
                                            General Builders
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="all_col-4__Sc7Yb all_col-lg-3__fRtDD all_bark-carousel-item__k3eDJ " style="transform: translateX(0%);">
                                <div class="cursor-pointer category-link all_d-flex__WrxK8 all_flex-column__5eyyf all_h-100__3DMxF" data-category-id="1212" data-bark-mode="bnb-project-dash">
                                    <div class="all_overflow-hidden__jfaju all_rounded-top__Lvd5h">
                                        <img class="all_img-fluid__FB1iK all_rounded-top__Lvd5h all_scale-image__1X-4- all_object-fit-cover__ZMOnA" src="https://d1vbfnp4jhzk1f.cloudfront.net/s/modal-thumbnail/1212-15656972151119486286.png!d=72Qsoe" alt="House Cleaning">
                                    </div>
                                    <div class="all_border__2wTAl all_br-bottom__Y6N-k all_flex-grow-1__izlZH">
                                        <p class="all_mb-0__hrCwX all_p-3__wnB5p all_text-grey-600__UN2jF">
                                            House Cleaning
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="all_col-4__Sc7Yb all_col-lg-3__fRtDD all_bark-carousel-item__k3eDJ " style="transform: translateX(0%);">
                                <div class="cursor-pointer category-link all_d-flex__WrxK8 all_flex-column__5eyyf all_h-100__3DMxF" data-category-id="1119" data-bark-mode="bnb-project-dash">
                                    <div class="all_overflow-hidden__jfaju all_rounded-top__Lvd5h">
                                        <img class="all_img-fluid__FB1iK all_rounded-top__Lvd5h all_scale-image__1X-4- all_object-fit-cover__ZMOnA" src="https://d1vbfnp4jhzk1f.cloudfront.net/s/modal_thumbnail_1119.jpg!d=72Qsoe" alt="Solar Panel Installation">
                                    </div>
                                    <div class="all_border__2wTAl all_br-bottom__Y6N-k all_flex-grow-1__izlZH">
                                        <p class="all_mb-0__hrCwX all_p-3__wnB5p all_text-grey-600__UN2jF">
                                            Solar Panel Installation
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="all_col-4__Sc7Yb all_col-lg-3__fRtDD all_bark-carousel-item__k3eDJ " style="transform: translateX(0%);">
                                <div class="cursor-pointer category-link all_d-flex__WrxK8 all_flex-column__5eyyf all_h-100__3DMxF" data-category-id="132" data-bark-mode="bnb-project-dash">
                                    <div class="all_overflow-hidden__jfaju all_rounded-top__Lvd5h">
                                        <img class="all_img-fluid__FB1iK all_rounded-top__Lvd5h all_scale-image__1X-4- all_object-fit-cover__ZMOnA" src="https://d1vbfnp4jhzk1f.cloudfront.net/s/modal_thumbnail_132.jpg!d=72Qsoe" alt="Moving Companies">
                                    </div>
                                    <div class="all_border__2wTAl all_br-bottom__Y6N-k all_flex-grow-1__izlZH">
                                        <p class="all_mb-0__hrCwX all_p-3__wnB5p all_text-grey-600__UN2jF">
                                            Moving Companies
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group js-init-new-bark-category-container">
                            <label for="initiate-new-bark-category">
                                What service do you need?
                            </label>
                            <input type="text" id="initiate-new-bark-category" placeholder="e.g. Personal Trainers, House Cleaning" autocomplete="off" class="form-control">
                        </div>
                        <div class="form-group js-init-new-bark-location-container">
                            <label for="initiate-new-bark-location">
                                Where do you need it?
                            </label>
                            <input type="text" id="initiate-new-bark-location" placeholder="Enter your postal code or town" autocomplete="off" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer px-4 justify-content-center pt-0">
                        <span class="btn btn-primary px-5 py-2 js-init-new-bark-begin">
                            Continue
                        </span>
                    </div>
                </div>
            </div>
        </div>
      


        <link rel="stylesheet" href="https://frontend-production.bark.com/129-0se7csjog8dvde6g/nrf-script/main.a634a7f188799b03.css">
        <link rel="stylesheet" href="https://frontend-production.bark.com/129-0se7csjog8dvde6g/nrf-script/363.24d653c081db1000.css">
        <link rel="stylesheet" href="https://frontend-production.bark.com/129-0se7csjog8dvde6g/nrf-script/702.f9315afa538250b2.css">
        <link onerror="window?.fallbackOnError?.call(this, `react_buyer_dashboard`);" rel="stylesheet" href="https://frontend-production.bark.com/130-o4zypk38cb99vdge/buyer-dashboard/styles.801bdd1ca194c698.css">
        <link onerror="window?.fallbackOnError?.call(this, `react_buyer_dashboard`);" rel="stylesheet" href="https://frontend-production.bark.com/130-o4zypk38cb99vdge/buyer-dashboard/main.d247f3888acfd52b.css">
        


    </div>
    </x-customernav>

<!-- Add CSS for the Marquee -->
<style>
    .marquee-wrapper {
        background-color: #f8f9fa;
        overflow: hidden;
        white-space: nowrap;
        width: 100%;
        border: 1px solid #ccc;
    }
    .marquee {
        display: inline-block;
        animation: marquee 40s linear infinite;
        font-size: 20px;
        padding: 10px 0;
        color: purple;
    }
    @keyframes marquee {
        from {
            transform: translateX(100%);
        }
        to {
            transform: translateX(-100%);
        }
    }
</style>
