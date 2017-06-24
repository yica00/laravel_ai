@extends('admin.base')
@section('content')
    <script>
        $('#left-bar .nav>li:nth-child(3)>.menu').addClass('on');
    </script>

    <div class="main-wrap fadeInRight">
        <div class="row">
            <div class="col-md-10 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-body">
                        @if (count($errors) > 0)
                            <div style="color: red">
                                <ul>
                                    @if( is_object($errors) )
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    @else
                                        {{ $errors }}
                                    @endif
                                </ul>
                            </div>
                        @endif

                            <script type="text/javascript"
                                    {{--$(document).ready(function(){--}}
                                              {{----}}
                                     {{--})--}}
                            </script>


                            <div class="main-wrap fadeInRight">
                                <table border="0" width="100%" >
                                    <tr bgcolor="#a9a9a9" width="100%" style="line-height: 50px" >
                                        <td>导航名</td><td width="60%"></td><td>操作</td>
                                    </tr>
                                    @foreach( $articles as $tag  )
                                        <tr style="line-height: 40px" >
                                            <td>{{$tag->title}}<td>{{$tag->thumbnail}}</td>
                                            <td> <a href=article/{{ $tag->id }}/edit >修改</a>
                                                <a href=article/{{ $tag->id }}/add >添加子类</a>

                                                @if( !$tag->is_nav )
                                                <form action="article/{{ $tag->id }}" method="post"  >
                                                    {{csrf_field()}}
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit"  onclick="return confirm('确实要删除吗？')">删除</button>
                                                </form>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
{{--                                {{ $articles->links() }}--}}
                            </div>
                    </div>
                </div>
            </div>

        </div>

@endsection