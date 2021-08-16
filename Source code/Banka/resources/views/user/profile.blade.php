@extends('layouts.app')
   
@section('content')


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
   


        <main class="col-md-9 ms-sm-auto  col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <h1 class="h2">Profile</h1>
              <button type="submit" data-toggle="modal" class="btn mt-1  btn-success  "  data-target="#update-modal"  >Update Profile <i class="fas fa-user"></i></button>     
            </div>
            @if(Session::get('success'))
            <div class="alert alert-success">
               {{ Session::get('success') }}
            </div>
          @endif
          <div class="row">
            <div class="col-9 p-4">

            <h2>Name  : <span class="ml-5 pl-4">{{ Auth::user()->name }}</span></h2><br>
            <h2>Email :<span class="ml-5 pl-4">{{ Auth::user()->email }}</span></h2>
            <br>
            <h2>Rip   :<span class="ml-5 pl-5">{{ Auth::user()->rip }}</span></h2>

          </div>
            <img class="w-75 col-3" src="/images/{{ Auth::user()->image }}" alt="">
         
         
          </div>
           
            <div style="height: 200px"></div>     
         
           {{-- update profile y--------------------}}
              <div class="modal fade" id="update-modal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                 <div class="modal-dialog">
                   <div class="modal-content">
                     <div class="modal-header">
                       <h3 class="modal-title" id="staticBackdropLabel">Update Profile</h3>
                       <button type="button" class="close btn btn-light" data-dismiss="modal" aria-label="Close">
                       <i class="fas fa-times"></i>
                       </button>
                     </div>
                     <div class="modal-body">
                       <form action="/user/update/{{ Auth::user()->id }}" method="post" enctype="multipart/form-data">
                          @csrf
                          <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name"  value="{{ Auth::user()->name }}">
                             </div>
                             <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email" value="{{ Auth::user()->email }}">
                             </div>
                             <div class="form-group">
                              <label>Image</label>
                              <input type="file" class="form-control" name="image" >
                           </div>
                       
                             <button type="submit" class="btn btn-block btn-success">Update</button>
                          </form>   
                      </div>
                   </div>
                 </div>
               </div>
          
          </main>
            </div>
          </div>



        
 {{-- -------------- --}}
</main>
</div>
     
</div>

@endsection
