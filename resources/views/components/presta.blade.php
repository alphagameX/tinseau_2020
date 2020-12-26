<div class="presta-block">

    <i class="fas <?= $prestation['logo'] ?>"></i>
    <a href="{{route('prestation', array('slug' => $prestation['slug']))}}"><h1><?= $prestation['title'] ?></h1></a>
    <p><?= $prestation['excerpt'] ?><a href="{{route('prestation', array('slug' => $prestation['slug']))}}">...suite</a></p>
</div>
