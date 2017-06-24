@extends('admin.base')
@section('content')
    <script>
        $('#left-bar .nav>li:nth-child(3)>.menu').addClass('on');
    </script>
    <div class="main-menu fadeInLeft">
        <div class="title">
            <i class="fa fa-file-text-o"></i> 设置
        </div>
        <ul class="act-list">
            <li>
                <a href="/admin/head_img"><i class="fa fa-plus-square-o"></i>导航图片设置页</a>
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

                            <h3>轮播大图修改</h3>
                            <form class="form-horizontal" role="form" method="POST" action="/admin/head_img"  enctype="multipart/form-data" style="margin-left: -30%">
                                {{csrf_field()}}

                                <input type="hidden" name="_method" value="PUT">
                                <div class="form-group">
                                    <label for="email" class="col-md-4 control-label">顶部轮播图大图1</label>
                                    <div class="col-md-6">
                                        <input id="email" type="file" class="form-control" name="img1" value="{{ $seting['img1'] }}"  autofocus>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email" class="col-md-4 control-label">顶部轮播图大图2</label>
                                    <div class="col-md-6">
                                        <input id="email" type="file"  class="form-control" name="img2" value="{{$seting['img2']}}"autofocus>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email" class="col-md-4 control-label">顶部轮播图大图3</label>
                                    <div class="col-md-6">
                                        <input id="email" type="file"  class="form-control" name="img3" value="{{$seting['img3']}}" autofocus>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email" class="col-md-4 control-label">顶部轮播图大图4</label>
                                    <div class="col-md-6">
                                        <input id="email" type="file"  class="form-control" name="img4" value="{{$seting['img4']}}" autofocus>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email" class="col-md-4 control-label">顶部轮播图大图5</label>
                                    <div class="col-md-6">
                                        <input id="email" type="file"  class="form-control" name="img5" value="{{$seting['img5']}}" autofocus>
                                    </div>
                                </div>



                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            修改
                                        </button>
                                    </div>
                                </div>
                          </form>
                    </div>
                </div>
            </div>

        </div>

@endsection