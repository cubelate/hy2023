<?php

namespace App\Admin\Controllers;

use App\Models\HyNew;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Encore\WangEditor\WangEditor;

class HyNewController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '新闻管理';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new HyNew());
        $grid->model()->orderBy('id', 'desc');
        $grid->column('id', __('ID'));
        $grid->column('type', '栏目')->display(function ($type) {

            if ($type == '0') {
                return "华业新闻";
            } else {
                return "华业观察";
            }
        
        });
        //$grid->column('title_in_list', __('标题（列表中）'))->filter('like');
        //$grid->column('desc_in_list', __('简介（列表中）'));
        $grid->column('title', __('标题'))->filter('like')->width(280);
        //$grid->column('content', __('Content'));
        $grid->column('event_day', __('日期'));
        $grid->column('sort_val', __('排序'));

        $grid->column('is_top', __('是否置顶'))->display(function ($is_top) {

            if ($is_top == '1') {
                return "是";
            } else {
                return "否";
            }
        
        })->filter([
            0 => '否',
            1 => '是'
        ]);
        $grid->column('thumb', __('封面图片'))->image('', $width = 100, $height = 50);

        $grid->column('created_at', __('创建时间'))->width(100);
        $grid->column('updated_at', __('更新时间'))->width(100);

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
        $show = new Show(HyNew::findOrFail($id));

        $show->field('id', __('ID'));
        $show->field('type', __('栏目'))->as(function ($type) {
            if ($type == '0') {
                return "华业新闻";
            } else {
                return "华业观察";
            }
        });
        $show->field('title_in_list', __('标题（列表中）'));
        $show->field('desc_in_list', __('简介（列表中）'));
        $show->field('title', __('标题'));
        $show->field('event_day', __('日期'));
        $show->field('sort_val', __('排序'));

        $show->field('is_top', __('是否置顶'))->as(function ($is_top) {

            if ($is_top == '1') {
                return "是";
            } else {
                return "否";
            }
        
        });

        $show->field('thumb', __('封面图片'))->image();

        $show->field('created_at', __('创建时间'));
        $show->field('updated_at', __('更新时间'));
        $show->field('content2', __('内容'))->unescape();
        /*
        $show->field('content', __('内容'))->unescape()->as(function ($content) {
            return "<pre>{$content}</pre>";
        });
        */
        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new HyNew());
        $form->select('type', "栏目")->options(['0' => '华业新闻', '1' => '华业洞察']);
        $form->text('title', __('主标题'))->rules('required');
        //$form->text('title_in_list', __('标题（列表中）'))->rules('required');
        $form->text('desc_in_list', __('简介'));

        $form->select('is_top', __('是否置顶'))->options(['0' => '否', '1' => '是'])->default(0);
        $form->image('thumb', __('封面图片'))->uniqueName()->help("宽高:308*176，大小不超过1M");

        $form->date('event_day', __('日期'))->format('YYYY/MM/DD')->rules('required');
        $form->number('sort_val', __('排序'))->default(100)->help("排序值越大越靠前");
        $form->editor('content2', __('文章内容'))->rules('required');

        return $form;
    }
}
