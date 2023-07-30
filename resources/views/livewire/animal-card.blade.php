@php
    $age_years = floor($animal->age_months / 12);
    $age_months = $animal->age_months % 12;
@endphp

<div class="duration-200 shadow-xl card bg-base-100 hover:-translate-y-1 hover:cursor-pointer">
    <figure>
        <x-image class="object-cover w-48 h-48 p-4" :image='$animal->thumbnail' defaultSrc="./assets/dog1.jpg" />
    </figure>
    <div class="card-body">
        <h2 class="card-title">
            {{ $animal->name }}
            <div class="badge badge-secondary">
                @if ($age_years != 0 || $age_months == 0)
                    {{ $age_years }} yrs
                @endif
                @if ($age_months != 0)
                    {{ $age_months }} mos
                @endif
                old
            </div>
        </h2>
        <p>{{ mb_strimwidth($animal->description, 0, 128, '...') }}</p>
        <div class="justify-end card-actions">
            <div class="badge badge-outline">{{ $animal->sex->sex }}</div>
        </div>
    </div>
</div>
