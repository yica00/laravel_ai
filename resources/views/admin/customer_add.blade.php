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

                        <h3>新增客户</h3>
                        <form class="form-horizontal" role="form" method="POST" action="/admin/customer" enctype="multipart/form-data" >
                            {{csrf_field()}}

                            <div class="form-group">
                                <label for="email" class="col-md-3 control-label">客户名字</label>
                                <div class="col-md-8">
                                    <input id="email" class="form-control" name="name"   autofocus>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="email" class="col-md-3 control-label">类型</label>
                                <div class="col-md-8">
                                    <select name="type"  class="form-control" id="email">
                                        <option value ="0" >不</option>
                                        <option value ="1" >导航</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-3 control-label">等级</label>
                                <div class="col-md-8">
                                    <select name="level" id="email"  class="form-control">
                                        <option value ="0" >不</option>
                                        <option value ="1" >导航</option>
                                    </select>
                                </div>
                            </div>



                            <div class="form-group">
                                <label for="email" class="col-md-3 control-label">特征</label>
                                <div class="col-md-8">
                                    {{--<span style="color: red">多个规格之间请用英文逗号隔开</span>--}}
                                    <textarea class="form-control" rows="10" name="blov" ></textarea>
                                </div>
                            </div>

                            <div class="form-group"></label>
                                <label for="email" class="col-md-3 control-label">照片</label>
                                <div class="col-md-8">
                                    <input id="email" type="file"  class="form-control" name="imgs[]" multiple autofocus>
                                </div>
                            </div>



                            {{--</div>--}}

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
    </div>

@endsection