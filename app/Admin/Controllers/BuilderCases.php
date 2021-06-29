<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;

class BuilderCases extends Controller
{
    public function index(Content $content)
    {
        return redirect('/builder/cases');

    }
    public function calls(Content $content)
    {
        return redirect('/builder/calls');

    }
    public function tasks(Content $content)
    {
        return redirect('/builder/tasks');

    }
    public function meetings(Content $content)
    {
        return redirect('/builder/meetings');

    }
}
