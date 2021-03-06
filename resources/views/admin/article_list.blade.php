@extends('admin.base')
@section('content')
    <script>
        $('#left-bar .nav>li:nth-child(4)>.menu').addClass('on');
    </script>

    <h3 style="float: right;margin-top: 2%"><a href="@if( $pid == 0 )
                /admin/article
              @else
                /article/{{ $pid }}/look
               @endif">返回上级</a></h3>
    <div class="main-wrap fadeInRight">
        <h3><a  href="/article/{{$article->id}}/addson">添加【{{$article->title}}】的子类</a></h3>

        <p style="color: red"><?php
            if(!is_object($errors)){
                echo $errors;
            }?>
        </p>
        <table class="tablePanel2" cellpadding="0" cellspacing="0" width="100%">
            <tr style="border-bottom:1px solid #BBB;height: 50px;border-top:1px solid #BBB;">

                <th>标题</th>
                <th></th>
                <th>发布时间</th>
                <th>操作</th>
            </tr>
            @foreach($articles as $sort)
                <tr style="border-bottom:1px solid #BBB;height: 40px">

                    <td>{{$sort->title}}</td>
                    <td></td>
                    <td>{{$sort->created_at}}</td>

                    <td>
                        <a class="act-btn" href="/admin/article/{{$sort->id}}/edit">编辑</a>|
                        <a class="act-btn" href="/article/{{$sort->id}}/look">查看内容</a>|
                        <a class="act-btn" href="/article/{{$sort->id}}/addson">添加内容</a>|
                        <a class="act-btn"  onclick="if(confirm('确定删除此项？')){location.href='/article/{{$sort->id}}/delete'}"}>删除</a>
                    </td>
                </tr>
            @endforeach
        </table>
        <div class="pagenav">
            {{ $articles->links() }}
        </div>
    </div>

@endsection