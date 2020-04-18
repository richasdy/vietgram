<?php
$check = $this->session->has_userdata('username');
if ($check != true) {
    redirect('LoginRegister_controller/index');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/styles.css' ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
    <script type="text/javascript" src="<?php base_url().'assets/upload.js'?>"></script>
</head>

<body>
    <nav class="navigation">
        <div class="navigation__column">
            <a href="<?php echo base_url() . 'index.php/Feed_controller/index' ?>">
                <img src="<?php echo base_url() . 'assets/images/logo.png' ?>" />
            </a>
        </div>
        <div class="navigation__column">
            <i class="fa fa-search"></i>
            <input type="text" placeholder="Search">
        </div>
        <div class="navigation__column">
            <ul class="navigations__links">
                <li class="navigation__list-item">
                    <a href="" class="navigation__link" data-target="#upload-modal-1" data-toggle="modal">
                        <ion-icon name="cloud-upload-outline"></ion-icon>
                    </a>
                </li>
                <li class="navigation__list-item">
                    <a href="<?php echo base_url() . 'index.php/Explore_controller/index' ?>" class="navigation__link">
                        <i class="fa fa-compass fa-lg"></i>
                    </a>
                </li>
                <li class="navigation__list-item">
                    <a href="#" class="navigation__link">
                        <i class="fa fa-heart-o fa-lg"></i>
                    </a>
                </li>
                <li class="navigation__list-item">
                    <a href="<?php echo base_url() . 'index.php/Profile_controller/index' ?>" class="navigation__link">
                        <i class="fa fa-user-o fa-lg"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- MODAL 1-->
    <div class="modal fade" id="upload-modal-1" tabindex="-1" role="dialog" aria-labelledby="upload-modal-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Upload Photo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="container-upload">
                                <input type="file" name="file-upload" id="file-upload" class="btn-style" required>
                            </div>
                            <br>
                            <br>
                            <label for="#caption">Caption:</label>
                            <div>
                                <TextArea name="caption" id="caption" class="md-textarea form-control"></TextArea>
                            </div>
                            <br><br>
                            <div class="text-right">
                                <input class="btn btn-primary" type="submit" onclick="" name="upload" value="Post" data-target="#upload-modal-2" data-toggle="modal" data-dismiss="modal">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL 2-->
    <div class="modal fade" id="upload-modal-2" tabindex="-1" role="dialog" aria-labelledby="upload-modal-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Upload Photo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="p-3 text-center">
                            <h5 id="textLoading">Uploading your post...</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>