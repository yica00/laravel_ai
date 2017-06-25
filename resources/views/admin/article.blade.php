@extends('admin.base')
@section('content')
    <script>
        $('#left-bar .nav>li:nth-child(4)>.menu').addClass('on');
    </script>


    <div class="main-wrap fadeInRight">
        <table class="tablePanel2" >
            <tr>
                <th>名称</th>
                <th width="50%" ></th>
                <th>操作</th>
            </tr>
            @foreach($permission as $sort)
                <tr >
                    <td>{{ $sort->title  }} </td>
                    <td> </td>
                    <td>
                        <a class="act-btn" href="/Admin/Nav/{{$sort->id}}/edit">编辑</a>
                        <a class="act-btn" href="/Admin/Nav/{{$sort->id}}/edit">添加子类</a>
                       @if( $sort->pid != 0 )
                            <a class="act-btn" href="/Admin/Nav/{{$sort->id}}/edit">删除</a>
                        @endif
                        </td>
                </tr>
            @endforeach
        </table>
        <div class="pagenav">
            {{--{{ $permission->links() }}--}}
        </div>
    </div>

@endsection