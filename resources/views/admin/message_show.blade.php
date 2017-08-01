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
                                <label for="email" class="col-md-4 control-label">地址</label>
                                <div class="col-md-6">
                                    <input id="email"  class="form-control" name="email" value="{{  $message->address }}" disabled="true" autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">面积</label>
                                <div class="col-md-6">
                                    <input id="email"  class="form-control" name="email" value="{{  $message->area }}" disabled="true" autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">房屋类型</label>
                                <div class="col-md-6">
                                    <input id="email"  class="form-control" name="email" value="{{  $message->category }}" disabled="true" autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">预算</label>
                                <div class="col-md-6">
                                    <input id="email"  class="form-control" name="email" value="{{  $message->badget }}" disabled="true" autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">留言时间</label>
                                <div class="col-md-6">
                                    <input id="email"  class="form-control" name="belong_to" value="{{ $message->created_at  }}" disabled="true" autofocus>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">留言内容</label>
                                <div class="col-md-6">
                                    <textarea rows="10" cols="50" disabled="true" >{{ $message->message  }}</textarea>
                                </div>
                            </div>



                        </form>
                    </div>
                </div>
            </div>

        </div>

@endsection