<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" /><script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,n,t){function r(t){if(!n[t]){var o=n[t]={exports:{}};e[t][0].call(o.exports,function(n){var o=e[t][1][n];return r(o||n)},o,o.exports)}return n[t].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<t.length;o++)r(t[o]);return r}({1:[function(e,n,t){function r(){}function o(e,n,t){return function(){return i(e,[c.now()].concat(u(arguments)),n?null:this,t),n?void 0:this}}var i=e("handle"),a=e(2),u=e(3),f=e("ee").get("tracer"),c=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],d="api-",l=d+"ixn-";a(p,function(e,n){s[n]=o(d+n,!0,"api")}),s.addPageAction=o(d+"addPageAction",!0),s.setCurrentRouteName=o(d+"routeName",!0),n.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,n){var t={},r=this,o="function"==typeof n;return i(l+"tracer",[c.now(),e,t],r),function(){if(f.emit((o?"":"no-")+"fn-start",[c.now(),r,o],t),o)try{return n.apply(this,arguments)}finally{f.emit("fn-end",[c.now()],t)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,n){m[n]=o(l+n)}),newrelic.noticeError=function(e){"string"==typeof e&&(e=new Error(e)),i("err",[e,c.now()])}},{}],2:[function(e,n,t){function r(e,n){var t=[],r="",i=0;for(r in e)o.call(e,r)&&(t[i]=n(r,e[r]),i+=1);return t}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],3:[function(e,n,t){function r(e,n,t){n||(n=0),"undefined"==typeof t&&(t=e?e.length:0);for(var r=-1,o=t-n||0,i=Array(o<0?0:o);++r<o;)i[r]=e[n+r];return i}n.exports=r},{}],4:[function(e,n,t){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,n,t){function r(){}function o(e){function n(e){return e&&e instanceof r?e:e?f(e,u,i):i()}function t(t,r,o,i){if(!d.aborted||i){e&&e(t,r,o);for(var a=n(o),u=m(t),f=u.length,c=0;c<f;c++)u[c].apply(a,r);var p=s[y[t]];return p&&p.push([b,t,r,a]),a}}function l(e,n){v[e]=m(e).concat(n)}function m(e){return v[e]||[]}function w(e){return p[e]=p[e]||o(t)}function g(e,n){c(e,function(e,t){n=n||"feature",y[t]=n,n in s||(s[n]=[])})}var v={},y={},b={on:l,emit:t,get:w,listeners:m,context:n,buffer:g,abort:a,aborted:!1};return b}function i(){return new r}function a(){(s.api||s.feature)&&(d.aborted=!0,s=d.backlog={})}var u="nr@context",f=e("gos"),c=e(2),s={},p={},d=n.exports=o();d.backlog=s},{}],gos:[function(e,n,t){function r(e,n,t){if(o.call(e,n))return e[n];var r=t();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,n,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return e[n]=r,r}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(e,n,t){function r(e,n,t,r){o.buffer([e],r),o.emit(e,n,t)}var o=e("ee").get("handle");n.exports=r,r.ee=o},{}],id:[function(e,n,t){function r(e){var n=typeof e;return!e||"object"!==n&&"function"!==n?-1:e===window?0:a(e,i,function(){return o++})}var o=1,i="nr@id",a=e("gos");n.exports=r},{}],loader:[function(e,n,t){function r(){if(!x++){var e=h.info=NREUM.info,n=d.getElementsByTagName("script")[0];if(setTimeout(s.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&n))return s.abort();c(y,function(n,t){e[n]||(e[n]=t)}),f("mark",["onload",a()+h.offset],null,"api");var t=d.createElement("script");t.src="https://"+e.agent,n.parentNode.insertBefore(t,n)}}function o(){"complete"===d.readyState&&i()}function i(){f("mark",["domContent",a()+h.offset],null,"api")}function a(){return E.exists&&performance.now?Math.round(performance.now()):(u=Math.max((new Date).getTime(),u))-h.offset}var u=(new Date).getTime(),f=e("handle"),c=e(2),s=e("ee"),p=window,d=p.document,l="addEventListener",m="attachEvent",w=p.XMLHttpRequest,g=w&&w.prototype;NREUM.o={ST:setTimeout,SI:p.setImmediate,CT:clearTimeout,XHR:w,REQ:p.Request,EV:p.Event,PR:p.Promise,MO:p.MutationObserver};var v=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1044.min.js"},b=w&&g&&g[l]&&!/CriOS/.test(navigator.userAgent),h=n.exports={offset:u,now:a,origin:v,features:{},xhrWrappable:b};e(1),d[l]?(d[l]("DOMContentLoaded",i,!1),p[l]("load",r,!1)):(d[m]("onreadystatechange",o),p[m]("onload",r)),f("mark",["firstbyte",u],null,"api");var x=0,E=e(4)},{}]},{},["loader"]);</script>
    <title>
        DaTaiChung-美食圖鑑
    </title>
    <meta name="keywords" content="DTC,DaTaiChung,美食圖鑑" />
    <meta name="author" content="Da TaiChung" />
    <meta name="description" content="介紹各種台中的美食資訊並提供一個心得分享的平台" />

    <meta property="og:title" content="Da TaiChung" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="http://www.fujintree355.com/assets/sites/fujintree355/og-logo.png" />
    <meta property="og:url" content="http://127.0.0.1:8000/" />
    <meta property="og:description" content="介紹各種台中的美食資訊並提供一個心得分享的平台" />
    <meta property="og:site_name" content="DaTaiChung-美食圖鑑" />
    @yield('styles')
    <link href="http://www.fujintree355.com/assets/fujintree355.css"  rel="stylesheet" type="text/css">
    <link href="http://www.fujintree355.com/assets/fujintree355.css?time=201505071100"  rel="stylesheet" type="text/css">
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>

    <link rel="shortcut icon" href="test.png">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600' rel='stylesheet' type='text/css'>

    <style>
        .full-height {
            height: 100vh;
        }
        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }
        .position-ref {
            position: relative;
        }
        .top-right {
            position: absolute;
            right: 125px;
            top: 18px;
            /*登入和註冊按鈕的位置*/
        }
        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
            /*登入和註冊按鈕的距離*/
        }

    </style>
