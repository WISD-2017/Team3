<!DOCTYPE html>
@extends('front')

@section('content')
    <section class="container">
        <div id="beta">
            <div id="slides" style="width:660px;height:auto;display:none">
                <!-- <a href="http://www.fujintree355.com/catalogue/184/show" class="image" style="background-image:url('/uploads/s4/4ae6a9f1dc078aa80b61bf7990a1e18e1a5fd6cd/d6229e3661282540d51400d5790445.jpg');display:block"></a>
                        <a href="https://www.facebook.com/FujinTree355/" class="image" style="background-image:url('/uploads/s4/8ba8e8c9caf68c449b357148e00273730c7b7ef6/1b2096fe51577795655b5828efb845.jpg');display:none"></a>
                        <a href="https://www.facebook.com/FujinTree355/" class="image" style="background-image:url('/uploads/s4/fe7120dfeb03aef862c66bb5fb200d5446eac202/2a8520e3f0a8cacd21393433c82d21.jpg');display:none"></a> -->
                <div class="image" style="background-image:url('/uploads/Test/wuma.jpg');display:block"></div>
                <div class="image" style="background-image:url('/uploads/Test/gting.jpg');display:none"></div>
                <div class="image" style="background-image:url('/uploads/Test/fongwei.jpg');display:none"></div>
                <div class="image" style="background-image:url('/uploads/Test/smellgood.jpg');display:none"></div>
                <div class="image" style="background-image:url('/uploads/Test/curry.jpg');display:none"></div>
                <div class="image" style="background-image:url('/uploads/Test/school.jpg');display:none"></div>
                <div class="image" style="background-image:url('/uploads/Test/jack.jpg');display:none"></div>
            </div>
            <div class="fjt-slide-caption" style="display:block">
                <h2>屋馬燒肉</h2>
                <!-- <h2>極匠炎燒<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp台中限定</h2> -->
                <div>極匠炎燒<br><br>台中限定</div>
            </div>
            <div class="fjt-slide-caption" style="display:none">
                <h2>偈亭-泡菜鍋</h2>
                <div>超人氣平價小火鍋</div>
            </div>
            <div class="fjt-slide-caption" style="display:none">
                <h2>豐味</h2>
                <div>綠豆沙牛奶<br><br>古味紅奶茶</div>
            </div>
            <div class="fjt-slide-caption" style="display:none">
                <h2>有阿罵ㄉ味道</h2>
                <div></div>
            </div>
            <div class="fjt-slide-caption" style="display:none">
                <h2>特色咖哩專賣店</h2>
                <div></div>
            </div>
            <div class="fjt-slide-caption" style="display:none">
                <h2>校園自助餐，便宜</h2>
                <div></div>
            </div>
            <div class="fjt-slide-caption" style="display:none">
                <h2>奶茶有毒...</h2>
                <div></div>
            </div>
            <!-- ./ content -->
        </div>
    </section>
@stop

@section('scripts')
    <script type="text/javascript">
        var resume_play; var doing_transition = false; var mouseoverslides = false;
        $(document).ready(function() {
            // setInterval(crossfadeSlides, 5000);
            $("#slides").slidesjs({
                width: 660,
                height: 440,
                navigation: { active: false, effect: 'fade' },
                pagination: { active: true, effect: 'fade' },
                play: {
                    active: true,
                    effect: 'fade',
                    interval: 4100,
                    auto: true,
                    swap: false
                },
                effect: {
                    fade: { speed: 1600, crossfade: true }
                },
                callback: {
                    start: function(number){
                        doing_transition = true;
                        $('.fjt-slide-caption').fadeOut(400);
                    },
                    complete: function(number){
                        doing_transition = false;
                        $('.fjt-slide-caption:eq('+(number-1)+')').fadeIn(400);
                    }
                }
            });

            $('#slides .image, .fjt-slide-caption').hover(
                function() {
                    mouseoverslides = true;
                    $(".slidesjs-stop").click();
                    clearTimeout(resume_play);
                }, function() {
                    mouseoverslides = false;
                    resume_play = setTimeout("slidesJSResumePlay()",2000);
                }
            );

            $('.slidesjs-pagination-item>a').hover(
                function() {
                    mouseoverslides = true;
                    clearTimeout(resume_play);
                },
                function() {
                    mouseoverslides = false;
                    resume_play = setTimeout("slidesJSResumePlay()",2000);
                }
            );
        });
        function slidesJSResumePlay()   {
            $(".slidesjs-play").click();
        }
        function crossfadeSlides() {
            var curr_week_starting_num = 1;
            var next_index = $('#slides').children(':visible').index() + 1;
            if(next_index==7) next_index = 0;
            $('#slides .image').fadeOut(2000);
            $('#slides .image:eq('+next_index+')').fadeIn(2000, function(){ $('#slide_num').html(pad((next_index+curr_week_starting_num)+'', 3)); });
        }
        function pad (str, max) {
            return str.length < max ? pad("0" + str, max) : str;
        }
    </script>

@stop