<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use App\Models\Color;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use App\Models\ProductImage;
// use Livewire\WithPagination;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\ProductFormRequest;
use App\Models\ProductColor;

class ProductController extends Controller
{
    // use WithPagination;

    public function index()
    {
        $products = Product::orderBy('id','Desc')->paginate(10);
        return view('admin.product.index',compact('products'));
    }
    public function create()
    {
        $categories = Category::all();
        $brands=Brand::all();
        $colors = Color::where('status','0')->get();
        return view('admin.product.create',compact('categories','brands','colors'));
    }

    public function store(ProductFormRequest $request)
    {
        $validateddata = $request->validated();

        $category = Category::findOrFail($validateddata['category_id']);

        $product = $category->products()->create([

            'category_id' => $validateddata['category_id'],
            'name' => $validateddata['name'],
            'slug' => Str::slug($validateddata['slug']),
            'brand' => $validateddata['brand'],
            'small_description' => $validateddata['small_description'],
            'description' => $validateddata['description'],
            'original_price' => $validateddata['original_price'],
            'selling_price' => $validateddata['selling_price'],
            'quantity' => $validateddata['quantity'],
            'trending' => $request->trending == true ? '1':'0',
            'featured' => $request->featured == true ? '1':'0',
            'status' => $request->status == true ? '1':'0',
            'meta_title' => $validateddata['meta_title'],
            'meta_keyword' => $validateddata['meta_keyword'],
            'meta_description' => $validateddata['meta_description'],
            
        ]);

        if($request->hasFile('image'))
        {
            $uploadpath = 'uploads/products/';
            
            $i=1;

            foreach($request->file('image') as $imagefile)
            {
                $extension = $imagefile->getClientOriginalExtension();
                $filename = time().$i++.'.'.$extension;
                $imagefile->move($uploadpath,$filename);
                $finalimagepathname = $uploadpath.$filename;

                $product->productimage()->create([
                    'product_id' => $product->id,
                    'image' => $finalimagepathname,
                ]);
            }
        }

        if($request->colors)
        {
            foreach($request->colors as $key => $color)
            {
                $product->productcolors()->create([
                    'product_id' => $product->id,
                    'color_id' => $color,
                    'quantity' => $request->colorquantity[$key] ?? 0,
                ]);
            }
        }

        return redirect('/admin/product')->with('message','Product Added Successfully');
    }

    public function edit(int $product_id)
    {
        $categories = Category::all();
        $brands=Brand::all();
        $product = Product::findOrFail($product_id);
        $product_color=$product->productcolors->pluck('color_id')->toArray();
        $colors = Color::whereNotIn('id',$product_color)->get();
        return view('admin.product.edit',compact('categories','brands','product','colors'));
    }
    public function update(ProductFormRequest $request,int $product_id)
    {
        $validateddata = $request->validated();
        $product = Category::findOrFail($validateddata['category_id'])->products()->where('id',$product_id)->first();
        
        if($product)
        {
            $product->update([

                'category_id' => $validateddata['category_id'],
                'name' => $validateddata['name'],
                'slug' => Str::slug($validateddata['slug']),
                'brand' => $validateddata['brand'],
                'small_description' => $validateddata['small_description'],
                'description' => $validateddata['description'],
                'original_price' => $validateddata['original_price'],
                'selling_price' => $validateddata['selling_price'],
                'quantity' => $validateddata['quantity'],
                'trending' => $request->trending == true ? '1':'0',
                'featured' => $request->featured == true ? '1':'0',
                'status' => $request->status == true ? '1':'0',
                'meta_title' => $validateddata['meta_title'],
                'meta_keyword' => $validateddata['meta_keyword'],
                'meta_description' => $validateddata['meta_description'],
                
            ]);
            if($request->hasFile('image'))
        {
            $uploadpath = 'uploads/products/';
            
            $i=1;

            foreach($request->file('image') as $imagefile)
            {
                $extension = $imagefile->getClientOriginalExtension();
                $filename = time().$i++.'.'.$extension;
                $imagefile->move($uploadpath,$filename);
                $finalimagepathname = $uploadpath.$filename;

                $product->productimage()->create([
                    'product_id' => $product->id,
                    'image' => $finalimagepathname,
                ]);
            }
        }
        if($request->colors)
        {
            foreach($request->colors as $key => $color)
            {
                $product->productcolors()->create([
                    'product_id' => $product->id,
                    'color_id' => $color,
                    'quantity' => $request->colorquantity[$key] ?? 0,
                ]);
            }
        }
       

        return redirect('/admin/product')->with('message','Product Updated Successfully');
        }
        else
        {
            return redirect('admin/product')->with('message','No Such Product Found');
        }
    }
    public function destroyimage(int $product_image_id)
    {
        $productimage = ProductImage::findOrFail($product_image_id);

        if(File::exists($productimage->image))
        {
            File::delete($productimage->image);
        }

        $productimage->delete();
        return redirect()->back()->with('message','Image Deleted Successfully');

    }
    public function delete(int $product_id)
    {
        $product = Product::findOrFail($product_id);
        if($product->productimage)
        {
            foreach($product->productimage as $image){
            if(File::exists($image->image))
            {
                File::delete($image->image);
            }
        }
    }
        $product->delete();
        return redirect()->back()->with('message','Product Deleted Successfully');

    }

    public function updateproductcolorquantity(Request $request,$prod_color_id)
    {
        // dd($request);
        $productcolordata = Product::findOrFail($request->product_id)
        ->productcolors()->where('id',$prod_color_id)->first();

        $productcolordata->update([
            'quantity' => $request->qty,
        ]);

        return response()->json(['message'=>'Product Color Quantity Updated Successfully']);
    }
    public function deleteproductcolor($prod_color_id)
    {
        
        $prodcolor = ProductColor::findOrFail($prod_color_id);
        
        $prodcolor->delete();
        
        return response()->json(['message'=>'Product Color Deleted Successfully']);
    }

}
