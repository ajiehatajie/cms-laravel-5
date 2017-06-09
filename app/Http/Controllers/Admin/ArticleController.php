<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Jobs\NewsLetterMail;
use App\Article;
use App\category;
use App\Tag;
use Illuminate\Http\Request;
use Session;
use Image;
use File;
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $article = Article::where('title', 'LIKE', "%$keyword%")
				->orWhere('slug', 'LIKE', "%$keyword%")
				->orWhere('category', 'LIKE', "%$keyword%")
				->orWhere('desc', 'LIKE', "%$keyword%")
				->orWhere('content', 'LIKE', "%$keyword%")
				->orWhere('status', 'LIKE', "%$keyword%")
				->orWhere('publish', 'LIKE', "%$keyword%")
				->orWhere('thumbnails', 'LIKE', "%$keyword%")
				->orWhere('meta', 'LIKE', "%$keyword%")
				->orWhere('user_id', 'LIKE', "%$keyword%")
				->orWhere('view', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $article = Article::paginate($perPage);
        }

        return view('admin.article.index', compact('article'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $tag = Tag::pluck('title','id');
        $category = Category::pluck('title','id');
        return view('admin.article.create',compact('tag','category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'title' => 'required',
			'desc' => 'required|max:250',
			'content' => 'required',
			'status' => 'required',
			'publish' => 'required',
            'thumbnails' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
		]);

        $image                       = $request->file('thumbnails');
        $destinationPath_thumbnails  = public_path('/images/article/thumbnails/');
        $destinationPath             = public_path('/images/article/');


        if( $image != null ) {
                $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
                $img = Image::make($image->getRealPath());
                $img->resize(200, 200, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destinationPath_thumbnails.'/'.$input['imagename']);
            
                $image->move($destinationPath, $input['imagename']);
                $requestData = $request->all();
                $post = new Article($requestData);
                $post->thumbnails=$input['imagename'];
                $post->save();
                $post->CreateInputTag()->attach($request->input('tag'));
                Session::flash('flash_message', 'Article added!');


                 dispatch(new NewsLetterMail($post) );

        } else {

                $requestData = $request->all();
                $post = new Article($requestData);
                $post->save();
                $post->CreateInputTag()->attach($request->input('tag'));
                Session::flash('flash_message', 'Article added!');
                  dispatch(new NewsLetterMail($post) );
        }

      
        return redirect('admin/article');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);

        return view('admin.article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        $tag = Tag::pluck('title','id');
        $category = Category::pluck('title','id');
        return view('admin.article.edit', compact('article','tag','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        $this->validate($request, [
			'title' => 'required',
			'desc' => 'required',
			'content' => 'required',
			'status' => 'required',
			'publish' => 'required'
		]);
        $requestData = $request->all();
        
        $image                       = $request->file('thumbnails');
        $destinationPath_thumbnails  = public_path('/images/article/thumbnails/');
        $destinationPath             = public_path('/images/article/');

        if($image != null ) {
            $article = Article::findOrFail($id);
            $thumbnails = $article->thumbnails;

            if(File::exists($destinationPath.$thumbnails)) {

                    if($thumbnails != 'default.png') {
                          File::delete( $destinationPath_thumbnails.$thumbnails);
                          File::delete( $destinationPath.$thumbnails);
                               
                    }
          
             }

            $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
            $img = Image::make($image->getRealPath());
            $img->resize(200, 200, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath_thumbnails.'/'.$input['imagename']);
            $image->move($destinationPath, $input['imagename']);

            $article->update($requestData);
            $article->CreateInputTag()->sync($request->input('tag'));
            $article->thumbnails =   $input['imagename'];
            Session::flash('flash_message', 'Article updated!');
            


        } else {
            $article = Article::findOrFail($id);
            $article->update($requestData);
            Session::flash('flash_message', 'Article updated!');

        }

     

        return redirect('admin/article');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $destinationPath_thumbnails  = public_path('/images/article/thumbnails/');
        $destinationPath             = public_path('/images/article/');

        $article                     = Article::findOrFail($id);
        $thumbnails                  = $article->thumbnails;

        if(File::exists($destinationPath.$thumbnails)) {

                    if($thumbnails != 'default.png') {
                          File::delete( $destinationPath_thumbnails.$thumbnails);
                          File::delete( $destinationPath.$thumbnails);
                               
                    }
          
        }

        Article::destroy($id);

        Session::flash('flash_message', 'Article deleted!');

        return redirect('admin/article');
    }
}
