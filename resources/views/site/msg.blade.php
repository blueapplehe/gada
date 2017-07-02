@extends('layouts.main')

@section('content')
    	<div id="msg">
			<form class="form-horizontal" action="/site/msg" method="get">
			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">访客留言</label>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">姓名</label>
			    <div class="col-sm-5">
			      <input name="username" class="form-control" >
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputPassword3" class="col-sm-2 control-label">邮箱</label>
			    <div class="col-sm-5">
			      <input name="email" class="form-control" >
			    </div>
			  </div>


			  <div class="form-group">
			    <label for="inputPassword3" class="col-sm-2 control-label">联系号码</label>
			    <div class="col-sm-5">
			      <input name="phone" class="form-control">
			    </div>
			  </div>


			  <div class="form-group">
			    <label for="inputPassword3" class="col-sm-2 control-label">传真</label>
			    <div class="col-sm-5">
			      <input name="fax" class="form-control" >
			    </div>
			  </div>


			  <div class="form-group">
			    <label for="inputPassword3" class="col-sm-2 control-label">地址</label>
			    <div class="col-sm-5">
			      <input name="address"  class="form-control" >
			    </div>
			  </div>


			  <div class="form-group">
			    <label for="inputPassword3" class="col-sm-2 control-label">留言信息</label>
			    <div class="col-sm-5">
			      <textarea  name="message" class="form-control" > </textarea>
			    </div>
			  </div>


			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button id="commit-message" type="submit" class="btn btn-primary">发送</button>
			    </div>
			  </div>
			</form>

    	</div>
    	<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.js"></script>
    	<script>
    	$("#commit-message").on("click",function(){
    		alert("发送成功");
    	});
    	</script>
@endsection