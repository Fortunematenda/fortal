<!-- resources/views/customer/requests.blade.php -->
<x-app-layout>
    <div class="v2-loading-overlay">
        <div class="loading-box fade show mx-auto">
            <div class="d-flex flex-column py-4 align-items-center">
                <div class="spinner-border text-primary" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                <h4 class="loading-text pt-2">Please wait ...</h4>
            </div>
        </div>
    </div>

    <input id="enquiries-buyer-feedback-modal" value="1" type="hidden">
    <input id="ebb-enabled" value="1" type="hidden">
    <input id="marketplace-messaging-enabled" type="hidden" value="1">
    <input id="_project-id" type="hidden" value="44046720">

    <div id="__enquiries-modal"></div>
    <div id="callbacks-modal"></div>
    <div id="__request-reply-modal"></div>
    <div id="__rctSellerListContactOptions"></div>
    <div id="__rctSellerListSendMessage"></div>

    <iframe height="0" width="0" style="display: none; visibility: hidden;"></iframe>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.12/css/lightgallery.min.css">

    <div class="seller-public-profile-page has-back-to-quotes">
        <input value="G9avn" type="hidden" id="spidh-hv">
        <input value="mkZzVY" type="hidden" id="pidh-hv">
        <input type="hidden" name="bark_mode" id="bark_mode" value="seller-profile">

        <section id="top-section">
            <div>
                <div class="d-lg-flex">
                    <div class="d-none d-lg-block profile-left-bg">
                        <div class="row row-pro-sidesection h-100">
                            <style>
                                .requestReply { display: block; }
                                @media (max-width:600px) { .requestReply { display: none; } }
                            </style>

                            <div class="seller-public-profile-main-info-sect js-public-profile-main-info-sect p-sm-4 px-2 pb-4 pt-5 h-100">
                                <div class="position-sticky stickysidebar inprojectcontext">
                                    <div class="img-wrapper seller-avatar mb-4 pb-1">
                                        <div class="rounded-circle avatar-image-container d-inline-block position-relative elite-avatar">
                                            <img class="img-fluid rounded-circle loading" title="Real Connection Carpet Cleaning logo"
                                                itemprop="logo" alt="Real Connection Carpet Cleaning logo" width="140" height="140"
                                                src="https://d1k8hez1mxkuxw.cloudfront.net/s/avatar_v2/ELR6PM/logo/6669ba2973e39.png!d=Mw6FPX"
                                                srcset="https://d1k8hez1mxkuxw.cloudfront.net/s/avatar_v2/ELR6PM/logo/6669ba2973e39.png!d=Mw6FPX 1x, https://d1k8hez1mxkuxw.cloudfront.net/s/avatar_v2/ELR6PM/logo/6669ba2973e39.png!d=AnKhkl 2x" 
                                                data-was-processed="true">
                                            <div class="d-none no-image-avatar no-image-avatar-lg bg-cerulean text-white justify-content-center align-items-center">
                                                R
                                            </div>
                                        </div>
                                    </div>

                                    <p class="heading-text" data-edit-profile-link="general-information" data-edit-profile-link-class="al-p">
                                        Real Connection Carpet Cleaning
                                    </p>

                                    <div class="top-categories mb-3">
                                        <a class="badge badge-pill border border-grey-100 text-grey-600 font-weight-normal p-2 mt-1 text-truncate mw-100" href="/en/za/carpet-cleaning/">
                                            <span>Carpet Cleaning</span>
                                        </a>
                                        <a class="badge badge-pill border border-grey-100 text-grey-600 font-weight-normal p-2 mt-1 text-truncate mw-100" href="/en/za/deep-cleaning/">
                                            <span>Deep Cleaning Services</span>
                                        </a>
                                        <a class="badge badge-pill border border-grey-100 text-grey-600 font-weight-normal p-2 mt-1 text-truncate mw-100" href="/en/za/pest-control/">
                                            <span>Pest Control</span>
                                        </a>
                                        <a class="badge badge-pill badge-pill-initially-hidden border border-grey-100 text-grey-600 font-weight-normal p-2 mt-1 text-truncate mw-100" href="/en/za/upholstery-and-furniture-cleaning/">
                                            <span>Upholstery and Furniture Cleaning</span>
                                        </a>
                                        <a class="badge badge-pill category-showmore-btn js-category-showmore-btn border text-grey-600 font-weight-normal p-2 mt-1 text-truncate mw-100" href="#">
                                            <span>More...</span>
                                        </a>
                                        <a class="badge badge-pill badge-pill-initially-hidden border border-grey-100 text-grey-600 font-weight-normal p-2 mt-1 text-truncate mw-100" href="/en/za/commercial-cleaning/">
                                            <span>Commercial &amp; Office Cleaning</span>
                                        </a>
                                    </div>
                                    <div class="js-contact-button-row contact-button-row anchored mt-3 pt-2">
                                        <div class="w-100">
                                            <div class="row d-none d-lg-flex">
                                                <div class="col-12">
                                                </div>
                                            </div>
                                            <div class="row d-sm-flex" id="cta-default">
                                                <div class="col-12 col-lg-12 order-last order-lg-first mb-lg-2 reduce-padding-right-small reduce-padding-left-small">
                                                    <button class="btn btn-lg btn-primary btn-w100 js-request-quote px-1 px-sm-2 py-3 py-md-3 h-100 text-xs-14" data-seller-profile-id="G9avn" data-bpvs="475703446" data-bpv="106860046" data-project-id="mkZzVY" data-source-type="profile" data-buyer-phone="0715353482" data-tel="+27710695095">
                                                        Request reply
                                                    </button>
                                                </div>
                                                <div class="col-6 col-lg-12 order-first order-lg-last reduce-padding-right-small"></div>
                                            </div>
                                        </div>
                                    </div>                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pro-profile-container stop-cta-covering-content " itemscope="" itemtype="http://schema.org/Organization">
                        <meta itemprop="url" content="https://www.bark.com/en/za/b/real-connection-carpet-cleaning/G9avn/">
                        <div class="pro-profile">
                            <div class="section-navigation " style="top: 125px;">
                                <div class="priority-nav wrap d-flex border-bottom js-profile-nav-container sprofile-nav-container pl-3 pl-lg-0 pr-3 pr-lg-0">
                                    <ul id="priority-nav" class="nav nav-tabs noscrollbar ">
                                        <li class="nav-item text-grey-400 text-sm cursor-pointer js-profile-navigation-link js-nav-link-about active-link" id="parent-about">
                                            <a href="#" data-section="about">
                                                About
                                            </a>
                                        </li>
                                        <li class="nav-item text-grey-400 text-sm  cursor-pointer js-profile-navigation-link js-nav-link-images" id="parent-images">
                                            <a href="#" data-section="images">
                                                Photos
                                            </a>
                                        </li>
                                        <li class="nav-item text-grey-400 text-sm  cursor-pointer js-profile-navigation-link js-nav-link-reviews" id="parent-reviews">
                                            <a href="#" data-section="reviews">
                                                Reviews
                                            </a>
                                        </li>
                                        <li class="nav-item text-grey-400 text-sm  cursor-pointer js-profile-navigation-link js-nav-link-external-links" id="parent-external-links">
                                            <a href="#" data-section="external-links">
                                                Links
                                            </a>
                                        </li>
                                        <li class="nav-item text-grey-400 text-sm  cursor-pointer js-profile-navigation-link js-nav-link-services" id="parent-services">
                                            <a href="#" data-section="services">
                                                Services
                                            </a>
                                        </li>
                                    </div>
                                </div>
                                <div class="seller-profile-section-container " style="margin-bottom: 125px;">
                                    <div class="pl-4 pl-lg-0 pr-4 pr-lg-0 profile-section profile-section-about active " data-section="about">
                                        <div class="d-block d-lg-none profile-left-bg border-bottom mb-4">
                                            <div class="seller-public-profile-main-info-sect js-public-profile-main-info-sect p-sm-4 px-2 pb-4 pt-5">
                                                <div class="img-wrapper seller-avatar mb-4 pb-1">
                                                    <div class="rounded-circle avatar-image-container d-inline-block position-relative elite-avatar">
                                                        <img class="img-fluid rounded-circle" title="Real Connection Carpet Cleaning logo" itemprop="logo" alt="Real Connection Carpet Cleaning logo logo" width="140" height="140" src="https://d1k8hez1mxkuxw.cloudfront.net/s/avatar_v2/ELR6PM/logo/6669ba2973e39.png!d=Mw6FPX" srcset="https://d1k8hez1mxkuxw.cloudfront.net/s/avatar_v2/ELR6PM/logo/6669ba2973e39.png!d=Mw6FPX 1x, https://d1k8hez1mxkuxw.cloudfront.net/s/avatar_v2/ELR6PM/logo/6669ba2973e39.png!d=AnKhkl 2x">
                                                        <div class="d-none no-image-avatar no-image-avatar-lg bg-cerulean text-white justify-content-center align-items-center">
                                                            R
                                                        </div>
                                                    </div>
                                                </div>
                                                <h1 itemprop="name" class="heading-text" data-edit-profile-link="general-information" data-edit-profile-link-class="al-p">
                                                    Real Connection Carpet Cleaning
                                                </h1>
                                                <div class="top-categories mb-3">
                                                    <a class="badge badge-pill  border border-grey-100 text-grey-600 font-weight-normal p-2 mt-1 text-truncate mw-100" href="/en/za/carpet-cleaning/">
                                                        <span itemprop="knowsAbout">
                                                            Carpet Cleaning
                                                        </span>
                                                    </a>
                                                    <a class="badge badge-pill  border border-grey-100 text-grey-600 font-weight-normal p-2 mt-1 text-truncate mw-100" href="/en/za/deep-cleaning/">
                                                        <span itemprop="knowsAbout">
                                                            Deep Cleaning Services
                                                        </span>
                                                    </a>
                                                    <a class="badge badge-pill  border border-grey-100 text-grey-600 font-weight-normal p-2 mt-1 text-truncate mw-100" href="/en/za/pest-control/">
                                                        <span itemprop="knowsAbout">
                                                            Pest Control
                                                        </span>
                                                    </a>
                                                    <a class="badge badge-pill badge-pill-initially-hidden border border-grey-100 text-grey-600 font-weight-normal p-2 mt-1 text-truncate mw-100" href="/en/za/upholstery-and-furniture-cleaning/">
                                                        <span itemprop="knowsAbout">
                                                            Upholstery and Furniture Cleaning
                                                        </span>
                                                    </a>
                                                    <a class="badge badge-pill category-showmore-btn js-category-showmore-btn border  text-grey-600 font-weight-normal p-2 mt-1 text-truncate mw-100" href="#">
                                                        <span>
                                                            More...
                                                        </span>
                                                    </a>
                                                    <a class="badge badge-pill badge-pill-initially-hidden border border-grey-100 text-grey-600 font-weight-normal p-2 mt-1 text-truncate mw-100" href="/en/za/commercial-cleaning/">
                                                        <span itemprop="knowsAbout">
                                                            Commercial &amp; Office Cleaning
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="js-contact-button-row contact-button-row anchored  ">
                                                    <div class="w-100">
                                                        <div class="row d-none d-lg-flex">
                                                            <div class="col-12"></div>
                                                        </div>
                                                        <div class="row d-sm-flex" id="cta-default">
                                                            <div class="col-12 col-lg-12 order-last order-lg-first mb-lg-2 reduce-padding-right-small reduce-padding-left-small">
                                                                <button class="btn btn-lg btn-primary btn-w100 js-request-quote px-1 px-sm-2 py-3 py-md-3 h-100 text-xs-14" data-seller-profile-id="G9avn" data-bpvs="475703446" data-bpv="106860046" data-project-id="mkZzVY" data-source-type="profile" data-buyer-phone="0715353482" data-tel="+27710695095">
                                                                    Request reply
                                                                </button>
                                                            </div>
                                                            <div class="col-6 col-lg-12 order-first order-lg-last reduce-padding-right-small"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="enquiries-feedback  d-none" data-seller-id="G9avn">
                                                    <div class="alert alert-warning alert-dismissible fade show fixed-top pt-2 mt-3 mx-2 d-block d-sm-none regular-text" role="alert">
                                                        <div class="text-dark-blue text-xxs py-0 px-0 " data-seller-id="G9avn">
                                                            This professional is currently unavailable.<br>
                                                            You can 
                                                            <strong>
                                                                request reply
                                                            </strong>
                                                            and they will reach out as soon as they can.
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                <span aria-hidden="true">
                                                                    ×
                                                                </span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="alert alert-warning text-dark-blue text-xxs  regular-text d-none d-sm-block mt-2" data-seller-id="G9avn">
                                                        This professional is currently unavailable.<br>
                                                        You can 
                                                        <strong>
                                                            request reply
                                                        </strong>
                                                         and they will reach out as soon as they can.
                                                        </div>
                                                    </div>
                                                    <div>

    </div>
        </div>
                                    </div>

                                    <div class="section-about js-section-about mb-2">
            <div class="mb-3">
            <h4 data-edit-profile-link="general-information">About</h4>
            <p class="text-grey-600 mb-0 no-line-break" itemprop="description">At SNVL Real Connection Carpet Cleaning, we specialize in delivering professional cleaning services to both residential and commercial properties in Cape Town and surrounding areas. Our commitment lies in offering top-notch deep cleaning services at competitive rates. <span id="edit-profile-link-desc" data-edit-profile-link="general-information" data-edit-profile-link-class="sm"></span>
                                    <span class="js-company-desc-more" style="display: none;" data-edit-profile-link="general-information" data-edit-profile-link-class="sm"> Leveraging state-of-the-art equipment and years of expertise, we ensure to deliver quality service that exceeds expectations.</span>
                            </p>

                            <p class="mb-0 mt-2"><span class="pseudo-link underlined js-show-more-company-desc">Show more</span></p>
                    </div>
        <h5 class="mb-3 mt-4 js-overview-header d-none d-md-flex" style="">Overview</h5>
    
    <div class="row section-overview">
        
                    <div class="col-12 col-md-6 mb-1 mb-md-2 text-xs-14 js-overview-section">
                <span class="bark-svg-icon contact-icon"><!--?xml version="1.0" encoding="UTF-8"?-->
