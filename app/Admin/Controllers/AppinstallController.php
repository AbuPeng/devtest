<?php

namespace App\Admin\Controllers;

use App\Models\Appinstall;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Encore\Admin\Layout\Content;
use Illuminate\Routing\Controller;

class AppinstallController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    // protected $title = 'App\Models\Appinstall';

    public function index(Content $content)
    {
        return $content
            ->title("APP安装信息")
            ->description("安装信息")
            ->body($this->grid());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Appinstall);
        $grid->id('ID')->sortable();
        $grid->install_time('安装时间')->sortable();
        $grid->android_num('安卓');
        $grid->ios_num('苹果');

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
        $show = new Show(Appinstall::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('install_time', __('Install time'));
        $show->field('android_num', __('Android num'));
        $show->field('ios_num', __('Ios num'));
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
        $form = new Form(new Appinstall);

        $form->date('install_time', __('Install time'))->default(date('Y-m-d'));
        $form->number('android_num', __('Android num'));
        $form->number('ios_num', __('Ios num'));

        return $form;
    }
}
