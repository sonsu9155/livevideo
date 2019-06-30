@desktop
<!DOCTYPE html>
<html>
<head>
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge,Chrome=1">
	<title>直播</title>
	<link href="/images/livevideo/main.ico" rel="shortcut icon" type="image/x-icon">
	<meta name="Keywords" content="">
	<meta name="description" content="">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/css/livevideo/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/livevideo/animations.css">
	<link rel="stylesheet" type="text/css" href="/css/livevideo/sina-emotion.css">
	<link rel="stylesheet" type="text/css" href="/css/livevideo/ui-dialog.css">
	<link rel="stylesheet" type="text/css" href="/css/livevideo/style.css">
	<link rel="stylesheet" type="text/css" href="/css/livevideo.css">
	<link rel="stylesheet" type="text/css" href="/css/banner.css">
	<link rel="stylesheet" type="text/css" href="/css/schedule.css">

	<script type="text/javascript" src="/js/livevideo/jquery.min.js"></script>
	<script type="text/javascript" src="/js/livevideo/bootstrap.min.js"></script>
	<script>
	$(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
			});
			show_messages();

			var slideIndex = 0;
			showSlides();

			function showSlides() {
				  
			var i;
			var slides =$(".mySlides");
			var dots = $(".dot");
			for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";  
			}
			slideIndex++;
			if (slideIndex > slides.length) {slideIndex = 1}    
			for (i = 0; i < dots.length; i++) {
				dots[i].className = dots[i].className.replace(" active", "");
			}
			slides[slideIndex-1].style.display = "block";  
			dots[slideIndex-1].className += " active";
			setTimeout(showSlides, 2000); // Change image every 2 seconds
			}	
			
			$('#update_profile').click(function(){
				old_pwd = $('#oldPassword').val();
				new_pwd = $('#confrimPassword').val();
				new_pwd1 = $('#password').val();
				if(old_pwd ==""){
					alert('请输入旧密码。');
					return false;
				}
				if(new_pwd ==""){
					alert('请输入密码。');
					return false;
				}
				if(new_pwd1 ==""){
					alert('请输入确认密码。');
					return false;
				}
				if(new_pwd != new_pwd1){
					alert('密码不相等');
					return false;
				}
				$('#js-data-form').submit();
				console.log(old_pwd);

			});
	});
</script>
<script>
	function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function (e) {
				$('#js-upload-image')
					.attr('src', e.target.result);
			};

			reader.readAsDataURL(input.files[0]);
		}
	}

</script>
<style>
	div.modal-backdrop.in{
		z-index:0;
	}
</style>
<script type="text/javascript">
if(!window.console){
	window.console = {log:function(){}}
}
window.D = {
	chatLen:parseInt('100'),
	loginUiType:'0',
	roomId:'12135',
	roomTitle:'',
	parentRoomId:'12090',
	dynamicMsg:'',
	showUserlist:0,
	theme:{"layout":"layout-video-left"},
	loginPopTs: "2147483647" * 1000|| 0,
	showjc:0,
	teacher_pre:'当前讲师：',
	defaultBgStyle:'theme-background-0',
	stockCode:"s_sh000001,s_sz399001,s_sz399006,s_sh000300,rt_hkHSI,gb_dji,hf_CHA50CFD",
	lookVideoImg:"",
	videoHW:'0.5625',
	hot_btn:'投票',
		videoBgImg:"http://res.wufangsoft.com/wolf/upload/admin/GHaGeLankIWAjdIGNPsemtNBz.jpg",
		popType:'0',
	chargeOpend:0,
	containFortune:0,
	jf_fortune_pop:0,
	hot_got_max:0,
	hot_got_ts:0,
	chatOption:{
		topic:'6e176d9a1f751b3054d14019e730c5dc_12135',
				guestTopic:'49ac2035357148cbed4760bb0c5f7e30_12135',
				siteTopic:'w_s_chat_307',
				
				clientId:'12135_12788659_web',
				bigRoom:0
	},
	USER:{
		uid:'12788659',
		name:'游客SIP4W0SE',
		type:'100',
		pic:'image/livevideo/11.png',
		chatIntervalCount:1,
		plat:'web',
		logined:0,
		isManager:0,
		isTeacher:0,
		lookvideo:1,
		vipLimitTs:0,
		showVipBuy:0,
	}
}

