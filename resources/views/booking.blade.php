@include('header')
<br><br>
<form action="/booking" method="get">
        @method('get')
        <!-- <input type="text" placeholder="city" name="search" value="{{ request()->search ?? '' }}">
        <button type="submit" class="btn btn-primary no-border-button">Search</button>
    <br><br> -->
    <div class="barrecherche">
        <div class="selectcity">
            <i class="fa fa-search"></i>
            <select name="city" id="" value="{{ request()->city ?? '' }}" placeholder="Select a City" class="select">
                <option value="">Select a City</option>
                <option value="Ouakam" >Ouakam</option>
                <option value="Almadie">Almadie</option>
                <option value="Scat Urbam">Scat Urbam</option>
                <option value="Mermouz">Mermouz</option>
                <option value="Medina">Medina</option>
                <option value="Dakar-Sacré-Coeur">Sacré-Coeur</option>
            </select>
        </div>
        <div class="movements">
           
            @method('get')
                <div class="mvin">
                        <span class="move-in">move-in</span><input type="date" name="date" id="" placeholder="move-in" class="inputmi">
                </div>
            
        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
        <div  class="mvout">
                <span class="move-out">move-out</span><input type="date" name="" id="" class="inputmo">
        </div> 
        </div>
        <div class="parti3">
            <div class="guest" style=" display:flex; flex-direction:colunm; gap:3px; align-items:center;">
                <i class="fa fa-users"></i>
                <span>Guests</span>
                <input type="number" name="guest" value="{{ request()->guest ?? '' }}" style="width:40px; display:flex; flex-direction:colunm; justify-content:center; align-items:center;">
            </div>
            <div class="bouttonrecherche">
            <button type="submit" class="btn btn-primary rounded-pill">Search</button>
            </div>
        </div>
    </div>
<br><br>
<div class="great_container">
    <div>
        <button class="btn btn-success container_filter rounded-pill">
            <div>More filters</div>
                <select name="filter" id="" class="filter bg-success">
                    <option value=""></option>
                    <option value="City view">City view</option>
                    <option value="Parking">Parking</option>
                    <option value="Elevator">Elevator</option>
                    <option value="Wifi">Wifi</option>
                </select>
            </form>
        </button>
    </div>
    </form>
    <div class="fliter_items">
    @if(request()->input('filter') == 'City view')
        <div class="fliter_card">
            <i class="fa-solid fa-city"></i>
            <span>City view</span>
            <i class="fa fa-times"></i>
        </div>
    @elseif(request()->input('filter') == 'Parking')
        <div class="fliter_card">
          <img src="/room_images/fa-solid_car-alt.png" alt=""> 
          <span>Parking</span>
          <i class="fa fa-times"></i>
       </div>
    @elseif(request()->input('filter') == 'Elevator')
       <div class="fliter_card">
          <i class="fa-solid fa-elevator"></i>
          <span>Elevator</span>
          <i class="fa fa-times"></i>
       </div> 
   @elseif(request()->input('filter') == 'Wifi')
       <div class="fliter_card">
          <img src="/room_images/Group (4).png" alt="">
          <span>Wifi</span>
          <i class="fa fa-times"></i>
       </div>
       @endif    
    </div>
    <div class="search_by">
       <div class="container_search_by">
            <span><strong>Search by:</strong></span>
            <span class="Availability text-success">Availability</span>
            <select name="" id="" class="filterb">
                @foreach($booking_rooms as $affiches)
                <option value="">{{$affiches->date_of_availability}}</option>
                @endforeach
            </select>
       </div>
    </div>
</div>
<br><br>
   
<section>
    <div class="alert_search_result">
        @if(request()->input('city'))
            <div class="alert"><strong>{{ $booking_rooms->total() }} result for "{{request()->input('city')}}" </strong></div>
        
        @elseif(request()->input('date'))
            <div class="alert"><strong>{{ $booking_rooms->total() }} result for "{{request()->input('date')}}"</strong> </div>
        @elseif(request()->input('guest'))
        <div class="alert"><strong>{{ $booking_rooms->total() }} result for "{{request()->input('guest')}} guest"</strong></div>
        @elseif(request()->input('filter'))
        <div class="alert"><strong>{{ $booking_rooms->total() }} result for "{{request()->input('filter')}}"</strong></div>
        @endif
    </div>
    <div class="room_card">
        
        <div class="maincontainer_rooms">
            <div class="group_card">
            @foreach($booking_rooms as $affiches)
                <div class="maincontainer_room_card">
                    <div>
                        <img src="/room_images/{{$affiches->photo_rooms}}" alt="">
                    </div>
                    <div class="text_conatiner_card">
                        <div>
                            <p><strong>{{$affiches->titre}}: {{$affiches->city}}</strong></p>
                        </div>
                            <div class="bed_bath_wifi">
                                <div class="text_lineA_card">
                                        <img src="/room_images/fluent_bed-24-filled.png" alt="">
                                        <div>{{$affiches->how_many_rooms}} bedroom</div>
                                </div>
                                <div class="text_lineA_card">
                                        <img src="/room_images/Vector (24).png" alt="">
                                        <div>{{$affiches->how_many_bath}} bath</div>
                                </div>
                                <div class="text_lineA_card">
                                        <img src="/room_images/Group (4).png" alt="">
                                        <div>{{$affiches->wifi}}</div>
                                </div>
                            </div>
                        <div class="">
                            <p>{{$affiches->City_view}} {{$affiches->number_of_floor}} {{$affiches->elevator}}  {{$affiches->parking}}  </p>
                        </div>
                        <div class="btn_text">
                        <button class="btn btn-success rounded-pill">Available {{$affiches->date_of_availability}}</button>
                        <div>from <strong>£{{$affiches->price}}</strong>/month</div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="room_map">
            <div>
                <img src="/room_images/Map_card.png" alt="">
            </div>
            </div>
        </div>
      </div>
</section>
<!-- <div class="container-card_room">
@if(request()->input('city'))
        <div class="alert alert-danger">{{ $booking_rooms->total() }} résultat disponible pour cette recherche </div>
    
    @elseif(request()->input('date'))
        <div class="alert alert-danger">{{ $booking_rooms->total() }} résultat disponible pour cette recherche </div>
    @elseif(request()->input('guest'))
    <div class="alert alert-danger">{{ $booking_rooms->total() }} résultat disponible pour cette recherche </div>
    @endif
    <div class="rooms">
        @foreach($booking_rooms as $affiches)
        <div style=" background-color:red; height:90vh; width:300px">
        <p>{{$affiches->titre}}</p>
        <p>City: {{$affiches->city}}</p>
        <p>ROOM: {{$affiches->how_many_rooms}}</p>
        <p>Guests: {{$affiches->number_of_guest}}</p>
        <p>BATH: {{$affiches->how_many_bath}}</p>
        <p>CITY VIEW: {{$affiches->City_view}}</p>
        <p>{{$affiches->number_of_floor}}Floor</p>
        <p>ELEVATOR: {{$affiches->elevator}}</p>
        <p>PARKING: {{$affiches->parking}}</p>
        <p>AVAILABLE: {{$affiches->date_of_availability}}</p>
        <p>Price: {{$affiches->price}}</p>
        </div>
        <br><br>
        @endforeach
   
    </div>
</div> -->
<br><br><br>
@include('footer')
