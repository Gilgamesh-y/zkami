<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;


/**
 * DemoController
 *
 * @Map('/demo')
 * @Mid('auth')
 */
class DemoController extends Controller
{
    /**
     * @Get('/demo')
     */
    public function index()
    {
        dd(
            Order::where('id', 27)->with('user')->get()
        );
        return success('index');
    }

    /**
     * @Get('/demo/{id}')
     */
    public function show($id)
    {
        return success('show');
    }

    /**
     * @Put('/demo/{id}')
     */
    public function update($id)
    {
        return 'update';
    }

    /**
     * @Post('/demo')
     */
    public function store()
    {
        dd(request());
        return 'store';
    }

    /**
     * @Delete('/demo/{id}')
     */
    public function destroy($id)
    {
        return 'destroy';
    }
}
