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
    $name = $_POST['username']; // 用户名
    $sex = $_POST["sex"]; // 用户性别
    $age = $_POST["age"]; // 用户年龄
    $profile = $_POST["profile"]; // 用户内容
    $addtime = time(); // 添加时间 （时间戳的格式）

    // 2.拼装（组装）留言信息
    $ly = "{$name}|{$sex}|{$age}|{$profile}|{$addtime}@@@";

    // 3.将留言信息追加到user.txt文件中
    $info = file_get_contents("user.txt"); // 获取所有以前的留言
    file_put_contents("user.txt", $info . $ly); // 覆盖式的写入，会对原有数据进行覆盖

    // 4.输出留言成功
    echo "添加成功！谢谢...";

    ?>
</body>
</html>
