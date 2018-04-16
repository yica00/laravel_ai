@extends('admin.base')
@section('content')
    <script>
        $('#left-bar .nav>li:nth-child(4)>.menu').addClass('on');
    </script>


    <div class="main-wrap fadeInRight">
        <p style="color: red"><?php
            if(!is_object($errors)){
                echo $errors;
            }?>
        </p>

        <table class="tablePanel2" cellpadding="0" cellspacing="0" width="100%">
            <tr style="border-bottom:1px solid #BBB;height: 50px;border-top:1px solid #BBB;">
                <th>客户名</th>
                <th>类型</th>
                <th>登记</th>
                <th>备注</th>
                <th>操作</th>
            </tr>
            @foreach($customers as $sort)
                <tr style="border-bottom:1px solid #BBB;height: 40px">

                    <td>{{$sort->name}}</td>
                    <td>{{$sort->category->name}}</td>
                    <td>{{$sort->level->name}}</td>
                    <td>{{ mb_substr($sort->remark,0,10)  }}...</td>

                    <td>
                        <a class="act-btn" href="/admin/customer/{{$sort->id}}/edit">编辑</a>
                        <a class="act-btn" onclick="if(confirm('确定删除此项？')){location.href='/admin/customer/{{$sort->id}}/delete'}"} >删除</a>
                    </td>
                </tr>
            @endforeach

        </table>
        {{$customers->links()}}
    </div>

@endsection