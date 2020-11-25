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
    /** *
     * ブログ詳細を表示する
     * @param int $id
     * @return view
     */
    public function showDetail($id)
    {
        $blog = Blog::find($id);
        \Session::flash('err_msg', 'データがありません。');
        if (is_null($blog)) {
            return redirect(route('blogs'));
        }
        return view('blog.detail',
        ['blog' => $blog]);
    }
}
