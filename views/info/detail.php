<?php
/**
 * Created by PhpStorm.
 * User: Dilemma丶
 * Date: 2017/3/28
 * Time: 13:17
 */

/* @var $this yii\web\View */

$this->title = 'CaseDetailPage';
\app\assets\CaseDetailAsset::register($this);
?>

<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <form role="search">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
        </div>
    </form>
    <ul class="nav menu">
        <li><a href="index"><span class="glyphicon glyphicon-dashboard"></span> 主页面</a></li>
        <li class="parent ">
            <a href="#">
                <span class="glyphicon glyphicon-list"></span> 病例管理 <span data-toggle="collapse" href="#sub-item-1"
                                                                          class="icon pull-right"><em
                        class="glyphicon glyphicon-s glyphicon-plus"></em></span>
            </a>
            <ul class="children collapse" id="sub-item-1">
                <li>
                    <a class="active" style="color: white !important;" href="create1">
                        <span class="glyphicon glyphicon-plus"></span> 新建病例
                    </a>
                </li>
                <li>
                    <a class="" href="modify">
                        <span class="glyphicon glyphicon-pencil"></span> 管理病例
                    </a>
                </li>
            </ul>
        </li>
        <li><a href="user"><span class="glyphicon glyphicon-user"></span> 管理用户</a></li>
        <li><a href="pwd"><span class="glyphicon glyphicon-info-sign"></span> 维护用户</a></li>
        <li role="presentation" class="divider"></li>
        <li><a href="profile"><span class="glyphicon glyphicon-pencil"></span> 个人信息</a></li>
    </ul>
</div><!--/.sidebar-->

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" ng-controller="CaseDetailCtrl">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="index"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Modify Case Detail</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Modify Case Detail</h1>
        </div>
    </div><!--/.row-->


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading"><span class="glyphicon glyphicon-list-alt"></span>Content</div>
                <div class="panel-body">
                    <div class="col-md-6">
                        <form enctype="multipart/form-data">

                            <div class="form-group">
                                <label>Case Name</label>
                                <input class="form-control" ng-model="case_name" placeholder="Name of the case">
                            </div>

                            <div class="form-group">
                                <label>Disease Classification</label>
                                <select ng-change="changeDisease(classification)" ng-options="a for a in classifications" ng-model="classification" class="form-control">
                                    <option  value="">请选择</option></select>
                            </div>

                            <div class="form-group">
                                <label>Disease Name</label>
                                <select ng-options="b for b in diseases" ng-model="disease" class="form-control">
                                    <option  value="">请选择</option></select>
                            </div>

                            <div class="form-group">
                                <label>Case Name Text</label>
                                <textarea style="resize: none;" class="form-control" rows="3" ng-model="unit_text[0]"></textarea>
                            </div>

                            <div>
                                <input onchange="angular.element(this).scope().readFile()" type="file" ng-model="serve_pic"
                                       id="uploadpic" multiple class="pic">
                                <div class="pure">Case Name Images.</div>
                                <div id="result" ng-model="serve_attachments" class="pic2"></div>
                            </div>

                            <div class="form-group">
                                <label>Case Name Videos input</label>
                                <input type="file">
                                <p class="help-block">Insert one or more videos here.</p>
                            </div>

                            <div class="form-group">
                                <label>Serve Text</label>
                                <textarea style="resize: none;" class="form-control" rows="3" ng-model="unit_text[1]"></textarea>
                            </div>

                            <div>
                                <input onchange="angular.element(this).scope().readFile()" type="file" ng-model="serve_pic"
                                       id="uploadpic" multiple class="pic">
                                <div class="pure">Serve Images Here.</div>
                                <div id="result" ng-model="serve_attachments" class="pic2"></div>
                            </div>

                            <div class="form-group">
                                <label>Serve Videos input</label>
                                <input type="file">
                                <p class="help-block">Insert one or more videos here.</p>
                            </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Case Check Text</label>
                            <textarea style="resize: none;" class="form-control" rows="3" ng-model="unit_text[2]"></textarea>
                        </div>

                        <div>
                            <input onchange="angular.element(this).scope().readFile2()" type="file" ng-model="serve_pic2"
                                   id="uploadpic2" multiple class="pic">
                            <div class="pure">Case Check Images.</div>
                            <div id="result2" class="pic2"></div>
                        </div>


                        <div class="form-group">
                            <label>Case Check Videos input</label>
                            <input type="file">
                            <p class="help-block">Insert one or more videos here.</p>
                        </div>

                        <div class="form-group">
                            <label>Check Result Text</label>
                            <textarea style="resize: none;" class="form-control" rows="3" ng-model="unit_text[3]">></textarea>
                        </div>

                        <div>
                            <input onchange="angular.element(this).scope().readFile3()" type="file" ng-model="serve_pic3"
                                   id="uploadpic3" multiple class="pic">
                            <div class="pure">Check Result Images.</div>
                            <div id="result3" class="pic2"></div>
                        </div>

                        <div class="form-group">
                            <label>Check Result Videos input</label>
                            <input type="file">
                            <p class="help-block">Insert one or more videos here.</p>
                        </div>


                        <div class="form-group">
                            <label>Treatment Text</label>
                            <textarea style="resize: none;" class="form-control" rows="3" ng-model="unit_text[4]"></textarea>
                        </div>

                        <div>
                            <input onchange="angular.element(this).scope().readFile4()" type="file" ng-model="serve_pic4"
                                   id="uploadpic4" multiple class="pic">
                            <div class="pure">Treat Images Here.</div>
                            <div id="result4" class="pic2"></div>
                        </div>

                        <div class="form-group">
                            <label>Treatment Videos input</label>
                            <input type="file">
                            <p class="help-block">Insert one or more videos here.</p>
                        </div>

                        <button type="submit" class="btn btn-primary" ng-click="update_case(case_name,disease,unit_text)">Submit Button</button>
                        <button type="reset" style="margin-left: 1em;" class="btn btn-default" ng-click="reset()">Reset Button</button>
                    </div>
                    </form>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->


</div><!--/.main-->