<svg width="20px" height="22px" viewBox="0 0 20 22" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 54.1 (76490) - https://sketchapp.com -->
    <title>Icon/Elite Pro</title>
    <desc>Created with Sketch.</desc>
    <defs>
        <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="linearGradient-1">
            <stop stop-color="#FBC75D" offset="0%"></stop>
            <stop stop-color="#F8C048" offset="100%"></stop>
        </linearGradient>
        <path d="M9.53465887,14.7446443 L7.67897539,15.7202349 C7.1901308,15.9772357 6.58550365,15.7892891 6.32850284,15.3004446 C6.22616377,15.1057841 6.19084909,14.882816 6.22802594,14.6660584 L6.58242995,12.5997244 C6.63806788,12.2753304 6.5305194,11.9443302 6.29483331,11.714593 L4.79355384,10.2512072 C4.39807026,9.86570599 4.38997795,9.23259273 4.77547916,8.83710915 C4.92898777,8.67962551 5.13013018,8.57713834 5.34776721,8.54551383 L7.42248442,8.24403977 C7.74819458,8.19671131 8.02976017,7.99214194 8.17542218,7.69699846 L9.10326392,5.81698575 C9.34768622,5.32173209 9.94731205,5.11839309 10.4425657,5.36281539 C10.6397783,5.46014562 10.7994058,5.61977315 10.8967361,5.81698575 L11.8245778,7.69699846 C11.9702398,7.99214194 12.2518054,8.19671131 12.5775156,8.24403977 L14.6522328,8.54551383 C15.1987777,8.62493144 15.5774591,9.13237429 15.4980415,9.67891916 C15.466417,9.89655619 15.3639298,10.0976986 15.2064462,10.2512072 L13.7051667,11.714593 C13.4694806,11.9443302 13.3619321,12.2753304 13.4175701,12.5997244 L13.7719741,14.6660584 C13.8653351,15.2103948 13.4997472,15.7273507 12.9554108,15.8207118 C12.7386532,15.8578886 12.5156851,15.8225739 12.3210246,15.7202349 L10.4653411,14.7446443 C10.1740171,14.5914862 9.8259829,14.5914862 9.53465887,14.7446443 Z" id="path-2"></path>
        <filter x="-9.1%" y="-9.5%" width="118.2%" height="137.8%" filterUnits="objectBoundingBox" id="filter-3">
            <feOffset dx="0" dy="2" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
            <feColorMatrix values="0 0 0 0 0   0 0 0 0 0   0 0 0 0 0  0 0 0 0.06 0" type="matrix" in="shadowOffsetOuter1"></feColorMatrix>
        </filter>
    </defs>
    <g id="Icon/Elite-Pro" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Star" fill-rule="nonzero">
            <path d="M11.4433757,0.383252481 L18.5566243,4.45293475 C19.4497883,4.96393806 20,5.90831112 20,6.93031773 L20,15.0696823 C20,16.0916889 19.4497883,17.0360619 18.5566243,17.5470652 L11.4433757,21.6167475 C10.5502117,22.1277508 9.4497883,22.1277508 8.55662433,21.6167475 L1.44337567,17.5470652 C0.550211698,17.0360619 5.76888806e-15,16.0916889 4.27325041e-15,15.0696823 L0,6.93031773 C-6.40987562e-16,5.90831112 0.550211698,4.96393806 1.44337567,4.45293475 L8.55662433,0.383252481 C9.4497883,-0.127750827 10.5502117,-0.127750827 11.4433757,0.383252481 Z" id="Polygon" fill="url(#linearGradient-1)"></path>
            <g>
                <use fill="black" fill-opacity="1" filter="url(#filter-3)" xlink:href="#path-2"></use>
                <use fill="#FFFFFF" xlink:href="#path-2"></use>
            </g>
        </g>
    </g>
