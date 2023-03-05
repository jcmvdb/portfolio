<div id="portfolioWrapper">
    <h1 class="title">Portfolio</h1>
    <div class="projects">
        <?php
        $json = file_get_contents("db/data.json");
        $data = json_decode($json, true);

        foreach ($data as $dataItem) {
            ?>
            <div class="project" onclick="projectDescription('<?= $dataItem['project_name'] ?>')">
                <div class="heading">
                    <img src="../assets/img/<?= $dataItem["img"]; ?>" alt="">
                    <h1><?= $dataItem["project_name"]; ?></h1>
                </div>
                <div class="content">
                    <p class="limited-text"><?= $dataItem["description"]; ?></p>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>