<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<section class="section section_article">

</section>
<div>
<section class="section1 section-blog" >
  <div class="card1section1" id="card1section1">
    <div class="werent"><p>We rent your property</p></div>
    <div class="werentlorem"><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente, totam?</p></div>
  </div>
</section>
<section class="section5 section5_article">
        <div class="Read_our_blog">
          <p><strong>Read our blog</strong></p>
        </div>
     <div class="swiperA-wrapperA">
      <?php $__currentLoopData = $ajouter_article_tapha_a_s; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $affiche): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <a href="view_article/<?php echo e($affiche->id); ?>">
            <div class="cardA">
                <div class="cardA_image">
                    <img src="images_article/<?php echo e($affiche->photo); ?>" alt="">
                </div><br>
                <div class="cardA_content">
                  <div class="ctn_text_cardA">
                      <div class="text1_cardA">
                        <p><strong><?php echo e($affiche->titre); ?></strong></p>
                      </div>
                      <div class="text2_cardA">
                      <p><?php echo e(Illuminate\Support\Str::of($affiche->contenu)->words(5)); ?></p><br>
                      </div>
                  </div><br>
                  <div class="footercardA">
                      <div class="icon_cardA">
                        <img src="image/eva_clock-fill.png" alt="">
                      </div>
                      <div class="text_icon_cardA">
                        <p><?php echo e($affiche->created_at); ?>.</p>
                      </div>
                  </div>
              
              </div>
              <span class="footer_article">
                  <?php if(auth()->guard()->guest()): ?>
                      <?php if(Route::has('login')): ?>
                      <?php endif; ?>
                      <?php if(Route::has('register')): ?>
                        
                      <?php endif; ?>ù
                  <?php else: ?>
                      <?php if(Auth::user()->type_user == 'admin'): ?>
                      <a href="edition_article_blog/<?php echo e($affiche->id); ?>" class="btn btn-primary text-light">Editer</a>
                          <form action="article-supprimer/<?php echo e($affiche->id); ?>" method="post">
                                          <?php echo e(csrf_field()); ?>

                                          <?php echo e(method_field('DELETE')); ?>

                                <button type="submit" class="btn btn-danger">Supprimer </button>
                          </form>
                          <?php endif; ?>
                  <?php endif; ?>   
              </span>
            </div>
          </a>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div> 
    </section><br><br><br><br>
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<style>
  .section5_article{
    /* position:absolute; */
  }
     .footer_article{
        display:flex;
      justify-content:center;
      gap:10px;
    }
</style><?php /**PATH C:\xampp\htdocs\Nouveau_dossier\Projet-site-web\resources\views/blog.blade.php ENDPATH**/ ?>