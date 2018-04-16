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
        <h3><a href="/admin/category/create" >新增类别</a></h3>
        <table class="tablePanel2" cellpadding="0" cellspacing="0" width="100%">
            <tr style="border-bottom:1px solid #BBB;height: 50px;border-top:1px solid #BBB;">
                <th>id</th>
                <th>类别名</th>
                <th>操作</th>
            </tr>
            @foreach($categorys as $sort)
                <tr style="border-bottom:1px solid #BBB;height: 40px">

                    <td>{{$sort->id}}</td>
                    <td>{{$sort->name}}</td>
                    <td>
                        <a class="act-btn" href="/admin/category/{{$sort->id}}/edit">编辑</a>
                        <a class="act-btn" onclick="if(confirm('确定删除此项？')){location.href='/admin/category/{{$sort->id}}/delete'}"} >删除</a>
                    </td>
                </tr>
            @endforeach

        </table>
    </div>

@endsection