</svg></span>
                <strong>Elite Pro</strong>
            </div>
        
                    <div class="col-12 col-md-6 mb-1 mb-md-2 text-xs-14 js-overview-section">
                <span class="bark-svg-icon bsi-primary-dark-blue contact-icon"><!--?xml version="1.0" encoding="UTF-8"?-->
<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g transform="translate(2.000000, 2.000000)" class="primary-color">
            <path d="M10,0 C4.48,0 0,4.48 0,10 C0,15.52 4.48,20 10,20 C15.52,20 20,15.52 20,10 C20,4.48 15.52,0 10,0 Z M9,13.42 L5,9.42 L6.41,8.01 L9,10.59 L13.59,6 L15,7.42 L9,13.42 Z"></path>
        </g>
    </g>
</svg></span>
                1 hire on Bark
            </div>
        
        <div class="col-12 col-md-6 mb-1 mb-md-2 text-xs-14 js-section-years-in-business js-overview-section" style="display:none;" data-edit-profile-link="general-information" data-edit-profile-link-class="sm">
            <span class="bark-svg-icon bsi-primary-dark-blue contact-icon"><!--?xml version="1.0" encoding="UTF-8"?-->
<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g transform="translate(3.000000, 5.000000)" class="primary-color">
            <path d="M5.32907052e-15,14 L5.32907052e-15,8 L18,8 L18,14 L5.32907052e-15,14 Z M1.77635684e-15,-1.42108547e-14 L18,-1.42108547e-14 L18,6 L1.77635684e-15,6 L1.77635684e-15,-1.42108547e-14 Z M2,2 L2,4 L16,4 L16,2 L2,2 Z"></path>
        </g>
    </g>
