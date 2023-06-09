<x-admin-layout>
    <x-slot name="pageName">{{ $pageName }}</x-slot>
    <x-slot name="breadCrumbs">
        <x-admin.breadcrumbs :pageName="$pageName" :breadCrumbs="$breadCrumbs"/>
    </x-slot>
    <div class="table-area blog-table">
         
    

        <table class="table">
  <thead>
    <tr>
      <th scope="col">name</th>
      <th scope="col">Email</th>
      <th scope="col">Opted for</th>
      <th scope="col">Bid</th>
      <th scope="col">%ROI</th>
      <th scope="col">Amount</th>
    </tr>
  </thead>
  
  @foreach($bider as $biders)

        
   
@php
$user=DB::table('users')->where('id',$biders->user_id)->first();
@endphp

  <tbody>
    <tr>
      <td scope="row">{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$biders->action}}</td>


      @if($biders->action == 'roi')
      <td>N/A</td>
      <td>{{$biders->roi_per}}%</td>
      <td>{{number_format($biders->roi_amount)}}</td>
      @elseif($biders->action == 'buy')
      <td>{{number_format($biders->bid_amount)}}</td>
      <td>N/A</td>
      <td>N/A</td>
      @else
      <td>{{number_format($biders->bid_amount)}}</td>
      <td>{{$biders->roi_per}}%</td>
      <td>{{number_format($biders->roi_amount)}}</td>
      @endif

    </tr>
    
  </tbody>
  @endforeach 
</table>
        
    </div> 


        @php
          $total_profit=$buyer->bid_amount-$property->price; 
          $pulse_profit=$total_profit/2;
          $total_profit_after_deduction=$total_profit-$pulse_profit;
        @endphp





    @if($property->status == 4)
    <h2>Company Profit: ${{number_format($pulse_profit)}}</h2>
    <div class="table-area blog-table">
      <table class="table">
        <tr>
          <th>Name</th>
          <th>Bid Winner</th>
          <th>ROI</th>

        </tr> 

      


        @foreach($bider as $biders)
        @php
        $user=DB::table('users')->where('id',$biders->user_id)->first();
        $bider_profit=$biders->total_investment/100 * $total_profit_after_deduction;
        @endphp
        <tr> 
          <td scope="row">{{$user->name}}</td>

          <td>{{ ($bid_users->name == $user->name) ?'Bid winner' :'N/A' }}</td>
          <td>{{ ($bid_users->name != $user->name) ? '$'.number_format($bider_profit):'N/A' }}</td>

        </tr>

        @endforeach


      </table>


    </div>



    @endif



<x-slot name="pluginCss"></x-slot>
<x-admin.tinymce/>
</x-admin-layout>
