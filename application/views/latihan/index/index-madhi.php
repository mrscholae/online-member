<h3 class="text-light mb-3">Latihan Fiil Madhi</h3>

<ul class="list-group">
    
    <?php
        foreach ($mufrodat as $mufrodat) :
    ?>
        <li class="list-group-item d-flex justify-content-between">
            <span><a href="<?= base_url()?>latihan/madhi/<?= $mufrodat['id']?>" class="btn btn-md btn-success">mulai</a></span>
            <span style="font-size: 25px"><b><?= $mufrodat['kata']?></b></span>
        </li>
    <?php
        endforeach;
    ?>

</ul>