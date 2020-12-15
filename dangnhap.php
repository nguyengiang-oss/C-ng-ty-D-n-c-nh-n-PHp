
<?php 
	session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Đăng nhập</title>
<link type="text/css" rel="stylesheet" href="css.css">
</head>
<body>
	<div id="tong">
    	<div id="header"><img src="img/Logo.gif" width="251" height="55"><img src="img/Nut_GioiThieu.gif" width="135" height="55"><img src="img/Nut_LienHe.gif" width="71" height="55"><img src="img/Nut_ThuongMai.gif" width="94" height="55"><img src="img/Nut_DichVu.gif" width="71" height="55"><img src="img/Nut_DauTu.gif" width="66" height="55"><img src="img/Nut_DuLich.gif" width="90" height="55"></div>
        <div id="left"><img src="img/LienHe_Hinh.gif" width="199" height="227">
        <div id="left_eng"><img src="img/english.gif" width="64" height="18"><img src="img/tiengviet.gif" width="77" height="18"></div>
        </div>
        <div id="center"><form method="post">
	<table  cellpadding="0px" cellspacing="0px" border="1px" bgcolor="#00CCCC" >
    	<tr>
        	<td colspan="2" align="center">Đăng nhập tài khoản</td>
        </tr>
        <tr>	
        	<td>Tên đăng nhập</td>
            <td><input type="text" name="tendn"/></td>
        </tr>
        <tr>
         	<td>Mật khẩu</td>
            <td><input type="password" name="mk"/></td>
        </tr>
        <tr>
        	<td colspan="2" align="center"><input type="submit" name="ok" value="Đăng nhập"></td>
        </tr>
    </table>
</form>
<?php 
	if(isset($_POST['ok']))
		{
			include('connect.php');
			$user=$_POST['tendn'];
			$pass=$_POST['mk'];

				$sqldn1="select * from dangnhap where Account='$user' and Password='$pass'";
				$thucthidn1=mysqli_query($conn,$sqldn1);
				$num1=mysqli_num_rows($thucthidn1);
				
				if($num1==1)
				{
					$_SESSION['name']=$user;
					header('location:hienthi.php');
					}
					else echo "<script> alert(Không đăng nhập được! Tài khoản hoặc mật khẩu không đúng)</script>";
					}
					
?></div>
        <div id="clr"></div>
        <div id="footer">Tốt nhất với trình duyệt ID 5.0 trở lên. Độ phân giải 800x600</div>
    </div>
</body>
</html>
