@extends('admin.base')
@section('content')
    <script>
        $('#left-bar .nav>li:nth-child(4)>.menu').addClass('on');
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

                        <h3>新增案例</h3>
                        <form class="form-horizontal" role="form" method="POST" action="/admin/rcase" enctype="multipart/form-data"  >
                            {{csrf_field()}}

                            <div class="form-group">
                                <label for="email" class="col-md-2 control-label">案例名</label>
                                <div class="col-md-10">
                                    <input id="email" class="form-control" name="title" value="{{$rcase->title}}"  autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-2 control-label">缩略图</label>
                                <div class="col-md-10">
                                    <input id="email" type="file"  class="form-control" name="thumbnail" autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-2 control-label">设计师</label>
                                <div class="col-md-10">
                                    <select name="team_id" id="email" style="width:200px;" >
                                        @foreach( $teams as $stor )
                                            <option value ="{{ $stor->id }}" @if($stor->id == $rcase->team_id  ) selected @endif >{{ $stor->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="email" class="col-md-2 control-label">房间类型</label>
                                <div class="col-md-10">
                                    <select name="house_id" id="email" style="width:200px;" >
                                        @foreach( $houses as $stor )
                                            <option value ="{{ $stor->id }}" @if($stor->id == $rcase->house_id  ) selected @endif >{{ $stor->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-2 control-label">装修风格</label>
                                <div class="col-md-10">
                                    <select name="style_id" id="email"  style="width:200px;">
                                        @foreach( $styles as $stor )
                                            <option value ="{{ $stor->id }}" @if($stor->id == $rcase->style_id  ) selected @endif >{{ $stor->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div id="comtent" style="display:none;" ><?php echo  html_entity_decode($rcase->comtent) ?></div>

                            <div class="form-group" >
                                <label for="email" class="col-md-2 control-label">详情</label>
                                <!-- 加载编辑器的容器 -->
                                <div class="col-md-10">
                                <script id="container" name="comtent" type="text/plain">
                                </script>
                                <!-- 配置文件 -->
                                <script type="text/javascript" src="/akl/Ueditor/ueditor.config.js"></script>
                                <!-- 编辑器源码文件 -->
                                <script type="text/javascript" src="/akl/Ueditor/ueditor.all.js"></script>
                                <!-- 实例化编辑器 -->
                                <script type="text/javascript">
                                    var ue = UE.getEditor('container', {
                                        autoHeightEnabled: true,
                                        autoFloatEnabled: true,
                                        initialFrameWidth : 900,
                                        initialFrameHeight: 400
                                    });
                                    ue.ready(function() {
                                        ue.setContent($('#comtent').html());
                                    });
                                </script>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        添加
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

@endsection