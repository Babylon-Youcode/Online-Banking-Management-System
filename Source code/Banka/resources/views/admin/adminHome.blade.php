@extends('layouts.app')
   
@section('content')

<div class="container-fluid ">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar bg-dark collapse">
 
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">
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
              <a class="nav-link" href="/admin/profile">
                <i class="fas fa-user-circle"></i>
                Profile
              </a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" href="/transfers">
                <i class="fas fa-briefcase"></i>
                Transfert
              </a>
            </li>
          </li>
         
          <li class="nav-item">
            <a  data-toggle="modal" class="nav-link text-danger "  data-target="#logout"  ><i class="fas fa-sign-out-alt"></i> Logout </a>
      </li>
          </ul>  
       </div>
          
      </nav>
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
       

     <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Dashboard</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
          </div>
  
          <a  data-toggle="modal" class="nav-link text-primary "  data-target="#create"  ><i class="fas fa-user-plus"></i> Add User </a>
        </div>
        {{--           ----------------- --}}

        <div class="cards">

          <div class="card-single">
              <div>
                  <h1>{!! $countadmins !!}</h1>
                  <span>Admins</span>
              </div>
              <div>
                <i class="fas fa-user-shield"></i>
              </div>
          </div>

          <div class="card-single">
              <div>
                  <h1>{!! $countUsers !!}</h1>
                  <span>Users</span>
              </div>
              <div>
                <i class="fas fa-users"></i>
              </div>
          </div>

          <div class="card-single">
              <div>
                  <h1>{!! $countTransfers !!}</h1>
                  <span>transferts</span>
              </div>
              <div>
                <i class="fas fa-exchange-alt"></i>
              </div>
          </div>

      
      </div>
      <h1 class="h2">Users</h1>
      <hr>


        {{-- ------------------ --}}
        @if(Session::get('success'))
        <div class="alert alert-info">
           {{ Session::get('success') }}
        </div>
      @endif
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col"></th>
              <th scope="col"></th>
            
            </tr>
          </thead>
          <tbody>
           
            @foreach ($users as $item)
            @if($item->is_admin == 0)
            <tr>
              <th >{{ $item->id }}</th>
              <td>{{ $item->name }}</td>
              <td>{{ $item->email }}</td>
              <td><a  data-toggle="modal" class="btn btn-danger "  data-target="#delete{{ $item->id }}"  ><i class="fas fa-trash-alt"></i> Delete </a></td>
              <td><a  data-toggle="modal" class="btn btn-success "  data-target="#update{{ $item->id }}"  ><i class="fas fa-pen"></i> Update </a></td>
              

            </tr>


            <div class="modal fade" id="delete{{ $item->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h3 class="modal-title" id="staticBackdropLabel">Are YouSure You Want To Delete</h3>
                    <button type="button" class="close btn btn-light" data-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                    </button>
                  </div>
                  <div class="modal-body" >
                    <a class="btn btn-danger btn-block" href="/delele/{{ $item->id }}">Confirm Delete</a>
          
          </div>
          </div>
        </div>
      </div>

      {{--   update         --}}

      

      <div class="modal fade" id="update{{ $item->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" id="staticBackdropLabel">Update user</h3>
              <button type="button" class="close btn btn-light" data-dismiss="modal" aria-label="Close">
              <i class="fas fa-times"></i>
              </button>
            </div>
            <div class="modal-body">
              <form action="/user/update/{{ $item->id }}" method="post" enctype="multipart/form-data">
                 @csrf
                 <div class="form-group">
                       <label>Name</label>
                       <input type="text" class="form-control" name="name"  value="{{ $item->name }}">
                    </div>
                    <div class="form-group">
                       <label>Email</label>
                       <input type="text" class="form-control" name="email" value="{{ $item->email }}">
                    </div>
                   
              
                    <button type="submit" class="btn btn-block btn-success">Update</button>
                 </form>   
             </div>
          </div>
        </div>
      </div>
     
      {{--  ------------}}

      {{-- add user --}}

      <div class="modal fade" id="create" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" id="staticBackdropLabel">Update user</h3>
              <button type="button" class="close btn btn-light" data-dismiss="modal" aria-label="Close">
              <i class="fas fa-times"></i>
              </button>
            </div>
            <div class="modal-body">
              <form action="/create" method="post" enctype="multipart/form-data">
                 @csrf
                 <div class="form-group">
                       <label>{{ __('Name') }}</label>
                       <input type="text" class="form-control" name="name"  value="">
                    </div>
                    <div class="form-group">
                       <label>{{ __('E-Mail Address') }}</label>
                       <input type="text" class="form-control" name="email" value="">
                    </div>
                    <div class="form-group">
                      <label>{{ __('Password') }}</label>
                      <input type="password" class="form-control" name="password" value="">
                   </div>
                   
              
                    <button type="submit" class="btn btn-block btn-primary"><i class="fas fa-user-plus"></i> Add</button>
                 </form>   
             </div>
          </div>
        </div>
      </div>
      
       
      {{--  --}}
                  @endif
            @endforeach
          </tbody>
        </table>

        <h1 class="h2">Transferts</h1>
        <hr>
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
          
            <tr>
              <th >{{ $item->id }}</th>
              <td>{{ $item->receiver_id }}</td>
              <td>{{ $item->amount }}</td>
              <td>{{ $item->created_at}}</td>
  
            </tr>
        
            @endforeach
          </tbody>
        </table>
       


<div style="height: 434px"></div>




        
 {{-- -------------- --}}
</main>
</div>
     
</div>

@endsection

