{{-- {{ $products }} --}}

{{-- @forelse ($products as $item)
                <div class="media mb-4">
                    <img src="/storage/files/{{$item->product_image}}" alt="" class="d-flex align-self-start rounded mr-3" height="90">
                    <div class="media-body">
                        <h4 class="mt-0 font-16">{{$item->product_name}}</h4>
                        <h4 class="mt-0 font-16">Rs.{{$item->product_price}}/=</h4>
                        <h4 class="mt-0 font-16">{{$item->product_desc}}</h4>

                    </div>
                </div>
                @empty
                    <code>No product found</code>
                @endforelse --}}

                @forelse ($products as $item)

                <div class="card" style="height: 140px">
                    <div class="card-body">
                        <div class="float-sm-start">
                            <img src="/storage/files/{{$item->product_image}}" alt="" class="d-flex align-self-start rounded mr-3" width="120px" height="100px">
                        </div>
                        <div class="float-md-start" style="margin-left: 80px " style="margin-top: 0px ">
                            <h4 class="mt-0 font-16">{{$item->product_name}}</h4>
                        </div>
                        <div class="float-lg-start" style="margin-left: 90px">
                            <h5 class="mt-0 font-16">Rs.{{$item->product_price}}/=</h5>
                        </div>
                        <div class="float-lg-start" style="margin-left: 100px">
                            <h6 class="mt-0 font-16">{{$item->product_desc}}</h6>
                        </div>
                        <div class="float-right" style="margin-top:10px">
                            <a href="#" class="btn"
                                style="background-color:#F20505; color:white; width:125px">Buy
                                Now</a><br>
                            <a href="/carts" class="btn"
                                style="background-color:#F3AF00; color:white; margin-top: 10px">Add to cart</a>
                        </div>
                        <div class="float-right" style="margin-left: 1250px; margin-top:-110px">
                            <i class="bi bi-heart"></i>
                        </div>
                    </div>
                </div>

                @empty
                    <code>No product found</code>
                @endforelse





{{--
                @forelse ($products as $item)

                <div class="card" style="height: 140px">
                    <div class="card-body">

                        <table class="table mg-b-0 text-md-nowrap table-borderless">
                            <tbody>
                                <tr>
                                    <td>
                                    <div class="float-sm-start">
                                    <img src="/storage/files/{{$item->product_image}}" alt="" class="d-flex align-self-start rounded mr-3" width="120px" height="100px">
                                    </div>
                                    </td>

                                    <td>
                                    <div class="float-md-start" style="margin-left: 80px ">
                                    <h4 class="mt-0 font-16">{{$item->product_name}}</h4>
                                    </div>
                                </td>

                                    <td>
                                    <div class="float-lg-start" style="margin-left: 90px">
                                    <h4 class="mt-0 font-16">Rs.{{$item->product_price}}/=</h4>
                                    </div>
                                </td>


                                    <td>
                                    <div class="float-lg-start" style="margin-left: 100px">
                                    <h6 class="mt-0 font-16">{{$item->product_desc}}</h6>
                                    </div>
                                </td>

                                    <td>
                                    <div class="float-right" style="margin-top:10px">
                                    <a href="#" class="btn"
                                    style="background-color:#F20505; color:white; width:125px">BuyNow</a><br>
                                    </td>

                                    <td>
                                    <a href="#" class="btn"
                                    style="background-color:#F3AF00; color:white; margin-top: 10px">Add to cart</a>
                                    </div>
                                    </td>

                                    <td>
                                    <div class="float-right" style="margin-left: 1250px; margin-top:-110px">
                                     <i class="bi bi-heart"></i>
                                     </div>
                                    </td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                @empty
                    <code>No product found</code>
                @endforelse --}}







