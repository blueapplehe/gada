@extends('layouts.main')

@section('content')
		<style>
			.type-button{
				cursor:pointer; 
			}
		</style>
    	<div id="products">	
    	<div>
    		 产品类别:	|	
    		 <span class="type-button" type="diandu">电镀类</span>	|	
    		 <span class="type-button" type="buxiugang">不锈钢类</span>	|	
    		 <span class="type-button" type="pengqi">喷漆类、电泳类</span>	|	
    		 <span class="type-button" type="pengfen">喷粉类、陶瓷漆、铝制排气管、塑料类</span>	|	
    		 <span class="type-button" type="yachou">压铸件</span>	|
    	</div>
    	<br/>
    	<div>
    		<img id="image" src="http://www.kpgada.com/img/20160314/20160314104439431.jpg"  style="max-width:100%" />
    	</div>
    	</div>
    	<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.js"></script>
    	<script>
    	$(".type-button").on("click",function(){

			// var myhash = new Array();
			// myhash["pengfen"]="http://www.kpgada.com/img/20160317/20160317112142478.jpg";
			// mahash["yachou"]="http://www.kpgada.com/img/20160318/20160318160855375.jpg";
    		if($(this).attr("type")=="diandu"){
    			$("#image").attr("src","http://www.kpgada.com/img/20160314/20160314104439431.jpg");

    		}

    		if($(this).attr("type")=="buxiugang"){
    			$("#image").attr("src","http://www.kpgada.com/img/20160316/20160316210753840.jpg");

    		}


    		if($(this).attr("type")=="pengqi"){
    			$("#image").attr("src","http://www.kpgada.com/img/20160317/20160317111042748.jpg");

    		}

    		if($(this).attr("type")=="pengfen"){
    			$("#image").attr("src","http://www.kpgada.com/img/20160317/20160317112142478.jpg");

    		}


    		if($(this).attr("type")=="yachou"){
    			$("#image").attr("src","http://www.kpgada.com/img/20160318/20160318160855375.jpg");

    		}



    	});
    	</script>
@endsection