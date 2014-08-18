<html>
<head>
	<meta charset="utf-8">
	<title>CALCULATOR</title>
</head>
	<body>
	<form method="post" >
	 <table border="1" bgcolor="yellow">
		<tr><td>
		Number1:<input type="number" name="s1" value="
        <?php if(isset($_POST['s1'])){echo $_POST['s1'];} ?>"></td>
<!--POST un sadece girilen degeri tutmasi icin if kullandik-->
            <td><input type="submit" value="+" name="trans">
            <input type="submit" value="-" name="trans">
            </td></tr>
        <tr><td>
<!--eger valueden sonra kullandigimiz php de entera basarsak bosluk birakiyor -->
        Number2:<input type="number" name="s2" value="
        <?php if(isset($_POST['s2'])){echo $_POST['s2'];}  ?>"></td>
            <td><input type="submit" value="/" name="trans">
            <input type="submit" value="*" name="trans">
            </td></tr>
</table>
	</form>
           
<?php
//switch case yapisi ve $_POST[''] ile girilen degeri cekip result bastiriyoruz

    if(isset($_POST['trans']))
    {
        $s1 = $_POST['s1'];
        $s2 = $_POST['s2'];
        switch ($_POST['trans'])
        {
            case  "+" : $result = $s1+$s2;
                    break;         
            case  "*" : $result = $s1*$s2;
                    break;
            case  "/" : $result = $s1/$s2;
                    break;
            case  "-" : $result = $s1-$s2;
                    break;
                    default;
        }
     echo "Result: <br> $s1 $_POST[trans] $s2 = $result";
    }

?>
 
 
	</body>
</html>