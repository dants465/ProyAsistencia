@if(Session::has('mensaje'))
    <div  class="alert alert-success" type="button" data-dismiss="alert" arial-hidden="True">
        <button class="close">
            &times;
        </button>
        {{Session::get('mensaje')}}
    </div>
@endif