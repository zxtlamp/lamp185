@extends('layout.admins')

@section('title','用户信息页面')

@section('content')



<table class="mws-table mws-datatable">
        <thead>
            <tr>
                <th>ID</th>
                <th>姓名</th>
                <th>密码</th>
                <th>邮箱</th>
                <th>电话</th>
                <th>头像</th>
                <th>状态</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td>{{$res->id}}</td>
                <td>{{$res->uname}}</td>
                <td>{{$res->email}}</td>
                <td>{{$res->tel}}</td>
                <td>{{$res->profile}}</td>
                <td>{{$res->status}}</td>
               

                <td>
					 <a href="/user/{{$res->id}}/edit" class="btn btn-success">修改</a>
                     <a href="/user/{{$res->id}}" class="btn btn-danger">删除</a> 
                </td>
                
            </tr>

        </tbody>
    </table>

@endsection