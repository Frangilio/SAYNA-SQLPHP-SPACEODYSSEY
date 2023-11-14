<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/sidebar.php') ?>
<?php require base_path('views/partials/nav.php') ;?>


<div class="card">
                <div class="card-header border-transparent">
                    <h3 class="card-title">Latest Missions </h3>
                <!-- /.card-body -->
                <a href="/missions/create" class="btn btn-sm btn-info float-right">New Mission</a>
                   
                
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <div class="table-responsive">
                    <table class="table m-0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Begin at</th>
                                <th>End at</th>
                                <th>Status</th>
                                <th>Level</th>
                                <th>
                                </th>
                                <th>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($missions as $mission):?>
                            <tr>
                                <td>
                                    <?= $mission["nom"] ?>
                                </td>
                                <td>  <?= $mission["debut"] ?></td>
                                <td>  <?= $mission["fin"] ?></td>
                                <td>  <?= $mission["niveau"] ?></td>

                                <td><span class="badge badge-success"><?= $mission["etat"] ?></span></td>
                                <td>
                                    <!-- <i class="fas fa-edit"></i> -->
                                    <i class="fas fa-eye"></i>
                                </td>
                                <td>
                                    <i class="fas fa-trash"></i>
                                </td>
                            </tr>

                            
                            <?php endforeach;?>
                        </tbody>
                    </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
               
                <!-- /.card-footer -->
                </div>
</div>

<?php require base_path('views/partials/footer.php')?> 