@php
    $kaponProcess = ['Submit the adoption application form', 'Attend the Zoom interview', 'Meet our shelter animals in person', 'Visit your chosen pet to confirm your choice', 'Wait for vet clearance and schedule pick up', 'Take your pet home!'];

@endphp

<x-layout>
    <livewire:guideline-card title="Adoption Process" description="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis
            aliquid molestias consequuntur provident corporis et, nesciunt sequi
            odit ab eligendi." process="" />

    <livewire:guideline-black-card :process="$kaponProcess" />
</x-layout>
