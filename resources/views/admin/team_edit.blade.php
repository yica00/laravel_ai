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

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">所教专业</label>
                                <div class="col-md-6">
                                    <select name="work_age" id="email" style="width:200px;" >
                                        @foreach( $items as $stor )
                                            <option value ="{{ $stor->id }}" @if($stor->id == $team->work_age  ) selected @endif >{{ $stor->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <p></p>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">介绍</label>
                                <div class="col-md-6">
                                    <textarea class="form-control" rows="5" name="introduce" >{{  $team->introduce }}</textarea>
                                </div>
                            </div>

                            {{--<div class="form-group">--}}
                                {{--<label for="email" class="col-md-4 control-label">主要作品</label>--}}
                                {{--<div class="col-md-6">--}}
                                    {{--@foreach( $articles as $art )--}}
                                        {{--<input type="checkbox" name="production[]" value="{{ $art->id }}" @if( in_array($art->id ,$team->production) )checked @endif /> {{$art->title}}--}}
                                    {{--@endforeach--}}
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