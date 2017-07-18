@extends('admin.base')
@section('content')
    <script>
        $('#left-bar .nav>li:nth-child(4)>.menu').addClass('on');
    </script>


    <div class="main-wrap fadeInRight">
        <p style="color: red"><?php
            if(!is_object($errors)){
                echo $errors;
            }?>
        </p>
        <h3><a href="/admin/order_list/create" >新增订单</a></h3>
        <table class="tablePanel2" cellpadding="0" cellspacing="0" width="100%">
            <tr style="border-bottom:1px solid #BBB;height: 50px;border-top:1px solid #BBB;">
                <th>项目名</th>
                <th>地址</th>
                <th>合同日期</th>
                <th>类型</th>
                <th>参数</th>
                <th>数量</th>
                <th>检验机构</th>
                <th>客户类型</th>
                <th>操作</th>
            </tr>
            @foreach($order_lists as $sort)
                <tr style="border-bottom:1px solid #BBB;height: 40px">

                    <td>{{$sort->name}}</td>
                    <td>{{$sort->address}}</td>
                    <td>{{$sort->order_data}}</td>
                    <td>{{$sort->category}}</td>
                    <td>{{$sort->parameter}}</td>
                    <td>{{$sort->amount}}</td>
                    <td>{{$sort->organization}}</td>
                    <td>{{$sort->article_id}}</td>
                    <td>
                        <a class="act-btn" href="/admin/order_list/{{$sort->id}}/edit">编辑</a>
                        <a class="act-btn" href="/admin/order_list/{{$sort->id}}/delete">删除</a>
                    </td>
                </tr>
            @endforeach

        </table>
    </div>

@endsection