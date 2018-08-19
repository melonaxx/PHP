<?php

#####常用字符串输出函数#####
$str = 'string';
$str1 = '变量1';
$str2 = '变量2';

echo $str1, $str2; //多个变量输出

print($str1);  //单变量输出

//die($str);  //别名是exit();   终止脚本执行 可以顺便输出内容

print_r($str); var_dump($str);  //格式化变量输出

chr('92'); ord('a');  //ASCII转换 字符串之间的比较也是ASCII进行比较的 'aab' > 'aac'

trim($str); ltrim($str); rtrim($str);  //去除字符串两侧多余的字符（默认删空格）

str_pad($str, 10, '##');  //字符串填充

nl2br($str);  //字符串中\n前添加<br/>标签，实现换行输出

htmlspecialchars($str); htmlentities($str);  //格式化字符串中的标签

strip_tags($str);  //去除字符串中的html标签

//英文（字节）：一个字母是一个字节
//中文（字节）：当前文件格式一个字 utf-8为3个字节  GBK为2个字节
strlen($str);  mb_strlen($str1, 'utf8');//字符串的长度

number_format($str1,'小数位', '千分位分隔符', '小数位分隔符'); //格式化数字的

md5($str); //不可逆的

explode(',', $str1, 2); //字符串拆分函数

implode(',', array('a', 'b', 'c')); //字符串组合函数

substr($str, 'start', 'length'); //字符串的截取

mb_substr($str1, 'start', 'length', 'UTF-8'); //特定编码的字符串截取

strpos($str, 's'); strrpos($str1, 'm'); //s首次/最后一次出现的位置

strstr($str, 's', true); //查找字符串并截取
strchr($str, 's', true); //上面的别名，查找字符串并截取
strrchr($str, 's'); //从后面查找字符串并截取

//有三种方式：一对一换、多对一换、多对多换
//第三个参数为数组就会遍历，也返回数组
str_replace(';', ':', $str1); //在第三个中找到第一个换成第二个

file_get_contents("文件名"); // 获取指定文件的内容
file_put_contents("文件名","内容");//将内容写入(覆盖写)到指定文件中
file_put_contents("文件名","内容",FILE_APPEND);//将内容写入(追加写)到指定文件中