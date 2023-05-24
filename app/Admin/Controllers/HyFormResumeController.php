<?php

namespace App\Admin\Controllers;

use App\Models\HyFormResume;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class HyFormResumeController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '简历管理';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new HyFormResume());

        $grid->column('id', __('Id'));
        $grid->column('position', __('求职岗位'));
        $grid->column('name', __('姓名'));
        $grid->column('gender', __('性别'))->display(function ($type) {

            if ($type == '1') {
                return "男";
            } else {
                return "女";
            }
        
        })->width(120);
        $grid->column('mobile_phone', __('手机号码'));
        $grid->column('email', __('邮箱'));
        $grid->column('file', __('简历文件'))->downloadable();
        $grid->column('created_at', __('创建时间'));
        //$grid->column('updated_at', __('Updated at'));

        $grid->actions(function ($actions) {

            // 去掉删除
            $actions->disableDelete();

            // 去掉编辑
            $actions->disableEdit();

            // 去掉查看
            $actions->disableView();
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
        $show = new Show(HyFormResume::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('position', __('Position'));
        $show->field('name', __('Name'));
        $show->field('gender', __('Gender'));
        $show->field('mobile_phone', __('Mobile phone'));
        $show->field('email', __('Email'));
        $show->field('file', __('File'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new HyFormResume());

        $form->text('position', __('Position'));
        $form->text('name', __('Name'));
        $form->number('gender', __('Gender'));
        $form->text('mobile_phone', __('Mobile phone'));
        $form->email('email', __('Email'));
        $form->textarea('file', __('File'));

        return $form;
    }
}
