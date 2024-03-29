<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid 19</title>

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/4a822b1d6a.js" crossorigin="anonymous"></script><link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all"><link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-font-face.min.css" media="all"><link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-shims.min.css" media="all">

    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>
<body>
    
    <!-- navbar mobile -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            CORONA VIRUS DISEASE 2019
        </a>
        <div class="btn-group ml-auto">
            <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                <h6 class="dropdown-header">
                    <i class="fas fa-map-marker-alt" aria-hidden="true"></i>&nbsp;&nbsp;Covid-19 Maps
                </h6>
                <a class="dropdown-item" href="<?= base_url('index.php/indonesia/mapping/Indonesia'); ?>">Indonesia</a>
                <a class="dropdown-item" href="<?= base_url('index.php/indonesia/mapping/hospital'); ?>">Rumah Sakit</a>
                <a class="dropdown-item" href="<?= base_url(); ?>">Back</a>
                
                <div class="dropdown-divider"></div>

                <h6 class="dropdown-header">
                    <i class="fas fa-info-circle" aria-hidden="true"></i>&nbsp;&nbsp;About
                </h6>
                <a class="dropdown-item" target="_blank" href="https://github.com/LintangWisesa/Indonesia-Covid19-Maps">Github</a>
                <a class="dropdown-item" target="_blank" href="https://lintangwisesa.github.io/me/">Me</a>
            </div>
        </div>
    </nav>

    <!-- covid-19 maps -->
    <iframe src="<?= base_url('assets/') ?><?= $map; ?>.html" frameborder="0" style="height:90%;width:100%;position:absolute;top:55px;left:0px;right:0px;bottom:0px" height="100%" width="100%"></iframe>
      

</body>
</html>

      
