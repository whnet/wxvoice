<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
use yii\widgets\LinkPager;
use common\tools\htmls;

?>
<script type="text/javascript" src="../bdt/js/commonQaList.js"></script>
<script type="text/javascript" src="../bdt/js/searchCommon.js"></script>
<script type="text/javascript" src="../bdt/js/index.js"></script>
<script type="text/javascript" src="../bdt/js/commonArticList.js"></script>
<script type="text/javascript" src="../bdt/js/commentListInPostlist.js"></script>
<link type="text/css" rel="stylesheet" href="../bdt/css/index.css">

<body>
<audio id="audio-mc" style="display:none;" preload="preload" src=""></audio>
<div class="index-container bg-grey new_index" id="container">
    <div id="page">
        <div class="page__hd page__hd-search scrollhd" id="topBigDiv">
            <div class="search-head">
                <div class="search-module noleftbtn bg-grey " id="searchID">
                    <span><img src="../bdt/images/search.png"></span>
                    <em class="bg-blue"></em>
                    <input type="text" class="fc-blue fs28" placeholder="搜索专家、圈子、问答..." disabled="disabled">
                </div>
                <a class="right-icon">
                    <img src="../bdt/images/notice1.png">
                    <?php if($counts):?>
                            <?php if($counts > 99):?>
                           <span class="fs24 fc-white nums bg-red">...</span>
                            <?php else:?>
                            <span class="fs24 fc-white nums bg-red"><?=$counts;?></span>
                            <?php endif;?>
                    <?php else:?>
                        <span class="fs24 fc-white nums"></span>
                    <?php endif;?>
                </a>
            </div>
        </div>

        <div class="page__bd scrollbd" id="page__bd">

            <!--首页轮播-->
            <div>
                <div class="swiper-container swiper-container-horizontal swiper-container-autoheight swiper-container-android">
                    <div class="swiper-wrapper" >
                        <?php foreach($banner as $k=>$v):?>
                        <div class="swiper-slide swiper-slide-prev" ><a href="<?=$v['link']?>">
                                <img src="<?=Yii::$app->params['public']?><?=$v['logo']?>"></a>
                        </div>
                        <?php endforeach;?>
                    </div>
                    <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets">
                        <span class="swiper-pagination-bullet"></span>
                        <span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span>
                        <span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span>
                        <span class="swiper-pagination-bullet"></span></div>
                </div>
            </div>

            <!--圈子入口-话题入口-文章入口-->
            <div class="index_entrance bg-white b-tb-greyf1 fs28">
                <a href="<?=Url::toRoute(['circle/circle_my',"from"=>'index'])?>" class="fc-black">
                    <img src="../bdt/images/index_circle.jpg"><span>密友圈</span>
                </a>
                <a href="<?=Url::toRoute(['expert/found_expert'])?>" class="fc-black">
                    <img src="../bdt/images/index_expert.jpg"><span>问专家</span>
                </a>
                <a href="/articles/square.html" class="fc-black">
                    <img src="../bdt/images/index_loupan.jpg"><span>论坛</span>
                </a>
                <a href="<?=$this->params['site']['zhaopinurl'];?>" class="fc-black">
                    <img src="../bdt/images/index_topic.jpg"><span>微招聘</span>
                </a>
            </div>


            <!--楼市百态-->
            <div class="index-module indexsquare">
                <h3 class="index-module-head b-b-greyf5 bg-white">
                    <span class="fs32 fc-black">精选</span>
<!--                    <a href="/articles/square.html"><img src="../bdt/images/go80 .png"></a>-->
                </h3>
                <div class="index-module-body fs30 fc-black indexsquare-list" id="indexSquareList">
                    <a id="downloadMoreData" class="appui_loadmore fs32 fc-greyabc">拼命加载中<i class="loadmore"></i></a>
                </div>

            </div>
            <a class="publish-btn publish-btn-square bg-white " id="sendMessage">
                <img src="../bdt/images/publish_pen.png">
            </a>

            <!--//发布弹出框-->
            <div class="publish-type" style="display:none">
                <div class="publish-type-list fs32 fc-black type4">
                    <a href="/circle/circle_file_release.html?from=index&publishtype=fatie"><i>
                            <img src="../bdt/images/message_pic.jpg"></i>
                        <span class="fc-black">发帖</span></a>
                    <a href="/articles/article_edit.html?from=index&publishtype=article">
                        <i><img src="../bdt/images/message_article.jpg"></i>
                        <span class="fc-black">文章</span></a>
                    <a href="/pockets/red_packets.html?from=index&publishtype=redpack">
                        <i><img src="../bdt/images/message_packet.jpg"></i>
                        <span class="fc-black">红包</span></a>
                    <a href="/questions/start_ask.html?from=index&publishtype=ask&circle_id=0" >
                        <i><img src="../bdt/images/message_qanda.jpg"></i>
                        <span class="fc-black">提问</span></a>
                </div>
                <a class="close-publish-btn bg-white" id="closePubBtn">
                    <img src="../bdt/images/publish_red.png"></a>
            </div>
            <!--版权备案-->

            <!--占位空间-->
            <div class="bottom-space4"></div>
            <audio id="audio-mc" preload="preload" src=""></audio>
        </div>
        <!-- footer -->
        <div class="page__fd bg-white fs22 bc-grey scrollfdt" >
            <div class="tab-con">
                <?=$this->render('/_footer')?>
            </div>
        </div>
        <!-- footer -->
    </div>
</div>
<input type="hidden" name="expert" value="<?=Yii::$app->session['expert']?>" />

</body>