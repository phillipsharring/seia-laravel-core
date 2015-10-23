<?php

namespace Seia\Core\Http\Controllers;

use Illuminate\Http\Request;

use Seia\Core\Http\Requests;
use Seia\Core\Http\Controllers\Controller;
use Seia\Core\Model\Content;
use Seia\Core\Model\ContentType;
use Seia\Core\Model\Category;
use Seia\Core\Model\Language;
use Seia\Core\Http\Requests\SaveContentRequest;

class ContentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Display an admin page.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function admin(Request $request)
    {
        $contents = Content::with('type')->with('category')->paginate();
        $q = $request->get('q', null);
        $foundContents = [];
        if (!empty($q)) {
            $like = '%' . $q . '%';
            $foundContents = Content::where(function($query) use ($like) {
                $query->where('title', 'LIKE', $like)
                    ->orWhere('summary', 'LIKE', $like)
                    ->orWhere('body', 'LIKE', $like);
            })->get();
        }
        return view('contents.admin', compact('contents', 'q', 'foundContents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $contentTypes = ['' => 'Select Content Type'] + ContentType::lists('name', 'id')->toArray();
        $categories = ['' => 'Select Category'] + Category::lists('name', 'id')->toArray();
        $languages = ['' => 'Select Language'] + Language::lists('code', 'id')->toArray();
        $statuses = ['' => 'Select Status', 'draft' => 'Draft', 'pending' => 'Pending', 'approved' => 'Approved', 'active' => 'Active'];
        return view('contents.create', compact('contentTypes', 'categories', 'languages', 'statuses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  SaveContentRequest  $request
     * @return Response
     */
    public function store(SaveContentRequest $request)
    {
        Content::create($request->only($this->getRequestParams()));
        return redirect()->route('contents.admin')->with('message', 'Content was created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $content = Content::find($id);
        return view('contents.show', compact('content'));
    }

    /**
     * Redirect to an arbitrary url
     *
     * @param string $to
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function redirect($to)
    {
        return redirect($to, 302);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $content = Content::find($id);
        $contentTypes = ['' => 'Select Content Type'] + ContentType::lists('name', 'id')->toArray();
        $categories = ['' => 'Select Category'] + Category::lists('name', 'id')->toArray();
        $languages = ['' => 'Select Language'] + Language::lists('code', 'id')->toArray();
        $statuses = ['' => 'Select Status', 'draft' => 'Draft', 'pending' => 'Pending', 'approved' => 'Approved', 'active' => 'Active'];
        return view('contents.edit', compact('content', 'contentTypes', 'categories', 'languages', 'statuses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $content = Content::find($id);
        $content->fill($request->only($this->getRequestParams()))->save();
        return redirect()->route('contents.admin')->with('message', 'Content was updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $content = Content::find($id);
        $content->delete();
        return redirect()->route('contents.admin')->with('message', 'Content was deleted');
    }

    private function getRequestParams()
    {
        return [
            'created_by',
            'content_type_id',
            'category_id',
            'refers_to',
            'parent_id',
            'release_at',
            'expire_at',
            'language_id',
            'mime_type',
            'title',
            'summary',
            'body',
            'media',
            'status',
        ];
    }
}
