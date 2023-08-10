<?php

namespace App\Http\Controllers\Template;

use App\Http\Controllers\Controller;

use App\Models\Template\TemplateSubscription;

use App\Models\Template\Template;
use App\Models\Template\TemplateBlog;
use App\Models\Template\TemplateTemplate;
use App\Models\Template\TemplateCategory;
use App\Models\Template\TemplateSubcategory;
use App\Models\Template\TemplateSubSubcategory;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Session;

class TemplateSubscriptionController extends Controller
{
    public function index()
    {
        $featuredBlogs = TemplateBlog::where('is_featured', 1)->get();
        $takeBlogs = TemplateBlog::take(2)->get();

        return view('frontend.template.blog', ['featuredBlogs' => $featuredBlogs, 'takeBlogs' => $takeBlogs]);
    }

    public function blogs()
    {
        $featuredBlogs = TemplateBlog::where('is_featured', 1)->get();
        $takeBlogs = TemplateBlog::take(2)->get();

        return view('frontend.template.blog', ['featuredBlogs' => $featuredBlogs, 'takeBlogs' => $takeBlogs]);
    }

    public function create(Request $request)
    {
        return view('administration.template.subscription.new-subscription');
    }

    public function subscriber(Request $request): RedirectResponse
    {
        // dd($request);

        $request->validate([
            'email' => 'required|email|unique:template_subscriptions,email',
        ]);

        try {
            // Create a new subscription
            $subscription = TemplateSubscription::create([
                'email' => $request->email,
            ]);

            $subscription->save();

            // Send a confirmation email to the subscriber (optional)

            // Redirect back with a success message
            return back()->with('success', 'You have been subscribed!');

        } catch (\Illuminate\Database\QueryException $e) {
            // Handle the case when a duplicate entry is detected
            if ($e->errorInfo[1] == 1062) {
                return back()->with('error', 'You are already subscribed.');
            }
            // Handle other exceptions if needed
            return back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function show(Request $request)
    {            
        $subscriptions = TemplateSubscription::all();
        
        return view('administration.template.subscription.manage-subscriptions', ['subscriptions' => $subscriptions]);
    }

    public function detail($slug)
    {
        $blog = TemplateBlog::where('slug', $slug)->firstOrFail();
        $relatedBlog = TemplateBlog::take(4)->get();

        return view('frontend.template.blog-detail', [
            'blog' => $blog,
            'relatedBlog' => $relatedBlog
        ]);
    }

    public function edit($id)
    {
        $blog = TemplateBlog::findOrFail($id);

        $templates = Template::all();
        $sellers = TemplateSeller::all();
        $categories = TemplateCategory::all();
        $subcategories = TemplateSubcategory::all();
        $sub_subcategories = TemplateSubSubcategory::all();
        
        return view('administration.template.blog.edit-blog', [
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
        $blog = TemplateBlog::find($id);

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
        TemplateBlog::where('id',$id)->delete();

        Session::flash('delete', __('Blog Successfully Deleted!'));
        
        return back();
    }
}