var __real_robot_num = 0;
var __base__ = 0;
var __base_num__ = 300;

$(function(){})
</script>
</head>
<body>

<div class="page-container theme-default layout-video-left theme-background-0" id="main" >
	<div class="row alpha-bg-body" style="height:7%">
		<div class=" col-sm-3">
			<img class="main-logo" src="/images/TciyoQdWYoNPjQkTdnxKYBYBM.png" alt="logo">			
		</div>
		<div class="col-sm-9 header-right-menu">
			<ul>
				<li class="profile-menu listitem dropdown navbar-right">
					<a class="dropdown-toggle" data-hover="dropdown" data-toggle="modal" data-target="#profile_Modal">
							<img class="avatar" src="/upload/{{$user->avatar}}" alt="{{ $user->name }}">
							<span class="text-e">{{ $user->name }}</span>
					</a>					
				</li>
				<li class="integral-menu listitem navbar-right">
					@if(auth()->check())
					<a href="/auth/logout">登出</a>
					@else
					<a href="/vipvideo">登录</a>
					@endif
				</li>	
			</ul>
			<div class="modal" id="profile_Modal" role="dialog" >
					<form id="js-data-form" class="form-signin form-horizontal form-body" method="post" action="/profile/update" enctype="multipart/form-data">
						{{ csrf_field() }}							
						<div class="form-group">
							<label class="col-xs-4 control-label">老密码:<span class="text-danger">*</span></label>
							<div class="col-xs-8">
								<input id="oldPassword" name="oldpwd" type="password" class="form-control" placeholder="可由数字、字母、中文及下划线组成" value=""/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-xs-4 control-label">新密码:<span class="text-danger">*</span></label>
							<div class="col-xs-8">
								<input id="confrimPassword" name="pwd" type="password" class="form-control" placeholder="可由数字、字母、中文及下划线组成" value=""/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-xs-4 control-label">确认新密码:<span class="required  text-danger">*</span></label>
							<div class="col-xs-8">
								<input id="password" name="pwd1" type="password" class="form-control" placeholder="可由数字、字母、中文及下划线组成" value=""/>
							</div>
						</div>																										
						<div class="form-group">
							<label class="col-xs-4 control-label">昵称:<span class="required  text-danger">*</span></label>
							<div class="col-xs-8">
								<input id="name" name="name" type="text" class="form-control" value="gz0801"/>
							</div>
						</div>
						<div class="form-group">
							<span class="col-xs-4 control-label">用户头像:</span>							
							<div class="col-xs-8">
								<img id="js-upload-image" src='/upload/{{ $user->avatar}}' style=" width: 50px; height: 50px; border:1px solid #ddd;" />
								<label id="js-picture-btn" class="btn btn-success btn-file" for="js-upload-input">选择图片</label>
								<input type="file" name="pic" id="js-upload-input" onchange="readURL(this);" style="display:none" />								
							</div>
						</div>
						<div class="form-group " style="text-align: center;">
							<button  class="btn btn-md btn-primary btn-submit" type="button" id ="update_profile">提交</button>
							<button type="submit" class="btn btn-danger btn-default " data-dismiss="modal"> 取消</button>
						</div>
					</form>	
			</div>	
		</div>
	</div>
	<div class="row" style="height:93%">
		<div class ="col-sm-3" style="height:100%">
			<div class="row main-sider-menu">
				<div class="col-sm-12 sider-hot-rank sider-box">
					<div class="sider-title alpha-bg-title"><img  src="/images/livevideo/XquyUGNDSsTAedGzZveCMowTm.png"  style="width: 212px;"></div>
						<div class="hot-rank-body alpha-bg-body">
							<ul id="idHotRank" style="height: auto" class="nice-scroll-h">
							</ul>
						</div>
					</div>
				<div>
				<div class="col-sm-12 sider-top">
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
						<div class="guzhi-item  guzhi-hide " id="idStock3"  style="display: none;" >
							<span class="name">加载中</span>
							<div style="float: right;">
								<span class="num"></span>
								<span class="per-num"></span>
							</div>
						</div>
						<div class="guzhi-item  guzhi-hide " id="idStock4"  style="display: none;" >
							<span class="name">加载中</span>
							<div style="float: right;">
								<span class="num"></span>
								<span class="per-num"></span>
							</div>
						</div>
						<div class="guzhi-item  guzhi-hide " id="idStock5"  style="display: none;" >
							<span class="name">加载中</span>
							<div style="float: right;">
								<span class="num"></span>
								<span class="per-num"></span>
							</div>
						</div>
						<div class="guzhi-item  guzhi-hide " id="idStock6"  style="display: none;" >
							<span class="name">加载中</span>
							<div style="float: right;">
								<span class="num"></span>
								<span class="per-num"></span>
							</div>
						</div>
						<div class="guzhi-showmore" style="height: 20px;"></div>
					</div>
				</div>
				<div class="col-sm-12 sider-userlist" style="height:calc(var(--vh, 1vh) *1);">
					<div class="title alpha-bg-title ">
						<img src="/images/livevideo/uselistico.png">
						<span class="dropdown-toggle"  data-hover="dropdown">
							<span style="margin-left: 5px;">在线用户</span>
						</span>
					</div>
					<div  class=" user-list nice-scroll alpha-bg-body" style="height:100%;">
						<!------------     userlist        -->
						<ul id="idUserList" style="margin-bottom: 0px;">
						@foreach($online_users as $index => $online_user)
							<li class="user-item select-role-mgr " id="{{ $online_user->user->id }}" data-type="500" data-id="11569479" data-name="{{ $online_user->user->name}}" style="display: block;">
								<a>
									<img src="/upload/{{ $online_user->user->avatar }}" alt="user">
									<span class="text">{{ $online_user->user->name }}</span>
								</a>
								<div style="position:absolute;right:0px;top:0px;">
									<span class="rolebtn say rolebtn-tochat js-chat-select-name" data-usertype="1" data-uid="{{ $online_user->user->id }}" data-name="{{ $online_user->user->name }}" >  </span>
									<span class="rolebtn look rolebtn-look " data-uid="{{ $online_user->user->id }}"  data-name="{{ $online_user->user->name }}"> </span>
									<span class="icon icon-1"></span>
								</div>
							</li>							
						@endforeach
						</ul>
					</div>
				</div>
				<div class="col-sm-12 dds-card" id="listUserCard" >
					<span class="card-close">×</span>
					<div class="card-inner">
						<div class="card-info">
							<p class="tips">正在加载中...</p>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6" style=" padding-left:0px; padding-right:0px; height:100%">
			<div class="row main-content" style="height:100%">
				<div class="col-sm-12 main-video">
					<div  class="col-sm-12 teacher-info-wrap alpha-bg-title" id="js-room-info"  style="height:100%">
							@if($errors->any())
								<h4 style="text-align: center;"><font color="red"> {{$errors->first()}} </font></h4>
							@endif
						<div class="col-sm-12"  style="height:5%"> 
							<ul class="video-left-ul">
								<li id="js-live-btn" class="active btn btn-info btn-lg">
								直播
								</li>
								<li id="js-lecture-btn" class="active btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">
								讲座计划
								</li>
									<div class="modal " id="myModal" role="dialog">
										<div class="jg_kcb">
											<h2 id="div_title">{{\carbon\carbon::now()->format('m')}}月{{\carbon\carbon::now()->format('d')}}日课程安排</h2>
											<div class="jg_kcb_list">
												<ul id="courseMt" class="jg_kcb_list_nr">
													<li>
														<div class="clearfix ">
															<div class="fl jg_kcb_list_fl clearfix">
																<div class="jg_tecer fl ">陈老师</div>
																<div class="fl jg_title "></div>
															</div>
															<div class="fl" style="text-align: left;">
																<span class="jg_kcb_span">●</span>直播时间：
																<span data-sat="09:30" data-eat="10:30" data-dsc=""  class="jg_kcb_color lesson-time"> 09:30-10:30</span>
															</div>
														</div>
													</li>			
													<li>
														<div class="clearfix ">
															<div class="fl jg_kcb_list_fl clearfix">
																<div class="jg_tecer fl ">莫老师</div>
																<div class="fl jg_title "></div>
															</div>
															<div class="fl" style="text-align: left;">
																<span class="jg_kcb_span">●</span>直播时间：
																<span data-sat="10:30" data-eat="11:30" data-dsc=""  class="jg_kcb_color lesson-time">10:30-11:30</span>
															</div>
														</div>
													</li>
																	
													<li>
														<div class="clearfix ">
															<div class="fl jg_kcb_list_fl clearfix">
																<div class="jg_tecer fl ">陶老师</div>
																<div class="fl jg_title "></div>
															</div>
															<div class="fl" style="text-align: left;">
																<span class="jg_kcb_span">●</span> 直播时间：
																<span data-sat="13:30" data-eat="15:00" data-dsc=""  class="jg_kcb_color lesson-time">13:30-15:00</span>
															</div>
														</div>
													</li>
																	
													<li>
														<div class="clearfix ">
															<div class="fl jg_kcb_list_fl clearfix">
																<div class="jg_tecer fl ">陈老师</div>
																<div class="fl jg_title "></div>
															</div>
															<div class="fl" style="text-align: left;">
																<span class="jg_kcb_span">●</span> 直播时间:
																<span data-sat="20:30" data-eat="21:30" data-dsc=""  class="jg_kcb_color lesson-time">20:30-21:30</span>
															</div>
														</div>
													</li>
												</ul>
												<button type="submit" class="btn btn-danger btn-default pull-right" data-dismiss="modal">确认</button>
											</div>
										</div>
									</div>
							</ul>
						</div>
						<div class="col-sm-12"  style="height:65%">
							<iframe src="//iframe.dacast.com/b/131474/c/501777" width="100%" height="100%" frameborder="0" scrolling="no" allow="autoplay" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>
						</div>
						<div class="col-sm-12 index-video-wrap"  style="height:30%">
							<div class=" main-video-player" style="height:10%">
								<div id="js-vod-player-wrap" style="display: none;z-index: 100;background: none;"  class="video-player-wrap" ></div>
								<div class="main-notice alpha-bg-title">
									<div style="display: inline;"><img src="/images/livevideo/notice.png"></div>
									<div class="notice_wrap">
										<span id="js_notice_msg"></span>
									</div>
								</div>
							</div>
							<div class=" main-room-info" style="height:90%">						
								<div class=" tab-content " style="height:100%">
									<div role="tabpanel" class="nice-scroll tab-panel alpha-bg-body" id="custtabs-9403" style="height:100%">
										<div class="boards-content js-tab-select-img  js-banners " style="height:100%">
											<div class="slideshow-container" style="height:80%">
												<div class="mySlides fade">
													<img src="/images/livevideo/AmFvEekhFuymyGpdhxABDsvpS.jpg" style="width:100%">
												</div>
												<div class="mySlides fade">
													<img src="/images/livevideo/FQFLzqgpyroKTipslHYAjLgQz.jpg" style="width:100%">
												</div>
												<div class="mySlides fade">
													<img src="/images/livevideo/AmFvEekhFuymyGpdhxABDsvpS.jpg" style="width:100%">
												</div>
											</div>
											<br>
											<div style="text-align:center" style="height:10%">
												<span class="dot"></span> 
												<span class="dot"></span> 
												<span class="dot"></span> 
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>			
					</div>
				</div><!--MAIN-VIDEO-->	
			</div>
		</div>
		<div class="col-sm-3 " style="height:100%">
			<div class="main-center" style="height:100%">
				<div class="main-conent-panle" style="height:100%">
					<div class="chat-wrap-height alpha-bg-body" style="height:77%;">
						<div class="ryPopGift ryPopGift_small first"></div>
						<div class="ryPopGift ryPopGift_small middele"></div>
						<div class="ryPopGift ryPopGift_small last"></div>
						<div class="ryPopGift ryPopGift_small ends"></div>
						<div id="js-screen-group" style="z-index: 11;right: 70px;top:3px;display: none;">
							<div id="chat-lock-screen-btn" title="屏幕锁定开关" class="chat-content-exFun-item unlock"></div>
							<div id="chat-clean-screen-btn" title="清理屏幕" class="chat-content-exFun-item clearchat"></div>
						</div>
						<div class="chat-wrap-content nice-scroll-h" >
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

					<div class="chat-bottom" style="bottom:0px; width:100%;height:23%;">
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
									<dir style="clear:both"></dir>
								</div>
								<div class="chat-form-input-wrap" style="margin-right: 1px; float: left; width: 82%;">
									<textarea class="chat-form-input nice-scroll" id="js-chat-form-input"></textarea>
								</div>
								<div class="chat-form-op" >
									<button type="button" style="float: left;" class="chat-form-btn send-btn" id="js-send-btn"></button>
									<div style="float: left;"></div>
								</div>
							</div>
						</form>
						<div id="chat_mzsm_msg"  class="chat-notify-msg-common chat-notify-bottom" style="clear: left;">分析师及管理员所发表言论均代表个人对市场所持观点。【投资有风险&bull;入市需谨慎】</div>
					</div>
				</div>
			</div>				
		</div>
	</div>
