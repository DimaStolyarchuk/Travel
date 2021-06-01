@extends('layout')

@section('main')
                        <div class="entry-content">
                        @foreach($dataContacts as $dataContact)
                            <!-- BEGIN MAP -->
{{--                            <p><script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>--}}
{{--                            <div style='overflow:hidden;height:380px;width:100%;'>--}}
{{--                                <div id='gmap_canvas' style='height:380px;width:100%;'></div>--}}
{{--                                <div>embed google maps</div>--}}
{{--                                <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>--}}
{{--                            </div>--}}
{{--                            <p><script type='text/javascript'>function init_map(){var myOptions = {zoom:10,center:new google.maps.LatLng(3.4000221,-76.387969),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(3.4000221,-76.387969)});infowindow = new google.maps.InfoWindow({content:'<strong>Jane Photography</strong><br />Florida Beach<br />'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script></p>--}}
                            <!-- END MAP -->
                                <p><img style="border:10px solid #f4f5f6" src="{{ asset('storage/'. $dataContact->image) }}" ></p>
                            <div class="wpcmsdev-columns">
                                <div class="column column-width-one-half">
                                    <h4>Відправити контакт</h4>

                                    <form class="wpcf7" method="post" action="{{ route('save_contactsmail') }}">
                                        {{ csrf_field() }}
                                        <div class="form">
                                            <p><input type="text" name="name" placeholder="Імя *"></p>
                                            <p><input type="text" name="email" placeholder="Електрона адреса *"></p>
                                            <p><textarea name="message" rows="3" placeholder="Повідомлення *"></textarea></p>
                                            <input type="submit" id="submit" class="clearfix btn" value="Відправити">
                                        </div>
                                    </form>
                                    <div class="Готово">
                                       Ваш лист доставлено. Дякую!
                                    </div>

                                </div>
                                <div class="column column-width-one-half">
                                    <h4>Телефон: {{ $dataContact->phone }}</h4>
                                    <p> {{ $dataContact->description_1 }} </p>
                                    <p> {{ $dataContact->description_2 }} </p>
                                    <p> {{ $dataContact->description_3 }} </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
@endsection
