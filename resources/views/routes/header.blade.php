@push('styles')
<style>
    .nav-tabs .nav-link.active {
        border-color: #279346;
        background-color: #279346;
        color: #fff;
    }
    .nav-tabs{
        border-bottom: 2px solid #279346;
    }
</style>
@endpush
@php
    $head['os_group'] = '';
    $head['os_name'] = '';
    $head['description'] = '';
@endphp


<ul class="nav nav-tabs pt-4 mb-4" id="myTab" role="tablist">
    <li class="nav-item">
        <a class="nav-link {{$active == '' ? 'active' : ''}}" id="all-tab"
            href="{{route('route_index',['action' => ''])}}" role="tab" aria-controls="all"
            aria-selected="true">All</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{$active == 'bus' ? 'active' : ''}}" id="bus-tab"
        href="{{route('route_index',['action' => 'bus'])}}" role="tab" aria-controls="bus"
            aria-selected="false">Bus</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{$active == 'train' ? 'active' : ''}}" id="train-tab"
        href="{{route('route_index',['action' => 'train'])}}" role="tab" aria-controls="train"
            aria-selected="false">Train</a>
    </li>
</ul>

@push('scripts')
<script>

</script>

@endpush
