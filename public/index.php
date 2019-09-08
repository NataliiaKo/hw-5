<!DOCTYPE html>
<html lang="en">
<?php @include_once ('structure.php');?>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CV <?php echo " ".$resume['first_name']." ".$resume['last_name']?></title>

</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-sm">
            <img src="https://completeconcussions.com/drive/uploads/2017/10/detail-john-doe.jpg" alt="My John's picture" class="rounded-circle" width="180px" height="180px">
        </div>
        <div class="col-sm">
            <h1><?php echo $resume['first_name']." ".$resume['last_name']?></h1>
            <h2><?= $resume['position']?></h2>
        </div>
        <div class="col-sm" class="border-right" >
                <a class="list-group-item list-group-item-action" href="mailto:<?= $resume['contacts']['email'] ?>"><img src="http://s1.iconbird.com/ico/2013/11/504/w128h1281385326545email.png" alt="<?php echo $resume['contacts']['email']?>" class="rounded-circle" width="18px" height="18px"><?php echo $resume['contacts']['email']?></a>
                <a href="tel:<?= $resume['contacts']['phone']?>" class="list-group-item list-group-item-action"><img src="http://s1.iconbird.com/ico/2013/11/504/w128h1281385326570phone.png" alt="<?php echo $resume['contacts']['phone']?>"  width="18px" height="18px"><?php echo $resume['contacts']['phone']?></a>
                <a href="#" class="list-group-item list-group-item-action"><img src="http://s1.iconbird.com/ico/0612/GooglePlusInterfaceIcons/w128h1281338911601location.png" alt="<?php echo $resume['first_name']?>" class="rounded-circle" width="18px" height="18px"><?php echo $resume['address']['city'].', '.$resume['address']['country']?></a>
            <a href="skype:<?= $resume['contacts']['skype']?>" class="list-group-item list-group-item-action"><img src="http://s1.iconbird.com/ico/2013/6/363/w128h1281372346431Skype128.png" alt="<?= $resume['contacts']['skype']?>" class="rounded-circle" width="18px" height="18px"><?= $resume['contacts']['skype']?></a>
        </div>
        <div class="container">
            <p><?= $resume['description']?></p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm">
            <h2>WORK EXPERIENCE</h2>
            <hr>

            <?php foreach($resume['experiences'] as $experience) {?>
            <h3><?= $experience['position'] ?></h3>
            <h4><?= $experience['place'] ?></h4>
             <button type="button" class="btn btn-light" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="<?php $diff=(strtotime($experience['endwork'])-strtotime($experience['startwork'])); $years = floor($diff / (365*60*60*24));
                $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
                echo $years." year and ".$months. " months"?>"><p><?php echo date_create($experience['startwork'])->Format('m/Y')." - ".date_create($experience['endwork'])->Format('m/Y');?></p></button>
            <h6><?= $experience['address']['city'].", ".$experience['address']['country']?></h6>
            <h6>Tasks</h6>
            <ul>
            <?php foreach($experience['tasks'] as $task){?> <li> <?= $task;} ?> </li>
            </ul>
            <h6>Contact:</h6> <?php echo $experience['contact']['firstname']." ".$experience['contact']['middlename']." ".$experience['contact']['lastname'];
            if(isset($experience['contact']['email']) )?><a href="mailto:<?=$experience['contact']['email'];?>"><?php {echo " - ".$experience['contact']['email'];}?></a>
            <?php if(isset($experience['contact']['phone']) ){echo " - ".$experience['contact']['phone'];}?>
            <?php }?>

        </div>
        <div class="col-sm">
            <h2>SKILLS&COMPETENCES</h2>
            <hr>
            <?php foreach($resume['skills'] as $skill) {?>
            <h5>  <?= $skill['name']?></h5>
            <div class="progress" style="height: 25px;">
                <div class="progress-bar" role="progressbar" style="width: <?= $skill['efficiency']?>%;" aria-valuenow="<?= $skill['efficiency'] ?>" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
                <br>
            <?php };?>
            <h2>CERTIFICATES</h2>
            <hr>
             <?php foreach($resume['certificates'] as $certificate){?>
                 <h5>  <?= $certificate['name']?>
                 <?php if(isset($certificate['datastart'])& isset($certificate['dataend']) ) {echo " (".date_create($certificate['datastart'])->Format('m/Y')." - ".date_create($certificate['dataend'])->Format('m/Y').")";}
                 elseif (is_null($certificate['datastart'])) {echo " (".date_create($certificate['dataend'])->Format('m/Y').")";}
                 elseif (is_null($certificate['dataend'])) {echo " (".date_create($certificate['datastart'])->Format('Y').")";}
                 ?></h5>
                 <h6> <?php if (isset($certificate['trainingcentre'])& isset($certificate['country'])) {echo $certificate['trainingcentre'].", ".$certificate['country'];}
                 elseif (isset($certificate['trainingcentre'])) {echo $certificate['trainingcentre'];}
                 elseif (isset($certificate['country'])) {echo "Completed in ".$certificate['country'];}
                 ?> </h6>
                 <br>
<?php }?>
            <h2>EDUCATION</h2>
            <hr>
            <h5> <?= $resume['education']['speciality'];?></h5>
            <h6> <?= $resume['education']['nameuniver'];?></h6>
            <p> <?php echo date_create($resume['education']['datastart'])->Format('m/Y')." - ".date_create($resume['education']['dataend'])->Format('m/Y');?></p>
            <h2>LANGUAGES</h2>
            <hr>
            <?php foreach ($resume['languages']as $language) {?>
            <h6> <?= $language['name'];?></h6>
            <p><i><?= $language['level'];}?></i></p>
            <h2>INTERESTS</h2>
            <hr>
            <?php foreach ($resume['interests']as $interest) {?>
            <button type="button" class="btn btn-outline-secondary" style="margin-right: 15px"><?= $interest;}?></button>

        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
