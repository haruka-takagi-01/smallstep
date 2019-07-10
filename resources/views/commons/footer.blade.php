@section('footer')

<footer class="mt-5">
    <style type="text/css">
        footer{
             background-color: #33383c;
             padding:30px 0px;
        }	       
        
        .logo{
            color:#FFF;
            font-weight:700;
            font-size:30px;
        }
        
        .address span , .menu span{
           color: #FFF; 
           font-weight: bold; 
           border-bottom: 1px solid #c7c7c7; 
           padding:10px 0px;
           display: block;
           text-transform: uppercase;
           font-size: 16px;
           letter-spacing: 3px;
        }
         
        .address li a , .menu li a{
            color:#FFF;
            letter-spacing: 3px;
            text-decoration:none;
            font-size:14px;
        }
        
        .address li, .menu li{
            margin:20px 0px;
            list-style: none;
        }
        
        .address li a:hover , .menu li a:hover{
            color: #da3e44;
            -webkit-transition: all 1s ease-in-out;
            -moz-transition: all 1s ease-in-out;
            -o-transition: all 1s ease-in-out;
            transition: all 1s ease-in-out;
        }
        
        .address .fa{
            color: #da3e44;
            margin-right: 10px;
            font-size:18px;
        }

        .copyright{
            background-color: #F0F0F0;
        }
    </style>




 <div class="container">
   <div class="row">
   
            <div class="col-md-4 col-sm-6 col-xs-12">
              <span class="logo">LOGO</span>
            </div>
            
            <div class="col-md-4 col-sm-6 col-xs-12">
                <ul class="menu">
                    <span>Menu</span>    
                    <li><a href="#">運営</a></li>
                    <li><a href="/privacy/">個人情報保護方針</a></li>   
                 </ul>
            </div>
       
            <div class="col-md-4 col-sm-6 col-xs-12">
              <ul class="address">
                    <span>Contact</span>       
                    <li><i class="fa fa-phone" aria-hidden="true"></i> <a href="#">Phone</a></li>
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i> <a href="#">Adress</a></li> 
                    <li><i class="fa fa-envelope" aria-hidden="true"></i> <a href="#">Email</a></li> 
               </ul>
           </div>
       
       
       </div> 
    </div>

</footer>
<div class="copyright">
    <p class="text-center"><small>copyright&copy; 2019 kakugen</small></p>
</div>


    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
    <script src="js/app.js"></script>
    <script src="js/myscript.js"></script>
@endsection