<style>
	.admin-login{
	    width: 425px;
	    margin: 0 auto;
	    margin-top: 35px;
	    background: #fff;
	    border-radius: 3px;
	    border: 1px solid #999;
	    box-shadow: 0px 0px 6px 0px;
	}
	.admin-login .content{
		margin: 15px;
	}
	.admin-login h2{
	    padding: 10px;
	    text-align: center;
	    font-size: 30px;
	    background: #007BFF;
	    color: #fff;
	}
	.admin-login h4{
		background: #007BFF;
		padding: 15px;
		color: #fff;
		text-align: center;
	}
	.admin-login .content #email{
		width: 380px;
		height: 35px;
		margin-bottom: 25px;
		font-size: 15px;
		padding-left: 10px;
	}
	.admin-login .content #pass{
		width: 380px;
		padding-left: 10px;
		height: 35px;
		
	}

	.admin-login .content #show{
		padding-left: 5px;
		cursor: pointer;
		margin-bottom: 15px;
		display: inline-block;
	}
	.admin-login .content input[type="submit"]{
		padding: 12px 171px;
		display: block;
		font-size: 20px;
		cursor: pointer;
	}
</style>
<div class="content">
<div class="admin-login">
	<h2>Admin Login</h2>
	<div class="content">
		<form action="<?php echo BASE_URL;?>login/loginAuth" method="post">
			<?php 
			if(isset($data)){
				if(isset($data['emailFound'])){
					echo $data['emailFound'];
				}
				if(isset($data['passNotMatch'])){
					echo $data['passNotMatch'];
				}
				if(isset($data['data'])){
					echo $data['data'];
				}
			}
			?>
			<input type="text" id="email" name="email" placeholder="E-mail">
			<input type="password" id="pass" name="password" placeholder="Password">
			<p id='show' onclick="show()">Show Password</p>
			<input type="submit" name="admin_submit" value="Login">
		</form>
	</div>
	<h4>www.infinity.com</h4>
</div>
  <script type="text/javascript">
    function show(){
      var x = document.getElementById('pass');
      if(x.type === "password"){
        x.type = "text";
        document.getElementById("show").innerHTML = "Hide Password";
      }else{
        x.type = "password";
        document.getElementById("show").innerHTML = "Show Password";
      }
    }
  </script>