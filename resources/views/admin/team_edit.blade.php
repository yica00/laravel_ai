@extends('admin.base')
@section('content')
    <script>
        $('#left-bar .nav>li:nth-child(4)>.menu').addClass('on');
    </script>


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

                        <h3>编辑员工</h3>
                        <form class="form-horizontal" role="form" method="POST" action="/admin/team/{{  $team->id }} " enctype="multipart/form-data"  style="margin-left: -30%">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="PUT">
                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">名字</label>
                                <div class="col-md-6">
                                    <input id="email" class="form-control" name="name"  value="{{  $team->name }}"  autofocus>
                                </div>
                            </div>

                            {{--<div class="form-group">--}}
                                {{--<label for="email" class="col-md-4 control-label">人员类别</label>--}}
                                {{--<div class="col-md-6">--}}
                                    {{--<select name="cate">--}}
                                        {{--<option value="1" @if( $team->cate == 1 ) selected @endif >设计团队</option>--}}
                                        {{--<option value="2" @if( $team->cate == 2 ) selected @endif>工程监管</option>--}}
                                    {{--</select>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">头像</label>
                                <div class="col-md-6">
                                    <input id="email" type="file"  class="form-control" name="photo" autofocus>
                                    <img src="{{  $team->photo }}" width="50" />
                                </div>
                            </div>

                            {{--<div class="form-group">--}}
                                {{--<label for="email" class="col-md-4 control-label">二维码</label>--}}
                                {{--<div class="col-md-6">--}}
                                    {{--<input id="email" type="file"  class="form-control" name="wx_img" autofocus>--}}
                                    {{--<img src="{{  $team->wx_img }}" width="50" />--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">职称</label>
                                <div class="col-md-6">
                                    <input id="email"  class="form-control" name="title"  value="{{  $team->title }}" autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">职务</label>
                                <div class="col-md-6">
                                    <input id="email"  class="form-control" name="position"  value="{{  $team->position }}" autofocus>
                                </div>
                            </div>

                            {{--<div class="form-group">--}}
                                {{--<label for="email" class="col-md-4 control-label">从业年限</label>--}}
                                {{--<div class="col-md-6">--}}
                                    {{--<input id="email"  class="form-control" name="work_age" value="{{  $team->work_age }}"   autofocus>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                                {{--<label for="email" class="col-md-4 control-label">教育背景</label>--}}
                                {{--<div class="col-md-6">--}}
                                    {{--<input id="email"  class="form-control" name="education" value="{{  $team->education }}"  autofocus>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                                {{--<label for="email" class="col-md-4 control-label">擅长风格</label>--}}
                                {{--<div class="col-md-6">--}}
                                    {{--<input id="email"  class="form-control" name="good_at"  value="{{  $team->good_at }}" autofocus>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                                {{--<label for="email" class="col-md-4 control-label">设计理念</label>--}}
                                {{--<div class="col-md-6">--}}
                                    {{--<input id="email"  class="form-control" name="design_concept" value="{{  $team->design_concept }}" autofocus>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                                {{--<label for="email" class="col-md-4 control-label">所教专业</label>--}}
                                {{--<div class="col-md-6">--}}
                                    {{--<select name="work_age" id="email" style="width:200px;" >--}}
                                        {{--@foreach( $items as $stor )--}}
                                            {{--<option value ="{{ $stor->id }}" @if($stor->id == $team->work_age  ) selected @endif >{{ $stor->title }}</option>--}}
                                        {{--@endforeach--}}
                                    {{--</select>--}}
                                {{--</div>--}}
                                {{--<p></p>--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                                {{--<label for="email" class="col-md-4 control-label">荣誉title</label>--}}
                                {{--<div class="col-md-6">--}}
                                    {{--<textarea class="form-control" rows="4" name="honor" >{{  $team->honor }}</textarea>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">擅长项目</label>
                                <div class="col-md-6">
                                    <textarea class="form-control" rows="4" name="good_at" >{{  $team->good_at }}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">介绍</label>
                                <div class="col-md-6">
                                    <textarea class="form-control" rows="6" name="introduce" >{{  $team->introduce }}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">上班时间</label>
                                <div class="col-md-6">
                                    <label style="color: red">请用英文逗号分隔</label>
                                    <textarea class="form-control" rows="3" name="work_time" >{{  $team->work_time }}</textarea>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">所属科室</label>
                                <div class="col-md-6">
                                    <select name="class_id" id="email" class="form-control" >
                                        @foreach( $items as $item )
                                            <option value ="{{$item->id}}"  @if( $item->id == $team->class_id ) selected @endif  >{{$item->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            {{--<div class="form-group" >--}}
                                {{--<label for="email" class="col-md-4 control-label">工作图集</label>--}}
                                {{--<!-- 加载编辑器的容器 -->--}}
                                {{--<div class="col-md-6">--}}
                                    {{--<script id="container" name="comtent" type="text/plain">--}}
                                    {{--</script>--}}
                                    {{--<!-- 配置文件 -->--}}
                                    {{--<script type="text/javascript" src="/akl/Ueditor/ueditor.config.js"></script>--}}
                                    {{--<!-- 编辑器源码文件 -->--}}
                                    {{--<script type="text/javascript" src="/akl/Ueditor/ueditor.all.js"></script>--}}
                                    {{--<!-- 实例化编辑器 -->--}}
                                    {{--<script type="text/javascript">--}}
                                        {{--var ue = UE.getEditor('container', {--}}
                                            {{--autoHeightEnabled: true,--}}
                                            {{--autoFloatEnabled: true,--}}
                                            {{--initialFrameWidth : 900,--}}
                                            {{--initialFrameHeight: 400--}}
                                        {{--});--}}
                                        {{--ue.ready(function() {--}}
                                            {{--ue.setContent($('#comtent').html());--}}
                                        {{--});--}}
                                    {{--</script>--}}
                                {{--</div>--}}
                            {{--</div>--}}


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