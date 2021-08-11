@extends('layouts.app')
   
@section('content')

{{-- <div class="container">
    
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    You are Admin.
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="container-fluid ">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar bg-dark collapse">
 
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/home">
                <i class="fas fa-tachometer-alt"> </i>
                Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/blog">
                <i class="fas fa-blog"></i>
                Blog
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/user/profile">
                <i class="fas fa-user-circle"></i>
                Profile
              </a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" href="/transfers">
                <i class="fas fa-briefcase"></i>
                Transfer
              </a>
            </li>
            <li class="nav-item">
              <a  data-toggle="modal" class="nav-link text-danger "  data-target="#logout"  ><i class="fas fa-sign-out-alt"></i> Logout </a>
        </li>
           
          </ul>  
       </div>
          
      </nav>
      {{-- confirm logout----------------------- --}}
      <div class="modal fade" id="logout" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" id="staticBackdropLabel">Are YouSure You Want To Logout</h3>
              <button type="button" class="close btn btn-light" data-dismiss="modal" aria-label="Close">
              <i class="fas fa-times"></i>
              </button>
            </div>
            <div class="modal-body" >
      <a class="btn btn-primary btn-block" href="{{ route('logout') }}"
         onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
          {{ __('Confirm Logout') }}
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
      </form>
    </div>
    </div>
  </div>
</div>
{{--  --}}

{{--   ---------------------------- --}}

     <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Dashboard</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
          </div>
        </div>
        {{-- ------------------ --}}
        <div class="cards">

          <div class="card-single">
              <div>
                  <h1>{!! $countadmins !!}</h1>
                  <span>Admins</span>
              </div>
              <div>
                  <i class="fa fa-graduation-cap" aria-hidden="true"></i>
              </div>
          </div>

          <div class="card-single">
              <div>
                  <h1>{!! $countUsers !!}</h1>
                  <span>Users</span>
              </div>
              <div>
                  <i class="far fa-shapes"></i>
              </div>
          </div>

          <div class="card-single">
              <div>
                  <h1>{!! $countTransfers !!}</h1>
                  <span>transferts</span>
              </div>
              <div>
                  <i class="far fa-question-circle"></i>
              </div>
          </div>

      
      </div>
      <h1 class="h2">Transferts</h1>

      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Receiver</th>
            <th scope="col">Amount</th>
            <th scope="col">Date</th>
          
          
          </tr>
        </thead>
        <tbody>
         
          @foreach ($Transfers as $item)
          @if($item->sender_id == Auth::user()->id )
          <tr>
            <th >{{ $item->id }}</th>
            <td>{{ $item->receiver_id }}</td>
            <td>{{ $item->amount }}</td>
            <td>{{ $item->created_at}}</td>

          </tr>
          @endif
          @endforeach
        </tbody>
      </table>






        
 {{-- -------------- --}}
</main>
</div>
     
</div>

@endsection

