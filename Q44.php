<?php
session_start();
if(isset($_session['counter']))
{
    $_session['counter']+=1;
}
else{
    $_session['counter']=1;
}
$msg="you have visited this page"
.$_session['counter'];
$msg.="In this session.";
?>
<html>
    <head>
        <title>Session</title>
</head>
<body>
<?php echo ($msg)?>
</body>
</html>
