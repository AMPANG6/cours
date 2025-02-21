<x-layout-dash>
      <x-table title="Table User Mutation">
       <thead>
           <tr>
             <th>DATE</th>
             <th>EMAIL</th>
             <th>NOTE</th>
             <th>AMOUNT</th>
             

           </tr>
         </thead>
         <tbody>
           {{-- @foreach ( $users as $user)
             <tr>
               <td class="text-bold-500"> {{$user->name}} </td>
               <td>a</td>
               <td class="text-bold-500">a</td>
               <td>a</td>
               <td><a href="#">
                 <i class="badge-circle badge-circle-light-secondary font-medium-1" data-feather="mail"></i></a>
               </td>
             </tr>   
           @endforeach --}}
           
           
         </tbody>
      </x-table>
   </x-layout-dash>
   
   