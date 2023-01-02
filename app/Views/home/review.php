<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="ml-5 mt-5 mr-5">
   <h2 class="h1-responsive font-weight-bold my-5" class="w-responsive mx-auto mb-5"><span class="icon text-black">
                <i class="fa fa-address-book"></i>
            </span>Review & Critics</h2>
    <ul class="list-unstyled">
  <li class="media">
    <img class="d-flex mr-3" src="https://mdbootstrap.com/img/Photos/Others/avatar-min1.webp" alt="Generic placeholder image">
    <div class="media-body">
      <h5 class="mt-0 mb-2 font-weight-bold">Anna Smith</h5>
      <!--Review-->
      <i class="fas fa-star blue-text"> </i>
      <i class="fas fa-star blue-text"> </i>
      <i class="fas fa-star blue-text"> </i>
      <i class="fas fa-star blue-text"> </i>
      <i class="fas fa-star blue-text"> </i>
      <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
        odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
        Donec lacinia congue felis in faucibus.</p>
    </div>
  </li>
  <li class="media my-4">
    <img class="d-flex mr-3" src="https://mdbootstrap.com/img/Photos/Others/avatar-min2.webp" alt="Generic placeholder image">
    <div class="media-body">
      <h5 class="mt-0 mb-2 font-weight-bold">Tom Brown</h5>
      <!--Review-->
      <i class="fas fa-star blue-text"> </i>
      <i class="fas fa-star blue-text"> </i>
      <i class="fas fa-star blue-text"> </i>
      <i class="fas fa-star blue-text"> </i>
      <i class="fas fa-star grey-text"> </i>
      <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
        odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
        Donec lacinia congue felis in faucibus.</p>
    </div>
  </li>
  <li class="media">
    <img class="d-flex mr-3" src="https://mdbootstrap.com/img/Photos/Others/avatar-min3.webp" alt="Generic placeholder image">
    <div class="media-body">
      <h5 class="mt-0 mb-2 font-weight-bold">Natalie Doe</h5>
      <!--Review-->
      <i class="fas fa-star blue-text"> </i>
      <i class="fas fa-star blue-text"> </i>
      <i class="fas fa-star blue-text"> </i>
      <i class="fas fa-star grey-text"> </i>
      <i class="fas fa-star grey-text"> </i>
      <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
        odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
        Donec lacinia congue felis in faucibus.</p>
    </div>
  </li>
</ul>
</div>

<?= $this->endSection(); ?>