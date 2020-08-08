<?php include('header.php');?>

<div class="row">

    <div class= "small-12 medium-6 large-3 columns">
        <u class="side-nav">
        <?php $username = $this->session->userdata('username');?>
        <li><h3 class="greeting">Welcome <?php echo $username; ?><h3></li>
        <hr>
        <li> <?php echo anchor("dashboard/addPost", 'ADD BLOG POST'); ?></li>
        </u> 
    </div>
    <div class= "small-12 medium-8 large-9 columns">
                <?php echo form_open('Welcome/signup'); ?>
                    <?php if($msg = $this->session->flashdata('response'));?>
                      <div class ="response">
                        <?php echo $msg; ?>
                      </div>
        <h2>READ OUR BLOGS <h2>
        <br>
        <?php if(count ($records));?>
        <div class ="row">
            <?php foreach ($records as $record):?>
            <div class= "small-12 medium-4 large-3 columns">
                <img src = <?php echo $record->post_image;?>>
            </div>
            <div class= "small-12 medium-8 large-9 columns">
                <p class="title" ><?php echo $record->post_title;?></p>
                <p class="description" ><?php echo $record->post_description;?></p>
                <div class= row>
                    <div class= "small-12 medium-12 large-12 columns">
                        <ul class ="vertical medium-horizontal menu">
                            <li><?php echo anchor("dashboard/post/{$record->post_id}", "VIEW", ['class'=>'menu-item']) ;?></li>
                            <li><?php echo anchor("dashboard/editPost/{$record->post_id}", "EDIT", ['class'=>'menu-item']) ;?></li>
                            <li><?php echo anchor("dashboard/deletePost/{$record->post_id}", "DELETE", ['class'=>'menu-item']) ;?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <?php endforeach; ?>
</div>

<?php include('footer.php');?>