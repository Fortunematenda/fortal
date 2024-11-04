<!-- resources/views/customer/requests.blade.php -->
<x-app-layout>
<html lang="en-ZA"><head>
    <link rel="preload" as="script" href="//d2wy8f7a9ursnm.cloudfront.net/v6/bugsnag.min.js">

<link rel="preload" as="script" href="//www.googleadservices.com/pagead/conversion.js">

<link rel="preload" as="font" type="font/woff2" crossorigin="" href="//d3a1eo0ozlzntn.cloudfront.net/fonts/gordita-medium-webfont.woff2">
<link rel="preload" as="font" type="font/woff2" crossorigin="" href="//d3a1eo0ozlzntn.cloudfront.net/fonts/gordita-bold-webfont.woff2">
<link rel="preload" as="font" type="font/woff2" crossorigin="" href="//d3a1eo0ozlzntn.cloudfront.net/fonts/gordita-regular-webfont.woff2">

<link rel="preconnect" href="//d18jakcjgoan9.cloudfront.net">
<link rel="preconnect" href="//d1w7gvu0kpf6fl.cloudfront.net">
<link rel="preconnect" href="//d20x17hdatcw8x.cloudfront.net">
<link rel="preconnect" href="//frontend-production.bark.com">    <script type="text/javascript" async="" src="https://analytics.tiktok.com/i18n/pixel/static/identify_7bf75739.js"></script><script type="text/javascript" async="" src="https://analytics.tiktok.com/i18n/pixel/static/main.MTJhNGMzN2YwMA.js" data-id="CRP67VBC77U6OCTM02M0"></script><script type="text/javascript" async="" src="https://analytics.tiktok.com/i18n/pixel/events.js?sdkid=CRP67VBC77U6OCTM02M0&amp;lib=ttq"></script><script src="https://connect.facebook.net/signals/config/1552999484962322?v=2.9.176&amp;r=stable&amp;domain=www.bark.com&amp;hme=872f04a0547459b3285cb03b0d7a47bfde40628f4b386809918a621e2688602f&amp;ex_m=70%2C121%2C107%2C111%2C61%2C4%2C100%2C69%2C16%2C97%2C89%2C51%2C54%2C172%2C175%2C187%2C183%2C184%2C186%2C29%2C101%2C53%2C77%2C185%2C167%2C170%2C180%2C181%2C188%2C131%2C41%2C189%2C190%2C34%2C143%2C15%2C50%2C195%2C194%2C133%2C18%2C40%2C1%2C43%2C65%2C66%2C67%2C71%2C93%2C17%2C14%2C96%2C92%2C91%2C108%2C52%2C110%2C39%2C109%2C30%2C94%2C26%2C168%2C171%2C140%2C86%2C56%2C84%2C33%2C73%2C0%2C95%2C32%2C28%2C82%2C83%2C88%2C47%2C46%2C87%2C37%2C11%2C12%2C13%2C6%2C7%2C25%2C22%2C23%2C57%2C62%2C64%2C75%2C102%2C27%2C76%2C9%2C8%2C80%2C48%2C21%2C104%2C103%2C105%2C98%2C10%2C20%2C3%2C38%2C74%2C19%2C5%2C90%2C81%2C44%2C35%2C85%2C2%2C36%2C63%2C42%2C106%2C45%2C79%2C68%2C112%2C60%2C59%2C31%2C99%2C58%2C55%2C49%2C78%2C72%2C24%2C113%2C201%2C200%2C202%2C207%2C208%2C209%2C205%2C197%2C132%2C163%2C196%2C198%2C122%2C157%2C145%2C151%2C129%2C233%2C116%2C127%2C234%2C165%2C119%2C236%2C166%2C136%2C123%2C154%2C148%2C193%2C114%2C128" async=""></script><script src="https://connect.facebook.net/signals/config/645002797508403?v=2.9.176&amp;r=stable&amp;domain=www.bark.com&amp;hme=872f04a0547459b3285cb03b0d7a47bfde40628f4b386809918a621e2688602f&amp;ex_m=70%2C121%2C107%2C111%2C61%2C4%2C100%2C69%2C16%2C97%2C89%2C51%2C54%2C172%2C175%2C187%2C183%2C184%2C186%2C29%2C101%2C53%2C77%2C185%2C167%2C170%2C180%2C181%2C188%2C131%2C41%2C189%2C190%2C34%2C143%2C15%2C50%2C195%2C194%2C133%2C18%2C40%2C1%2C43%2C65%2C66%2C67%2C71%2C93%2C17%2C14%2C96%2C92%2C91%2C108%2C52%2C110%2C39%2C109%2C30%2C94%2C26%2C168%2C171%2C140%2C86%2C56%2C84%2C33%2C73%2C0%2C95%2C32%2C28%2C82%2C83%2C88%2C47%2C46%2C87%2C37%2C11%2C12%2C13%2C6%2C7%2C25%2C22%2C23%2C57%2C62%2C64%2C75%2C102%2C27%2C76%2C9%2C8%2C80%2C48%2C21%2C104%2C103%2C105%2C98%2C10%2C20%2C3%2C38%2C74%2C19%2C5%2C90%2C81%2C44%2C35%2C85%2C2%2C36%2C63%2C42%2C106%2C45%2C79%2C68%2C112%2C60%2C59%2C31%2C99%2C58%2C55%2C49%2C78%2C72%2C24%2C113" async=""></script><script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script><script type="text/javascript" async="" src="https://www.redditstatic.com/ads/pixel.js"></script><script type="text/javascript" async="" src="https://www.dwin1.com/0.js"></script><script type="text/javascript" async="" src="https://snap.licdn.com/li.lms-analytics/insight.min.js"></script><script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=G-Q04MTY318C&amp;l=dataLayer&amp;cx=c"></script><script async="" src="https://www.clarity.ms/tag/uet/5176741"></script><script async="" src="//www.google-analytics.com/analytics.js"></script><script src="//bat.bing.com/bat.js" async=""></script><script type="text/javascript" async="" src="https://cdn.heapanalytics.com/js/heap-2235934490.js"></script><script async="" src="https://cdn.branch.io/branch-latest.min.js"></script><script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-NGWGLGF"></script><script src="https://d3a1eo0ozlzntn.cloudfront.net/assets/js/analytics/bark-tracking.7ecb5e1c69.v2.js" crossorigin=""></script>
<script>
  const tracking = (eventGroup, eventName, parameters) => {
    const tracking = new BarkTracking(new TrackingHeap());
    return tracking.logCustomEvent(eventGroup, eventName, parameters);
  };

  window.getReactFallbackUrl = function (appName) {
    if (window.Bark?.ENV?.web_hostname === "www.bark.com") {
      return `https://fallback-${appName}.bark.com`;
    } else {
      return `https://fallback-${appName}.d.bark.com`;
    }
  };

  window.onReactLoadError = function () {
    tracking("React error", "Unable to load React script/css", {
      file: this.href ?? this.src,
    });
  };

  window.appLoadedFallback = {};

  window.fallbackOnError = function (assetPattern, fallbackUrl) {
    window.onReactLoadError.call(this); // Bugsnag for the original

    if (window.appLoadedFallback[assetPattern]) return;

    window.appLoadedFallback[assetPattern] = true;

    function addElement(type, url) {
      const isScript = type === "script";
      const element = document.createElement(type);
      element.setAttribute(isScript ? "src" : "href", url);
      if (!isScript) {
        element.setAttribute("rel", "stylesheet");
      }
      element.setAttribute(
        "onerror",
        "window.onReactLoadError.call(this)"
      ); // Bugsnag for the fallback
      document.body.appendChild(element);
    }

    function cleanElements() {
      document
        .querySelectorAll(
          `link[href*=${assetPattern}], script[data-src*=${assetPattern}]`
        )
        .forEach((element) => element.remove());
    }

    // No callback URL is provided for this function, skipping
    if (!fallbackUrl) return;

    fetch(`${fallbackUrl}/asset-manifest.json`)
      .then((response) => response.json())
      .then(function (data) {
        const scripts = [],
          css = [];
        for (const key in data) {
          if (
            key.endsWith(".js") &&
            data[key].endsWith(".js") &&
            !key.endsWith(".esm.js") &&
            !key.endsWith("mockServiceWorker.js")
          ) {
            scripts.push(data[key]);
          } else if (
            key.endsWith(".css") &&
            data[key].endsWith(".css")
          ) {
            css.push(data[key]);
          }
        }
        cleanElements();
        for (let script of scripts) {
          addElement("script", script);
        }
        for (let style of css) {
          addElement("link", style);
        }
      })
      .catch(function () {
        tracking("React error", "Unable to load fallback asset-manifest json", {
          file: `${fallbackUrl}/asset-manifest.json`,
        });
      });
  };
</script>        
    <!-- Google Tag Manager -->

    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer', 'GTM-NGWGLGF');</script>

    <!-- End Google Tag Manager -->

<script>
(function () {

    /**
     * @type {window.BarkDeferredTracking}
     */
    window.BarkDeferredTracking = function () {
        var func = arguments[0];
        var callArgs = Array.prototype.slice.call(arguments, 1);
        var interval;
        var i = 0;

        if (window[func]) {
            window[func].apply(window[func], callArgs);
        } else {
            interval = window.setInterval(function () {
                if (window[func]) {
                    window[func].apply(window[func], callArgs);
                    window.clearInterval(interval);
                }
                if (i++ === 100) {
                    // Try for 10 seconds before cancelling
                    window.clearInterval(interval);
                    try {
                        window.bugsnagClient && window.bugsnagClient.notify(
                            new Error('BarkDeferredTracking failed'),
                            {
                                metaData: {
                                    function: func,
                                    arguments: callArgs
                                }
                            });
                    } catch (ignore) {}
                }
            }, 100);
        }
    };

}());
</script>
    <!-- OneTrust Cookies Consent Notice start for bark.com -->
    <script src="https://cdn-ukwest.onetrust.com/scripttemplates/otSDKStub.js" data-document-language="true" type="text/javascript" charset="UTF-8" data-domain-script="956658ef-c201-46ac-88e0-46dc4786446f"></script>
<!-- OneTrust Cookies Consent Notice end for bark.com -->

    <meta name="referrer" content="origin-when-cross-origin">
    <meta name="csrf_value" content="764daf7f0b0a693c33d7f5b8773fec04d3c2a5bd">
    <meta name="csrf_name" content="_csrf_token_645a83a41868941e4692aa31e7235f2">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="twitter:card" content="summary">
    <meta property="twitter:site" content="@barkteam">
    <meta property="og:type" content="website">
                <title>Bark.com - My Barks</title>
        <meta property="og:title" content="Bark.com - My Barks">
        <meta property="twitter:title" content="Bark.com - My Barks">
                <meta property="og:image" content="https://d1w7gvu0kpf6fl.cloudfront.net/img/frontend-v2/sharing-images/linkedin-cover.jpg">
        <meta property="twitter:image" content="https://d1w7gvu0kpf6fl.cloudfront.net/img/frontend-v2/sharing-images/linkedin-cover.jpg">
            <link rel="stylesheet" href="https://d3a1eo0ozlzntn.cloudfront.net/assets/css/main_v2-built.87872c72ad.v2.css">
    <link rel="stylesheet" href="https://d1w7gvu0kpf6fl.cloudfront.net/fonts/marin-icons-032019/Marin-Icons.css">
            <meta name="description" content="Find recommended local service professionals &amp; get free quotes fast with Bark. Whatever you need for your home, garden, pet or lifestyle let us do the leg work.">
        <meta property="og:description" content="Find recommended local service professionals &amp; get free quotes fast with Bark. Whatever you need for your home, garden, pet or lifestyle let us do the leg work.">
        <meta property="twitter:description" content="Find recommended local service professionals &amp; get free quotes fast with Bark. Whatever you need for your home, garden, pet or lifestyle let us do the leg work.">
                <link rel="canonical" href="https://www.bark.com/buyers/dashboard/">
        <meta property="og:url" content="https://www.bark.com/buyers/dashboard/">
        
                    <link rel="manifest" href="/manifest.json">
        <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
            <link rel="apple-touch-icon" sizes="180x180" href="https://d1w7gvu0kpf6fl.cloudfront.net/images/favicon/20190628/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://d1w7gvu0kpf6fl.cloudfront.net/images/favicon/20190628/favicon-16x16.png">
    <link rel="mask-icon" href="https://d1w7gvu0kpf6fl.cloudfront.net/images/favicon/20190628/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="https://d1w7gvu0kpf6fl.cloudfront.net/images/favicon/20190628/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Bark.com">
    <meta name="application-name" content="Bark.com">
    <meta name="msapplication-TileColor" content="#111637">
    <meta name="msapplication-config" content="https://d1w7gvu0kpf6fl.cloudfront.net/images/favicon/20190628/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <script>
    var coreInit = {};
    var coreInitListeners = {};
    window.onBarkCoreInit = function(callback, appType) {
        if (typeof appType === 'undefined') {
            appType = 'core';
        }
        if (typeof coreInit[appType] === 'undefined') {
            coreInit[appType] = false;
            coreInitListeners[appType] = [];
        }
        if (coreInit[appType]) {
            callback();
        } else {
            coreInitListeners[appType].push(callback);
        }
    }
    window.addEventListener('coreInit', function(event) {
        var appType = event.appType;
        if (typeof coreInit[appType] === 'undefined') {
            coreInit[appType] = false;
            coreInitListeners[appType] = [];
        }
        coreInit[appType] = true;
        for (var i = 0; i < coreInitListeners[appType].length; i++) {
            try {
                coreInitListeners[appType][i]();
            } catch (e) {console.error(e); window.bugsnagClient && window.bugsnagClient.notify(e)}
        }
        coreInitListeners[appType] = [];
    });
</script>
    <script data-ot-ignore="">
