<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Sociallink;

class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $sociallinks = Sociallink::get();
        return view('admin.pages.solicallinklist',compact('sociallinks'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.addsociallinks');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'             => 'required',
            'url'             => 'required',
        ]);

        $links  = new Sociallink();
        $links->title         = strtolower($request->title);
        $links->url           = strtolower($request->url);
        $links->save();
        return redirect()->route('social.index')->with('success','Links added successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $links = Sociallink::find($id);
        return view('admin.pages.editsociallinks',compact('links'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request,[
            'title'             => 'required',
            'url'               => 'required',
        ]);

        $links = Sociallink::find($id);
        $links->title         = $request->title;
        $links->url           = $request->url;
        $links->save();
        return redirect()->route('social.index')->with('success','Links updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $links = Sociallink::find($id);

        $links->delete();

        return redirect()->route('social.index')->with('success','Links delete successfully');
    }
}
