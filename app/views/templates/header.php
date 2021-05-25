<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->judul; ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand font-weight-bold" href="<?= BASEURL; ?>">MvC</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link <?= $this->judul == 'Home' ? 'active font-weight-bold' : ''; ?>" href="<?= BASEURL; ?>">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-link  <?= $this->judul == 'About' ? 'active font-weight-bold' : ''; ?>" href="<?= BASEURL . '/about'; ?>">About</a>
                </div>
            </div>
    </div>
    </nav>