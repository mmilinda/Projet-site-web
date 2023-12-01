<div class="alert">click</div>
        <div class="condition">
            <div class="text">At least you must choose a move out date and click on search</div>
        </div>
        <style>
    .text{
        display:none;
    }
    .text.activealert{
        display:block;
    } 
</style>
<script>
        const btn = document.querySelector(".alert");
        const text = document.querySelector('.text');
        btn.addEventListener('click', ()=> {
            text.classList.toggle('activealert');

        });
        // der.onclick = function(){
        // show_alertA = document.querySelector(".alert");
        // show_alertA.classList.toggle("activealert")

        // }   
        //            blog  = document.getElementById("blog");
        // blog.onclick= function(){
        // appear = document.querySelector(".ajout_article");
        // appear.classList.toggle("activeblog");
        // appear = document.querySelector(".arrow_blog");
        // appear.classList.toggle("Active_arrow_blog");
        // appear.transition ="0.10";

    // let togglers = document.querySelector(".togglers");
    //             togglers.onclick = function(){    
    //             navBar2r = document.querySelector(".ullia");
    //             navBar2r.classList.toggle("activermenu")
    //             card = document.querySelector(".card1section1");
    //             card.classList.toggle("activecard")
    //           };
</script>