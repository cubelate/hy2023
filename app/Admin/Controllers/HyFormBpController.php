<?php

namespace App\Admin\Controllers;

use App\Models\HyFormBp;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class HyFormBpController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'BP管理';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new HyFormBp());

        $grid->column('id', __('Id'));

        $grid->column('company', __('公司'));
        $grid->column('type', __('所属行业'));

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
  
        $grid->column('title', __('职位'));
        $grid->column('bpfile', __('BP文件'))->downloadable();

        //$grid->column('updated_at', __('更新时间'));
        $grid->column('created_at', __('创建时间'));

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
        $show = new Show(HyFormBp::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('姓名'));
        $show->field('gender', __('性别'));
        $show->field('mobile_phone', __('手机号码'));
        $show->field('email', __('邮箱'));
        $show->field('company', __('公司'));
        $show->field('type', __('所属行业'));
        $show->field('title', __('职位'));
        $show->field('bpfile', __('BP文件'));
        $show->field('updated_at', __('更新时间'));
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
        $form = new Form(new HyFormBp());

        $form->text('name', __('姓名'));
        $form->number('gender', __('性别'));
        $form->text('mobile_phone', __('手机号码'));
        $form->email('email', __('邮箱'));
        $form->text('company', __('公司'));
        $form->text('type', __('所属行业'));
        $form->text('title', __('职位'));
        $form->file('bpfile', __('BP文件'));

        return $form;
    }
}