</svg>
</span>
            <span class="js-data-years-in-business"></span>
        </div>

                    <div class="col-12 col-md-6 mb-1 mb-md-2 text-xs-14 js-overview-section">
                <span class="bark-svg-icon bsi-primary-dark-blue contact-icon"><!--?xml version="1.0" encoding="UTF-8"?-->
<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g transform="translate(2.000000, 2.000000)" class="primary-color">
            <path d="M9.99,0 C15.52,0 20,4.48 20,10 C20,15.52 15.52,20 9.99,20 C4.47,20 0,15.52 0,10 C0,4.48 4.47,0 9.99,0 Z M14.7644958,12.2925071 L10,9.43380962 L10,4 L8,4 L8,10.5661904 L13.7355042,14.0074929 L14.7644958,12.2925071 Z"></path>
        </g>
    </g>
</svg></span>
                8 min response time
            </div>
        
        <div class="col-12 col-md-6 mb-1 mb-md-2 text-xs-14 js-section-company-size js-overview-section" style="" data-edit-profile-link="general-information" data-edit-profile-link-class="sm">
            <span class="bark-svg-icon bsi-primary-dark-blue contact-icon"><svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M11.0001 11.0001C13.0259 11.0001 14.6667 9.35925 14.6667 7.33341C14.6667 5.30758 13.0259 3.66675 11.0001 3.66675C8.97425 3.66675 7.33341 5.30758 7.33341 7.33341C7.33341 9.35925 8.97425 11.0001 11.0001 11.0001ZM11.0001 12.8334C8.55258 12.8334 3.66675 14.0617 3.66675 16.5001V18.3334H18.3334V16.5001C18.3334 14.0617 13.4476 12.8334 11.0001 12.8334Z" fill="#111637"></path>
