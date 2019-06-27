<!DOCTYPE html>
<html>
<head>
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge,Chrome=1">
	<title></title>
		<link href="/images/livevideo/SeEhMcOADFdgFdAeJBWtXpFGo.ico" rel="shortcut icon" type="image/x-icon">
		<meta name="Keywords" content="">
	<meta name="description" content="">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="/css/livevideo/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/livevideo/animations.css">
	<link rel="stylesheet" type="text/css" href="/css/livevideo/sina-emotion.css">
	<link rel="stylesheet" type="text/css" href="/css/livevideo/ui-dialog.css">
	<link rel="stylesheet" type="text/css" href="/css/livevideo/style.css">
	<link rel="stylesheet" type="text/css" href="/css/livevideo.css">
</head>
<body>
<div class="danmu-warp">
	<div class="danmu-content"></div>
</div>
<div id="js-gift-pmd-warp" class="gift-pmd-warp"></div>
<div class="page-container theme-default layout-video-left theme-background-0" id="main" style="overflow-y:hidden">
		<div class="main-header alpha-bg-body">
		<div class="header-navbar" id="search">
			<img class="main-logo" src="/images/TciyoQdWYoNPjQkTdnxKYBYBM.png" alt="logo">
			<ul></ul>
		</div>
		<div class="header-right-menu">
			<ul>
				<li class="profile-menu listitem dropdown">
					<a class="dropdown-toggle" data-hover="dropdown">
							<img class="avatar" src="/images/livevideo/09.png" alt="gz0801">
							<span class="text-e">{{ $user->name }}</span>
							<span class="caret"></span>
					</a>
					<div class="dropdown-menu profile-dropdown-menu">
					<div class="profile-block clearfix profile-block-base">
						<img class="img-circle img- profile-avatar pull-left" src="/images/livevideo/09.png" alt="10000">
						<div class="">
						<div class="profile-name">{{ $user->name }}</div>
							<ul class="op list-inline">
								<li>
									<a><span id="setbtn"> 设置</span></a>
								</li>
								<li>|</li>
								<li>
									<a href="/logout">退出</a>
								</li>
							</ul>
							</div>
							<div id="idBetInfo" style="padding-left: 90px;line-height: 18px;">
								<div class="bet-cur">当前积分：100</div>
							</div>
						</div>
						<div class="profile-block clearfix">
							<div class="title" style="margin-bottom: 5px;">
									我的推广
									<button id="copy-button2" class="btn btn-success zeroclipboard-is-hover" style="margin-left: 10px;" data-clipboard-text="">点击复制推广链接</button>
								</div>
								<div class="content">
									<p>
										已经推荐 0 人，其中注册会员  人
									</p>
								</div>
							</div>
						</div>
						<div id="myModal" class="modal">
							<!-- Modal content -->
							@include('home.userprofile')
						</div>
				</li>
				<li class="integral-menu listitem">
					<a href="/livevideo/vipvideo">登录</a>
				</li>
				<li class="theme-menu navbar-right listitem" style="margin-right:0px">
					<a  class="dropdown-toggle" data-hover="dropdown"> <i class="icon"></i>
						<span class="text"></span>
					</a>
					<div  class="dropdown-menu theme-dropdown-menu">
						<h4>
							<span class="text">个性化</span>
						</h4>
						<div class="block theme">
							<div class="layout-wrap clearfix">
								<div class="theme-layout-video clearfix">
									<div class="theme-layout theme-layout-video-right" data-theme="layout-video-right"></div>
									<div class="theme-layout theme-layout-video-left" data-theme="layout-video-left"></div>
								</div>
							</div>
							<div class="background-wrap clearfix">
								<a class="theme-bg theme-background background-0" data-theme="theme-background-0"></a>
								<a class="theme-bg theme-background background-1" data-theme="theme-background-1"></a>
								<a class="theme-bg theme-background background-2" data-theme="theme-background-2"></a>
								<a class="theme-bg theme-background background-3" data-theme="theme-background-3"></a>
								<a class="theme-bg theme-background background-4" data-theme="theme-background-4"></a>
								<a class="theme-bg theme-background background-5" data-theme="theme-background-5"></a>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
			<div class="main-sider-menu">
