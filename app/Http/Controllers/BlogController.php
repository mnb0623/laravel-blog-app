<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;

class BlogController extends Controller
{
    /** *
     * ブログ一覧を表示する
     * @return view
     */
    public function showList()
    {
        $blogs = Blog::all();

        // dd($blogs); debug code

        return view('blog.list',
        ['blogs' => $blogs]);
    }
}
