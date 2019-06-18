<?php

namespace App\Admin\Controllers;

use App\Models\Useinfo;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class UserinfoController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '用户信息表';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Useinfo);

        $grid->column('id', __('用户ID'));
        $grid->column('user_name', __('用户名'));
        $grid->column('user_gender', __('性别'));
        $grid->column('user_age', __('年龄'));
        $grid->column('photo', __('头像'));
        // $grid->column('token', __('Token'));
        $grid->column('password', __('密码'));
        $grid->column('created_at', __('创建时间'));
        $grid->column('updated_at', __('更新时间'));

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
        $show = new Show(Useinfo::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_name', __('User name'));
        $show->field('user_gender', __('User gender'));
        $show->field('user_age', __('User age'));
        $show->field('photo', __('Photo'));
        $show->field('token', __('Token'));
        $show->field('password', __('Password'));
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
        $form = new Form(new Useinfo);

        $form->text('user_name', __('User name'));
        $form->number('user_gender', __('User gender'));
        $form->number('user_age', __('User age'));
        $form->textarea('photo', __('Photo'));
        $form->textarea('token', __('Token'));
        $form->password('password', __('Password'));

        return $form;
    }
}
