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
        <h3><a href="/admin/report/create" >新增报告</a></h3>
        <table class="tablePanel2" cellpadding="0" cellspacing="0" width="100%">
            <tr style="border-bottom:1px solid #BBB;height: 50px;border-top:1px solid #BBB;">
                <th>报告名</th>
                <th>用户卡号</th>
                <th>上传时间</th>
                <th>操作</th>
            </tr>
            @foreach($reports as $sort)
                <tr style="border-bottom:1px solid #BBB;height: 40px">

                    <td>{{$sort->title}}</td>
                    <td>{{$sort->card}}</td>
                    <td>{{$sort->created_at}}</td>

                    <td>
                        <a class="act-btn" href="/admin/report/{{$sort->id}}/edit">编辑</a>
                        <a class="act-btn"  onclick="if(confirm('确定删除此项？')){location.href='/report/{{$sort->id}}/delete'}"} >删除</a>
                    </td>
                </tr>
            @endforeach

        </table>
    </div>

@endsection