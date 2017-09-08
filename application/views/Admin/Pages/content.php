<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

        <!--
                    Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
                    Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
        -->
        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="<?php echo base_url(); ?>" class="simple-text">
                    Barangdarirumah
                </a>
            </div>

            <ul class="nav">
                <?php foreach ($variables as $variable): ?>
                    <li>
                        <a href="<?php echo base_url(); ?>bdrcms/<?php echo $variable['title']; ?>">
                            <i class="<?php echo $variable['icon']; ?>"></i>
                            <p><?php echo $variable['title']; ?></p>
                        </a>
                    </li>
                <?php endforeach; ?>

                <li class="active-pro">
                    <a href="<?php echo base_url(); ?>users/logout">
                        <i class="ti-export"></i>
                        <p>Log Out</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#"><?= $title ?></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="<?php echo base_url(); ?>" class="active-pro">
                                <i class="ti-new-window"></i>
                                <p>See Front-End</p>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-bell"></i>
                                <p class="notification">5</p>
                                <p>Notifications</p>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="ti-settings"></i>
                                <p>Settings</p>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                <?php if (isset($single_var) && $single_var[0]['title'] == 'dashboard'): ?>
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <div class="icon-big icon-warning text-center">
                                                <i class="ti-server"></i>
                                            </div>
                                        </div>
                                        <div class="col-xs-7">
                                            <div class="numbers">
                                                <p>Capacity</p>
                                                105GB
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                            <i class="ti-reload"></i> Updated now
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <div class="icon-big icon-success text-center">
                                                <i class="ti-wallet"></i>
                                            </div>
                                        </div>
                                        <div class="col-xs-7">
                                            <div class="numbers">
                                                <p>Revenue</p>
                                                $1,345
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                            <i class="ti-calendar"></i> Last day
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <div class="icon-big icon-danger text-center">
                                                <i class="ti-pulse"></i>
                                            </div>
                                        </div>
                                        <div class="col-xs-7">
                                            <div class="numbers">
                                                <p>Errors</p>
                                                23
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                            <i class="ti-timer"></i> In the last hour
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <div class="icon-big icon-info text-center">
                                                <i class="ti-twitter-alt"></i>
                                            </div>
                                        </div>
                                        <div class="col-xs-7">
                                            <div class="numbers">
                                                <p>Followers</p>
                                                +45
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                            <i class="ti-reload"></i> Updated now
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if (isset($single_var) && $single_var[0]['title'] != 'user' && $title != 'Create'): ?>
                    <div class="row">

                        <!-- Only Appears if the page management is selected -->
                        <?php if ($single_var[0]['title'] == 'pages' || $single_var[0]['title'] == 'category'): ?>  
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="header">
                                        <div class="row">
                                            <div class="col-md-10"><h4 class="title"><?php echo strtoupper($single_var[0]['title']); ?> MODULE</h4></div>
                                            <div class="col-md-2"><center><a href="<?php echo $single_var[0]['title']; ?>/create" class="btn btn-danger">CREATE</a></center></div>
                                        </div>		                           
                                        <p class="category"><?php echo $single_var[0]['content']; ?></p>
                                    </div>

                                    <div class="content table-responsive table-full-width">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th><center>Category ID</center></th>
                                            <th><center>Title</center></th>
                                            <th><center>Content</center></th>
                                            <th><center>Created At</center></th>
                                            <th><center>Action</center></th>
                                            </tr>
                                            </thead>
                                            <tbody class="text-center">
                                                <?php foreach ($pagedata as $datapage): ?>
                                                    <tr>
                                                        <td><?php echo $datapage['parent_id']; ?></td>
                                                        <td><?php echo $datapage['title']; ?></td>
                                                        <td><?php echo $datapage['content']; ?></td>
                                                        <td><?php echo $datapage['created_at']; ?></td>
                                                        <td>
                                                            <a href="<?php echo base_url(); ?>bdrcms/category/edit/<?php echo $datapage['parent_id']; ?>"><i class="ti-pencil"></i></a>
                                                            &nbsp; &nbsp;
                                                            <a href="<?php echo base_url(); ?>category/delete/<?php echo $datapage['parent_id']; ?>"><i class="ti-trash"></i></a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Backend Page Management Page -->
                        <?php else: ?>
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="header"> 
                                        <div class="row">
                                            <div class="col-md-10"><h4 class="title"><?php echo strtoupper($single_var[0]['title']); ?> MODULE</h4></div>
                                            <?php if ($single_var[0]['title'] == 'category'): ?>
                                                <div class="col-md-2"><center><a href="category/create" class="btn btn-danger">CREATE</a></center></div>
                                            <?php endif; ?>
                                            <?php if ($single_var[0]['title'] == 'articles'): ?>
                                                <div class="col-md-2"><center><a href="articles/create" class="btn btn-danger">CREATE</a></center></div>
                                            <?php endif; ?>
                                            <?php if ($single_var[0]['title'] == 'goods'): ?>
                                                <div class="col-md-2"><center><a href="goods/create" class="btn btn-danger">CREATE</a></center></div>
                                            <?php endif; ?>
                                        </div>
                                        <br>
                                        <p><?php echo $single_var[0]['content']; ?></p>
                                    </div>
                                    <div class="content">
                                        <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>

                                        <div class="footer">
                                            <div class="chart-legend">
                                                <i class="fa fa-circle text-info"></i> Open
                                                <i class="fa fa-circle text-danger"></i> Bounce
                                                <i class="fa fa-circle text-warning"></i> Unsubscribe
                                            </div>
                                            <hr>
                                            <div class="stats">
                                                <i class="ti-timer"></i> Campaign sent 2 days ago
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <!-- Only Appears if only the user page is selected -->
                <?php if (isset($single_var) && $single_var[0]['title'] == 'user'): ?>    
                    <div class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-4 col-md-5">
                                    <div class="card card-user">
                                        <div class="image">
                                            <img src="<?php echo base_url(); ?>assets/img/background.jpg" alt="">
                                        </div>
                                        <div class="content">
                                            <div class="author">
                                                <img class="avatar border-white" src="<?php echo base_url(); ?>assets/img/<?php echo $userdata[0]['image']; ?>" alt="">
                                                <h4 class="title"><?php echo $userdata[0]['firstname'] . " " . $userdata[0]['lastname']; ?><br>
                                                    <a href="#"><small>@<?php echo $userdata[0]['username']; ?></small></a>
                                                </h4>
                                            </div>
                                            <p class="description text-center">"<?php echo $userdata[0]['about']; ?>"</p>
                                        </div>
                                        <hr>
                                        <div class="text-center">
                                            <div class="row">
                                                <div class="col-md-3 col-md-offset-1">
                                                    <h5>12<br><small>Files</small></h5>
                                                </div>
                                                <div class="col-md-4">
                                                    <h5>2GB<br><small>Used</small></h5>
                                                </div>
                                                <div class="col-md-3">
                                                    <h5>24,6$<br><small>Spent</small></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-7">
                                    <div class="card">
                                        <div class="header">
                                            <h4 class="title">Edit Profile</h4>
                                        </div>
                                        <div class="content">
                                            <form>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label>Company</label>
                                                            <input type="text" class="form-control border-input" disabled="" placeholder="Company" value="barangdarirumah Project Team">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Username</label>
                                                            <input type="text" class="form-control border-input" placeholder="Username" value="<?php echo $userdata[0]['username']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Email address</label>
                                                            <input type="email" class="form-control border-input" placeholder="Email" value="<?php echo $userdata[0]['email']; ?>">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>First Name</label>
                                                            <input type="text" class="form-control border-input" placeholder="Company" value="<?php echo $userdata[0]['firstname']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Last Name</label>
                                                            <input type="text" class="form-control border-input" placeholder="Last Name" value="<?php echo $userdata[0]['lastname']; ?>">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>About Me</label>
                                                            <textarea rows="5" class="form-control border-input" placeholder="Here can be your description">
                                                                <?php echo $userdata[0]['about']; ?>
                                                            </textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-info btn-fill btn-wd">Update Profile</button>
                                                </div>
                                                <div class="clearfix"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of User Special Page -->
                <?php endif; ?>

                <!-- Field Create & Update Page Details Management -->
                <?php if ($title == "Create") : ?>
                    <div class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="card">
                                        <div class="header">
                                            <h4 class="title">Create New <?php echo $detail_data_page[0]['title']; ?></h4>
                                            <small><?php echo $detail_data_page[0]['content']; ?></small>
                                        </div>
                                        <div class="content">
                                            <form action="<?php echo base_url() . $processToController ?>/create" method="post">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label><?php echo strtoupper($detail_data_page[0]['title'] . " title"); ?></label>
                                                            <input type="text" name="title" class="form-control border-input" placeholder="Enter The Title">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label><?php echo strtoupper($detail_data_page[0]['title'] . " content"); ?></label>
                                                            <textarea rows="5" name="content" class="form-control border-input" placeholder="Enter Your Content"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                    
                                                <div class="text-center">
                                                    <input type="hidden" name="slug" value="this-is-slug">
                                                    <button type="submit" class="btn btn-info btn-fill btn-wd">Create New Page</button>
                                                </div>
                                                <div class="clearfix"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                
                 <?php if ($title == "Edit") : ?>
                    <div class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="card">
                                        <div class="header">
                                            <h4 class="title">Create New <?php echo $detail_data_page[0]['title']; ?></h4>
                                            <small><?php echo $detail_data_page[0]['content']; ?></small>
                                        </div>
                                        <div class="content">
                                            <form action="<?php echo base_url() . $processToController ?>/update" method="post">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label><?php echo strtoupper($detail_data_page[0]['title'] . " title"); ?></label>
                                                            <input type="text" name="title" value="<?php echo $get_category_var['title']; ?>" class="form-control border-input" placeholder="Enter The Title">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label><?php echo strtoupper($detail_data_page[0]['title'] . " content"); ?></label>
                                                            <textarea rows="5" name="content" class="form-control border-input" placeholder="Enter Your Content"><?php echo $get_category_var['content']; ?></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                    
                                                <div class="text-center">
                                                    <input type="hidden" name="slug" value="this-is-slug">
                                                    <input type="hidden" name="parent_id" value="<?php echo $get_category_var['parent_id']; ?>">
                                                    <button type="submit" class="btn btn-info btn-fill btn-wd">EDIT <?php echo strtoupper($detail_data_page[0]['title']); ?></button>
                                                </div>
                                                <div class="clearfix"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>