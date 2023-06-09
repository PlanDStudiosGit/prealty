<x-admin-layout>
    <x-slot name="pageName">{{ $pageName }}</x-slot>
    <x-slot name="breadCrumbs">
        <x-admin.breadcrumbs :pageName="$pageName" :breadCrumbs="$breadCrumbs"/>
    </x-slot>
    <div class="count-cars">
        <div class="form-row">
            <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                <a class="car-counter" href="{{ route('admin.property.index') }}">
                    <div class="car-number">
                        <h2>Properties</h2>
                    </div>
                    <div class="cars-text">
                        <p>{{$properties}}</p>
                    </div>
                </a>
            </div>
   
            <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                <a class="car-counter" href="{{ route('admin.user.index') }}">
                    <div class="car-number">
                        <h2>Users</h2>
                    </div>
                    <div class="cars-text">
                        <p>{{$users}}</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                <a class="car-counter" href="{{ route('admin.property.index') }}">
                    <div class="car-number">
                        <h2>Pools</h2>
                    </div>
                    <div class="cars-text">
                        <p>{{$property_reviews}}</p>
                    </div>
                </a>
            </div>
            <!-- <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                <a class="car-counter" href="{{ url('admin.page.index') }}">
                    <div class="car-number">
                        <h2>pages</h2>
                    </div>
                    <div class="cars-text">
                        <p>pages </p>
                    </div>
                </a>
            </div> -->
            <!-- <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                <a class="car-counter" href="{{ url('admin.faq.index') }}">
                    <div class="car-number">
                        <h2>faqs </h2>
                    </div>
                    <div class="cars-text">
                        <p>faqs</p>
                    </div>
                </a>
            </div> -->
            <!-- <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                <a class="car-counter" href="{{ url('admin.lead.index') }}">
                    <div class="car-number">
                        <h2>leads </h2>
                    </div>
                    <div class="cars-text">
                        <p> $leads </p>
                    </div>
                </a>
            </div> -->
        </div>
    </div>
    <x-slot name="pluginCss"></x-slot>
</x-admin-layout>