</svg>
</span>
            <span class="js-data-company-size">2-10 staff</span>
        </div>

        <div class="col-12 col-md-6 mb-1 mb-md-2 text-xs-14 js-section-remote-services js-overview-section" style="display:none;">
            <span class="bark-svg-icon bsi-primary-dark-blue contact-icon"><svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M10.9999 2C6.18234 2 2.27246 5.90982 2.27246 10.7273C2.27246 15.5447 6.18234 19.4545 10.9999 19.4545C15.8174 19.4545 19.7273 15.5447 19.7273 10.7273C19.7273 5.90982 15.8174 2 10.9999 2Z" stroke="#111637" stroke-width="2"></path>
<path d="M10.9998 2V20" stroke="#111637"></path>
<path d="M20 10.9495L2 11.0509" stroke="#111637"></path>
<path d="M18.6365 6.58569L3.36375 6.68717" stroke="#111637"></path>
<path d="M18.6365 15.313L3.36375 15.4145" stroke="#111637"></path>
<path d="M9.36336 2C9.36336 2 6.09058 4.72727 6.09058 11C6.09058 17.2727 9.36336 19.4545 9.36336 19.4545" stroke="#111637"></path>
<path d="M12.6364 2C12.6364 2 15.9092 4.72727 15.9092 11C15.9092 17.2727 12.6364 19.4545 12.6364 19.4545" stroke="#111637"></path>
</svg>
</span>
            Services available remotely
        </div>
    </div>
