<html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>用户列表</title>

<!--    <script type="text/javascript">-->
<!--                  //点击之后页面变成可提交状态-->
<!--                  function xiugai(a){-->
<!--                          var trobj = a.parentNode.parentNode; //获得按钮所在行的行对象-->
<!--                          var tdobj = trobj.getElementsByTagName("td");-->
<!--                          var obj = a.value;-->
<!---->
<!--                          if(obj=='编辑'){-->
<!--                              a.disabled='none'-->
<!--                              for(var i =0;i<tdobj.length-1;i++){-->
<!--                                  //循环把每一个单元格变成input类型-->
<!--                                  tdobj[i].innerHTML ="<input οnblur='submit(this)' type=\"input\" value='" +tdobj[i].innerText+ " '/>";-->
<!--                              }-->
<!--                          }else {-->
<!--                              //location.href="del-user.php?id={$key}?username={$ly[0]}?sex={$ly[1]}?age={$ly[2]}?profile={$ly[3]}"-->
<!--                              //location.reload();-->
<!--                          }-->
<!---->
<!--                      }-->
<!--                  //异步提交-->
<!--              </script>-->

</head>
<body>
    <?php

    include 'menu.php'; // 导入网站的导航栏
    ?>

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
                        <a disabled='none' href='modify-user1.php?id={$key}&username={$ly[0]}&sex={$ly[1]}&age={$ly[2]}&profile={$ly[3]}'>编辑</a>
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
