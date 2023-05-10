<?php

namespace App\Admin\Controllers;

use App\Models\HyCompany;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class HyCompanyController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '案例公司';
    

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new HyCompany());

        $grid->column('id', __('ID'));
        $grid->column('type', __('行业'))->display(function ($type) {

            if ($type == '1') {
                return "半导体";
            } else if ($type == '2') {
                return "云与数字化";
            } else if ($type == '3') {
                return "智能终端";
            } else if ($type == '4') {
                return "数字能源";
            } else {
                return "Error001";
            }
        
        })->width(120);
        $grid->column('stock_code', __('股票代码'))->width(120);
        $grid->column('name', __('名称'))->filter('like');
        $grid->column('logo', __('Logo'))->image('', $width = 100, $height = 100);
        $grid->column('web_url', __('官网'))->width(200);
        $grid->column('brief', __('简介'))->width(200);
        $grid->column('sort_val', __('排序'))->help("排序值越大越靠前")->width(80);
        $grid->column('latest_title', __('最新动态-标题'))->width(200);
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
        $show = new Show(HyCompany::findOrFail($id));

        $show->field('id', __('ID'));
        $show->field('type', __('行业'))->as(function ($type) {

            if ($type == '1') {
                return "半导体";
            } else if ($type == '2') {
                return "云与数字化";
            } else if ($type == '3') {
                return "智能终端";
            } else if ($type == '4') {
                return "数字能源";
            } else {
                return "Error001";
            }
        
        });

        $show->field('name', __('名称'));
        $show->field('stock_code', __('股票代码'));
        $show->field('logo', __('Logo'))->image();
        $show->field('web_url', __('官网'));
        $show->field('brief', __('简介'));
        $show->field('sort_val', __('排序'));

        $show->field('latest_title', __('最新动态-标题'));
        $show->field('latest_day', __('最新动态-日期'));
        $show->field('latest_url', __('最新动态-链接'));

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
        $form = new Form(new HyCompany());

        $form->select('type', __('行业'))->rules('required')->options(['1' => '半导体', '2' => '云与数字化', '3' => '智能终端', '4' => '数字能源']);
        $form->text('name', __('名称'))->rules('required');
        $form->text('stock_code', __('股票代码'));
        $form->image('logo', __('Logo'))->uniqueName()->help("宽高:400*132")->rules('required');
   
        $form->text('web_url', __('官网'));
        $form->text('brief', __('简介'))->rules('required');
        $form->number('sort_val', __('排序'))->default(100);

        $form->text('latest_title', __('最新动态-标题'));
        $form->date('latest_day', __('最新动态-日期'))->format('YYYY/MM/DD');
        $form->text('latest_url', __('最新动态-链接'));

        return $form;
    }
}