</div>
                                </div>

                                <div id="__job-section" class="pl-4 pl-lg-0 pr-4 pr-lg-0"></div>
                                <div id="__booking-request-checkout"></div>

                                

                                                                    <div class="profile-section profile-section-images" data-section="images">
                                        <div class="section-images js-section-images js-section-container mb-5">
    <div class="d-flex mb-4 pl-4 pl-lg-0 pr-4 pr-md-0">
        <h4 class="mb-1 flex-grow-1 flex-shrink-0" data-edit-profile-link="photo-and-videos">Photos <small>(14)</small></h4>
        <div class="d-none d-md-flex pl-2 align-items-end">
            <div class="scroll-button js-image-scroll-back mr-1 disabled">
                <span class="bark-svg-icon bsi-primary-dark-blue"><svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M7.29292 13.7072L8.70714 12.293L4.41424 8.00008H15V6.00008H4.41424L8.70714 1.70718L7.29292 0.292969L0.585815 7.00008L7.29292 13.7072Z" fill="none" class="primary-color"></path>
</svg>
</span>
            </div>
            <div class="scroll-button js-image-scroll-forwards">
                <span class="bark-svg-icon bsi-primary-dark-blue"><svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M8.29289 13.7072L6.87868 12.293L11.1716 8.00008H0.585787V6.00008H11.1716L6.87868 1.70718L8.29289 0.292969L15 7.00008L8.29289 13.7072Z" fill="none" class="primary-color"></path>
</svg>
</span>
            </div>
        </div>
        <div class="d-flex d-md-none pl-2 align-items-end">
            <u class="pseudo-link cursor-pointer underlined js-media-see-all">See all</u>
        </div>
    </div>
    <div id="image-container" class="light-gallery horizontal-scroll noscrollbar">
                    <a href="https://bark-user-data.s3.eu-west-1.amazonaws.com/users/30498682/6669bbf26e290-1718205426.jpeg" class="mr-3 mb-3">
                <img class="rounded lazy loaded" alt="Real Connection Carpet Cleaning profile image." width="150" height="150" title="Real Connection Carpet Cleaning profile image." data-src="https://d1k8hez1mxkuxw.cloudfront.net/s/users/30498682/6669bbf26e290-1718205426.jpeg!d=0RGHmO" data-srcset="https://d1k8hez1mxkuxw.cloudfront.net/s/users/30498682/6669bbf26e290-1718205426.jpeg!d=0RGHmO 1x, https://d1k8hez1mxkuxw.cloudfront.net/s/users/30498682/6669bbf26e290-1718205426.jpeg!d=LmlHXm 2x" srcset="https://d1k8hez1mxkuxw.cloudfront.net/s/users/30498682/6669bbf26e290-1718205426.jpeg!d=0RGHmO 1x, https://d1k8hez1mxkuxw.cloudfront.net/s/users/30498682/6669bbf26e290-1718205426.jpeg!d=LmlHXm 2x" src="https://d1k8hez1mxkuxw.cloudfront.net/s/users/30498682/6669bbf26e290-1718205426.jpeg!d=0RGHmO" data-was-processed="true">
            </a>
                    <a href="https://bark-user-data.s3.eu-west-1.amazonaws.com/users/30498682/6669bd86eb748-1718205830.jpeg" class="mr-3 mb-3">
                <img class="rounded lazy loaded" alt="Real Connection Carpet Cleaning profile image." width="150" height="150" title="Real Connection Carpet Cleaning profile image." data-src="https://d1k8hez1mxkuxw.cloudfront.net/s/users/30498682/6669bd86eb748-1718205830.jpeg!d=0RGHmO" data-srcset="https://d1k8hez1mxkuxw.cloudfront.net/s/users/30498682/6669bd86eb748-1718205830.jpeg!d=0RGHmO 1x, https://d1k8hez1mxkuxw.cloudfront.net/s/users/30498682/6669bd86eb748-1718205830.jpeg!d=LmlHXm 2x" srcset="https://d1k8hez1mxkuxw.cloudfront.net/s/users/30498682/6669bd86eb748-1718205830.jpeg!d=0RGHmO 1x, https://d1k8hez1mxkuxw.cloudfront.net/s/users/30498682/6669bd86eb748-1718205830.jpeg!d=LmlHXm 2x" src="https://d1k8hez1mxkuxw.cloudfront.net/s/users/30498682/6669bd86eb748-1718205830.jpeg!d=0RGHmO" data-was-processed="true">
            </a>
                  
                    <a href="https://bark-user-data.s3.eu-west-1.amazonaws.com/users/30498682/6669bd9036fce-1718205840.jpeg" class="mr-3 mb-3">
                <img class="rounded lazy" alt="Real Connection Carpet Cleaning profile image." width="150" height="150" title="Real Connection Carpet Cleaning profile image." data-src="https://d1k8hez1mxkuxw.cloudfront.net/s/users/30498682/6669bd9036fce-1718205840.jpeg!d=0RGHmO" data-srcset="https://d1k8hez1mxkuxw.cloudfront.net/s/users/30498682/6669bd9036fce-1718205840.jpeg!d=0RGHmO 1x, https://d1k8hez1mxkuxw.cloudfront.net/s/users/30498682/6669bd9036fce-1718205840.jpeg!d=LmlHXm 2x">
            </a>
                    <a href="https://bark-user-data.s3.eu-west-1.amazonaws.com/users/30498682/6669bd910ae4e-1718205841.jpeg" class="mr-3 mb-3">
                <img class="rounded lazy" alt="Real Connection Carpet Cleaning profile image." width="150" height="150" title="Real Connection Carpet Cleaning profile image." data-src="https://d1k8hez1mxkuxw.cloudfront.net/s/users/30498682/6669bd910ae4e-1718205841.jpeg!d=0RGHmO" data-srcset="https://d1k8hez1mxkuxw.cloudfront.net/s/users/30498682/6669bd910ae4e-1718205841.jpeg!d=0RGHmO 1x, https://d1k8hez1mxkuxw.cloudfront.net/s/users/30498682/6669bd910ae4e-1718205841.jpeg!d=LmlHXm 2x">
            </a>
                    <a href="https://bark-user-data.s3.eu-west-1.amazonaws.com/users/30498682/6669be60b4d1c-1718206048.jpeg" class="mr-3 mb-3">
                <img class="rounded lazy" alt="Real Connection Carpet Cleaning profile image." width="150" height="150" title="Real Connection Carpet Cleaning profile image." data-src="https://d1k8hez1mxkuxw.cloudfront.net/s/users/30498682/6669be60b4d1c-1718206048.jpeg!d=0RGHmO" data-srcset="https://d1k8hez1mxkuxw.cloudfront.net/s/users/30498682/6669be60b4d1c-1718206048.jpeg!d=0RGHmO 1x, https://d1k8hez1mxkuxw.cloudfront.net/s/users/30498682/6669be60b4d1c-1718206048.jpeg!d=LmlHXm 2x">
            </a>
            </div>
