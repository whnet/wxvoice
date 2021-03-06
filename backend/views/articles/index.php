<?php
/**
 * Created by PhpStorm.
 * User: huamai
 * Date: 2017/6/8
 * Time: 下午3:25
 */

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
use yii\widgets\LinkPager;

$this->title = '领取列表';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-sm-12">

            <div class="ibox">
                <div class="ibox-title">
                    <h5>文章列表</h5>
                </div>
                <div class="ibox-content">
                    <!--搜索框-->
                    <div class="search-form">
                        <form action="<?=Url::toRoute('articles/index')?>" method="post">
                            <div class="input-group">
                                <input type="text" placeholder="文章名称" name="search" class="form-control input-lg">
                                <div class="input-group-btn">
                                    <button class="btn btn-lg btn-primary" type="submit">搜索</button>
                                </div>
                            </div>

                        </form>
                    </div>
                    <!--搜索框-->
                    <div class="project-list">

                        <table class="table table-hover">
                            <tbody>
                            <?php foreach($list as $k=>$v):?>
                                <tr>
                                    <td class="project-status">
                                            <span class="label label-primary"><?=$k+1?></span>
                                    </td>
                                    <td class="project-completion">
                                        <?=$v['title']?>
                                    </td>
                                    <td class="project-title">
                                       <?=$v['user']['nickname']?>
                                    </td>

                                    <td class="project-completion">
                                        <span class="label label-primary"></span>
                                    </td>
                                    <td class="project-actions">
                                        <a href="<?=Url::toRoute(['articles/update','id'=>$v['id']])?>" class="btn btn-white btn-sm">
                                            <i class="fa fa-pencil"></i>编辑</a>
                                        <a href="<?=Url::toRoute(['articles/delete','id'=>$v['id']])?>" class="btn btn-white btn-sm">
                                            <i class="fa fa-pencil"></i> 删除 </a>
                                    </td>
                                </tr>
                            <?php endforeach;?>


                            </tbody>
                        </table>
                        <!--分页-->
                        <div class="f-r">
                            <?= LinkPager::widget([
                                'pagination'=>$pages,
                                'firstPageLabel' => '首页',
                                'nextPageLabel' => '下一页',
                                'prevPageLabel' => '上一页',
                                'lastPageLabel' => '末页',
                            ]) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

