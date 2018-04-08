@extends('admin.base')
@section('content')
    <script>
        $('#left-bar .nav>li:nth-child(4)>.menu').addClass('on');
    </script>


    <div class="main-wrap fadeInRight">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
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

                        <h3>修改报告</h3>
                        <form class="form-horizontal" role="form" method="POST" action="/admin/report/{{ $report->id }}" enctype="multipart/form-data"  >
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="PUT">

                            <div class="form-group">
                                <label for="email" class="col-md-3 control-label">报告名</label>
                                <div class="col-md-7">
                                    <input id="email" class="form-control" name="title" value="{{$report->title}}"   autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-3 control-label">患者卡号</label>
                                <div class="col-md-7">
                                    <input id="email"  class="form-control" name="card" type="number" value="{{$report->card}}"  autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-3 control-label">报告照片</label>
                                <div class="col-md-7">
                                    <input id="email" type="file"  class="form-control" name="imgs[]" multiple  autofocus>
                                    @foreach( explode(',',$report->thumbnail) as $img )
                                        <img src="{{$img}}" width="100">
                                    @endforeach
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