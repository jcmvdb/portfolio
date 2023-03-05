<?php
//if (!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] != true) {
//    header("location: /login");
//    exit;
//}

require_once "loggincheck.php";

$db = new DB();
?>

<div id="accountWrapper">
    <h1 class="title">Account Pagina</h1>
    <p>Hallo, <?= $_SESSION["username"] ?></p>

    <div class="content">
        <div class="left">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus architecto atque commodi dicta eos,
            eveniet
            exercitationem laudantium, minus natus neque odio placeat quae quibusdam, repellendus sapiente! Fugiat ipsa
            saepe
            sed?
        </div>
        <div class="right">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda consequuntur corporis culpa
            cupiditate
            dolorum eum excepturi expedita facere facilis fugit in incidunt inventore ipsam iste iure iusto labore minus
            non,
            numquam placeat quam quas quo rerum vel veniam voluptates voluptatibus! A ad amet architecto aspernatur
            assumenda at
            atque autem beatae consequatur cumque delectus dicta ea eos explicabo hic itaque, iusto labore laborum,
            laudantium
            maiores necessitatibus non perferendis possimus praesentium provident quas qui quod sequi sunt unde. Aperiam
            aspernatur consequuntur cum delectus deleniti ea eum ex expedita iste itaque maxime, neque pariatur
            perferendis
            quidem quo repellendus similique, suscipit ut voluptatem voluptatibus? Adipisci animi, eligendi expedita
            illum,
            in
            itaque iusto nam quasi qui quisquam ratione reiciendis repellendus velit. Cumque, deserunt dolor eaque est
            et
            eum
            hic libero provident voluptate voluptatem. Accusantium adipisci aliquam aliquid assumenda autem commodi
            consectetur,
            cupiditate eaque eius esse excepturi facere harum id in laborum natus nemo nulla optio porro praesentium
            provident
            quaerat quidem quis ratione repellendus repudiandae saepe similique suscipit totam, unde ut velit, vitae
            voluptate!
            Debitis ea ipsum laboriosam mollitia nemo tenetur vero? A accusantium, alias aliquid aspernatur commodi
            consectetur
            error eum fuga illo inventore, laudantium non obcaecati quaerat quasi quod, ratione repellat sapiente
            similique
            sunt
            temporibus? A autem, blanditiis consequatur culpa cupiditate dolor dolores, et facilis maiores nemo nisi,
            reiciendis
            suscipit tempore. Dignissimos exercitationem neque obcaecati perferendis possimus qui sint ullam. Amet dicta
            exercitationem inventore similique vero! Aliquid deleniti dicta, dignissimos doloremque esse fugiat fugit
            iure
            magni
            nihil, nostrum provident sed suscipit vero voluptatibus voluptatum. Aspernatur dolore eveniet, molestias
            officiis
            totam ut. Ab accusamus adipisci amet, consectetur cum doloremque eligendi expedita explicabo iste molestias
            non
            omnis pariatur perferendis sequi totam velit voluptas. A ab accusamus assumenda commodi corporis culpa dicta
            error
            eveniet expedita impedit iste labore minus modi possimus quis, recusandae reprehenderit veniam vitae?
            Aspernatur
            esse inventore ipsum nihil saepe sint tempore ut. Aliquid culpa deleniti iure magnam maxime nam nisi quis
            quod
            sequi, soluta ut vel voluptates. A ab accusantium ad aliquid animi assumenda atque corporis cumque eaque eos
            error,
            et harum in ipsam ipsum iste maiores modi molestiae neque nesciunt officia perspiciatis porro quasi quidem
            tempora?
            A ab adipisci aspernatur assumenda beatae consectetur culpa, delectus dolores dolorum ea eaque ex fuga hic
            illo
            impedit incidunt ipsam iste laudantium libero magnam nesciunt nihil nulla odio odit, omnis pariatur possimus
            quam
            qui ratione repudiandae rerum sed sequi sint suscipit vitae, voluptatem voluptatum. Error, et, repellendus.
        </div>
    </div>
</div>