<div class="sider-hot-rank sider-box">
	<div class="sider-title alpha-bg-title"><img  src="/images/livevideo/XquyUGNDSsTAedGzZveCMowTm.png"  style="width: 212px;"></div>
	<div class="hot-rank-body alpha-bg-body">
		<ul id="idHotRank" style="height: auto" class="nice-scroll-h">
		</ul>
	</div>
</div>

<div class="sider-top">
<div class="title alpha-bg-title"><img src="/images/livevideo/stockIco.png"><span style="margin-left: 5px;">行情动态</span></div>
<div class="body alpha-bg-body">
	<div class="guzhi-item " id="idStock0" >
		<span class="name">加载中</span>
		<div style="float: right;">
			<span class="num"></span>
			<span class="per-num"></span>
		</div>
	</div>
	<div class="guzhi-item " id="idStock1" >
		<span class="name">加载中</span>
		<div style="float: right;">
			<span class="num"></span>
			<span class="per-num"></span>
		</div>
	</div>
	<div class="guzhi-item " id="idStock2" >
		<span class="name">加载中</span>
		<div style="float: right;">
			<span class="num"></span>
			<span class="per-num"></span>
		</div>
	</div>
	
<div class="guzhi-showmore" style="height: 20px;"></div>
</div>
</div>

<div class="sider-userlist" >
	<div class="title alpha-bg-title ">
		<img src="/images/livevideo/uselistico.png">
		<span class="dropdown-toggle"  data-hover="dropdown">
		<span style="margin-left: 5px;">在线用户</span>	
	</div>
	<div  class=" user-list nice-scroll alpha-bg-body">
	<!------------     userlist        -->
		<ul id="idUserList" style="margin-bottom: 0px;">
			
		</ul>
	</div>
</div>


<div id="listUserCard" class="dds-card">
	<span class="card-close">×</span>
	<div class="card-inner">
		<div class="card-info">
			<p class="tips">正在加载中...</p>
		</div>
	</div>
