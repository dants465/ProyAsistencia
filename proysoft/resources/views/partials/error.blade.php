@if(count($errors))
    <div class="alers alerst-danger">
        <button class="close" data-dismiss="alert" aria-hidden="true">
            &times;
        </button>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>  
    </div>
@endif