@extends('layout.admins')

@section('title','修改页面')


@section('content')

	<div class="container">
    	<div class="mws-panel grid_8">
        	<div class="mws-panel-header">
            	<span></span>
            </div>
            <div class="mws-panel-body no-padding">
            	<form class="mws-form" action="/user/{{$res->id}}" method="post" enctype="multipart/form-data">
            		<div class="mws-form-inline">
            			<div class="mws-form-row">
            				<label class="mws-form-label">用户名</label>
            				<div class="mws-form-item">
            					<input type="text" class="small" name="uname" value="{{$res->uname}}">
            				</div>

            			</div>
            			<div class="mws-form-row">
            				<label class="mws-form-label">密码</label>
            				<div class="mws-form-item">
            					<input type="text" class="small" name="password" value="{{$res->password}}">
            				</div>
            			</div>
            			<div class="mws-form-row">
            				<label class="mws-form-label">确认密码</label>
            				<div class="mws-form-item">
            					<input type="text" class="small" name="repassword">
            				</div>
            			</div>
            			<div class="mws-form-row">
            				<label class="mws-form-label">邮箱</label>
            				<div class="mws-form-item">
            					<input type="text" class="small" name="email" value="{{$res->email}}">
            				</div>
            			</div>
            			<div class="mws-form-row">
            				<label class="mws-form-label">手机号</label>
            				<div class="mws-form-item">
            					<input type="text" class="small" name="tel" value="{{$res->tel}}">
            				</div>
            			</div>
            			<div class="mws-form-row">
            				<label class="mws-form-label">头像</label>

            				<div class="mws-form-item">
            					<input type="file" name="profile" class="large" value="{{$res->profile}}" readonly="readonly"class="fileinput-preview">
            				</div>
            			</div>
            			<div class="mws-form-row">
            				<label class="mws-form-label">状态</label>
            				<div class="mws-form-item clearfix">
            					<ul class="mws-form-list inline">
            						<li><input type="radio" name="status" value="{{$res->status}}"> <label>开启</label></li>
            						<li><input type="radio" name="status" value="{{$res->status}}"> <label>禁用</label></li>
            						
            					</ul>
            				</div>
            			</div>
            		</div>

            		<div class="mws-button-row">

            			<input type="submit" value="修改" class="btn btn-danger">
                              {{ csrf_field() }}
                              {{ method_field('PUT') }}
            		</div>
            	</form>
            </div>    	
        </div>
      
    </div>


@endsection
