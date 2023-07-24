@php
    $kaponProcess = ['Submit the adoption application form', 'Attend the Zoom interview', 'Meet our shelter animals in person', 'Visit your chosen pet to confirm your choice', 'Wait for vet clearance and schedule pick up', 'Take your pet home!'];
    $adoptProcess = ['Submit the adoption application form', 'Attend the Zoom interview', 'Meet our shelter animals in person', 'Visit your chosen pet to confirm your choice', 'Wait for vet clearance and schedule pick up', 'Take your pet home!'];
    
@endphp

<x-layout.user>
    <livewire:guideline-card title="Adoption Process" description="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis
            aliquid molestias consequuntur provident corporis et, nesciunt sequi
            odit ab eligendi." img="./assets/adoption.png" :process="$adoptProcess" />

    <livewire:guideline-black-card title="Adoption Process" description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae quis
            ratione officia neque excepturi similique quasi aspernatur cupiditate, quae accusamus!"
        img="./assets/dog2.jpg" :process="$kaponProcess" />
</x-layout.user>
