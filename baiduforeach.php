<?php
$list = array(
  array(
        "title"=> "1我在看java视频的时候为什么包定义成<span>cn.itcast</span>是什么意..._百度知道",
        "datetime"=> "5个回答 - 最新回答: 2013年01月15日 - 69人觉得有用",
        "desc"=> "<span>最佳答案:</span> 呵呵,程序员有个不成文的规范,包的命名一般都是以自己公司或企业的域名来,如果我没猜错的话,出这个视频的人所在的公司域名应该为www.itcast.cn。没...",
        "other"=> "更多关于itcast的问题>>",
        "kuaizhao"=> "zhidao.baidu.com/link?...  - 百度快照"
    ),
	array(
        "title"=> "2我在看java视频的时候为什么包定义成<span>cn.itcast</span>是什么意..._百度知道",
        "datetime"=> "1个回答 - 最新回答: 2013年01月15日 - 69人觉得有用",
        "desc"=> "<span>最佳答案:</span> 呵呵,程序员有个不成文的规范,包的命名一般都是以自己公司或企业的域名来,如果我没猜错的话,出这个视频的人所在的公司域名应该为www.itcast.cn。没...",
        "other"=> "更多关于itcast的问题>>",
        "kuaizhao"=> "zhidao.baidu.com/link?...  - 百度快照"
	),
	array(
        "title"=> "3我在看java视频的时候为什么包定义成<span>cn.itcast</span>是什么意..._百度知道",
        "datetime"=> "4个回答 - 最新回答: 2013年01月15日 - 69人觉得有用",
        "desc"=> "<span>最佳答案:</span> 呵呵,程序员有个不成文的规范,包的命名一般都是以自己公司或企业的域名来,如果我没猜错的话,出这个视频的人所在的公司域名应该为www.itcast.cn。没...",
        "other"=> "更多关于itcast的问题>>",
        "kuaizhao"=> "zhidao.baidu.com/link?...  - 百度快照"
	),
	array(
        "title"=> "4我在看java视频的时候为什么包定义成<span>cn.itcast</span>是什么意..._百度知道",
        "datetime"=> "9个回答 - 最新回答: 2013年01月15日 - 69人觉得有用",
        "desc"=> "<span>最佳答案:</span> 呵呵,程序员有个不成文的规范,包的命名一般都是以自己公司或企业的域名来,如果我没猜错的话,出这个视频的人所在的公司域名应该为www.itcast.cn。没...",
        "other"=> "更多关于itcast的问题>>",
        "kuaizhao"=> "zhidao.baidu.com/link?...  - 百度快照"
    )
	);
$length = count($list);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
	<style>
	* {
		margin:0;
		padding:0;
	}
	a {
		display: block;
		color: #00e;
	}
	a:hover {
		color: #c00;
	}
	dl {
		width: 550px;
		margin-bottom: 15px;
		margin-left: 20px;
		/* background-color: pink; */
	}
	.bt {
		font-size: 16px;
	}
	.bt span {
        color: #c00;
	}
    .dd p {
		font-size: 13px;
		color: #666;
	}
	.zw {
		font-size: 13px;
		color: black;
	}
	.zw span {
		color: #666;
	} 
	 .more {
		font-size: 12px;
		color: #666;
	} 
	.bk {
		font-size: 13px;
		text-decoration: none;
		color: #555;
	}
	</style>
</head>
<body>	
	<?php foreach($list as $value ){?>
		<dl>
			<dt>				
				<a href="#" class="bt"><?php echo $value["title"]; ?></a> 				 
			</dt>
			<dd class="dd">
				 <p><?php echo $value["datetime"]; ?></p> 
                 <div class="zw"><?php echo $value["desc"]; ?></div> 
				 <a class="more" href="#"><?php echo $value["other"]; ?></a> 
				 <a href="#" class="bk"><?php echo $value["kuaizhao"]; ?></a> 
			</dd>
		</dl>	
		<?php }	?>	
				
</body>
</html>