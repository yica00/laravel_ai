@extends('admin.base')
@section('content')
    <script>
        $('#left-bar .nav>li:nth-child(4)>.menu').addClass('on');
    </script>


    <div class="main-wrap fadeInRight">
        <h3><a  href="/article/0/addson">添加顶层内容</a></h3>
        <table class="tablePanel2" cellpadding="0" cellspacing="0" width="100%">
            <tr style="border-bottom:1px solid #BBB;height: 50px;border-top:1px solid #BBB;">
                <th>名称</th>
                <th width="5%" ></th>
                <th>操作</th>
            </tr>
            @foreach($permission as $sort)
                <tr style="border-bottom:1px solid #BBB;height: 40px">
                    <td>@if($sort->pid != 0)　　@endif{{ $sort->title  }} </td>
                    <td> </td>
                    <td>
                        <a class="act-btn" href="/admin/article/{{$sort->id}}/edit">编辑</a>|
                        <a class="act-btn" href="/article/{{$sort->id}}/look">查看内容</a>|
                        <a class="act-btn" href="/article/{{$sort->id}}/addson">添加内容</a>
                       @if( $sort->pid != 0 )
                            |<a class="act-btn" onclick="if(confirm('确定删除此项？')){location.href='/article/{{$sort->id}}/delete'}"} >删除</a>@endif
                        </td>
                </tr>
                @if(!empty($sort->articles))
                    @foreach($sort->articles as $art)
                        <tr style="border-bottom:1px solid #BBB;height: 40px">
                            <td>@if($art->pid != 0)　　@endif{{ $art->title  }} </td>
                            <td> </td>
                            <td>
                                <a class="act-btn" href="/admin/article/{{$art->id}}/edit">编辑</a>|
                                <a class="act-btn" href="/article/{{$art->id}}/look">查看内容</a>|
                                <a class="act-btn" href="/article/{{$art->id}}/addson">添加内容</a>
                                @if( $art->pid != 0 )
                                    |<a class="act-btn" onclick="if(confirm('确定删除此项？')){location.href='/article/{{$art->id}}/delete'}"} >删除</a>@endif
                            </td>
                        </tr>
                    @endforeach
                @endif
            @endforeach
        </table>
        <div class="pagenav">
            {{--{{ $permission->links() }}--}}
        </div>
    </div>

@endsection