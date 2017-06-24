@extends('admin.base')
@section('content')
    <script>
        $('#left-bar .nav>li:nth-child(3)>.menu').addClass('on');
    </script>
    <div class="main-menu fadeInLeft">
        <div class="title">
            <i class="fa fa-file-text-o"></i> 设置
        </div>
        <ul class="act-list">
            <li>
                <a href="/admin/product"><i class="fa fa-plus-square-o"></i>业务范围设置页</a>
            </li>
        </ul>
    </div>
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

                            <h3>业务范围修改</h3>
                            <form class="form-horizontal" role="form" method="POST" action="/admin/product"   style="margin-left: -30%">
                                {{csrf_field()}}

                                <input type="hidden" name="_method" value="PUT">
                                <div class="form-group">
                                    <label for="email" class="col-md-4 control-label">业务名字1</label>
                                    <div class="col-md-6">
                                        <input id="email" class="form-control" name="product1" value="{{ $seting['product1'] }}"  autofocus>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email" class="col-md-4 control-label">业务介绍1</label>
                                    <div class="col-md-6">
                                        <input id="email"  class="form-control" name="product_intro1" value="{{$seting['product_intro1']}}"autofocus>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email" class="col-md-4 control-label">具体业务1_1</label>
                                    <div class="col-md-6">
                                        <input id="email"  class="form-control" name="product_det1_1" value="{{$seting['product_det1_1']}}" autofocus>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-md-4 control-label">具体业务1_2</label>
                                    <div class="col-md-6">
                                        <input id="email"  class="form-control" name="product_det1_2" value="{{$seting['product_det1_2']}}" autofocus>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-md-4 control-label">具体业务1_3</label>
                                    <div class="col-md-6">
                                        <input id="email"  class="form-control" name="product_det1_3" value="{{$seting['product_det1_3']}}" autofocus>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-md-4 control-label">具体业务1_4</label>
                                    <div class="col-md-6">
                                        <input id="email"  class="form-control" name="product_det1_4" value="{{$seting['product_det1_4']}}" autofocus>
                                    </div>
                                </div>



                                <div class="form-group">
                                    <label for="email" class="col-md-4 control-label">业务名字2</label>
                                    <div class="col-md-6">
                                        <input id="email" class="form-control" name="product2" value="{{ $seting['product2'] }}"  autofocus>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email" class="col-md-4 control-label">业务介绍2</label>
                                    <div class="col-md-6">
                                        <input id="email"  class="form-control" name="product_intro2" value="{{$seting['product_intro2']}}"autofocus>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email" class="col-md-4 control-label">具体业务2_1</label>
                                    <div class="col-md-6">
                                        <input id="email"  class="form-control" name="product_det2_1" value="{{$seting['product_det2_1']}}" autofocus>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-md-4 control-label">具体业务2_2</label>
                                    <div class="col-md-6">
                                        <input id="email"  class="form-control" name="product_det2_2" value="{{$seting['product_det2_2']}}" autofocus>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-md-4 control-label">具体业务2_3</label>
                                    <div class="col-md-6">
                                        <input id="email"  class="form-control" name="product_det2_3" value="{{$seting['product_det2_3']}}" autofocus>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-md-4 control-label">具体业务2_4</label>
                                    <div class="col-md-6">
                                        <input id="email"  class="form-control" name="product_det2_4" value="{{$seting['product_det2_4']}}" autofocus>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="email" class="col-md-4 control-label">业务名字3</label>
                                    <div class="col-md-6">
                                        <input id="email" class="form-control" name="product3" value="{{ $seting['product3'] }}"  autofocus>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email" class="col-md-4 control-label">业务介绍3</label>
                                    <div class="col-md-6">
                                        <input id="email"  class="form-control" name="product_intro3" value="{{$seting['product_intro3']}}"autofocus>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email" class="col-md-4 control-label">具体业务3_1</label>
                                    <div class="col-md-6">
                                        <input id="email"  class="form-control" name="product_det3_1" value="{{$seting['product_det3_1']}}" autofocus>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-md-4 control-label">具体业务3_2</label>
                                    <div class="col-md-6">
                                        <input id="email"  class="form-control" name="product_det3_2" value="{{$seting['product_det3_2']}}" autofocus>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-md-4 control-label">具体业务3_3</label>
                                    <div class="col-md-6">
                                        <input id="email"  class="form-control" name="product_det3_3" value="{{$seting['product_det3_3']}}" autofocus>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-md-4 control-label">具体业务3_4</label>
                                    <div class="col-md-6">
                                        <input id="email"  class="form-control" name="product_det3_4" value="{{$seting['product_det3_4']}}" autofocus>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="email" class="col-md-4 control-label">业务名字4</label>
                                    <div class="col-md-6">
                                        <input id="email" class="form-control" name="product4" value="{{ $seting['product4'] }}"  autofocus>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email" class="col-md-4 control-label">业务介绍4_1</label>
                                    <div class="col-md-6">
                                        <input id="email"  class="form-control" name="product_intro4" value="{{$seting['product_intro4']}}"autofocus>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email" class="col-md-4 control-label">具体业务4_1</label>
                                    <div class="col-md-6">
                                        <input id="email"  class="form-control" name="product_det4_1" value="{{$seting['product_det4_1']}}" autofocus>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-md-4 control-label">具体业务4_2</label>
                                    <div class="col-md-6">
                                        <input id="email"  class="form-control" name="product_det4_2" value="{{$seting['product_det4_2']}}" autofocus>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-md-4 control-label">具体业务4_3</label>
                                    <div class="col-md-6">
                                        <input id="email"  class="form-control" name="product_det4_3" value="{{$seting['product_det4_3']}}" autofocus>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-md-4 control-label">具体业务4_4</label>
                                    <div class="col-md-6">
                                        <input id="email"  class="form-control" name="product_det4_4" value="{{$seting['product_det4_4']}}" autofocus>
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