<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1
/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="{{ ('css/main.css') }}">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="
        sha384-HzLeBuhoNPvS15KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">


<div class="container">
<div class="row">
 

  <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Utilisateur
                
                </div>
            <div class="card-body chatbox p-0">
                <ul class="list-group list-group-flush">

                    <a class="text-dark link">
                            <li class="list-group-item ">
                
                                <img class="img-fluid avatar " src="https://cdn.pixabay.com/photo/2017/06/13/12/53/profile-2398782_1280.png">         
                                @if(false)                                                          
                                <div class="badge badge-success rounded-full"> </div>
                                @else
                                <div class="badge badge-danger rounded-full"> </div>
                                @endif

                                    name 
                                <div class="badge badge-success rounded-full"> 20 </div>
                                              
                                     
                            </li>
                    </a>
                </ul>




            </div><!-- END COL MD-4 -->
            </div>
        
        
        </div>
        <div class="col-md-8">
                <div class="card">
                 <div class="card-header">

                 </div>
                <div class="card-body message-box" >
                    <div class="single-message">
                        <p class="font-weight-bolder my-0"> name </p>
                        message
                        <br><small class="text-muted w-100">Sent <em>10-1-2021 </em></small>
                    </div>

                </div>

            <div class="card-footer">
                <form wire:submit.prevent="SendMessage">
                    <div class="row">
                        <div class="col-md-8">
                            <input type="text" wire:model="message" class="form-control input shadow-none w-100 d-inline-block" placeholder="Type a message" required> 
                         </div>
                            <div class="col-md-4">    
                            
                            <button class="btn btn-primary d-inline-block w-100" type="submit" value="send" > 
                            
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
                            </svg>
                            
                            Send         
                            </button> 

                        </div>
                    </div>

                 </form>
            </div>
        </div>
</div>
</div>


