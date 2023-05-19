<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/profile.css">
    <title>terza</title>
    <style>

    </style>
</head>
<body>

    <div class="wrapper">
        <!--Top menu -->
        <div class="sidebar">
           <!--profile image & text-->
           <div class="profile">
                <img src="http://www.gravatar.com/avatar/?d=mp" alt="profile_picture">
                <h3>Anamika Roy</h3>
                <p>Designer</p>
            </div>
            <ul>
                <li>
                    <a href="#" class="active">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="item">Home</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-desktop"></i></span>
                        <span class="item">My Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-user-friends"></i></span>
                        <span class="item">People</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-tachometer-alt"></i></span>
                        <span class="item">Perfomance</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-database"></i></span>
                        <span class="item">Development</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-chart-line"></i></span>
                        <span class="item">Reports</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-user-shield"></i></span>
                        <span class="item">Admin</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-cog"></i></span>
                        <span class="item">Settings</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="section">
            <div class="top_navbar">
                <div class="hamburger">
                    <a href="#">
                        <i class="fas fa-bars"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- <center> -->
            <center><h1 style="color:#0c7db1">Blog Form</h1></center>
            <div class="container-fluid" style="float: right;">
                <div class="row">
                    <div class="col-md-12">
                      <form method="post" role="form">
                        <ul>
                            <li class="form-group">
                              <input type="text" class="form-control" name="title" placeholder="Title"/>
                            </li>

                            <li class="form-group">
                              <input type="text" class="form-control" name="short_description" placeholder="Short Description"/>
                            </li>
                            <li class="form-group">
                              <textarea class="form-control bcontent" name="description" placeholder="Description"></textarea>
                            </li>

                            <li class="form-group">
                              <label> Image </label>
                              <li class="input-group">

                                <span class="input-group-btn">
                                  <span class="btn btn-primary btn-file">
                                    Browse <input type="file" name="bimgs" multiple>
                                  </span>
                                 </span>
                                <input type="text" class="form-control" readonly >
                               </li>
                            </li>
                            <li class="form-group">
                                <label for="lang">Type</label>
                                    <select name="types">
                                      <option value="select">Select a types</option>
                                      <option value="admin">By Admin</option>
                                      <option value="user">By User</option>
                                      <option value="others">Others</option>
                                    </select>
                            </li>
                            <li class="form-group">
                               <input type="submit" name="Submit" value="Publish" class="btn btn-primary form-control" />
                            </li>
                        </ul>
                      </form>
                    </div>
                </div>
            </div>
        <!-- </center> -->
    <script src="assets/js/profile.js"></script>
</body>
</html>