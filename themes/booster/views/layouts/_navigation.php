<?php
/**
 * Top menu definition.
 *
 * @var BackendController $this
 */

$this->widget(
    'bootstrap.widgets.TbNavbar',
    array(
        'type' => 'inverse',
        'brand' => 'Project name',
        'brandUrl' => '/',
        'collapse' => true,
        'items' => array(
                array(
                    'class' => 'bootstrap.widgets.TbMenu',
                    'items' => array(
                        array('label' => 'Home', 'url' => array('/site/index')),
                        array('label' => 'Settings', 'items' => array(
                            array('label' => 'course', 'url' => array('/course/index')),
                            array('label' => 'batches', 'url' => array('/batch/index')),
                            array('label' => 'exam', 'url' => array('/examgroup/index')),
                            array('label' => 'finance structure', 'url' => '#'),
                            array('label' => 'subjects', 'url' => '#'),
                            )
                        ),
                        array('label' => 'About', 'url' => array('/site/page', 'view' => 'about')),
                        //     array('label'=>'Contact', 'url'=>array('/site/contact')),
                        array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                        array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
                    ),
                ),
                array(
                    'class' => 'bootstrap.widgets.TbMenu',
                    'htmlOptions'=>array('class'=>'pull-right'),
                    'items' => array(
                        array('label' => 'gii', 'url' => array('/gii'), 'visible' => !Yii::app()->user->isGuest)
                    ),
                ),
            ),
    )
);