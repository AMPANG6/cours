<x-layout-dash>

    <x-card title="Jumlah user">
        <p class="card-text">
            {{-- <p>Total Users: {{ $totalUsers }}</p> --}}
        </p>
        <small class="text-muted">Last updated 3 mins ago</small>
    </x-card>
    <x-table title="Table User">
        <thead>
            <tr>
              <th>NAME</th>
              <th>EMAIL</th>
              <th>LEVEL</th>
              <th>PHONE</th>
              <th>ACTIONS</th>
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