</div>
</div>
	<div class="main-content" >
		<div class="main-video">
		 	<div id="js-room-info" class="teacher-info-wrap alpha-bg-title">
			<ul class="video-left-ul">
				<li id="js-live-btn" class="active">
				直播
				</li>
				<li style="width: auto;" class="active">
				<span data-hover="dropdown" id="idTeacherName"  class="dropdown-toggle teacher-info-content-name"></span>
				</li>
			</ul>
			<div class="video-btn-warp">
				<a class="video-btn desktop" href="../siteurl/url-name=" target="e"></a>
			</div>
			<div class="video-btn-warp"  id="idLessonV2" >
			<span class="video-btn lesson dropdown-toggle"  data-hover="dropdown"></span>
			<div class="dropdown-menu animated" data-animation="fadeInDown" style="width: 528px;height: 450px;right: 0px;left: auto;padding: 0;margin: 0;">
			<iframe id="lessonFrame" src="/images/livevideo/12135.html" width="528" height="450"></iframe>
			</div>
			</div>
			<div id="js-refash-video" class="video-btn-warp" style="">
			<span class="video-btn refash"></span>
			</div>
			
			</div>
			
			<div class="index-video-wrap" >
			<div class="main-video-player" >
		
				
			<div id="js-vod-player-wrap" style="display: none;z-index: 100;background: none;"  class="video-player-wrap" ></div>
			<div class="main-notice alpha-bg-title">
			<div style="display: inline;"><img src="/images/livevideo/notice.png"></div>
			<div class="notice_wrap">
			<span id="js_notice_msg"></span>
			</div>
			</div>
			</div>
			<div class="main-room-info">
			<div class="line-menu tab-header">
				<ul  role="tablist">
					<li>
						<a href="801ad.html#custtabs-9403" aria-controls="boards" role="tab" data-toggle="tab">
							<span class="text">财富共盈</span>
							<span class="number"></span>
						</a>
					</li>
				</ul>
			</div>
			<div class="tab-content ">
					<div role="tabpanel" class="nice-scroll tab-pane alpha-bg-body" id="custtabs-9403">
			<div class="boards-content js-tab-select-img  js-banners ">
			<ul  class="dscontent">
					<li style="width: 100%; display: list-item;"><img style="height: auto; width: 100%;" src="/images/livevideo/AmFvEekhFuymyGpdhxABDsvpS.jpg"></li>
					<li style="width: 100%; display: list-item;"><img style="height: auto; width: 100%;" src="/images/livevideo/FQFLzqgpyroKTipslHYAjLgQz.jpg"></li>
			</ul>
			<div class="banner-num" >
				<ul>
					<li  class="on">0</li>
					<li>1</li>
				</ul>
			</div>
			</div>
			</div>
			</div>
			</div>			
		</div>
	</div><!--MAIN-VIDEO-->
	<div class="main-center">
		<div class="main-conent-panle" >
			<div class="chat-wrap-height alpha-bg-body" style="bottom: 199px;">
			<div class="ryPopGift ryPopGift_small first"></div>
			<div class="ryPopGift ryPopGift_small middele"></div>
			<div class="ryPopGift ryPopGift_small last"></div>
			<div class="ryPopGift ryPopGift_small ends"></div>
			<div id="js-screen-group" style="position: absolute;z-index: 11;right: 70px;top:3px;display: none;">
				<div id="chat-lock-screen-btn" title="屏幕锁定开关" class="chat-content-exFun-item unlock"></div>
				<div id="chat-clean-screen-btn" title="清理屏幕" class="chat-content-exFun-item clearchat"></div>
			</div>
			<div class="chat-wrap-content nice-scroll-h" >
				@foreach($messages as $index => $message)
					<div class="chat-message-new   chat-message-type-1 clearfix" data-time="09:31" data-msgid="132136983" id="js-chat-messages-132136983">
						<div class="chat-header">
						<span class="chat-name-bg">
						<span class="chat-role-4"></span>
						<span data-uid="11642897" data-name={{ $message->user->name }} data-usertype="4" class="chat-name js-chat-select-name">{{ $message->user->name }} </span>
						<span class="chat-time">{{ $message->created_at }}</span>
						</span>
						<div class="chat-op">
						<!--可以看自己房间的用户信息-->
						<a class="chat-message-look-btn rolebtn look" data-uid="11642897"></a>
						<a class=" rolebtn del chat-message-delete-btn" data-id="132136983"></a>
						</div>
						</div>
						<div class="dot-top"></div>
						<div class="chat-body ">
						<span class="chat-content" style="  ">
						@if($message->type =='1')
						{{ $message->body }}
						@else
						<img class="chat-pic" title="点击查看原图" src={{ $message->body }} style="max-mwidth: 100%; max-height: 320px;" >
						@endif
						</span>
						<span class="chat-plat">来自:{{ $message->platform }}</span>
						</div>
					</div>
				@endforeach
			</div>
		</div>
		<div class="chat-float-model" >
			<div class="chat-float-model-item">
				<a  class="dropdown-toggle" data-hover="dropdown" data-logtype="30">
					<i class="icon  chat_icon_def icon_phone_ewm"></i>
				</a>
				<div>手机直播</div>
				<div class="dropdown-menu " style="left:-204px;top:15px;width:200px;height:200px;">
					<img width="180px" height="180px"  src="/images/livevideo/qrcode.png"/>
				</div>
			</div>				
		</div>

		<div class="chat-bottom" style="position:absolute; bottom:0px; width:100%">
			<form class="chat-form" >
				<div class="chat-form-caitiao alpha-bg-title">
					<div class="citiao-warp">
						<img data-id="1407"  data-url='/images/livevideo/IBqdZvtiqaidLWlvJswoidXib.gif' src="/images/livevideo/EGUAYFxdugupGpXfPnmuTZcrD.png" ></img>
					</div>
					<div class="citiao-warp">
						<img data-id="1408"  data-url='/images/livevideo/ibiyyaKhEGHunBFYDVcAnDlKG.gif' src="/images/livevideo/PdissmyECecaMJrxwvIIEfUkm.png" ></img>
					</div>
					<div class="citiao-warp">
						<img data-id="1409"  data-url='/images/livevideo/CFvveUEZEipLjyFbfGUbMCTER.gif' src="/images/livevideo/eqFQLGYKpLsqLZkzrhQEZQFrz.png" ></img>
					</div>
					<div class="citiao-warp">
						<img data-id="1410"  data-url='/images/livevideo/PSJmLKAyzJvtTpneDTHSOYdmz.gif' src="/images/livevideo/jPFlffrlDcERSxZzPCtEJaGxp.png" ></img>
					</div>
					<div class="citiao-warp">
						<img data-id="1411"  data-url='/images/livevideo/UhAJWDRQmgxDRhMRRdbMaowyF.gif' src="/images/livevideo/OaWrEyFxazINnAGYyJyxqqiYw.png" ></img>
					</div>
				</div>	
				<div class="chat-send-box">
					<div class="chat-form-exFun">
						<li id="js-chat-faces-btn" >
							<i class="myicon-emo"></i>
						</li>
						<!-- <dir style="clear:both"></dir> -->
					</div>
					<div class="chat-form-input-wrap" style="margin-right:  62px;  ">
						<textarea class="chat-form-input nice-scroll" id="js-chat-form-input"></textarea>
					</div>
					<div class="chat-form-op" >
						<button type="button" style="float: left;" class="chat-form-btn send-btn" id="js-send-btn"></button>
						<div style="float: left;"></div>
					</div>
				</div>
			</form>
			<div id="chat_mzsm_msg"  class="chat-notify-msg-common chat-notify-bottom">分析师及管理员所发表言论均代表个人对市场所持观点。【投资有风险&bull;入市需谨慎】</div>
		</div>
	</div>
	</div>	
