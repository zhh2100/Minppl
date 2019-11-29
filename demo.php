<?php 
/*
 +----------------------------------------------------------------------
 + Title        : 迷你分词插件
 + Author       : 小黄牛
 + Version      : V1.0.0.1
 + Initial-Time : 2017-08-20 12:32:00
 + Last-time    : 2017-08-21 15:32:00 + 小黄牛
 + Desc         : 
 +----------------------------------------------------------------------
*/

require 'minppl/Minppl.class.php';

# 实例化分词类
$obj  = new Minppl();
/**
 * 调用分词
 * @param string $key     需要被分词的目标字符串
 * @param array  $lexicon 需要用到的分词库，一维数组
 * @param bool   $sort    分词结果字数排序，true|false，拼音升|降，默认为false
 * @param int    $num     匹配到的分词最大返回条数，默认5
 * @param bool   $mode    分词库匹配不到关键词的情况下，是否启动解词算法，默认true
 * @param int    $words   启动解词算法下的关键词长度，默认2
 * @return array|bool     分词结果或false
*/
$data = $obj->__Initialize('源文本：  [更新词典] 
中华人民共和国
 
岐义处理  新词识别  多元切分  词性标注  预载全部词条 
       

 中华人民共和国
 

调试信息：
字串长度：0.02K 自动识别词：
内存占用及执行时间：(表示完成某个动作后正在占用的内存)
没任何操作:  0.35 MB 用时：0.0000 秒
初始化对象:  0.47 MB 用时：0.0017 秒
载入基本词典:  0.51 MB 用时：0.0006 秒
执行分词:  0.52 MB 用时：0.0001 秒
输出分词结果:  0.52 MB 用时：0.0000 秒
总用时：0.0024 秒', [
	'Phpanalysis.txt',
	'2-mingxing.txt',
], false, 10, true, 2);
echo '<pre>';
var_dump($data);

# 开启调试模式
$obj->De_bug();
# 打印调试内容-错误信息与运行时间，内存消耗
$obj->Log_echo();