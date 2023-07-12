<?php

namespace App\Http\Controllers\Backend\Product;

use App\Models\Product\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\Product\ProductRepository;
use App\Http\Requests\Backend\Product\ManageProductRequest;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\Backend\Product\CreateProductRequest;
use App\Http\Requests\Backend\Product\StoreProductRequest;
use App\Http\Requests\Backend\Product\EditProductRequest;
use App\Http\Requests\Backend\Product\UpdateProductRequest;
use App\Http\Requests\Backend\Product\DeleteProductRequest;

/**
 * ProductsController
 */
class ProductsController extends Controller
{
    /**
     * variable to store the repository object
     * @var ProductRepository
     */
    protected $repository;

    /**
     * contructor to initialize repository object
     * @param ProductRepository $repository;
     */
    public function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param  App\Http\Requests\Backend\Product\ManageProductRequest  $request
     * 
     */
    public function index(ManageProductRequest $request)
    {
        return view('backend.products.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @param  CreateProductRequestNamespace  $request
     * 
     */
    public function create(CreateProductRequest $request)
    {
        return view('backend.products.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreProductRequestNamespace  $request
     * 
     */
    public function store(StoreProductRequest $request)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Create the model using repository create method
        $this->repository->create($input);
        //return with successfull message
        Alert::toast(trans('alerts.backend.products.created'), 'success');
        return redirect()->route('admin.products.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Product\Product  $product
     * @param  EditProductRequestNamespace  $request
     * 
     */
    public function edit(Product $product, EditProductRequest $request)
    {
        return view('backend.products.edit', compact('product'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateProductRequestNamespace  $request
     * @param  App\Models\Product\Product  $product
     * 
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Update the model using repository update method
        $this->repository->update( $product, $input );
        //return with successfull message
        Alert::toast(trans('alerts.backend.products.updated'), 'success');
        return redirect()->route('admin.products.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  DeleteProductRequestNamespace  $request
     * @param  App\Models\Product\Product  $product
     * 
     */
    public function destroy(Product $product, DeleteProductRequest $request)
    {
        //Calling the delete method on repository
        $this->repository->delete($product);
        //returning with successfull message
        Alert::toast(trans('alerts.backend.products.deleted'), 'success');
        return redirect()->route('admin.products.index');
    }
    
}
