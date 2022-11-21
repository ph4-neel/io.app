@php
$imageUrls = array(
    '1' => asset('assets/img/icons/spot-illustrations/corner-1.png'),
    '2' => asset('assets/img/icons/spot-illustrations/corner-2.png'),
    '3' => asset('assets/img/icons/spot-illustrations/corner-3.png'),
);

@endphp


<div class="card h-100">
    <div class="bg-holder bg-card" style="background-image:url({{ @$bgimage?@$imageUrls[$bgimage]:$imageUrls[rand(1,3)] }});">
    </div>
    <div class="card-header z-index-1">
        <h5 class="text-primary">{{ @$title }}</h5>
        <h6 class="text-600">{{ @$subTitle }}</h6>
        <div class="card-body z-index-1">
            {{ $slot }}
        </div>
    </div>
</div>