<?php

?>

<html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>用户管理系统</title>
</head>
<body bgcolor="#cccccc">
<h2>用户列表</h2>
<a href="index.php">添加用户</a> <a href="list-user.php">用户列表</a>
<hr width="%90" />

<h3>添加用户</h3>
<form action="add-user.php" method="post">
    <table width="380" border="0" cellpadding="4">
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