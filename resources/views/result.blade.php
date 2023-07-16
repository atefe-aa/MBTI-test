<x-layout>

    <div class="row container mt-4 mb-4">
        <div class="col col-sm-8 offset-sm-3">
            <div class="card" >
                <div class="card-body">
                    <h5 class="card-title">{{$result['code']}}شخصیت : </h5>
                    <h5>{{$result['name']}}</h5>
                    <p class="card-text">
                        رضایت شغلی تیپهای {{$result['code']}} با انجام کارهایی با شرایط زیر حاصل میشود
                <br>        {{$result['paragraph']}}
                    </p>
                    <h5>{{$result['code']}}مشاغل مناسب تیپ شخصیتی   :</h5>
                    <ul class="list-group">
                        @foreach($result['jobs'] as $job)
                            <li class="list-group-item">{{$job}}</li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>


    </div>

</x-layout>
