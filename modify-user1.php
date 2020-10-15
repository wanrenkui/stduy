
<html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>用户管理系统</title>
</head>
<body bgcolor="#cccccc">

<?php

include 'menu.php'; // 导入网站的导航栏
?>

<h3>修改用户</h3>

<?php

// 执行删除指定ID的用户信息
// 1,获取要修改用户的信息
$id = $_GET["id"]; // url地址提交都是get方式提交的
$name = $_GET['username']; // 用户名
$sex = $_GET["sex"]; // 用户性别
$age = $_GET["age"]; // 用户年龄
$profile = $_GET["profile"]; // 用户内容
$addtime = time(); // 添加时间 （时间戳的格式）
// 2，信息展示
echo "要修改的信息为：第","$id"+1,"行","信息为:\n","用户名：$name  \n","性别：$sex  \n","年龄：$age  \n","个人简介：$profile  \n";

?>

<form action="modify.php" method="post">
    <table width="380" border="0" cellpadding="4">

        <tr> <!-- 使用数字输入域定义第几行输入框 -->
            <th>行数：</th>
            <td><input type="number" name="id" size="20"></td>
        </tr>

        <tr> <!-- 使用输入域定义姓名输入框 -->
            <th>姓名：</th>
            <td><input type="text" name="username" size="20"></td>
        </tr>

        <tr> <!-- 使用单选按钮域定义性别输入框 -->
            <th>性别：</th>
            <td>
                <input type="radio" name="sex" value="男" checked>男
                <input type="radio" name="sex" value="女">女
                <input type="radio" name="sex" value="保密">保密
            </td>
        </tr>

        <tr> <!-- 使用数字输入域定义年龄输入框 -->
            <th>年龄：</th>
            <td><input type="number" name="age" size="20"></td>
        </tr>

        <tr> <!-- 使用多行文本输入域定义个人简介输入框 -->
            <th>个人简介：</th>
            <td><textarea name="profile" rows="4" cols="40"></textarea></td>
        </tr>

        <tr>
            <td colspan="2" align="center">
                <input type="submit" value="提交" />&nbsp;
                <input type="reset" value="重置" /></td>
        </tr>
    </table>
</form>
</body>
</html>