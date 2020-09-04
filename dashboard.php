<?php 
$page = 'index';

require_once "./header.php";
require_once "./lib/Auth.php";
require_once "./lib/Dashboard.php";

if(!Auth::isAdmin()) {
    header('Location: index.php');
}

$contacts = Dashboard::getContacts();

?>

<h1>Admin Dashboard</h1>

<div class="container">

    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Message</th>
        <tr>

            <?php foreach($contacts as $contact): ?>
        <tr>
            <td><?php echo $contact['name']; ?></td>
            <td><?php echo $contact['email']; ?></td>
            <td><?php echo $contact['phone']; ?></td>
            <td><?php echo $contact['message']; ?></td>
        <tr>
            <?php endforeach; ?>
    </table>

</div>

<?php require_once "./footer.php"; ?>