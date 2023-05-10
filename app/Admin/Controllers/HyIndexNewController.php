<?php

namespace App\Admin\Controllers;

use App\Models\HyIndexNew;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class HyIndexNewController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '首页设置-动态';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new HyIndexNew());

        $grid->column('id', __('Id'));
        $grid->column('day', __('日期'));
        $grid->column('title', __('标题'))->filter('like');
        $grid->column('cover_image', __('封面图片'))->image('', $width = 150, $height = 150);
        $grid->column('url', __('链接'))->display(function($url) {
            return "<a target='_blank' href='" . $url . "'点击跳转</>";
        });

        $grid->column('sort_val', __('排序'));
        $grid->column('created_at', __('创建时间'))->width(100);
        $grid->column('updated_at', __('创建时间'))->width(100);

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
        $show = new Show(HyIndexNew::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('标题'));
        $show->field('day', __('日期'));
        $show->field('cover_image', __('封面图片'))->image();
        $show->field('url', __('链接'));
        $show->field('sort_val', __('排序'));
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
        $form = new Form(new HyIndexNew());

        $form->text('title', __('标题'))->rules('required');
        $form->date('day', __('Day'))->format('YYYY/MM/DD')->rules('required');
        $form->url('url', __('链接'))->rules('required');
        $form->image('cover_image', __('封面图片'))->uniqueName()->help("宽高:308*176，大小不超过1M")->rules('required');
        $form->number('sort_val', __('排序'))->default(100)->help("默认按照日期排序，日期相同时排序值越大越靠前");

        return $form;
    }
}
