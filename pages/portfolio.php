<div id="portfolioWrapper">
    <h1>Portfolio</h1>
    <div class="projects">
        <?php
        $json = file_get_contents("db/data.json");
        $data = json_decode($json, true);

        foreach ($data as $dataItem) {
            ?>
            <div class="project">
                <div class="heading">
                    <img src="../assets/img/<?= $dataItem["img"]; ?>" alt="">
                    <h1><?= $dataItem["project_name"]; ?></h1>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>