<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8" /><script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,n,t){function r(t){if(!n[t]){var o=n[t]={exports:{}};e[t][0].call(o.exports,function(n){var o=e[t][1][n];return r(o||n)},o,o.exports)}return n[t].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<t.length;o++)r(t[o]);return r}({1:[function(e,n,t){function r(){}function o(e,n,t){return function(){return i(e,[c.now()].concat(u(arguments)),n?null:this,t),n?void 0:this}}var i=e("handle"),a=e(2),u=e(3),f=e("ee").get("tracer"),c=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],d="api-",l=d+"ixn-";a(p,function(e,n){s[n]=o(d+n,!0,"api")}),s.addPageAction=o(d+"addPageAction",!0),s.setCurrentRouteName=o(d+"routeName",!0),n.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,n){var t={},r=this,o="function"==typeof n;return i(l+"tracer",[c.now(),e,t],r),function(){if(f.emit((o?"":"no-")+"fn-start",[c.now(),r,o],t),o)try{return n.apply(this,arguments)}finally{f.emit("fn-end",[c.now()],t)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,n){m[n]=o(l+n)}),newrelic.noticeError=function(e){"string"==typeof e&&(e=new Error(e)),i("err",[e,c.now()])}},{}],2:[function(e,n,t){function r(e,n){var t=[],r="",i=0;for(r in e)o.call(e,r)&&(t[i]=n(r,e[r]),i+=1);return t}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],3:[function(e,n,t){function r(e,n,t){n||(n=0),"undefined"==typeof t&&(t=e?e.length:0);for(var r=-1,o=t-n||0,i=Array(o<0?0:o);++r<o;)i[r]=e[n+r];return i}n.exports=r},{}],4:[function(e,n,t){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,n,t){function r(){}function o(e){function n(e){return e&&e instanceof r?e:e?f(e,u,i):i()}function t(t,r,o,i){if(!d.aborted||i){e&&e(t,r,o);for(var a=n(o),u=m(t),f=u.length,c=0;c<f;c++)u[c].apply(a,r);var p=s[y[t]];return p&&p.push([b,t,r,a]),a}}function l(e,n){v[e]=m(e).concat(n)}function m(e){return v[e]||[]}function w(e){return p[e]=p[e]||o(t)}function g(e,n){c(e,function(e,t){n=n||"feature",y[t]=n,n in s||(s[n]=[])})}var v={},y={},b={on:l,emit:t,get:w,listeners:m,context:n,buffer:g,abort:a,aborted:!1};return b}function i(){return new r}function a(){(s.api||s.feature)&&(d.aborted=!0,s=d.backlog={})}var u="nr@context",f=e("gos"),c=e(2),s={},p={},d=n.exports=o();d.backlog=s},{}],gos:[function(e,n,t){function r(e,n,t){if(o.call(e,n))return e[n];var r=t();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,n,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return e[n]=r,r}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(e,n,t){function r(e,n,t,r){o.buffer([e],r),o.emit(e,n,t)}var o=e("ee").get("handle");n.exports=r,r.ee=o},{}],id:[function(e,n,t){function r(e){var n=typeof e;return!e||"object"!==n&&"function"!==n?-1:e===window?0:a(e,i,function(){return o++})}var o=1,i="nr@id",a=e("gos");n.exports=r},{}],loader:[function(e,n,t){function r(){if(!x++){var e=h.info=NREUM.info,n=d.getElementsByTagName("script")[0];if(setTimeout(s.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&n))return s.abort();c(y,function(n,t){e[n]||(e[n]=t)}),f("mark",["onload",a()+h.offset],null,"api");var t=d.createElement("script");t.src="https://"+e.agent,n.parentNode.insertBefore(t,n)}}function o(){"complete"===d.readyState&&i()}function i(){f("mark",["domContent",a()+h.offset],null,"api")}function a(){return E.exists&&performance.now?Math.round(performance.now()):(u=Math.max((new Date).getTime(),u))-h.offset}var u=(new Date).getTime(),f=e("handle"),c=e(2),s=e("ee"),p=window,d=p.document,l="addEventListener",m="attachEvent",w=p.XMLHttpRequest,g=w&&w.prototype;NREUM.o={ST:setTimeout,SI:p.setImmediate,CT:clearTimeout,XHR:w,REQ:p.Request,EV:p.Event,PR:p.Promise,MO:p.MutationObserver};var v=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1044.min.js"},b=w&&g&&g[l]&&!/CriOS/.test(navigator.userAgent),h=n.exports={offset:u,now:a,origin:v,features:{},xhrWrappable:b};e(1),d[l]?(d[l]("DOMContentLoaded",i,!1),p[l]("load",r,!1)):(d[m]("onreadystatechange",o),p[m]("onload",r)),f("mark",["firstbyte",u],null,"api");var x=0,E=e(4)},{}]},{},["loader"]);</script>
    <title>
        DaTaiChung-美食圖鑑
    </title>
    <meta name="keywords" content="富錦街, 雜貨, 生活質感" />
    <meta name="author" content="Fujin Tree 355" />
    <meta name="description" content="富錦樹355 藏身於日光洗禮下卻又綠蔭盎然的富錦街，在這充滿40年歷史懷舊卻又舒適的空間裡，我們遇見了台灣許多美好的事物，也有許多具有國外獨特氣氛，可以為我們日常生活增添色彩的好東西。" />

    <!-- Mobile Specific Metas
    ================================================== -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->

    <!-- FB:OG Specific Metas
    ================================================== -->
    <meta property="og:title" content="Da TaiChung" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="http://www.fujintree355.com/assets/sites/fujintree355/og-logo.png" />
    <meta property="og:url" content="http://127.0.0.1:8000/" />
    <meta property="og:description" content="介紹各種台中的美食資訊並提供一個心得分享的平台" />
    <meta property="og:site_name" content="DaTaiChung-美食圖鑑" />

