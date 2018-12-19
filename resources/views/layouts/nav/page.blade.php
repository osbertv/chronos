
    <a href="{{ $data->url(1).'&status='.$status.'&search='.$search }}" class="btn btn-sm btn-outline-primary">|<</a>  
    <a href="{{ $data->url($data->currentPage()-1).'&status='.$status.'&search='.$search }}" class="btn btn-sm btn-outline-primary"><&nbsp;</a>
    <a class="btn btn-sm btn-outline-info" disabled=1> {{ $data->currentPage() }} </a>
    <a href="{{ $data->url($data->currentPage()+1).'&status='.$status.'&search='.$search }}" class="btn btn-sm btn-outline-primary">&nbsp;></a>  
    <a href="{{ $data->url($data->lastPage()).'&status='.$status.'&search='.$search }}" class="btn btn-sm btn-outline-primary">>|</a>  
