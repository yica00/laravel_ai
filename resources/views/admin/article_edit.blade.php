@extends('admin.base')
@section('content')
    <script>
        $('#left-bar .nav>li:nth-child(4)>.menu').addClass('on');
    </script>


    <div class="main-wrap fadeInRight">
        <H3>编辑{{$article->title}}</H3>
        <form class="formPanel" action="/admin/article/{{ $article->id  }}" enctype="multipart/form-data" method="post" >
            {{ csrf_field()  }}
            <input type="hidden" name="_method" value="PUT">
            <div class="form-group">
                <p style="color: red"><?php
                    if(!is_object($errors)){
                        echo $errors;
                    }?>
                </p>
                <label>栏目标题：</label><input type="text" class="input-text" name="title" value="{{$article->title}}" style="width: 400px;"/>
            </div>
            <div class="form-group">
                <label style="float: left" >缩略图：</label><input style="float: left" type='file'  name='thumbnail' value="{{$article->thumbnail}}">
            </div>
            {{--<div style="clear: left"></div>--}}
            <div class="form-group">
                <label>链接地址：</label>
                <input name="link" value="{{$article->link}}" >
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
            <input class="save-btn" type="submit" name="send" value="提交文章" />
        </form>
    </div>

@endsection