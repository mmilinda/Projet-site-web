
@include('header')
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> 
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
<section  class="main">
        <div class="container">
            <div class="row col-sm-12 justify-content-end">
                <div class="col-lg-8 col-md-10 col-sm-12">
                   
                        <div class="row">
                        @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@if (session('fail'))
    <div class="alert alert-danger">
        {{ session('fail') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
                        </div>
                        <table class="table">
        <thead>
            <tr>
                <th>Nom City</th>
                
                
                
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($cities as $citi)
                <tr>
                    <td>{{ $citi->nomcity }}</td>
                    
                
                    <td>

                   
                    <form method="POST" action="{{ route('citi.supprimer', $citi->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                        
                   
                    
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
                    
                </div>
            </div>
         </div>   
    </section><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br>
    <br><br><br><br><br>
    @include('footer')
  
<style>
  .main{
    display:flex;
    justify-content:center;
    background-repeat: no-repeat;
    background-size: cover;
    position: absolute; 
   }

.form-box{
    background-color:rgba(255,255,255, 0.8);
    width:556px;
    height:540px;
    margin-top:101px;
    margin-bottom:81px;
    border-radius: 20px;
    border:1px solid white;
   }

.form-box input{
        border-radius:10px;
   }

.form-box input:focus{
    box-shadow:0 0 0;
    border:1px solid #f6288c;
}

.form-box select{
    border-radius:10px;
}


.div{
    display:flex;
    justify-content:center;
    align-items:center;
}


.button{
    display:flex;
    justify-content:center;
    border-radius:10px;
}
.form-box{
   background-color:#F2F0F2;
}
</style>