</div>
<script type="text/javascript" src="/js/livevideo/jquery.min.js"></script>
<script type="text/javascript" src="/js/livevideo/jsrender.min.js"></script>
<script type="text/javascript" src="/js/livevideo/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/livevideo/dialog-min.js"></script>
<script type="text/javascript" src="/js/livevideo/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="/js/livevideo/jquery.qrcode.min.js"></script>
<script type="text/javascript" src="/js/livevideo/jquery.countdown.min.js"></script>
<script type="text/javascript" src="/js/livevideo/sina-emotion.js?v=6"></script>


<script type="text/javascript" src='/js/livevideo/chat.js'></script>

</body>
</html>
@enddesktop

@handheld
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
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<link rel="stylesheet" type="text/css" href="/css/livevideo/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/livevideo/animations.css">
	<link rel="stylesheet" type="text/css" href="/css/livevideo/sina-emotion.css">
	<link rel="stylesheet" type="text/css" href="/css/livevideo/ui-dialog.css">
	<!-- Bootstrap Core CSS -->

	<link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<!-- Fonts -->
	<link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="/css/animate.css" rel="stylesheet" />
	<!-- Squad theme CSS -->
	<link href="/css/style.css" rel="stylesheet">
	<link href="/color/default.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="/css/livevideo/style2.css">
	<link rel="stylesheet" type="text/css" href="/css/livevideo.css">
 
	<style>
			ul {
				list-style-type: none;
				margin: 0;
				padding: 0;
				overflow: hidden;
				background-color: #333333;
			}

			li {
				float: left;
			}

			li a {
				display: block;
				color: white;
				text-align: center;
				padding: 16px;
				text-decoration: none;
			}

			li a:hover {
				background-color: #111111;
			}	

	</style>
	

