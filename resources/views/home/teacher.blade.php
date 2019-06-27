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
							
								<div id="camera-publisher" hidden></div>
								<div id="screen-publisher" width="100%"  height="auto"></div>
								<div id="camera-subscriber" hidden></div>
								<div id="screen-subscriber" hidden></div>
									
								<div id="js-vod-player-wrap" style="display: none;z-index: 100;background: none;"  class="video-player-wrap" ></div>
							
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
										<li onclick="javascript:screenshare();" disabled id="shareBtn">Share your screen</li>
										
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

<script type="text/javascript" src="/js/livevideo/jquery.min.js"></script>
<script type="text/javascript" src="/js/livevideo/jsrender.min.js"></script>
<script type="text/javascript" src="/js/livevideo/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/livevideo/dialog-min.js"></script>
<script type="text/javascript" src="/js/livevideo/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="/js/livevideo/jquery.qrcode.min.js"></script>
<script type="text/javascript" src="/js/livevideo/jquery.countdown.min.js"></script>
<script type="text/javascript" src="/js/livevideo/sina-emotion.js?v=6"></script>


<script type="text/javascript" src='/js/livevideo/chat.js'></script>

<script>

	// First we get the viewport height and we multiple it by 1% to get a value for a vh unit
	let vh = window.innerHeight * 0.01;
	// Then we set the value in the --vh custom property to the root of the document
	document.documentElement.style.setProperty('--vh', `${vh}px`);

	window.addEventListener('resize', () => {
		// We execute the same script as before
		let vh = window.innerHeight * 0.01;
		document.documentElement.style.setProperty('--vh', `${vh}px`);
	});
</script>



<script type="text/javascript">
if(!window.console){
	window.console = {log:function(){}}
}
window.D = {
	chatLen:parseInt('100'),
	loginUiType:'0',
	chatSvr:'120.55.32.114',
	HOST:'http://zb.hnpklm.com',
	roomId:'12135',
	roomTitle:'',
	parentRoomId:'12090',
	dynamicMsg:'',
	showUserlist:0,
	deskIconUrl:"http://wolfcdn.wufangsoft.com/assets/js/img/send-ok.png",
	phoneUrl:'http://zb.hnpklm.com/v/801ad',
	theme:{"layout":"layout-video-left"},
	loginPopTs: "2147483647" * 1000|| 0,
	cdn:'http://wolfcdn.wufangsoft.com',
	showjc:0,
	teacher_pre:'当前讲师：',
	tgURL:'http://zb.hnpklm.com/v/801ad?u=5cb086e893c6e',
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
		role:{"id":2886,"site_id":307,"role_id":100,"name":"\u6e38\u5ba2","imgurl":"http:\/\/res.wufangsoft.com\/wolf\/upload\/admin\/PMOFljcaROsuGPNhiPvTJdIjx.png","imgwidth":43,"desc":"\u6e38\u5ba2","auto_turn":1,"sort":5,"chat_ts":1,"json_power":"[]","f_kick":0,"f_ip":0,"f_boardcast":0,"f_gag":0,"f_danmu":0,"f_font_size":0,"f_chat":0,"f_look":0,"f_manual":0,"f_download":0,"f_cjrl":0,"f_userlist":0,"f_tochat":0,"f_privatechat":0,"f_audit":0,"f_deletechat":0,"f_notice":0,"f_robot_send":0,"f_teacher_set":0,"f_turn_msg":0,"f_chat_noaudit":1,"f_img":0,"f_base_user":0,"f_notify":0,"f_search":0,"f_ul_select":0,"f_audit_boardcast":0,"f_danmu_boardcast":0,"f_hj":0,"f_videobg":0,"f_realtime":0,"f_nofilter":0,"f_caitiao":1,"f_looktrun":0,"f_sendluck":0,"f_article":0,"created_at":"2019-03-05 04:46:50","updated_at":"2019-03-05 04:46:50"},
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
<script>
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
</script>
<script>
	$(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
						});
	});
