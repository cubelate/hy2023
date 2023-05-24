<?php

namespace App\Admin\Controllers;

use App\Models\HyFormReservation;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class HyFormReservationController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '预约管理';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new HyFormReservation());

        $grid->column('id', __('Id'));
        $grid->column('name', __('姓名'));
        $grid->column('gender', __('Gender'))->display(function ($type) {

            if ($type == '1') {
                return "男";
            } else {
                return "女";
            }
        
        })->width(120);
        $grid->column('mobile_phone', __('手机号码'));
        $grid->column('email', __('邮箱'));
        $grid->column('company', __('公司'));
        $grid->column('title', __('职位'));
        $grid->column('target', __('交流目的'));
        $grid->column('topic', __('交流话题'));
        //$grid->column('updated_at', __('Updated at'));
        $grid->column('created_at', __('Created at'));

        $grid->actions(function ($actions) {

            // 去掉删除
            $actions->disableDelete();

            // 去掉编辑
           $actions->disableEdit();

            // 去掉查看
           // $actions->disableView();
        });
        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(HyFormReservation::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('姓名'));
        $show->field('gender', __('性别'))->as(function ($type) {

            if ($type == '1') {
                return "男";
            } else {
                return "女";
            }
        
        });
        $show->field('mobile_phone', __('手机号码'));
        $show->field('email', __('邮箱'));
        $show->field('company', __('公司'));
        $show->field('title', __('职位'));
        $show->field('target', __('交流目的'));
        $show->field('topic', __('交流话题'));
        //$show->field('updated_at', __('Updated at'));
        $show->field('created_at', __('创建时间'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new HyFormReservation());

        $form->text('name', __('Name'));
        $form->number('gender', __('Gender'));
        $form->text('mobile_phone', __('Mobile phone'));
        $form->email('email', __('Email'));
        $form->text('company', __('Company'));
        $form->text('title', __('Title'));
        $form->text('target', __('Target'));
        $form->textarea('topic', __('Topic'));

        return $form;
    }
}
