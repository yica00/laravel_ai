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
        {{--<h3><a href="/admin/team/create" >新增员工</a></h3>--}}
        <table class="tablePanel2"  cellpadding="0" cellspacing="0" width="100%">
            <tr style="border-bottom:1px solid #BBB;height: 50px;border-top:1px solid #BBB;">
                <th>姓名</th>
                <th>邮箱</th>
                <th>手机</th>
                <th>留言内容</th>
                <th>留言时间</th>
                <th>操作</th>
            </tr>
            @foreach($messages as $sort)
                <tr>

                    <td>{{$sort->name}}</td>
                    <td>{{$sort->email}}</td>
                    <td>{{$sort->phone}}</td>
                    <td>{{$sort->message}}</td>
                    <td>{{$sort->created_at}}</td>
                    <td>
                        <a class="act-btn" href="/admin/message/{{$sort->id}}/look">查看</a>
                        <a class="act-btn" href="/admin/message/{{$sort->id}}/delete">删除</a>
                    </td>
                </tr>
            @endforeach

        </table>
    </div>

@endsection