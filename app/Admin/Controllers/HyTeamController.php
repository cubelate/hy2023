<?php

namespace App\Admin\Controllers;

use App\Models\HyTeam;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class HyTeamController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'HyTeam';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new HyTeam());

        $grid->column('id', __('Id'));
        $grid->column('name', __('姓名'));
        $grid->column('image', __('列表图'))->image('', $width = 200, $height = 200);
        $grid->column('image_big', __('大图'))->image('', $width = 200, $height = 200);
        $grid->column('title', __('职务'));
        $grid->column('show_title', __('是否显示职务'))->display(function ($type) {

            if ($type == '1') {
                return "是";
            } else {
                return "否";
            }
        
        })->width(120);
        $grid->column('accept_bp', __('是否接收BP'))->display(function ($type) {

            if ($type == '1') {
                return "是";
            } else {
                return "否";
            }
        
        })->width(120);
        $grid->column('content', __('简介'))->width(400);
        $grid->column('order_val', __('排序'))->help("排序值越大越靠前")->width(80);

        $grid->actions(function ($actions) {


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
        $show = new Show(HyTeam::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('image', __('Image'));
        $show->field('title', __('Title'));
        $show->field('content', __('Content'));
        $show->field('order_val', __('Order val'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new HyTeam());

        $form->text('name', __('姓名'));
        $form->image('image', __('列表图'))->uniqueName()->help("宽高:300*300")->rules('required');
        $form->image('image_big', __('大图'))->uniqueName()->help("宽高:1000*858")->rules('required');
        $form->text('title', __('职务'));
        $states = [
            'on'  => ['value' => 1, 'text' => '显示', 'color' => 'success'],
            'off' => ['value' => 0, 'text' => '隐藏', 'color' => 'danger'],
        ];
        
        $form->switch('show_title', __('是否显示职务'))->states($states)->default(0);
        $states = [
            'on'  => ['value' => 1, 'text' => '是', 'color' => 'success'],
            'off' => ['value' => 0, 'text' => '否', 'color' => 'danger'],
        ];
        
        $form->switch('accept_bp', __('是否接收BP'))->states($states)->default(0);

        $form->textarea('content', __('简介'))->rules('required');
        $form->number('order_val', __('排序'))->default(100)->help("排序值越大越靠前");
        
        
        return $form;
    }
}
