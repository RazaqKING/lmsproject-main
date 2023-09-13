<?php include("includes/header.php"); ?>
<?php 
      if(isset($_GET['id'])){
            $the_id = $_GET['id'];
      }
         $query = "SELECT * FROM `youtube` WHERE `id` = '{$the_id}'";
            $select_id = mysqli_query($conn, $query);
            while($row = mysqli_fetch_assoc($select_id)){
               $id = $row['id'];
               $courselink = $row['course_link'];
            }
?>
   <body class="inner_page map">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <?php include("includes/sidebar.php"); ?>
               <!-- end topbar -->
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Youtube Course</h2>
                           </div>
                        </div>
                     </div>
                     <!-- row -->
                     <div class="row column1">
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Watch <small>Video</small></h2>
                                 </div>
                              </div>
                              <div class="map_section padding_infor_info">
                              <iframe width="100%" height="500" src="http://www.youtube.com/embed/<?php echo $courselink; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- end row -->
                  </div>
                  <!-- footer -->
                  <?php include("includes/footer.php"); ?>