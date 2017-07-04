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
        <table class="tablePanel2" cellpadding="0" cellspacing="0" width="100%">
            <th>名字</th>
            <th>手机</th>
            <th>座机</th>
            <th>省份</th>
            <th>城市</th>
            <th>公司名字</th>
            <th>操作</th>
        </tr>
        @foreach($messages as $sort)
            <tr>
                <td>{{$sort->name}}</td>
                <td>{{$sort->phone}}</td>
                <td>{{$sort->fix_phone}}</td>
                <td>{{$sort->s_province}}</td>
                <td>{{$sort->s_city}}</td>
                <td>{{$sort->company}}</td>
                    <td>
                        <a class="act-btn" href="/admin/message/{{$sort->id}}/look">查看</a>|
                        <a class="act-btn" href="/admin/message/{{$sort->id}}/delete">删除</a>
                    </td>
                </tr>
         @endforeach

        </table>
    </div>

@endsection