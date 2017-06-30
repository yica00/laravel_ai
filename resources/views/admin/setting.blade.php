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

                        <h3>网站基本信息设置</h3>
                        <form class="form-horizontal" role="form" method="POST" action="/admin/setting " enctype="multipart/form-data"  style="margin-left: -30%">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="PUT">
                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">网站名字</label>
                                <div class="col-md-6">
                                    <input id="email" class="form-control" name="web_name"  value="{{  $setting['web_name'] }}"  autofocus>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">固定电话</label>
                                <div class="col-md-6">
                                    <input id="email"  class="form-control" name="fix_phone" value="{{ $setting['fix_phone']  }}" autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">联系人名字</label>
                                <div class="col-md-6">
                                    <input id="email"  class="form-control" name="contact_name" value="{{  $setting['contact_name'] }}" autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">联系人</label>
                                <div class="col-md-6">
                                    <input id="email"  class="form-control" name="contacts" value="{{  $setting['contacts'] }}" autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">QQ</label>
                                <div class="col-md-6">
                                    <input id="email"  class="form-control" name="qq" value="{{  $setting['qq'] }}" autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">地址</label>
                                <div class="col-md-6">
                                    <input id="email"   class="form-control" name="bases"  value="{{ $setting['bases']  }}"  autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">招聘邮箱</label>
                                <div class="col-md-6">
                                    <input id="email"   class="form-control" name="email"  value="{{ $setting['email']  }}"  autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">微信公众号</label>
                                <div class="col-md-6">
                                    <input id="email" type="file"  class="form-control" name="wx_map" autofocus>
                                    <img src="{{  $setting['wx_map'] }}" width="50" />
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