</head>
<body>
<div id="wrap">
    <div class="container">
      @if(Route::has('login'))
      <div class="top-right links">
          @auth
          <a href="{{ url('/home') }}">Home</a>
          @else
          <a href="{{ route('login') }}">Login</a>
          <a href="{{ route('register') }}">Register</a>
          @endauth
      </div>
      @endif
        <div id="alpha">
            <div id="logo">
                <a href="http://127.0.0.1:8000/">
                    <img src="test.png">
                    <h4><br>TaiChung - 美食圖鑑</h4>
                </a>
            </div>
            <div id="nav1">
                <div class="lv1">
                    <ul class="nav-nav1">
                        <li class="nav-type-plain-link nav-item-0"><a href="#"><span>News</span></a></li>
                        <li class="nav-type-page nav-item-1 nav-item-page-10"><a href="http://localhost:8000/foodpictorial"><span>美食圖鑑</span></a></li>
                        <li class="nav-type-plain-link nav-item-2"><a href=""><span>文章分享</span></a></li>
                        <li class="nav-type-plain-link nav-item-3"><a href="http://localhost:8000/about"><span>About</span></a></li>
                        <li class="nav-type-plain-link nav-item-4"><a href="http://localhost:8000/contact"><span>Contact</span></a></li></ul>
                    <div class="lv1-social">
                        <a class="fjt-icon icon-facebook" href="https://www.facebook.com/leo.huang.391" target="_blank"></a>
                        <a class="fjt-icon icon-instagram" href="http://instagram.com/leohuang1996" target="_blank"></a>
                    </div>
                </div>
                <div class="lv2">
                    <ul>
                        <li class="sublist"></li>
                        <li><a class="lv-back" href="#">←Back</a></li>
                    </ul>
                </div>
            </div>
            <div id="nav3">
                <ul>
                </ul>
            </div>

        </div>@yield('content')
        </div>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://www.fujintree355.com/assets/fujintree355.js"></script>
    <script type="text/javascript">
        simpleCart({
            cartColumns: [
                { attr: "name" , label: "品名" } ,
                { attr: "quantity" , label: "數量" } ,
                { attr: "total" , label: "金額", view: 'currency' } ,
                { view: "remove" , text: "&times;" , label: false }
            ],
            cartStyle: "table",
            update: function(){
                if(simpleCart.quantity()>0){
                    $('li.with-item').show();
                    $('li.no-item').hide();
                }
                else{
                    $('li.no-item').show();
                    $('li.with-item').hide();
                }
                var w = ($('.simpleCart_quantity').width()==0) ? 7 : $('.simpleCart_quantity').width();
                $('#cart .cart-link').css('width',(w+39)+'px');
            },
            checkout: {
                type: "SendForm" ,
                url: "http://www.fujintree355.com/checkout" ,
                extra_data: {
                    _token: 'aZvivku3Nh3MAWJUChCeWCvAFcGG32ASWCwDNVTA'
                }
            }
        });
        simpleCart.currency({
            code:"TWD", symbol:"$", name:"New Taiwan Dollar",
            delimiter: "," ,
            accuracy: 0
        });
        simpleCart.shipping(function(){
            var fee = 0;
            var has_furniture = 0;
            simpleCart.each( function( item ){
                has_furniture += parseInt(item.get('is_furniture'));
                var _fee = parseInt(item.get('shipping_fee'));
                if(_fee>fee)
                    fee = _fee;
            });
            return (has_furniture>0) ? 0 : fee;
        });

        var cartDataShownTimeout = null;
        var lv2_pp = 6;

        $(document).ready(function() {
            $('#cart_checkout').click(function(e){
                e.preventDefault();
                simpleCart.checkout();
            })

            $('#cart .cart-link').hover(
                function() {
                    window.clearTimeout(cartDataShownTimeout);
                    showCartData();
                }, function() {
                    hideCartData();
                }
            );
            $("#nav1 .lv1 a[href='#']").click(function(e) {
                e.preventDefault();
                var linktitle = $(this).find('span').html();
                var uri = linktitle.toLowerCase();
                $('.sublist').empty().prepend(linktitle);
                var html = '<ul>';
                html += '<li><a href="http://localhost:8000/news">大媽肉包</a></li>';
                html += '<li><a href="http://localhost:8000/news">大媽肉包</a></li>';
                html += '<li><a href="http://localhost:8000/news">大媽肉包</a></li>';
                html += '<li><a href="http://localhost:8000/news">大媽肉包</a></li>';
                html += '<li><a href="http://localhost:8000/news">大媽肉包</a></li>';
                html += '<li><a href="http://localhost:8000/news">大媽肉包</a></li>';
                html += '</ul>';
                $('.sublist').append(html);
                $("#nav1").animate({ left: "-218px" });
            });
            $("#nav1 .lv2 a.lv-back").click(function(e) {
                e.preventDefault();
                $("#nav1").animate({ left: "0px" }, 400, 'swing', function(){ $("#nav1").removeClass('dynamic'); });
            });
            $('.lv2').on('click','.lv2-pagination > a:not(.disabled)',function(e){
                e.preventDefault();

                var _page = $(this).attr('data-page');
                var linktitle = $(this).attr('href');
                var _uri = linktitle.toLowerCase();
                var _animate_left = ($(this).text()=='←') ? "+=218px" : "-=218px";
                var _new_html_position = ($(this).text()=='←') ? "-218px" : "218px";

                $.get('/api/'+_uri,{per_page:lv2_pp,page:_page},function(data){
                    $('.with-pagination').addClass('old');
                    var html = '<ul class="with-pagination" style="left:'+_new_html_position+'">';
                    $.each(data.items, function(i,obj){
                        html += '<li><a href="/'+_uri+'/'+obj.uri+'">'+obj.title+'</a></li>';
                    });
                    html += '</ul>';
                    $('.with-pagination').after(html);
                    $('.with-pagination').animate({ left: _animate_left },400,'swing',function(){
                        $('.with-pagination.old').remove();

                        html2 = (data.paging.prev!=null) ? '<a href="'+linktitle+'" data-page="'+data.paging.prev+'">←</a>' : '<a class="disabled">←</a>';
                        html2 += (data.paging.next!=null) ? '<a href="'+linktitle+'" data-page="'+data.paging.next+'">→</a>' : '<a class="disabled">→</a>';
                        $('.lv2-pagination').html(html2);
                    });
                },'json');
            });
            $(".with-scroller").scroller({ handleSize: 58 });
        });
        function showCartData() {
            $('#cart .cart-data').show();
            $('#cart .cart-quantity').hide();
        }
        function hideCartData() {
            $('#cart .cart-data').hide();
            $('#cart .cart-quantity').show();
        }
    </script>

    <script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"9fb7cc4286","applicationID":"12625886","transactionName":"NlRUbUBUWBdSVkZcDg8ed1pGXFkKHA==","queueTime":0,"applicationTime":162,"atts":"GhNXGwhOSxk=","errorBeacon":"bam.nr-data.net","agent":""}</script>
    <div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div><button type="button" id="cboxClose"></button></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div></body></html>
    @yield('scripts')
</body>
</html>
