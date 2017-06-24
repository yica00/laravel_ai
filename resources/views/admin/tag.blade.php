@extends('admin.base')
@section('content')
    <script>
        $('#left-bar .nav>li:nth-child(3)>.menu').addClass('on');
    </script>
    <div class="main-menu fadeInLeft">
        <div class="title">
            <i class="fa fa-file-text-o"></i> 标签列表
        </div>
        <ul class="act-list">
            <li>
                <a href="/tag"><i class="fa fa-plus-square-o"></i>标签列表</a>
                <a href="/tag/create"><i class="fa fa-plus-square-o"></i>添加标签</a>
            </li>
        </ul>
    </div>
    <div class="main-wrap fadeInRight">
        <table border="1" width="100%" >
            <tr bgcolor="#a9a9a9">
                <td>ID</td><td>标签名</td><td>添加时间</td><td>操作</td>
            </tr>
            @foreach( $tags as $tag  )
                <tr>
                    <td>{{$tag->id}}<td>{{$tag->name}}</td>
                    <td>{{$tag->created_at}}</td><td>
                        <a href=tag/{{ $tag->id }}/edit >修改</a>
                        <form action="tag/{{ $tag->id }}" method="post"  >
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit"  onclick="return confirm('确实要删除吗？')">删除</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        {{ $tags->links() }}
    </div>

@endsection