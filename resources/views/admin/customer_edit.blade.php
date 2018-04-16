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

                        <h3>修改【 {{$customer->name}} 】</h3>
                        <form class="form-horizontal" role="form" method="POST" action="/admin/customer/{{ $customer->id  }}" enctype="multipart/form-data" >
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="PUT">
                            {{--<input value="{{ $customer->id  }}" name="pid" style="display: none" >--}}
                            <div class="form-group">
                                <label for="email" class="col-md-3 control-label">客户</label>
                                <div class="col-md-8">
                                    <input id="email" class="form-control" name="name" value="{{$customer->name}}"   autofocus>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="email" class="col-md-3 control-label">类型</label>
                                <div class="col-md-8">
                                    <select name="type"  class="form-control" id="email">
                                        @foreach( $categorys as $cate )
                                            <option @if( $customer->category_id ==$cate->id ) selected @endif value ="{{$cate->id}}" >{{$cate->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-3 control-label">等级</label>
                                <div class="col-md-8">
                                    <select name="level" id="email"  class="form-control">
                                        @foreach( $levels as $cate )
                                            <option  @if( $customer->level_id ==$cate->id ) selected @endif value ="{{$cate->id}}" >{{$cate->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="email" class="col-md-3 control-label">备注</label>
                                <div class="col-md-8">
                                    {{--<span style="color: red">多个规格之间请用英文逗号隔开</span>--}}
                                    <textarea class="form-control" rows="10" name="remark" >{{$customer->remark}}</textarea>
                                </div>
                            </div>



                            <div class="form-group"></label>
                                <label for="email" class="col-md-3 control-label">照片</label>
                                <div class="col-md-8">
                                    <input id="email" type="file"  class="form-control" name="imgs[]" multiple autofocus>
                                    @foreach( explode(',',$customer->imgs) as $img )
                                    <img src="{{$img}}" width="100px" />
                                    @endforeach
                                </div>
                            </div>


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
    </div>

@endsection