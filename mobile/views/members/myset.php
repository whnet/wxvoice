<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->params['breadcrumbs'][] = $this->title;
?>
<script type="text/javascript" src="../bdt/js/myset.js"></script>
<link type="text/css" rel="stylesheet" href="../bdt/css/user.min.css">
<body>
<div id="container" class="container myset-container bg-greyfa">
    <div id="page">
        <!--页面导航栏-->
        <div class="page__hd bg-white fc-black b-b-grey scrollhd">
            <div class="statebar">
                <a class="nav-act left-act" onclick="goBack();"><img src="../bdt/images/nav_icon_back1.png"></a>
                <h2 class="fs34">设置</h2>
            </div>
        </div>
        <!--页面主体-->
        <div class="page__bd scrollbd">
            <!--占位空间-->
            <div class="top-space1"></div>
            <!--设置列表-->
            <div class="personal-set bg-white mt10 b-tb-grey ">
                <div class="appui_cells">
                    <div class="appui_cell fs28" id="bind_phone">
                        <div class="appui_cell__bd">
                            <p class="fc-black">绑定手机号</p>
                        </div>
                        <div class="appui_cell__ft mr20">
                            <p id="unbindPhone" style="display:none" class="fc-grey678">未绑定</p>
                            <p id="bindPhone"  class="fc-grey678"><i class="mr5"><img src="../bdt/images/safe_lock.png"></i>已绑定</p>
                        </div>
                        <i class="appui_cell__go"><img src="../bdt/images/icon06_blue.png"></i>
                    </div>
                    <?php  if(!stripos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger')):?>
                    <hr class="appui-navline-x bg-greyf1">
                    <div style="" id="password" class="appui_cell fs28" onclick="location='password_edit.html'">
                        <div class="appui_cell__bd">
                            <p class="fc-black">修改密码</p>
                        </div>
                        <div class="appui_cell__ft mr20">
                            <p class="fc-grey678"></p>
                        </div>
                        <i class="appui_cell__go"><img src="../bdt/images/icon06_blue.png"></i>
                    </div>
                    <?php endif;?>

                </div>
            </div>
            <!--设置列表-->
            <div class="personal-set bg-white mt10">
                <div class="appui_cells">
                    <div class="appui_cell fs28" onclick="location='aboutus_details.html'">
                        <div class="appui_cell__bd">
                            <p class="fc-black">关于我们</p>
                        </div>
                        <i class="appui_cell__go"><img src="../bdt/images/icon06_blue.png"></i>
                    </div>
                    <hr class="appui-navline-x bg-greyf1">
                    <div class="appui_cell fs28" onclick="location='feedback.html'">
                        <div class="appui_cell__bd">
                            <p class="fc-black">意见反馈</p>
                        </div>
                        <i class="appui_cell__go"><img src="../bdt/images/icon06_blue.png"></i>
                    </div>
                    <hr class="appui-navline-x bg-greyf1">
                    <div class="appui_cell fs28" onclick="location='aboutus_details.html'">
                        <div class="appui_cell__bd">
                            <p class="fc-black">客服中心</p>
                        </div>
                        <div class="appui_cell__ft mr20">
                            <p class="fc-grey678">021-68886830</p>
                        </div>
                    </div>
                    <hr class="appui-navline-x bg-greyf1">
                    <div class="appui_cell fs28" onclick="location='aboutus_details.html'">
                        <div class="appui_cell__bd">
                            <p class="fc-black">客服微信</p>
                        </div>
                        <div class="appui_cell__ft mr20">
                            <p class="fc-grey678">Amanda75b</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--设置列表-->
            <div class="personal-set bg-white mt10 b-tb-grey ">
                <div class="appui_cells appui_cells">
                    <a class="appui_cell appui_cell-btn fs28 fc-red" href="?loginout=1">退出社区</a>
                </div>
            </div>
        </div>
    </div>
</div>



</body>
