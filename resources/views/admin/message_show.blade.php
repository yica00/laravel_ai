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

                        <h3>查看留言</h3>
                        <form class="form-horizontal" role="form" method="get" action=" "  style="margin-left: -30%">
                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">名字</label>
                                <div class="col-md-6">
                                    <input id="email" class="form-control" name="name"  value="{{  $message->name }}"  disabled="true" autofocus>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">电话</label>
                                <div class="col-md-6">
                                    <input id="email"  class="form-control" name="belong_to" value="{{ $message->phone  }}" disabled="true" autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">固话</label>
                                <div class="col-md-6">
                                    <input id="email"  class="form-control" name="belong_to" value="{{ $message->fix_phone  }}" disabled="true" autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">省份</label>
                                <div class="col-md-6">
                                    <input id="email"  class="form-control" name="belong_to" value="{{ $message->s_province  }}" disabled="true" autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">城市</label>
                                <div class="col-md-6">
                                    <input id="email"  class="form-control" name="belong_to" value="{{ $message->s_city  }}" disabled="true" autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">公司</label>
                                <div class="col-md-6">
                                    <input id="email"  class="form-control" name="belong_to" value="{{ $message->company  }}" disabled="true" autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">留言时间</label>
                                <div class="col-md-6">
                                    <input id="email"  class="form-control" name="belong_to" value="{{ $message->created_at  }}" disabled="true" autofocus>
                                </div>
                            </div>
                        </form>

                            <div class="backpre clearfix" style="margin-left: 80%">
                                @if( $up_down['1'] )<a href="/admin/message/{{ $up_down['1'] }}/look" rel="next">上一篇</a> |@endif
                                @if( $up_down['2'] ) <a href="/admin/message/{{ $up_down['2'] }}/look" rel="prev">下一篇</a> |@endif
                                    <a href="/admin/message">返回列表</a>
                            </div>

                    </div>
                </div>
            </div>

        </div>

@endsection