<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
 <?php
include("med.php");
error_reporting(0);
$sql = "SELECT * FROM membrespersonnel";
    $result = mysqli_query($conn, $sql);
    if($result){
        ?>
        <table class="w-[100%] flex flex-col items-center">
            <tr class="flex gap-10">
                <th class="w-[100%]">Personnel ID</th>
                <th class="w-[100%]">Personnel Nom</th>
                <th class="w-[100%]">Personnel prénom</th>
                <th class="w-[100%]">Personnel email</th>
                <th class="w-[100%]">Personnel telephone</th>
                <th class="w-[100%]">Personnel role</th>
                <th class="w-[100%]">equipe id</th>
                <th class="w-[100%]">personnel status</th>
            </tr>
            <?php
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr class="flex ml-10 w-[100%] items-center">
            <th class="w-[100%] flex flex-row ml-15"><?php echo $row['IDPersonnel'];?></th>
            <th class="w-[100%] flex flex-row ml-15 "><?php echo $row['Nom'];?></th>
            <th class="w-[100%] flex flex-row ml-15 "><?php echo $row['Prenom'];?></th>
            <th class="w-[100%] flex flex-row ml-15"><?php echo $row['Email'];?></th>
            <th class="w-[100%] flex flex-row ml-15"><?php echo $row['Telephone'];?></th>
            <th class="w-[100%] flex flex-row ml-15"><?php echo $row['Role'];?></th>
            <th class="w-[100%] flex flex-row ml-15"><?php echo $row['IDEquipe'];?></th>
            <th class="w-[100%] flex flex-row ml-15"><?php echo $row['Status'];?></th>
            </tr>
            <?php
        }
        ?>
        </table>
        <?php
    }

?>



</body>
</html>



