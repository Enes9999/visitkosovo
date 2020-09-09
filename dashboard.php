<?php 
$page = 'index';

require_once "./header.php";
require_once "./lib/Auth.php";
require_once "./lib/Dashboard.php";

if(!Auth::isAdmin()) {
    header('Location: index.php');
}

$error = false;
if(isset($_REQUEST['action'])) {
	switch($_REQUEST['action']) {
		case 'contact.delete':
			require_once "./lib/Contact.php"; 
			$valid = Contact::delete($_REQUEST['id']);
			if(!$valid) {
				$error = 'Deleting Contact failed.';
			}
		break;
		case 'place.delete':
			require_once "./lib/Place.php"; 
			$valid = Place::delete($_REQUEST['id']);
			if(!$valid) {
				$error = 'Deleting Place failed.';
			}
		break;
		case 'user.delete':
			require_once "./lib/User.php"; 
			$valid = User::delete($_REQUEST['id']);
			if(!$valid) {
				$error = 'Deleting User failed.';
			}
		break;
	}		 
}

$contacts = Dashboard::getContacts();
$places = Dashboard::getPlaces();
$users = Dashboard::getUsers();

?>



<h1 id="dashboard-text">Admin Dashboard</h1>

<div class="container">

    <h1 class="dashboard-h1"> Users </h1>
    <table class="table-1">
        <tr>
            <th class="rows">Name</th>
            <th class="rows">Email</th>
            <th class="rows">Password</th>
            <th class="rows">Role</th>
            <th class="rows">Delete</th>
        </tr>
        <?php foreach($users as $users): ?>
            <tr>
                <td class="table-data"><?php echo $users['name']; ?></td>
                <td class="table-data"><?php echo $users['email']; ?></td>
                <td class="table-data"><?php echo $users['password']; ?></td>
                <td class="table-data"><?php echo $users['role']; ?></td>
                <td class="table-data"><a href="dashboard.php?action=user.delete&id=<?php echo $users['id']; ?>">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <!-- OK -->

    <h1 class="dashboard-h1"> Contacts </h1>
    <table class="table-1">
        <tr>
            <th class="rows">Name</th>
            <th class="rows">Email</th>
            <th class="rows">Phone</th>
            <th class="rows">Message</th>
            <th class="rows">Delete</th>
        </tr>

        <?php foreach($contacts as $contact): ?>
        <tr>
            <td class="table-data"><?php echo $contact['name']; ?></td>
            <td class="table-data"><?php echo $contact['email']; ?></td>
            <td class="table-data"><?php echo $contact['phone']; ?></td>
            <td class="table-data"><?php echo $contact['message']; ?></td>
            <td class="table-data"><a href="dashboard.php?action=contact.delete&id=<?php echo $contact['id']; ?>">Delete</a></td>
        </tr>
        <?php endforeach; ?>
    </table>



    <h1 class="dashboard-h1"> Places </h1>
    <table class="table-1">
        <tr>
            <th class="rows">Name</th>
            <th class="rows">Description</th>
            <th class="rows">Photo</th>
            <th class="rows">Created by</th>
            <th class="rows">Delete</th>
        </tr>
        <?php foreach($places as $place): ?>
            <tr>
                <td class="table-data"><?php echo $place['name']; ?></td>
                <td class="table-data"><?php echo $place['description']; ?></td>
                <td class="table-data">
                    <img src="<?php echo $place['photo']; ?>" style="max-width: 90%; max-height: 100px;" />
                </td>
                <td class="table-data">
                    <?php 
                        $u = Dashboard::getUserById($place['created_by']);
                        echo ($u) ? $u['name'] : '-';
                    ?>
                </td>
                <td class="table-data">
                    <a href="dashboard.php?action=place.delete&id=<?php echo $place['id']; ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>


</div>

<?php require_once "./footer.php"; ?>