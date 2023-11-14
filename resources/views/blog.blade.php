@include('header')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>blog</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <Style>
    .card{
      border-radius: 51px;
    }
    .flesh i{
      font-size: 29px;
      Background:#ffffff;
      color:#000000;
    }
    h2{
      text-align: center;
    }
  </Style>
</head>
<body>
 
<!--Background image -->
<div class="card1 text-bg-dark">
  <img src="assets\img\bus.png" class="card-img" alt="...">
  <!--
  <div class="card-img-overlay">
    <h5 class="card-title"></h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text"><small>Last updated 3 mins ago</small></p>
  </div> -->
  <div class="card mt-4" style="width: 18rem; ">
  <div class="card1section1" id="card1section1">
    <div class="werent"><p>We rent your property</p></div>
    <div class="werentlorem"><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente, totam?</p></div>
  </div>

  </div>
  <div class="flesh">
        <i class="bi bi-caret-left"></i> 
        <i class="bi bi-caret-right" style="position: right;"></i>
  </div>

</div>
<br><br><br>

<!-- Card -->
<div class="container">
    <!-- Première ligne -->
    <div class="row  ">
        <div class="col-md-4">
        <div class="card">
          <img src="assets\img\1.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Turpis elit in dictum eget eget</h5>
            <p class="card-text">Neque faucibus pharetra condimentum tincidunt commodo velit</p>
            <h6><i class="bi bi-clock-fill">1 min read</i></h6>    
          </div>
        </div>
        </div>
        <div class="col-md-4">
        <div class="card">
          <img src="assets\img\2.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Feugiat gravida set sit lacus sagittis</h5>
            <p class="card-text">Neque ipsum mi nisl, id ultricies. Sollicitudin et id consequat tellus commodo magnis.</p>
            <h6><i class="bi bi-clock-fill">3 min read</i></h6>    
          </div>
        </div>
        </div>
        <div class="col-md-4">
        <div class="card">
          <img src="assets\img\3.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Aliquam id ullamcorper eu</h5>
            <p class="card-text">Id imperdiet sem nec id nulla purus leo risus. Risus tincidunt ultrices id ultricies vitae.</p>
            <h6><i class="bi bi-clock-fill">2 min read</i></h6>    
          </div>
        </div>
        </div>
    </div>

    <!-- Deuxième ligne -->
    <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="assets\img\4.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Placerat purus habitasse malesuada</h5>
              <p class="card-text">Egestas varius urna vestibulum et, phasellus varius ornare.</p>
              <h6><i class="bi bi-clock-fill">3 min read</i></h6>    
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="assets\img\5.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Proin tristique ipsum velit cursus</h5>
              <p class="card-text">Ultrices lacus, purus praesent scelerisque vitae et ultrices.</p>
              <h6><i class="bi bi-clock-fill">2 min read</i></h6>    
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="assets\img\6.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Vulputate id sem felis, at at eget nulla</h5>
              <p class="card-text">Vitae enim morbi varius neque pellentesque faucibus.</p>
              <h6><i class="bi bi-clock-fill">5 min read</i></h6>    
            </div>
          </div>
        </div>
    </div>

    <!-- Troisième ligne -->
    <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="assets\img\7.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Ultrices sodales a sit pretium ut amet</h5>
              <p class="card-text">Sagittis purus aenean magna eget arcu egestas nisi, id</p>
              <h6><i class="bi bi-clock-fill">5 min read</i></h6>    
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="assets\img\8.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Turpis pellentesque mauris quis risus</h5>
              <p class="card-text">Volutpat scelerisque sed lectus eu donec neque in aliquam.</p>
              <h6><i class="bi bi-clock-fill">1 min read</i></h6>    
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="assets\img\9.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">In pellentesque eget natoque vestibulum</h5>
              <p class="card-text">In amet vehicula porttitor viverra maecenas metus dictum arcu lorem.</p>
              <h6><i class="bi bi-clock-fill">2 min read</i></h6>    
            </div>
          </div>
        </div>
    </div>