</script>
  <script src="https://static.opentok.com/v2/js/opentok.js"></script>
  <script type="text/javascript">

    // Go to https://dashboard.tokbox.com/ to get your OpenTok API Key and to generate
    // a test session ID and token:
    var apiKey = '46319772';
    var sessionId = '1_MX40NjMxOTc3Mn5-MTU1NjY2ODMwMzQ2NH5PNmU1cG5MOEdsOVVqR0FTWFFlbENVbEx-fg';
    
    var token = 'T1==cGFydG5lcl9pZD00NjMxOTc3MiZzaWc9Njk3ZjVlMzhjYTZlZjE5ZTA4ZjFmMDM4MmNlZTdlYzI0ZGRhNWUyYzpzZXNzaW9uX2lkPTFfTVg0ME5qTXhPVGMzTW41LU1UVTFOalkyT0RNd016UTJOSDVQTm1VMWNHNU1PRWRzT1ZWcVIwRlRXRkZsYkVOVmJFeC1mZyZjcmVhdGVfdGltZT0xNTU2NjY4OTAxJm5vbmNlPTAuMjM4ODA0ODkzMjg2NDQ0ODMmcm9sZT1wdWJsaXNoZXImZXhwaXJlX3RpbWU9MTU1OTI2MDg5NiZpbml0aWFsX2xheW91dF9jbGFzc19saXN0PQ==';
    // Replace this with the ID for your Chrome screen-sharing extension, which you can
    // get at chrome://extensions/:

    var extensionId = 'ajhifddimkapgcifgcodmmfdlknahffk';

    // If you register your domain with the the Firefox screen-sharing whitelist, instead of using
    // a Firefox screen-sharing extension, set this to the Firefox version number, such as 36, in which
    // your domain was added to the whitelist:

    var ffWhitelistVersion; // = '36';

    var session = OT.initSession(apiKey, sessionId);

    session.connect(token, function(error) {
      if (error) {
        alert('Error connecting to session: ' + error.message);
        return;
      }
      // publish a stream using the camera and microphone:
      var publisher = OT.initPublisher('camera-publisher');
      session.publish(publisher);
      document.getElementById('shareBtn').disabled = false;
    });

    session.on('streamCreated', function(event) {
      if (event.stream.videoType === 'screen') {
        // This is a screen-sharing stream published by another client
        var subOptions = {
          width: event.stream.videoDimensions.width / 2,
          height: event.stream.videoDimensions.height / 2
        };
        session.subscribe(event.stream, 'screen-subscriber', subOptions);
      } else {
        // This is a stream published by another client using the camera and microphone
        session.subscribe(event.stream, 'camera-subscriber');
      }
    });

    // For Google Chrome only, register your extension by ID,
    // You can find it at chrome://extensions once the extension is installed
    OT.registerScreenSharingExtension('chrome', extensionId, 2);

    function screenshare() {
      OT.checkScreenSharingCapability(function(response) {
        console.info(response);
        if (!response.supported || response.extensionRegistered === false) {
          alert('This browser does not support screen sharing.');
        } else if (response.extensionInstalled === false
            && (response.extensionRequired || !ffWhitelistVersion)) {
          alert('Please install the screen-sharing extension and load this page over HTTPS.');
        } else if (ffWhitelistVersion && navigator.userAgent.match(/Firefox/)
          && navigator.userAgent.match(/Firefox\/(\d+)/)[1] < ffWhitelistVersion) {
            alert('For screen sharing, please update your version of Firefox to '
              + ffWhitelistVersion + '.');
        } else {
          // Screen sharing is available. Publish the screen.
          // Create an element, but do not display it in the HTML DOM:
          var screenSharingPublisher = OT.initPublisher(
            'screen-publisher',
            { videoSource : 'screen' },
            function(error) {
              if (error) {
                alert('Something went wrong: ' + error.message);
              } else {
                session.publish(
                  screenSharingPublisher,
                  function(error) {
                    if (error) {
                      alert('Something went wrong: ' + error.message);
                    }
                  });
              }
            });
          }
        });
    }
  </script>
</body>
</html>
