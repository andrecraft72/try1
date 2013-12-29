<?
session_start();
if (isset($_POST['submit'])){

include "koneksi.php";

    if(!get_magic_quotes_gpc()){
        $passwd1=addslashes($_POST['passwd1']);
        $username=addslashes($_POST['username']);
        }
//    $enkrip_pass=md5($pass);
//periksa username dan password saat login
$sql=mysql_query("SELECT * FROM logins WHERE username = '".$username."'")
    or die(mysql_error());
    $row=mysql_fetch_assoc($sql);
 if (md5($passwd1)==$row['pass']){
        //menciptakan session
        session_register("username");
        $_SESSION['username']=$row['username'];
        header("Location: ".$config_basedir);
       }else{
        header("Location: ".$config_basedir."/login.php?error=1");}
}else{
?>
<html>
<head>
       <title>Login here...</title>
       <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="post" name="login">
    <table align="center">
    <tr><th colspan="2"><h2>Login</h2></th></tr>
    <tr><td>user name </td><td> <input type="text" name="username"></td></tr>
    <tr><td>password  </td><td> <input type="password" name="passwd1"></td></tr>
    <tr><td colspan="2"><input type="submit" name="submit" value="Login"></td></tr>
<?
if($_GET['error']){
    echo "<tr><td colspan='2'><hr><small>Gagal Login, Silahkan Coba lagi.</small></td></tr>";
    }
?>
    </table>
    </form>
</body>
</html>
<?
} 
?>