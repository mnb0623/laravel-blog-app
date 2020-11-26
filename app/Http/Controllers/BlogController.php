<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;
use App\Http\Requests\BlogRequest;

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
    /** *
     * ブログ登録画面を表示する
     *
     * @return view
     */
    public function showCreate() {
        return view('blog.form');
    }
    /** *
     * ブログを登録する
     *
     * @return view
     */
    public function exeStore(BlogRequest $request) {
        // dd($request->all());
        // ブログのデータを受け取る
        $inputs = $request->all();
        // ブログを登録
        Blog::create($inputs);
        \Session::flash('err_msg', 'ブログを登録しました。');
        return redirect(route('blogs'));
    }
}
