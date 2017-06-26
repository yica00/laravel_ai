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
        <table class="tablePanel">
            <tr>

                <th>标题</th>
                <th></th>
                <th>发布时间</th>
                <th>操作</th>
            </tr>
            @foreach($articles as $sort)
                <tr>

                    <td>{{$sort->title}}</td>
                    <td></td>
                    <td>{{$sort->created_at}}</td>

                    <td>
                        <a class="act-btn" href="/admin/article/{{$sort->id}}/edit">编辑</a>
                        <a class="act-btn" href="/article/{{$sort->id}}/delete">删除</a>
                    </td>
                </tr>
            @endforeach

        </table>
        <div class="pagenav">
            {{ $articles->links() }}
        </div>
    </div>

@endsection