</div><br>

<!--  bouton de validation -->
<div class="container mt-5 d-flex justify-content-center">
    <button class="btn btn-success"
    style="--bs-btn-padding-y: .45rem; --bs-btn-padding-x: .25rem; --bs-btn-font-size: .75rem;">
    Load more</button>
</div><br><br><br>

<h2>Featured posts

</h2> <br>

  <!-- 2ème blog -->

  <div class="row card2_blog">
    <div class="col-md-4">
      <div class="card">
        <img src="assets\img\r1.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Turpis elit in dictum eget eget</h5>
          <p class="card-text">Convallis eu vel fames feugiat et venenatis nulla ipsum.</p>
          <h6><i class="bi bi-clock-fill">1 min read</i></h6>    
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <img src="assets\img\r2.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Faucibus egestas ut sit purus ultricies at eu</h5>
          <p class="card-text">Viverra tellus risus lacus commodo urna fringilla cursus nulla amet.</p>
          <h6><i class="bi bi-clock-fill">3 min read</i></h6>    
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <img src="assets\img\r3.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Feugiat gravida sed sit lacus sagittis</h5>
          <p class="card-text">Pellentesque ultrices hendrerit lacus lectus.</p>
          <h6><i class="bi bi-clock-fill">3 min read</i></h6>    
        </div>
      </div>
    </div>
  </div>
<style>
  .container{
    display:flex;
    flex-direction:column;
    margin-top:40%;
    gap:100px;

  }

  .card1section1{
  position:absolute;
  display:flex;
  justify-content:left;
  align-items:left;
  flex-direction:column;
   width: 293px;
  height:236px; 
  margin-top:-400px;
  background-color:#ffff;
  border-radius:10px;
  padding:20px;
 
   }
 
  @media screen and (max-width:965px){
        .container{
        display:flex;
        flex-direction:column;
        margin-top:50%;
        gap:100px;

      }
      .card1section1{
  position:absolute;
  display:flex;
  justify-content:left;
  align-items:left;
  flex-direction:column;
   width: 293px;
  height:236px; 
  margin-top:-300px;
  background-color:#ffff;
  border-radius:10px;
  padding:20px;
 
   }
      
  }

  
  @media screen and (max-width:773px){
  .container{
      display:flex;
      flex-direction:column;
      margin-top:350%;
      gap:100px;
      width:300px;
      gap:100px;

    }

    .card2_blog{
    width:300px;
    margin-top:210%;
    gap:100px;
    display:flex;
    justify-content:center;
    align-items:center;
    margin-left:100px;

  }
  }
  @media screen and (max-width:762px){
        .container{
        display:flex;
        flex-direction:column;
        margin-top:230%;
        gap:100px;
        width:300px;

      }
      
  }
  @media screen and (max-width:700px){
        .container{
        display:flex;
        flex-direction:column;
        margin-top:250%;
        gap:100px;
        width:300px;

      }

      .card1section1{
      position:absolute;
      display:flex;
      justify-content:left;
      align-items:left;
      flex-direction:column;
      width: 293px;
      height:236px; 
      margin-top:-200px;
      background-color:#ffff;
      border-radius:10px;
      padding:20px;
    
   }
      
  }
  @media screen and (max-width:684px){
    .container{
        display:flex;
        flex-direction:column;
        margin-top:250%;
        gap:100px;
        width:300px;
      }
            }
  @media screen and (max-width:641px){
  .container{
      display:flex;
      flex-direction:column;
      margin-top:300%;
      gap:100px;
      width:300px;

    }
  }
  @media screen and (max-width:551px){
  .container{
      display:flex;
      flex-direction:column;
      margin-top:320%;
      gap:100px;
      width:300px;

    }
  }
  @media screen and (max-width:512px){
  .container{
      display:flex;
      flex-direction:column;
      margin-top:350%;
      gap:100px;
      width:300px;

    }
  }

 
            
  .container button{
    margin-top:30%;
  }
  .container 
</style>
<br><br><br>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
@include('footer')
