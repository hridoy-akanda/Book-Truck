@extends('layout')
@section('content')
<h2 class="title text-center">Features Items</h2>
<?php foreach( $product_by_manufacture as $v_manufacture_by_product){?>
    <div class="col-sm-4 ab">
        <div class="product-image-wrapper">
            <div class="single-products">
                    <div class="productinfo text-center ">
                        <img   src="{{URL::to($v_manufacture_by_product->product_image)}}" style="height: 300px;" alt="" />
                        <h2>{{$v_manufacture_by_product->product_price}}Tk</h2>
                        <p>{{$v_manufacture_by_product->product_name}}</p>
                        <a href="{{URL::to('/view_product/'.$v_manufacture_by_product->product_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>
                    <div class="product-overlay">
                        <div class="overlay-content">
                            <h2>{{$v_manufacture_by_product->product_price}}Tk</h2>
                            <p>{{$v_manufacture_by_product->product_name}}</p>
                            <a href="{{URL::to('/view_product/'.$v_manufacture_by_product->product_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                    </div>
            </div>
            <div class="choose">
                <ul class="nav nav-pills nav-justified">
                    <li><a href="#"><i class="fa fa-plus-square"></i>{{$v_manufacture_by_product->manufacture_name}}</a></li>
                    <li><a href="{{URL::to('/view_product/'.$v_manufacture_by_product->product_id)}}"><i class="fa fa-plus-square"></i>View Product</a></li>
                </ul>
            </div>
        </div>
    </div>
    <?php } ?>
    </div>
  
    <!--features_items-->


<div class="recommended_items"><!--recommended_items-->
    <h2 class="title text-center">recommended items</h2>
    
    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active">   
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{URL::to('frontend/images/books/1.2 51meD-dRRcL._SX394_BO1,204,203,200_.jpg')}}" alt="" />
                                <h2>100 BDT</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{URL::to('frontend/images/books/1.1.jpg')}}" alt="" />
                                <h2>100 BDT</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{URL::to('frontend/images/books/2.1 fbb8a466e0672791a710fc90c997be36.png')}}" alt="" />
                                <h2>100 BDT</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">  
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{URL::to('frontend/images/books/3.1 51hY7O4oQDL._SX394_BO1,204,203,200_.jpg')}}" alt="" />
                                <h2>100 BDT</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{URL::to('frontend/images/books/3.2 6bc2f91a2747ccc743f7fb9c3c318ecc.jpg')}}" alt="" />
                                <h2>200 BDT</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{URL::to('frontend/images/books/3.2 51LTQpJLHjL._SX403_BO1,204,203,200_.jpg')}}" alt="" />
                                <h2>200 BDT</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
            <i class="fa fa-angle-left"></i>
          </a>
          <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
            <i class="fa fa-angle-right"></i>
          </a>          
    </div>
</div><!--/recommended_items-->




@endsection