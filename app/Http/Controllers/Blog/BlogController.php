<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;

use App\Models\Blog\Blog;

use App\Models\Template\Template;
use App\Models\Template\TemplatePage;
use App\Models\Template\TemplateBlog;
use App\Models\Template\TemplateTemplate;
use App\Models\Template\TemplateCategory;
use App\Models\Template\TemplateSubcategory;
use App\Models\Template\TemplateSubSubcategory;

use App\Models\Template\TemplateSeller;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Session;

class BlogController extends Controller
{
    public function index()
    {
        $page = TemplatePage::where('slug', 'blog')->firstOrFail();
        $featuredBlogs = Blog::where('is_featured', 1)->get();
        $takeBlogs = Blog::take(2)->get();

        return view('frontend.blog.home', [
            'featuredBlogs' => $featuredBlogs,
            'takeBlogs' => $takeBlogs,
            'page' => $page,
        ]);
    }

    public function dashboard()
    {
        return view('administration.blog.dashboard');
    }

    public function blogs()
    {
        $featuredBlogs = Blog::where('is_featured', 1)->get();
        $takeBlogs = Blog::take(2)->get();

        return view('frontend.blog.home', ['featuredBlogs' => $featuredBlogs, 'takeBlogs' => $takeBlogs]);
    }

    public function create(Request $request)
    {
        $templates = Template::all();
        $sellers = TemplateSeller::all();
        $categories = TemplateCategory::all();
        $subcategories = TemplateSubcategory::all();
        $sub_subcategories = TemplateSubSubcategory::all();

        return view('administration.blog.home.new-blog', [
            'templates' => $templates,
            'sellers' => $sellers,
            'categories' => $categories, 
            'subcategories' => $subcategories, 
            'sub_subcategories' => $sub_subcategories,
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'slug' => ['required', 'regex:/^[a-z]+$/'],
        // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ], [
        //     'slug.regex' => 'The :attribute field must contain only lowercase letters.'
        // ]);

        $blog = Blog::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'tags' => $request->tags,
            'header_title' => $request->header_title,
            'category_name' => $request->category_name,
            'subcategory_name' => $request->subcategory_name,
            'sub_subcategory_name' => $request->sub_subcategory_name,
            'template' => $request->template,
            'seller_name' => $request->seller_name,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'youtube_iframe' => $request->youtube_iframe,
            'header_content' => $request->header_content,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'is_featured' => $request->is_featured,
            'status' => $request->status,
            'comment' => $request->comment,
        ]);

        $blog->save();

        if ($request->hasFile('featured_image')) {
            $featuredImage = $request->file('featured_image')->getClientOriginalName();
            $request->file('featured_image')->move(public_path('template/template/blog/image/featured'), $featuredImage);
            $blog->featured_image = $featuredImage;
        }

        if ($request->hasFile('file')) {
            $file = $request->file('file')->getClientOriginalName();
            $request->file('file')->move(public_path('template/template/blog/file'), $file);
            $blog->file = $file;
        }

        if ($request->hasFile('og_image')) {
            $oGImage = $request->file('og_image')->getClientOriginalName();
            $request->file('og_image')->move(public_path('template/template/blog/image/og'), $oGImage);
            $blog->og_image = $oGImage;
        }

        if ($request->hasFile('featured_image') || $request->hasFile('file') || $request->hasFile('og_image')) {
            $blog->save();
        }

        Session::flash('message', __('New Blog Successfully Added!'));
        
        return redirect(RouteServiceProvider::Blog);
    }

    public function show(Request $request)
    {            
        $blogs = Blog::all();
        
        return view('administration.blog.home.manage-blogs', ['blogs' => $blogs]);
    }

    public function detail($slug)
    {
        $page = Blog::where('slug', $slug)->firstOrFail();
        $relatedBlog = Blog::take(4)->get();

        return view('frontend.blog.home-detail', [
            'page' => $page,
            'relatedBlog' => $relatedBlog
        ]);
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);

        $templates = Template::all();
        $sellers = TemplateSeller::all();
        $categories = TemplateCategory::all();
        $subcategories = TemplateSubcategory::all();
        $sub_subcategories = TemplateSubSubcategory::all();
        
        return view('administration.blog.home.edit-blog', [
            'blog' => $blog,
            'sellers' => $sellers,
            'templates' => $templates,
            'categories' => $categories,
            'subcategories' => $subcategories,
            'sub_subcategories' => $sub_subcategories,
        ]);
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $blog = Blog::find($id);

        if ($blog) {
            $featuredImage = $request->file('featured_image');

            if ($featuredImage) {
                $validatedData = $request->validate([
                    // 'featured_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                $featuredImageName = $request->featured_image->getClientOriginalName();
                $request->featured_image->move(public_path('template/blog/image/featured'), $featuredImageName);

                $blog->featured_image = $featuredImageName;
            }

            $file = $request->file('file');

            if ($file) {
                $validatedData = $request->validate([
                    // 'file' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                $Name = $request->file->getClientOriginalName();
                $request->file->move(public_path('template/blog/file'), $Name);

                $blog->file = $Name;
            }

            $og = $request->file('og_image');

            if ($og) {
                $validatedData = $request->validate([
                    // 'og_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                $ogImageName = $request->og_image->getClientOriginalName();
                $request->og_image->move(public_path('template/blog/image/og'), $ogImageName);

                $blog->og_image = $ogImageName;
            }

            // Update other fields of the request
            $blog->title = $request->input('title');
            $blog->slug = $request->input('slug');            
            $blog->tags = $request->input('tags');
            $blog->header_title = $request->input('header_title');
            $blog->category_name = $request->input('category_name');
            $blog->subcategory_name = $request->input('subcategory_name');
            $blog->sub_subcategory_name = $request->input('sub_subcategory_name');
            $blog->template = $request->input('template');
            $blog->seller_name = $request->input('seller_name');
            $blog->short_description = $request->input('short_description');
            $blog->long_description = $request->input('long_description');
            $blog->youtube_iframe = $request->input('youtube_iframe');
            $blog->header_content = $request->input('header_content');
            $blog->meta_title = $request->input('meta_title');
            $blog->meta_description = $request->input('meta_description');
            $blog->is_featured = $request->input('is_featured');

            if (!is_null($request->input('status'))) {
                $blog->status = $request->input('status');
            }
            
            $blog->comment = $request->input('comment');

            // Save the changes
            $blog->save();

            // Perform any additional actions or redirect as needed
        } else {
            // Handle the case when the record doesn't exist
            Session::flash('update', __('There is a problem!'));

            return back();
        }

        Session::flash('update', __('Blog Successfully Updated!'));
        
        return back();
    }

    public function destroy(Request $request, $id)
    {
        Blog::where('id',$id)->delete();

        Session::flash('delete', __('Blog Successfully Deleted!'));
        
        return back();
    }
}