</div>
	<div class="shrink-fixed out"></div>
</div>

<div id="idMp3Warp" style="pointer-events: none; "></div>
<div class="treasure-box-panel" style="display: none;">
	<div class="close-btn right-top">×</div>
	<ul class="cb-list">
		<li data-time="5">
			<span class="wait-get"  ></span>
			<a href="javascript:;" data-scores="30"  data-historyid="0" data-index="0" class="next-btn">礼物专享</a>
		</li>
		<li data-time="10">
			<span class="wait-get"  ></span>
			<a href="javascript:;" data-scores="50"  data-historyid="0" data-index="1" class="next-btn">礼物专享</a>
		</li>
		<li data-time="15">
			<span class="wait-get"  ></span>
			<a href="javascript:;" data-scores="80"  data-historyid="0" data-index="2" class="next-btn">礼物专享</a>
		</li>
		<li data-time="30">
			<span class="wait-get"  ></span>
			<a href="javascript:;" data-scores="100"  data-historyid="0" data-index="3" class="next-btn">礼物专享</a>
		</li>
		<li data-time="30">
			<span  class="w-cq-get" ></span>
			<a href="javascript:;" data-scores="300"  data-historyid="0" data-index="4" class="next-btn"> 酬勤专享</a>
		</li>
		<li data-time="30">
			<span  class="w-cq-get" ></span>
			<a href="javascript:;" data-scores="600"  data-historyid="0" data-index="5" class="next-btn"> 酬勤专享</a>
		</li>
	</ul>
	<div class="c-txt get-state-ard">别着急，奖励正在准备中……</div>
</div>
<!-- <script type="text/javascript" src="/js/livevideo/jquery.min.js"></script> -->
<!-- <script type="text/javascript" src="/js/livevideo/jsrender.min.js"></script>
<script type="text/javascript" src="/js/livevideo/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/livevideo/dialog-min.js"></script>
<script type="text/javascript" src="/js/livevideo/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="/js/livevideo/jquery.qrcode.min.js"></script>
<script type="text/javascript" src="/js/livevideo/jquery.countdown.min.js"></script>
<script type="text/javascript" src="/js/livevideo/sina-emotion.js?v=6"></script> -->


<!-- <script type="text/javascript" src='/js/livevideo/chat.js'></script> -->

<!-- <script>
    function FuckInternetExplorer() {
        var browser = navigator.appName;
        var b_version = navigator.appVersion;
        var version = b_version.split(";");
  		if (version.length > 1) {
            var trim_Version = parseInt(version[1].replace(/[ ]/g, "").replace(/MSIE/g, ""));
            console.log(trim_Version);
            if (trim_Version < 9) {
               
                return false;
            }
        }
        return true;
    }
     FuckInternetExplorer()
</script> -->
<script>
	$(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
						});
	});
</script>

</body>
</html>
