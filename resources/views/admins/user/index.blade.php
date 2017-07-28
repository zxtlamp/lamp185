@extends('layout.admins')

@section('title','用户列表页')


@section('content')
	<table class="mws-table mws-datatable">
        <thead>
            <tr>
                <th>ID</th>
                <th>姓名</th>
                <th>邮箱</th>
                <th>电话</th>
                <th>头像</th>
                <th>状态</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
        @foreach($res as $k=>$v)
            <tr>
                <td>{{$v->id}}</td>
                <td>{{$v->uname}}</td>
                <td>{{$v->email}}</td>
                <td>{{$v->tel}}</td>
                <td>{{$v->profile}}</td>
                <td>{{$v->status}}</td>
                <td>
                	<img src="{{$v->profile}}" alt="">
                </td>
                

                <td>
                     <a href="/user/{{$v->id}}/edit"><button>修改</button></a>
                     <form action="/user/{{$v->id}}" method="post">
		
							{{ csrf_field() }}
							{{ method_field('DELETE') }}
                     	<button>删除</button>

                     </form>
                     <a href="/user/{{$v->id}}"><button>查看</button></a> 
                </td>
            </tr>
           @endforeach
        </tbody>
    </table>
 
			

@endsection