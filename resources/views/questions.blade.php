<x-layout>

    <div class="card col col-sm-8 offset-sm-2 mt-2">
        <div class="card-body">
            <h5 class="card-title">دقت نمایید که </h5>
            <p class="card-text">
                درانجام این آزمون به خودتان فکر کنید؛ آن هم خارج از
                نقشهای شغلی یا خانوادگی ای که بر عهده دارید. به این صورت که معمولا کدام پاسخ یا عمل به شما نزدیکتر است، یا اینکه کدام پاسخ توصیف
                نزدیکتری از اعمال و احساسات شما به دست میدهد.
            </p>
        </div>
    </div>


    <form action="/result" class="row"  method="POST">
        @csrf
        <div class="container mt-2">
            <div class="col col-sm-8 offset-sm-2">

                @php( $i = 1)

                @foreach($data as $q_id => $question)
                    <div class="card mt-2" >
                        <div class="card-body">

                            <h5 style="text-align: right" class="card-title"><strong class="ms-2" style="float: right"> ({{$i}} </strong> {{$question['question']}}</h5>
                            <p class="card-text">

                            @foreach($question['options'] as $id => $option)
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="{{$q_id}}" value="{{$id}}" id="flexRadioDefault1" @if($loop->first) checked @endif>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        {{$option}}
                                    </label>
                                </div>

                            @endforeach
                            </p>
                        </div>
                    </div>
                    @php($i++)
                @endforeach



            </div>
        </div>
            <button type="submit" class="col mt-4 mb-4 col-4 offset-4 btn btn-lg btn-success ">نتیجه تست</button>
    </form>

</x-layout>
