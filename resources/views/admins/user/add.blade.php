@extends('layout.admins')

@section('title','用户添加页面')

@section('content')
	<!-- Inner Container Start -->
    <div class="container">
    	<div class="mws-panel grid_8">
        	<div class="mws-panel-header">
            	<span></span>
            </div>
            <div class="mws-panel-body no-padding">
            	<form class="mws-form" action="/user" method="post" enctype="multipart/form-data">
            		<div class="mws-form-inline">
            			<div class="mws-form-row">
            				<label class="mws-form-label">用户名</label>
            				<div class="mws-form-item">
            					<input type="text" class="small" name="uname">
            				</div>

            			</div>
            			<div class="mws-form-row">
            				<label class="mws-form-label">密码</label>
            				<div class="mws-form-item">
            					<input type="text" class="small" name="password">
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
            					<input type="text" class="small" name="email">
            				</div>
            			</div>
            			<div class="mws-form-row">
            				<label class="mws-form-label">手机号</label>
            				<div class="mws-form-item">
            					<input type="text" class="small" name="tel">
            				</div>
            			</div>
            			<div class="mws-form-row">
            				<label class="mws-form-label">头像</label>
            				<div class="mws-form-item">
            					<input type="file" name="profile" class="large" value="this is a readonly field" readonly="readonly"class="fileinput-preview">
            				</div>
            			</div>
            			<div class="mws-form-row">
            				<label class="mws-form-label">状态</label>
            				<div class="mws-form-item clearfix">
            					<ul class="mws-form-list inline">
            						<li><input type="radio" name="status" value="1"> <label>开启</label></li>
            						<li><input type="radio" name="status" value="0"> <label>禁用</label></li>
            						
            					</ul>
            				</div>
            			</div>
            		</div>

            		<div class="mws-button-row">

            			<input type="submit" value="添加" class="btn btn-danger">
                              {{ csrf_field() }}
            		</div>
            	</form>
            </div>    	
        </div>
      
    </div>
    <!-- Inner Container End -->
               
           
            
       
 
         
@endsection