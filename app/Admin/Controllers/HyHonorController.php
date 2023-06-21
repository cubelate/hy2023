<?php

namespace App\Admin\Controllers;

use App\Models\HyHonor;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class HyHonorController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'HyHonor';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new HyHonor());
        $grid->model()->orderBy('sort_val', 'desc');

        $grid->column('id', __('Id'));
        $grid->column('year', __('年度'));
        $grid->column('title', __('名称'));
        $grid->column('line1', __('描述1'));
        $grid->column('line2', __('描述2'));
        $grid->column('thumb', __('图片'))->image('', $width = 150, $height = 150);
        $grid->column('sort_val', __('排序'));
        //$grid->column('created_at', __('Created at'));
        //$grid->column('updated_at', __('Updated at'));

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
        $show = new Show(HyHonor::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('year', __('年度'));
        $show->field('title', __('名称'));
        $show->field('line1', __('描述1'));
        $show->field('line2', __('描述2'));
        $show->field('sort_val', __('排序'));
        $show->field('thumb', __('图片'));
        $show->field('created_at', __('创建时间'));
        $show->field('updated_at', __('更新时间'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new HyHonor());

        $form->number('year', __('年度'))->default(2023)->rules('required');
        $form->text('title', __('名称'))->rules('required');
        $form->text('line1', __('描述1'));
        $form->text('line2', __('描述2'))->rules('required')->help("可以使用 br 来换行");
        $form->number('sort_val', __('排序'))->default(100)->help("排序值越大越靠前");
        $form->image('thumb', __('图片'))->uniqueName()->help("宽高:302*318")->rules('required');
        return $form;
    }
}
