<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;

class HomeController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->header('仪表板')
            ->description('描述...')
            ->breadcrumb(
                ['text' => '仪表板', 'url' => '/admin']
            )
            ->row(function (Row $row) {

                $row->column(4, function (Column $column) {
                    $column->append(view('admin.charts.bar'));
                });

                // $row->column(4, function (Column $column) {
                //   //  $column->append(Dashboard::extensions());
                // });

                // $row->column(4, function (Column $column) {
                //   //  $column->append(Dashboard::dependencies());
                // });
            });
    }

    public function chart(Content $content){     
      
        $content->header('chart');
        $content->description('.....');

        $content->body(view('admin.charts.bar'));
        return $content;
    }
            
}
