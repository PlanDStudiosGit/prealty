<x-admin-layout>
    <x-slot name="pageName">{{ $pageName }}</x-slot>
    <x-slot name="breadCrumbs">
        <x-admin.breadcrumbs :pageName="$pageName" :breadCrumbs="$breadCrumbs"/>
    </x-slot>
    

    <div class="table-area blog-table">


        <!-- action-btn -->
        <div class="action-drop">
             
        
            @if($property->status == 2)
            <form action="{{ url('admin/property/update_status', [$property->id, 2]) }}" method="POST">
            @csrf
            <input type="number" value="2" name="status" hidden>
                <button class="action-btn btn btn-primary" type="submit" name="status" style>ask for bid</button>
            </form> 

            @elseif($property->status == 0)
            <form action="{{ url('admin/property/update_status', [$property->id, 0]) }}" method="POST">
            @csrf
            <input type="number" value="1" name="status" hidden>
                <button class="action-btn btn btn-primary" type="submit" name="status" style>Close Pool</button>
            </form> 
            
                
            
            @elseif($property->status >= 3)
         <a href="{{ url('admin/property/view_bid', [$property->id]) }}"> <button class="action-btn btn btn-primary " type="submit" style>view Bid</button></a>
           
           
            

            @elseif($property->status == 1)
            <form action="{{ url('admin/property/update_status', [$property->id, 1]) }}" method="POST">
            @csrf 
                <input type="number" value="1" name="status" hidden>
                <button class="action-btn btn btn-primary" type="submit" style>Property Bought</button>
            </form> 
            @endif
            
        </div>




        <h2><b>{{ $property->type}}</b></h2>
       
        <table id="listingtable" class="table table-bordered table-hover display">
           
            <tr>
                <th>Price</th>
                <td>${{number_format($property->price)}}</td>
            </tr>
            <tr>
                <th>Total Reviews</th>
                <td>{{$investers->count()}}</td>
            </tr>
            <!-- <tr>
                <th>investment secured % </th>
                <td>23423q</td>
            </tr> -->
           
            <!-- <tr>
                <th>investment secured amount</th>
                <td>aerfde3</td>
            </tr> -->

            <tr>
                <th>Pool Status</th>

                @if($property->status == 0)
                <td style="color:green">open</td>
                @elseif($property->status == 1)
                <td style="color:red">close</td>
                @elseif($property->status == 2)
                <td style="color:blue">Property Bought</td>
                @elseif($property->status == 3)
                <td style="color:orange">Place bids</td>
                @elseif($property->status == 4)
                <td style="color:orange">Jurney End</td>
                @endif
            </tr> 
           
               
            
           
        </table> 

    </div>   

    

     

<x-slot name="pluginCss"></x-slot>
<x-admin.tinymce/>
</x-admin-layout>
