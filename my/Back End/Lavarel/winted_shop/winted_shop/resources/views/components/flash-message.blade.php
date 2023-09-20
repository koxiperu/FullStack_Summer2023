@if(session()->has('message'))
    <div class="alert flash-success" role="alert">
        <div>
            <h4 class="alert-heading">Great success!</h4>
            <p>{{session('message')}}</p>
        </div>        
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
