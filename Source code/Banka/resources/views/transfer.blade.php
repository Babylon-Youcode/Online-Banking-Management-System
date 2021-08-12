@extends('layouts.app')
   
@section('content')


<div class="container-fluid ">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar bg-dark collapse">
 
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
              @if(Auth::user()->is_admin == 1)
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="admin/home">
                <i class="fas fa-tachometer-alt"> </i>
                Dashboard
              </a>
            </li>
            @else 
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/home">
                  <i class="fas fa-tachometer-alt"> </i>
                  Dashboard
                </a>
              </li>
              @endif 

            <li class="nav-item">
              <a class="nav-link" href="/blog">
                <i class="fas fa-blog"></i>
                Blog
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fas fa-user-circle"></i>
                Profile
              </a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" href="">
                <i class="fas fa-briefcase"></i>
                Transfer
              </a>
            </li>
        
           
       
          </ul>  
       </div>
          
      </nav>
   

           
         <div class="row container">
             <div class="col-8"></div>
         
      <div class="col-4"><br><br>
      
                       <h3 class="text-center">Transfer</h3>
                   <br>
                 
                                       <form action="/transfer" method="post" enctype="multipart/form-data">
                          @csrf
                          <div class="form-group">
                                <label>Amount</label>
                                <input type="number" class="form-control" name="amount" required >
                             </div>
                             <div class="form-group">
                                <label>Receiver</label>
                                <select name="receiver_id"  class="form-control"id="" required>
                                    @foreach ($receiver as $item)
                                    @if($item->is_admin == 0)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endif
                                    @endforeach
                                </select>
                             </div>
                           
                           <input type="hidden" class="form-control" name="sender_id" value="{{ Auth::user()->id }}"  >
                       
                             <button type="submit" class="btn btn-block btn-success">Tansfer</button>
                          </form>   
                   
                   </div>   
                </div>
                <div style="height: 434px"></div>
                </div>     
            </div>  
      
           

@endsection
