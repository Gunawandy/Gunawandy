<nav class="navbar navbar-inverse">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    @if (Auth::guest())
      <a class="navbar-brand" href="/pfandy">
        <span class="glyphicon glyphicon-th" aria-hidden="true"></span>  
        <font color="blue">Home</font></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="/contact">Contact Seller<span class="sr-only">(current)</span></a></li>
      </ul>
      <ul class="nav navbar-nav">
        <li><a href="/listisp">Daftar Isp<span class="sr-only">(current)</span></a></li>
      </ul>


    @elseif(Auth::user()->level=="seller")
      <a class="navbar-brand" href="/pfandy">
        <span class="glyphicon glyphicon-th" aria-hidden="true"></span>  
        <font color="blue">Retailer</font></a>
         </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="/users">Account<span class="sr-only">(current)</span></a></li>
      </ul>
      <ul class="nav navbar-nav">
        <li><a href="/seller">Seller Profile<span class="sr-only"></span></a></li>
      </ul>
        <ul class="nav navbar-nav">
      <li><a href="/penjualan">Penjualan<span class="sr-only"></span></a></li>
      </ul>
      <ul class="nav navbar-nav">
        <li><a href="/members">Members<span class="sr-only"></span></a></li>
      </ul>
      <ul class="nav navbar-nav">
        <li><a href="/isp">ISP<span class="sr-only"></span></a></li>
      </ul>
   
    
   @elseif(Auth::user()->level=="admin")
   <a class="navbar-brand" href="/pfandy">
        <span class="glyphicon glyphicon-th" aria-hidden="true"></span>  
        <font color="blue">Admin</font></a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="/users">Users<span class="sr-only">(current)</span></a></li>
      </ul>
      <ul class="nav navbar-nav">
        <li><a href="/seller">Retailer<span class="sr-only"></span></a></li>
      </ul>
      <ul class="nav navbar-nav">
        <li><a href="/members">Members<span class="sr-only"></span></a></li>
      </ul>
        <ul class="nav navbar-nav">
        <li><a href="/penjualan">Penjualan<span class="sr-only"></span></a></li>
      </ul>
      <ul class="nav navbar-nav">
        <li><a href="/isp">Isp<span class="sr-only"></span></a></li>
      </ul>

      @else
       <a class="navbar-brand" href="/pfandy">
        <span class="glyphicon glyphicon-th" aria-hidden="true"></span>  
        <font color="blue">User</font></a>
    </div>
    <!-- Colect the nav links, forms, and other content for toggling -->
      <ul class="nav navbar-nav">
        <li><a href="/mbr">Members<span class="sr-only"></span></a></li>
      </ul>
      <ul class="nav navbar-nav">
        <li><a href="/listisp">Isp<span class="sr-only"></span></a></li>
      </ul>

    @endif

      <ul class="nav navbar-nav navbar-right">
          @if (Auth::guest())
            <li><a href="/auth/login">
            <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>  Login</a></li>
            <li><a href="/ksm/register">
            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>   Register Member</a></li>

          @else
            <li><a>
            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
            Hello <font color ="blue">{{ Auth::user()->username }}</font></a></li>
            
            <li><a href="/auth/logout">
            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>  Logout</a></li>
          @endif
        </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>