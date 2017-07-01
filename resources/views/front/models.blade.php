@extends('front.base')
@section('content')
<!-- start -->
<div class="bread">
  <div class="w1160 clearfix">
      <p class="page_nav clearfix">
          <a href="/models" class="on">企事业团体用车</a>
          <a href="/cars" >合作车型</a>
      </p>
  </div>  
</div>
<div class="wap_box">
  <span class="bk30">&nbsp;</span>
  
    <!-- start -->
    <div class="mod_all mod_rent_1 clearfix">
    <div class="w1160 clearfix">
    <h2>为企业提供一站式出行解决方案</h2>
        {!! $article->comtent !!}
    </div>
    </div>
    <span class="bk60">&nbsp;</span>
    <div class="mod_all mod_rent_2 clearfix">
    <div class="w1160 clearfix">
    <h2>丰富的用车场景</h2>
    <ul class="lilst clearfix">
        @foreach( $articles as $articel)
            <li>
                <span><img src="{{ $articel->thumbnail }}" alt="" /></span>
                <p>{{ $articel->title }}</p>
            </li>
        @endforeach
    </ul>
    </div>
    </div>
    <div class="mod_all mod_rent_3 clearfix">
      <div class="w1160 clearfix">
      <h2>帮助企业高效管理，提升效率</h2>
       <ul>
         <li>
          <span>
            <img src="images/mod1.png" alt="" />
          </span>
          <h4>费用可控</h4>
          <p>通过后台行程数据，节省时间成本，避免不合规行为所产生的开支，管控总费用</p>
        </li>
        <li class="limar">
          <span>
             <img src="images/mod2.png" alt="" />
          </span>
          <h4>合规透明</h4>
          <p>行程记录可查看，支出直观可见，支持用车前审批</p>
        </li>
        <li>
          <span>
             <img src="images/mod3.png" alt="" />
          </span>
          <h4>灵活用车</h4>
          <p>车型种类全，覆盖多座城市，轻松与您现有系统对接用</p>
        </li>
        <li class="limar">
          <span>
             <img src="images/mod4.png" alt="" />
          </span>
          <h4>简化流程</h4>
          <p>员工无需垫付报销，财务告别低效审批， 可统一开具增值税发票</p>
        </li>
        <li>
          <span>
             <img src="images/mod5.png" alt="" />
          </span>
          <h4>安全保障</h4>
          <p>司机行前审核，事后安全保障，并提供合约化标准服务</p>
        </li>
       </ul>
      </div>
    </div>
    <!-- end --> 
  
</div>

<!-- end -->
@endsection