{{--在355滿五週年的這個時候，我們將與手工飾品品牌 lightforce 一飾愛 合作展開一場夏日的輕筵席！以「你就是禮物」作為主軸，設計師 Monica 創作賦予正面能量的作品，選用來自世界各地的礦石及水晶，循著直覺去編織線材，以色彩溫柔調和，每一件都是獨一無二、乘載著不同訊息和心意的作品。--}}
{{--活動日期：7/22-8/13&nbsp;--}}
{{--設計師駐店日：7/22-23、7/29、8/12 12:00-18:00--}}
{{--(現場提供飾品客製化)--}}
{{--設計師駐店地址：台北市松山區富錦街355號" />--}}
{{--<meta property="og:site_name" content="Fujin Tree 355" />--}}


<!-- CSS
    ================================================== -->
    <link href="http://www.fujintree355.com/assets/fujintree355.css"  rel="stylesheet" type="text/css">

    <link href="http://www.fujintree355.com/assets/fujintree355.css?time=201505071100"  rel="stylesheet" type="text/css">
    <!--<style>
                    </style>-->

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Favicons
    ================================================== -->
    {{--<link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://www.fujintree355.com/assets/sites/fujintree355/favicons/apple-touch-icon-144-precomposed.png">--}}
    {{--<link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://www.fujintree355.com/assets/sites/fujintree355/favicons/apple-touch-icon-114-precomposed.png">--}}
    {{--<link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://www.fujintree355.com/assets/sites/fujintree355/favicons/apple-touch-icon-72-precomposed.png">--}}
    {{--<link rel="apple-touch-icon-precomposed" href="http://www.fujintree355.com/assets/sites/fujintree355/favicons/apple-touch-icon-57-precomposed.png">--}}
    {{--<link rel="shortcut icon" href="http://www.fujintree355.com/assets/sites/fujintree355/favicons/favicon.png">--}}

    <link rel="shortcut icon" href="test.png">
{{--頁面上方圖示--}}
<!-- Web Fonts
    ================================================== -->
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
        }

        .links > a {
            color: #636b6f;
            padding: 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

    </style>


</head>

<body>
<!-- To make sticky footer need to wrap in a div -->
<div id="wrap" class="wider">

    <!-- Container -->
    <div class="container">

        <!-- Notifications -->
        <!-- ./ notifications -->

        <!-- Content -->
        <div id="alpha">
            <div id="logo">
                <a href="http://127.0.0.1:8000/">
                    <!-- <img src="http://www.fujintree355.com/assets/sites/fujintree355/logo.png"> -->
                    <img src="test.png">
                    <h4><br>TaiChung - 美食圖鑑</h4>
                </a>
            </div>
            <div id="nav1" style="left: -218px;">
                <div class="lv1">
                    <ul class="nav-nav1"><li class="nav-type-plain-link nav-item-0"><a href="#"><span>News</span></a></li><li class="nav-type-page nav-item-1 nav-item-page-10"><a href="http://www.fujintree355.com/access"><span>Access</span></a></li><li class="nav-type-plain-link nav-item-2"><a href="http://www.fujintree355.com/catalogue"><span>Catalogue</span></a></li><li class="nav-type-plain-link nav-item-3"><a href="#"><span>Gallery</span></a></li><li class="nav-type-plain-link nav-item-4"><a href="#"><span>Memo</span></a></li></ul>
                    <div class="lv1-social">
                        <a class="fjt-icon icon-facebook" href="https://www.facebook.com/FujinTree355" target="_blank"></a>
                        <a class="fjt-icon icon-blogger" href="http://fujintree355.blogspot.tw/" target="_blank"></a>
                        <a class="fjt-icon icon-instagram" href="http://instagram.com/fujintree355" target="_blank"></a>
                    </div>
                </div>
                <div class="lv2">
                    <ul>
                        <li class="sublist">
                            美食圖鑑
                            <ul class="with-pagination">
                                <li><a href="http://localhost:8000/foodpictorial">太平區</a></li>
                                <li><a href="http://localhost:8000/foodpictorial1">中區</a></li>
                                <li><a href="http://localhost:8000/foodpictorial">北屯</a></li>
                                <li><a href="http://localhost:8000/foodpictorial">南屯</a></li>
                                <li><a href="http://localhost:8000/foodpictorial">西屯</a></li>
                                <li><a href="http://localhost:8000/foodpictorial">北區</a></li>
                            </ul>
                            <div class="lv2-pagination">
                                <!--                                <a class="disabled">←</a>-->
                                <!--                                <a href="News" data-page="2">→</a>-->
                            </div>
                        </li>
                        <li><a href="http://localhost:8000/">&larr;Back</a></li>
                    </ul>
                </div>
            </div>
            <!--            <div id="nav2">-->
            <!--                <ul class="nav-nav2"><li class="nav-type-page nav-item-0 nav-item-page-7">-->
            <!--                        <a href="http://www.fujintree355.com/about"><span>About</span></a>-->
            <!--                    </li><li class="nav-type-page nav-item-1 nav-item-page-8">-->
            <!--                        <a href="http://www.fujintree355.com/contact"><span>Contact</span></a></li></ul>-->
        </div>
        <div id="nav3">
            <ul>
            </ul>
        </div>
    </div>

    <div id="beta" class="wider">
        <div id="content">
            <div id="article-area">
                <div id="article-box">
                    <div class="article" id="article-160719188">
                        <ul class="article-head">
                            <li class="publish"><span class="month">Jan </span><span class="date">05 </span><span class="day">Fri </span><span class="year">2018 </span><span class="time">01:35</span></li>
                            <p>&nbsp;</p>
                            <li class="title" id="article-160719188" data-hot-link="//www.pixnet.net/blog/articles/category/0" data-site-category="美味食記" data-site-category-id="26" data-article-link="http://iamyuyi.pixnet.net/blog/post/160719188"><h2><a href="http://iamyuyi.pixnet.net/blog/post/160719188-%e3%80%90%e5%8f%b0%e4%b8%ad-%e5%8c%97%e6%b5%b7%e9%81%93-%e4%b9%b3%e9%85%aa%e8%9b%8b%e7%b3%95%e3%80%91%e6%9d%8f%e5%b1%8b%e9%bb%8e%e6%98%8e%e5%ba%97%e3%80%82%e7%b4%94%e6%b7%a8">【台中中區 久流小吃】CP值超高／料爆多的什錦麵。平價美食之旅!</a></h2></li>
                        </ul>
                        <div class="article-body">
                            <div class="article-content">

                                <div class="article-content-inner">
                                    <p>&nbsp;</p>
                                    <p><img alt="S__42410078.jpg" height="450" src="http://iphoto.ipeen.com.tw/photo/comment/591426/759714/cgmf18c9b0bd8a9da7f6c5ed663528bf974828.png" title="S__42410078.jpg" width="600" style="width: 400px; height: 300px;"></p>
                                    <p>&nbsp;</p>
                                    <div class="more"><a href="http://localhost:8000/def">(繼續閱讀...)</a></div>
                                </div>
                            </div> <!-- .article-content //-->
                            {{--<p class="author">--}}
                                {{--iamyuyiiiiiiiii 發表在 <a href="http://www.pixnet.net/">痞客邦 PIXNET</a>                    <a href="http://iamyuyi.pixnet.net/blog/post/160719188-%e3%80%90%e5%8f%b0%e4%b8%ad-%e5%8c%97%e6%b5%b7%e9%81%93-%e4%b9%b3%e9%85%aa%e8%9b%8b%e7%b3%95%e3%80%91%e6%9d%8f%e5%b1%8b%e9%bb%8e%e6%98%8e%e5%ba%97%e3%80%82%e7%b4%94%e6%b7%a8#comments">留言</a>(0) <span class="author-views">人氣(<span id="BlogArticleCount-160719188">969</span>)</span>--}}
                            {{--</p> <!-- .author //-->--}}
                        </div> <!-- .article-body //-->
                        <div class="article-footer">
                            <ul class="refer">
                            </ul>
                            <div class="back-to-top"><a href="#top" title="back to the top of the page">▲top</a></div>
                        </div> <!-- .article-footer //-->
                        <HR color="#a9a9a9" size="5" >
                    </div>
                    <div class="article" id="article-160719188">
                        <ul class="article-head">
                            <li class="publish"><span class="month">Jan </span><span class="date">04 </span><span class="day">Thu </span><span class="year">2018 </span><span class="time">01:35</span></li>
                            <p>&nbsp;</p>
                            <li class="title" id="article-160719188" data-hot-link="//www.pixnet.net/blog/articles/category/0" data-site-category="美味食記" data-site-category-id="26" data-article-link="http://iamyuyi.pixnet.net/blog/post/160719188"><h2><a href="http://iamyuyi.pixnet.net/blog/post/160719188-%e3%80%90%e5%8f%b0%e4%b8%ad-%e5%8c%97%e6%b5%b7%e9%81%93-%e4%b9%b3%e9%85%aa%e8%9b%8b%e7%b3%95%e3%80%91%e6%9d%8f%e5%b1%8b%e9%bb%8e%e6%98%8e%e5%ba%97%e3%80%82%e7%b4%94%e6%b7%a8">【 台中中區 aqua水相餐廳】創意義式料理、經典法式排餐!</a></h2></li>
                        </ul>
                        <div class="article-body">
                            <div class="article-content">

                                <div class="article-content-inner">
                                    <p>&nbsp;</p>
                                    <p><img alt="S__42410078.jpg" height="450" src="http://iphoto.ipeen.com.tw/photo/comment/1219750/1312439/cm20170220___913b611ea38451cd131f4aa061ae01e9461.jpg" title="S__42410078.jpg" width="600" style="width: 400px; height: 300px;"></p>
                                    <p>&nbsp;</p>
                                    <div class="more"><a href="">(繼續閱讀...)</a></div>
                                </div>
                            </div> <!-- .article-content //-->
                        </div> <!-- .article-body //-->
                        <div class="article-footer">
                            <ul class="refer">
                            </ul>
                            <div class="back-to-top"><a href="#top" title="back to the top of the page">▲top</a></div>
                            <HR color="#a9a9a9" size="5" >
                        </div> <!-- .article-footer //-->
                    </div>
                </div> <!-- #article-box //-->
            </div> <!-- #article-area //-->
        </div>
    </div>

    <!-- ./ content -->
</div>
<!-- ./ container -->

</div>
<!-- ./wrap -->

<!-- Javascripts
================================================== -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://www.fujintree355.com/assets/fujintree355.js" ></script>

<!-- Google Analytics
================================================== -->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-46825823-1', 'fujintree355.com');
    ga('send', 'pageview');

</script>

<!-- Other Globals
================================================== -->
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
            if(uri=='online shop'){
                var html = '<ul>';
                html += '<li><a href="/products">All Items</a></li>';
                html += '<li><a href="/brands">Brands</a></li>';
                html += '</ul>';
                $('.sublist').append(html);
                $("#nav1").animate({ left: "-218px" });
            }
            else{
                $.get('/api/'+uri,{per_page:lv2_pp},function(data){
                    var html = (data.paging.total>6) ? '<ul class="with-pagination">' : '<ul>';
                    $.each(data.items, function(i,obj){
                        html += '<li><a href="/'+uri+'/'+obj.uri+'">'+obj.title+'</a></li>';
                    });
                    html += '</ul>';
                    if(data.paging.total>6){
                        html += '<div class="lv2-pagination">';
                        html += (data.paging.prev!=null) ? '<a href="'+linktitle+'" data-page="'+data.paging.prev+'">←</a>' : '<a class="disabled">←</a>';
                        html += (data.paging.next!=null) ? '<a href="'+linktitle+'" data-page="'+data.paging.next+'">→</a>' : '<a class="disabled">→</a>';
                        html += '</div>';
                    }
                    $('.sublist').append(html);
                    $("#nav1").animate({ left: "-218px" });
                },'json');
            }
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

<!-- Page Specific
================================================== -->
<script type="text/javascript">
    $(document).ready(function() {

    });
</script>

<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"9fb7cc4286","applicationID":"12625886","transactionName":"NlRUbUBUWBdSVkZcDg8ed1pGXFkKHGVdRhUiXlhNQFpaCFZHckYJDkZ0QGdHXw==","queueTime":0,"applicationTime":160,"atts":"GhNXGwhOSxk=","errorBeacon":"bam.nr-data.net","agent":""}</script></body>
</html>
