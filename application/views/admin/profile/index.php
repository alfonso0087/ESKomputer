 <!-- page content -->
 <div class="right_col" role="main">
   <div class="">
     <div class="page-title">
       <div class="title_left">
         <h3>Administrator Profile</h3>
       </div>
     </div>

     <div class="clearfix"></div>

     <div class="row">
       <div class="col-md-12 col-sm-12 col-xs-12">
         <div class="x_panel">
           <div class="x_title">
             <h2>Profile</h2>

             <div class="clearfix"></div>
           </div>
           <div class="x_content">
             <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
               <div class="profile_img">
                 <div id="crop-avatar">
                   <!-- Current avatar -->
                   <img class="img-responsive avatar-view" src="<?= base_url('assets/images/') . $user['image']; ?>" alt="Avatar" title="<?= $user['image']; ?>">
                 </div>
               </div>
               <h3>
                 <center><?= $user['nama_user']; ?></center>
               </h3>

               <ul class="list-unstyled user_data">
                 <li><i class="fa fa-user fa-fw user-profile-icon"></i>
                   <?= $user['username']; ?>
                 </li>

                 <li class="m-top-xs">
                   <i class="fa fa-calendar fa-fw user-profile-icon"></i>
                   <?= date('d F Y', $user['date_created']); ?>
                 </li>
               </ul>

               <center><a href="" data-toggle="modal" data-target="#ubahProfile<?= $user['id_user']; ?>" class="btn btn-info"><i class="fa fa-edit m-right-xs"></i>Ubah Profile</a></center>
               <br />
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
 <!-- /page content -->
 </div>
 </div>