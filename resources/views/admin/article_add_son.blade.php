@extends('admin.base')
@section('content')
    <script>
        $('#left-bar .nav>li:nth-child(4)>.menu').addClass('on');
    </script>


    <div class="main-wrap fadeInRight">
        <H3>新增内容</H3>
        <form class="formPanel" action="/article/add_son/{{ $id }}" enctype="multipart/form-data" method="post" >
            {{ csrf_field()  }}
            <div class="form-group">
                <p style="color: red"><?php
                    if(!is_object($errors)){
                        echo $errors;
                    }?>
                </p>
                <label>栏目标题：</label><input type="text" class="input-text" name="title" style="width: 400px;"/>
            </div>
            <div class="form-group">
                <label>缩略图：</label><input name="thumbnail" type="file" >
            </div>
            <div class="form-group">
                <label>链接地址：</label>
                <input name="link"  >
            </div>

            <input name="pid" hidden="hidden" value="{{ $id }}">
            <div class="form-group">
                <label>是否为导航：</label><input name="is_nav"  value=0 >  <span style="color: red">0表示不是导航，1表示是导航</span>
            </div>

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


            </script>
            <input class="save-btn" type="submit" name="send" value="提交" />
        </form>
    </div>

@endsection