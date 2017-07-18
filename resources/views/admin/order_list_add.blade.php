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

                        <h3>新增订单</h3>
                        <form class="form-horizontal" role="form" method="POST" action="/admin/order_list"  style="margin-left: -30%">
                            {{csrf_field()}}

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">项目名字</label>
                                <div class="col-md-6">
                                    <input id="email" class="form-control" name="name"   autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">项目地址</label>
                                <div class="col-md-6">
                                    <input id="email"  class="form-control" name="address" autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">项目日期</label>
                                <div class="col-md-6">
                                    <input id="email"  class="form-control" name="order_data"  autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">类型</label>
                                <div class="col-md-6">
                                    <input id="email"  class="form-control" name="category"  autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">参数</label>
                                <div class="col-md-6">
                                    <input id="email"  class="form-control" name="parameter"  autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">数量</label>
                                <div class="col-md-6">
                                    <input id="email"   class="form-control" name="amount"  autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">检验机构</label>
                                <div class="col-md-6">
                                    <input id="email"   class="form-control" name="organization"  autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">客户类型</label>
                                <div class="col-md-6">
                                    <select name="article_id">
                                    @foreach( $articles as $art )
                                        <option value ="{{ $art->id }}">{{ $art->title }}</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div>




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

@endsection