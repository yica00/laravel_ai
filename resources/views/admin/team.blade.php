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
        <h3><a href="/admin/team/create" >新增员工</a></h3>
        <table class="tablePanel">
            <tr>
                <th>名字</th>
                <th>所属基地</th>
                <th>照片</th>
                <th>介绍</th>
                <th>培训项目</th>
                <th>电话</th>
                <th>操作</th>
            </tr>
            @foreach($teams as $sort)
                <tr>

                    <td>{{$sort->name}}</td>
                    <td>{{$sort->belong_to}}</td>
                    <td> <img src="{{$sort->photo}}" width="30"> </td>
                    <td>{{$sort->introduce}}</td>
                    <td>{{$sort->iterm}}</td>
                    <td>{{$sort->phone}}</td>

                    <td>
                        <a class="act-btn" href="/admin/team/{{$sort->id}}/edit">编辑</a>
                        <a class="act-btn" href="/admin/team/{{$sort->id}}/delete">删除</a>
                    </td>
                </tr>
            @endforeach

        </table>
    </div>

@endsection