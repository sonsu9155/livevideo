<?php

namespace App\Admin\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header('指数')
            ->description('描述')
            ->body($this->grid());
    }

    /**
     * Show interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->header('详情')
            ->description('描述')
            ->body($this->detail($id));
    }

    /**
     * Edit interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header('编辑')
            ->description('描述')
            ->body($this->form()->edit($id));
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        
       
       return $content
            ->header('Create')
            ->description('description')
            ->body($this->form());
    }


    public function docreate(){
         var_dump($_POST['name']);exit();
        User::create([
            'name'       => $_POST['name'],
            'email'      => $_POST['email'],
            'status '    => $_POST['status'],
            'ip '        => $_POST['ip'],
            'mobileqq '  => $_POST['mobileqq'],
            'email_verified_at ' => $_POST['email_verified_at'],
            'remember_token ' => $_POST['remember_token'],
            'password' => Hash::make($_POST['password']),
        ]);
         return redirect('/admin/user');

    }
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new User);
        // $grid->model()->where('status','publish video');
        $grid->id('Id');
        $grid->name('名称');
        $grid->avatar('头像');
        $grid->email('电子邮件');
        $grid->status('状态');
        $grid->ip('IP');
        $grid->mobileqq('手机 Q Q');
        $grid->email_verified_at('电邮已验证');
        $grid->password('密码');
        $grid->remember_token('记得');
        $grid->created_at('注册时间');
        $grid->updated_at('最后登录时间');

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
        $show = new Show(User::findOrFail($id));

        $show->id('Id');
        $show->name('名称');
        $show->avatar('头像')->image();
        $show->email('电子邮件');
        $show->status('状态');
        $show->ip('IP');
        $show->mobileqq('手机 Q Q');
        $show->email_verified_at('电邮已验证');
        $show->password('密码');
        $show->remember_token('记得');
        $show->created_at('注册时间');
        $show->updated_at('最后登录时间');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new User);

        $form->text('name', '名称');
        $form->image('avatar', '头像');
        $form->email('email', '电子邮件')->rules('nullable');
        $form->text('status', '状态')->rules('nullable');
        $form->ip('ip', 'IP');
        $form->mobile('mobileqq', '手机 Q Q')->options(['mask' => '999 9999 9999']);
        $form->datetime('email_verified_at', '电邮已验证')->default(date('Y-m-d H:i:s'));
        $form->password('password', '密码');
        $form->text('remember_token', '记得');

        $form->saving(function (Form $form) {
            $form->password = Hash::make( $form->password);
         });

        return $form;
    }
}
