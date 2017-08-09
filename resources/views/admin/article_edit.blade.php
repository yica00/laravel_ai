@extends('admin.base')
@section('content')
    <script>
        $('#left-bar .nav>li:nth-child(4)>.menu').addClass('on');
    </script>

    <h3 style="float: right;margin-top: 2%"><a href="@if( $article->pid  == 0 )
                /admin/article
              @else
                /article/{{ $article->pid  }}/look
               @endif">返回上级</a>
    </h3>

    <div class="main-wrap fadeInRight">
        <h3><a>修改【@if( $article ){{$article->title}}@else 顶层 @endif】</a></h3>
        <form class="formPanel" action="/admin/article/{{ $article->id  }}" enctype="multipart/form-data" method="post" >
            {{ csrf_field()  }}
            <input type="hidden" name="_method" value="PUT">
            <div class="form-group">

                <hr style="border-bottom-color: #000000;height:2px;">
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


                <label>栏目标题：</label><input type="text" class="input-text" name="title" value="{{$article->title}}" style="width: 62%;"/>
            </div>
            <div class="form-group">
                <label style="float: left" >　缩略图：</label><input style="float: left" type='file'  name='thumbnail' value="{{$article->thumbnail}}">
                @if( $article->thumbnail )
                    <img src="{{$article->thumbnail}}" width="200" />
                @endif
            </div>
            <div style="clear: both;margin-bottom: 2%"></div>
            <div class="form-group">
                <label>链接地址：</label>
                <input name="link" value="{{$article->link}}" >
            </div>

            <div class="form-group">
                <label>排序数字：</label>
                <input name="serial_number" value="{{$article->serial_number}}" >
            </div>

            <div class="form-group">
                <label>简介：</label>
                <textarea class="form-control" rows="3" style="width: 70%" name="introduce" >{{$article->introduce}}</textarea>
            </div>


            <div id="comtent" style="display:none;" ><?php echo  html_entity_decode($article->comtent) ?></div>
            {{--<div class="form-group">--}}
                {{--<label>品牌类别：</label>--}}
                {{--<select name="classid">--}}
                    {{--<option value="0">默认不选</option>--}}
                    {{--@foreach( $brends as $role )--}}
                        {{--<option value={{$role->id}}>{{$role->name}}</option>--}}
                    {{--@endforeach--}}
                {{--</select>--}}
                {{--<a style="color: red">注意：只有发布品牌类文章才选择此项</a>--}}
            {{--</div>--}}


            <!-- 加载编辑器的容器 -->
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
            <input class="btn btn-primary" style="margin-left: 40%" type="submit" name="send" value="提交文章" />
        </form>
    </div>

@endsection