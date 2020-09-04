<?php 
$page = 'index';

require_once "./header.php";
require_once "./lib/Auth.php";
require_once "./lib/Dashboard.php";

if(!Auth::isAdmin()) {
    header('Location: index.php');
}

$contacts = Dashboard::getContacts();
$places = Dashboard::getPlaces();
?>



<h1 id="dashboard-text">Admin Dashboard</h1>

<div class="container">
  <h1 class="dashboard-h1"> Contact details </h1>
    <table class="table-1">
        <tr>

            <th class="rows">Name</th>
            <th class="rows">Email</th>
            <th class="rows">Phone</th>
            <th class="rows">Message</th>

        <tr>

            <?php foreach($contacts as $contact): ?>
        <tr>
            <td class="table-data"><?php echo $contact['name']; ?></td>
            <td class="table-data"><?php echo $contact['email']; ?></td>
            <td class="table-data"><?php echo $contact['phone']; ?></td>
            <td class="table-data"><?php echo $contact['message']; ?></td>
        <tr>
            <?php endforeach; ?>
    </table>



<h1 class="dashboard-h1"> Places added </h1>
    <table class="table-1">
        <tr>

            <th class="rows">Name</th>
            <th class="rows">Description</th>
            <th class="rows">Photo</th>
            <th class="rows">Created by</th>

        <tr>

            <?php foreach($places as $place): ?>
        <tr>
            <td class="table-data"><?php echo $place['name']; ?></td>
            <td class="table-data"><?php echo $place['description']; ?></td>
            <td class="table-data"><?php echo $place['photo']; ?></td>
            <td class="table-data"><?php echo $place['created_by']; ?></td>
        <tr>
            <?php endforeach; ?>
    </table>


</div>

<?php require_once "./footer.php"; ?>