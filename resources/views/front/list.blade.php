@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
      <div class="in_tit">
        <h2>--&nbsp;&nbsp;合作品牌&nbsp;&nbsp;--</h2>
        <p>Cooperative brand</p>
      </div>
      <p class="page_nav clearfix">
        <a href="/brand">合作品牌</a>
            <a href="/sales_list" class="on">业绩清单</a>
      </p>
  </div>  
</div>
<!-- wap_box -->
<div class="wap_box">
  <span class="bk30">&nbsp;</span>
  <div class="w1160 clearfix">
    <!-- 内容 -->
    <div class="sorting" id="more_info" style="display: block;">
        <!-- <b class="key fl">分类</b> -->
        <div class="all">
          <ul class="clearfix">
            <li>
              @foreach( $articles as $article )
              <a href="/sales_list/category/{{$article->id}}" @if( $article->id == $id ) class="on" @endif >{{$article->title}}</a>
              @endforeach
            </li>
          </ul>
        </div>      
    </div>
    <table class="list_table">
      <tr>
        <th width="5%">序号</th>
        <th width="20%">项目名称</th>
        <th width="20%">项目地址</th>
        <th width="10%">合同日期</th>
        <th width="10%">类型</th>
        <th width="20%">参数</th>
        <th width="5%">数量（台）</th>
        <th width="10%">检验机构</th>
      </tr>
        <?php $i = $pages['pre_page']*10;?>
      @foreach( $order_lists as $list )
      <tr>
        <?php $i++ ?>
        <td>{{ $i }}</td>
        <td>{{ $list->name }}</td>
        <td>{{ $list->address }}</td>
        <td>{{ mb_substr($list->order_data,0,10) }}</td>
        <td>{{ $list->category }}</td>
        <td>{{ $list->parameter }}</td>
        <td>{{ $list->amount }}</td>
        <td>{{ $list->organization }}</td>
      </tr>
      @endforeach
    </table>
    <div class="pageJump clearfix">
      <div class="number">
        @if( $pages['pre_page']  )
          <span class="disabled"><a href="/sales_list">首页</a></span>
          <span class="disabled"><a href="/sales_list?page={{ $pages['pre_page'] }}">上一页</a></span>
        @endif
        @if( $pages['next_page'] )
          <span class="disabled"><a href="/sales_list?page={{ $pages['next_page'] }}">下一页</a></span>
          <span class="disabled"><a href="/sales_list?page={{ $pages['total_page'] }}">尾页</a></span>
        @endif
      </div>
    </div>
    <!-- end -->
  </div>  
  <span class="bk60">&nbsp;</span>
</div>


<!-- footer -->
@endsection