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
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
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

                        @if( isset($tag->name) )
                            <form class="form-horizontal" role="form" method="POST" action="/tag/{{$tag->id}}" style="margin-left: -30%">
                                {{csrf_field()}}

                                <input type="hidden" name="_method" value="PUT">
                                <div class="form-group">
                                    <label for="email" class="col-md-4 control-label">标签名</label>
                                    <div class="col-md-6">
                                        <input id="email"  class="form-control" name="name" value="{{$tag->name}}" required autofocus>
                                    </div>
                                </div>



                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            修改
                                        </button>
                                    </div>
                                </div>
                                @else
                                    <form class="form-horizontal" role="form" method="POST" action="/tag" style="margin-left: -30%">
                                        {{csrf_field()}}

                                        <div class="form-group">
                                            <label for="email" class="col-md-4 control-label">标签名</label>
                                            <div class="col-md-6">
                                                <input id="email"  class="form-control" name="name" value="" required autofocus>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <div class="col-md-8 col-md-offset-4">
                                                <button type="submit" class="btn btn-primary">
                                                    添加
                                                </button>
                                            </div>
                                        </div>

                                        @endif

                                    </form>
                    </div>
                </div>
            </div>

        </div>

@endsection