var bugsnagOptions = {"apiKey":"3897c6327d11b24f78a54ee513625435","releaseStage":"production","appVersion":"1.0.281","user":{"user_id":32767132,"buyer_user_id":29975721,"user_active_role":"buyer"},"metaData":[],"appType":"buyer"};
window.bugsnagBuffer=[];function addToBuffer(a,b){window.bugsnagBuffer.push({func:a,arguments:b})}window.bugsnagClient={notify:function(a,b){addToBuffer("notify",[a,b])},leaveBreadcrumb:function(a,b){addToBuffer("leaveBreadcrumb",[a,b])";window.bugsnagHandlingErrors=!1;
try{window.addEventListener("error",function(a){try{if(!/Script error\.?/.test(a.message)&&!window.bugsnagHandlingErrors)if(a.error)window.bugsnagClient.notify(a.error);else{var b="";try{b=JSON.stringify(a,["message","arguments","type","name","filename"])}catch(c){}window.bugsnagClient.notify(Error("Error caught but errorEvent.error not supported"),{metaData:{errorEvent:a,errorString:b")"catch(c){window.bugsnagClient.notify(c)")}catch(a){window.bugsnagClient.notify(a)}
window.bugsnagLoaded=function(){setTimeout(function(){bugsnagOptions.beforeSend=function(c){"[object Object]"===c.errorMessage&&/dnr/.test(c.stacktrace[0].file)&&c.ignore()};window.bugsnagClient=bugsnag(bugsnagOptions);window.bugsnagHandlingErrors=!0;for(var a=0;a<window.bugsnagBuffer.length;a++){var b=window.bugsnagBuffer[a];window.bugsnagClient[b.func]&&window.bugsnagClient[b.func].apply(window.bugsnagClient,b.arguments)",0)};
addEventListener("DOMContentLoaded", function() {window.bugsnagLoaded()});
</script>
    <script src="//d2wy8f7a9ursnm.cloudfront.net/v6/bugsnag.min.js" defer=""></script>
    
  <script>
    /* Chameleon script | trychameleon.com */
    !function(d,w){var t="S4swvegZAhUVPl97IteRvbPkYhxkuOBZuxSQa8o7PkHn8V-1MDXk6-DdPdFdLQEvAc0CkE",c="chmln",m="identify alias track clear set show on off custom help _data".split(" "),i=d.createElement("script");if(w[c]||(w[c]={}),!w[c].root){w[c].accountToken=t,w[c].location=w.location.href.toString(),w[c].now=new Date;for(var s=0;s<m.length;s++){!function(){var t=w[c][m[s]+"_a"]=[];w[c][m[s]]=function(){t.push(arguments);};}();}i.src="https://fast.trychameleon.com/messo/"+t+"/messo.min.js",i.async=!0,d.head.appendChild(i);"(document,window);
  </script><script src="https://fast.trychameleon.com/messo/S4swvegZAhUVPl97IteRvbPkYhxkuOBZuxSQa8o7PkHn8V-1MDXk6-DdPdFdLQEvAc0CkE/messo.min.js" async=""></script>
        <script>
    // load Branch
    (function(b,r,a,n,c,h,_,s,d,k){if(!b[n]||!b[n]._q){for(;s<_.length;)c(h,_[s++]);d=r.createElement(a);d.async=1;d.src="https://cdn.branch.io/branch-latest.min.js";k=r.getElementsByTagName(a)[0];k.parentNode.insertBefore(d,k);b[n]=h")(window,document,"script","branch",function(b,r){b[r]=function(){b._q.push([r,arguments])",{_q:[],_v:1},"addListener banner closeBanner closeJourney data deepview deepviewCta first init link logout removeListener setBranchViewData setIdentity track trackCommerceEvent logEvent disableTracking getBrowserFingerprintId crossPlatformIds lastAttributedTouchData setAPIResponseCallback qrCode".split(" "), 0);
    // init Branch
        branch.init('key_live_jvpFKzCnp6CFJuRlLTXd6naowrfXtqHm', {'no_journeys': true});
    branch.setIdentity('buid_29975721');
    </script>
            <script src="https://cdn.onesignal.com/sdks/OneSignalPageSDKES6.js?v=151606" async=""></script><script src="https://cdn-ukwest.onetrust.com/scripttemplates/202307.1.0/otBannerSdk.js" async="" type="text/javascript"></script><script type="text/javascript" async="" src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/945075724/?random=1730560924305&amp;cv=9&amp;fst=1730560924305&amp;num=1&amp;guid=ON&amp;resp=GooglemKTybQhCsO&amp;eid=376635470%2C375603260%2C466465925%2C512247839&amp;u_h=1080&amp;u_w=1920&amp;u_ah=1032&amp;u_aw=1920&amp;u_cd=24&amp;u_his=5&amp;u_tz=120&amp;u_java=false&amp;u_nplug=5&amp;u_nmime=2&amp;sendb=1&amp;ig=1&amp;frm=0&amp;url=https%3A%2F%2Fwww.bark.com%2Fbuyers%2Fdashboard%2F&amp;ref=https%3A%2F%2Fwww.bark.com%2Fbuyers%2Fbark%2FBjM3bN%2F%3Fblt%3D3250-9b352ea504df485efea89f61dfc1d1f934dc7f42%26bli%3DemnvV6&amp;tiba=Bark.com%20-%20My%20Barks&amp;hn=www.googleadservices.com&amp;rfmt=3&amp;fmt=4"></script><script src="https://bat.bing.com/p/action/5176741.js" type="text/javascript" async="" data-ueto="ueto_c5c2d7f349"></script><script async="" src="https://www.googletagmanager.com/gtag/js?id=AW-997711212" id="gtm-remarketing"></script><style id="onetrust-style">#onetrust-banner-sdk{-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}#onetrust-banner-sdk .onetrust-vendors-list-handler{cursor:pointer;color:#1f96db;font-size:inherit;font-weight:700;text-decoration:none;margin-left:5px}#onetrust-banner-sdk .onetrust-vendors-list-handler:hover{color:#1f96db}#onetrust-banner-sdk:focus{outline:2px solid #000;outline-offset:-2px}#onetrust-banner-sdk a:focus{outline:2px solid #000}#onetrust-banner-sdk #onetrust-accept-btn-handler,#onetrust-banner-sdk #onetrust-reject-all-handler,#onetrust-banner-sdk #onetrust-pc-btn-handler{outline-offset:1px}#onetrust-banner-sdk.ot-bnr-w-logo .ot-bnr-logo{height:64px;width:64px}#onetrust-banner-sdk .ot-tcf2-vendor-count.ot-text-bold{font-weight:700}#onetrust-banner-sdk .ot-close-icon,#onetrust-pc-sdk .ot-close-icon,#ot-sync-ntfy .ot-close-icon{background-size:contain;background-repeat:no-repeat;background-position:center;height:12px;width:12px}#onetrust-banner-sdk .powered-by-logo,#onetrust-banner-sdk .ot-pc-footer-logo a,#onetrust-pc-sdk .powered-by-logo,#onetrust-pc-sdk .ot-pc-footer-logo a,#ot-sync-ntfy .powered-by-logo,#ot-sync-ntfy .ot-pc-footer-logo a{background-size:contain;background-repeat:no-repeat;background-position:center;height:25px;width:152px;display:block;text-decoration:none;font-size:.75em}#onetrust-banner-sdk .powered-by-logo:hover,#onetrust-banner-sdk .ot-pc-footer-logo a:hover,#onetrust-pc-sdk .powered-by-logo:hover,#onetrust-pc-sdk .ot-pc-footer-logo a:hover,#ot-sync-ntfy .powered-by-logo:hover,#ot-sync-ntfy .ot-pc-footer-logo a:hover{color:#565656}#onetrust-banner-sdk h3 *,#onetrust-banner-sdk h4 *,#onetrust-banner-sdk h6 *,#onetrust-banner-sdk button *,#onetrust-banner-sdk a[data-parent-id] *,#onetrust-pc-sdk h3 *,#onetrust-pc-sdk h4 *,#onetrust-pc-sdk h6 *,#onetrust-pc-sdk button *,#onetrust-pc-sdk a[data-parent-id] *,#ot-sync-ntfy h3 *,#ot-sync-ntfy h4 *,#ot-sync-ntfy h6 *,#ot-sync-ntfy button *,#ot-sync-ntfy a[data-parent-id] *{font-size:inherit;font-weight:inherit;color:inherit}#onetrust-banner-sdk .ot-hide,#onetrust-pc-sdk .ot-hide,#ot-sync-ntfy .ot-hide{display:none!important}#onetrust-banner-sdk button.ot-link-btn:hover,#onetrust-pc-sdk button.ot-link-btn:hover,#ot-sync-ntfy button.ot-link-btn:hover{text-decoration:underline;opacity:1}#onetrust-pc-sdk .ot-sdk-row .ot-sdk-column{padding:0}#onetrust-pc-sdk .ot-sdk-container{padding-right:0}#onetrust-pc-sdk .ot-sdk-row{flex-direction:initial;width:100%}#onetrust-pc-sdk [type=checkbox]:checked,#onetrust-pc-sdk [type=checkbox]:not(:checked){pointer-events:initial}#onetrust-pc-sdk [type=checkbox]:disabled+label::before,#onetrust-pc-sdk [type=checkbox]:disabled+label:after,#onetrust-pc-sdk [type=checkbox]:disabled+label{pointer-events:none;opacity:.7}#onetrust-pc-sdk #vendor-list-content{transform:translate3d(0,0,0)}#onetrust-pc-sdk li input[type=checkbox]{z-index:1}#onetrust-pc-sdk li .ot-checkbox label{z-index:2}#onetrust-pc-sdk li .ot-checkbox input[type=checkbox]{height:auto;width:auto}#onetrust-pc-sdk li .host-title a,#onetrust-pc-sdk li .ot-host-name a,#onetrust-pc-sdk li .accordion-text,#onetrust-pc-sdk li .ot-acc-txt{z-index:2;position:relative}#onetrust-pc-sdk input{margin:3px .1ex}#onetrust-pc-sdk .pc-logo,#onetrust-pc-sdk .ot-pc-logo{height:60px;width:180px;background-position:center;background-size:contain;background-repeat:no-repeat;display:inline-flex;justify-content:center;align-items:center}#onetrust-pc-sdk .pc-logo img,#onetrust-pc-sdk .ot-pc-logo img{max-height:100%;max-width:100%}#onetrust-pc-sdk .screen-reader-only,#onetrust-pc-sdk .ot-scrn-rdr,.ot-sdk-cookie-policy .screen-reader-only,.ot-sdk-cookie-policy .ot-scrn-rdr{border:0;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px}#onetrust-pc-sdk.ot-fade-in,.onetrust-pc-dark-filter.ot-fade-in,#onetrust-banner-sdk.ot-fade-in{animation-name:onetrust-fade-in;animation-duration:400ms;animation-timing-function:ease-in-out}#onetrust-pc-sdk.ot-hide{display:none!important}.onetrust-pc-dark-filter.ot-hide{display:none!important}#ot-sdk-btn.ot-sdk-show-settings,#ot-sdk-btn.optanon-show-settings{color:#68b631;border:1px solid #68b631;height:auto;white-space:normal;word-wrap:break-word;padding:.8em 2em;font-size:.8em;line-height:1.2;cursor:pointer;-moz-transition:.1s ease;-o-transition:.1s ease;-webkit-transition:1s ease;transition:.1s ease}#ot-sdk-btn.ot-sdk-show-settings:hover,#ot-sdk-btn.optanon-show-settings:hover{color:#fff;background-color:#68b631}.onetrust-pc-dark-filter{background:rgba(0,0,0,.5);z-index:2147483646;width:100%;height:100%;overflow:hidden;position:fixed;top:0;bottom:0;left:0}@keyframes onetrust-fade-in{0%{opacity:0}100%{opacity:1".ot-cookie-label{text-decoration:underline}@media only screen and (min-width:426px)and (max-width:896px)and (orientation:landscape){#onetrust-pc-sdk p{font-size:.75em"#onetrust-banner-sdk .banner-option-input:focus+label{outline:1px solid #000;outline-style:auto}.category-vendors-list-handler+a:focus,.category-vendors-list-handler+a:focus-visible{outline:2px solid #000}#onetrust-pc-sdk .ot-userid-title{margin-top:10px}#onetrust-pc-sdk .ot-userid-title>span,#onetrust-pc-sdk .ot-userid-timestamp>span{font-weight:700}#onetrust-pc-sdk .ot-userid-desc{font-style:italic}#onetrust-pc-sdk .ot-host-desc a{pointer-events:initial}#onetrust-pc-sdk .ot-ven-hdr>p a{position:relative;z-index:2;pointer-events:initial}#onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-vnd-info a,#onetrust-pc-sdk .ot-vs-list .ot-vnd-item .ot-vnd-info a{margin-right:auto}#onetrust-pc-sdk .ot-pc-footer-logo img{width:136px;height:16px}#onetrust-banner-sdk .ot-optout-signal,#onetrust-pc-sdk .ot-optout-signal{border:1px solid #32ae88;border-radius:3px;padding:5px;margin-bottom:10px;background-color:#f9fffa;font-size:.85rem;line-height:2}#onetrust-banner-sdk .ot-optout-signal .ot-optout-icon,#onetrust-pc-sdk .ot-optout-signal .ot-optout-icon{display:inline;margin-right:5px}#onetrust-banner-sdk .ot-optout-signal svg,#onetrust-pc-sdk .ot-optout-signal svg{height:20px;width:30px;transform:scale(.5)}#onetrust-banner-sdk .ot-optout-signal svg path,#onetrust-pc-sdk .ot-optout-signal svg path{fill:#32ae88}#onetrust-banner-sdk,#onetrust-pc-sdk,#ot-sdk-cookie-policy,#ot-sync-ntfy{font-size:16px}#onetrust-banner-sdk *,#onetrust-banner-sdk ::after,#onetrust-banner-sdk ::before,#onetrust-pc-sdk *,#onetrust-pc-sdk ::after,#onetrust-pc-sdk ::before,#ot-sdk-cookie-policy *,#ot-sdk-cookie-policy ::after,#ot-sdk-cookie-policy ::before,#ot-sync-ntfy *,#ot-sync-ntfy ::after,#ot-sync-ntfy ::before{-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box}#onetrust-banner-sdk div,#onetrust-banner-sdk span,#onetrust-banner-sdk h1,#onetrust-banner-sdk h2,#onetrust-banner-sdk h3,#onetrust-banner-sdk h4,#onetrust-banner-sdk h5,#onetrust-banner-sdk h6,#onetrust-banner-sdk p,#onetrust-banner-sdk img,#onetrust-banner-sdk svg,#onetrust-banner-sdk button,#onetrust-banner-sdk section,#onetrust-banner-sdk a,#onetrust-banner-sdk label,#onetrust-banner-sdk input,#onetrust-banner-sdk ul,#onetrust-banner-sdk li,#onetrust-banner-sdk nav,#onetrust-banner-sdk table,#onetrust-banner-sdk thead,#onetrust-banner-sdk tr,#onetrust-banner-sdk td,#onetrust-banner-sdk tbody,#onetrust-banner-sdk .ot-main-content,#onetrust-banner-sdk .ot-toggle,#onetrust-banner-sdk #ot-content,#onetrust-banner-sdk #ot-pc-content,#onetrust-banner-sdk .checkbox,#onetrust-pc-sdk div,#onetrust-pc-sdk span,#onetrust-pc-sdk h1,#onetrust-pc-sdk h2,#onetrust-pc-sdk h3,#onetrust-pc-sdk h4,#onetrust-pc-sdk h5,#onetrust-pc-sdk h6,#onetrust-pc-sdk p,#onetrust-pc-sdk img,#onetrust-pc-sdk svg,#onetrust-pc-sdk button,#onetrust-pc-sdk section,#onetrust-pc-sdk a,#onetrust-pc-sdk label,#onetrust-pc-sdk input,#onetrust-pc-sdk ul,#onetrust-pc-sdk li,#onetrust-pc-sdk nav,#onetrust-pc-sdk table,#onetrust-pc-sdk thead,#onetrust-pc-sdk tr,#onetrust-pc-sdk td,#onetrust-pc-sdk tbody,#onetrust-pc-sdk .ot-main-content,#onetrust-pc-sdk .ot-toggle,#onetrust-pc-sdk #ot-content,#onetrust-pc-sdk #ot-pc-content,#onetrust-pc-sdk .checkbox,#ot-sdk-cookie-policy div,#ot-sdk-cookie-policy span,#ot-sdk-cookie-policy h1,#ot-sdk-cookie-policy h2,#ot-sdk-cookie-policy h3,#ot-sdk-cookie-policy h4,#ot-sdk-cookie-policy h5,#ot-sdk-cookie-policy h6,#ot-sdk-cookie-policy p,#ot-sdk-cookie-policy img,#ot-sdk-cookie-policy svg,#ot-sdk-cookie-policy button,#ot-sdk-cookie-policy section,#ot-sdk-cookie-policy a,#ot-sdk-cookie-policy label,#ot-sdk-cookie-policy input,#ot-sdk-cookie-policy ul,#ot-sdk-cookie-policy li,#ot-sdk-cookie-policy nav,#ot-sdk-cookie-policy table,#ot-sdk-cookie-policy thead,#ot-sdk-cookie-policy tr,#ot-sdk-cookie-policy td,#ot-sdk-cookie-policy tbody,#ot-sdk-cookie-policy .ot-main-content,#ot-sdk-cookie-policy .ot-toggle,#ot-sdk-cookie-policy #ot-content,#ot-sdk-cookie-policy #ot-pc-content,#ot-sdk-cookie-policy .checkbox,#ot-sync-ntfy div,#ot-sync-ntfy span,#ot-sync-ntfy h1,#ot-sync-ntfy h2,#ot-sync-ntfy h3,#ot-sync-ntfy h4,#ot-sync-ntfy h5,#ot-sync-ntfy h6,#ot-sync-ntfy p,#ot-sync-ntfy img,#ot-sync-ntfy svg,#ot-sync-ntfy button,#ot-sync-ntfy section,#ot-sync-ntfy a,#ot-sync-ntfy label,#ot-sync-ntfy input,#ot-sync-ntfy ul,#ot-sync-ntfy li,#ot-sync-ntfy nav,#ot-sync-ntfy table,#ot-sync-ntfy thead,#ot-sync-ntfy tr,#ot-sync-ntfy td,#ot-sync-ntfy tbody,#ot-sync-ntfy .ot-main-content,#ot-sync-ntfy .ot-toggle,#ot-sync-ntfy #ot-content,#ot-sync-ntfy #ot-pc-content,#ot-sync-ntfy .checkbox{font-family:inherit;font-weight:400;-webkit-font-smoothing:auto;letter-spacing:normal;line-height:normal;padding:0;margin:0;height:auto;min-height:0;max-height:none;width:auto;min-width:0;max-width:none;border-radius:0;border:none;clear:none;float:none;position:static;bottom:auto;left:auto;right:auto;top:auto;text-align:left;text-decoration:none;text-indent:0;text-shadow:none;text-transform:none;white-space:normal;background:0 0;overflow:visible;vertical-align:baseline;visibility:visible;z-index:auto;box-shadow:none}#onetrust-banner-sdk label:before,#onetrust-banner-sdk label:after,#onetrust-banner-sdk .checkbox:after,#onetrust-banner-sdk .checkbox:before,#onetrust-pc-sdk label:before,#onetrust-pc-sdk label:after,#onetrust-pc-sdk .checkbox:after,#onetrust-pc-sdk .checkbox:before,#ot-sdk-cookie-policy label:before,#ot-sdk-cookie-policy label:after,#ot-sdk-cookie-policy .checkbox:after,#ot-sdk-cookie-policy .checkbox:before,#ot-sync-ntfy label:before,#ot-sync-ntfy label:after,#ot-sync-ntfy .checkbox:after,#ot-sync-ntfy .checkbox:before{content:"";content:none}#onetrust-banner-sdk .ot-sdk-container,#onetrust-pc-sdk .ot-sdk-container,#ot-sdk-cookie-policy .ot-sdk-container{position:relative;width:100%;max-width:100%;margin:0 auto;padding:0 20px;box-sizing:border-box}#onetrust-banner-sdk .ot-sdk-column,#onetrust-banner-sdk .ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-column,#onetrust-pc-sdk .ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-column,#ot-sdk-cookie-policy .ot-sdk-columns{width:100%;float:left;box-sizing:border-box;padding:0;display:initial}@media(min-width:400px){#onetrust-banner-sdk .ot-sdk-container,#onetrust-pc-sdk .ot-sdk-container,#ot-sdk-cookie-policy .ot-sdk-container{width:90%;padding:0"@media(min-width:550px){#onetrust-banner-sdk .ot-sdk-container,#onetrust-pc-sdk .ot-sdk-container,#ot-sdk-cookie-policy .ot-sdk-container{width:100%}#onetrust-banner-sdk .ot-sdk-column,#onetrust-banner-sdk .ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-column,#onetrust-pc-sdk .ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-column,#ot-sdk-cookie-policy .ot-sdk-columns{margin-left:4%}#onetrust-banner-sdk .ot-sdk-column:first-child,#onetrust-banner-sdk .ot-sdk-columns:first-child,#onetrust-pc-sdk .ot-sdk-column:first-child,#onetrust-pc-sdk .ot-sdk-columns:first-child,#ot-sdk-cookie-policy .ot-sdk-column:first-child,#ot-sdk-cookie-policy .ot-sdk-columns:first-child{margin-left:0}#onetrust-banner-sdk .ot-sdk-two.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-two.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-two.ot-sdk-columns{width:13.3333333333%}#onetrust-banner-sdk .ot-sdk-three.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-three.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-three.ot-sdk-columns{width:22%}#onetrust-banner-sdk .ot-sdk-four.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-four.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-four.ot-sdk-columns{width:30.6666666667%}#onetrust-banner-sdk .ot-sdk-eight.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-eight.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-eight.ot-sdk-columns{width:65.3333333333%}#onetrust-banner-sdk .ot-sdk-nine.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-nine.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-nine.ot-sdk-columns{width:74%}#onetrust-banner-sdk .ot-sdk-ten.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-ten.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-ten.ot-sdk-columns{width:82.6666666667%}#onetrust-banner-sdk .ot-sdk-eleven.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-eleven.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-eleven.ot-sdk-columns{width:91.3333333333%}#onetrust-banner-sdk .ot-sdk-twelve.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-twelve.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-twelve.ot-sdk-columns{width:100%;margin-left:0"#onetrust-banner-sdk h1,#onetrust-banner-sdk h2,#onetrust-banner-sdk h3,#onetrust-banner-sdk h4,#onetrust-banner-sdk h5,#onetrust-banner-sdk h6,#onetrust-pc-sdk h1,#onetrust-pc-sdk h2,#onetrust-pc-sdk h3,#onetrust-pc-sdk h4,#onetrust-pc-sdk h5,#onetrust-pc-sdk h6,#ot-sdk-cookie-policy h1,#ot-sdk-cookie-policy h2,#ot-sdk-cookie-policy h3,#ot-sdk-cookie-policy h4,#ot-sdk-cookie-policy h5,#ot-sdk-cookie-policy h6{margin-top:0;font-weight:600;font-family:inherit}#onetrust-banner-sdk h1,#onetrust-pc-sdk h1,#ot-sdk-cookie-policy h1{font-size:1.5rem;line-height:1.2}#onetrust-banner-sdk h2,#onetrust-pc-sdk h2,#ot-sdk-cookie-policy h2{font-size:1.5rem;line-height:1.25}#onetrust-banner-sdk h3,#onetrust-pc-sdk h3,#ot-sdk-cookie-policy h3{font-size:1.5rem;line-height:1.3}#onetrust-banner-sdk h4,#onetrust-pc-sdk h4,#ot-sdk-cookie-policy h4{font-size:1.5rem;line-height:1.35}#onetrust-banner-sdk h5,#onetrust-pc-sdk h5,#ot-sdk-cookie-policy h5{font-size:1.5rem;line-height:1.5}#onetrust-banner-sdk h6,#onetrust-pc-sdk h6,#ot-sdk-cookie-policy h6{font-size:1.5rem;line-height:1.6}@media(min-width:550px){#onetrust-banner-sdk h1,#onetrust-pc-sdk h1,#ot-sdk-cookie-policy h1{font-size:1.5rem}#onetrust-banner-sdk h2,#onetrust-pc-sdk h2,#ot-sdk-cookie-policy h2{font-size:1.5rem}#onetrust-banner-sdk h3,#onetrust-pc-sdk h3,#ot-sdk-cookie-policy h3{font-size:1.5rem}#onetrust-banner-sdk h4,#onetrust-pc-sdk h4,#ot-sdk-cookie-policy h4{font-size:1.5rem}#onetrust-banner-sdk h5,#onetrust-pc-sdk h5,#ot-sdk-cookie-policy h5{font-size:1.5rem}#onetrust-banner-sdk h6,#onetrust-pc-sdk h6,#ot-sdk-cookie-policy h6{font-size:1.5rem"#onetrust-banner-sdk p,#onetrust-pc-sdk p,#ot-sdk-cookie-policy p{margin:0 0 1em;font-family:inherit;line-height:normal}#onetrust-banner-sdk a,#onetrust-pc-sdk a,#ot-sdk-cookie-policy a{color:#565656;text-decoration:underline}#onetrust-banner-sdk a:hover,#onetrust-pc-sdk a:hover,#ot-sdk-cookie-policy a:hover{color:#565656;text-decoration:none}#onetrust-banner-sdk .ot-sdk-button,#onetrust-banner-sdk button,#onetrust-pc-sdk .ot-sdk-button,#onetrust-pc-sdk button,#ot-sdk-cookie-policy .ot-sdk-button,#ot-sdk-cookie-policy button{margin-bottom:1rem;font-family:inherit}#onetrust-banner-sdk .ot-sdk-button,#onetrust-banner-sdk button,#onetrust-pc-sdk .ot-sdk-button,#onetrust-pc-sdk button,#ot-sdk-cookie-policy .ot-sdk-button,#ot-sdk-cookie-policy button{display:inline-block;height:38px;padding:0 30px;color:#555;text-align:center;font-size:.9em;font-weight:400;line-height:38px;letter-spacing:.01em;text-decoration:none;white-space:nowrap;background-color:transparent;border-radius:2px;border:1px solid #bbb;cursor:pointer;box-sizing:border-box}#onetrust-banner-sdk .ot-sdk-button:hover,#onetrust-banner-sdk :not(.ot-leg-btn-container)>button:not(.ot-link-btn):hover,#onetrust-banner-sdk :not(.ot-leg-btn-container)>button:not(.ot-link-btn):focus,#onetrust-pc-sdk .ot-sdk-button:hover,#onetrust-pc-sdk :not(.ot-leg-btn-container)>button:not(.ot-link-btn):hover,#onetrust-pc-sdk :not(.ot-leg-btn-container)>button:not(.ot-link-btn):focus,#ot-sdk-cookie-policy .ot-sdk-button:hover,#ot-sdk-cookie-policy :not(.ot-leg-btn-container)>button:not(.ot-link-btn):hover,#ot-sdk-cookie-policy :not(.ot-leg-btn-container)>button:not(.ot-link-btn):focus{color:#333;border-color:#888;opacity:.7}#onetrust-banner-sdk .ot-sdk-button:focus,#onetrust-banner-sdk :not(.ot-leg-btn-container)>button:focus,#onetrust-pc-sdk .ot-sdk-button:focus,#onetrust-pc-sdk :not(.ot-leg-btn-container)>button:focus,#ot-sdk-cookie-policy .ot-sdk-button:focus,#ot-sdk-cookie-policy :not(.ot-leg-btn-container)>button:focus{outline:2px solid #000}#onetrust-banner-sdk .ot-sdk-button.ot-sdk-button-primary,#onetrust-banner-sdk button.ot-sdk-button-primary,#onetrust-banner-sdk input[type=submit].ot-sdk-button-primary,#onetrust-banner-sdk input[type=reset].ot-sdk-button-primary,#onetrust-banner-sdk input[type=button].ot-sdk-button-primary,#onetrust-pc-sdk .ot-sdk-button.ot-sdk-button-primary,#onetrust-pc-sdk button.ot-sdk-button-primary,#onetrust-pc-sdk input[type=submit].ot-sdk-button-primary,#onetrust-pc-sdk input[type=reset].ot-sdk-button-primary,#onetrust-pc-sdk input[type=button].ot-sdk-button-primary,#ot-sdk-cookie-policy .ot-sdk-button.ot-sdk-button-primary,#ot-sdk-cookie-policy button.ot-sdk-button-primary,#ot-sdk-cookie-policy input[type=submit].ot-sdk-button-primary,#ot-sdk-cookie-policy input[type=reset].ot-sdk-button-primary,#ot-sdk-cookie-policy input[type=button].ot-sdk-button-primary{color:#fff;background-color:#33c3f0;border-color:#33c3f0}#onetrust-banner-sdk .ot-sdk-button.ot-sdk-button-primary:hover,#onetrust-banner-sdk button.ot-sdk-button-primary:hover,#onetrust-banner-sdk input[type=submit].ot-sdk-button-primary:hover,#onetrust-banner-sdk input[type=reset].ot-sdk-button-primary:hover,#onetrust-banner-sdk input[type=button].ot-sdk-button-primary:hover,#onetrust-banner-sdk .ot-sdk-button.ot-sdk-button-primary:focus,#onetrust-banner-sdk button.ot-sdk-button-primary:focus,#onetrust-banner-sdk input[type=submit].ot-sdk-button-primary:focus,#onetrust-banner-sdk input[type=reset].ot-sdk-button-primary:focus,#onetrust-banner-sdk input[type=button].ot-sdk-button-primary:focus,#onetrust-pc-sdk .ot-sdk-button.ot-sdk-button-primary:hover,#onetrust-pc-sdk button.ot-sdk-button-primary:hover,#onetrust-pc-sdk input[type=submit].ot-sdk-button-primary:hover,#onetrust-pc-sdk input[type=reset].ot-sdk-button-primary:hover,#onetrust-pc-sdk input[type=button].ot-sdk-button-primary:hover,#onetrust-pc-sdk .ot-sdk-button.ot-sdk-button-primary:focus,#onetrust-pc-sdk button.ot-sdk-button-primary:focus,#onetrust-pc-sdk input[type=submit].ot-sdk-button-primary:focus,#onetrust-pc-sdk input[type=reset].ot-sdk-button-primary:focus,#onetrust-pc-sdk input[type=button].ot-sdk-button-primary:focus,#ot-sdk-cookie-policy .ot-sdk-button.ot-sdk-button-primary:hover,#ot-sdk-cookie-policy button.ot-sdk-button-primary:hover,#ot-sdk-cookie-policy input[type=submit].ot-sdk-button-primary:hover,#ot-sdk-cookie-policy input[type=reset].ot-sdk-button-primary:hover,#ot-sdk-cookie-policy input[type=button].ot-sdk-button-primary:hover,#ot-sdk-cookie-policy .ot-sdk-button.ot-sdk-button-primary:focus,#ot-sdk-cookie-policy button.ot-sdk-button-primary:focus,#ot-sdk-cookie-policy input[type=submit].ot-sdk-button-primary:focus,#ot-sdk-cookie-policy input[type=reset].ot-sdk-button-primary:focus,#ot-sdk-cookie-policy input[type=button].ot-sdk-button-primary:focus{color:#fff;background-color:#1eaedb;border-color:#1eaedb}#onetrust-banner-sdk input[type=text],#onetrust-pc-sdk input[type=text],#ot-sdk-cookie-policy input[type=text]{height:38px;padding:6px 10px;background-color:#fff;border:1px solid #d1d1d1;border-radius:4px;box-shadow:none;box-sizing:border-box}#onetrust-banner-sdk input[type=text],#onetrust-pc-sdk input[type=text],#ot-sdk-cookie-policy input[type=text]{-webkit-appearance:none;-moz-appearance:none;appearance:none}#onetrust-banner-sdk input[type=text]:focus,#onetrust-pc-sdk input[type=text]:focus,#ot-sdk-cookie-policy input[type=text]:focus{border:1px solid #000;outline:0}#onetrust-banner-sdk label,#onetrust-pc-sdk label,#ot-sdk-cookie-policy label{display:block;margin-bottom:.5rem;font-weight:600}#onetrust-banner-sdk input[type=checkbox],#onetrust-pc-sdk input[type=checkbox],#ot-sdk-cookie-policy input[type=checkbox]{display:inline}#onetrust-banner-sdk ul,#onetrust-pc-sdk ul,#ot-sdk-cookie-policy ul{list-style:circle inside}#onetrust-banner-sdk ul,#onetrust-pc-sdk ul,#ot-sdk-cookie-policy ul{padding-left:0;margin-top:0}#onetrust-banner-sdk ul ul,#onetrust-pc-sdk ul ul,#ot-sdk-cookie-policy ul ul{margin:1.5rem 0 1.5rem 3rem;font-size:90%}#onetrust-banner-sdk li,#onetrust-pc-sdk li,#ot-sdk-cookie-policy li{margin-bottom:1rem}#onetrust-banner-sdk th,#onetrust-banner-sdk td,#onetrust-pc-sdk th,#onetrust-pc-sdk td,#ot-sdk-cookie-policy th,#ot-sdk-cookie-policy td{padding:12px 15px;text-align:left;border-bottom:1px solid #e1e1e1}#onetrust-banner-sdk button,#onetrust-pc-sdk button,#ot-sdk-cookie-policy button{margin-bottom:1rem;font-family:inherit}#onetrust-banner-sdk .ot-sdk-container:after,#onetrust-banner-sdk .ot-sdk-row:after,#onetrust-pc-sdk .ot-sdk-container:after,#onetrust-pc-sdk .ot-sdk-row:after,#ot-sdk-cookie-policy .ot-sdk-container:after,#ot-sdk-cookie-policy .ot-sdk-row:after{content:"";display:table;clear:both}#onetrust-banner-sdk .ot-sdk-row,#onetrust-pc-sdk .ot-sdk-row,#ot-sdk-cookie-policy .ot-sdk-row{margin:0;max-width:none;display:block}#onetrust-banner-sdk{box-shadow:0 0 18px rgba(0,0,0,.2)}#onetrust-banner-sdk.otFlat{position:fixed;z-index:2147483645;bottom:0;right:0;left:0;background-color:#fff;max-height:90%;overflow-x:hidden;overflow-y:auto}#onetrust-banner-sdk.otFlat.top{top:0px;bottom:auto}#onetrust-banner-sdk.otRelFont{font-size:1rem}#onetrust-banner-sdk>.ot-sdk-container{overflow:hidden}#onetrust-banner-sdk::-webkit-scrollbar{width:11px}#onetrust-banner-sdk::-webkit-scrollbar-thumb{border-radius:10px;background:#c1c1c1}#onetrust-banner-sdk{scrollbar-arrow-color:#c1c1c1;scrollbar-darkshadow-color:#c1c1c1;scrollbar-face-color:#c1c1c1;scrollbar-shadow-color:#c1c1c1}#onetrust-banner-sdk #onetrust-policy{margin:1.25em 0 .625em 2em;overflow:hidden}#onetrust-banner-sdk #onetrust-policy .ot-gv-list-handler{float:left;font-size:.82em;padding:0;margin-bottom:0;border:0;line-height:normal;height:auto;width:auto}#onetrust-banner-sdk #onetrust-policy-title{font-size:1.2em;line-height:1.3;margin-bottom:10px}#onetrust-banner-sdk #onetrust-policy-text{clear:both;text-align:left;font-size:.88em;line-height:1.4}#onetrust-banner-sdk #onetrust-policy-text *{font-size:inherit;line-height:inherit}#onetrust-banner-sdk #onetrust-policy-text a{font-weight:bold;margin-left:5px}#onetrust-banner-sdk #onetrust-policy-title,#onetrust-banner-sdk #onetrust-policy-text{color:dimgray;float:left}#onetrust-banner-sdk #onetrust-button-group-parent{min-height:1px;text-align:center}#onetrust-banner-sdk #onetrust-button-group{display:inline-block}#onetrust-banner-sdk #onetrust-accept-btn-handler,#onetrust-banner-sdk #onetrust-reject-all-handler,#onetrust-banner-sdk #onetrust-pc-btn-handler{background-color:#68b631;color:#fff;border-color:#68b631;margin-right:1em;min-width:125px;height:auto;white-space:normal;word-break:break-word;word-wrap:break-word;padding:12px 10px;line-height:1.2;font-size:.813em;font-weight:600}#onetrust-banner-sdk #onetrust-pc-btn-handler.cookie-setting-link{background-color:#fff;border:none;color:#68b631;text-decoration:underline;padding-left:0;padding-right:0}#onetrust-banner-sdk .onetrust-close-btn-ui{width:44px;height:44px;background-size:12px;border:none;position:relative;margin:auto;padding:0}#onetrust-banner-sdk .banner_logo{display:none}#onetrust-banner-sdk.ot-bnr-w-logo .ot-bnr-logo{position:absolute;top:50%;transform:translateY(-50%);left:0px}#onetrust-banner-sdk.ot-bnr-w-logo #onetrust-policy{margin-left:65px}#onetrust-banner-sdk .ot-b-addl-desc{clear:both;float:left;display:block}#onetrust-banner-sdk #banner-options{float:left;display:table;margin-right:0;margin-left:1em;width:calc(100% - 1em)}#onetrust-banner-sdk .banner-option-input{cursor:pointer;width:auto;height:auto;border:none;padding:0;padding-right:3px;margin:0 0 10px;font-size:.82em;line-height:1.4}#onetrust-banner-sdk .banner-option-input *{pointer-events:none;font-size:inherit;line-height:inherit}#onetrust-banner-sdk .banner-option-input[aria-expanded=true]~.banner-option-details{display:block;height:auto}#onetrust-banner-sdk .banner-option-input[aria-expanded=true] .ot-arrow-container{transform:rotate(90deg)}#onetrust-banner-sdk .banner-option{margin-bottom:12px;margin-left:0;border:none;float:left;padding:0}#onetrust-banner-sdk .banner-option:first-child{padding-left:2px}#onetrust-banner-sdk .banner-option:not(:first-child){padding:0;border:none}#onetrust-banner-sdk .banner-option-header{cursor:pointer;display:inline-block}#onetrust-banner-sdk .banner-option-header :first-child{color:dimgray;font-weight:bold;float:left}#onetrust-banner-sdk .banner-option-header .ot-arrow-container{display:inline-block;border-top:6px solid rgba(0,0,0,0);border-bottom:6px solid rgba(0,0,0,0);border-left:6px solid dimgray;margin-left:10px;vertical-align:middle}#onetrust-banner-sdk .banner-option-details{display:none;font-size:.83em;line-height:1.5;padding:10px 0px 5px 10px;margin-right:10px;height:0px}#onetrust-banner-sdk .banner-option-details *{font-size:inherit;line-height:inherit;color:dimgray}#onetrust-banner-sdk .ot-arrow-container,#onetrust-banner-sdk .banner-option-details{transition:all 300ms ease-in 0s;-webkit-transition:all 300ms ease-in 0s;-moz-transition:all 300ms ease-in 0s;-o-transition:all 300ms ease-in 0s}#onetrust-banner-sdk .ot-dpd-container{float:left}#onetrust-banner-sdk .ot-dpd-title{margin-bottom:10px}#onetrust-banner-sdk .ot-dpd-title,#onetrust-banner-sdk .ot-dpd-desc{font-size:.88em;line-height:1.4;color:dimgray}#onetrust-banner-sdk .ot-dpd-title *,#onetrust-banner-sdk .ot-dpd-desc *{font-size:inherit;line-height:inherit}#onetrust-banner-sdk.ot-iab-2 #onetrust-policy-text *{margin-bottom:0}#onetrust-banner-sdk.ot-iab-2 .onetrust-vendors-list-handler{display:block;margin-left:0;margin-top:5px;clear:both;margin-bottom:0;padding:0;border:0;height:auto;width:auto}#onetrust-banner-sdk.ot-iab-2 #onetrust-button-group button{display:block}#onetrust-banner-sdk.ot-close-btn-link{padding-top:25px}#onetrust-banner-sdk.ot-close-btn-link #onetrust-close-btn-container{top:15px;transform:none;right:15px}#onetrust-banner-sdk.ot-close-btn-link #onetrust-close-btn-container button{padding:0;white-space:pre-wrap;border:none;height:auto;line-height:1.5;text-decoration:underline;font-size:.69em}#onetrust-banner-sdk #onetrust-policy-text,#onetrust-banner-sdk .ot-dpd-desc,#onetrust-banner-sdk .ot-b-addl-desc{font-size:.813em;line-height:1.5}#onetrust-banner-sdk .ot-dpd-desc{margin-bottom:10px}#onetrust-banner-sdk .ot-dpd-desc>.ot-b-addl-desc{margin-top:10px;margin-bottom:10px;font-size:1em}@media only screen and (max-width: 425px){#onetrust-banner-sdk #onetrust-close-btn-container{position:absolute;top:6px;right:2px}#onetrust-banner-sdk #onetrust-policy{margin-left:0;margin-top:3em}#onetrust-banner-sdk #onetrust-button-group{display:block}#onetrust-banner-sdk #onetrust-accept-btn-handler,#onetrust-banner-sdk #onetrust-reject-all-handler,#onetrust-banner-sdk #onetrust-pc-btn-handler{width:100%}#onetrust-banner-sdk .onetrust-close-btn-ui{top:auto;transform:none}#onetrust-banner-sdk #onetrust-policy-title{display:inline;float:none}#onetrust-banner-sdk #banner-options{margin:0;padding:0;width:100%"@media only screen and (min-width: 426px)and (max-width: 896px){#onetrust-banner-sdk #onetrust-close-btn-container{position:absolute;top:0;right:0}#onetrust-banner-sdk #onetrust-policy{margin-left:1em;margin-right:1em}#onetrust-banner-sdk .onetrust-close-btn-ui{top:10px;right:10px}#onetrust-banner-sdk:not(.ot-iab-2) #onetrust-group-container{width:95%}#onetrust-banner-sdk.ot-iab-2 #onetrust-group-container{width:100%}#onetrust-banner-sdk.ot-bnr-w-logo #onetrust-button-group-parent{padding-left:50px}#onetrust-banner-sdk #onetrust-button-group-parent{width:100%;position:relative;margin-left:0}#onetrust-banner-sdk #onetrust-button-group button{display:inline-block}#onetrust-banner-sdk #onetrust-button-group{margin-right:0;text-align:center}#onetrust-banner-sdk .has-reject-all-button #onetrust-pc-btn-handler{float:left}#onetrust-banner-sdk .has-reject-all-button #onetrust-reject-all-handler,#onetrust-banner-sdk .has-reject-all-button #onetrust-accept-btn-handler{float:right}#onetrust-banner-sdk .has-reject-all-button #onetrust-button-group{width:calc(100% - 2em);margin-right:0}#onetrust-banner-sdk .has-reject-all-button #onetrust-pc-btn-handler.cookie-setting-link{padding-left:0px;text-align:left}#onetrust-banner-sdk.ot-buttons-fw .ot-sdk-three button{width:100%;text-align:center}#onetrust-banner-sdk.ot-buttons-fw #onetrust-button-group-parent button{float:none}#onetrust-banner-sdk.ot-buttons-fw #onetrust-pc-btn-handler.cookie-setting-link{text-align:center"@media only screen and (min-width: 550px){#onetrust-banner-sdk .banner-option:not(:first-child){border-left:1px solid #d8d8d8;padding-left:25px"@media only screen and (min-width: 425px)and (max-width: 550px){#onetrust-banner-sdk.ot-iab-2 #onetrust-button-group,#onetrust-banner-sdk.ot-iab-2 #onetrust-policy,#onetrust-banner-sdk.ot-iab-2 .banner-option{width:100%"@media only screen and (min-width: 769px){#onetrust-banner-sdk #onetrust-button-group{margin-right:30%}#onetrust-banner-sdk #banner-options{margin-left:2em;margin-right:5em;margin-bottom:1.25em;width:calc(100% - 7em)"@media only screen and (min-width: 897px)and (max-width: 1023px){#onetrust-banner-sdk.vertical-align-content #onetrust-button-group-parent{position:absolute;top:50%;left:75%;transform:translateY(-50%)}#onetrust-banner-sdk #onetrust-close-btn-container{top:50%;margin:auto;transform:translate(-50%, -50%);position:absolute;padding:0;right:0}#onetrust-banner-sdk #onetrust-close-btn-container button{position:relative;margin:0;right:-22px;top:2px"@media only screen and (min-width: 1024px){#onetrust-banner-sdk #onetrust-close-btn-container{top:50%;margin:auto;transform:translate(-50%, -50%);position:absolute;right:0}#onetrust-banner-sdk #onetrust-close-btn-container button{right:-12px}#onetrust-banner-sdk #onetrust-policy{margin-left:2em}#onetrust-banner-sdk.vertical-align-content #onetrust-button-group-parent{position:absolute;top:50%;left:60%;transform:translateY(-50%)}#onetrust-banner-sdk .ot-optout-signal{width:50%}#onetrust-banner-sdk.ot-iab-2 #onetrust-policy-title{width:50%}#onetrust-banner-sdk.ot-iab-2 #onetrust-policy-text,#onetrust-banner-sdk.ot-iab-2 :not(.ot-dpd-desc)>.ot-b-addl-desc{margin-bottom:1em;width:50%;border-right:1px solid #d8d8d8;padding-right:1rem}#onetrust-banner-sdk.ot-iab-2 #onetrust-policy-text{margin-bottom:0;padding-bottom:1em}#onetrust-banner-sdk.ot-iab-2 :not(.ot-dpd-desc)>.ot-b-addl-desc{margin-bottom:0;padding-bottom:1em}#onetrust-banner-sdk.ot-iab-2 .ot-dpd-container{width:45%;padding-left:1rem;display:inline-block;float:none}#onetrust-banner-sdk.ot-iab-2 .ot-dpd-title{line-height:1.7}#onetrust-banner-sdk.ot-iab-2 #onetrust-button-group-parent{left:auto;right:4%;margin-left:0}#onetrust-banner-sdk.ot-iab-2 #onetrust-button-group button{display:block}#onetrust-banner-sdk:not(.ot-iab-2) #onetrust-button-group-parent{margin:auto;width:30%}#onetrust-banner-sdk:not(.ot-iab-2) #onetrust-group-container{width:60%}#onetrust-banner-sdk #onetrust-button-group{margin-right:auto}#onetrust-banner-sdk #onetrust-accept-btn-handler,#onetrust-banner-sdk #onetrust-reject-all-handler,#onetrust-banner-sdk #onetrust-pc-btn-handler{margin-top:1em"@media only screen and (min-width: 890px){#onetrust-banner-sdk.ot-buttons-fw:not(.ot-iab-2) #onetrust-button-group-parent{padding-left:3%;padding-right:4%;margin-left:0}#onetrust-banner-sdk.ot-buttons-fw:not(.ot-iab-2) #onetrust-button-group{margin-right:0;margin-top:1.25em;width:100%}#onetrust-banner-sdk.ot-buttons-fw:not(.ot-iab-2) #onetrust-button-group button{width:100%;margin-bottom:5px;margin-top:5px}#onetrust-banner-sdk.ot-buttons-fw:not(.ot-iab-2) #onetrust-button-group button:last-of-type{margin-bottom:20px"@media only screen and (min-width: 1280px){#onetrust-banner-sdk:not(.ot-iab-2) #onetrust-group-container{width:55%}#onetrust-banner-sdk:not(.ot-iab-2) #onetrust-button-group-parent{width:44%;padding-left:2%;padding-right:2%}#onetrust-banner-sdk:not(.ot-iab-2).vertical-align-content #onetrust-button-group-parent{position:absolute;left:55%"
        #onetrust-consent-sdk #onetrust-banner-sdk {background-color: #FFFFFF;}
            #onetrust-consent-sdk #onetrust-policy-title,
                    #onetrust-consent-sdk #onetrust-policy-text,
                    #onetrust-consent-sdk .ot-b-addl-desc,
                    #onetrust-consent-sdk .ot-dpd-desc,
                    #onetrust-consent-sdk .ot-dpd-title,
                    #onetrust-consent-sdk #onetrust-policy-text *:not(.onetrust-vendors-list-handler),
                    #onetrust-consent-sdk .ot-dpd-desc *:not(.onetrust-vendors-list-handler),
                    #onetrust-consent-sdk #onetrust-banner-sdk #banner-options *,
                    #onetrust-banner-sdk .ot-cat-header,
                    #onetrust-banner-sdk .ot-optout-signal
                    {
                        color: #696969;
                    }
            #onetrust-consent-sdk #onetrust-banner-sdk .banner-option-details {
                    background-color: #E9E9E9;}
             #onetrust-consent-sdk #onetrust-banner-sdk a[href],
                    #onetrust-consent-sdk #onetrust-banner-sdk a[href] font,
                    #onetrust-consent-sdk #onetrust-banner-sdk .ot-link-btn
                        {
                            color: #696969;
                        }#onetrust-consent-sdk #onetrust-accept-btn-handler,
                         #onetrust-banner-sdk #onetrust-reject-all-handler {
                            background-color: #2d7af1;border-color: #2d7af1;
                color: #FFFFFF;
            }
            #onetrust-consent-sdk #onetrust-banner-sdk *:focus,
            #onetrust-consent-sdk #onetrust-banner-sdk:focus {
               outline-color: #121636;
               outline-width: 1px;
            }
            #onetrust-consent-sdk #onetrust-pc-btn-handler,
            #onetrust-consent-sdk #onetrust-pc-btn-handler.cookie-setting-link {
                color: #6C7191; border-color: #6C7191;
                background-color:
                #FFFFFF;
            }#ot-sdk-btn-floating.ot-floating-button {
    display: none;
}

@media only screen and (max-width: 425px) { 
    #onetrust-banner-sdk #onetrust-policy {
        margin-top: 1.25em;
    }
}
#onetrust-pc-sdk.otPcCenter{overflow:hidden;position:fixed;margin:0 auto;top:5%;right:0;left:0;width:40%;max-width:575px;min-width:575px;border-radius:2.5px;z-index:2147483647;background-color:#fff;-webkit-box-shadow:0px 2px 10px -3px #999;-moz-box-shadow:0px 2px 10px -3px #999;box-shadow:0px 2px 10px -3px #999}#onetrust-pc-sdk.otPcCenter[dir=rtl]{right:0;left:0}#onetrust-pc-sdk.otRelFont{font-size:1rem}#onetrust-pc-sdk .ot-optout-signal{margin-top:.625rem}#onetrust-pc-sdk #ot-addtl-venlst .ot-arw-cntr,#onetrust-pc-sdk #ot-addtl-venlst .ot-plus-minus,#onetrust-pc-sdk .ot-hide-tgl{visibility:hidden}#onetrust-pc-sdk #ot-addtl-venlst .ot-arw-cntr *,#onetrust-pc-sdk #ot-addtl-venlst .ot-plus-minus *,#onetrust-pc-sdk .ot-hide-tgl *{visibility:hidden}#onetrust-pc-sdk #ot-gn-venlst .ot-ven-item .ot-acc-hdr{min-height:40px}#onetrust-pc-sdk .ot-pc-header{height:39px;padding:10px 0 10px 30px;border-bottom:1px solid #e9e9e9}#onetrust-pc-sdk #ot-pc-title,#onetrust-pc-sdk #ot-category-title,#onetrust-pc-sdk .ot-cat-header,#onetrust-pc-sdk #ot-lst-title,#onetrust-pc-sdk .ot-ven-hdr .ot-ven-name,#onetrust-pc-sdk .ot-always-active{font-weight:bold;color:dimgray}#onetrust-pc-sdk .ot-always-active-group .ot-cat-header{width:55%;font-weight:700}#onetrust-pc-sdk .ot-cat-item p{clear:both;float:left;margin-top:10px;margin-bottom:5px;line-height:1.5;font-size:.812em;color:dimgray}#onetrust-pc-sdk .ot-close-icon{height:44px;width:44px;background-size:10px}#onetrust-pc-sdk #ot-pc-title{float:left;font-size:1em;line-height:1.5;margin-bottom:10px;margin-top:10px;width:100%}#onetrust-pc-sdk #accept-recommended-btn-handler{margin-right:10px;margin-bottom:25px;outline-offset:-1px}#onetrust-pc-sdk #ot-pc-desc{clear:both;width:100%;font-size:.812em;line-height:1.5;margin-bottom:25px}#onetrust-pc-sdk #ot-pc-desc a{margin-left:5px}#onetrust-pc-sdk #ot-pc-desc *{font-size:inherit;line-height:inherit}#onetrust-pc-sdk #ot-pc-desc ul li{padding:10px 0px}#onetrust-pc-sdk a{color:#656565;cursor:pointer}#onetrust-pc-sdk a:hover{color:#3860be}#onetrust-pc-sdk label{margin-bottom:0}#onetrust-pc-sdk #vdr-lst-dsc{font-size:.812em;line-height:1.5;padding:10px 15px 5px 15px}#onetrust-pc-sdk button{max-width:394px;padding:12px 30px;line-height:1;word-break:break-word;word-wrap:break-word;white-space:normal;font-weight:bold;height:auto}#onetrust-pc-sdk .ot-link-btn{padding:0;margin-bottom:0;border:0;font-weight:normal;line-height:normal;width:auto;height:auto}#onetrust-pc-sdk #ot-pc-content{position:absolute;overflow-y:scroll;padding-left:0px;padding-right:30px;top:60px;bottom:110px;margin:1px 3px 0 30px;width:calc(100% - 63px)}#onetrust-pc-sdk .ot-vs-list .ot-always-active,#onetrust-pc-sdk .ot-cat-grp .ot-always-active{float:right;clear:none;color:#3860be;margin:0;font-size:.813em;line-height:1.3}#onetrust-pc-sdk .ot-pc-scrollbar::-webkit-scrollbar-track{margin-right:20px}#onetrust-pc-sdk .ot-pc-scrollbar::-webkit-scrollbar{width:11px}#onetrust-pc-sdk .ot-pc-scrollbar::-webkit-scrollbar-thumb{border-radius:10px;background:#d8d8d8}#onetrust-pc-sdk input[type=checkbox]:focus+.ot-acc-hdr{outline:#000 1px solid}#onetrust-pc-sdk .ot-pc-scrollbar{scrollbar-arrow-color:#d8d8d8;scrollbar-darkshadow-color:#d8d8d8;scrollbar-face-color:#d8d8d8;scrollbar-shadow-color:#d8d8d8}#onetrust-pc-sdk .save-preference-btn-handler{margin-right:20px}#onetrust-pc-sdk .ot-pc-refuse-all-handler{margin-right:10px}#onetrust-pc-sdk #ot-pc-desc .privacy-notice-link{margin-left:0;margin-right:8px}#onetrust-pc-sdk #ot-pc-desc .ot-imprint-handler{margin-left:0;margin-right:8px}#onetrust-pc-sdk .ot-subgrp-cntr{display:inline-block;clear:both;width:100%;padding-top:15px}#onetrust-pc-sdk .ot-switch+.ot-subgrp-cntr{padding-top:10px}#onetrust-pc-sdk ul.ot-subgrps{margin:0;font-size:initial}#onetrust-pc-sdk ul.ot-subgrps li p,#onetrust-pc-sdk ul.ot-subgrps li h5{font-size:.813em;line-height:1.4;color:dimgray}#onetrust-pc-sdk ul.ot-subgrps .ot-switch{min-height:auto}#onetrust-pc-sdk ul.ot-subgrps .ot-switch-nob{top:0}#onetrust-pc-sdk ul.ot-subgrps .ot-acc-hdr{display:inline-block;width:100%}#onetrust-pc-sdk ul.ot-subgrps .ot-acc-txt{margin:0}#onetrust-pc-sdk ul.ot-subgrps li{padding:0;border:none}#onetrust-pc-sdk ul.ot-subgrps li h5{position:relative;top:5px;font-weight:bold;margin-bottom:0;float:left}#onetrust-pc-sdk li.ot-subgrp{margin-left:20px;overflow:auto}#onetrust-pc-sdk li.ot-subgrp>h5{width:calc(100% - 100px)}#onetrust-pc-sdk .ot-cat-item p>ul,#onetrust-pc-sdk li.ot-subgrp p>ul{margin:0px;list-style:disc;margin-left:15px;font-size:inherit}#onetrust-pc-sdk .ot-cat-item p>ul li,#onetrust-pc-sdk li.ot-subgrp p>ul li{font-size:inherit;padding-top:10px;padding-left:0px;padding-right:0px;border:none}#onetrust-pc-sdk .ot-cat-item p>ul li:last-child,#onetrust-pc-sdk li.ot-subgrp p>ul li:last-child{padding-bottom:10px}#onetrust-pc-sdk .ot-pc-logo{height:40px;width:120px}#onetrust-pc-sdk .ot-pc-footer{position:absolute;bottom:0px;width:100%;max-height:160px;border-top:1px solid #d8d8d8}#onetrust-pc-sdk.ot-ftr-stacked .ot-pc-refuse-all-handler{margin-bottom:0px}#onetrust-pc-sdk.ot-ftr-stacked #ot-pc-content{bottom:160px}#onetrust-pc-sdk.ot-ftr-stacked .ot-pc-footer button{width:100%;max-width:none}#onetrust-pc-sdk.ot-ftr-stacked .ot-btn-container{margin:0 30px;width:calc(100% - 60px);padding-right:0}#onetrust-pc-sdk .ot-pc-footer-logo{height:30px;width:100%;text-align:right;background:#f4f4f4}#onetrust-pc-sdk .ot-pc-footer-logo a{display:inline-block;margin-top:5px;margin-right:10px}#onetrust-pc-sdk[dir=rtl] .ot-pc-footer-logo{direction:rtl}#onetrust-pc-sdk[dir=rtl] .ot-pc-footer-logo a{margin-right:25px}#onetrust-pc-sdk .ot-tgl{float:right;position:relative;z-index:1}#onetrust-pc-sdk .ot-tgl input:checked+.ot-switch .ot-switch-nob{background-color:#cddcf2;border:1px solid #3860be}#onetrust-pc-sdk .ot-tgl input:checked+.ot-switch .ot-switch-nob:before{-webkit-transform:translateX(20px);-ms-transform:translateX(20px);transform:translateX(20px);background-color:#3860be;border-color:#3860be}#onetrust-pc-sdk .ot-tgl input:focus+.ot-switch{outline:#000 solid 1px}#onetrust-pc-sdk .ot-switch{position:relative;display:inline-block;width:45px;height:25px}#onetrust-pc-sdk .ot-switch-nob{position:absolute;cursor:pointer;top:0;left:0;right:0;bottom:0;background-color:#f2f1f1;border:1px solid #ddd;transition:all .2s ease-in 0s;-moz-transition:all .2s ease-in 0s;-o-transition:all .2s ease-in 0s;-webkit-transition:all .2s ease-in 0s;border-radius:20px}#onetrust-pc-sdk .ot-switch-nob:before{position:absolute;content:"";height:21px;width:21px;bottom:1px;background-color:#7d7d7d;-webkit-transition:.4s;transition:.4s;border-radius:20px}#onetrust-pc-sdk .ot-chkbox input:checked~label::before{background-color:#3860be}#onetrust-pc-sdk .ot-chkbox input+label::after{content:none;color:#fff}#onetrust-pc-sdk .ot-chkbox input:checked+label::after{content:""}#onetrust-pc-sdk .ot-chkbox input:focus+label::before{outline-style:solid;outline-width:2px;outline-style:auto}#onetrust-pc-sdk .ot-chkbox label{position:relative;display:inline-block;padding-left:30px;cursor:pointer;font-weight:500}#onetrust-pc-sdk .ot-chkbox label::before,#onetrust-pc-sdk .ot-chkbox label::after{position:absolute;content:"";display:inline-block;border-radius:3px}#onetrust-pc-sdk .ot-chkbox label::before{height:18px;width:18px;border:1px solid #3860be;left:0px;top:auto}#onetrust-pc-sdk .ot-chkbox label::after{height:5px;width:9px;border-left:3px solid;border-bottom:3px solid;transform:rotate(-45deg);-o-transform:rotate(-45deg);-ms-transform:rotate(-45deg);-webkit-transform:rotate(-45deg);left:4px;top:5px}#onetrust-pc-sdk .ot-label-txt{display:none}#onetrust-pc-sdk .ot-chkbox input,#onetrust-pc-sdk .ot-tgl input{position:absolute;opacity:0;width:0;height:0}#onetrust-pc-sdk .ot-arw-cntr{float:right;position:relative;pointer-events:none}#onetrust-pc-sdk .ot-arw-cntr .ot-arw{width:16px;height:16px;margin-left:5px;color:dimgray;display:inline-block;vertical-align:middle;-webkit-transition:all 150ms ease-in 0s;-moz-transition:all 150ms ease-in 0s;-o-transition:all 150ms ease-in 0s;transition:all 150ms ease-in 0s}#onetrust-pc-sdk input:checked~.ot-acc-hdr .ot-arw,#onetrust-pc-sdk button[aria-expanded=true]~.ot-acc-hdr .ot-arw-cntr svg{transform:rotate(90deg);-o-transform:rotate(90deg);-ms-transform:rotate(90deg);-webkit-transform:rotate(90deg)}#onetrust-pc-sdk input[type=checkbox]:focus+.ot-acc-hdr{outline:#000 1px solid}#onetrust-pc-sdk .ot-tgl-cntr,#onetrust-pc-sdk .ot-arw-cntr{display:inline-block}#onetrust-pc-sdk .ot-tgl-cntr{width:45px;float:right;margin-top:2px}#onetrust-pc-sdk #ot-lst-cnt .ot-tgl-cntr{margin-top:10px}#onetrust-pc-sdk .ot-always-active-subgroup{width:auto;padding-left:0px !important;top:3px;position:relative}#onetrust-pc-sdk .ot-label-status{padding-left:5px;font-size:.75em;display:none}#onetrust-pc-sdk .ot-arw-cntr{margin-top:-1px}#onetrust-pc-sdk .ot-arw-cntr svg{-webkit-transition:all 300ms ease-in 0s;-moz-transition:all 300ms ease-in 0s;-o-transition:all 300ms ease-in 0s;transition:all 300ms ease-in 0s;height:10px;width:10px}#onetrust-pc-sdk input:checked~.ot-acc-hdr .ot-arw{transform:rotate(90deg);-o-transform:rotate(90deg);-ms-transform:rotate(90deg);-webkit-transform:rotate(90deg)}#onetrust-pc-sdk .ot-arw{width:10px;margin-left:15px;transition:all 300ms ease-in 0s;-webkit-transition:all 300ms ease-in 0s;-moz-transition:all 300ms ease-in 0s;-o-transition:all 300ms ease-in 0s}#onetrust-pc-sdk .ot-vlst-cntr{margin-bottom:0}#onetrust-pc-sdk .ot-hlst-cntr{margin-top:5px;display:inline-block;width:100%}#onetrust-pc-sdk .category-vendors-list-handler,#onetrust-pc-sdk .category-vendors-list-handler+a,#onetrust-pc-sdk .category-host-list-handler{clear:both;color:#3860be;margin-left:0;font-size:.813em;text-decoration:none;float:left;overflow:hidden}#onetrust-pc-sdk .category-vendors-list-handler:hover,#onetrust-pc-sdk .category-vendors-list-handler+a:hover,#onetrust-pc-sdk .category-host-list-handler:hover{text-decoration-line:underline}#onetrust-pc-sdk .category-vendors-list-handler+a{clear:none}#onetrust-pc-sdk .ot-vlst-cntr .ot-ext-lnk{display:inline-block;height:13px;width:13px;background-repeat:no-repeat;margin-left:1px;margin-top:6px;cursor:pointer}#onetrust-pc-sdk .back-btn-handler{font-size:1em;text-decoration:none}#onetrust-pc-sdk .back-btn-handler:hover{opacity:.6}#onetrust-pc-sdk #ot-lst-title h3{display:inline-block;word-break:break-word;word-wrap:break-word;margin-bottom:0;color:#656565;font-size:1em;font-weight:bold;margin-left:15px}#onetrust-pc-sdk #ot-lst-title{margin:10px 0 10px 0px;font-size:1em;text-align:left}#onetrust-pc-sdk #ot-pc-hdr{margin:0 0 0 30px;height:auto;width:auto}#onetrust-pc-sdk #ot-pc-hdr input::placeholder{color:#d4d4d4;font-style:italic}#onetrust-pc-sdk #vendor-search-handler{height:31px;width:100%;border-radius:50px;font-size:.8em;padding-right:35px;padding-left:15px;float:left;margin-left:15px}#onetrust-pc-sdk .ot-ven-name{display:block;width:auto;padding-right:5px}#onetrust-pc-sdk #ot-lst-cnt{overflow-y:auto;margin-left:20px;margin-right:7px;width:calc(100% - 27px);max-height:calc(100% - 80px);height:100%;transform:translate3d(0, 0, 0)}#onetrust-pc-sdk #ot-pc-lst{width:100%;bottom:100px;position:absolute;top:60px}#onetrust-pc-sdk #ot-pc-lst:not(.ot-enbl-chr) .ot-tgl-cntr .ot-arw-cntr,#onetrust-pc-sdk #ot-pc-lst:not(.ot-enbl-chr) .ot-tgl-cntr .ot-arw-cntr *{visibility:hidden}#onetrust-pc-sdk #ot-pc-lst .ot-tgl-cntr{right:12px;position:absolute}#onetrust-pc-sdk #ot-pc-lst .ot-arw-cntr{float:right;position:relative}#onetrust-pc-sdk #ot-pc-lst .ot-arw{margin-left:10px}#onetrust-pc-sdk #ot-pc-lst .ot-acc-hdr{overflow:hidden;cursor:pointer}#onetrust-pc-sdk .ot-vlst-cntr{overflow:hidden}#onetrust-pc-sdk #ot-sel-blk{overflow:hidden;width:100%;position:sticky;position:-webkit-sticky;top:0;z-index:3}#onetrust-pc-sdk #ot-back-arw{height:12px;width:12px}#onetrust-pc-sdk .ot-lst-subhdr{width:100%;display:inline-block}#onetrust-pc-sdk .ot-search-cntr{float:left;width:78%;position:relative}#onetrust-pc-sdk .ot-search-cntr>svg{width:30px;height:30px;position:absolute;float:left;right:-15px}#onetrust-pc-sdk .ot-fltr-cntr{float:right;right:50px;position:relative}#onetrust-pc-sdk #filter-btn-handler{background-color:#3860be;border-radius:17px;display:inline-block;position:relative;width:32px;height:32px;-moz-transition:.1s ease;-o-transition:.1s ease;-webkit-transition:1s ease;transition:.1s ease;padding:0;margin:0}#onetrust-pc-sdk #filter-btn-handler:hover{background-color:#3860be}#onetrust-pc-sdk #filter-btn-handler svg{width:12px;height:12px;margin:3px 10px 0 10px;display:block;position:static;right:auto;top:auto}#onetrust-pc-sdk .ot-ven-link{color:#3860be;text-decoration:none;font-weight:100;display:inline-block;padding-top:10px;transform:translate(0, 1%);-o-transform:translate(0, 1%);-ms-transform:translate(0, 1%);-webkit-transform:translate(0, 1%);position:relative;z-index:2}#onetrust-pc-sdk .ot-ven-link *{font-size:inherit}#onetrust-pc-sdk .ot-ven-link:hover{text-decoration:underline}#onetrust-pc-sdk .ot-ven-hdr{width:calc(100% - 160px);height:auto;float:left;word-break:break-word;word-wrap:break-word;vertical-align:middle;padding-bottom:3px}#onetrust-pc-sdk .ot-ven-link{letter-spacing:.03em;font-size:.75em;font-weight:400}#onetrust-pc-sdk .ot-ven-dets{border-radius:2px;background-color:#f8f8f8}#onetrust-pc-sdk .ot-ven-dets li:first-child p:first-child{border-top:none}#onetrust-pc-sdk .ot-ven-dets .ot-ven-disc:not(:first-child){border-top:1px solid #ddd !important}#onetrust-pc-sdk .ot-ven-dets .ot-ven-disc:nth-child(n+3) p{display:inline-block}#onetrust-pc-sdk .ot-ven-dets .ot-ven-disc:nth-child(n+3) p:nth-of-type(odd){width:30%}#onetrust-pc-sdk .ot-ven-dets .ot-ven-disc:nth-child(n+3) p:nth-of-type(even){width:50%;word-break:break-word;word-wrap:break-word}#onetrust-pc-sdk .ot-ven-dets .ot-ven-disc p,#onetrust-pc-sdk .ot-ven-dets .ot-ven-disc h4{padding-top:5px;padding-bottom:5px;display:block}#onetrust-pc-sdk .ot-ven-dets .ot-ven-disc h4{display:inline-block}#onetrust-pc-sdk .ot-ven-dets .ot-ven-disc p:nth-last-child(-n+1){padding-bottom:10px}#onetrust-pc-sdk .ot-ven-dets .ot-ven-disc p:nth-child(-n+2):not(.disc-pur){padding-top:10px}#onetrust-pc-sdk .ot-ven-dets .ot-ven-disc .disc-pur-cont{display:inline}#onetrust-pc-sdk .ot-ven-dets .ot-ven-disc .disc-pur{position:relative;width:50% !important;word-break:break-word;word-wrap:break-word;left:calc(30% + 17px)}#onetrust-pc-sdk .ot-ven-dets .ot-ven-disc .disc-pur:nth-child(-n+1){position:static}#onetrust-pc-sdk .ot-ven-dets p,#onetrust-pc-sdk .ot-ven-dets h4,#onetrust-pc-sdk .ot-ven-dets span{font-size:.69em;text-align:left;vertical-align:middle;word-break:break-word;word-wrap:break-word;margin:0;padding-bottom:10px;padding-left:15px;color:#2e3644}#onetrust-pc-sdk .ot-ven-dets h4{padding-top:5px}#onetrust-pc-sdk .ot-ven-dets span{color:dimgray;padding:0;vertical-align:baseline}#onetrust-pc-sdk .ot-ven-dets .ot-ven-pur h4{border-top:1px solid #e9e9e9;border-bottom:1px solid #e9e9e9;padding-bottom:5px;margin-bottom:5px;font-weight:bold}#onetrust-pc-sdk #ot-host-lst .ot-sel-all{float:right;position:relative;margin-right:42px;top:10px}#onetrust-pc-sdk #ot-host-lst .ot-sel-all input[type=checkbox]{width:auto;height:auto}#onetrust-pc-sdk #ot-host-lst .ot-sel-all label{height:20px;width:20px;padding-left:0px}#onetrust-pc-sdk #ot-host-lst .ot-acc-txt{overflow:hidden;width:95%}#onetrust-pc-sdk .ot-host-hdr{position:relative;z-index:1;pointer-events:none;width:calc(100% - 125px);float:left}#onetrust-pc-sdk .ot-host-name,#onetrust-pc-sdk .ot-host-desc{display:inline-block;width:90%}#onetrust-pc-sdk .ot-host-name{pointer-events:none}#onetrust-pc-sdk .ot-host-hdr>a{text-decoration:underline;font-size:.82em;position:relative;z-index:2;float:left;margin-bottom:5px;pointer-events:initial}#onetrust-pc-sdk .ot-host-name+a{margin-top:5px}#onetrust-pc-sdk .ot-host-name,#onetrust-pc-sdk .ot-host-name a,#onetrust-pc-sdk .ot-host-desc,#onetrust-pc-sdk .ot-host-info{color:dimgray;word-break:break-word;word-wrap:break-word}#onetrust-pc-sdk .ot-host-name,#onetrust-pc-sdk .ot-host-name a{font-weight:bold;font-size:.82em;line-height:1.3}#onetrust-pc-sdk .ot-host-name a{font-size:1em}#onetrust-pc-sdk .ot-host-expand{margin-top:3px;margin-bottom:3px;clear:both;display:block;color:#3860be;font-size:.72em;font-weight:normal}#onetrust-pc-sdk .ot-host-expand *{font-size:inherit}#onetrust-pc-sdk .ot-host-desc,#onetrust-pc-sdk .ot-host-info{font-size:.688em;line-height:1.4;font-weight:normal}#onetrust-pc-sdk .ot-host-desc{margin-top:10px}#onetrust-pc-sdk .ot-host-opt{margin:0;font-size:inherit;display:inline-block;width:100%}#onetrust-pc-sdk .ot-host-opt li>div div{font-size:.8em;padding:5px 0}#onetrust-pc-sdk .ot-host-opt li>div div:nth-child(1){width:30%;float:left}#onetrust-pc-sdk .ot-host-opt li>div div:nth-child(2){width:70%;float:left;word-break:break-word;word-wrap:break-word}#onetrust-pc-sdk .ot-host-info{border:none;display:inline-block;width:calc(100% - 10px);padding:10px;margin-bottom:10px;background-color:#f8f8f8}#onetrust-pc-sdk .ot-host-info>div{overflow:auto}#onetrust-pc-sdk #no-results{text-align:center;margin-top:30px}#onetrust-pc-sdk #no-results p{font-size:1em;color:#2e3644;word-break:break-word;word-wrap:break-word}#onetrust-pc-sdk #no-results p span{font-weight:bold}#onetrust-pc-sdk #ot-fltr-modal{width:100%;height:auto;display:none;-moz-transition:.2s ease;-o-transition:.2s ease;-webkit-transition:2s ease;transition:.2s ease;overflow:hidden;opacity:1;right:0}#onetrust-pc-sdk #ot-fltr-modal .ot-label-txt{display:inline-block;font-size:.85em;color:dimgray}#onetrust-pc-sdk #ot-fltr-cnt{z-index:2147483646;background-color:#fff;position:absolute;height:90%;max-height:300px;width:325px;left:210px;margin-top:10px;margin-bottom:20px;padding-right:10px;border-radius:3px;-webkit-box-shadow:0px 0px 12px 2px #c7c5c7;-moz-box-shadow:0px 0px 12px 2px #c7c5c7;box-shadow:0px 0px 12px 2px #c7c5c7}#onetrust-pc-sdk .ot-fltr-scrlcnt{overflow-y:auto;overflow-x:hidden;clear:both;max-height:calc(100% - 60px)}#onetrust-pc-sdk #ot-anchor{border:12px solid rgba(0,0,0,0);display:none;position:absolute;z-index:2147483647;right:55px;top:75px;transform:rotate(45deg);-o-transform:rotate(45deg);-ms-transform:rotate(45deg);-webkit-transform:rotate(45deg);background-color:#fff;-webkit-box-shadow:-3px -3px 5px -2px #c7c5c7;-moz-box-shadow:-3px -3px 5px -2px #c7c5c7;box-shadow:-3px -3px 5px -2px #c7c5c7}#onetrust-pc-sdk .ot-fltr-btns{margin-left:15px}#onetrust-pc-sdk #filter-apply-handler{margin-right:15px}#onetrust-pc-sdk .ot-fltr-opt{margin-bottom:25px;margin-left:15px;width:75%;position:relative}#onetrust-pc-sdk .ot-fltr-opt p{display:inline-block;margin:0;font-size:.9em;color:#2e3644}#onetrust-pc-sdk .ot-chkbox label span{font-size:.85em;color:dimgray}#onetrust-pc-sdk .ot-chkbox input[type=checkbox]+label::after{content:none;color:#fff}#onetrust-pc-sdk .ot-chkbox input[type=checkbox]:checked+label::after{content:""}#onetrust-pc-sdk .ot-chkbox input[type=checkbox]:focus+label::before{outline-style:solid;outline-width:2px;outline-style:auto}#onetrust-pc-sdk #ot-selall-vencntr,#onetrust-pc-sdk #ot-selall-adtlvencntr,#onetrust-pc-sdk #ot-selall-hostcntr,#onetrust-pc-sdk #ot-selall-licntr,#onetrust-pc-sdk #ot-selall-gnvencntr{right:15px;position:relative;width:20px;height:20px;float:right}#onetrust-pc-sdk #ot-selall-vencntr label,#onetrust-pc-sdk #ot-selall-adtlvencntr label,#onetrust-pc-sdk #ot-selall-hostcntr label,#onetrust-pc-sdk #ot-selall-licntr label,#onetrust-pc-sdk #ot-selall-gnvencntr label{float:left;padding-left:0}#onetrust-pc-sdk #ot-ven-lst:first-child{border-top:1px solid #e2e2e2}#onetrust-pc-sdk ul{list-style:none;padding:0}#onetrust-pc-sdk ul li{position:relative;margin:0;padding:15px 15px 15px 10px;border-bottom:1px solid #e2e2e2}#onetrust-pc-sdk ul li h3{font-size:.75em;color:#656565;margin:0;display:inline-block;width:70%;height:auto;word-break:break-word;word-wrap:break-word}#onetrust-pc-sdk ul li p{margin:0;font-size:.7em}#onetrust-pc-sdk ul li input[type=checkbox]{position:absolute;cursor:pointer;width:100%;height:100%;opacity:0;margin:0;top:0;left:0}#onetrust-pc-sdk .ot-cat-item>button:focus,#onetrust-pc-sdk .ot-acc-cntr>button:focus,#onetrust-pc-sdk li>button:focus{outline:#000 solid 2px}#onetrust-pc-sdk .ot-cat-item>button,#onetrust-pc-sdk .ot-acc-cntr>button,#onetrust-pc-sdk li>button{position:absolute;cursor:pointer;width:100%;height:100%;margin:0;top:0;left:0;z-index:1;max-width:none;border:none}#onetrust-pc-sdk .ot-cat-item>button[aria-expanded=false]~.ot-acc-txt,#onetrust-pc-sdk .ot-acc-cntr>button[aria-expanded=false]~.ot-acc-txt,#onetrust-pc-sdk li>button[aria-expanded=false]~.ot-acc-txt{margin-top:0;max-height:0;opacity:0;overflow:hidden;width:100%;transition:.25s ease-out;display:none}#onetrust-pc-sdk .ot-cat-item>button[aria-expanded=true]~.ot-acc-txt,#onetrust-pc-sdk .ot-acc-cntr>button[aria-expanded=true]~.ot-acc-txt,#onetrust-pc-sdk li>button[aria-expanded=true]~.ot-acc-txt{transition:.1s ease-in;margin-top:10px;width:100%;overflow:auto;display:block}#onetrust-pc-sdk .ot-cat-item>button[aria-expanded=true]~.ot-acc-grpcntr,#onetrust-pc-sdk .ot-acc-cntr>button[aria-expanded=true]~.ot-acc-grpcntr,#onetrust-pc-sdk li>button[aria-expanded=true]~.ot-acc-grpcntr{width:auto;margin-top:0px;padding-bottom:10px}#onetrust-pc-sdk .ot-host-item>button:focus,#onetrust-pc-sdk .ot-ven-item>button:focus{outline:0;border:2px solid #000}#onetrust-pc-sdk .ot-hide-acc>button{pointer-events:none}#onetrust-pc-sdk .ot-hide-acc .ot-plus-minus>*,#onetrust-pc-sdk .ot-hide-acc .ot-arw-cntr>*{visibility:hidden}#onetrust-pc-sdk .ot-hide-acc .ot-acc-hdr{min-height:30px}#onetrust-pc-sdk.ot-addtl-vendors #ot-lst-cnt:not(.ot-host-cnt){padding-right:10px;width:calc(100% - 37px);margin-top:10px;max-height:calc(100% - 90px)}#onetrust-pc-sdk.ot-addtl-vendors #ot-lst-cnt:not(.ot-host-cnt) #ot-sel-blk{background-color:#f9f9fc;border:1px solid #e2e2e2;width:calc(100% - 2px);padding-bottom:5px;padding-top:5px}#onetrust-pc-sdk.ot-addtl-vendors #ot-lst-cnt:not(.ot-host-cnt) #ot-sel-blk.ot-vnd-list-cnt{border:unset;background-color:unset}#onetrust-pc-sdk.ot-addtl-vendors #ot-lst-cnt:not(.ot-host-cnt) #ot-sel-blk.ot-vnd-list-cnt .ot-sel-all-hdr{display:none}#onetrust-pc-sdk.ot-addtl-vendors #ot-lst-cnt:not(.ot-host-cnt) #ot-sel-blk.ot-vnd-list-cnt .ot-sel-all{padding-right:.5rem}#onetrust-pc-sdk.ot-addtl-vendors #ot-lst-cnt:not(.ot-host-cnt) #ot-sel-blk.ot-vnd-list-cnt .ot-sel-all .ot-chkbox{right:0}#onetrust-pc-sdk.ot-addtl-vendors #ot-lst-cnt:not(.ot-host-cnt) .ot-sel-all{padding-right:34px}#onetrust-pc-sdk.ot-addtl-vendors #ot-lst-cnt:not(.ot-host-cnt) .ot-sel-all-chkbox{width:auto}#onetrust-pc-sdk.ot-addtl-vendors #ot-lst-cnt:not(.ot-host-cnt) ul li{border:1px solid #e2e2e2;margin-bottom:10px}#onetrust-pc-sdk.ot-addtl-vendors #ot-lst-cnt:not(.ot-host-cnt) .ot-acc-cntr>.ot-acc-hdr{padding:10px 0 10px 15px}#onetrust-pc-sdk.ot-addtl-vendors .ot-sel-all-chkbox{float:right}#onetrust-pc-sdk.ot-addtl-vendors .ot-plus-minus~.ot-sel-all-chkbox{right:34px}#onetrust-pc-sdk.ot-addtl-vendors #ot-ven-lst:first-child{border-top:none}#onetrust-pc-sdk .ot-acc-cntr{position:relative;border-left:1px solid #e2e2e2;border-right:1px solid #e2e2e2;border-bottom:1px solid #e2e2e2}#onetrust-pc-sdk .ot-acc-cntr input{z-index:1}#onetrust-pc-sdk .ot-acc-cntr>.ot-acc-hdr{background-color:#f9f9fc;padding:5px 0 5px 15px;width:auto}#onetrust-pc-sdk .ot-acc-cntr>.ot-acc-hdr .ot-plus-minus{vertical-align:middle;top:auto}#onetrust-pc-sdk .ot-acc-cntr>.ot-acc-hdr .ot-arw-cntr{right:10px}#onetrust-pc-sdk .ot-acc-cntr>.ot-acc-hdr input{z-index:2}#onetrust-pc-sdk .ot-acc-cntr.ot-add-tech .ot-acc-hdr{padding:10px 0 10px 15px}#onetrust-pc-sdk .ot-acc-cntr>input[type=checkbox]:checked~.ot-acc-hdr{border-bottom:1px solid #e2e2e2}#onetrust-pc-sdk .ot-acc-cntr>.ot-acc-txt{padding-left:10px;padding-right:10px}#onetrust-pc-sdk .ot-acc-cntr button[aria-expanded=true]~.ot-acc-txt{width:auto}#onetrust-pc-sdk .ot-acc-cntr .ot-addtl-venbox{display:none}#onetrust-pc-sdk .ot-vlst-cntr{margin-bottom:0;width:100%}#onetrust-pc-sdk .ot-vensec-title{font-size:.813em;vertical-align:middle;display:inline-block}#onetrust-pc-sdk .category-vendors-list-handler,#onetrust-pc-sdk .category-vendors-list-handler+a{margin-left:0;margin-top:10px}#onetrust-pc-sdk #ot-selall-vencntr.line-through label::after,#onetrust-pc-sdk #ot-selall-adtlvencntr.line-through label::after,#onetrust-pc-sdk #ot-selall-licntr.line-through label::after,#onetrust-pc-sdk #ot-selall-hostcntr.line-through label::after,#onetrust-pc-sdk #ot-selall-gnvencntr.line-through label::after{height:auto;border-left:0;transform:none;-o-transform:none;-ms-transform:none;-webkit-transform:none;left:5px;top:9px}#onetrust-pc-sdk #ot-category-title{float:left;padding-bottom:10px;font-size:1em;width:100%}#onetrust-pc-sdk .ot-cat-grp{margin-top:10px}#onetrust-pc-sdk .ot-cat-item{line-height:1.1;margin-top:10px;display:inline-block;width:100%}#onetrust-pc-sdk .ot-btn-container{text-align:right}#onetrust-pc-sdk .ot-btn-container button{display:inline-block;font-size:.75em;letter-spacing:.08em;margin-top:19px}#onetrust-pc-sdk #close-pc-btn-handler.ot-close-icon{position:absolute;top:10px;right:0;z-index:1;padding:0;background-color:rgba(0,0,0,0);border:none}#onetrust-pc-sdk #close-pc-btn-handler.ot-close-icon svg{display:block;height:10px;width:10px}#onetrust-pc-sdk #clear-filters-handler{margin-top:20px;margin-bottom:10px;float:right;max-width:200px;text-decoration:none;color:#3860be;font-size:.9em;font-weight:bold;background-color:rgba(0,0,0,0);border-color:rgba(0,0,0,0);padding:1px}#onetrust-pc-sdk #clear-filters-handler:hover{color:#2285f7}#onetrust-pc-sdk #clear-filters-handler:focus{outline:#000 solid 1px}#onetrust-pc-sdk .ot-enbl-chr h4~.ot-tgl,#onetrust-pc-sdk .ot-enbl-chr h4~.ot-always-active{right:45px}#onetrust-pc-sdk .ot-enbl-chr h4~.ot-tgl+.ot-tgl{right:120px}#onetrust-pc-sdk .ot-enbl-chr .ot-pli-hdr.ot-leg-border-color span:first-child{width:90px}#onetrust-pc-sdk .ot-enbl-chr li.ot-subgrp>h5+.ot-tgl-cntr{padding-right:25px}#onetrust-pc-sdk .ot-plus-minus{width:20px;height:20px;font-size:1.5em;position:relative;display:inline-block;margin-right:5px;top:3px}#onetrust-pc-sdk .ot-plus-minus span{position:absolute;background:#27455c;border-radius:1px}#onetrust-pc-sdk .ot-plus-minus span:first-of-type{top:25%;bottom:25%;width:10%;left:45%}#onetrust-pc-sdk .ot-plus-minus span:last-of-type{left:25%;right:25%;height:10%;top:45%}#onetrust-pc-sdk button[aria-expanded=true]~.ot-acc-hdr .ot-arw,#onetrust-pc-sdk button[aria-expanded=true]~.ot-acc-hdr .ot-plus-minus span:first-of-type,#onetrust-pc-sdk button[aria-expanded=true]~.ot-acc-hdr .ot-plus-minus span:last-of-type{transform:rotate(90deg)}#onetrust-pc-sdk button[aria-expanded=true]~.ot-acc-hdr .ot-plus-minus span:last-of-type{left:50%;right:50%}#onetrust-pc-sdk #ot-selall-vencntr label,#onetrust-pc-sdk #ot-selall-adtlvencntr label,#onetrust-pc-sdk #ot-selall-hostcntr label,#onetrust-pc-sdk #ot-selall-licntr label{position:relative;display:inline-block;width:20px;height:20px}#onetrust-pc-sdk .ot-host-item .ot-plus-minus,#onetrust-pc-sdk .ot-ven-item .ot-plus-minus{float:left;margin-right:8px;top:10px}#onetrust-pc-sdk .ot-ven-item ul{list-style:none inside;font-size:100%;margin:0}#onetrust-pc-sdk .ot-ven-item ul li{margin:0 !important;padding:0;border:none !important}#onetrust-pc-sdk .ot-pli-hdr{color:#77808e;overflow:hidden;padding-top:7.5px;padding-bottom:7.5px;width:calc(100% - 2px);border-top-left-radius:3px;border-top-right-radius:3px}#onetrust-pc-sdk .ot-pli-hdr span:first-child{top:50%;transform:translateY(50%);max-width:90px}#onetrust-pc-sdk .ot-pli-hdr span:last-child{padding-right:10px;max-width:95px;text-align:center}#onetrust-pc-sdk .ot-li-title{float:right;font-size:.813em}#onetrust-pc-sdk .ot-pli-hdr.ot-leg-border-color{background-color:#f4f4f4;border:1px solid #d8d8d8}#onetrust-pc-sdk .ot-pli-hdr.ot-leg-border-color span:first-child{text-align:left;width:70px}#onetrust-pc-sdk li.ot-subgrp>h5,#onetrust-pc-sdk .ot-cat-header{width:calc(100% - 130px)}#onetrust-pc-sdk li.ot-subgrp>h5+.ot-tgl-cntr{padding-left:13px}#onetrust-pc-sdk .ot-acc-grpcntr .ot-acc-grpdesc{margin-bottom:5px}#onetrust-pc-sdk .ot-acc-grpcntr .ot-subgrp-cntr{border-top:1px solid #d8d8d8}#onetrust-pc-sdk .ot-acc-grpcntr .ot-vlst-cntr+.ot-subgrp-cntr{border-top:none}#onetrust-pc-sdk .ot-acc-hdr .ot-arw-cntr+.ot-tgl-cntr,#onetrust-pc-sdk .ot-acc-txt h4+.ot-tgl-cntr{padding-left:13px}#onetrust-pc-sdk .ot-pli-hdr~.ot-cat-item .ot-subgrp>h5,#onetrust-pc-sdk .ot-pli-hdr~.ot-cat-item .ot-cat-header{width:calc(100% - 145px)}#onetrust-pc-sdk .ot-pli-hdr~.ot-cat-item h5+.ot-tgl-cntr,#onetrust-pc-sdk .ot-pli-hdr~.ot-cat-item .ot-cat-header+.ot-tgl{padding-left:28px}#onetrust-pc-sdk .ot-sel-all-hdr,#onetrust-pc-sdk .ot-sel-all-chkbox{display:inline-block;width:100%;position:relative}#onetrust-pc-sdk .ot-sel-all-chkbox{z-index:1}#onetrust-pc-sdk .ot-sel-all{margin:0;position:relative;padding-right:23px;float:right}#onetrust-pc-sdk .ot-consent-hdr,#onetrust-pc-sdk .ot-li-hdr{float:right;font-size:.812em;line-height:normal;text-align:center;word-break:break-word;word-wrap:break-word}#onetrust-pc-sdk .ot-li-hdr{max-width:100px;padding-right:10px}#onetrust-pc-sdk .ot-consent-hdr{max-width:55px}#onetrust-pc-sdk #ot-selall-licntr{display:block;width:21px;height:auto;float:right;position:relative;right:80px}#onetrust-pc-sdk #ot-selall-licntr label{position:absolute}#onetrust-pc-sdk .ot-ven-ctgl{margin-left:66px}#onetrust-pc-sdk .ot-ven-litgl+.ot-arw-cntr{margin-left:81px}#onetrust-pc-sdk .ot-enbl-chr .ot-host-cnt .ot-tgl-cntr{width:auto}#onetrust-pc-sdk #ot-lst-cnt:not(.ot-host-cnt) .ot-tgl-cntr{width:auto;top:auto;height:20px}#onetrust-pc-sdk #ot-lst-cnt .ot-chkbox{position:relative;display:inline-block;width:20px;height:20px}#onetrust-pc-sdk #ot-lst-cnt .ot-chkbox label{position:absolute;padding:0;width:20px;height:20px}#onetrust-pc-sdk #ot-lst-cnt .ot-vnd-info-cntr{border:1px solid #d8d8d8;padding:.75rem 2rem;padding-bottom:0;width:auto;margin-top:.5rem}#onetrust-pc-sdk .ot-acc-grpdesc+.ot-leg-btn-container{padding-left:20px;padding-right:20px;width:calc(100% - 40px);margin-bottom:5px}#onetrust-pc-sdk .ot-subgrp .ot-leg-btn-container{margin-bottom:5px}#onetrust-pc-sdk #ot-ven-lst .ot-leg-btn-container{margin-top:10px}#onetrust-pc-sdk .ot-leg-btn-container{display:inline-block;width:100%;margin-bottom:10px}#onetrust-pc-sdk .ot-leg-btn-container button{height:auto;padding:6.5px 8px;margin-bottom:0;letter-spacing:0;font-size:.75em;line-height:normal}#onetrust-pc-sdk .ot-leg-btn-container svg{display:none;height:14px;width:14px;padding-right:5px;vertical-align:sub}#onetrust-pc-sdk .ot-active-leg-btn{cursor:default;pointer-events:none}#onetrust-pc-sdk .ot-active-leg-btn svg{display:inline-block}#onetrust-pc-sdk .ot-remove-objection-handler{text-decoration:underline;padding:0;font-size:.75em;font-weight:600;line-height:1;padding-left:10px}#onetrust-pc-sdk .ot-obj-leg-btn-handler span{font-weight:bold;text-align:center;font-size:inherit;line-height:1.5}#onetrust-pc-sdk.ot-close-btn-link #close-pc-btn-handler{border:none;height:auto;line-height:1.5;text-decoration:underline;font-size:.69em;background:none;right:15px;top:15px;width:auto;font-weight:normal}#onetrust-pc-sdk .ot-cat-header{float:left;font-weight:600;font-size:.875em;line-height:1.5;max-width:90%;vertical-align:middle}#onetrust-pc-sdk .ot-vnd-item>button:focus{outline:#000 solid 2px}#onetrust-pc-sdk .ot-vnd-item>button{position:absolute;cursor:pointer;width:100%;height:100%;margin:0;top:0;left:0;z-index:1;max-width:none;border:none}#onetrust-pc-sdk .ot-vnd-item>button[aria-expanded=false]~.ot-acc-txt{margin-top:0;max-height:0;opacity:0;overflow:hidden;width:100%;transition:.25s ease-out;display:none}#onetrust-pc-sdk .ot-vnd-item>button[aria-expanded=true]~.ot-acc-txt{transition:.1s ease-in;margin-top:10px;width:100%;overflow:auto;display:block}#onetrust-pc-sdk .ot-vnd-item>button[aria-expanded=true]~.ot-acc-grpcntr{width:auto;margin-top:0px;padding-bottom:10px}#onetrust-pc-sdk .ot-accordion-layout.ot-cat-item{position:relative;border-radius:2px;margin:0;padding:0;border:1px solid #d8d8d8;border-top:none;width:calc(100% - 2px);float:left}#onetrust-pc-sdk .ot-accordion-layout.ot-cat-item:first-of-type{margin-top:10px;border-top:1px solid #d8d8d8}#onetrust-pc-sdk .ot-accordion-layout .ot-acc-grpdesc{padding-left:20px;padding-right:20px;width:calc(100% - 40px);font-size:.812em;margin-bottom:10px;margin-top:15px}#onetrust-pc-sdk .ot-accordion-layout .ot-acc-grpdesc>ul{padding-top:10px}#onetrust-pc-sdk .ot-accordion-layout .ot-acc-grpdesc>ul li{padding-top:0;line-height:1.5;padding-bottom:10px}#onetrust-pc-sdk .ot-accordion-layout div+.ot-acc-grpdesc{margin-top:5px}#onetrust-pc-sdk .ot-accordion-layout .ot-vlst-cntr:first-child{margin-top:10px}#onetrust-pc-sdk .ot-accordion-layout .ot-vlst-cntr:last-child,#onetrust-pc-sdk .ot-accordion-layout .ot-hlst-cntr:last-child{margin-bottom:5px}#onetrust-pc-sdk .ot-accordion-layout .ot-acc-hdr{padding-top:11.5px;padding-bottom:11.5px;padding-left:20px;padding-right:20px;width:calc(100% - 40px);display:inline-block}#onetrust-pc-sdk .ot-accordion-layout .ot-acc-txt{width:100%;padding:0}#onetrust-pc-sdk .ot-accordion-layout .ot-subgrp-cntr{padding-left:20px;padding-right:15px;padding-bottom:0;width:calc(100% - 35px)}#onetrust-pc-sdk .ot-accordion-layout .ot-subgrp{padding-right:5px}#onetrust-pc-sdk .ot-accordion-layout .ot-acc-grpcntr{z-index:1;position:relative}#onetrust-pc-sdk .ot-accordion-layout .ot-cat-header+.ot-arw-cntr{position:absolute;top:50%;transform:translateY(-50%);right:20px;margin-top:-2px}#onetrust-pc-sdk .ot-accordion-layout .ot-cat-header+.ot-arw-cntr .ot-arw{width:15px;height:20px;margin-left:5px;color:dimgray}#onetrust-pc-sdk .ot-accordion-layout .ot-cat-header{float:none;color:#2e3644;margin:0;display:inline-block;height:auto;word-wrap:break-word;min-height:inherit}#onetrust-pc-sdk .ot-accordion-layout .ot-vlst-cntr,#onetrust-pc-sdk .ot-accordion-layout .ot-hlst-cntr{padding-left:20px;width:calc(100% - 20px);display:inline-block;margin-top:0;padding-bottom:2px}#onetrust-pc-sdk .ot-accordion-layout .ot-acc-hdr{position:relative;min-height:25px}#onetrust-pc-sdk .ot-accordion-layout h4~.ot-tgl,#onetrust-pc-sdk .ot-accordion-layout h4~.ot-always-active{position:absolute;top:50%;transform:translateY(-50%);right:20px}#onetrust-pc-sdk .ot-accordion-layout h4~.ot-tgl+.ot-tgl{right:95px}#onetrust-pc-sdk .ot-accordion-layout .category-vendors-list-handler,#onetrust-pc-sdk .ot-accordion-layout .category-vendors-list-handler+a{margin-top:5px}#onetrust-pc-sdk #ot-lst-cnt{margin-top:1rem;max-height:calc(100% - 96px)}#onetrust-pc-sdk #ot-lst-cnt .ot-vnd-info-cntr{border:1px solid #d8d8d8;padding:.75rem 2rem;padding-bottom:0;width:auto;margin-top:.5rem}#onetrust-pc-sdk #ot-lst-cnt .ot-vnd-info{margin-bottom:1rem;padding-left:.75rem;padding-right:.75rem;display:flex;flex-direction:column}#onetrust-pc-sdk #ot-lst-cnt .ot-vnd-info[data-vnd-info-key*=DPOEmail]{border-top:1px solid #d8d8d8;padding-top:1rem}#onetrust-pc-sdk #ot-lst-cnt .ot-vnd-info[data-vnd-info-key*=DPOLink]{border-bottom:1px solid #d8d8d8;padding-bottom:1rem}#onetrust-pc-sdk #ot-lst-cnt .ot-vnd-info .ot-vnd-lbl{font-weight:bold;font-size:.85em;margin-bottom:.5rem}#onetrust-pc-sdk #ot-lst-cnt .ot-vnd-info .ot-vnd-cnt{margin-left:.5rem;font-weight:500;font-size:.85rem}#onetrust-pc-sdk .ot-vs-list,#onetrust-pc-sdk .ot-vnd-serv{width:auto;padding:1rem 1.25rem;padding-bottom:0}#onetrust-pc-sdk .ot-vs-list .ot-vnd-serv-hdr-cntr,#onetrust-pc-sdk .ot-vnd-serv .ot-vnd-serv-hdr-cntr{padding-bottom:.75rem;border-bottom:1px solid #d8d8d8}#onetrust-pc-sdk .ot-vs-list .ot-vnd-serv-hdr-cntr .ot-vnd-serv-hdr,#onetrust-pc-sdk .ot-vnd-serv .ot-vnd-serv-hdr-cntr .ot-vnd-serv-hdr{font-weight:600;font-size:.95em;line-height:2;margin-left:.5rem}#onetrust-pc-sdk .ot-vs-list .ot-vnd-item,#onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item{border:none;margin:0;padding:0}#onetrust-pc-sdk .ot-vs-list .ot-vnd-item button,#onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item button{outline:none;border-bottom:1px solid #d8d8d8}#onetrust-pc-sdk .ot-vs-list .ot-vnd-item button[aria-expanded=true],#onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item button[aria-expanded=true]{border-bottom:none}#onetrust-pc-sdk .ot-vs-list .ot-vnd-item:first-child,#onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item:first-child{margin-top:.25rem;border-top:unset}#onetrust-pc-sdk .ot-vs-list .ot-vnd-item:last-child,#onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item:last-child{margin-bottom:.5rem}#onetrust-pc-sdk .ot-vs-list .ot-vnd-item:last-child button,#onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item:last-child button{border-bottom:none}#onetrust-pc-sdk .ot-vs-list .ot-vnd-item .ot-vnd-info-cntr,#onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-vnd-info-cntr{border:1px solid #d8d8d8;padding:.75rem 1.75rem;padding-bottom:0;width:auto;margin-top:.5rem}#onetrust-pc-sdk .ot-vs-list .ot-vnd-item .ot-vnd-info,#onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-vnd-info{margin-bottom:1rem;padding-left:.75rem;padding-right:.75rem;display:flex;flex-direction:column}#onetrust-pc-sdk .ot-vs-list .ot-vnd-item .ot-vnd-info[data-vnd-info-key*=DPOEmail],#onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-vnd-info[data-vnd-info-key*=DPOEmail]{border-top:1px solid #d8d8d8;padding-top:1rem}#onetrust-pc-sdk .ot-vs-list .ot-vnd-item .ot-vnd-info[data-vnd-info-key*=DPOLink],#onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-vnd-info[data-vnd-info-key*=DPOLink]{border-bottom:1px solid #d8d8d8;padding-bottom:1rem}#onetrust-pc-sdk .ot-vs-list .ot-vnd-item .ot-vnd-info .ot-vnd-lbl,#onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-vnd-info .ot-vnd-lbl{font-weight:bold;font-size:.85em;margin-bottom:.5rem}#onetrust-pc-sdk .ot-vs-list .ot-vnd-item .ot-vnd-info .ot-vnd-cnt,#onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-vnd-info .ot-vnd-cnt{margin-left:.5rem;font-weight:500;font-size:.85rem}#onetrust-pc-sdk .ot-vs-list.ot-vnd-subgrp-cnt,#onetrust-pc-sdk .ot-vnd-serv.ot-vnd-subgrp-cnt{padding-left:40px}#onetrust-pc-sdk .ot-vs-list.ot-vnd-subgrp-cnt .ot-vnd-serv-hdr-cntr .ot-vnd-serv-hdr,#onetrust-pc-sdk .ot-vnd-serv.ot-vnd-subgrp-cnt .ot-vnd-serv-hdr-cntr .ot-vnd-serv-hdr{font-size:.8em}#onetrust-pc-sdk .ot-vs-list.ot-vnd-subgrp-cnt .ot-cat-header,#onetrust-pc-sdk .ot-vnd-serv.ot-vnd-subgrp-cnt .ot-cat-header{font-size:.8em}#onetrust-pc-sdk .ot-subgrp-cntr .ot-vnd-serv{margin-bottom:1rem;padding:1rem .95rem}#onetrust-pc-sdk .ot-subgrp-cntr .ot-vnd-serv .ot-vnd-serv-hdr-cntr{padding-bottom:.75rem;border-bottom:1px solid #d8d8d8}#onetrust-pc-sdk .ot-subgrp-cntr .ot-vnd-serv .ot-vnd-serv-hdr-cntr .ot-vnd-serv-hdr{font-weight:700;font-size:.8em;line-height:20px;margin-left:.82rem}#onetrust-pc-sdk .ot-subgrp-cntr .ot-cat-header{font-weight:700;font-size:.8em;line-height:20px}#onetrust-pc-sdk .ot-subgrp-cntr ul.ot-subgrps .ot-vnd-serv .ot-vnd-lst-cont .ot-accordion-layout .ot-acc-hdr div.ot-chkbox{margin-left:.82rem}#onetrust-pc-sdk .ot-vs-config .ot-acc-hdr,#onetrust-pc-sdk ul.ot-subgrps .ot-acc-hdr,#onetrust-pc-sdk .ot-subgrp-cntr ul.ot-subgrps .ot-acc-hdr,#onetrust-pc-sdk .ot-vs-list .ot-vnd-item .ot-acc-hdr,#onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-acc-hdr,#onetrust-pc-sdk #ot-pc-lst .ot-vs-list .ot-vnd-item .ot-acc-hdr,#onetrust-pc-sdk .ot-accordion-layout.ot-checkbox-consent .ot-acc-hdr{padding:.5rem 0;margin:0;display:flex;width:100%;align-items:center;justify-content:space-between}#onetrust-pc-sdk .ot-vs-config .ot-acc-hdr div:first-child,#onetrust-pc-sdk ul.ot-subgrps .ot-acc-hdr div:first-child,#onetrust-pc-sdk .ot-subgrp-cntr ul.ot-subgrps .ot-acc-hdr div:first-child,#onetrust-pc-sdk .ot-vs-list .ot-vnd-item .ot-acc-hdr div:first-child,#onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-acc-hdr div:first-child,#onetrust-pc-sdk #ot-pc-lst .ot-vs-list .ot-vnd-item .ot-acc-hdr div:first-child,#onetrust-pc-sdk .ot-accordion-layout.ot-checkbox-consent .ot-acc-hdr div:first-child{margin-left:.5rem}#onetrust-pc-sdk .ot-vs-config .ot-acc-hdr div:last-child,#onetrust-pc-sdk ul.ot-subgrps .ot-acc-hdr div:last-child,#onetrust-pc-sdk .ot-subgrp-cntr ul.ot-subgrps .ot-acc-hdr div:last-child,#onetrust-pc-sdk .ot-vs-list .ot-vnd-item .ot-acc-hdr div:last-child,#onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-acc-hdr div:last-child,#onetrust-pc-sdk #ot-pc-lst .ot-vs-list .ot-vnd-item .ot-acc-hdr div:last-child,#onetrust-pc-sdk .ot-accordion-layout.ot-checkbox-consent .ot-acc-hdr div:last-child{margin-right:.5rem;margin-left:.5rem}#onetrust-pc-sdk .ot-vs-config .ot-acc-hdr .ot-always-active,#onetrust-pc-sdk ul.ot-subgrps .ot-acc-hdr .ot-always-active,#onetrust-pc-sdk .ot-subgrp-cntr ul.ot-subgrps .ot-acc-hdr .ot-always-active,#onetrust-pc-sdk .ot-vs-list .ot-vnd-item .ot-acc-hdr .ot-always-active,#onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-acc-hdr .ot-always-active,#onetrust-pc-sdk #ot-pc-lst .ot-vs-list .ot-vnd-item .ot-acc-hdr .ot-always-active,#onetrust-pc-sdk .ot-accordion-layout.ot-checkbox-consent .ot-acc-hdr .ot-always-active{position:relative;right:unset;top:unset;transform:unset}#onetrust-pc-sdk .ot-vs-config .ot-acc-hdr .ot-plus-minus,#onetrust-pc-sdk ul.ot-subgrps .ot-acc-hdr .ot-plus-minus,#onetrust-pc-sdk .ot-subgrp-cntr ul.ot-subgrps .ot-acc-hdr .ot-plus-minus,#onetrust-pc-sdk .ot-vs-list .ot-vnd-item .ot-acc-hdr .ot-plus-minus,#onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-acc-hdr .ot-plus-minus,#onetrust-pc-sdk #ot-pc-lst .ot-vs-list .ot-vnd-item .ot-acc-hdr .ot-plus-minus,#onetrust-pc-sdk .ot-accordion-layout.ot-checkbox-consent .ot-acc-hdr .ot-plus-minus{top:0}#onetrust-pc-sdk .ot-vs-config .ot-acc-hdr .ot-arw-cntr,#onetrust-pc-sdk ul.ot-subgrps .ot-acc-hdr .ot-arw-cntr,#onetrust-pc-sdk .ot-subgrp-cntr ul.ot-subgrps .ot-acc-hdr .ot-arw-cntr,#onetrust-pc-sdk .ot-vs-list .ot-vnd-item .ot-acc-hdr .ot-arw-cntr,#onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-acc-hdr .ot-arw-cntr,#onetrust-pc-sdk #ot-pc-lst .ot-vs-list .ot-vnd-item .ot-acc-hdr .ot-arw-cntr,#onetrust-pc-sdk .ot-accordion-layout.ot-checkbox-consent .ot-acc-hdr .ot-arw-cntr{float:none;top:unset;right:unset;transform:unset;margin-top:-2px;position:relative}#onetrust-pc-sdk .ot-vs-config .ot-acc-hdr .ot-cat-header,#onetrust-pc-sdk ul.ot-subgrps .ot-acc-hdr .ot-cat-header,#onetrust-pc-sdk .ot-subgrp-cntr ul.ot-subgrps .ot-acc-hdr .ot-cat-header,#onetrust-pc-sdk .ot-vs-list .ot-vnd-item .ot-acc-hdr .ot-cat-header,#onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-acc-hdr .ot-cat-header,#onetrust-pc-sdk #ot-pc-lst .ot-vs-list .ot-vnd-item .ot-acc-hdr .ot-cat-header,#onetrust-pc-sdk .ot-accordion-layout.ot-checkbox-consent .ot-acc-hdr .ot-cat-header{flex:1;margin:0 .5rem}#onetrust-pc-sdk .ot-vs-config .ot-acc-hdr .ot-tgl,#onetrust-pc-sdk ul.ot-subgrps .ot-acc-hdr .ot-tgl,#onetrust-pc-sdk .ot-subgrp-cntr ul.ot-subgrps .ot-acc-hdr .ot-tgl,#onetrust-pc-sdk .ot-vs-list .ot-vnd-item .ot-acc-hdr .ot-tgl,#onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-acc-hdr .ot-tgl,#onetrust-pc-sdk #ot-pc-lst .ot-vs-list .ot-vnd-item .ot-acc-hdr .ot-tgl,#onetrust-pc-sdk .ot-accordion-layout.ot-checkbox-consent .ot-acc-hdr .ot-tgl{position:relative;transform:none;right:0;top:0;float:none}#onetrust-pc-sdk .ot-vs-config .ot-acc-hdr .ot-chkbox,#onetrust-pc-sdk ul.ot-subgrps .ot-acc-hdr .ot-chkbox,#onetrust-pc-sdk .ot-subgrp-cntr ul.ot-subgrps .ot-acc-hdr .ot-chkbox,#onetrust-pc-sdk .ot-vs-list .ot-vnd-item .ot-acc-hdr .ot-chkbox,#onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-acc-hdr .ot-chkbox,#onetrust-pc-sdk #ot-pc-lst .ot-vs-list .ot-vnd-item .ot-acc-hdr .ot-chkbox,#onetrust-pc-sdk .ot-accordion-layout.ot-checkbox-consent .ot-acc-hdr .ot-chkbox{position:relative;margin:0 .5rem}#onetrust-pc-sdk .ot-vs-config .ot-acc-hdr .ot-chkbox label,#onetrust-pc-sdk ul.ot-subgrps .ot-acc-hdr .ot-chkbox label,#onetrust-pc-sdk .ot-subgrp-cntr ul.ot-subgrps .ot-acc-hdr .ot-chkbox label,#onetrust-pc-sdk .ot-vs-list .ot-vnd-item .ot-acc-hdr .ot-chkbox label,#onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-acc-hdr .ot-chkbox label,#onetrust-pc-sdk #ot-pc-lst .ot-vs-list .ot-vnd-item .ot-acc-hdr .ot-chkbox label,#onetrust-pc-sdk .ot-accordion-layout.ot-checkbox-consent .ot-acc-hdr .ot-chkbox label{padding:0}#onetrust-pc-sdk .ot-vs-config .ot-acc-hdr .ot-chkbox label::before,#onetrust-pc-sdk ul.ot-subgrps .ot-acc-hdr .ot-chkbox label::before,#onetrust-pc-sdk .ot-subgrp-cntr ul.ot-subgrps .ot-acc-hdr .ot-chkbox label::before,#onetrust-pc-sdk .ot-vs-list .ot-vnd-item .ot-acc-hdr .ot-chkbox label::before,#onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-acc-hdr .ot-chkbox label::before,#onetrust-pc-sdk #ot-pc-lst .ot-vs-list .ot-vnd-item .ot-acc-hdr .ot-chkbox label::before,#onetrust-pc-sdk .ot-accordion-layout.ot-checkbox-consent .ot-acc-hdr .ot-chkbox label::before{position:relative}#onetrust-pc-sdk .ot-vs-config .ot-acc-hdr .ot-chkbox input,#onetrust-pc-sdk ul.ot-subgrps .ot-acc-hdr .ot-chkbox input,#onetrust-pc-sdk .ot-subgrp-cntr ul.ot-subgrps .ot-acc-hdr .ot-chkbox input,#onetrust-pc-sdk .ot-vs-list .ot-vnd-item .ot-acc-hdr .ot-chkbox input,#onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-acc-hdr .ot-chkbox input,#onetrust-pc-sdk #ot-pc-lst .ot-vs-list .ot-vnd-item .ot-acc-hdr .ot-chkbox input,#onetrust-pc-sdk .ot-accordion-layout.ot-checkbox-consent .ot-acc-hdr .ot-chkbox input{position:absolute;cursor:pointer;width:100%;height:100%;opacity:0;margin:0;top:0;left:0;z-index:1}#onetrust-pc-sdk .ot-subgrp-cntr ul.ot-subgrps li.ot-subgrp .ot-acc-hdr h5.ot-cat-header,#onetrust-pc-sdk .ot-subgrp-cntr ul.ot-subgrps li.ot-subgrp .ot-acc-hdr h4.ot-cat-header{margin:0}#onetrust-pc-sdk .ot-vs-config .ot-subgrp-cntr ul.ot-subgrps li.ot-subgrp h5{top:0;line-height:20px}#onetrust-pc-sdk .ot-vs-list{display:flex;flex-direction:column;padding:0;margin:.5rem 4px}#onetrust-pc-sdk .ot-vs-selc-all{display:flex;padding:0;float:unset;align-items:center;justify-content:flex-start}#onetrust-pc-sdk .ot-vs-selc-all.ot-toggle-conf{justify-content:flex-end}#onetrust-pc-sdk .ot-vs-selc-all.ot-toggle-conf.ot-caret-conf .ot-sel-all-chkbox{margin-right:48px}#onetrust-pc-sdk .ot-vs-selc-all.ot-toggle-conf .ot-sel-all-chkbox{margin:0;padding:0;margin-right:14px;justify-content:flex-end}#onetrust-pc-sdk .ot-vs-selc-all.ot-toggle-conf #ot-selall-vencntr.ot-chkbox,#onetrust-pc-sdk .ot-vs-selc-all.ot-toggle-conf #ot-selall-vencntr.ot-tgl{display:inline-block;right:unset;width:auto;height:auto;float:none}#onetrust-pc-sdk .ot-vs-selc-all.ot-toggle-conf #ot-selall-vencntr label{width:45px;height:25px}#onetrust-pc-sdk .ot-vs-selc-all .ot-sel-all-chkbox{margin-right:11px;margin-left:.75rem;display:flex;align-items:center}#onetrust-pc-sdk .ot-vs-selc-all .sel-all-hdr{margin:0 1.25rem;font-size:.812em;line-height:normal;text-align:center;word-break:break-word;word-wrap:break-word}#onetrust-pc-sdk .ot-vnd-list-cnt #ot-selall-vencntr.ot-chkbox{float:unset;right:0}#onetrust-pc-sdk[dir=rtl] #ot-back-arw,#onetrust-pc-sdk[dir=rtl] input~.ot-acc-hdr .ot-arw{transform:rotate(180deg);-o-transform:rotate(180deg);-ms-transform:rotate(180deg);-webkit-transform:rotate(180deg)}#onetrust-pc-sdk[dir=rtl] input:checked~.ot-acc-hdr .ot-arw{transform:rotate(270deg);-o-transform:rotate(270deg);-ms-transform:rotate(270deg);-webkit-transform:rotate(270deg)}#onetrust-pc-sdk[dir=rtl] .ot-chkbox label::after{transform:rotate(45deg);-webkit-transform:rotate(45deg);-o-transform:rotate(45deg);-ms-transform:rotate(45deg);border-left:0;border-right:3px solid}#onetrust-pc-sdk[dir=rtl] .ot-search-cntr>svg{right:0}@media only screen and (max-width: 600px){#onetrust-pc-sdk.otPcCenter{left:0;min-width:100%;height:100%;top:0;border-radius:0}#onetrust-pc-sdk #ot-pc-content,#onetrust-pc-sdk.ot-ftr-stacked .ot-btn-container{margin:1px 3px 0 10px;padding-right:10px;width:calc(100% - 23px)}#onetrust-pc-sdk .ot-btn-container button{max-width:none;letter-spacing:.01em}#onetrust-pc-sdk #close-pc-btn-handler{top:10px;right:17px}#onetrust-pc-sdk p{font-size:.7em}#onetrust-pc-sdk #ot-pc-hdr{margin:10px 10px 0 5px;width:calc(100% - 15px)}#onetrust-pc-sdk .vendor-search-handler{font-size:1em}#onetrust-pc-sdk #ot-back-arw{margin-left:12px}#onetrust-pc-sdk #ot-lst-cnt{margin:0;padding:0 5px 0 10px;min-width:95%}#onetrust-pc-sdk .switch+p{max-width:80%}#onetrust-pc-sdk .ot-ftr-stacked button{width:100%}#onetrust-pc-sdk #ot-fltr-cnt{max-width:320px;width:90%;border-top-right-radius:0;border-bottom-right-radius:0;margin:0;margin-left:15px;left:auto;right:40px;top:85px}#onetrust-pc-sdk .ot-fltr-opt{margin-left:25px;margin-bottom:10px}#onetrust-pc-sdk .ot-pc-refuse-all-handler{margin-bottom:0}#onetrust-pc-sdk #ot-fltr-cnt{right:40px"@media only screen and (max-width: 476px){#onetrust-pc-sdk .ot-fltr-cntr,#onetrust-pc-sdk #ot-fltr-cnt{right:10px}#onetrust-pc-sdk #ot-anchor{right:25px}#onetrust-pc-sdk button{width:100%}#onetrust-pc-sdk:not(.ot-addtl-vendors) #ot-pc-lst:not(.ot-enbl-chr) .ot-sel-all{padding-right:9px}#onetrust-pc-sdk:not(.ot-addtl-vendors) #ot-pc-lst:not(.ot-enbl-chr) .ot-tgl-cntr{right:0"@media only screen and (max-width: 896px)and (max-height: 425px)and (orientation: landscape){#onetrust-pc-sdk.otPcCenter{left:0;top:0;min-width:100%;height:100%;border-radius:0}#onetrust-pc-sdk #ot-anchor{left:initial;right:50px}#onetrust-pc-sdk #ot-lst-title{margin-top:12px}#onetrust-pc-sdk #ot-lst-title *{font-size:inherit}#onetrust-pc-sdk #ot-pc-hdr input{margin-right:0;padding-right:45px}#onetrust-pc-sdk .switch+p{max-width:85%}#onetrust-pc-sdk #ot-sel-blk{position:static}#onetrust-pc-sdk #ot-pc-lst{overflow:auto}#onetrust-pc-sdk #ot-lst-cnt{max-height:none;overflow:initial}#onetrust-pc-sdk #ot-lst-cnt.no-results{height:auto}#onetrust-pc-sdk input{font-size:1em !important}#onetrust-pc-sdk p{font-size:.6em}#onetrust-pc-sdk #ot-fltr-modal{width:100%;top:0}#onetrust-pc-sdk ul li p,#onetrust-pc-sdk .category-vendors-list-handler,#onetrust-pc-sdk .category-vendors-list-handler+a,#onetrust-pc-sdk .category-host-list-handler{font-size:.6em}#onetrust-pc-sdk.ot-shw-fltr #ot-anchor{display:none !important}#onetrust-pc-sdk.ot-shw-fltr #ot-pc-lst{height:100% !important;overflow:hidden;top:0px}#onetrust-pc-sdk.ot-shw-fltr #ot-fltr-cnt{margin:0;height:100%;max-height:none;padding:10px;top:0;width:calc(100% - 20px);position:absolute;right:0;left:0;max-width:none}#onetrust-pc-sdk.ot-shw-fltr .ot-fltr-scrlcnt{max-height:calc(100% - 65px)"
            #onetrust-consent-sdk #onetrust-pc-sdk,
                #onetrust-consent-sdk #ot-search-cntr,
                #onetrust-consent-sdk #onetrust-pc-sdk .ot-switch.ot-toggle,
                #onetrust-consent-sdk #onetrust-pc-sdk ot-grp-hdr1 .checkbox,
                #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-title:after
                ,#onetrust-consent-sdk #onetrust-pc-sdk #ot-sel-blk,
                        #onetrust-consent-sdk #onetrust-pc-sdk #ot-fltr-cnt,
                        #onetrust-consent-sdk #onetrust-pc-sdk #ot-anchor {
                    background-color: #FFFFFF;
                }
               
            #onetrust-consent-sdk #onetrust-pc-sdk h3,
                #onetrust-consent-sdk #onetrust-pc-sdk h4,
                #onetrust-consent-sdk #onetrust-pc-sdk h5,
                #onetrust-consent-sdk #onetrust-pc-sdk h6,
                #onetrust-consent-sdk #onetrust-pc-sdk p,
                #onetrust-consent-sdk #onetrust-pc-sdk #ot-ven-lst .ot-ven-opts p,
                #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-desc,
                #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-title,
                #onetrust-consent-sdk #onetrust-pc-sdk .ot-li-title,
                #onetrust-consent-sdk #onetrust-pc-sdk .ot-sel-all-hdr span,
                #onetrust-consent-sdk #onetrust-pc-sdk #ot-host-lst .ot-host-info,
                #onetrust-consent-sdk #onetrust-pc-sdk #ot-fltr-modal #modal-header,
                #onetrust-consent-sdk #onetrust-pc-sdk .ot-checkbox label span,
                #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-lst #ot-sel-blk p,
                #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-lst #ot-lst-title h3,
                #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-lst .back-btn-handler p,
                #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-lst .ot-ven-name,
                #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-lst #ot-ven-lst .consent-category,
                #onetrust-consent-sdk #onetrust-pc-sdk .ot-leg-btn-container .ot-inactive-leg-btn,
                #onetrust-consent-sdk #onetrust-pc-sdk .ot-label-status,
                #onetrust-consent-sdk #onetrust-pc-sdk .ot-chkbox label span,
                #onetrust-consent-sdk #onetrust-pc-sdk #clear-filters-handler,
                #onetrust-consent-sdk #onetrust-pc-sdk .ot-optout-signal
                {
                    color: #696969;
                }
             #onetrust-consent-sdk #onetrust-pc-sdk .privacy-notice-link,
                    #onetrust-consent-sdk #onetrust-pc-sdk .category-vendors-list-handler,
                    #onetrust-consent-sdk #onetrust-pc-sdk .category-vendors-list-handler + a,
                    #onetrust-consent-sdk #onetrust-pc-sdk .category-host-list-handler,
                    #onetrust-consent-sdk #onetrust-pc-sdk .ot-ven-link,
                    #onetrust-consent-sdk #onetrust-pc-sdk #ot-host-lst .ot-host-name a,
                    #onetrust-consent-sdk #onetrust-pc-sdk #ot-host-lst .ot-acc-hdr .ot-host-expand,
                    #onetrust-consent-sdk #onetrust-pc-sdk #ot-host-lst .ot-host-info a,
                    #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-content #ot-pc-desc .ot-link-btn,
                    #onetrust-consent-sdk #onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-vnd-info a,
                    #onetrust-consent-sdk #onetrust-pc-sdk #ot-lst-cnt .ot-vnd-info a
                    {
                        color: #3860BE;
                    }
            #onetrust-consent-sdk #onetrust-pc-sdk .category-vendors-list-handler:hover { text-decoration: underline;}
            #onetrust-consent-sdk #onetrust-pc-sdk .ot-acc-grpcntr.ot-acc-txt,
            #onetrust-consent-sdk #onetrust-pc-sdk .ot-acc-txt .ot-subgrp-tgl .ot-switch.ot-toggle
             {
                background-color: #F8F8F8;
            }
             #onetrust-consent-sdk #onetrust-pc-sdk #ot-host-lst .ot-host-info,
                    #onetrust-consent-sdk #onetrust-pc-sdk .ot-acc-txt .ot-ven-dets
                            {
                                background-color: #F8F8F8;
                            }
        #onetrust-consent-sdk #onetrust-pc-sdk
            button:not(#clear-filters-handler):not(.ot-close-icon):not(#filter-btn-handler):not(.ot-remove-objection-handler):not(.ot-obj-leg-btn-handler):not([aria-expanded]):not(.ot-link-btn),
            #onetrust-consent-sdk #onetrust-pc-sdk .ot-leg-btn-container .ot-active-leg-btn {
                background-color: #2d7af1;border-color: #2d7af1;
                color: #FFFFFF;
            }
            #onetrust-consent-sdk #onetrust-pc-sdk .ot-active-menu {
                border-color: #2d7af1;
            }
            
            #onetrust-consent-sdk #onetrust-pc-sdk .ot-leg-btn-container .ot-remove-objection-handler{
                background-color: transparent;
                border: 1px solid transparent;
            }
            #onetrust-consent-sdk #onetrust-pc-sdk .ot-leg-btn-container .ot-inactive-leg-btn {
                background-color: #FFFFFF;
                color: #78808E; border-color: #78808E;
            }
            #onetrust-consent-sdk #onetrust-pc-sdk .ot-tgl input:focus + .ot-switch, .ot-switch .ot-switch-nob, .ot-switch .ot-switch-nob:before,
            #onetrust-pc-sdk .ot-checkbox input[type="checkbox"]:focus + label::before,
            #onetrust-pc-sdk .ot-chkbox input[type="checkbox"]:focus + label::before {
                outline-color: #000000;
                outline-width: 1px;
            }
            #onetrust-pc-sdk .ot-host-item > button:focus, #onetrust-pc-sdk .ot-ven-item > button:focus {
                border: 1px solid #000000;
            }
            #onetrust-consent-sdk #onetrust-pc-sdk *:focus,
            #onetrust-consent-sdk #onetrust-pc-sdk .ot-vlst-cntr > a:focus {
               outline: 1px solid #000000;
            }#onetrust-pc-sdk .ot-vlst-cntr .ot-ext-lnk {
                    background-image: url('https://cdn-ukwest.onetrust.com/logos/static/ot_external_link.svg');
                }
            #onetrust-pc-sdk .ot-pc-logo { 
    justify-content: start;
    max-height: 75%;
    margin-top: 4px;

}.ot-sdk-cookie-policy{font-family:inherit;font-size:16px}.ot-sdk-cookie-policy.otRelFont{font-size:1rem}.ot-sdk-cookie-policy h3,.ot-sdk-cookie-policy h4,.ot-sdk-cookie-policy h6,.ot-sdk-cookie-policy p,.ot-sdk-cookie-policy li,.ot-sdk-cookie-policy a,.ot-sdk-cookie-policy th,.ot-sdk-cookie-policy #cookie-policy-description,.ot-sdk-cookie-policy .ot-sdk-cookie-policy-group,.ot-sdk-cookie-policy #cookie-policy-title{color:dimgray}.ot-sdk-cookie-policy #cookie-policy-description{margin-bottom:1em}.ot-sdk-cookie-policy h4{font-size:1.2em}.ot-sdk-cookie-policy h6{font-size:1em;margin-top:2em}.ot-sdk-cookie-policy th{min-width:75px}.ot-sdk-cookie-policy a,.ot-sdk-cookie-policy a:hover{background:#fff}.ot-sdk-cookie-policy thead{background-color:#f6f6f4;font-weight:bold}.ot-sdk-cookie-policy .ot-mobile-border{display:none}.ot-sdk-cookie-policy section{margin-bottom:2em}.ot-sdk-cookie-policy table{border-collapse:inherit}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy{font-family:inherit;font-size:1rem}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy h3,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy h4,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy h6,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy p,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy li,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy a,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy th,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-description,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-cookie-policy-group,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-title{color:dimgray}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-description{margin-bottom:1em}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-subgroup{margin-left:1.5em}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-description,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-cookie-policy-group-desc,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-table-header,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy a,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy span,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td{font-size:.9em}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td span,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td a{font-size:inherit}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-cookie-policy-group{font-size:1em;margin-bottom:.6em}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-cookie-policy-title{margin-bottom:1.2em}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy>section{margin-bottom:1em}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy th{min-width:75px}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy a,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy a:hover{background:#fff}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy thead{background-color:#f6f6f4;font-weight:bold}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-mobile-border{display:none}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy section{margin-bottom:2em}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-subgroup ul li{list-style:disc;margin-left:1.5em}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-subgroup ul li h4{display:inline-block}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table{border-collapse:inherit;margin:auto;border:1px solid #d7d7d7;border-radius:5px;border-spacing:initial;width:100%;overflow:hidden}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table th,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table td{border-bottom:1px solid #d7d7d7;border-right:1px solid #d7d7d7}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table tr:last-child td{border-bottom:0px}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table tr th:last-child,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table tr td:last-child{border-right:0px}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table .ot-host,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table .ot-cookies-type{width:25%}.ot-sdk-cookie-policy[dir=rtl]{text-align:left}#ot-sdk-cookie-policy h3{font-size:1.5em}@media only screen and (max-width: 530px){.ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) table,.ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) thead,.ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) tbody,.ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) th,.ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) td,.ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) tr{display:block}.ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) thead tr{position:absolute;top:-9999px;left:-9999px}.ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) tr{margin:0 0 1em 0}.ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) tr:nth-child(odd),.ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) tr:nth-child(odd) a{background:#f6f6f4}.ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) td{border:none;border-bottom:1px solid #eee;position:relative;padding-left:50%}.ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) td:before{position:absolute;height:100%;left:6px;width:40%;padding-right:10px}.ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) .ot-mobile-border{display:inline-block;background-color:#e4e4e4;position:absolute;height:100%;top:0;left:45%;width:2px}.ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) td:before{content:attr(data-label);font-weight:bold}.ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) li{word-break:break-word;word-wrap:break-word}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table{overflow:hidden}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table td{border:none;border-bottom:1px solid #d7d7d7}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy thead,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy tbody,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy th,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy tr{display:block}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table .ot-host,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table .ot-cookies-type{width:auto}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy tr{margin:0 0 1em 0}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td:before{height:100%;width:40%;padding-right:10px}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td:before{content:attr(data-label);font-weight:bold}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy li{word-break:break-word;word-wrap:break-word}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy thead tr{position:absolute;top:-9999px;left:-9999px;z-index:-9999}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table tr:last-child td{border-bottom:1px solid #d7d7d7;border-right:0px}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table tr:last-child td:last-child{border-bottom:0px"
                
                    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy h5,
                    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy h6,
                    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy li,
                    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy p,
                    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy a,
                    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy span,
                    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td,
                    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-description {
                        color: #696969;
                    }
                    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy th {
                        color: #696969;
                    }
                    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-cookie-policy-group {
                        color: #696969;
                    }
                    
                    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-title {
                            color: #696969;
                        }
                    
            
                    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table th {
                            background-color: #F8F8F8;
                        }
                    
            .ot-floating-button__front{background-image:url('https://cdn-ukwest.onetrust.com/logos/static/ot_persistent_cookie_icon.png')}#ot-sdk-btn-floating.ot-floating-button{position:fixed;bottom:10px;opacity:0;width:50px;height:50px;line-height:15px;cursor:pointer;background-color:rgba(0,0,0,0);transition:all 300ms ease;z-index:2147483646;animation:otFloatingBtnIntro 800ms ease 0ms 1 forwards}#ot-sdk-btn-floating.ot-floating-button.ot-hide{display:none}#ot-sdk-btn-floating.ot-floating-button::before,#ot-sdk-btn-floating.ot-floating-button::after{text-transform:none;line-height:1;user-select:none;pointer-events:none;position:absolute;transform:scale(0);opacity:0;transition:all 300ms ease;display:block;height:auto}#ot-sdk-btn-floating.ot-floating-button::before{content:"";border:5px solid rgba(0,0,0,0);z-index:1001;top:50%;border-left-width:0;border-right-color:#333;right:calc(0em - 5px);transform:translate(10px, -50%)}#ot-sdk-btn-floating.ot-floating-button::after{content:attr(title);position:absolute;text-align:center;top:50%;left:calc(100% + 5px);transform:translate(10px, -50%);font-size:.75rem;min-width:3em;max-width:21em;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;padding:5px;border-radius:.3ch;box-shadow:0 1em 2em -0.5em rgba(0,0,0,.35);background:#333;color:#fff;z-index:2147483645}#ot-sdk-btn-floating.ot-floating-button:hover::before,#ot-sdk-btn-floating.ot-floating-button:hover::after{opacity:1}#ot-sdk-btn-floating.ot-floating-button:hover::before{transform:translate(0.5em, -50%) scale(1)}#ot-sdk-btn-floating.ot-floating-button:hover::after{transform:translate(0.5em, -50%) scale(1)}#ot-sdk-btn-floating.ot-floating-button.ot-pc-open .ot-floating-button__front{transform:rotateY(-180deg)}#ot-sdk-btn-floating.ot-floating-button.ot-pc-open .ot-floating-button__back{transform:rotateY(0)}#ot-sdk-btn-floating .ot-floating-button__front,#ot-sdk-btn-floating .ot-floating-button__back{position:absolute;width:100%;height:100%;-webkit-backface-visibility:hidden;backface-visibility:hidden;background-color:#6aaae4;border-radius:10px;box-shadow:0 4px 8px 0 rgba(0,0,0,.2);transition:transform .6s;transform-style:preserve-3d}#ot-sdk-btn-floating .ot-floating-button__front{background-color:#6aaae4;transform:rotateY(0)}#ot-sdk-btn-floating .ot-floating-button__front.custom-persistent-icon{background-position:center center;background-repeat:no-repeat;background-size:100%;border-radius:100px}#ot-sdk-btn-floating .ot-floating-button__front svg{width:30px;height:37px}#ot-sdk-btn-floating .ot-floating-button__back{background-color:#69c;transform:rotateY(-180deg)}#ot-sdk-btn-floating .ot-floating-button__back.custom-persistent-icon{background-position:center center;background-repeat:no-repeat;background-size:100%;border-radius:100px}#ot-sdk-btn-floating .ot-floating-button__back svg{width:24px;height:24px}#ot-sdk-btn-floating.ot-floating-button button{padding:0;background-color:rgba(0,0,0,0);border:0;width:100%;height:100%;cursor:pointer}@keyframes otFloatingBtnIntro{0%{opacity:0;left:-75px}100%{opacity:1;left:1%"@keyframes otFloatingBtnImageIntro{0%{opacity:0;transform:scale(0) rotate(-270deg)}100%{opacity:100%;transform:scale(0.95) rotate(0deg)"</style><style>
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
</style><script type="text/javascript" async="" src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/997711212/?random=1730560924932&amp;cv=11&amp;fst=1730560924932&amp;bg=ffffff&amp;guid=ON&amp;async=1&amp;gtm=45be4au0v9176108779za200&amp;gcd=13l3l3l3l1l1&amp;dma=0&amp;tag_exp=101823848~101878899~101878944~101925629&amp;u_w=1920&amp;u_h=1080&amp;url=https%3A%2F%2Fwww.bark.com%2Fbuyers%2Fdashboard%2F&amp;ref=https%3A%2F%2Fwww.bark.com%2Fbuyers%2Fbark%2FBjM3bN%2F%3Fblt%3D3250-9b352ea504df485efea89f61dfc1d1f934dc7f42%26bli%3DemnvV6&amp;hn=www.googleadservices.com&amp;frm=0&amp;tiba=Bark.com%20-%20My%20Barks&amp;did=dYWJhMj&amp;gdid=dYWJhMj&amp;npa=0&amp;pscdl=noapi&amp;auid=76193368.1728229976&amp;uaa=x86&amp;uab=64&amp;uafvl=Chromium%3B130.0.6723.92%7CGoogle%2520Chrome%3B130.0.6723.92%7CNot%253FA_Brand%3B99.0.0.0&amp;uamb=0&amp;uam=&amp;uap=Windows&amp;uapv=15.0.0&amp;uaw=0&amp;fledge=1&amp;data=event%3Dgtag.config&amp;rfmt=3&amp;fmt=4"></script><script crossorigin="anonymous" src="https://fast.trychameleon.com/edit/user/S4swvegZAhUVPl97IteRvbPkYhxkuOBZuxSQa8o7PkHn8V-1MDXk6-DdPdFdLQEvAc0CkE/elements.js"></script></head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NGWGLGF"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
            <nav class="navbar sticky-top navbar-expand-lg bark-header  body-min-width header-shadow background-color-white py-0" id="bark-header">
            <a class="navbar-brand py-3" href="/buyers/dashboard/">
            <img class="img-fluid loading" src="https://d18jakcjgoan9.cloudfront.net/s/img/images/barklogo-dark.png!d=mzRSJ4" width="80" height="24" title="Bark Logo" alt="Bark Logo" data-was-processed="true">
        </a>
    
    
    
        <div class="collapsed ml-auto d-flex d-lg-none notifications-dropdown">
            <a class="notifications-dropdown-toggle" href="#" id="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="ld-notifications-cont">
                    <span class="buyer-notification notification-bell mobile-notifications-trigger" style="display: none">
                        <img src="https://d18jakcjgoan9.cloudfront.net/s/img/img/barkv2/custom-icons/bell-default.png!d=2M4f26" alt="" width="24" height="24">
                        <span class="red-circle"></span>
                    </span>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right notification-dropdown-box mw-50 mt-0" aria-labelledby="notifications-dropdown-toggle-mobile">
                <ul id="buyer-notifications-mobile" class="dropdown notification-list js-notification-list"></ul>
            </div>
        </div>

        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="bark-svg-icon bsi-primary-dark-blue bsi-sm hamburger_menu"><!--?xml version="1.0" encoding="UTF-8"?-->
<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 55 (78076) - https://sketchapp.com -->
    <title>Icon/hamburger_menu</title>
    <desc>Created with Sketch.</desc>
    <g id="Icon/hamburger_menu" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="attach">
            <polygon id="Path" points="0 0 24 0 24 24 0 24"></polygon>
            <path d="M2,5 L22,5 L22,7 L2,7 L2,5 Z M2,11 L22,11 L22,13 L2,13 L2,11 Z M2,17 L22,17 L22,19 L2,19 L2,17 Z" id="Combined-Shape" fill="#111637"></path>
        </g>
    </g>
</svg></span>
            <span class="bark-svg-icon bsi-primary-dark-blue bsi-sm close-menu"><!--?xml version="1.0" encoding="UTF-8"?-->
<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g transform="translate(5.000000, 5.000000)" class="primary-color">
            <path d="M8.4,7 L14,12.6 L12.6,14 L7,8.4 L1.4,14 L2.48689958e-14,12.6 L5.6,7 L-1.46549439e-14,1.4 L1.4,-5.15143483e-14 L7,5.6 L12.6,-2.30926389e-14 L14,1.4 L8.4,7 Z"></path>
        </g>
    </g>
</svg></span>
        </button>
    
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto d-flex align-items-center">
                            <li class="buyer-dashboard nav-item px-2 py-3 py-sm-4 active" id="js-joyride-buyer-dashboard">
                    <a class="text-grey-400 nav-link py-0" href="/buyers/dashboard/">My requests</a>
                </li>
            
                            <li class="nav-item dropdown notifications-dropdown py-2 d-none d-lg-block">
                    <a class="notifications-dropdown-toggle" href="#" id="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="ld-notifications-cont">
                            <span class="buyer-notification notification-bell mobile-notifications-trigger" style="display: none">
                                <img src="https://d18jakcjgoan9.cloudfront.net/s/img/img/barkv2/custom-icons/bell-default.png!d=2M4f26" alt="" width="24" height="24">
                                <span class="red-circle"></span>
                            </span>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right notification-dropdown-box" aria-labelledby="notifications-dropdown-toggle">
                        <ul id="buyer-notifications" class="dropdown notification-list js-notification-list"></ul>
                    </div>
                </li>
                <li class="nav-item dropdown user-account-dropdown buyer p-lg-2">
                    <a class="dropdown-toggle d-lg-flex flex-row" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                    <img class="img-fluid default-avatar ml-3 mr-1 d-none" alt="john" width="32" height="32" title="john" src="" srcset="">
                                <div class="default-avatar user-letter default-avatar-32 bg-cerise-red d-inline-flex text-white ml-3 mr-1 justify-content-center align-items-center">
                                    J
                                </div>
                                                                                                        <p class="d-inline-flex text-dark-blue mb-0 ml-1 js-buyer-username">john</p>
                            <span class="bark-svg-icon bsi-primary-grey-200 bsi-xxs d-inline-block arrow-down-svg ml-1"><!--?xml version="1.0" encoding="UTF-8"?-->
<svg width="10px" height="6px" viewBox="0 0 10 6" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <g id="Guide-" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Style-Guide" transform="translate(-344.000000, -10881.000000)">
            <g id="Icons/Illustrations" transform="translate(115.000000, 10318.000000)">
                <g id="Icons" transform="translate(22.000000, 242.000000)">
                    <g id="Icon/arrow_down" transform="translate(206.000000, 320.000000)">
                        <g id="arrow_down">
                            <rect id="base" fill-rule="nonzero" x="0" y="0" width="12" height="8"></rect>
                            <path d="M6.63460593,6.744 C6.28160593,7.084 5.75960593,7.085 5.40560593,6.748 L1.33160593,2.863 C0.934605927,2.484 0.887605927,1.818 1.22560593,1.374 C1.40460593,1.139 1.66760593,1.003 1.94360593,1.003 L10.0556059,1 C10.5766059,1 10.9996059,1.472 10.9996059,2.056 C11.0006059,2.363 10.8796059,2.655 10.6716059,2.856 L6.63460593,6.744 Z" id="arrow-down" class="primary-color"></path>
                        </g>
                    </g>
                </g>
            </g>
        </g>
    </g>
</svg></span>
                                            </a>
                    <div class="dropdown-menu dropdown-menu-right text-light-grey mt-0" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item nav-link px-3 px-md-two d-flex align-items-center justify-content-center justify-content-md-start" href="/user/notifications/">
                                <span>Notifications</span>
                                                            </a>
                                                    <a class="dropdown-item nav-link px-3 px-md-two d-flex align-items-center justify-content-center justify-content-md-start" href="/user/settings/">
                                <span>Account settings</span>
                                                            </a>
                                                    <a class="dropdown-item nav-link px-3 px-md-two d-flex align-items-center justify-content-center justify-content-md-start" href="/logout/">
                                <span>Log Out</span>
                                                            </a>
                                            </div>
                </li>
            
        </ul>
            </div>
</nav>

<div class="notification-template" style="display: none">
    <a class="notification-link" href="">
        <div class="d-flex flex-row">
            <div class="d-flex flex-column ">
                <img class="mr-2 mt-1 notification-icon" src="" width="16" height="16">
            </div>
            <div class="d-flex flex-column flex-grow-1 overflow-hidden">
                <div class="d-flex flex-row flex-grow-1">
                    <strong><p class="title strong text-dark-blue"></p></strong>
                    <p class="justify-self-end date ml-auto"></p>
                </div>
                <p class="message pr-3 text-dark-blue text-truncate d-inline-block"></p>
            </div>
        </div>
    </a>
</div>    
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


    <div class="full-width-wrapper full-height-with-header bg-light-grey">
        <div id="__rctBuyerPlist"><div class="" id="app" style="background-color: rgb(249, 249, 250);"><div class="container tw-mx-auto"><div class="pb-4"><div class="top-row_root__3JOm6"><h1>Your requests</h1><button class="Button_base__iY8s5 Button_lg__GH03D Button_minWidth__2dpSx Button_textBlue__796NH Button_bgLightBlue__0RMHv __btnPlaceRequest tw-border-0" data-cy="btnPlaceRequest"><span class="tw-flex tw-justify-center"><span class="button-main  "><span class="child-container Button_childContainer__ytwFQ">Place new request</span></span></span></button></div></div><div class="mb-4"><div class="projectlistContainer" id="app"><div data-testid="project_list" class="tw-flex tw-flex-row tw-grid sm:tw-grid-cols-1 md:tw-grid-cols-2 tw-gap-4"><div data-cy="projectListItem" class="projectlist_item_projectListItem__+529Q tw-text-center tw-items-center tw-flex tw-flex-col tw-p-4 tw-shadow-md tw-bg-white tw-rounded tw-p-3"><h3 data-testid="_plistProjectLink" class="tw-pt-2 tw-text-center tw-cursor-pointer">Skip Hire Company</h3><p class="tw-text-center tw-text-sm tw-mb-4 tw-mt-1 tw-text-gray-400">18 mins ago</p><div class="tw-flex tw-flex-col tw-grow tw-w-full"><div class="tw-pl-4 tw-pr-4"><div class="tw-flex tw-justify-center tw-mt-2 tw-mb-4"><div data-testid="_suggestionsSearching" class="tw-cursor-pointer tw-rounded-full tw-flex tw-text-white tw-bg-sksy-400 tw-h-18 tw-w-18 tw-justify-center tw-items-center"><svg width="90" height="90" viewBox="0 0 90 90" fill="none" xmlns="http://www.w3.org/2000/svg"><circle opacity="0.15" cx="45" cy="45" r="45" fill="#2D7AF1"></circle><path fill-rule="evenodd" clip-rule="evenodd" d="M43.0137 57.0273C35.8264 57.0273 30 51.2009 30 44.0137C30 36.8264 35.8264 31 43.0137 31C50.2009 31 56.0273 36.8264 56.0273 44.0137C56.0273 47.021 55.0073 49.79 53.2943 51.9937L60.9649 59.6643L58.6644 61.9648L50.9938 54.2942C48.7901 56.0072 46.021 57.0273 43.0137 57.0273ZM43.0137 53.7739C48.4042 53.7739 52.774 49.4041 52.774 44.0137C52.774 38.6232 48.4042 34.2534 43.0137 34.2534C37.6233 34.2534 33.2535 38.6232 33.2535 44.0137C33.2535 49.4041 37.6233 53.7739 43.0137 53.7739Z" fill="#2D7AF1"></path><circle cx="43" cy="44" r="11" fill="white"></circle><path d="M40.631 49.4999L36 44.8738L37.6324 43.243L40.631 46.2269L47.8676 39L49.5 40.6423L40.631 49.4999Z" fill="#47BF9C"></path></svg></div></div><p class="projectlist_item_text-grey-600__bDXRq tw-text-center tw-mb-3">We've got professionals ready and available!</p></div></div><div class="tw-mt-3 tw-mb-2 tw-text-center"><a data-testid="btn-viewquote" class="projectlist_item_linkButton__p+KBq tw-no-underline tw-drop-shadow-md tw-rounded tw-p-2 tw-text-white" href="/buyers/bark/BjM3bN/">View professionals</a></div><div class="actionsWrapper tw-pb-3 tw-mt-4 tw-items-center tw-text-center tw-text-sm"><a data-cy="btn_close_request" class="projectlist_item_link__eqrNt tw-pr-2" href="/buyers/close-project/BjM3bN/">Close request</a> | <a data-cy="btn_hired" class="projectlist_item_link__eqrNt tw-pl-2" href="/buyers/close-project/BjM3bN/?hired=1">I hired someone</a></div></div><div data-cy="projectListItem" class="projectlist_item_projectListItem__+529Q tw-text-center tw-items-center tw-flex tw-flex-col tw-p-4 tw-shadow-md tw-bg-white tw-rounded tw-p-3"><h3 data-testid="_plistProjectLink" class="tw-pt-2 tw-text-center tw-cursor-pointer">Garden Clearance Expert</h3><p class="tw-text-center tw-text-sm tw-mb-4 tw-mt-1 tw-text-gray-400">Wednesday</p><div class="tw-flex tw-flex-col tw-grow tw-w-full"><div class="tw-pl-4 tw-pr-4"><div class="tw-flex tw-justify-center tw-mt-2 tw-mb-4"><div data-testid="_suggestionsSearching" class="tw-cursor-pointer tw-rounded-full tw-flex tw-text-white tw-bg-sksy-400 tw-h-18 tw-w-18 tw-justify-center tw-items-center"><svg width="90" height="90" viewBox="0 0 90 90" fill="none" xmlns="http://www.w3.org/2000/svg"><circle opacity="0.15" cx="45" cy="45" r="45" fill="#2D7AF1"></circle><path fill-rule="evenodd" clip-rule="evenodd" d="M43.0137 57.0273C35.8264 57.0273 30 51.2009 30 44.0137C30 36.8264 35.8264 31 43.0137 31C50.2009 31 56.0273 36.8264 56.0273 44.0137C56.0273 47.021 55.0073 49.79 53.2943 51.9937L60.9649 59.6643L58.6644 61.9648L50.9938 54.2942C48.7901 56.0072 46.021 57.0273 43.0137 57.0273ZM43.0137 53.7739C48.4042 53.7739 52.774 49.4041 52.774 44.0137C52.774 38.6232 48.4042 34.2534 43.0137 34.2534C37.6233 34.2534 33.2535 38.6232 33.2535 44.0137C33.2535 49.4041 37.6233 53.7739 43.0137 53.7739Z" fill="#2D7AF1"></path><circle cx="43" cy="44" r="11" fill="white"></circle><path d="M40.631 49.4999L36 44.8738L37.6324 43.243L40.631 46.2269L47.8676 39L49.5 40.6423L40.631 49.4999Z" fill="#47BF9C"></path></svg></div></div><p class="projectlist_item_text-grey-600__bDXRq tw-text-center tw-mb-3">We've got professionals ready and available!</p></div></div><div class="tw-mt-3 tw-mb-2 tw-text-center"><a data-testid="btn-viewquote" class="projectlist_item_linkButton__p+KBq tw-no-underline tw-drop-shadow-md tw-rounded tw-p-2 tw-text-white" href="/buyers/bark/j9jw6R/">View professionals</a></div><div class="actionsWrapper tw-pb-3 tw-mt-4 tw-items-center tw-text-center tw-text-sm"><a data-cy="btn_close_request" class="projectlist_item_link__eqrNt tw-pr-2" href="/buyers/close-project/j9jw6R/">Close request</a> | <a data-cy="btn_hired" class="projectlist_item_link__eqrNt tw-pl-2" href="/buyers/close-project/j9jw6R/?hired=1">I hired someone</a></div></div><div data-cy="projectListItem" class="projectlist_item_projectListItem__+529Q tw-text-center tw-items-center tw-flex tw-flex-col tw-p-4 tw-shadow-md tw-bg-white tw-rounded tw-p-3"><h3 data-testid="_plistProjectLink" class="tw-pt-2 tw-text-center tw-cursor-pointer">Painter &amp; Decorator</h3><p class="tw-text-center tw-text-sm tw-mb-4 tw-mt-1 tw-text-gray-400">Tuesday</p><div class="tw-flex tw-flex-col tw-grow tw-w-full"><div class="__avatarList tw-flex tw-justify-center tw-mb-3 tw-p-2"><a class="tw-no-underline" href="/buyers/messenger/south-africa/fish-hoek-7978/painting-decoration-interior/7e793eca/?r=123160747" data-testid="_avtr-link"><div class="__proAvatar tw-flex tw-justify-center tw-items-center"><img alt="Twin Brothers Painting and Renovations" class="AvatarDeprecated_avatarListItemImg__A45Mh tw-rounded-full" src="https://bark-user-data.s3.eu-west-1.amazonaws.com/avatar_v2/44MLMQ/logo/66e1b773d2b34.jpg" width="75" height="75"></div></a><a class="tw-no-underline" href="/buyers/messenger/south-africa/fish-hoek-7978/painting-decoration-interior/7e793eca/?r=123182562" data-testid="_avtr-link"><div class="__proAvatar tw-flex tw-justify-center tw-items-center"><img alt="Fervour Designs" class="AvatarDeprecated_avatarListItemImg__A45Mh tw-rounded-full" src="https://bark-user-data.s3.eu-west-1.amazonaws.com/avatar_v2/mL3QE6/logo/671f8e7147eba.jpg" width="75" height="75"></div></a><div class="projectlist_item_avatarListItem__RMtCW projectlist_item_bg-primary-avatar__kPpLj projectlist_item_text-num-pros__LIBFW __proAvatarMore tw-hidden tw-rounded-full tw-flex tw-justify-center tw-items-center">+1</div></div><p class="text-grey-600 tw-text-center tw-mb-0">2 professionals are ready to assist you with your request.</p><div class="tw-pl-4 tw-pr-4"></div></div><div class="tw-mt-3 tw-mb-2 tw-text-center"><a data-testid="btn-viewquote" class="projectlist_item_linkButton__p+KBq tw-no-underline tw-drop-shadow-md tw-rounded tw-p-2 tw-text-white" href="/buyers/bark/YLvBbR/">View quotes</a></div><div class="actionsWrapper tw-pb-3 tw-mt-4 tw-items-center tw-text-center tw-text-sm"><a data-cy="btn_close_request" class="projectlist_item_link__eqrNt tw-pr-2" href="/buyers/close-project/YLvBbR/">Close request</a> | <a data-cy="btn_hired" class="projectlist_item_link__eqrNt tw-pl-2" href="/buyers/close-project/YLvBbR/?hired=1">I hired someone</a></div></div><div data-cy="projectListItem" class="projectlist_item_projectListItem__+529Q tw-text-center tw-items-center tw-flex tw-flex-col tw-p-4 tw-shadow-md tw-bg-white tw-rounded tw-p-3"><h3 data-testid="_plistProjectLink" class="tw-pt-2 tw-text-center tw-cursor-pointer">Carpet Cleaner</h3><p class="tw-text-center tw-text-sm tw-mb-4 tw-mt-1 tw-text-gray-400">Tuesday</p><div class="tw-flex tw-flex-col tw-grow tw-w-full"><div class="tw-pl-4 tw-pr-4"><div class="tw-flex tw-justify-center tw-mt-2 tw-mb-4"><div data-testid="_suggestionsSearching" class="tw-cursor-pointer tw-rounded-full tw-flex tw-text-white tw-bg-sksy-400 tw-h-18 tw-w-18 tw-justify-center tw-items-center"><svg width="90" height="90" viewBox="0 0 90 90" fill="none" xmlns="http://www.w3.org/2000/svg"><circle opacity="0.15" cx="45" cy="45" r="45" fill="#2D7AF1"></circle><path fill-rule="evenodd" clip-rule="evenodd" d="M43.0137 57.0273C35.8264 57.0273 30 51.2009 30 44.0137C30 36.8264 35.8264 31 43.0137 31C50.2009 31 56.0273 36.8264 56.0273 44.0137C56.0273 47.021 55.0073 49.79 53.2943 51.9937L60.9649 59.6643L58.6644 61.9648L50.9938 54.2942C48.7901 56.0072 46.021 57.0273 43.0137 57.0273ZM43.0137 53.7739C48.4042 53.7739 52.774 49.4041 52.774 44.0137C52.774 38.6232 48.4042 34.2534 43.0137 34.2534C37.6233 34.2534 33.2535 38.6232 33.2535 44.0137C33.2535 49.4041 37.6233 53.7739 43.0137 53.7739Z" fill="#2D7AF1"></path><circle cx="43" cy="44" r="11" fill="white"></circle><path d="M40.631 49.4999L36 44.8738L37.6324 43.243L40.631 46.2269L47.8676 39L49.5 40.6423L40.631 49.4999Z" fill="#47BF9C"></path></svg></div></div><p class="projectlist_item_text-grey-600__bDXRq tw-text-center tw-mb-3">We've got professionals ready and available!</p></div></div><div class="tw-mt-3 tw-mb-2 tw-text-center"><a data-testid="btn-viewquote" class="projectlist_item_linkButton__p+KBq tw-no-underline tw-drop-shadow-md tw-rounded tw-p-2 tw-text-white" href="/buyers/bark/mkZzVY/">View professionals</a></div><div class="actionsWrapper tw-pb-3 tw-mt-4 tw-items-center tw-text-center tw-text-sm"><a data-cy="btn_close_request" class="projectlist_item_link__eqrNt tw-pr-2" href="/buyers/close-project/mkZzVY/">Close request</a> | <a data-cy="btn_hired" class="projectlist_item_link__eqrNt tw-pl-2" href="/buyers/close-project/mkZzVY/?hired=1">I hired someone</a></div></div><div data-cy="projectListItem" class="projectlist_item_projectListItem__+529Q tw-text-center tw-items-center tw-flex tw-flex-col tw-p-4 tw-shadow-md tw-bg-white tw-rounded tw-p-3"><h3 data-testid="_plistProjectLink" class="tw-pt-2 tw-text-center tw-cursor-pointer">PAT Tester</h3><p class="tw-text-center tw-text-sm tw-mb-4 tw-mt-1 tw-text-gray-400">Monday</p><div class="tw-flex tw-flex-col tw-grow tw-w-full"><div class="__avatarList tw-flex tw-justify-center tw-mb-3 tw-p-2"><a class="tw-no-underline" href="/buyers/messenger/south-africa/kaapstad-7925/electrical-inspections-pat-testing/818c6b6c/?r=123109519" data-testid="_avtr-link"><div class="__proAvatar tw-flex tw-justify-center tw-items-center"><img alt="Muktech Power Projects" class="AvatarDeprecated_avatarListItemImg__A45Mh tw-rounded-full" src="https://bark-user-data.s3.eu-west-1.amazonaws.com/avatar_v2/lm6OMo/logo/670acca2d5c2a.jpeg" width="75" height="75"></div></a><div class="projectlist_item_avatarListItem__RMtCW projectlist_item_bg-primary-avatar__kPpLj projectlist_item_text-num-pros__LIBFW __proAvatarMore tw-hidden tw-rounded-full tw-flex tw-justify-center tw-items-center">+1</div></div><p class="text-grey-600 tw-text-center tw-mb-0">1 professional is ready to assist you with your request.</p><div class="tw-pl-4 tw-pr-4"></div></div><div class="tw-mt-3 tw-mb-2 tw-text-center"><a data-testid="btn-viewquote" class="projectlist_item_linkButton__p+KBq tw-no-underline tw-drop-shadow-md tw-rounded tw-p-2 tw-text-white" href="/buyers/bark/BjQVv7/">View quote</a></div><div class="actionsWrapper tw-pb-3 tw-mt-4 tw-items-center tw-text-center tw-text-sm"><a data-cy="btn_close_request" class="projectlist_item_link__eqrNt tw-pr-2" href="/buyers/close-project/BjQVv7/">Close request</a> | <a data-cy="btn_hired" class="projectlist_item_link__eqrNt tw-pl-2" href="/buyers/close-project/BjQVv7/?hired=1">I hired someone</a></div></div></div></div></div><div class="pt-3"><div class="__buyerNextBarkContainer"><div class="all_pt-3__89f4A"><div class="all_col-12__aAzEV all_mx-auto__ERNKZ all_pb-3__oPpO6"><div class="all_d-flex__WrxK8 all_align-items-center__KVHPQ"><h2 class="all_mb-0__hrCwX all_me-auto__Y55BT all_h3__w7KAG">You may also need</h2><div class="page-buttons all_d-flex__WrxK8 all_mt-2__B9L78 all_mt-md-0__hdzCb bark-carousel-buttons"><div class="all_d-none__gqjAc all_d-md-flex__kchcM"><div data-testid="btnPrev" data-cy="carousel-page-btn" data-cy-enabled="false" class="all_carousel-page-button__zlGq- all_border__2wTAl all_d-flex__WrxK8 all_justify-content-center__T3UG3 all_align-items-center__KVHPQ all_me-2__SToMN cursor-pointer all_disabled__01ag6"><img class="all_img-fluid__FB1iK" alt="left arrow" width="15" height="14" title="left arrow" src="https://development-bark-static.s3-eu-west-2.amazonaws.com/s/img/frontend-v2/icons/directory-v3/back.png!d=xgKUK"></div><div data-testid="btnNext" data-cy="carousel-page-btn" data-cy-enabled="true" class="all_carousel-page-button__zlGq- all_border__2wTAl all_d-flex__WrxK8 all_justify-content-center__T3UG3 all_align-items-center__KVHPQ all_me-2__SToMN cursor-pointer "><img class="all_img-fluid__FB1iK" alt="right arrow" width="15" height="14" title="right arrow" src="https://development-bark-static.s3-eu-west-2.amazonaws.com/s/img/frontend-v2/icons/directory-v3/forward.png!d=xgKUK"></div></div></div></div></div></div><div class="all_col-12__aAzEV all_mx-auto__ERNKZ"><div class="all_row__thMJD all_flex-nowrap__b4Fi6 all_carousel-row__PGcKn all_d-md-flex__kchcM" id="next-bark-carousel"><div class="all_col-4__Sc7Yb all_col-lg-3__fRtDD all_bark-carousel-item__k3eDJ " style="transform: translateX(0%);"><div class="cursor-pointer category-link all_d-flex__WrxK8 all_flex-column__5eyyf all_h-100__3DMxF" data-category-id="35" data-bark-mode="bnb-project-dash"><div class="all_overflow-hidden__jfaju all_rounded-top__Lvd5h"><img class="all_img-fluid__FB1iK all_rounded-top__Lvd5h all_scale-image__1X-4- all_object-fit-cover__ZMOnA" src="https://d1vbfnp4jhzk1f.cloudfront.net/s/modal-thumbnail/35-1479228507889087712.png!d=72Qsoe" alt="General Builders"></div><div class="all_border__2wTAl all_br-bottom__Y6N-k all_flex-grow-1__izlZH"><p class="all_mb-0__hrCwX all_p-3__wnB5p all_text-grey-600__UN2jF">General Builders</p></div></div></div><div class="all_col-4__Sc7Yb all_col-lg-3__fRtDD all_bark-carousel-item__k3eDJ " style="transform: translateX(0%);"><div class="cursor-pointer category-link all_d-flex__WrxK8 all_flex-column__5eyyf all_h-100__3DMxF" data-category-id="1212" data-bark-mode="bnb-project-dash"><div class="all_overflow-hidden__jfaju all_rounded-top__Lvd5h"><img class="all_img-fluid__FB1iK all_rounded-top__Lvd5h all_scale-image__1X-4- all_object-fit-cover__ZMOnA" src="https://d1vbfnp4jhzk1f.cloudfront.net/s/modal-thumbnail/1212-15656972151119486286.png!d=72Qsoe" alt="House Cleaning"></div><div class="all_border__2wTAl all_br-bottom__Y6N-k all_flex-grow-1__izlZH"><p class="all_mb-0__hrCwX all_p-3__wnB5p all_text-grey-600__UN2jF">House Cleaning</p></div></div></div><div class="all_col-4__Sc7Yb all_col-lg-3__fRtDD all_bark-carousel-item__k3eDJ " style="transform: translateX(0%);"><div class="cursor-pointer category-link all_d-flex__WrxK8 all_flex-column__5eyyf all_h-100__3DMxF" data-category-id="1119" data-bark-mode="bnb-project-dash"><div class="all_overflow-hidden__jfaju all_rounded-top__Lvd5h"><img class="all_img-fluid__FB1iK all_rounded-top__Lvd5h all_scale-image__1X-4- all_object-fit-cover__ZMOnA" src="https://d1vbfnp4jhzk1f.cloudfront.net/s/modal_thumbnail_1119.jpg!d=72Qsoe" alt="Solar Panel Installation"></div><div class="all_border__2wTAl all_br-bottom__Y6N-k all_flex-grow-1__izlZH"><p class="all_mb-0__hrCwX all_p-3__wnB5p all_text-grey-600__UN2jF">Solar Panel Installation</p></div></div></div><div class="all_col-4__Sc7Yb all_col-lg-3__fRtDD all_bark-carousel-item__k3eDJ " style="transform: translateX(0%);"><div class="cursor-pointer category-link all_d-flex__WrxK8 all_flex-column__5eyyf all_h-100__3DMxF" data-category-id="132" data-bark-mode="bnb-project-dash"><div class="all_overflow-hidden__jfaju all_rounded-top__Lvd5h"><img class="all_img-fluid__FB1iK all_rounded-top__Lvd5h all_scale-image__1X-4- all_object-fit-cover__ZMOnA" src="https://d1vbfnp4jhzk1f.cloudfront.net/s/modal_thumbnail_132.jpg!d=72Qsoe" alt="Moving Companies"></div><div class="all_border__2wTAl all_br-bottom__Y6N-k all_flex-grow-1__izlZH"><p class="all_mb-0__hrCwX all_p-3__wnB5p all_text-grey-600__UN2jF">Moving Companies</p></div></div></div><div class="all_col-4__Sc7Yb all_col-lg-3__fRtDD all_bark-carousel-item__k3eDJ " style="transform: translateX(0%);"><div class="cursor-pointer category-link all_d-flex__WrxK8 all_flex-column__5eyyf all_h-100__3DMxF" data-category-id="1785" data-bark-mode="bnb-project-dash"><div class="all_overflow-hidden__jfaju all_rounded-top__Lvd5h"><img class="all_img-fluid__FB1iK all_rounded-top__Lvd5h all_scale-image__1X-4- all_object-fit-cover__ZMOnA" src="https://d1vbfnp4jhzk1f.cloudfront.net/s/modal-thumbnail/1785-15657042781292003434.png!d=72Qsoe" alt="CCTV Installation"></div><div class="all_border__2wTAl all_br-bottom__Y6N-k all_flex-grow-1__izlZH"><p class="all_mb-0__hrCwX all_p-3__wnB5p all_text-grey-600__UN2jF">CCTV Installation</p></div></div></div><div class="all_col-4__Sc7Yb all_col-lg-3__fRtDD all_bark-carousel-item__k3eDJ " style="transform: translateX(0%);"><div class="cursor-pointer category-link all_d-flex__WrxK8 all_flex-column__5eyyf all_h-100__3DMxF" data-category-id="1670" data-bark-mode="bnb-project-dash"><div class="all_overflow-hidden__jfaju all_rounded-top__Lvd5h"><img class="all_img-fluid__FB1iK all_rounded-top__Lvd5h all_scale-image__1X-4- all_object-fit-cover__ZMOnA" src="https://d1vbfnp4jhzk1f.cloudfront.net/s/modal_thumbnail_1670.jpg!d=72Qsoe" alt="Home &amp; Domiciliary Care"></div><div class="all_border__2wTAl all_br-bottom__Y6N-k all_flex-grow-1__izlZH"><p class="all_mb-0__hrCwX all_p-3__wnB5p all_text-grey-600__UN2jF">Home &amp; Domiciliary Care</p></div></div></div><div class="all_col-4__Sc7Yb all_col-lg-3__fRtDD all_bark-carousel-item__k3eDJ " style="transform: translateX(0%);"><div class="cursor-pointer category-link all_d-flex__WrxK8 all_flex-column__5eyyf all_h-100__3DMxF" data-category-id="152" data-bark-mode="bnb-project-dash"><div class="all_overflow-hidden__jfaju all_rounded-top__Lvd5h"><img class="all_img-fluid__FB1iK all_rounded-top__Lvd5h all_scale-image__1X-4- all_object-fit-cover__ZMOnA" src="https://d1vbfnp4jhzk1f.cloudfront.net/s/modal-thumbnail/152-1565703967914542430.png!d=72Qsoe" alt="Security Guard Services"></div><div class="all_border__2wTAl all_br-bottom__Y6N-k all_flex-grow-1__izlZH"><p class="all_mb-0__hrCwX all_p-3__wnB5p all_text-grey-600__UN2jF">Security Guard Services</p></div></div></div><div class="all_col-4__Sc7Yb all_col-lg-3__fRtDD all_bark-carousel-item__k3eDJ " style="transform: translateX(0%);"><div class="cursor-pointer category-link all_d-flex__WrxK8 all_flex-column__5eyyf all_h-100__3DMxF" data-category-id="1517" data-bark-mode="bnb-project-dash"><div class="all_overflow-hidden__jfaju all_rounded-top__Lvd5h"><img class="all_img-fluid__FB1iK all_rounded-top__Lvd5h all_scale-image__1X-4- all_object-fit-cover__ZMOnA" src="https://d1vbfnp4jhzk1f.cloudfront.net/s/modal_thumbnail_1517.jpg!d=72Qsoe" alt="Divorce Lawyers"></div><div class="all_border__2wTAl all_br-bottom__Y6N-k all_flex-grow-1__izlZH"><p class="all_mb-0__hrCwX all_p-3__wnB5p all_text-grey-600__UN2jF">Divorce Lawyers</p></div></div></div><div class="all_col-4__Sc7Yb all_col-lg-3__fRtDD all_bark-carousel-item__k3eDJ " style="transform: translateX(0%);"><div class="cursor-pointer category-link all_d-flex__WrxK8 all_flex-column__5eyyf all_h-100__3DMxF" data-category-id="1474" data-bark-mode="bnb-project-dash"><div class="all_overflow-hidden__jfaju all_rounded-top__Lvd5h"><img class="all_img-fluid__FB1iK all_rounded-top__Lvd5h all_scale-image__1X-4- all_object-fit-cover__ZMOnA" src="https://d1vbfnp4jhzk1f.cloudfront.net/s/modal_thumbnail_1474.jpg!d=72Qsoe" alt="Tax Preparation"></div><div class="all_border__2wTAl all_br-bottom__Y6N-k all_flex-grow-1__izlZH"><p class="all_mb-0__hrCwX all_p-3__wnB5p all_text-grey-600__UN2jF">Tax Preparation</p></div></div></div><div class="all_col-4__Sc7Yb all_col-lg-3__fRtDD all_bark-carousel-item__k3eDJ " style="transform: translateX(0%);"><div class="cursor-pointer category-link all_d-flex__WrxK8 all_flex-column__5eyyf all_h-100__3DMxF" data-category-id="137" data-bark-mode="bnb-project-dash"><div class="all_overflow-hidden__jfaju all_rounded-top__Lvd5h"><img class="all_img-fluid__FB1iK all_rounded-top__Lvd5h all_scale-image__1X-4- all_object-fit-cover__ZMOnA" src="https://d1vbfnp4jhzk1f.cloudfront.net/s/modal_thumbnail_137.jpg!d=72Qsoe" alt="Pest Control"></div><div class="all_border__2wTAl all_br-bottom__Y6N-k all_flex-grow-1__izlZH"><p class="all_mb-0__hrCwX all_p-3__wnB5p all_text-grey-600__UN2jF">Pest Control</p></div></div></div><div class="all_col-4__Sc7Yb all_col-lg-3__fRtDD all_bark-carousel-item__k3eDJ " style="transform: translateX(0%);"><div class="cursor-pointer category-link all_d-flex__WrxK8 all_flex-column__5eyyf all_h-100__3DMxF" data-category-id="171" data-bark-mode="bnb-project-dash"><div class="all_overflow-hidden__jfaju all_rounded-top__Lvd5h"><img class="all_img-fluid__FB1iK all_rounded-top__Lvd5h all_scale-image__1X-4- all_object-fit-cover__ZMOnA" src="https://d1vbfnp4jhzk1f.cloudfront.net/s/modal-thumbnail/171-1565697304108227713.png!d=72Qsoe" alt="Catering"></div><div class="all_border__2wTAl all_br-bottom__Y6N-k all_flex-grow-1__izlZH"><p class="all_mb-0__hrCwX all_p-3__wnB5p all_text-grey-600__UN2jF">Catering</p></div></div></div><div class="all_col-4__Sc7Yb all_col-lg-3__fRtDD all_bark-carousel-item__k3eDJ " style="transform: translateX(0%);"><div class="cursor-pointer category-link all_d-flex__WrxK8 all_flex-column__5eyyf all_h-100__3DMxF" data-category-id="179" data-bark-mode="bnb-project-dash"><div class="all_overflow-hidden__jfaju all_rounded-top__Lvd5h"><img class="all_img-fluid__FB1iK all_rounded-top__Lvd5h all_scale-image__1X-4- all_object-fit-cover__ZMOnA" src="https://d1vbfnp4jhzk1f.cloudfront.net/s/modal-thumbnail/179-15656975571559550083.png!d=72Qsoe" alt="Gardening"></div><div class="all_border__2wTAl all_br-bottom__Y6N-k all_flex-grow-1__izlZH"><p class="all_mb-0__hrCwX all_p-3__wnB5p all_text-grey-600__UN2jF">Gardening</p></div></div></div><div class="all_col-4__Sc7Yb all_col-lg-3__fRtDD all_bark-carousel-item__k3eDJ " style="transform: translateX(0%);"><div class="cursor-pointer category-link all_d-flex__WrxK8 all_flex-column__5eyyf all_h-100__3DMxF" data-category-id="1067" data-bark-mode="bnb-project-dash"><div class="all_overflow-hidden__jfaju all_rounded-top__Lvd5h"><img class="all_img-fluid__FB1iK all_rounded-top__Lvd5h all_scale-image__1X-4- all_object-fit-cover__ZMOnA" src="https://d1vbfnp4jhzk1f.cloudfront.net/s/modal-thumbnail/1067-1551098711488335151.png!d=72Qsoe" alt="Deep Cleaning Services"></div><div class="all_border__2wTAl all_br-bottom__Y6N-k all_flex-grow-1__izlZH"><p class="all_mb-0__hrCwX all_p-3__wnB5p all_text-grey-600__UN2jF">Deep Cleaning Services</p></div></div></div><div class="all_col-4__Sc7Yb all_col-lg-3__fRtDD all_bark-carousel-item__k3eDJ " style="transform: translateX(0%);"><div class="cursor-pointer category-link all_d-flex__WrxK8 all_flex-column__5eyyf all_h-100__3DMxF" data-category-id="1548" data-bark-mode="bnb-project-dash"><div class="all_overflow-hidden__jfaju all_rounded-top__Lvd5h"><img class="all_img-fluid__FB1iK all_rounded-top__Lvd5h all_scale-image__1X-4- all_object-fit-cover__ZMOnA" src="https://d1vbfnp4jhzk1f.cloudfront.net/s/modal-thumbnail/1548-1565704021693074731.png!d=72Qsoe" alt="Private Investigators"></div><div class="all_border__2wTAl all_br-bottom__Y6N-k all_flex-grow-1__izlZH"><p class="all_mb-0__hrCwX all_p-3__wnB5p all_text-grey-600__UN2jF">Private Investigators</p></div></div></div><div class="all_col-4__Sc7Yb all_col-lg-3__fRtDD all_bark-carousel-item__k3eDJ " style="transform: translateX(0%);"><div class="cursor-pointer category-link all_d-flex__WrxK8 all_flex-column__5eyyf all_h-100__3DMxF" data-category-id="74" data-bark-mode="bnb-project-dash"><div class="all_overflow-hidden__jfaju all_rounded-top__Lvd5h"><img class="all_img-fluid__FB1iK all_rounded-top__Lvd5h all_scale-image__1X-4- all_object-fit-cover__ZMOnA" src="https://d1vbfnp4jhzk1f.cloudfront.net/s/modal-thumbnail/74-15656973291985616552.png!d=72Qsoe" alt="Personal Trainers"></div><div class="all_border__2wTAl all_br-bottom__Y6N-k all_flex-grow-1__izlZH"><p class="all_mb-0__hrCwX all_p-3__wnB5p all_text-grey-600__UN2jF">Personal Trainers</p></div></div></div><div class="all_col-4__Sc7Yb all_col-lg-3__fRtDD all_bark-carousel-item__k3eDJ " style="transform: translateX(0%);"><div class="cursor-pointer category-link all_d-flex__WrxK8 all_flex-column__5eyyf all_h-100__3DMxF" data-category-id="1544" data-bark-mode="bnb-project-dash"><div class="all_overflow-hidden__jfaju all_rounded-top__Lvd5h"><img class="all_img-fluid__FB1iK all_rounded-top__Lvd5h all_scale-image__1X-4- all_object-fit-cover__ZMOnA" src="https://d1vbfnp4jhzk1f.cloudfront.net/s/modal-thumbnail/1544-1565697177876182362.png!d=72Qsoe" alt="Life Coaching"></div><div class="all_border__2wTAl all_br-bottom__Y6N-k all_flex-grow-1__izlZH"><p class="all_mb-0__hrCwX all_p-3__wnB5p all_text-grey-600__UN2jF">Life Coaching</p></div></div></div><div class="all_col-4__Sc7Yb all_col-lg-3__fRtDD all_bark-carousel-item__k3eDJ " style="transform: translateX(0%);"><div class="cursor-pointer category-link all_d-flex__WrxK8 all_flex-column__5eyyf all_h-100__3DMxF" data-category-id="128" data-bark-mode="bnb-project-dash"><div class="all_overflow-hidden__jfaju all_rounded-top__Lvd5h"><img class="all_img-fluid__FB1iK all_rounded-top__Lvd5h all_scale-image__1X-4- all_object-fit-cover__ZMOnA" src="https://d1vbfnp4jhzk1f.cloudfront.net/s/modal-thumbnail/128-1565697138929242216.png!d=72Qsoe" alt="General Photography"></div><div class="all_border__2wTAl all_br-bottom__Y6N-k all_flex-grow-1__izlZH"><p class="all_mb-0__hrCwX all_p-3__wnB5p all_text-grey-600__UN2jF">General Photography</p></div></div></div><div class="all_col-4__Sc7Yb all_col-lg-3__fRtDD all_bark-carousel-item__k3eDJ " style="transform: translateX(0%);"><div class="cursor-pointer category-link all_d-flex__WrxK8 all_flex-column__5eyyf all_h-100__3DMxF" data-category-id="1539" data-bark-mode="bnb-project-dash"><div class="all_overflow-hidden__jfaju all_rounded-top__Lvd5h"><img class="all_img-fluid__FB1iK all_rounded-top__Lvd5h all_scale-image__1X-4- all_object-fit-cover__ZMOnA" src="https://d1vbfnp4jhzk1f.cloudfront.net/s/modal-thumbnail/1539-1565697268710360742.png!d=72Qsoe" alt="Counselling"></div><div class="all_border__2wTAl all_br-bottom__Y6N-k all_flex-grow-1__izlZH"><p class="all_mb-0__hrCwX all_p-3__wnB5p all_text-grey-600__UN2jF">Counselling</p></div></div></div><div class="all_col-4__Sc7Yb all_col-lg-3__fRtDD all_bark-carousel-item__k3eDJ " style="transform: translateX(0%);"><div class="cursor-pointer category-link all_d-flex__WrxK8 all_flex-column__5eyyf all_h-100__3DMxF" data-category-id="77" data-bark-mode="bnb-project-dash"><div class="all_overflow-hidden__jfaju all_rounded-top__Lvd5h"><img class="all_img-fluid__FB1iK all_rounded-top__Lvd5h all_scale-image__1X-4- all_object-fit-cover__ZMOnA" src="https://d1vbfnp4jhzk1f.cloudfront.net/s/modal-thumbnail/77-1565697490137101283.png!d=72Qsoe" alt="Therapist"></div><div class="all_border__2wTAl all_br-bottom__Y6N-k all_flex-grow-1__izlZH"><p class="all_mb-0__hrCwX all_p-3__wnB5p all_text-grey-600__UN2jF">Therapist</p></div></div></div><div class="all_col-4__Sc7Yb all_col-lg-3__fRtDD all_bark-carousel-item__k3eDJ " style="transform: translateX(0%);"><div class="cursor-pointer category-link all_d-flex__WrxK8 all_flex-column__5eyyf all_h-100__3DMxF" data-category-id="157" data-bark-mode="bnb-project-dash"><div class="all_overflow-hidden__jfaju all_rounded-top__Lvd5h"><img class="all_img-fluid__FB1iK all_rounded-top__Lvd5h all_scale-image__1X-4- all_object-fit-cover__ZMOnA" src="https://d1vbfnp4jhzk1f.cloudfront.net/s/modal-thumbnail/157-14792904201042740740.png!d=72Qsoe" alt="Bus &amp; Coach Hire"></div><div class="all_border__2wTAl all_br-bottom__Y6N-k all_flex-grow-1__izlZH"><p class="all_mb-0__hrCwX all_p-3__wnB5p all_text-grey-600__UN2jF">Bus &amp; Coach Hire</p></div></div></div><div class="all_col-4__Sc7Yb all_col-lg-3__fRtDD all_bark-carousel-item__k3eDJ " style="transform: translateX(0%);"><div class="cursor-pointer category-link all_d-flex__WrxK8 all_flex-column__5eyyf all_h-100__3DMxF" data-category-id="45" data-bark-mode="bnb-project-dash"><div class="all_overflow-hidden__jfaju all_rounded-top__Lvd5h"><img class="all_img-fluid__FB1iK all_rounded-top__Lvd5h all_scale-image__1X-4- all_object-fit-cover__ZMOnA" src="https://d1vbfnp4jhzk1f.cloudfront.net/s/modal_thumbnail_45.jpg!d=72Qsoe" alt="Tutoring"></div><div class="all_border__2wTAl all_br-bottom__Y6N-k all_flex-grow-1__izlZH"><p class="all_mb-0__hrCwX all_p-3__wnB5p all_text-grey-600__UN2jF">Tutoring</p></div></div></div><div class="all_col-4__Sc7Yb all_col-lg-3__fRtDD all_bark-carousel-item__k3eDJ " style="transform: translateX(0%);"><div class="cursor-pointer category-link all_d-flex__WrxK8 all_flex-column__5eyyf all_h-100__3DMxF" data-category-id="1141" data-bark-mode="bnb-project-dash"><div class="all_overflow-hidden__jfaju all_rounded-top__Lvd5h"><img class="all_img-fluid__FB1iK all_rounded-top__Lvd5h all_scale-image__1X-4- all_object-fit-cover__ZMOnA" src="https://d1vbfnp4jhzk1f.cloudfront.net/s/modal_thumbnail_1141.jpg!d=72Qsoe" alt="Commercial &amp; Office Cleaning"></div><div class="all_border__2wTAl all_br-bottom__Y6N-k all_flex-grow-1__izlZH"><p class="all_mb-0__hrCwX all_p-3__wnB5p all_text-grey-600__UN2jF">Commercial &amp; Office Cleaning</p></div></div></div><div class="all_col-4__Sc7Yb all_col-lg-3__fRtDD all_bark-carousel-item__k3eDJ " style="transform: translateX(0%);"><div class="cursor-pointer category-link all_d-flex__WrxK8 all_flex-column__5eyyf all_h-100__3DMxF" data-category-id="1525" data-bark-mode="bnb-project-dash"><div class="all_overflow-hidden__jfaju all_rounded-top__Lvd5h"><img class="all_img-fluid__FB1iK all_rounded-top__Lvd5h all_scale-image__1X-4- all_object-fit-cover__ZMOnA" src="https://d1vbfnp4jhzk1f.cloudfront.net/s/modal_thumbnail_1525.jpg!d=72Qsoe" alt="Lawyers, Solicitors &amp; Notary Publics"></div><div class="all_border__2wTAl all_br-bottom__Y6N-k all_flex-grow-1__izlZH"><p class="all_mb-0__hrCwX all_p-3__wnB5p all_text-grey-600__UN2jF">Lawyers, Solicitors &amp; Notary Publics</p></div></div></div><div class="all_col-4__Sc7Yb all_col-lg-3__fRtDD all_bark-carousel-item__k3eDJ " style="transform: translateX(0%);"><div class="cursor-pointer category-link all_d-flex__WrxK8 all_flex-column__5eyyf all_h-100__3DMxF" data-category-id="1630" data-bark-mode="bnb-project-dash"><div class="all_overflow-hidden__jfaju all_rounded-top__Lvd5h"><img class="all_img-fluid__FB1iK all_rounded-top__Lvd5h all_scale-image__1X-4- all_object-fit-cover__ZMOnA" src="https://d1vbfnp4jhzk1f.cloudfront.net/s/modal-thumbnail/1630-15656973551113245400.png!d=72Qsoe" alt="Relationship and Marriage Counselling"></div><div class="all_border__2wTAl all_br-bottom__Y6N-k all_flex-grow-1__izlZH"><p class="all_mb-0__hrCwX all_p-3__wnB5p all_text-grey-600__UN2jF">Relationship and Marriage Counselling</p></div></div></div><div class="all_col-4__Sc7Yb all_col-lg-3__fRtDD all_bark-carousel-item__k3eDJ " style="transform: translateX(0%);"><div class="cursor-pointer category-link all_d-flex__WrxK8 all_flex-column__5eyyf all_h-100__3DMxF" data-category-id="1706" data-bark-mode="bnb-project-dash"><div class="all_overflow-hidden__jfaju all_rounded-top__Lvd5h"><img class="all_img-fluid__FB1iK all_rounded-top__Lvd5h all_scale-image__1X-4- all_object-fit-cover__ZMOnA" src="https://d1vbfnp4jhzk1f.cloudfront.net/s/modal_thumbnail_1706.jpg!d=72Qsoe" alt="Vintage Car Hire"></div><div class="all_border__2wTAl all_br-bottom__Y6N-k all_flex-grow-1__izlZH"><p class="all_mb-0__hrCwX all_p-3__wnB5p all_text-grey-600__UN2jF">Vintage Car Hire</p></div></div></div><div class="all_col-4__Sc7Yb all_col-lg-3__fRtDD all_bark-carousel-item__k3eDJ " style="transform: translateX(0%);"><div class="cursor-pointer category-link all_d-flex__WrxK8 all_flex-column__5eyyf all_h-100__3DMxF" data-category-id="1556" data-bark-mode="bnb-project-dash"><div class="all_overflow-hidden__jfaju all_rounded-top__Lvd5h"><img class="all_img-fluid__FB1iK all_rounded-top__Lvd5h all_scale-image__1X-4- all_object-fit-cover__ZMOnA" src="https://d1vbfnp4jhzk1f.cloudfront.net/s/modal-thumbnail/1556-15656976901315409402.png!d=72Qsoe" alt="Dog Training"></div><div class="all_border__2wTAl all_br-bottom__Y6N-k all_flex-grow-1__izlZH"><p class="all_mb-0__hrCwX all_p-3__wnB5p all_text-grey-600__UN2jF">Dog Training</p></div></div></div></div></div></div></div></div></div></div>
        <div class="container">
        <div class="seller-banner-wrapper ">
    
        <div class="full-width-wrapper bg-light-grey py-5">
            <div class="bg-background-primary text-primary p-3 rounded text-center">
                <p class="mb-0">
                    
                    Are you a small business? <a class="underlined" href="/sellers/create/">Register now</a> to start selling your services through Bark.
                    
                </p>
            </div>
        </div>
    
</div></div>

    </div>

    <div class="container">
        <div id="react-app-root"></div>
    </div>

    <div aria-hidden="true" aria-labelledby="initiate-new-bark-modal-label" class="modal bark-modal" id="initiate-new-bark-modal" role="dialog" tabindex="-1" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header px-4 flex-column pb-3">
                <h4 class="modal-title w-100">Place a new request</h4>
                <button aria-label="Close" class="js-close-initiate-bark-modal close close-modal-cross" data-dismiss="modal" type="button"></button>
            </div>
            <div class="modal-body px-4">
                <div class="alert alert-danger js-error-text d-none">

                </div>
                <div class="form-group js-init-new-bark-category-container">
                    <label for="initiate-new-bark-category">What service do you need?</label>
                    <input type="text" id="initiate-new-bark-category" placeholder="e.g. Personal Trainers, House Cleaning" autocomplete="off" class="form-control">
                </div>
                <div class="form-group js-init-new-bark-location-container">
                    <label for="initiate-new-bark-location">Where do you need it?</label>
                    <input type="text" id="initiate-new-bark-location" placeholder="Enter your postal code or town" autocomplete="off" class="form-control">
                </div>
            </div>
            <div class="modal-footer px-4 justify-content-center pt-0">
                <span class="btn btn-primary px-5 py-2 js-init-new-bark-begin">Continue</span>
            </div>
        </div>
    </div>
</div>
    <script id="seller-signup-banner" type="text/x-handlebars-template">
    
        <div class="full-width-wrapper bg-light-grey py-5">
            <div class="bg-background-primary text-primary p-3 rounded text-center">
                <p class="mb-0">
                    
                    Are you a small business? <a class="underlined" href="/sellers/create/">Register now</a> to start selling your services through Bark.
                    
                </p>
            </div>
        </div>
    
</script>
    <div aria-hidden="true" aria-labelledby="close-bark-confirm-modal-label" class="modal bark-modal" id="close-bark-confirm-modal" role="dialog" tabindex="-1" data-backdrop="static" data-keyboard="false"></div>
    <script id="close-bark-confirm-modal-template" type="text/x-handlebars-template">
    
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header px-4 flex-column pb-3">
            <button aria-label="Close" class="close close-modal-cross" data-dismiss="modal" type="button"></button>
            <h4 class="modal-title w-100">
                <span class="bark-svg-icon bsi-primary-green bsi-secondary-white d-inline-flex align-middle bsi-lg">
<svg width="30" height="30" viewBox="0 0 30 30" class="secondary-color" fill="none" xmlns="http://www.w3.org/2000/svg">
    <circle class="primary-color" cx="15" cy="15" r="14" stroke="none"/>
    <path class="secondary-color" d="M13.75 20.525L8.75 15.525L10.5125 13.7625L13.75 16.9875L19.4875 11.25L21.25 13.025L13.75 20.525Z" fill="none"/>
    <path class="secondary-color" d="M13.75 20.525L8.75 15.525L10.5125 13.7625L13.75 16.9875L19.4875 11.25L21.25 13.025L13.75 20.525Z" fill="none"/>
</svg>
</span>
                <span class="align-middle">{{title"</span>
            </h4>
        </div>
        <div class="modal-body">
           "#if nextBarkSuggestions"
                <h5 class="text-muted text-center p-3">
                    Do you need any of these services?
                </h5>
                <div class="container-fluid p-0">
                    <div class="row no-gutters">
                       "{ nextBarkSuggestions "}
                    </div>
                </div>
           "/if"
        </div>
        <div class="modal-footer px-4 justify-content-right pt-0" id="close-bark-confirm-footer">
            <button aria-label="Close" class="btn btn-primary" data-dismiss="modal" type="button">
           "#if nextBarkSuggestions"
                Skip
           "else"
                Close
           "/if"
            </button>
        </div>
    </div>
</div>

</script>

    <script id="close-bark-confirm-card-template" type="text/x-handlebars-template">

<div class="col-6 col-sm-4 px-2 d-flex align-items-stretch justify-content-center">
    <div class="card cursor-pointer card-category-link mb-3" data-category-id="{{category_id"">
        <img class="card-img-top" src="{{modal_thumbnail_1x"" />
        <div class="card-body p-3 d-flex align-items-center">
            <p class="card-title mb-0 text-grey-400">{{category_name"</p>
        </div>
    </div>
</div>

</script>

    

<div class="modal fade" id="inlineBarkModal" tabindex="-1" role="dialog" aria-labelledby="inlineBarkModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false" data-translation-postcode_or_town="postal code or town">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="inline-bark-percentage-track-new">
                <div class="inline-bark-percentage-thumb"></div>
            </div>
            <div class="modal-category-experiment">
                <div class="modal-category-experiment-photo"></div>
            </div>
            <div class="modal-body">
                <div class="close-modal-cross"></div>
                <div class="inline-bark-header">
                    <div class="inline-bark-modal-hide-h1 text-center h1 px-1 px-md-3 mb-0"></div>
                    <div class="inline-bark-modal-errors new-error hide"></div>
                    <hr class="inline-bark-modal-hide-hr">
                </div>
                <div id="inlineBarkModalContent">
                    <div class="inline-bark-main-content"></div>
                    <div class="inline-bark-buttons-container">
                        <button class="inline-bark-btn-continue">Continue</button>
                        <button class="inline-bark-btn-submit hide">Get Quotes</button>
                        <button class="inline-bark-btn-back hide text-light-grey">Back</button>
                    </div>
                    <div class="inline-bark-terms-container mt-4 d-none">
                        <p class="text-xs text-light-grey text-center m-0">
                            By continuing, you confirm your agreement to our <a href="/terms#customers" target="_blank" class="terms-link text-light-grey text-underline">Terms &amp; Conditions</a>
                        </p>
                    </div>
                </div>
                <div id="inlineBarkModalSpinner" class="center" style="display: none">

                    <div class="spinner-border text-primary js-sp-page-shown" role="status">
                        <span class="sr-only">&nbsp;</span>
                    </div>
                    <p>Please wait</p>
                </div>
            </div>

        </div>
    </div>

    <div id="js-tenderbrowse-bottomsection-container"></div>
    <div class="modal-dialog csat-modal d-none" data-step="" id="csatModal" role="document">
    <div class="modal-content">
        <div class="modal-body pb-1 rounded text-center bg-dark-blue">
            <div class="close-csat-cross"></div>
            <div class="text-white">How would you rate your experience?</div>
            <div class="my-3 justify-content-center emojis">
                <a href="#" data-val="-2" class="mx-3 csat-record"><span class="emoji"><!--?xml version="1.0" encoding="utf-8"?-->
<!-- Generator: Adobe Illustrator 25.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version="1.1" id="emoji_-2" width="36" height="36" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 36 36" style="enable-background:new 0 0 36 36;" xml:space="preserve">
<style type="text/css">
	.st-mad{fill:#EF6277 !important;}
	.st1{fill:none;stroke:#111637 !important;}
	.st2{fill-rule:evenodd;clip-rule:evenodd;fill:#111637;}
</style>
<g>
	<circle id="Oval_32_" class="st-mad" cx="18" cy="18" r="18"></circle>
	<path id="Combined-Shape_20_" class="st1" d="M10.64,29.18L10.64,29.18c0.33-1.63,1.19-3.07,2.4-4.13
		c1.32-1.17,3.06-1.88,4.97-1.88s3.64,0.71,4.97,1.88c1.2,1.06,2.06,2.5,2.4,4.13"></path>
	<path class="st2" d="M22.58,14.38c0.12,0.25,0.27,0.48,0.47,0.69c0.96,0.96,2.51,0.96,3.47,0c0.96-0.96,0.96-2.51,0-3.47
		c-0.2-0.2-0.44-0.35-0.69-0.47L22.58,14.38z"></path>
	<path class="st2" d="M10.17,11.13c-0.25,0.12-0.48,0.27-0.69,0.47c-0.96,0.96-0.96,2.51,0,3.47s2.51,0.96,3.47,0
		c0.2-0.2,0.35-0.44,0.47-0.69L10.17,11.13z"></path>
</g>
</svg>
</span></a>
                <a href="#" data-val="-1" class="mx-3 csat-record"><span class="emoji"><!--?xml version="1.0" encoding="utf-8"?-->
<!-- Generator: Adobe Illustrator 25.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version="1.1" id="emoji_-1" width="36" height="36" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 36 36" style="enable-background:new 0 0 36 36;" xml:space="preserve">
<style type="text/css">
	.st-sad{fill:#F7BF53;}
	.st1{fill-rule:evenodd;clip-rule:evenodd;fill:#111637;}
	.st2{fill:none;stroke:#111637;}
</style>
<g id="quality-meter-emoji-good_11_" transform="translate(327.000000, 483.000000)">
	<circle id="Oval_36_" class="st-sad" cx="-309" cy="-465" r="18"></circle>
	<circle id="Oval_35_" class="st1" cx="-316.36" cy="-469.09" r="2.45"></circle>
	<circle id="Oval-Copy_12_" class="st1" cx="-301.64" cy="-469.09" r="2.45"></circle>
	<path id="Line_12_" class="st2" d="M-301.64-456.82c-1.64-1.63-4.09-2.45-7.36-2.45s-5.73,0.82-7.36,2.45"></path>
</g>
</svg>
</span></a>
                <a href="#" data-val="1" class="mx-3 csat-record"><span class="emoji"><!--?xml version="1.0" encoding="utf-8"?-->
<!-- Generator: Adobe Illustrator 25.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version="1.1" id="emoji__x2B_1" width="36" height="36" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 36 36" style="enable-background:new 0 0 36 36;" xml:space="preserve">
<style type="text/css">
	.st-smile{fill:#94C15B;}
	.st1{fill-rule:evenodd;clip-rule:evenodd;fill:#111637;}
	.st2{fill:none;stroke:#111637;stroke-miterlimit:10;}
</style>
<g id="quality-meter-emoji-good_10_" transform="translate(327.000000, 483.000000)">
	<circle id="Oval_34_" class="st-smile" cx="-309" cy="-465" r="18"></circle>
	<circle id="Oval_33_" class="st1" cx="-316.36" cy="-469.09" r="2.45"></circle>
	<circle id="Oval-Copy_11_" class="st1" cx="-301.64" cy="-469.09" r="2.45"></circle>
	<path id="Line_11_" class="st2" d="M-316.36-459.27c1.64,1.63,4.09,2.45,7.36,2.45s5.73-0.82,7.36-2.45"></path>
</g>
</svg>
</span></a>
                <a href="#" data-val="2" class="mx-3 csat-record"><span class="emoji"><!--?xml version="1.0" encoding="utf-8"?-->
<!-- Generator: Adobe Illustrator 25.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version="1.1" id="emoji__x2B_2" width="36" height="36" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 36 36" style="enable-background:new 0 0 36 36;" xml:space="preserve">
<style type="text/css">
	.st0{fill:#47BF9C !important;}
	.st1{fill:#111637 !important;}
	.st2{fill-rule:evenodd;clip-rule:evenodd;fill:#111637;}
</style>
<g id="quality-meter-emoji-best_5_" transform="translate(327.000000, 483.000000)">
	<circle id="Oval_37_" class="st0" cx="-309" cy="-465" r="18"></circle>
	<path id="Combined-Shape_23_" class="st1" d="M-296.97-462.55c-0.54,2.67-1.95,5.02-3.91,6.75c-2.16,1.91-5,3.06-8.11,3.06
		s-5.95-1.16-8.11-3.06c-1.97-1.73-3.37-4.09-3.91-6.75l0,0H-296.97z"></path>
	<path id="Combined-Shape_22_" class="st2" d="M-316.36-471.55c1.36,0,2.45,1.1,2.45,2.45c0,0.63-0.24,1.2-0.63,1.64
		c-0.45-0.5-1.1-0.82-1.83-0.82c-0.73,0-1.38,0.32-1.83,0.82c-0.39-0.43-0.63-1.01-0.63-1.64
		C-318.82-470.45-317.72-471.55-316.36-471.55z"></path>
	<path id="Combined-Shape_21_" class="st2" d="M-301.64-471.55c1.36,0,2.45,1.1,2.45,2.45c0,0.63-0.24,1.2-0.63,1.64
		c-0.45-0.5-1.1-0.82-1.83-0.82c-0.73,0-1.38,0.32-1.83,0.82c-0.39-0.43-0.63-1.01-0.63-1.64
		C-304.09-470.45-302.99-471.55-301.64-471.55z"></path>
</g>
</svg>
</span></a>
            </div>
        </div>
    </div>
</div>

</div>

<div class="modal fade" id="inlineBarkModalClose" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body p-4">
                <h4 class="text-center mb-3">Are you sure that you want to leave?</h4>
                <div class="default-modal-content text-center py-2">
                    <p id="inlineBarkModalCloseMessage" class="inline-bark-close-message"></p>
                    <div class="pt-4 inline-bark-buttons-container d-flex flex-row justify-content-between align-items-center close-modal">
                        <a class="inline-bark-close-btn-quit text-light-grey cursor-pointer">Quit</a>
                        <a class="inline-bark-close-btn-continue dash-button btn btn-primary">Continue</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script id="tenderbrowse-variant-1" type="text/x-handlebars-template">
    
        <!--Start tenderbrowse variant-->
        <div class="new-project-container" id="inline-bark-question">
            <div class="center">
                <div class="d-flex align-items-center justify-content-center mx-auto mt-4 mb-4" aria-hidden="true">
                    <img src="https://d18jakcjgoan9.cloudfront.net/img/tenderbrowse/illustration-trophy.svg" alt="">
                </div>
                <h4 class="mb-2 px-3 px-sm-4 lh-md">Let us find your perfect match</h4>
                <p class="mb-3">
                
                    We'll find the top"category_provider_noun_plural" that match your request, and <strong>up to 5 may get in touch.</strong>
                
                </p>
                <div class="row">
                    <div class="col-12 mt-2 mb-1">
                        <button class="btn btn-success js-tenderbrowse-tender tenderbrowse-button">{{findMeAProString"</button>
                    </div>
                </div>
                <p class="mb-0 mt-0"><small>{{_t 'buyer_tenderbrowse:or'"</small></p>
                <p><a href="#" class="js-tenderbrowse-browse tenderbrowse-button">{{_t 'buyer_tenderbrowse:filter-through-yourself-link'"</a></p>
            </div>
        </div>
        <!--End tenderbrowse variant-->
    
</script>
<script id="tenderbrowse-variant-3" type="text/x-handlebars-template">
    
        <div class="new-project-container" id="inline-bark-question">
            <div class="center">
                <div class="d-flex align-items-center justify-content-center mx-auto mt-2 mb-4" aria-hidden="true">
                    <img src="https://d18jakcjgoan9.cloudfront.net/img/tenderbrowse/illustration-trophy.svg" alt="">
                </div>
                
                <h4 class="mb-2 px-3 px-sm-4 lh-md">
                    Find your <span class="text-success">best match</span> by comparing up to 5 quotes
                </h4>
                <p class="mb-3">
                    We'll find the top"category_provider_noun_plural" that match your request, and <strong>up to 5 may get in touch.</strong>
                </p>
                
                <div class="row">
                    <div class="col-12 mb-2">
                        <button class="btn btn-success btn-block py-3 js-tenderbrowse-tender">{{findMeAProString"</button>
                    </div>
                    <div class="col-12 mb-2">
                        <button class="btn btn-outline-success btn-block py-3 js-tenderbrowse-browse">
                           "_t 'buyer_tenderbrowse:ill-search-myself-button'"
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!--End tenderbrowse variant-->
    
</script>
<script id="tenderbrowse-variant-2" type="text/x-handlebars-template">
    
        <div class="new-project-container" id="inline-bark-question">
            <div class="center">
                <div class="d-flex align-items-center justify-content-center mx-auto mt-2 mb-4" aria-hidden="true">
                    <img src="https://d18jakcjgoan9.cloudfront.net/img/tenderbrowse/professional-cards.svg" alt="">
                </div>
                <h4 class="mb-2 px-3 px-sm-4 lh-md">
               "_t 'buyer_tenderbrowse:want-help-finding-most-interested'"
                </h4>
                <p class="mb-3">
                
                    We'll find the top"category_provider_noun_plural" that want to help, and <strong>up to 5 may get in touch.</strong>
                
                </p>
                <div class="row">
                    <div class="col-12 mb-2">
                        <button class="btn btn-primary btn-block js-tenderbrowse-tender tenderbrowse-button">{{findMeAProString"</button>
                    </div>
                </div>
            </div>
        </div>
        <!--End tenderbrowse variant-->
    
</script>
<script id="tenderbrowse-not-available" type="text/x-handlebars-template">
    
        <!--Start tenderbrowse not available-->
        <div class="new-project-container" id="inline-bark-question">
            <div class="center">
                <h4 class="mb-3 px-3 mt-md-2 px-sm-4 lh-md">
               "_t 'buyer_tenderbrowse:unfortunately-not-available-header'"
                </h4>
                <p class="mb-2">
                
                You can still <strong>view a list of matching professionals</strong> — up to 5 may get in touch, and you can <strong>contact the individuals you're most interested in.</strong>
                
                </p>
                <div class="row">
                    <div class="col-12 mb-2">
                        <button class="btn btn-primary btn-block mt-2 mb-1 js-tenderbrowse-tender-from-abort tenderbrowse-button">
                       "_t 'buyer_tenderbrowse:share-my-request-button'"
                        </button>
                    </div>
                    <div class="col-12 mb-2">
                        <a href="#" class="js-tenderbrowse-cancel-from-abort">
                           "_t 'buyer_tenderbrowse:no-thanks-link'"
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--End tenderbrowse not available-->
    
</script>
<script id="tenderbrowse-are-you-sure" type="text/x-handlebars-template">
    
        <!--Start tenderbrowse are you sure-->
        <div class="new-project-container" id="inline-bark-question">
            <div class="center">
                <h4 class="mb-2 px-3 mt-md-2 px-sm-4 lh-md">Are you sure?</h4>
                <p class="mb-3">{{_t 'buyer_tenderbrowse:sorry-we-cant-help'"</strong></p>
                <div class="row">
                    <div class="col-12 mb-2">
                        <button class="btn btn-primary btn-block mt-2 mb-1 js-tenderbrowse-cancel-from-are-you-sure">
                       "_t 'buyer_tenderbrowse:yes-cancel-button'"</button>
                    </div>
                    <div class="col-12 mb-2">
                        <a href="#" class="js-tenderbrowse-back-from-are-you-sure">{{_t 'buyer_tenderbrowse:no-go-back-link'"</a>
                    </div>
                </div>
            </div>
        </div>
        <!--End tenderbrowse are you sure-->
    
</script>
<script id="tenderbrowse-variant-2-bottomsection" type="text/x-handlebars-template">
    
        <div class="modal-dialog tenderbrowse-bottomsection font-weight-medium" data-step="" id="tenderbrowse-bottomsection" role="document">
            <div class="modal-content">
                <div class="modal-body p-0 rounded text-center">
                    <div class="my-3 justify-content-center">
                       "_t 'buyer_tenderbrowse:or-you-can-investigate'"
                        <p><a href="#" class="js-tenderbrowse-browse">{{_t 'buyer_tenderbrowse:see-your-matches-link'"</a></p>
                    </div>
                </div>
            </div>
        </div>
    
</script>

<div class="d-none">
        <form can-popup="" id="project-create-form" autocomplete="off" method="post" action="/find/">
        <input type="hidden" name="source" value="site_home_create_bark_1">
        <input type="text" autocomplete="off" name="category_name" id="category_name" value="" class="form-control category-input-v2" placeholder="What service are you looking for?">
                    <input type="hidden" name="category_id" id="category_id" value="">
                <input type="hidden" name="bark_mode" id="bark_mode" value="">
        <input type="hidden" name="category_name_hidden" id="category_name_hidden" value="">
        <input type="hidden" name="postcode_id" id="postcode_id" value="-1">
        <input type="hidden" name="postcode_type" id="postcode_type" value="-1">
    </form>
</div>

<div id="new-request-flow-widget" class="new-request-flow-widget"></div>
    


<script src="https://d3a1eo0ozlzntn.cloudfront.net/assets/js/libraries/vanilla-lazyload/10.3.1/lazyload.min.cf0c03a054.v2.js"></script>
<script src="https://d3a1eo0ozlzntn.cloudfront.net/assets/js/libraries/socket.io/1.7.4/socket.io.min.217c94dd33.v2.js"></script>

<script>
    (function (window){

        "use strict";

        /**
         * Bark global
         * @type Window.Bark
         */
        var Bark = window.Bark = window.Bark || {};

        /**
         * window.Bark.ENV global
         * @type window.Bark.ENV
         */
        var env = Bark.ENV = Bark.ENV || {};

        /**
         * window.Bark.LOCALE global
         * @type window.Bark.LOCALE
         */
        var locale = Bark.LOCALE = Bark.LOCALE || {};

        /**
         * window.Bark.USER global
         * @type window.Bark.USER
         */
        var user = Bark.USER = Bark.USER || {};

        try {

                        env.site_page_type = "Buyer";
            env.api_hostname = 'https://api.bark.com';
            env.web_hostname = 'www.bark.com';
            env.email_template_service_hostname = 'https://crm.bark.com';
            env.api_port = '443';
            env.one_signal_appid = '3a715b0a-c1dc-4c7e-a9f2-b1435ce1feac';
            env.safari_web_id = "web.onesignal.auto.379e9ba9-232a-4433-a939-20e3e6310530";
            env.static_images_url = "https://d1w7gvu0kpf6fl.cloudfront.net/img/";
            env.qa_builder_api = 'https://api.bark.com';
            env.qa_builder_api_tenant = '';


                        locale.ccid = 207;
            locale.lang = 'en';
            locale.iso2c = 'za';
            locale.currency_symbol = 'R';
            env.ccid = 207;
            env.lang = 'en';
            env.language = 'en-ZA';
            env.locale = 'za';
            env.currency_code = 'ZAR';
            env.currency_symbol = 'R';

                                        env.campaign = 'seller\u002Dalert_deeplink_test_240122_0' || null;
                env.ptcode = '' || null;

                                    env.bes_token = '2f68d155d992964a99c785ddec0f9b84';
                    env.bes_token_chlmn = 'f624f374dde5db4e182b6e70b0891c5f2c17a7ae7966b473588b5bbf7e2d2517-1730560923';
                            
                            env.JWT = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJ3d3cuYmFyay5jb20iLCJpYXQiOjE3MzA1NjA5MjEsIm5iZiI6MTczMDU2MDkyMSwiZXhwIjoxNzMwNjQ3MzIzLCJzdWIiOjMyNzY3MTMyLCJiaWQiOjI5OTc1NzIxLCJzcGZpZCI6ZmFsc2UsImFkaWQiOm51bGwsImFsIjoicCIsImJybyI6IndlYiJ9.25UbH6Grpy7TwlK90-Oe4yt-Dv4DePMXX6xx0VieiIY';
            
            user.showChangePassword = false;
            user.generatedPassword = false;
            user.magicLinkLogin = false;

                            env.oexp = null;
            
            env.eloc = {};
                                    
                            user.userId = 32767132;
                user.email = 'johndubz05@gmail.com';
                user.createdAt = 1730148321;
                user.services = '';
                user.servicesCSVList = '';
                if (user?.servicesCSVList) {
                    user.servicesList = user.servicesCSVList.split(',');
                }

                user.isAdmin = false;

                                    user.secureUserIdForChameleon = '806ad98308f9c76c7e801e9152a72f4762a4b7d0469e6dff22f1f34485c27f8d-1730560923';
                                                        
                
                user.alternativePayments = {
                    active: false,
                    showing: false,
                    variant: '0',
                    paypalEnabled: false,
                };
                                    
        } catch(ex) {
            console.error(ex);
        }

    }(this));
</script>

<script>
    try{
        var myLazyLoad = new LazyLoad();
    } catch (ignore) {}
</script>
<script src="https://d3a1eo0ozlzntn.cloudfront.net/assets/js/consts.48d3e08023.v2.js" crossorigin=""></script>
<script>
    window.Bark = window.Bark || {};
    window.Bark.consts = window.Bark.consts || {};
    window.Bark.consts.S3_BUCKET_LOCATIONS = JSON.parse('[]');
            window.Bark.usrActiveRole = "buyer";
    </script>
<!-- Google Analytics -->



<script type="application/javascript">
  window.ga = window.ga || function () {};
</script><!-- Heap Analytics -->
    <script data-ot-ignore="" type="text/javascript" class="optanon-category-C0001">
        window.heap=window.heap||[],heap.load=function(e,t){window.heap.appid=e,window.heap.config=t=t||{};var r=t.forceSSL||"https:"===document.location.protocol,a=document.createElement("script");a.type="text/javascript",a.async=!0,a.src=(r?"https:":"http:")+"//cdn.heapanalytics.com/js/heap-"+e+".js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(a,n);for(var o=function(e){return function(){heap.push([e].concat(Array.prototype.slice.call(arguments,0)))",p=["addEventProperties","addUserProperties","clearEventProperties","identify","resetIdentity","removeEventProperty","setEventProperties","track","unsetEventProperty"],c=0;c<p.length;c++)heap[p[c]]=o(p[c])};
        heap.load("2235934490");

                    heap.identify(32767132);
        

                    try {
                heap.addUserProperties(JSON.parse('{"is_buyer":"true","buyer_user_id":29975721}'));
            } catch (err) {try { if (typeof console !== 'undefined') console.log('heapUserProperties', err)} catch (err) {"
        
        window.heapPageEventProperties = {};
        try {
            window.heapPageEventProperties = JSON.parse('{}');
        } catch (err) {try {if (typeof console !== 'undefined') console.log('window.heapPageEventProperties', err)} catch (err) {"

        try {
            var urlParamsToInclude = {
                'campaign': 'Campaign',
                'clktrk': 'Email Click Log Id'
            };

            for (var paramName in urlParamsToInclude) {
                if (urlParamsToInclude.hasOwnProperty(paramName)) {
                    var paramValue = getUrlParam(paramName);
                    if (paramValue) {
                        var paramTitle = urlParamsToInclude[paramName];
                        window.heapPageEventProperties[paramTitle] = paramValue;
                    }
                }
            }
        } catch (err) {try {if (typeof console !== 'undefined') console.log('urlParamsToInclude', err)} catch (err) {"

        function getUrlParam(name) {
            try {
                var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
                if (results != null) {
                    return decodeURI(results[1]) || 0;
                }
            } catch (err) {try {console.log(err)} catch (err) {"
            return null;
        }

        (function () {
            var interval = setInterval(sendTrack, 200);

            function sendTrack() {

                var params = {};

                try {
                    for (var key in window.heapPageEventProperties) {
                        if(window.heapPageEventProperties.hasOwnProperty(key)){
                            params[key] = window.heapPageEventProperties[key];
                        }
                    }

                } catch (err) {try {console.log(err)} catch (err) {"

                if (window.performance && (typeof window.performance.timing !== 'undefined')) {
                    var perfData = window.performance.timing;
                    if (perfData.loadEventEnd !== 0 && perfData.domComplete !== 0) {

                        params['Screen Dimension'] = window.screen.width + ' x ' + window.screen.height;

                        if (perfData.redirectStart > 0 && perfData.redirectEnd > 0) {
                            params['Redirect Time ms'] = perfData.redirectEnd - perfData.redirectStart;
                        }

                        if (perfData.requestStart > 0 && perfData.responseStart > 0) {
                            params['Time to first byte ms'] = perfData.responseStart - perfData.requestStart;
                        }

                        if (perfData.navigationStart > 0 && perfData.responseEnd > 0) {
                            params['Response Time ms'] = perfData.responseEnd - perfData.navigationStart;
                        }

                        if (perfData.domLoading > 0 && perfData.domComplete > 0) {
                            params['Render Time ms'] = perfData.domComplete - perfData.domLoading;
                        }

                        if (perfData.navigationStart > 0 && perfData.domComplete > 0) {
                            params['End To End Load ms'] = perfData.domComplete - perfData.navigationStart;
                        }

                        try {
                            // Use getEntriesByType() to just get the "resource" events
                            var p = window.performance.getEntriesByType("resource");
                            var totalTransferSize = 0;
                            var transferSizeBreakdown = {};
                            for (var i = 0; i < p.length; i++) {
                                if ("transferSize" in p[i]) {
                                    totalTransferSize += p[i].transferSize;
                                    if (!(p[i].initiatorType in transferSizeBreakdown)) {
                                        transferSizeBreakdown[p[i].initiatorType] = 0;
                                    }
                                    transferSizeBreakdown[p[i].initiatorType] += p[i].transferSize;
                                }
                            }

                            if (totalTransferSize) {
                                params['Total Transfer Size'] = totalTransferSize;
                                for (var property in transferSizeBreakdown) {
                                    if (transferSizeBreakdown.hasOwnProperty(property)) {
                                        params['Total Transfer Size ' + property] = transferSizeBreakdown[property]
                                    }
                                }
                            }
                        } catch (err) {try {console.log(err)} catch (err) {"

                        heap.track('Page Load', params);
                        clearInterval(interval);
                        interval = null;
                    } else {
                        return;
                    }
                } else {
                    heap.track('Page Load', params);
                    clearInterval(interval);
                    interval = null;
                }
            }
        })();

        window.onBarkCoreInit(function() {
            var avoidDoubleLog = false;
            window.jQuery(document).on('opened.fndtn.reveal', '[data-reveal]', function (event) {
                if (avoidDoubleLog) {
                    avoidDoubleLog = false;
                    return;
                }
                avoidDoubleLog = true;
                heap && heap.track('Modal Open', {
                    'Modal Id': window.jQuery(event.target).attr('id')
                });
            });

            window.jQuery(document).on('closed.fndtn.reveal', '[data-reveal]', function (event) {
                if (avoidDoubleLog) {
                    avoidDoubleLog = false;
                    return;
                }
                avoidDoubleLog = true;
                heap && heap.track('Modal Closed', {
                    'Modal Id': window.jQuery(event.target).attr('id')
                });
            });

            window.jQuery(document).on('shown.bs.modal', '.modal.show', function(e){
                var modalTitle = window.jQuery(e.target).find('.modal-title').text();
                var modalId = window.jQuery(e.target).attr('id');
                heap && heap.track('Modal Open', {
                    'Modal Id': window.jQuery(e.target).attr('id'),
                    'Modal Title': modalTitle ? modalTitle : ''
                });
            });

            window.jQuery(document).on('hidden.bs.modal', '', function(e){
                var modalTitle = window.jQuery(e.target).find('.modal-title').text();
                var modalId = window.jQuery(e.target).attr('id');
                heap && heap.track('Modal Closed', {
                    'Modal Id': window.jQuery(e.target).attr('id'),
                    'Modal Title': modalTitle ? modalTitle : ''
                });
            });

                            window.jQuery.get('/api/ahed/',function(response) {
                    var responseEventProperties = response.eventProperties;
                    var key;
                    var result = {};
                    for (key in window.heapPageEventProperties) {
                        if(window.heapPageEventProperties.hasOwnProperty(key)){
                            result[key] = window.heapPageEventProperties[key];
                        }
                    }
                    if (response && response.success) {
                        for (key in responseEventProperties) {
                            if(responseEventProperties.hasOwnProperty(key)){
                                result[key] = responseEventProperties[key];
                            }
                        }
                    }

                    heap && heap.clearEventProperties();
                    heap && heap.addEventProperties(result);
                }, 'json');
                    });
    </script>



	<script src="https://d3a1eo0ozlzntn.cloudfront.net/web-app-assets/nomodule-bbf39984.js" crossorigin=""></script>
    <link rel="stylesheet" href="https://frontend-production.bark.com/129-0se7csjog8dvde6g/nrf-script/main.a634a7f188799b03.css">
    <link rel="stylesheet" href="https://frontend-production.bark.com/129-0se7csjog8dvde6g/nrf-script/363.24d653c081db1000.css">
    <link rel="stylesheet" href="https://frontend-production.bark.com/129-0se7csjog8dvde6g/nrf-script/702.f9315afa538250b2.css">
    <script data-app="nrf" type="module" src="https://frontend-production.bark.com/129-0se7csjog8dvde6g/nrf-script/main.17d6cffd2389bea9.js"></script>
    <script data-app="nrf" type="module" src="https://frontend-production.bark.com/129-0se7csjog8dvde6g/nrf-script/polyfills.c36f3751acdbaa08.js"></script>
    <script data-app="nrf" type="module" src="https://frontend-production.bark.com/129-0se7csjog8dvde6g/nrf-script/runtime.7af9d90f2c7c8c64.js"></script>




<div id="additional-details-modal-with-progress" aria-hidden="true" aria-labelledby="additional-details-modal-with-progress-label" class="modal bark-modal additional-details-modal-with-progress redesigned" role="dialog" tabindex="-1" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header flex-column py-3">
            </div>
            <div class="modal-body pt-0">
                <div class="mb-2 mb-md-4 mt-0 mx-0 mx-md-3 headline text-center">
                    <div class="headline-container d-flex justify-content-center align-items-center">
                        <div class="d-flex success-circle success-circle-sm align-items-center justify-content-center rounded-circle mr-2" aria-hidden="true">
                            <img class="img-fluid" alt="success checkmark" width="11" height="9" title="success checkmark" src="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/icons/success-tick.png!d=Wmkcw" srcset="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/icons/success-tick.png!d=Wmkcw 1x, https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/icons/success-tick.png!d=rNDTw 2x">
                        </div>
                        <p class="m-0 m-sm-0 text-green font-weight-bolder js-header-success-text">
                            We've posted your request
                        </p>
                    </div>
                </div>
                <div class="additional-details-section" data-project-hash="">
                    <div class="additional-details-content">
                        <div class="px-2 px-md-4">
                            <div class="text-center">
                                <h3 class="js-header-text header-text">
                                    Get faster, <br> more accurate quotes
                                </h3>
                                <div class="text-light-grey px-3 px-md-0 js-subheading-text subheading-text mb-3">
                                    Add more details to get better responses from professionals
                                </div>
                            </div>
                            <div class="js-additional-details-before-submitted-container">
                                <div class="dashboard-additional-details-textarea">
                                    <textarea class="form-control p-2 project-detail-textarea js-additional-details-textarea" id="project-detail-text" name="project-detail-text" rows="5" tab-index="12" placeholder="What would be helpful for the professionals to know?"></textarea>
                                    <span class="new-error text-danger d-none font-size-14" id="project-detail-error">
                                        Please enter additional details before continuing.
                                    </span>
                                </div>

                                <div id="accordion-additional-details" class="js-additional-details-file-section-container">
                                    <div class="additional-details-card">
                                        <div class="d-flex flex-row justify-content-between align-items-center additional-details-accordion py-3 pt-4" id="AddExp1" data-toggle="collapse" data-target="#collapseAddExp1" aria-expanded="false" aria-controls="collapseAddExp1">
                                            <span class="text-light-grey">
                                                <span class="bark-svg-icon bsi-primary-dark-blue bsi-sm d-inline-block attach-icon  align-middle"><!--?xml version="1.0" encoding="UTF-8"?-->
<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <g id="Icon/attach" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="attach">
            <polygon id="Path" points="0 0 24 0 24 24 0 24"></polygon>
            <path d="M16.5,7 L16.5,16.5 C16.5,18.71 14.71,20.5 12.5,20.5 C10.29,20.5 8.5,18.71 8.5,16.5 L8.5,6 C8.5,4.62 9.62,3.5 11,3.5 C12.38,3.5 13.5,4.62 13.5,6 L13.5,14.5 C13.5,15.05 13.05,15.5 12.5,15.5 C11.95,15.5 11.5,15.05 11.5,14.5 L11.5,7 L10,7 L10,14.5 C10,15.88 11.12,17 12.5,17 C13.88,17 15,15.88 15,14.5 L15,6 C15,3.79 13.21,2 11,2 C8.79,2 7,3.79 7,6 L7,16.5 C7,19.54 9.46,22 12.5,22 C15.54,22 18,19.54 18,16.5 L18,7 L16.5,7 Z" id="Path" class="primary-color"></path>
        </g>
    </g>
</svg>
</span>
                                                <span class="accordion-title align-middle font-size-14">
                                                    Attach files and photos
                                                </span>
                                            </span>
                                            <span class="chevron"><span class="bark-svg-icon bsi-primary-grey-600 bsi-sm"><!--?xml version="1.0" encoding="UTF-8"?-->
<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <g id="Icon/chevron_down" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="chevron_down">
            <rect id="base" fill-rule="nonzero" x="0" y="0" width="24" height="24"></rect>
            <polygon class="primary-color" id="Path" fill="none" points="17 7.93933983 18.4142136 9.35355339 11.7071068 16.0606602 5 9.35355339 6.41421356 7.93933983 11.7071068 13.232233"></polygon>
        </g>
    </g>
</svg>
</span></span>
                                        </div>
                                        <div id="collapseAddExp1" class="collapse show" aria-labelledby="AddExp1" data-parent="#accordion-additional-details">
                                            <div class="attach-photos pb-3">
                                                <div class="dropzoneContainer clearfix">
                                                    <div id="exp-dropzone-container" class="dropzone-file-container float-left">
                                                        <div class="exp-clickable-btn needsclick dz-clickable">
                                                            <span class="plus">+</span>
                                                        </div>
                                                    </div>
                                                    <div id="exp-dropzone-previews" class="p-0 m-0 d-block preview-container no-min-height"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="js-quality-score-section quality-score-section" data-copy-default="Add more detail to improve your request" data-copy-good="This will improve your response" data-copy-best="You'll be getting more accurate quotes fast" data-colour-default="orange" data-colour-good="warning" data-colour-best="success" data-bar-min-width="10">

                                    <hr class="border-dark-blue mt-0 mb-2 mb-md-3">

                                    <div class="progress-section w-100 mb-3">
                                        <p class="js-quality-score-title mb-0">Quality score</p>
                                        <div class="progress bg-grey-100 rounded-0 mt-2 mt-md-3 custom">
                                            <div class="progress-bar-wrapper bg-white d-flex">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-between mb-3">
                                        <p class="mb-0 text-xs text-light-grey detail-text">Add more detail to improve your request</p>
                                        <div class="emojis pl-1">
                                            <span class="bark-svg-icon bsi-primary-dark-blue bsi-sm d-none emoji best"><!--?xml version="1.0" encoding="UTF-8"?-->
<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <g id="Page-7" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="103-Additional-Details-3.0-03" transform="translate(-327.000000, -483.000000)">
            <g id="quality-meter-emoji-best" transform="translate(327.000000, 483.000000)">
                <circle id="Oval" stroke="#47BF9C" stroke-width="2" cx="12" cy="12" r="11"></circle>
                <path d="M19.3500612,13.500014 C19.0192579,15.1300634 18.1595691,16.568016 16.9582447,17.6273689 C15.6364728,18.7929349 13.9007976,19.5 12,19.5 C10.0992024,19.5 8.36352722,18.7929349 7.0417553,17.6273689 C5.84043088,16.568016 4.98074213,15.1300634 4.64993884,13.500014 L4.64993884,13.500014 Z" id="Combined-Shape" stroke="#47BF9C"></path>
                <path d="M7.5,8 C8.32842712,8 9,8.67157288 9,9.5 C9,9.88469382 8.85518454,10.2355642 8.61709458,10.5010701 C8.34330667,10.1930836 7.94420187,10 7.5,10 C7.05579813,10 6.65669333,10.1930836 6.38203584,10.4999005 C6.14481546,10.2355642 6,9.88469382 6,9.5 C6,8.67157288 6.67157288,8 7.5,8 Z" id="Combined-Shape" fill="#47BF9C"></path>
                <path d="M16.5,8 C17.3284271,8 18,8.67157288 18,9.5 C18,9.88469382 17.8551845,10.2355642 17.6170946,10.5010701 C17.3433067,10.1930836 16.9442019,10 16.5,10 C16.0557981,10 15.6566933,10.1930836 15.3820358,10.4999005 C15.1448155,10.2355642 15,9.88469382 15,9.5 C15,8.67157288 15.6715729,8 16.5,8 Z" id="Combined-Shape" fill="#47BF9C"></path>
            </g>
        </g>
    </g>
</svg>
</span>
                                            <span class="bark-svg-icon bsi-primary-dark-blue bsi-sm d-none emoji good"><!--?xml version="1.0" encoding="UTF-8"?-->
<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <g id="Page-7" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="103-Additional-Details-3.0-02" transform="translate(-327.000000, -483.000000)">
            <g id="quality-meter-emoji-good" transform="translate(327.000000, 483.000000)">
                <circle id="Oval" stroke="#F7BF53" stroke-width="2" cx="12" cy="12" r="11"></circle>
                <circle id="Oval" fill="#F7BF53" cx="7.5" cy="9.5" r="1.5"></circle>
                <circle id="Oval-Copy" fill="#F7BF53" cx="16.5" cy="9.5" r="1.5"></circle>
                <path d="M7.5,15.5 C8.5,16.4973958 10,16.9960937 12,16.9960937 C14,16.9960937 15.5,16.4973958 16.5,15.5" id="Line" stroke="#F7BF53" stroke-linecap="square"></path>
            </g>
        </g>
    </g>
</svg>
</span>
                                            <span class="bark-svg-icon bsi-primary-dark-blue bsi-sm emoji neutral"><!--?xml version="1.0" encoding="UTF-8"?-->
<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <g id="Page-7" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="103-Additional-Details-3.0-01" transform="translate(-327.000000, -483.000000)">
            <g id="quality-meter-emoji-neutral" transform="translate(327.000000, 483.000000)">
                <circle id="Oval" stroke="#9BA0BC" stroke-width="2" cx="12" cy="12" r="11"></circle>
                <circle id="Oval" fill="#9BA0BC" cx="7.5" cy="10.5" r="1.5"></circle>
                <circle id="Oval-Copy" fill="#9BA0BC" cx="16.5" cy="10.5" r="1.5"></circle>
                <line x1="7.5" y1="15.5" x2="16.5" y2="15.5" id="Line" stroke="#9BA0BC" stroke-linecap="square"></line>
            </g>
        </g>
    </g>
</svg>
</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="js-additional-details-success-container d-none">
                                <div class="alert alert-success text-center">
                                    Thanks! Your details have been added.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="js-additional-details-file-container"></div>

                <div class="row px-2 px-md-4 pb-3 no-gutters button-container">
                    <div class="col-6 d-flex align-items-center">
                    </div>
                    <div class="col-6 text-right">
                        <a class="btn btn-primary large-btn js-submit-additional-details js-do-submit-additional-details do-submit-additional-details js-additional-details-submit-text w-100 update-request text-xs px-1">
                            Update request
                        </a>
                        <a class="btn btn-primary large-btn js-continue-after-additional-details-success d-none w-100 text-xs px-1">
                            Next
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script id="additional-details-subheading-template" type="text/x-handlebars-template">
    <div class="additional-details-subheader-block rounded p-2 bg-grey-25 text-grey-800 text-left">
        
           "{ subheading_html "}
        
    </div>
</script>
<div id="sms-verification-modal" aria-hidden="true" aria-labelledby="-label" class="modal bark-modal additional-details-modal-v2" role="dialog" tabindex="-1" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header flex-column align-items-center justify-content-center">
                <h4 class="text-center mb-0">Confirm your phone number</h4>
            </div>
            <div class="modal-body pt-0">
                <div id="inline-bark-sms-phone-verification" class="">
                    <div class="inline-bark-sms-phone-verification sending">
                        <div class="errors px-3 text-center text-sm">
                            <p class="sms-errors alert-danger alert error d-none"></p>
                        </div>
                        <div class="sending">
                            <p class="text-center text-dark-blue">
                                We are sending a verification code to the phone number you provided...
                                </p><div class="waiting-loader text-center">
    <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
                            <p></p>
                        </div>
                        <div class="sms-form sms-verification-form text-center">
                            <div class="row px-3 pb-3">
                                <div class="col-12">
                                    <p class="mb-0">
                                        Please enter the code we just sent to <span class="font-weight-bold number-to-verify text-nowrap"></span>.
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col d-flex justify-content-center align-items-center mx-sm-2 mx-1">
                                    <input id="af-verification-code" class="d-none text-center form-input text-dark-blue shadow border-grey-200 mx-1 p-2" type="one-time-code" autocomplete="one-time-code" value="" data-hj-whitelist="">
                                                                            <input id="otp-code-0" class="code-input col text-lg text-center form-input text-dark-blue w-100 border-grey-200 mx-1" data-index="0" type="text" maxlength="1" data-hj-whitelist="">
                                                                            <input id="otp-code-1" class="code-input col text-lg text-center form-input text-dark-blue w-100 border-grey-200 mx-1" data-index="1" type="text" maxlength="1" data-hj-whitelist="">
                                                                            <input id="otp-code-2" class="code-input col text-lg text-center form-input text-dark-blue w-100 border-grey-200 mx-1" data-index="2" type="text" maxlength="1" data-hj-whitelist="">
                                                                            <input id="otp-code-3" class="code-input col text-lg text-center form-input text-dark-blue w-100 border-grey-200 mx-1" data-index="3" type="text" maxlength="1" data-hj-whitelist="">
                                                                    </div>
                            </div>
                            <div class="row resend-row">
                                <div class="col text-xs">
                                    <p class="mt-4 mb-0 text-xs">
                                        Didn't receive a code?
                                        <span class="nowrap">
                                            <a class="js-resend-code text-underline link-color cursor-pointer" tabindex="0">Resend</a> <span class="change-number">or <a class="sms-verification-btn-change-phone text-underline link-color cursor-pointer" tabindex="0">Change number</a></span>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="verify">
                            <p class="text-center text-dark-blue">
                                We are checking the code you input...
                                </p><div class="waiting-loader text-center">
    <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
                            <p></p>
                        </div>
                        <div class="change-phone">
                            <h4 class="text-center">What is your phone number?</h4>
                            <div class="change-number-error d-none">
                                <p class="alert alert-danger"></p>
                            </div>
                            <div id="inline-bark-new-user" class="inline-bark-q inline-bark-q-text">
                                <div class="new-project-field account-information-row inline-bark-q-cont mx-2">
                                    <input id="sms-verification-change-user-telephone" class="inline-bark-q-new-user update-telephone-field border-grey-200 my-3" placeholder="Phone number" name="telephone" value="" type="tel" tab-index="2">
                                    <div class="phone-desc spacing text-grey-600 text-xs">
                                        Professionals will only be given your details once they've sent you a quote.
                                    </div>
                                </div>
                            </div>
                            <div class="sms-verification-buttons change-phone mt-3 pt-3">
                                <div class="row justify-content-end align-items-center mx-0">
                                    <button class="update-phone-continue">Continue</button>
                                </div>
                            </div>
                        </div>
                        <div class="sent">
                            <div class="d-flex success-circle align-items-center justify-content-center rounded-circle mx-auto mb-4" aria-hidden="true">
                                <img src="https://d18jakcjgoan9.cloudfront.net/s/img/img/barkv2/custom-icons/modal-success-tick.png!d=EKnimM" alt="" width="51" height="40">
                            </div>
                            <h4 class="lh-md text-center px-5 mb-0">Your number has been verified successfully!</h4>
                        </div>
                        <div class="sms-verification-buttons sms-form mt-3 pt-3">
                            <div class="row justify-content-between align-items-center mx-0">
                                <button class="sms-verification-btn-back text-light-grey">Back</button>
                                <button class="sms-verification-btn-skip text-light-grey d-none mr-3 text-xs">Skip</button>
                                <button class="sms-verification-continue">Continue</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="login-by-phone-verification-modal" aria-hidden="true" aria-labelledby="-label" class="modal bark-modal additional-details-modal-v2" role="dialog" tabindex="-1" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="inline-bark-percentage-track-new">
                <div class="inline-bark-percentage-thumb" style="width: 100%;"></div>
            </div>
            <div class="modal-body pt-0">
                <div class="mt-1 close-modal-cross"></div>
                <div class="flex-column align-items-center login-by-phone-header justify-content-center">
                    <div class="confirm-request-posted d-flex align-items-center justify-content-center text-center mb-4 mt-4">
                        <span class="bark-svg-icon bsi-primary-success bsi-shadowed d-inline">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" style="display: inline; height: 28px; width: 28px;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(2.000000, 2.000000)" class="primary-color">
                                    <path d="M10,0 C4.48,0 0,4.48 0,10 C0,15.52 4.48,20 10,20 C15.52,20 20,15.52 20,10 C20,4.48 15.52,0 10,0 Z M9,13.42 L5,9.42 L6.41,8.01 L9,10.59 L13.59,6 L15,7.42 L9,13.42 Z"></path>
                                </g>
                            </g>
                        </svg>
                        </span>
                        <span class="pl-2 pt-1 text-green">
                            We've posted your request</span>
                    </div>
                    <h4 class="text-center mb-1">Log into your account</h4>
                </div>
                <div id="inline-bark-sms-phone-verification" class="">
                    <div class="inline-bark-sms-phone-verification sending">
                        <div class="errors px-3 text-center text-sm">
                            <p class="sms-errors alert-danger alert error d-none"></p>
                        </div>
                        <div class="sending">
                            <p class="text-center text-dark-blue">
                                We are sending a verification code to the phone number you provided...
                                </p><div class="waiting-loader text-center">
    <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
                            <p></p>
                        </div>
                        <div class="sms-form sms-verification-form text-center mb-4">
                            <div class="row px-3 pb-3">
                                <div class="col-12">
                                    <p class="mb-0 text-grey-600 text-xs">
                                        Enter the 4 digit code we sent by SMS to your number ending in
                                        <span class="font-weight-bold number-to-verify text-nowrap"></span>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col d-flex justify-content-center align-items-center mx-sm-2 mx-1">
                                    <input id="lbp-verification-code" class="d-none text-center form-input text-dark-blue shadow border-grey-200 mx-1 p-2" type="one-time-code" autocomplete="one-time-code" value="" data-hj-whitelist="">
                                                                            <input id="lbp-verification-code-0" class="code-input col text-lg text-center form-input text-dark-blue w-100 border-grey-200 mx-1" data-index="0" type="text" maxlength="1" data-hj-whitelist="">
                                                                            <input id="lbp-verification-code-1" class="code-input col text-lg text-center form-input text-dark-blue w-100 border-grey-200 mx-1" data-index="1" type="text" maxlength="1" data-hj-whitelist="">
                                                                            <input id="lbp-verification-code-2" class="code-input col text-lg text-center form-input text-dark-blue w-100 border-grey-200 mx-1" data-index="2" type="text" maxlength="1" data-hj-whitelist="">
                                                                            <input id="lbp-verification-code-3" class="code-input col text-lg text-center form-input text-dark-blue w-100 border-grey-200 mx-1" data-index="3" type="text" maxlength="1" data-hj-whitelist="">
                                                                    </div>
                            </div>
                            <div class="row resend-row">
                                <div class="col text-xs">
                                    <p class="mt-4 mb-4 text-grey-600">
                                        Didn't receive a code?
                                        <span class="nowrap">
                                            <a href="#" class="js-resend-code text-underline text-grey-1000">
                                                Resend
                                            </a>
                                        </span>
                                    </p>
                                </div>
                            </div>
                            <div class="row px-3 pb-3">
                                <div class="col-12">
                                    <p class="mb-0 text-grey-600 text-xs">
                                        We've also sent you an email with a login link or <a href="/login/" class="text-nowrap direct-login text-underline text-grey-1000">log in manually</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="verify  my-7">
                            <p class="text-center text-dark-blue">
                                Checking code...
                                </p><div class="waiting-loader text-center">
    <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
                            <p></p>
                        </div>

                        <div class="sent">
                            <div class="d-flex success-circle align-items-center justify-content-center rounded-circle mx-auto mb-4" aria-hidden="true">
                                <img src="https://d18jakcjgoan9.cloudfront.net/s/img/img/barkv2/custom-icons/modal-success-tick.png!d=EKnimM" alt="" width="51" height="40">
                            </div>
                            <h4 class="lh-md text-center px-5 mb-0">
                                Your number has been verified successfully!
                            </h4>
                        </div>
                        <div class="sms-verification-buttons sms-form mt-0 pt-0 d-md-none">
                            <div class="row justify-content-end align-items-center mx-0">
                                <button class="sms-verification-btn-back text-light-grey d-none">Back</button>
                                <button class="sms-verification-btn-skip text-light-grey d-none mr-3 text-xs d-none">Skip</button>
                                <button class="sms-verification-continue">Continue</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var OneSignal = window.OneSignal || [];
    OneSignal.push(["init", {
        appId: Bark.ENV.one_signal_appid,
        safari_web_id: Bark.ENV.safari_web_id,
        autoRegister: false,
        autoResubscribe: true,
        allowLocalhostAsSecureOrigin: true,
        notifyButton: {
            enable: false
        },
        welcomeNotification: {
            disable: true
        },
        webhooks: {
            cors: false,
            'notification.displayed': 'https://www.bark.com/push-hook/',
            'notification.clicked': 'https://www.bark.com/push-hook/',
            'notification.dismissed': 'https://www.bark.com/push-hook/',
        }
    }]);
</script>
    <script>
      function loadGoogleAds() {
          if (!document.getElementById('gtm-remarketing')) {
              const script = document.createElement("script");
              script.async = true;
              script.src = "https://www.googletagmanager.com/gtag/js?id=AW-997711212";
              script.id = 'gtm-remarketing';
              document.head.appendChild(script);
          
              script.onload = function () {
                  window.dataLayer = window.dataLayer || [];
                  window.googleRemarketingAccountId = 'AW-997711212';
                  function gtag() {
                      dataLayer.push(arguments);
                  }
                  gtag("js", new Date());
                
                  gtag("config", window.googleRemarketingAccountId);
              };
          }
      }
    
      window.addEventListener(
          "OneTrustGroupsUpdated",
          function () {
              const consent = window.OnetrustActiveGroups.includes("C0004");
              if (consent) {
                  loadGoogleAds();
              }
          },
          false
      );
      window.addEventListener("load", function () {
          if (
              window.OnetrustActiveGroups &&
              window.OnetrustActiveGroups.includes("C0004")
          ) {
              loadGoogleAds();
          }
      });
    </script>

    <!-- Begin tracking -->
    <script type="text/javascript">
        /* <![CDATA[ */
        var google_conversion_id = "945075724";
        var google_custom_params = window.google_tag_params;
        var google_remarketing_only = true;
        /* ]]> */
    </script>
    <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
    <noscript>
        <div style="display:inline;">
            <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/945075724/?value=0&amp;guid=ON&amp;script=0"/>
        </div>
    </noscript>

    <script>(function(w,d,t,r,u){
        try {
            var f,n,i;w[u]=w[u]||[],f=function(){var o={ti:"5176741"};o.q=w[u],w[u]=new UET(o),w[u].push("pageLoad")},n=d.createElement(t),n.src=r,n.async=1,n.onload=n.onreadystatechange=function(){var s=this.readyState;s&&s!=="loaded"&&s!=="complete"||(f(),n.onload=n.onreadystatechange=null)},i=d.getElementsByTagName(t)[0],i.parentNode.insertBefore(n,i)
        } catch (ignore) {window.bugsnagClient && window.bugsnagClient.notify(ignore)}
    })(window,document,"script","//bat.bing.com/bat.js","uetq");</script><noscript><img src="//bat.bing.com/action/0?ti=5176741&Ver=2" height="0" width="0" style="display:none; visibility: hidden;" /></noscript><div class="d-none" style="display:none;" id="bark_submit"></div><div class="streamcomplete-body streamcomplete-body-iid-1 results-categoryname"></div>
    <script>window.uetq = window.uetq || [];window.uetq.push("consent", "default", { ad_storage: "denied" })</script>

    
    
    
    
    
    
    
    
    
    
    <!-- End tracking -->
<script id="logged-out-buyer-question" type="text/x-handlebars-template">
    
        <div class="d-flex align-items-center justify-content-center mb-4">
            <img src="{{avatarUrl"" data-seller-avatar alt="" height="76" width="76">
        </div>
        <h4 class="text-center mb-3">
           "welcomeMessage"
        </h4>
        <div class="text-center px-3 text-grey-600">
            <p>{{ _t 'buyer_create-bark:returning-buyer.welcome-back.subheader' "</p>
        </div>
    
</script>

<script id="bark-posted-sent-email" type="text/x-handlebars-template">
    
            <div class="text-center">
                <div class="d-flex success-circle align-items-center justify-content-center rounded-circle mx-auto mb-4" aria-hidden="true">
                    <img  class="img-fluid" alt="success checkmark" width="35" height="27" title="success checkmark" src="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/icons/success-tick.png!d=xVmFP" srcset="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/icons/success-tick.png!d=xVmFP 1x, https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/icons/success-tick.png!d=GRPswQ 2x">
                </div>
                <h4>{{ _t 'buyer_create-bark:returning-buyer.posted.title' "</h4>
                <p class="text-grey-600 px-6">{{ _t 'buyer_create-bark:returning-buyer.posted.subheader.line-1' "</p>
                <p class="text-grey-600 mb-0 px-6">{{ _t 'buyer_create-bark:returning-buyer.posted.subheader.line-2' "</p>
            </div>
    
</script>

<script id="bark-button-spinner" type="text/x-handlebars-template">
   
       "#if isBootstrap"
            <div class="spinner-border spinner-border-sm text-white" role="status">
                <span class="sr-only">{{ _t 'common:loading-message' "</span>
            </div>
       " else "
            <span class="fa fa-spin fa-spinner"></span>
       "/if"
   
</script>

<!-- TrustBox script -->
<script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async=""></script>


            <link onerror="window?.fallbackOnError?.call(this, `react_buyer_dashboard`);" rel="stylesheet" href="https://frontend-production.bark.com/130-o4zypk38cb99vdge/buyer-dashboard/styles.801bdd1ca194c698.css">
            <link onerror="window?.fallbackOnError?.call(this, `react_buyer_dashboard`);" rel="stylesheet" href="https://frontend-production.bark.com/130-o4zypk38cb99vdge/buyer-dashboard/main.d247f3888acfd52b.css">
                <script onerror="window?.fallbackOnError?.call(this, `react_buyer_dashboard`);" src="https://frontend-production.bark.com/130-o4zypk38cb99vdge/buyer-dashboard/runtime.601568119e8074a5.js" type="module"></script>
            <script onerror="window?.fallbackOnError?.call(this, `react_buyer_dashboard`);" src="https://frontend-production.bark.com/130-o4zypk38cb99vdge/buyer-dashboard/polyfills.5cd1e9d61aafde01.js" type="module"></script>
            <script onerror="window?.fallbackOnError?.call(this, `react_buyer_dashboard`);" src="https://frontend-production.bark.com/130-o4zypk38cb99vdge/buyer-dashboard/styles.9ea65635f4e0c9e6.js" type="module"></script>
            <script onerror="window?.fallbackOnError?.call(this, `react_buyer_dashboard`);" src="https://frontend-production.bark.com/130-o4zypk38cb99vdge/buyer-dashboard/main.56a30f3c367c88dc.js" type="module"></script>
    
<!-- End TrustBox script -->
<script>
    function Survicate() {
        this.jsSvcEventFiredName = "survicate-event-fired";
        this.custom_traits = {};
        this.loading = false;
        this.loaded = false;
        this.eventListeners = [];
        this.eventLog = [];
        this.pollInterval = 5;
        this.pollingEvents = [];
        this.pollPid = null;
        this.maxEventLogSize = 100;
        this.domain = window?.Bark?.ENV?.web_hostname;
        this.init = function() {
            if (!this.loaded && !this.loading) {
                this.loading = true;
                window._sva = window._sva || {};
                window._sva.traits = Object.assign({}, {
                        // global traits go here
                        "bes_token": window?.Bark?.ENV?.bes_token || null
                    },
                    this.custom_traits
                );
                window.addEventListener('SurvicateReady', function() {
                    window.Bark.svc.loaded = true;
                    window.Bark.svc.loading = false;
                });
                this.loadSvc();
            }
        };
        this.makeListenerRecord = function(jsEventName, handler) {
            return {
                "event_name": jsEventName,
                "handler": handler
            }
        };
        this.removeEventListener = function(jsEventName, handler) {
            let eventListenersList = [];
            if (typeof handler === 'undefined') {
                for (key in this.eventListeners) {
                    a
                    let removed = false;
                    let eventListener = eventListeners[key];
                    if (eventListener['name'] === jsEventName) {
                        if (typeof handler === 'undefined' || handler === eventListener['handler']) {
                            this.removeEventListener(jsEventName, eventListener['handler']);
                            removed = true;
                        }
                    }
                    if (!removed) {
                        eventListenersList.push(eventListener);
                    }
                }
                this.eventListeners = eventListenersList;
            }
        }
        this.addEventListener = function(jsEventName, handler) {
            window.addEventListener(jsEventName, handler);
            this.eventListeners.push(this.makeListenerRecord(jsEventName, handler));
        };
        this.fireJSEvent = function(jsEventName, params) {
            if (typeof(params) === 'undefined') {
                params = {};
            }
            window.dispatchEvent(new CustomEvent(jsEventName, {
                "detail": params
            }));
        };
        this.isLoaded = function() {
            if (!this.loaded) {
                throw new Error('Survicate not loaded');
            }
            return this.loaded;
        };
        this.loadSvc = function() {
            // do not change below unless updating from the survicate website
            // Start of Survicate (www.survicate.com) code
            var s = document.createElement('script');
            s.src = 'https://survey.survicate.com/workspaces/51726c538822da087fa727a6ab8cc275/web_surveys.js';
            s.async = true;
            var e = document.getElementsByTagName('script')[0];
            e.parentNode.insertBefore(s, e);
            // End of Survicate code
        };
        this.addCustomTraits = function(traits) {
            if (typeof traits === 'undefined') {
                traits = {};
            }
            this.custom_traits = traits;
        };
        this.addToEventLog = function(eventData) {
            this.eventLog.push(eventData);
            let excess = this.eventLog.length > this.maxEventLogSize;
            if (excess > 0) {
                this.eventLog.splice(0, excess);
            }
        };
        this.startPolling = function() {
            this.pollPid = setInterval(function() {
                window.Bark.svc.processPollEvents();
            }, this.pollInterval * 1000);
        };
        this.processPollEvents = function() {
            let pollingEvents = this.pollingEvents;
            this.pollingEvents = [];
            while (pollEvent = pollingEvents.pop()) {
                this.fireEvent(pollEvent['event_name'], pollEvent['properties'], true);
            }
        };
        this.clearPollEvents = function() {
            if (this.pollPid) {
                clearInterval(this.pollPid);
            }
            this.pollingEvents = [];
        };
        this.fireEvent = function(eventName, properties, pollSend) {
            if (typeof pollSend === 'undefined') {
                pollSend = false;
            }
            if (this.loaded == false) {
                setTimeout(function() {
                    window.Bark.svc.fireEvent(eventName, properties, pollSend);
                }, 5000);
            } else {
                payloadProperties = {
                    "domain": this.domain,
                    ...properties
                }
                // force property values to strings as this Survicant only understands these for property processing
                let stringifyPayload = {};
                for (key in payloadProperties) {
                    stringifyPayload[key] = String(payloadProperties[key]);
                }
                window._sva.invokeEvent(eventName, stringifyPayload);
                this.fireJSEvent(this.jsSvcEventFiredName, {
                    "svc_event_name": eventName,
                    "properties": payloadProperties
                });
                this.addToEventLog({
                    "svc_event_name": eventName,
                    "properties": payloadProperties
                });
                if (pollSend) {
                    properties['polltime'] = (properties['polltime'] || 0) + this.pollInterval
                    this.pollingEvents.push({
                        "event_name": eventName,
                        "properties": properties
                    });
                    if (!this.pollPid) {
                        this.startPolling();
                    }
                }
            }
        };
    };
    window.Bark = window.Bark || {};
    window.Bark.svc = new Survicate();
    </script>


<div id="new-request-flow-widget"></div><script type="text/javascript" class="optanon-category-C0002">
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-56265422-1', { 'cookieDomain': 'bark.com', 'siteSpeedSampleRate': 60, 'useAmpClientId': true });
    ga('require', 'linkid', 'linkid.js');
    ga('require', 'displayfeatures');
    ga('require', 'ecommerce');

            ga('set', '&uid', "9e7311d647923271cc15600e16a6e1832fcf8ea2");
    
    
    
    ga('send', 'pageview');
</script><div id="onetrust-consent-sdk"><div class="onetrust-pc-dark-filter ot-hide ot-fade-in"></div><div id="onetrust-pc-sdk" class="otPcCenter ot-hide ot-fade-in" lang="en" aria-label="Preference center" role="region"><div role="alertdialog" aria-modal="true" aria-describedby="ot-pc-desc" style="height: 100%;" aria-label="Privacy Preference Center"><!-- Close Button --><div class="ot-pc-header"><!-- Logo Tag --><div class="ot-pc-logo" role="img" aria-label="Bark Logo"><img alt="Bark Logo" src="https://cdn-ukwest.onetrust.com/logos/a1428aa2-335c-4dea-84cc-7529f6d3be48/ed8fa719-486a-48df-87b7-15e81e3d73d5/dd9fa758-6db6-4b86-9d76-424d05367764/barklogo-dark.png"></div><button id="close-pc-btn-handler" class="ot-close-icon" aria-label="Close" style="background-image: url(&quot;https://cdn-ukwest.onetrust.com/logos/static/ot_close.svg&quot;);"></button></div><!-- Close Button --><div id="ot-pc-content" class="ot-pc-scrollbar"><div class="ot-optout-signal ot-hide"><div class="ot-optout-icon"><svg xmlns="http://www.w3.org/2000/svg"><path class="ot-floating-button__svg-fill" d="M14.588 0l.445.328c1.807 1.303 3.961 2.533 6.461 3.688 2.015.93 4.576 1.746 7.682 2.446 0 14.178-4.73 24.133-14.19 29.864l-.398.236C4.863 30.87 0 20.837 0 6.462c3.107-.7 5.668-1.516 7.682-2.446 2.709-1.251 5.01-2.59 6.906-4.016zm5.87 13.88a.75.75 0 00-.974.159l-5.475 6.625-3.005-2.997-.077-.067a.75.75 0 00-.983 1.13l4.172 4.16 6.525-7.895.06-.083a.75.75 0 00-.16-.973z" fill="#FFF" fill-rule="evenodd"></path></svg></div><span></span></div><h2 id="ot-pc-title">Privacy Preference Center</h2><div id="ot-pc-desc">When you visit any website, it may store or retrieve information on your browser, mostly in the form of cookies. This information might be about you, your preferences or your device and is mostly used to make the site work as you expect it to. The information does not usually directly identify you, but it can give you a more personalized web experience. Because we respect your right to privacy, you can choose not to allow some types of cookies. Click on the different category headings to find out more and change our default settings. However, blocking some types of cookies may impact your experience of the site and the services we are able to offer.
            <br><a href="https://www.bark.com/en/gb/cookies/" class="privacy-notice-link" rel="noopener" target="_blank" aria-label="More information about your privacy, opens in a new tab">More information</a></div><button id="accept-recommended-btn-handler">Allow All</button><section class="ot-sdk-row ot-cat-grp"><h3 id="ot-category-title"> Manage Consent Preferences</h3><div class="ot-accordion-layout ot-cat-item ot-vs-config" data-optanongroupid="C0001"><button aria-expanded="false" ot-accordion="true" aria-controls="ot-desc-id-C0001" aria-labelledby="ot-header-id-C0001"></button><!-- Accordion header --><div class="ot-acc-hdr ot-always-active-group"><div class="ot-plus-minus"><span></span><span></span></div><h4 class="ot-cat-header" id="ot-header-id-C0001">Strictly Necessary Cookies</h4><div class="ot-always-active">Always Active</div></div><!-- accordion detail --><div class="ot-acc-grpcntr ot-acc-txt"><p class="ot-acc-grpdesc ot-category-desc" id="ot-desc-id-C0001">These cookies are necessary for the website to function and cannot be switched off in our systems. They are usually only set in response to actions made by you which amount to a request for services, such as setting your privacy preferences, logging in or filling in forms. You can set your browser to block or alert you about these cookies, but some parts of the site will not then work. These cookies do not store any personally identifiable information.</p></div></div><div class="ot-accordion-layout ot-cat-item ot-vs-config" data-optanongroupid="C0002"><button aria-expanded="false" ot-accordion="true" aria-controls="ot-desc-id-C0002" aria-labelledby="ot-header-id-C0002"></button><!-- Accordion header --><div class="ot-acc-hdr"><div class="ot-plus-minus"><span></span><span></span></div><h4 class="ot-cat-header" id="ot-header-id-C0002">Performance Cookies</h4><div class="ot-tgl"><input type="checkbox" name="ot-group-id-C0002" id="ot-group-id-C0002" aria-checked="true" role="switch" class="category-switch-handler" data-optanongroupid="C0002" checked="" aria-labelledby="ot-header-id-C0002"> <label class="ot-switch" for="ot-group-id-C0002"><span class="ot-switch-nob" aria-checked="false" role="switch" aria-label="Performance Cookies"></span> <span class="ot-label-txt">Performance Cookies</span></label> </div></div><!-- accordion detail --><div class="ot-acc-grpcntr ot-acc-txt"><p class="ot-acc-grpdesc ot-category-desc" id="ot-desc-id-C0002">These cookies allow us to count visits and traffic sources so we can measure and improve the performance of our site. They help us to know which pages are the most and least popular and see how visitors move around the site. All information these cookies collect is aggregated and therefore anonymous. If you do not allow these cookies we will not know when you have visited our site, and will not be able to monitor its performance.</p></div></div><div class="ot-accordion-layout ot-cat-item ot-vs-config" data-optanongroupid="C0004"><button aria-expanded="false" ot-accordion="true" aria-controls="ot-desc-id-C0004" aria-labelledby="ot-header-id-C0004"></button><!-- Accordion header --><div class="ot-acc-hdr"><div class="ot-plus-minus"><span></span><span></span></div><h4 class="ot-cat-header" id="ot-header-id-C0004">Targeting Cookies</h4><div class="ot-tgl"><input type="checkbox" name="ot-group-id-C0004" id="ot-group-id-C0004" aria-checked="true" role="switch" class="category-switch-handler" data-optanongroupid="C0004" checked="" aria-labelledby="ot-header-id-C0004"> <label class="ot-switch" for="ot-group-id-C0004"><span class="ot-switch-nob" aria-checked="false" role="switch" aria-label="Targeting Cookies"></span> <span class="ot-label-txt">Targeting Cookies</span></label> </div></div><!-- accordion detail --><div class="ot-acc-grpcntr ot-acc-txt"><p class="ot-acc-grpdesc ot-category-desc" id="ot-desc-id-C0004">These cookies may be set through our site by our advertising partners. They may be used by those companies to build a profile of your interests and show you relevant adverts on other sites. They do not store directly personal information, but are based on uniquely identifying your browser and internet device. If you do not allow these cookies, you will experience less targeted advertising.</p></div></div><!-- Groups sections starts --><!-- Group section ends --><!-- Accordion Group section starts --><!-- Accordion Group section ends --></section></div><section id="ot-pc-lst" class="ot-hide ot-hosts-ui ot-pc-scrollbar"><div id="ot-pc-hdr"><div id="ot-lst-title"><button class="ot-link-btn back-btn-handler" aria-label="Back"><svg id="ot-back-arw" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 444.531 444.531" xml:space="preserve"><title>Back Button</title><g><path fill="#656565" d="M213.13,222.409L351.88,83.653c7.05-7.043,10.567-15.657,10.567-25.841c0-10.183-3.518-18.793-10.567-25.835
                    l-21.409-21.416C323.432,3.521,314.817,0,304.637,0s-18.791,3.521-25.841,10.561L92.649,196.425
                    c-7.044,7.043-10.566,15.656-10.566,25.841s3.521,18.791,10.566,25.837l186.146,185.864c7.05,7.043,15.66,10.564,25.841,10.564
                    s18.795-3.521,25.834-10.564l21.409-21.412c7.05-7.039,10.567-15.604,10.567-25.697c0-10.085-3.518-18.746-10.567-25.978
                    L213.13,222.409z"></path></g></svg></button><h3>Cookie List</h3></div><div class="ot-lst-subhdr"><div class="ot-search-cntr"><p role="status" class="ot-scrn-rdr"></p><input id="vendor-search-handler" type="text" name="vendor-search-handler" placeholder="Search…" aria-label="Cookie list search"> <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 -30 110 110" aria-hidden="true"><title>Search Icon</title><path fill="#2e3644" d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23
            s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92
            c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17
            s-17-7.626-17-17S14.61,6,23.984,6z"></path></svg></div><div class="ot-fltr-cntr"><button id="filter-btn-handler" aria-label="Filter" aria-haspopup="true"><svg role="presentation" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 402.577 402.577" xml:space="preserve"><title>Filter Icon</title><g><path fill="#fff" d="M400.858,11.427c-3.241-7.421-8.85-11.132-16.854-11.136H18.564c-7.993,0-13.61,3.715-16.846,11.136
      c-3.234,7.801-1.903,14.467,3.999,19.985l140.757,140.753v138.755c0,4.955,1.809,9.232,5.424,12.854l73.085,73.083
      c3.429,3.614,7.71,5.428,12.851,5.428c2.282,0,4.66-0.479,7.135-1.43c7.426-3.238,11.14-8.851,11.14-16.845V172.166L396.861,31.413
      C402.765,25.895,404.093,19.231,400.858,11.427z"></path></g></svg></button></div><div id="ot-anchor"></div><section id="ot-fltr-modal"><div id="ot-fltr-cnt"><button id="clear-filters-handler">Clear</button><div class="ot-fltr-scrlcnt ot-pc-scrollbar"><div class="ot-fltr-opts"><div class="ot-fltr-opt"><div class="ot-chkbox"><input id="chkbox-id" type="checkbox" aria-checked="false" class="category-filter-handler"> <label for="chkbox-id"><span class="ot-label-txt">checkbox label</span></label> <span class="ot-label-status">label</span></div></div></div><div class="ot-fltr-btns"><button id="filter-apply-handler">Apply</button> <button id="filter-cancel-handler">Cancel</button></div></div></div></section></div></div><section id="ot-lst-cnt" class="ot-host-cnt ot-pc-scrollbar"><div id="ot-sel-blk"><div class="ot-sel-all"><div class="ot-sel-all-hdr"><span class="ot-consent-hdr">Consent</span> <span class="ot-li-hdr">Leg.Interest</span></div><div class="ot-sel-all-chkbox"><div class="ot-chkbox" id="ot-selall-hostcntr"><input id="select-all-hosts-groups-handler" type="checkbox" aria-checked="false"> <label for="select-all-hosts-groups-handler"><span class="ot-label-txt">checkbox label</span></label> <span class="ot-label-status">label</span></div><div class="ot-chkbox" id="ot-selall-vencntr"><input id="select-all-vendor-groups-handler" type="checkbox" aria-checked="false"> <label for="select-all-vendor-groups-handler"><span class="ot-label-txt">checkbox label</span></label> <span class="ot-label-status">label</span></div><div class="ot-chkbox" id="ot-selall-licntr"><input id="select-all-vendor-leg-handler" type="checkbox" aria-checked="false"> <label for="select-all-vendor-leg-handler"><span class="ot-label-txt">checkbox label</span></label> <span class="ot-label-status">label</span></div></div></div></div><div class="ot-sdk-row"><div class="ot-sdk-column"></div></div></section></section><div class="ot-pc-footer"><div class="ot-btn-container"><button class="ot-pc-refuse-all-handler">Reject All</button> <button class="save-preference-btn-handler onetrust-close-btn-handler">Confirm My Choices</button></div><!-- Footer logo --><div class="ot-pc-footer-logo"><a href="https://www.onetrust.com/products/cookie-consent/" target="_blank" rel="noopener noreferrer" aria-label="Powered by OneTrust Opens in a new Tab"><img alt="Powered by Onetrust" src="https://cdn-ukwest.onetrust.com/logos/static/powered_by_logo.svg" title="Powered by OneTrust Opens in a new Tab"></a></div></div><!-- Cookie subgroup container --><!-- Vendor list link --><!-- Cookie lost link --><!-- Toggle HTML element --><!-- Checkbox HTML --><!-- plus minus--><!-- Arrow SVG element --><!-- Accordion basic element --><span class="ot-scrn-rdr" aria-atomic="true" aria-live="polite"></span><!-- Vendor Service container and item template --></div><iframe class="ot-text-resize" sandbox="allow-same-origin" title="onetrust-text-resize" style="position: absolute; top: -50000px; width: 100em;" aria-hidden="true"></iframe></div><div id="ot-sdk-btn-floating" title="More Options" class="ot-floating-button"><div class="ot-floating-button__front custom-persistent-icon"><button type="button" class="ot-floating-button__open" aria-label="Open Preferences"></button></div><div class="ot-floating-button__back custom-persistent-icon"><button type="button" class="ot-floating-button__close" aria-label="Close Preferences" aria-hidden="true" display="none"><!--?xml version="1.0" encoding="UTF-8"?--> <svg role="presentation" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="Banner_02" class="ot-floating-button__svg-fill" transform="translate(-318.000000, -725.000000)" fill="#ffffff" fill-rule="nonzero"><g id="Group-2" transform="translate(305.000000, 712.000000)"><g id="icon/16px/white/close"><polygon id="Line1" points="13.3333333 14.9176256 35.0823744 36.6666667 36.6666667 35.0823744 14.9176256 13.3333333"></polygon><polygon id="Line2" transform="translate(25.000000, 25.000000) scale(-1, 1) translate(-25.000000, -25.000000) " points="13.3333333 14.9176256 35.0823744 36.6666667 36.6666667 35.0823744 14.9176256 13.3333333"></polygon></g></g></g></g></svg></button></div></div></div><div id="batBeacon562393980217" style="width: 0px; height: 0px; display: none; visibility: hidden;"><img id="batBeacon318826166206" width="0" height="0" alt="" src="https://bat.bing.net/action/0?ti=5176741&amp;Ver=2&amp;mid=441acecc-b027-4aa0-9587-f72c174ab981&amp;bo=2&amp;uach=pv%3D15.0.0&amp;pi=918639831&amp;lg=en-US&amp;sw=1920&amp;sh=1080&amp;sc=24&amp;tl=Bark.com%20-%20My%20Barks&amp;p=https%3A%2F%2Fwww.bark.com%2Fbuyers%2Fdashboard%2F&amp;r=https%3A%2F%2Fwww.bark.com%2Fbuyers%2Fbark%2FBjM3bN%2F%3Fblt%3D3250-9b352ea504df485efea89f61dfc1d1f934dc7f42%26bli%3DemnvV6&amp;lt=1207&amp;evt=pageLoad&amp;sv=1&amp;asc=D&amp;cdb=AQET&amp;rn=215207" style="width: 0px; height: 0px; display: none; visibility: hidden;"></div><scribe-shadow id="crxjs-ext" style="position: fixed; width: 0px; height: 0px; top: 0px; left: 0px; z-index: 2147483647; overflow: visible; visibility: visible;"></scribe-shadow><div class="streamcomplete-body streamcomplete-body-iid-2 results-initiatenewbarkcategory"></div><iframe allow="join-ad-interest-group" data-tagging-id="AW-997711212" data-load-time="1730560924949" height="0" width="0" src="https://td.doubleclick.net/td/rul/997711212?random=1730560924932&amp;cv=11&amp;fst=1730560924932&amp;fmt=3&amp;bg=ffffff&amp;guid=ON&amp;async=1&amp;gtm=45be4au0v9176108779za200&amp;gcd=13l3l3l3l1l1&amp;dma=0&amp;tag_exp=101823848~101878899~101878944~101925629&amp;u_w=1920&amp;u_h=1080&amp;url=https%3A%2F%2Fwww.bark.com%2Fbuyers%2Fdashboard%2F&amp;ref=https%3A%2F%2Fwww.bark.com%2Fbuyers%2Fbark%2FBjM3bN%2F%3Fblt%3D3250-9b352ea504df485efea89f61dfc1d1f934dc7f42%26bli%3DemnvV6&amp;hn=www.googleadservices.com&amp;frm=0&amp;tiba=Bark.com%20-%20My%20Barks&amp;did=dYWJhMj&amp;gdid=dYWJhMj&amp;npa=0&amp;pscdl=noapi&amp;auid=76193368.1728229976&amp;uaa=x86&amp;uab=64&amp;uafvl=Chromium%3B130.0.6723.92%7CGoogle%2520Chrome%3B130.0.6723.92%7CNot%253FA_Brand%3B99.0.0.0&amp;uamb=0&amp;uam=&amp;uap=Windows&amp;uapv=15.0.0&amp;uaw=0&amp;fledge=1&amp;data=event%3Dgtag.config" style="display: none; visibility: hidden;"></iframe><iframe height="0" width="0" style="display: none; visibility: hidden;"></iframe><div class="streamcomplete-body streamcomplete-body-iid-3 results-initiatenewbarklocation"></div>
<script type="text/javascript" id="" charset="">!function(b,e,f,g,a,c,d){b.fbq||(a=b.fbq=function(){a.callMethod?a.callMethod.apply(a,arguments):a.queue.push(arguments)},b._fbq||(b._fbq=a),a.push=a,a.loaded=!0,a.version="2.0",a.queue=[],c=e.createElement(f),c.async=!0,c.src=g,d=e.getElementsByTagName(f)[0],d.parentNode.insertBefore(c,d))}(window,document,"script","https://connect.facebook.net/en_US/fbevents.js");fbq("init","645002797508403");fbq("track","PageView");</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=645002797508403&amp;ev=PageView&amp;noscript=1"></noscript>

<script type="text/javascript" id="" charset="">!function(b,e,f,g,a,c,d){b.fbq||(a=b.fbq=function(){a.callMethod?a.callMethod.apply(a,arguments):a.queue.push(arguments)},b._fbq||(b._fbq=a),a.push=a,a.loaded=!0,a.version="2.0",a.queue=[],c=e.createElement(f),c.async=!0,c.src=g,d=e.getElementsByTagName(f)[0],d.parentNode.insertBefore(c,d))}(window,document,"script","https://connect.facebook.net/en_US/fbevents.js");fbq("init","1552999484962322");fbq("track","PageView");</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1552999484962322&amp;ev=PageView&amp;noscript=1"></noscript>

<script type="text/javascript" id="" charset="">!function(d,g,e){d.TiktokAnalyticsObject=e;var a=d[e]=d[e]||[];a.methods="page track identify instances debug on off once ready alias group enableCookie disableCookie holdConsent revokeConsent grantConsent".split(" ");a.setAndDefer=function(b,c){b[c]=function(){b.push([c].concat(Array.prototype.slice.call(arguments,0)))";for(d=0;d<a.methods.length;d++)a.setAndDefer(a,a.methods[d]);a.instance=function(b){b=a._i[b]||[];for(var c=0;c<a.methods.length;c++)a.setAndDefer(b,a.methods[c]);return b};a.load=
function(b,c){var f="https://analytics.tiktok.com/i18n/pixel/events.js";a._i=a._i||{};a._i[b]=[];a._i[b]._u=f;a._t=a._t||{};a._t[b]=+new Date;a._o=a._o||{};a._o[b]=c||{};c=document.createElement("script");c.type="text/javascript";c.async=!0;c.src=f+"?sdkid\x3d"+b+"\x26lib\x3d"+e;b=document.getElementsByTagName("script")[0];b.parentNode.insertBefore(c,b)};a.load("CRP67VBC77U6OCTM02M0");a.page()}(window,document,"ttq");</script>
<div id="chmln-dom" style="position: static;"><div id="chmln" data-powered-by="https://chameleon.io/how"></div><style id="chmln-stylesheet" type="text/css"></style><div id="chmln-prefetch-images"></div><style id="chmln-stylesheet-custom" type="text/css">button#chmln-button-primary, button#chmln-button-secondary {padding: 12px 24px !important; border-radius:4px!important;}
#chmln .chmln-step-tour .chmln-button-sample-b1, #chmln .chmln-step-tour .chmln-button-sample-b2{border-radius:4px!important;}
.chmln-body-container{margin: 30px !important;}
.chmln-cta{padding-bottom: 36px !important;}
h1 {line-height: 1.25em !important;}
#chmln .chmln-edit-modal .chmln-action {padding: 8px 24px 8px 24px; border: 2px solid transparent;}
#chmln .chmln-step-tour .chmln-body-content * {line-height: 1.5em !important}
#chmln .chmln-step-tour .chmln-body-content h1 strong * {line-height: 1.25em !important;}
#chmln strong * {font-family: 'gorditamedium' !important;}
.chmln-body-container {margin: 30px 30px 18px !important;}
.chmln-editable-highlight .chmln-body-container { margin: 20px 30px 18px !important;}

/* added additional styles */
#chmln h2{
line-height: 1.35em !important;
padding-bottom: 0.5em !important;
}
#chmln .chmln-cta{padding: 0 30px !important;padding-bottom: 30px !important;}
#chmln button.chmln-action{
font-size: 1.25em !important;
}
#chmln [class^="chmln-step"] .chmln-cta .chmln-progress div.chmln-progress-breadcrumbs.chmln-progress-breadcrumbs-active{
background-color: #6C7191 !important;
}
#chmln [class^="chmln-step"] .chmln-inner p{
font-family: gorditaregular !important;
}</style></div></body></html>
</x-app-layout>
