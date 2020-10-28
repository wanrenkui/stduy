<html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>用户管理系统</title>
</head>
<body>

<?php

include 'menu.php'; // 导入网站的导航栏
?>

<h3>删除用户</h3>

<?php

// 执行删除指定ID的用户信息
// 1,获取要删除用户的 id号
$id = $_GET["id"]; // url地址提交都是get方式提交的
$name = $_GET['username']; // 用户名
$sex = $_GET["sex"]; // 用户性别
$age = $_GET["age"]; // 用户年龄
$profile = $_GET["profile"]; // 用户内容
$addtime = time(); // 添加时间 （时间戳的格式）

// 2,从留言user.txt信息文件中获取留言信息
//$info = file_get_contents("user.txt");

// 3,以@@@符合拆分留言信息为一条一条的（将留言信息以@@@的符号拆分成留言数组）
//$lylist = explode("@@@", $info);

// 4，更新指定ID的用户
//$lylist[$id]="{$name}|{$sex}|{$age}|{$profile}|{$addtime}@@@";
$db = new mysqli("127.0.0.1","root","wrkzzbwn999","user_manage_system");
$sql = "update users set user_name='{$name}',
user_sex='{$sex}',
user_age='{$age}',
user_profile='{$profile}',
user_addtime='{$addtime}' WHERE id='{$id}'";
//看一下是不是传递过来的id值；
if($db->query($sql))
{
    echo "修改成功";
}
else{
    echo "修改失败";
}

// 5,还原用户信息为字串，并写回留言文件：user.txt
//$ninfo = implode("@@@", $lylist);
//file_put_contents("user.txt", $ninfo);
// 6
//echo "第","$id"+1,"行","修改为:\n","用户名：$name  \n","性别：$sex  \n","年龄：$age  \n","个人简介：$profile  \n";
//echo "修改成功！！";

?>

</table>

<h3>查看用户</h3>
<table border="1" width="700">
    <tr>
        <th>用户名</th>
        <th>性别</th>
        <th>年龄</th>
        <th>个人简介</th>
        <th>注册时间</th>
        <th>操作</th>
    </tr>
    <?php

    // 获取用户信息，解析后输出到表格中
    // 1,从user.txt信息文件中获取用户信息
    $info = file_get_contents("user.txt");
    // 2,取出用户内容最后的三个@@@符号
    $info = rtrim($info, "@");

    if (strlen($info)>=8){

// 3,以@@@符合拆分留言信息为一条一条的（将用户信息以@@@的符号拆分成留言数组）
        $lylist = explode("@@@", $info);
// 4,遍历用户信息数组，对每个用户做再次解析
        foreach ($lylist as $key => $value) {
            $ly = explode("|", $value); // 将每个用户信息以##拆分成每个用户字段
            echo "<tr>";
            echo "<td>{$ly[0]}</td>";
            echo "<td>{$ly[1]}</td>";
            echo "<td>{$ly[2]}</td>"; // 字符串截取函数
            echo "<td>{$ly[3]}</td>";
            echo "<td>" . date("Y-m-d H:i:s", $ly[4] + 8 * 3600) . "</td>";
            echo "<td>
                        <input type='button' onclick='xiugai(this)' value='编辑'>
                        <a disabled='none' href='modify-user.php?id={$key}?username={$ly[0]}?sex={$ly[1]}?age={$ly[2]}?profile={$ly[3]}'>保存</a>
                        <a href='del-user.php?id={$key}'>删除</a>
                      </td>";
            // echo "<td><a href='javascript:dodel({$key})'>删除</a></td>";
            // 如何进行链接传值
            echo "</tr>";
            // echo $value."<br>";
        }
    }
    ?>
</table>


</body>
</html>
