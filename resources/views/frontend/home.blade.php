@extends('frontendtemplate')
@section('content')

    <h1 class="text-center text-uppercase">Royal's Accomodation</h1>
    <div class=" container container-fluid">
       <div class="hotel_booking_area position">
           
               <div class="hotel_booking_table">
                   <div class="col-md-3">
                       <h2 class="text-dark">Book<br> Your Room</h2>
                   </div>
                   <div class="col-md-9">
                       <div class="boking_table">
                           <div class="row">
                               <div class="col-md-4">
                                   <div class="book_tabel_item">
                                       <div class="form-group">
                                           <div class='input-group date' id='datetimepicker11'>
                                               <label><b>Arrival Date</b></label>
                                           </div>
                                       </div>
                                       <div class="form-group">
                                           <div class='input-group date' id='datetimepicker1'>
                                               <input type='date' class="form-control" placeholder="Arrival Date"/>
                                           </div>
                                       </div>
                                   </div>
                               </div>

                               <div class="col-md-4">
                                   
                                   <div class="book_tabel_item">
                                       <div class="form-group">
                                           <div class='input-group date' id='datetimepicker11'>
                                              <label><b>Departure Date</b></label>
                                           </div>
                                       </div>
                                       <div class="form-group">
                                           <div class='input-group date' id='datetimepicker1'>
                                               <input type='date' class="form-control" placeholder="Departure Date"/>
                                               
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               {{-- <div class="col-md-4">
                                   <div class="book_tabel_item">
                                       <div class="input-group">
                                           <select class="wide">
                                               <option data-display="Adult">Adult</option>
                                               <option value="1">Old</option>
                                               <option value="2">Younger</option>
                                               <option value="3">Potato</option>
                                           </select>
                                       </div>
                                       <div class="input-group">
                                           <select class="wide">
                                               <option data-display="Child">Child</option>
                                               <option value="1">Child</option>
                                               <option value="2">Baby</option>
                                               <option value="3">Child</option>
                                           </select>
                                       </div>
                                   </div>
                               </div> --}}
                               <div class="col-md-4">
                                   <div class="book_tabel_item">
                                       <div class="input-group">
                                           <select class="wide">
                                               <option data-display="Child">Number of Rooms</option>
                                               <option value="1">Room 01</option>
                                               <option value="2">Room 02</option>
                                               <option value="3">Room 03</option>
                                           </select>
                                       </div>

                                       <div class="input-group">
                                           <select class="wide">
                                               <option data-display="Adult">Number of Adults</option>
                                               <option value="1">01</option>
                                               <option value="2">02</option>
                                               <option value="3">03</option>
                                           </select>
                                       </div>

                                       <div class="input-group">
                                           <select class="wide">
                                               <option data-display="Child">Number of Childern</option>
                                               <option value="1">01</option>
                                               <option value="2">02</option>
                                               <option value="3">03</option>
                                               <option value="3">None</option>
                                           </select>
                                       </div>
                                       <a class="book_now_btn button_hover" href="#">Book Now</a>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           
       </div>
    </div>


    <div class="container py-3">
        <h1 class="text-center text-uppercase">Royal's Facilities</h1>
        <p class="text-center">Who are in extremely love with eco friendly system.</p>
        <div class="row py-3">
            <div class="col-md-6">
                {{-- <img src="images/new_arriavle.jpg" class="img-fluid"> --}}
                <div class="row">
                    <div class="col-md-12 mt-2 mb-4">
                        <div class="card">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                <img src="{{asset('frontend/img/resturant.jpg')}}" class="card-img card-deck py-3">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title text-center"><b>Resturant</b></h5>
                                <p class="card-text">The imagination of our chefs will never bore you with always different and delicious dishes.The attention in choice of genuine  will relax you.</p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mb-4">
                        <div class="card">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                <img src="{{asset('frontend/img/pool.jpeg')}}" class="card-img card-deck py-3">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                <h5 class="card-title text-center"><b>Swimming Pool</b></h5>
                                <p class="card-text">Royal Hotel's swimming pool is set with a perfect venting system, and a luxury pool surrounded with natural light ensuring a relaxing atmosphere.Enjoy your swim in Royal Hotel.</p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mb-4">
                        <div class="card">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                <img src="{{asset('frontend/img/sport.jpg')}}" class="card-img card-deck py-3">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title text-center"><b>Sports Club</b></h5>
                                <p class="card-text">Royal Hotel, Sports Club has free bikes, an outdoor swimming pool and fitness centre.</p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12 mt-2 mb-4">
                        <div class="card">
                            <div class="row no-gutters">
                                <div class="col-md-4 ">
                                <img src="{{asset('frontend/img/bar.jpeg')}}" class="card-img card-deck py-3">
                            </div>
                            <div class="col-md-8 ">
                                <div class="card-body">
                                    <h5 class="card-title text-center"><b>Bar</b></h5>
                                <p class="card-text">Enjoy a drink in our Royal Hotel's bar is a truly enjoyable experience – the views of the natural harbour.</p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mb-4">
                        <div class="card">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                <img src="{{asset('frontend/img/car.jpg')}}" class="card-img card-deck py-3">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title text-center"><b>Rental Cars</b></h5>
                                <p class="card-text">When you're ready to travel, we want you to feel confident and safe.We are committed to industry-leading procedures to clean with careful attention of Royal Hotel.</p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mb-4">
                        <div class="card">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                <img src="{{asset('frontend/img/gym.jpg')}}" class="card-img card-deck py-3">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title text-center"><b>Gymnesium</b></h5>
                                <p class="card-text">With a mix of equipment and weights, our Royal Hotel gym will cater to you whether you want to do a cardio workout.</p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    

    {{-- <div class="container container-fluid py-5">
      <div class="card">
        <img src="/w3images/jeans3.jpg" alt="Denim Jeans" style="width:100%">
        <h1>Tailored Jeans</h1>
        <p class="price">$19.99</p>
        <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
        <button>Book Now</button>
        <a class="btn btn-dark" href="{{route('home')}}">Detail</a>
      </div>
    </div> --}}

    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6 my-4">
          <div class="card">
            <div class="card_img">
              <img src="{{asset('frontend/img/download.jpeg')}}" class="card-img-top border-bottom image">
            </div>
            <div class="card-body text-center">
              <h4>Deluxe</h4>
              <p>Double Room</p>
              <hr class="item-divider">
              <p>35000 MMK</p>
              <div class="view-detail py-2" data-target="#detailModal" data-toggle="modal">
                
                <button class="btn btn-outline-dark btn-block">Room's Detail</button>
              </div>
              <a href="{{route('frontendcheckout')}}" class="btn btn-outline-dark btn-block">Book Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
        <!--detail modal-->
        <div class="modal fade" id="detailModal">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h3>Room's Detail</h3>
                <button class="close" data-dismiss="modal">
                  <span>&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="container">
                  <div class="row">
                    <div class="col-md-6">
                      <img src="{{asset('frontend/img/download.jpeg')}}" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                      <h4>Room's Information</h4>
                      <p>Room No : 0101</p>
                      <p>Room Price : 35000 MMK</p>
                      <p>Category : Deluxe</p>
                      <p>Subcategory : Double</p>
                      <p>Description : Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip  commodo
                      consequat.</p>
                      <div class="form-group">
                        <label for="qty">Qty :</label>
                        <input type="number" name="" id="qty" class="form-control w-50">
                      </div>
                      <a href="{{route('frontendcheckout')}}" class="btn btn-outline-dark btn-block">Book Now</a>
                      {{-- <button class="btn btn-outline-dark">Book Now</button> --}}
                      <!-- <button class="btn btn-outline-dark">Add to Cart</button> -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button class="btn btn-outline-dark" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

       {{--  @foreach($items as $item)
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="{{asset($item->photo)}}" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">{{$item->name}}</a>
              </h4>
              <h5>{{$item->price}}</h5>
              <p class="card-text">{{$item->description}}</p>
            </div>
            <div class="card-footer">
              <a href="" class="btn btn-info btn-sm addtocart" data-id="{{$item->id}}" data-name="{{$item->name}}" data-photo="{{asset($item->photo)}}" data-price="{{$item->price}}" data-discount="{{$item->discount}}" data-qty="{{$item->qty}}">Add to Cart</a>
              <a href="{{route('frontenddetail',$item->id)}}" class="btn btn-primary btn-sm">Detail</a>
            </div>
          </div>
        </div>
        @endforeach --}}

@endsection

@section('script')
    <script type="text/javascript" src="{{asset('frontend/js/count.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/js/script.js')}}"></script>
@endsection
    
    
