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
        <h3><a href="/admin/car/create" >新增车型</a></h3>
        <table class="tablePanel2" cellpadding="0" cellspacing="0" width="100%">
            <tr style="border-bottom:1px solid #BBB;height: 50px;border-top:1px solid #BBB;">
                <th>车名</th>
                <th>排量</th>
                <th>照片</th>
                <th>座数</th>
                <th>类型</th>
                <th>价格</th>
                <th>操作</th>
            </tr>
            @foreach($cars as $sort)
                <tr style="border-bottom:1px solid #BBB;height: 40px">

                    <td>{{$sort->name}}</td>
                    <td>{{$sort->displacement}}</td>
                    <td> <img src="{{$sort->photo}}" width="30"> </td>
                    <td>{{$sort->amount}}</td>
                    <td>{{$sort->category}}</td>
                    <td>{{$sort->price}}</td>

                    <td>
                        <a class="act-btn" href="/admin/car/{{$sort->id}}/edit">编辑</a>
                        <a class="act-btn" href="/admin/car/{{$sort->id}}/delete">删除</a>
                    </td>
                </tr>
            @endforeach

        </table>
    </div>

@endsection