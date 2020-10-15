<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>添加用户</title>
</head>
<body>
<?php

include 'menu.php'; // 导入网站的导航栏
?>

<h3>添加用户</h3>

<?php
// 执行留言信息添加操作

// 1.获取要添加的用户信息，并且补上添加时间
$id = $_POST['id'];//行数
$name = $_POST['username']; // 用户名
$sex = $_POST["sex"]; // 用户性别
$age = $_POST["age"]; // 用户年龄
$profile = $_POST["profile"]; // 用户内容
$addtime = time(); // 修改时间 （时间戳的格式）

// 2.拼装（组装）留言信息
$ly = "{$name}|{$sex}|{$age}|{$profile}|{$addtime}@@@";

// 3,从留言user.txt信息文件中获取留言信息
$info = file_get_contents("user.txt");

// 4,以@@@符合拆分留言信息为一条一条的（将留言信息以@@@的符号拆分成留言数组）
$lylist = explode("@@@", $info);

// 5，更新指定ID的用户（行数为id+1，所以此处为行数-1）
$lylist[$id-1]="{$name}|{$sex}|{$age}|{$profile}|{$addtime}@@@";

// 6,还原用户信息为字串，并写回留言文件：user.txt
$ninfo = implode("@@@", $lylist);
file_put_contents("user.txt", $ninfo);

// 7.输出留言成功
echo "修改成功！谢谢...";

?>
</body>
</html>
