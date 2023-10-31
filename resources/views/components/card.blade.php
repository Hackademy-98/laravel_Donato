<div class="col-12 col-md-3 my-3">
    <div class="card border-0" style="width: 18rem;">
        <img src="{{ $data["img"] }}" class="card-img-top" alt="...">
        <div class="card-body d-flex flex-column align-items-center">
            <h5 class="card-title text-truncate" title="{{ $data['name'] }}">{{ $data['name'] }}</h5>
            <a href="{{ route('show.'.$route,["name"=>$data["name"]]) }}" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</div>