</head>
<body>
<div class="page-container theme-default layout-video-left theme-background-0" id="main" style="height:calc(var(--vh, 1vh) * 100);" >
	<div style="margin-left: auto;  margin-right: auto;" style="height:calc(var(--vh, 1vh) * 100);">
		<div style="padding-left:0px; padding-right:0px; height:calc(var(--vh, 1vh) *40);">
			<div class="main-content" style="height:calc(var(--vh, 1vh) *40);">
				<div class="main-video" style="height:calc(var(--vh, 1vh) *40);">
									
					<div class="index-video-wrap" style="height:calc(var(--vh, 1vh) *40);">
							<div class="main-video-player" style="height:calc(var(--vh, 1vh) *40);">
								<button onclick="javascript:screenshare();" disabled id="shareBtn" hidden>Share your screen</button>
								<div id="camera-publisher" hidden></div>
								<div id="screen-publisher" hidden></div>
								<div id="camera-subscriber" hidden></div>
								<div id="screen-subscriber" width="100%"  height="auto"></div>
									
								<div id="js-vod-player-wrap" style="display: none;z-index: 100;background: none;"  class="video-player-wrap" ></div>
								<div class="main-notice alpha-bg-title">
									<div style="display: inline;"><img src="/images/livevideo/notice.png"></div>
									<div class="notice_wrap">
										<span id="js_notice_msg"></span>
									</div>
								</div>
						</div>
						<div class="main-room-info">
						<div class="line-menu1 tab-header">
							<ul  role="tablist">
								<li>
									<a href="801ad.html#custtabs-9403" aria-controls="boards" role="tab" data-toggle="tab">
										<span class="text">财富共盈</span>
										<span class="number"></span>
									</a>
								</li>
							</ul>
						</div>
				
					</div>			
				</div>
			</div><!--MAIN-VIDEO-->
		</div>
		<div style="padding-left:0px; padding-right:0px; height:calc(var(--vh, 1vh) *60);">
					<div class="main-center" style=" height:calc(var(--vh, 1vh) *60);">
						<div class="main-conent-panle"  style=" height:calc(var(--vh, 1vh) *50);">
									<ul>
										<li><a href="/mobile">登录</a></li>
										<li><a href="#news">公聊</a></li>
										<li><a href="#about">人气榜</a></li>
										<li><a href="#about">更多>></a></li>
									</ul>
									<div class="chat-wrap-height alpha-bg-body" style="height:calc(var(--vh, 1vh) *50);">
										<!-- <div class="ryPopGift ryPopGift_small first"></div>
										<div class="ryPopGift ryPopGift_small middele"></div>
										<div class="ryPopGift ryPopGift_small last"></div>
										<div class="ryPopGift ryPopGift_small ends"></div> -->
											<div id="js-screen-group" style="z-index: 11;right: 70px;top:3px;display: none;">
												<div id="chat-lock-screen-btn" title="屏幕锁定开关" class="chat-content-exFun-item unlock"></div>
												<div id="chat-clean-screen-btn" title="清理屏幕" class="chat-content-exFun-item clearchat"></div>
											</div>
											<div class="chat-wrap-content nice-scroll-h" style="height: calc(var(--vh, 1vh)*40);">
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
						</div>
					
						<div class="chat-bottom" style="bottom:0px; width:100%; height:calc(var(--vh, 1vh) *10);">
							<form class="chat-form" style="height: calc(var(--vh, 1vh)*10);">
								<div class="chat-form-caitiao alpha-bg-title" style="height: calc(var(--vh, 1vh)*5);">
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
								<div class="chat-send-box"  style="height: calc(var(--vh, 1vh)*5);" >
									<div class="chat-form-exFun" style="height: calc(var(--vh, 1vh)*5);" >
										<ul style="display:inline" style="height: calc(var(--vh, 1vh)*5);" >
											<li id="js-chat-faces-btn" >
												<i class="myicon-emo" style="height: calc(var(--vh, 1vh)*5);" ></i>		
											</li>
											<li>
												<textarea class="chat-form-input nice-scroll" id="js-chat-form-input" style="width:260%; height: calc(var(--vh, 1vh)*4);" ></textarea>
											</li>
										</ul>
										<dir style="clear:both"></dir>
									</div>
									<!-- <div class="chat-form-input-wrap" style="margin-right:62px; display: inline-flex; width: 100%;">
									
										<button type="button" style="float: left;" class="chat-form-btn send-btn" id="js-send-btn"></button>
									</div> -->
								
								</div>
							</form>
						</div>
					</div>
		</div>	
	</div>
</div>


<!-- <script type="text/javascript" src="/js/livevideo/jsrender.min.js"></script> -->
<!-- <script type="text/javascript" src="/js/livevideo/dialog-min.js"></script>
<script type="text/javascript" src="/js/livevideo/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="/js/livevideo/jquery.qrcode.min.js"></script>
<script type="text/javascript" src="/js/livevideo/jquery.countdown.min.js"></script>
<script type="text/javascript" src="/js/livevideo/sina-emotion.js?v=6"></script> -->

<script type="text/javascript" src="/js/banner.js"></script>
<!-- <script type="text/javascript" src='/js/livevideo/chat.js'></script> -->



</body>
</html>

@endhandheld