</div>
</div>
                                    <div class="pl-4 pl-lg-0 pr-4 pr-lg-0 profile-section profile-section-reviews" data-section="reviews">
                                    <div class="section-reviews js-section-reviews mb-6">
    <div class="d-flex flex-wrap">
        <h4 class="mb-2 ml-0 mt-0 flex-grow-1 flex-shrink-0 mr-auto" data-edit-profile-link="reviews">Reviews</h4>
        <div class="d-flex align-items-end mb-3">
                                            <div class="btn btn-outline-clear-blue text-nowrap" data-toggle="modal" id="leave-review" data-target="#add-review-modal">Leave a review</div>
                    </div>
    </div>
            <div class="review-collection-container-empty">
                            <p class="bg-grey-25 rounded p-3 mb-0 text-grey-600">
                    Be the first to leave a review for Real Connection Carpet Cleaning.
                </p>
                    </div>
    </div>

                                </div>

                                
                                
                                


                                
                                                                    <div class="pl-4 pl-lg-0 pr-4 pr-lg-0 profile-section profile-section-external-links" data-section="external-links">
                                        <div class="section-external-links js-section-external-links mb-5">
    <h4 data-edit-profile-link="social-media-and-links">Links</h4>
    <div class="">
                  <div class="mb-2">
               <span class="bark-svg-icon contact-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="12" cy="12" r="12" fill="#111637"></circle>
<path fill-rule="evenodd" clip-rule="evenodd" d="M5.925 12C5.925 10.7175 6.9675 9.675 8.25 9.675H11.25V8.25H8.25C6.18 8.25 4.5 9.93 4.5 12C4.5 14.07 6.18 15.75 8.25 15.75H11.25V14.325H8.25C6.9675 14.325 5.925 13.2825 5.925 12ZM9 12.75H15V11.25H9V12.75ZM12.75 8.25H15.75C17.82 8.25 19.5 9.93 19.5 12C19.5 14.07 17.82 15.75 15.75 15.75H12.75V14.325H15.75C17.0325 14.325 18.075 13.2825 18.075 12C18.075 10.7175 17.0325 9.675 15.75 9.675H12.75V8.25Z" fill="white"></path>
</svg>
</span>
               <span class="text-xs-14">
                   <a class="dark-blue" href="https://www.realconnectioncarpetcleaning.com/gallery" target="_blank" rel="noreferer,nofollow,noopener" style="text-decoration: none;">
                       www.realconnectioncarpetcleaning.com/gallery
                    </a>
               </span>
           </div>
            </div>
