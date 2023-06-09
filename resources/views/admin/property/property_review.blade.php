<x-admin-layout>
    <x-slot name="pageName">{{ $pageName }}</x-slot>
    <x-slot name="breadCrumbs">
        <x-admin.breadcrumbs :pageName="$pageName" :breadCrumbs="$breadCrumbs"/>
    </x-slot>
    <div class="table-area blog-table">
        <!-- action-btn -->
        <h2>Property: <b>{{ $propertyData->address}}</b></h2>
        <h3>Investor: <b>{{ ucwords($userData->name)}}</b></h3>
        <table id="listingtable" class="table table-bordered table-hover display">
            <thead>
            <tr>
                <th>Have you visited the property?</th>
                <td>{{$review->visit_property}}</td>
</tr>
<tr>
                <th>Tell us what you liked about the property.</th>
                <td>{{$review->positive_review}}</td>
</tr>
<tr>
                <th>What did you not like about the property.</th>
                <td>{{$review->negative_review}}</td>
</tr> 
           
<tr>
                <th>Property Review</th>
                <td>{{$review->rating}}</td>
</tr>

<tr>
                <!-- <th>What amount do you want to invest in the property?</th>
                <td>${{number_format($review->total_investment_value)}}</td> -->
</tr>
           
               
            </thead>
           
        </table>
    </div> 



    <x-slot name="pluginCss"></x-slot>
    <x-admin.tinymce/>
</x-admin-layout>
