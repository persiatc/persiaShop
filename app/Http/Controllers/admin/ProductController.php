<?php

namespace App\Http\Controllers\admin;

use App\Tag;
use App\Image;
use App\Product;
use App\Category;
use App\Producer;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

class ProductController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(empty($request->all())){
            $products = Product::latest()->paginate(10);
        }else{
            $products = Product::orderBy($request['item'], $request['method'])->paginate(10);
        }
      return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('chId','!=',0)->get();
        $producers = Producer::all();
        $tags = Tag::all();
        return view('admin.product.create', compact('producers','categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(),[
            'name'=>'required',
            'brand'=>'required',
            'discount'=>'nullable|numeric',
            'price'=>'required|numeric',
            'category'=>'required',
            'image'=>'required',
        ]);
        $tags = $request['tag_id'];
        $user_id = auth()->user()->id;
        $file1 = $request['image'];
        $image = $this->ImageUploader($file1,'images/');


        $product = Product::create([
        'name'=>$request['name'],
        'brand'=>$request['brand'],
        'body'=>$request['body'],
        'discount'=>$request['discount'],
        'price'=>$request['price'],
        'category_id'=>$request['number'],
        'number'=>$request['category'],
        'image'=>$image,
        // 'file'=>$file3,
        ]);
        if($request['file']){
            $file2 = $request['file'];
            $file3 = $this->ImageUploader($file2,'files/');
            $product->file = $file3;
            $product->update();
        }
        $product->tags()->attach($tags);
        return redirect(route('product.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $protag = $product->tags()->get();
//        dd($protag);
//        $ids = array_column($protag, 'id');
//        dd($ids);
        $categories = Category::where('chId','!=',0)->get();
        $producers = Producer::all();
        $tags = Tag::all();
        return view('admin.product.edit', compact('categories', 'producers','tags', 'protag', 'product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        if($request['image']){
        $file = $request['image'];
        $image = $this->ImageUploader($file,'images/');
//        unlink($product->image);
      }else{
        $image = $product->image;
      }
        if($request['file']){
        $file = $request['image'];
        $val = $this->ImageUploader($file,'files/');
//        unlink($product->file);
      }else{
        $val = $product->file;
      }


      $data = $request->all();
         $product->tags()->sync($data['tag_id']);
      $data['image'] = $image;
        $data['file'] = $val;

      $product->update($data);
      return redirect(route('product.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
//        unlink($product->image);
//        unlink($product->file);
        $product->delete();
        return redirect(route('product.index'));
    }



     /**
     * Image Upload Code
     *
     * @param Attraction $attraction
     * @return Application|Factory|View|void
     */
    public function createGallery(Product $product)
    {
        return view('admin.product.gallery', [
            'product' => $product
        ]);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function addGallery(Request $request): JsonResponse
    {
        $product = Product::find($request->value_id);
        $image = $request->file('file');
        $path = 'products/gallery/product_' . $product->id . '/';
        $imageName = $this->ImageUploader($image, $path);

        $imageUpload = new Image();
        $imageUpload->url = $imageName;
        $imageUpload->type = '1';
        $product->images()->save($imageUpload);
        return response()->json(['success' => $imageName]);

    }

    /**
     * @param $id
     * @return RedirectResponse
     */
    public function galleryDestroy($id): RedirectResponse
    {
        $image = Image::find($id);
        if (file_exists($image->url)) {
            unlink($image->url);
        }
        $image->delete();
        return back();

    }


     /**
     * @Date: 2021-02-03 11:48:52
     * @Desc: destroy all image from gallery
     * @param Attraction $attraction
     * @return RedirectResponse
     */
    public function AllGalleryDestroy(Attraction $attraction): RedirectResponse
    {
        if (!empty($attraction->images()->first())) {
            foreach ($attraction->images as $image) {
                unlink($image->url) or die('Delete Error');
                $image->delete();
            }
            session()->flash('alert-success', 'اطلاعات با موفقیت حذف شد');
        } else {
            session()->flash('alert-danger', 'عکسی برای حذف کردن یافت نشد!');
        }
        return back();

    }

}
