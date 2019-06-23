<?php
session_start();

function getPdo()
{
    $pdo = new PDO("mysql:host=localhost:3306;dbname=projet_web", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
}

function select($sql, $args = array())
{
    $pdo = getPdo();
    $stmt = $pdo->prepare($sql);
    $stmt->execute($args);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function selectOne($sql, $args = array())
{
    $pdo = getPdo();
    $stmt = $pdo->prepare($sql);
    $stmt->execute($args);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function execute($sql, $args = array())
{
    $pdo = getPdo();
    $stmt = $pdo->prepare($sql);
    $stmt->execute($args);
    return $pdo->lastInsertId();
}

if (isset($_GET['id'])) {
    $user = selectOne("SELECT * FROM utilisateur WHERE id_uti = :id_uti", array("id_uti" => $_GET['id']));

    $schoolCareer = select("SELECT p.ID_SCOLAIRE, NOM_ECOLE, DATE_DEBUT_SCOLARITE, DATE_FIN_SCOLARITE, DIPLOME FROM utilisateur u JOIN suivre s ON s.id_uti = u.id_uti JOIN parcours_scolaire p ON s.ID_SCOLAIRE = p.ID_SCOLAIRE WHERE u.id_uti = :id_uti", array("id_uti" => $_GET['id']));

    $experiencePro = select("SELECT e.id_exp, poste_exp, nom_entreprise, date_debut_exp, date_fin_exp, fonction_exp FROM utilisateur u JOIN effectuer e ON e.id_uti = u.id_uti JOIN experience_pro expe ON e.id_exp = expe.id_exp WHERE u.id_uti = :id_uti", array("id_uti" => $_GET['id']));

    $languageSkill = select("SELECT a.id_lang , NOM_LANG, NIVEAU_LANG, CERTIFICATION_LANG FROM utilisateur u JOIN avoir a ON a.id_uti = u.id_uti JOIN competences_lang c ON a.id_lang = c.id_lang WHERE u.id_uti = :id_uti", array("id_uti" => $_GET['id']));

    $technicalSkill = select("SELECT p.id_comp_cles, NOM_CLES, NIVEAU_CLES, CERTIFICATION_CLES, image_cles FROM utilisateur u JOIN posseder p ON p.id_uti = u.id_uti JOIN competence_cles c ON p.id_comp_cles = c.id_comp_cles WHERE u.id_uti = :id_uti", array("id_uti" => $_GET['id']));

    $hobby = select("SELECT l.id_loisir, loisir FROM utilisateur u JOIN a  ON a.id_uti = u.id_uti JOIN loisirs l ON a.id_loisir = l.id_loisir WHERE u.id_uti = :id_uti", array("id_uti" => $_GET['id']));

    $allProjetUser = select("SELECT p.id_projet, nom_projet, description_projet FROM utilisateur u JOIN participe pa ON pa.id_uti = u.id_uti JOIN projet p ON pa.id_projet = p.id_projet WHERE u.id_uti = :id_uti", array("id_uti" => $_GET['id']));


    if (isset($_GET['projet'])) {
        $projetUser = selectOne("SELECT p.id_projet, nom_projet, description_projet FROM utilisateur u JOIN participe pa ON pa.id_uti = u.id_uti JOIN projet p ON pa.id_projet = p.id_projet WHERE p.id_projet = :id_projet", array("id_projet" => $_GET['projet']));
    }

    // $projetImg = select("SELECT i.id_img, nom_img FROM img i JOIN detenir d ON d.id_img = i.id_img WHERE d.id_projet = :id_projet", array("id_projet" => $_GET['projet']));

    // var_dump($projetUser);
    // var_dump($projetImg);
}


if (isset($_FILES["image"]) && isset($_GET['id'])) {

    $folder =  __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "upload" . DIRECTORY_SEPARATOR . $_GET['id'];

    uploadFile($_FILES["image"], $folder, $_GET['id']);

    execute(
        "UPDATE utilisateur SET image_uti = :image_uti WHERE id_uti = :id",
        array(
            "image_uti" => $_GET['id'] . ".png",
            "id" => $_GET['id']
        )
    );

    header("Location: about.php?id=" . $_GET['id']);
}

function uploadFile($fileInfo, $folder, $fileName)
{
    $source = $fileInfo["tmp_name"];

    $destination = $folder . DIRECTORY_SEPARATOR . $fileName . ".png";

    if (move_uploaded_file($source, $destination) == true) {
        echo "Ca a marché";
    } else {
        echo "Ca n'a pas marché";
    }
}

function uploadMultipleFile($fileInfo, $folder, $fileName)
{
    if ($fileInfo == null) {
        throw new Exception("il n'y a pas d'image");
        return 0;
    }

    $source = $fileInfo;

    $destination = $folder . DIRECTORY_SEPARATOR . $fileName . ".png";

    if (move_uploaded_file($source, $destination) == true) {
        echo "Ca a marché";
    } else {
        echo "Ca n'a pas marché";
    }
}


if (isset($_POST["firstname"]) && isset($_POST['lastname']) && isset($_POST['year'])) {

    if ($_POST["firstname"] == '') {
        $firstName = $user['NOM_UTI'];
    } else {
        $firstName = $_POST["firstname"];
    }

    if ($_POST['lastname'] == '') {
        $lastName = $user['PRENOM_UTI'];
    } else {
        $lastName = $_POST['lastname'];
    }

    if ($_POST['year'] == '') {
        $year = $user['age_uti'];
    } else {
        $year = $_POST['year'];
    }

    execute(
        "UPDATE utilisateur SET NOM_UTI = :nom_uti, PRENOM_UTI = :prenom_uti, age_uti = :age_uti WHERE id_uti = :id",
        array(
            "nom_uti" => $firstName,
            "prenom_uti" => $lastName,
            "age_uti" => $year,
            "id" => $_GET['id']
        )
    );
    header("Location: about.php?id=" . $_GET['id']);
}

if (isset($_POST["presentation"])) {

    if ($_POST["presentation"] == '') {
        $presentation = $user['description_uti'];
    } else {
        $presentation = $_POST["presentation"];
    }

    execute(
        "UPDATE utilisateur SET description_uti = :description_uti WHERE id_uti = :id",
        array(
            "description_uti" => $presentation,
            "id" => $_GET['id']
        )
    );
    header("Location: about.php?id=" . $_GET['id']);
}

if (isset($_POST['schoolName']) && isset($_POST["startDate"]) && isset($_POST["endDate"]) && isset($_POST["graduate"])) {

    if ($_POST['schoolName'] == '') {
        $schoolName = $schoolCareer[$_POST['key']]['NOM_ECOLE'];
    } else {
        $schoolName = $_POST['schoolName'];
    }

    if ($_POST["startDate"] == '') {
        $startDate = $schoolCareer[$_POST['key']]['DATE_DEBUT_SCOLARITE'];
    } else {
        $startDate = $_POST["startDate"];
    }

    if ($_POST["endDate"] == '') {
        $endDate = $schoolCareer[$_POST['key']]['DATE_FIN_SCOLARITE'];
    } else {
        $endDate = $_POST["endDate"];
    }

    if ($_POST["graduate"] == '') {
        $graduate = $schoolCareer[$_POST['key']]['DIPLOME'];
    } else {
        $graduate = $_POST["graduate"];
    }

    execute(
        "UPDATE parcours_scolaire SET NOM_ECOLE = :NOM_ECOLE, DATE_DEBUT_SCOLARITE = :DATE_DEBUT_SCOLARITE, DATE_FIN_SCOLARITE = :DATE_FIN_SCOLARITE, DIPLOME = :DIPLOME WHERE  ID_SCOLAIRE = :id",
        array(
            "NOM_ECOLE" => $schoolName,
            "DATE_DEBUT_SCOLARITE" => $startDate,
            "DATE_FIN_SCOLARITE" => $endDate,
            "DIPLOME" => $graduate,
            "id" => $_POST["idSchool"]
        )
    );
    header("Location: about.php?id=" . $_GET['id']);
}


if (isset($_POST['companyName']) && isset($_POST["startDate"]) && isset($_POST["endDate"]) && isset($_POST["post"])) {

    if ($_POST['companyName'] == '') {
        $companyName = $experiencePro[$_POST['key']]['nom_entreprise'];
    } else {
        $companyName = $_POST['companyName'];
    }

    if ($_POST["startDate"] == '') {
        $startDate = $experiencePro[$_POST['key']]['date_debut_exp'];
    } else {
        $startDate = $_POST["startDate"];
    }

    if ($_POST["endDate"] == '') {
        $endDate = $experiencePro[$_POST['key']]['date_fin_exp'];
    } else {
        $endDate = $_POST["endDate"];
    }

    if ($_POST["post"] == '') {
        $post = $experiencePro[$_POST['key']]['poste_exp'];
    } else {
        $post = $_POST["post"];
    }

    execute(
        "UPDATE experience_pro SET poste_exp = :poste_exp, nom_entreprise = :nom_entreprise, date_debut_exp = :date_debut_exp, date_fin_exp = :date_fin_exp WHERE  id_exp = :id",
        array(
            "nom_entreprise" => $companyName,
            "date_debut_exp" => $startDate,
            "date_fin_exp" => $endDate,
            "poste_exp" => $post,
            "id" => $_POST["idExperience"]
        )
    );
    header("Location: about.php?id=" . $_GET['id']);
}


if (isset($_POST['language']) && isset($_POST["levelLanguage"])) {

    if ($_POST['language'] == '') {
        $language = $languageSkill[$_POST['key']]['NOM_LANG'];
    } else {
        $language = $_POST['language'];
    }

    if ($_POST["levelLanguage"] == '') {
        $levelLanguage = $languageSkill[$_POST['key']]['NIVEAU_LANG'];
    } else {
        $levelLanguage = $_POST["levelLanguage"];
    }

    execute(
        "UPDATE competences_lang SET NOM_LANG = :NOM_LANG, NIVEAU_LANG = :NIVEAU_LANG WHERE  id_lang = :id",
        array(
            "NOM_LANG" => $language,
            "NIVEAU_LANG" => $levelLanguage,
            "id" => $_POST["idLanguageSkill"]
        )
    );
    header("Location: about.php?id=" . $_GET['id']);
}


if (isset($_POST['technicalSkill']) && isset($_POST["levelTechnicalSkill"])) {

    if ($_POST['technicalSkill'] == '') {
        $technical = $technicalSkill[$_POST['key']]['NOM_CLES'];
    } else {
        $technical = $_POST['technicalSkill'];
    }

    if ($_POST["levelTechnicalSkill"] == '') {
        $levelTechnicalSkill = $technicalSkill[$_POST['key']]['NIVEAU_CLES'];
    } else {
        $levelTechnicalSkill = $_POST["levelTechnicalSkill"];
    }

    if (!isset($_FILES["imageTechnicalSkill"])) {
        $image = $technicalSkill[$_POST['key']]['image_cles'];
    } else {
        $image = $_POST["idTechnicalSkill"] . ".png";
    }

    execute(
        "UPDATE competence_cles SET NOM_CLES = :NOM_CLES, NIVEAU_CLES = :NIVEAU_CLES, image_cles = :image_cles WHERE  id_comp_cles = :id",
        array(
            "NOM_CLES" => $technical,
            "NIVEAU_CLES" => $levelTechnicalSkill,
            "image_cles" => $image,
            "id" => $_POST["idTechnicalSkill"]
        )
    );

    $folder =  __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "upload" . DIRECTORY_SEPARATOR . $_GET['id'] . DIRECTORY_SEPARATOR . "technical_skill";

    uploadFile($_FILES["imageTechnicalSkill"], $folder, $_POST["idTechnicalSkill"]);

    header("Location: about.php?id=" . $_GET['id']);
}


if (isset($_POST['address']) && isset($_POST["city"]) && isset($_POST["postal_code"]) && isset($_POST["country"]) && isset($_POST["mail"]) && isset($_POST["phone"])) {

    if ($_POST['address'] == '') {
        $address = $user['ADRESSE_UTI'];
    } else {
        $address = $_POST['address'];
    }

    if ($_POST['city'] == '') {
        $city = $user['VILLE_UTI'];
    } else {
        $city = $_POST['city'];
    }

    if ($_POST['postal_code'] == '') {
        $postal_code = $user['CODEPOSTAL_UTI'];
    } else {
        $postal_code = $_POST['postal_code'];
    }

    if ($_POST['country'] == '') {
        $country = $user['PAYS_UTI'];
    } else {
        $country = $_POST['country'];
    }

    if ($_POST['mail'] == '') {
        $mail = $user['MAIL_UTI'];
    } else {
        $mail = $_POST['mail'];
    }

    if ($_POST["phone"] == '') {
        $phone = $user['TEL_UTI'];
    } else {
        $phone = $_POST["phone"];
    }



    execute(
        "UPDATE utilisateur SET ADRESSE_UTI = :adresse_uti, VILLE_UTI = :ville_uti, CODEPOSTAL_UTI = :codepostal_uti, PAYS_UTI = :pays_uti, MAIL_UTI = :mail_uti, TEL_UTI = :tel_uti WHERE  id_uti = :id",
        array(
            "adresse_uti" => $address,
            "ville_uti" => $city,
            "codepostal_uti" => $postal_code,
            "pays_uti" => $country,
            "mail_uti" => $mail,
            "tel_uti" => $phone,
            "id" => $_GET["id"]
        )
    );

    header("Location: about.php?id=" . $_GET['id']);
}

if (isset($_POST['leisure'])) {

    if ($_POST['leisure'] == '') {
        $leisure = $hobby[$_POST['key']]['loisir'];
    } else {
        $leisure = $_POST['leisure'];
    }


    execute(
        "UPDATE loisirs SET loisir = :loisir WHERE  id_loisir = :id",
        array(
            "loisir" => $leisure,
            "id" => $_POST["idTechnicalSkill"]
        )
    );
    header("Location: about.php?id=" . $_GET['id']);
}

//login admin
if (isset($_POST["login"]) && isset($_POST["password"])) {

    $stmUser = selectOne("SELECT pseudo, password FROM utilisateur  WHERE id_uti = :id_uti", array("id_uti" => $_GET['id']));

    if ($_POST["login"] == $stmUser['pseudo'] && $_POST["password"] == $stmUser["password"]) {

        $_SESSION["login"] = $_POST["login"];
        $_SESSION["connectedAdmin"] = true;
    }
}

if (isset($_SESSION["login"]) && isset($_GET['id'])) {

    $satementUser = selectOne("SELECT id_uti, pseudo FROM utilisateur  WHERE id_uti = :id_uti AND pseudo = :pseudo", array(
        "id_uti" => $_GET['id'],
        "pseudo" => $_SESSION["login"]
    ));

    // var_dump($satementUser);

    if ($satementUser === false) {
        header("Location: disconnection.php");
    }
}


if (isset($_FILES['technologyImg'])) {

    $folder =  __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "upload" . DIRECTORY_SEPARATOR . $_GET['id'] . DIRECTORY_SEPARATOR . "projet" . DIRECTORY_SEPARATOR . $_GET['projet'] . DIRECTORY_SEPARATOR . "technology";

    uploadMultipleFile($_FILES["technologyImg"]['tmp_name'][0], $folder, 1);
    uploadMultipleFile($_FILES["technologyImg"]['tmp_name'][1], $folder, 2);
    uploadMultipleFile($_FILES["technologyImg"]['tmp_name'][2], $folder, 3);

    header("Location: project-infos.php?id=" . $_GET['id'] . "&projet=" . $_GET['projet']);
    // var_dump($_FILES['technologyImg']);
}

if (isset($_POST['description']) && isset($_POST['nameProjet'])) {

    if ($_POST['description'] == '') {
        $description = $projetUser['description_projet'];
    } else {
        $description = $_POST['description'];
    }

    if ($_POST['nameProjet'] == '') {
        $name = $projetUser['nom_projet'];
    } else {
        $name = $_POST['nameProjet'];
    }

    execute(
        "UPDATE projet SET description_projet = :description_projet, nom_projet = :nom_projet WHERE  id_projet = :id",
        array(
            "description_projet" => $description,
            "nom_projet" => $name,
            "id" => $_GET['projet']
        )
    );

    header("Location: project-infos.php?id=" . $_GET['id'] . "&projet=" . $_GET['projet']);
}


if (isset($_FILES['screenShot'])) {

    $folder =  __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "upload" . DIRECTORY_SEPARATOR . $_GET['id'] . DIRECTORY_SEPARATOR . "projet" . DIRECTORY_SEPARATOR . $_GET['projet'];

    try {
        uploadMultipleFile($_FILES["screenShot"]['tmp_name'][0], $folder, 1);
        uploadMultipleFile($_FILES["screenShot"]['tmp_name'][1], $folder, 2);
        uploadMultipleFile($_FILES["screenShot"]['tmp_name'][2], $folder, 3);
        uploadMultipleFile($_FILES["screenShot"]['tmp_name'][3], $folder, 4);
        uploadMultipleFile($_FILES["screenShot"]['tmp_name'][4], $folder, 5);
        uploadMultipleFile($_FILES["screenShot"]['tmp_name'][5], $folder, 6);
    } catch (Exception $e) {
        echo $e->getMessage();
    }



    header("Location: project-infos.php?id=" . $_GET['id'] . "&projet=" . $_GET['projet']);
    // var_dump($_FILES['technologyImg']);
}
