@extends('front.base')
@section('content')
    <!--main -->
    <div class="wap_big_box">
        <!-- start -->
        <div class="w1160 clearfix">
            <span class="bk20">&nbsp;</span>
            <!-- banner -->
            <div id="slideBox" class="slideBox">
                <div class="hd">
                    <ul><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li></ul>
                </div>
                <div class="bd">
                    <ul>
                        <li><a href="" ><img src="{{  $slides[0]->thumbnail }}"></a></li>
                        <li><a href="" ><img src="{{  $slides[1]->thumbnail }}"></a></li>
                        <li><a href="" ><img src="{{  $slides[2]->thumbnail }}"></a></li>
                        <li><a href="" ><img src="{{  $slides[3]->thumbnail }}"></a></li>
                    </ul>
                </div>
            </div>
            <script type="text/javascript">jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true});</script>
            <span class="bk50">&nbsp;</span>
            <!-- 拓展项目 -->
            <div class="expendout">
                <div class="ho_tit_all">
                    <h2 class="ho_tit_all"><a href=""><img src="images/ho_tit_1.png"></a></h2>
                </div>
                <span class="bk30">&nbsp;</span>
                <ul class="list clearfix">
                    <li><a href="{{  $expands[0]->link }}" class="big"><img src="{{  $expands[0]->thumbnail }}" alt="" /></a></li>
                    <li><a href="{{  $expands[1]->link }}"><img src="{{  $expands[1]->thumbnail }}" alt="" /></a></li>
                    <li><a href="{{  $expands[2]->link }}"><img src="{{  $expands[2]->thumbnail }}" alt="" /></a></li>
                    <li><a href="{{  $expands[3]->link }}"><img src="{{  $expands[3]->thumbnail }}" alt="" /></a></li>
                    <li><a href="{{  $expands[4]->link }}" class="big"><img src="{{  $expands[4]->thumbnail }}" alt="" /></a></li>
                    <li><a href="{{  $expands[5]->link }}"><img src="{{  $expands[5]->thumbnail }}" alt="" /></a></li>
                </ul>
            </div>
        </div>
        <span class="bk50">&nbsp;</span>
        <div class="ho_ad_1">&nbsp;</div>
        <span class="bk50">&nbsp;</span>
        <div class="w1160 clearfix">
            <!-- 基地 -->
            <div class="baseout">
                <div class="ho_tit_all">
                    <h2 class="ho_tit_all"><a href="/base_xisan"><img src="/images/ho_tit_2.png"></a></h2>
                </div>
                <span class="bk30">&nbsp;</span>
                <div class="slideTxtBox">
                    <div class="hd">
                        <ul><li>西山基地</li><li>搬罾青山湖基地</li><li>搬罾果乐园基地</li></ul>
                    </div>
                    <div class="bd">
                        <ul>
                            <li><span><img src="{{  $bases[0][0]->thumbnail }}"></span></li>
                            <li><span><img src="{{  $bases[0][1]->thumbnail }}"></span></li>
                            <li><span><img src="{{  $bases[0][2]->thumbnail }}"></span></li>
                            <li><span><img src="{{  $bases[0][3]->thumbnail }}"></span></li>
                            <li><span><img src="{{  $bases[0][4]->thumbnail }}"></span></li>
                            <li><span><img src="{{  $bases[0][5]->thumbnail }}"></span></li>
                        </ul>
                        <ul>
                            <li><span><img src="{{  $bases[1][0]->thumbnail }}"></span></li>
                            <li><span><img src="{{  $bases[1][1]->thumbnail }}"></span></li>
                            <li><span><img src="{{  $bases[1][2]->thumbnail }}"></span></li>
                            <li><span><img src="{{  $bases[1][3]->thumbnail }}"></span></li>
                            <li><span><img src="{{  $bases[1][4]->thumbnail }}"></span></li>
                            <li><span><img src="{{  $bases[1][5]->thumbnail }}"></span></li>
                        </ul>
                        <ul>
                            <li><span><img src="{{  $bases[2][0]->thumbnail }}"></span></li>
                            <li><span><img src="{{  $bases[2][1]->thumbnail }}"></span></li>
                            <li><span><img src="{{  $bases[2][2]->thumbnail }}"></span></li>
                            <li><span><img src="{{  $bases[2][3]->thumbnail }}"></span></li>
                            <li><span><img src="{{  $bases[2][4]->thumbnail }}"></span></li>
                            <li><span><img src="{{  $bases[2][5]->thumbnail }}"></span></li>
                        </ul>
                    </div>
                </div>
                <script type="text/javascript">jQuery(".slideTxtBox").slide();</script>
            </div>
            <span class="bk50">&nbsp;</span>
            <!-- 案例 -->
            <div class="caseout">
                <div class="ho_tit_all">
                    <h2 class="ho_tit_all"><a href="/case"><img src="/images/ho_tit_3.png"></a></h2>
                </div>
                <span class="bk30">&nbsp;</span>
                <div class="box">
                    <div id="slideBoxcase" class="slideBoxcase">
                        <div class="hd">&nbsp;</div>
                        <div class="bd">
                            <ul>
                                <li>
                                    <img src="{{  $cases[0]->thumbnail }}" />
                                    <div id="case0" hidden="hidden" >{{  $cases[0]->comtent }}</div>
                                    <div class="txt" id ="case0_comtent" ></div>
                                    <script>
                                        document.getElementById("case0_comtent").innerHTML = document.getElementById("case0").innerText;
                                    </script>
                                </li>
                                <li>
                                    <img src="{{  $cases[1]->thumbnail }}" />
                                    <div id="case1" hidden="hidden" >{{  $cases[1]->comtent }}</div>
                                    <div class="txt" id ="case1_comtent" ></div>
                                    <script>
                                        document.getElementById("case1_comtent").innerHTML = document.getElementById("case1").innerText;
                                    </script>
                                </li>
                                <li>
                                    <img src="{{  $cases[2]->thumbnail }}" />
                                    <div id="case2" hidden="hidden" >{{  $cases[2]->comtent }}</div>
                                    <div class="txt" id ="case2_comtent" ></div>
                                    <script>
                                        document.getElementById("case2_comtent").innerHTML = document.getElementById("case2").innerText;
                                    </script>
                                </li>
                                <li>
                                    <img src="{{  $cases[3]->thumbnail }}" />
                                    <div id="case3" hidden="hidden" >{{  $cases[3]->comtent }}</div>
                                    <div class="txt" id ="case3_comtent" ></div>
                                    <script>
                                        document.getElementById("case3_comtent").innerHTML = document.getElementById("case3").innerText;
                                    </script>
                                </li>
                                <li>
                                    <img src="{{  $cases[4]->thumbnail }}" />
                                    <div id="case4" hidden="hidden" >{{  $cases[4]->comtent }}</div>
                                    <div class="txt" id ="case4_comtent" ></div>
                                    <script>
                                        document.getElementById("case4_comtent").innerHTML = document.getElementById("case4").innerText;
                                    </script>
                                </li>
                            </ul>
                        </div>
                        <!-- 下面是前/后按钮代码，如果不需要删除即可 -->
                        <a class="prev" href="javascript:void(0)"></a>
                        <a class="next" href="javascript:void(0)"></a>
                    </div>
                    <script type="text/javascript">
                        jQuery(".slideBoxcase").slide({mainCell:".bd ul",autoPlay:true});
                    </script>
                </div>
            </div>
        </div>
        <span class="bk50">&nbsp;</span>
        <div class="ho_ad_2">&nbsp;</div>
        <span class="bk50">&nbsp;</span>
        <div class="w1160 clearfix">
            <!-- 方案 -->
            <div class="planout">
                <div class="ho_tit_all">
                    <h2 class="ho_tit_all"><a href="/plan"><img src="/images/ho_tit_4.png"></a></h2>
                </div>
                <span class="bk30">&nbsp;</span>
                <div class="picScroll-leftplan">
                    <div class="hd">&nbsp;</div>
                    <div class="bd">
                        <ul class="picList">
                            @foreach( $plans as $plan )
                                <li>
                                    <a href="/plan/{{  $plan->id }}">
                                        <span class="pic"><img src="{{  $plan->thumbnail }}" alt="" /></span>
                                        <div class="txt">
                                            <h2>{{  $plan->title }}</h2>
                                            <span>了解更多</span>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <script type="text/javascript">
                    jQuery(".picScroll-leftplan").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:3,trigger:"click"});
                </script>
            </div>
            <span class="bk50">&nbsp;</span>
            <!-- 教练 -->
            <div class="teamout">
                <div class="w1160 clearfix">
                    <div class="top">
                        <span class="bk30">&nbsp;</span>
                        <div class="ho_tit_all">
                            <h2 class="ho_tit_all"><a href="/team"><img src="/images/ho_tit_5.png"></a></h2>
                        </div>
                        <span class="bk20">&nbsp;</span>
                        <div class="txt">
                            <p>南充真人CS~神鹰户外拓展俱乐部，咨询电话152 2816 9898，三大真人CS连锁基地位于：南充西山风景区栖乐垭村、南充顺庆搬罾镇青山湖景区和南充顺庆搬罾镇果乐园，我们主要经营：真人CS、拓展训练、青少年户外教育、军训、夏令营、撕名牌等团队项目，拥有在成都的专业导师团队，并获得了广大企事业单位及真人CS爱好者的一致好评！</p>
                        </div>
                    </div>
                    <span class="middle">&nbsp;</span>
                    <span class="bk20">&nbsp;</span>
                    <div class="picScroll-left">
                        <div class="hd">&nbsp;</div>
                        <div class="bd">
                            <ul class="picList">
                                @foreach($teams as $team)
                                    <li>
                                        <a href="/team/{{ $team->id  }}">
                                            <span class="pic"><img src="{{ $team->photo  }}"></span>
                                            <div class="txt">
                                                <h2>{{ $team->belong_to  }}</h2>
                                                <p>{{ $team->name  }}</p>
                                            </div>
                                        </a>
                                    </li>
                                @endforeach


                            </ul>
                        </div>
                    </div>
                    <script type="text/javascript">
                        jQuery(".picScroll-left").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:3,trigger:"click"});
                    </script>
                </div>
            </div>
            <span class="bk50">&nbsp;</span>
        </div>
        <!-- end -->
    </div>

@endsection
