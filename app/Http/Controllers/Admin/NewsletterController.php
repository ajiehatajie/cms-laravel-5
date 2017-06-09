<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Newsletter;
use Illuminate\Http\Request;
use Session;

class NewsletterController extends Controller
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
            $newsletter = Newsletter::where('email', 'LIKE', "%$keyword%")
				->orWhere('unsubscribe', 'LIKE', "%$keyword%")
				->orWhere('receive', 'LIKE', "%$keyword%")
				
                ->paginate($perPage);
        } else {
            $newsletter = Newsletter::paginate($perPage);
        }

        return view('admin.newsletter.index', compact('newsletter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.newsletter.create');
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
			'email' => 'required'
		]);
        $requestData = $request->all();
        
        Newsletter::create($requestData);

        Session::flash('flash_message', 'Newsletter added!');

        return redirect('admin/newsletter');
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
        $newsletter = Newsletter::findOrFail($id);

        return view('admin.newsletter.show', compact('newsletter'));
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
        $newsletter = Newsletter::findOrFail($id);

        return view('admin.newsletter.edit', compact('newsletter'));
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
			'email' => 'required'
		]);
        $requestData = $request->all();
        
        $newsletter = Newsletter::findOrFail($id);
        $newsletter->update($requestData);

        Session::flash('flash_message', 'Newsletter updated!');

        return redirect('admin/newsletter');
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
        Newsletter::destroy($id);

        Session::flash('flash_message', 'Newsletter deleted!');

        return redirect('admin/newsletter');
    }
}