</div>
                                    </div>
                                
                                                                    <div class="pl-4 pl-lg-0 pr-4 pr-lg-0 profile-section profile-section-services" data-section="services">
                                        <div class="section-services js-section-services mb-5">
    <h4 data-edit-profile-link="services">Services</h4>
    <div id="services-accordion" class="accordion">
                    <div class="py-3 border-top border-bottom">
                <div class="d-flex cursor-pointer collapsed" id="services-accordion-heading-1" data-toggle="collapse" data-target="#services-accordion-1" aria-expanded="false" aria-controls="services-accordion-1">
                    <p class="flex-grow-1 flex-shrink-1 mb-0">Professional Carpet Cleaning</p>
                    <span class="chevron text-grey-600  micons-chevron_up for-open px-2"></span>
                    <span class="chevron text-grey-600  micons-chevron_down for-collapsed px-2"></span>
                </div>
               
            </div>
            </div>
</div>
                                    </div>
                                
                                                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

            <input type="hidden" id="add-review-logged-in-user-id" value="32767132">

<div aria-hidden="true" aria-labelledby="add-review-modal-label" class="modal bark-modal" id="add-review-modal" data-backdrop="static" data-keyboard="false" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header flex-column pt-3">
                <h4 class="modal-title w-100 text-center pt-2 px-3">
                    Leave a review for <span class="data-company-name">Real Connection Carpet Cleaning</span>
                </h4>
                <button aria-label="Close" class="close close-modal-cross js-close-review-modal" type="button"></button>
            </div>
            <div class="modal-body text-left">
                <div id="_rvloading" class="collapse text-center">
                    <div class="spinner-border text-primary" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <p class="loading-text pt-2">
                        Please wait ...
                    </p>
                </div>

                <div id="_rvsuccess" class="collapse text-center">
                    <div class="d-flex success-circle align-items-center justify-content-center rounded-circle mx-auto mb-5" aria-hidden="true">
                        <img class="img-fluid" alt="success checkmark" width="41" height="30" title="success checkmark" src="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/icons/success-tick.png!d=5p9id" srcset="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/icons/success-tick.png!d=5p9id 1x, https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/icons/success-tick.png!d=LeoHQ8 2x">
                    </div>
                    <p class="mb-0">Your review has been posted!</p>
                    <p class="mb-0">It will appear on the professional's profile shortly.</p>
                    <div class="text-right mt-5">
                        <button class="btn btn-primary large-btn js-close-review-modal">OK</button>
                    </div>
                </div>

                <div id="_rvform">
                    <div class="click-to-rate-container mb-2">
                        <span>Click to rate :</span> <span class="star-series">
                            <span class="js-click-to-rate-stars micons-rating_star _st1 text-grey-400 text-xl cursor-pointer"></span>
                            <span class="js-click-to-rate-stars micons-rating_star _st2 text-grey-400 text-xl cursor-pointer"></span>
                            <span class="js-click-to-rate-stars micons-rating_star _st3 text-grey-400 text-xl cursor-pointer"></span>
                            <span class="js-click-to-rate-stars micons-rating_star _st4 text-grey-400 text-xl cursor-pointer"></span>
                            <span class="js-click-to-rate-stars micons-rating_star _st5 text-grey-400 text-xl cursor-pointer"></span>
                        </span>
                        <div id="review_user_rating-error" class="invalid-feedback"></div>

                        <input type="hidden" id="star-rating-amount">
                    </div>

                    
                    <div class="form-group">
                        <label for="review_text">Review</label>
                        <textarea id="review_user_review" class="form-control py-2" rows="4" placeholder="Describe what it was like working with Real Connection Carpet Cleaning and the reasoning behind your rating."></textarea>
                        <div id="review_user_review-error" class="invalid-feedback"></div>
                    </div>

                                            <div class="custom-control custom-checkbox mt-2">
                            <input type="checkbox" class="custom-control-input" id="review_user_used_company">
                            <label class="custom-control-label cursor-pointer text-grey-600" for="review_user_used_company">I used this company</label>
                            <div id="review_user_used_company-error" class="invalid-feedback"></div>
                        </div>
                                    </div>

            </div><!-- end of modal-body -->
            <div class="modal-footer justify-content-between">
                <span class="text-light-grey cursor-pointer" data-dismiss="modal">Cancel</span>
                <span class="btn btn-primary js-post-review">Post review</span>
            </div>
        </div>
    </div>
</div>
 
</x-app-layout>