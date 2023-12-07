<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">

</head>

<style>
 a {
text-decoration: none;
}
</style>



<div class="container">
    <h1 class="text-center">Users List</h1>

    <div class="row justify-content-center">
        <div class="col-md-10">
            <table class="table" id="usersTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Gender</th>
                        <th>Birthdate</th>
                        <th>Age</th>
                        <th>Strength</th>
                        <th>Year Level</th>
                        <th>Email</th>
                        <th>Section</th>
                        <th>Organization</th>
                        <th>Actions</th>
                    </tr>
                </thead>
<tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $user->id ?></td>
                <td><?= h($user->lastname) ?></td>
                <td><?= h($user->firstname) ?></td>
                <td><?= h($user->gender) ?></td>
                <td><?= h($user->birthdate->format('Y-m-d')) ?></td>
                <td><?= $user->age ?></td>
                <td><?= h($user->strength) ?></td>
                <td><?= h($user->year_level) ?></td>
                <td><?= h($user->email) ?></td>
                <td><?= h($user->section) ?></td>
                <td><?= h($user->organization) ?></td>
                <td>
                    <div class="btn-group" role="group">
                        <div class="btn-group" role="group">
                            <?= $this->Html->link('View', ['action' => 'view', $user->id], ['class' => 'btn btn-primary']) ?>
                        </div>
                        <div class="btn-group" role="group">
                            <?= $this->Html->link('Edit', ['action' => 'edit', $user->id], ['class' => 'btn btn-secondary']) ?>
                        </div>
                        <div class="btn-group" role="group">
                            <?= $this->Form->postLink('Delete', ['action' => 'delete', $user->id], ['class' => 'btn btn-danger', 'confirm' => 'Are you sure?']) ?>
                        </div>
                    </div>
                </td>

            </tr>
        <?php endforeach; ?>
        </tbody>
            </table>
        </div>
    </div>

    <div class="text-center">
        <?= $this->Html->link('Add User', ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    $(document).ready(function () {
        // Initialize DataTable
        var table = $('#usersTable').DataTable();

        // Add event listener for search input
        $('#search').on('keyup', function () {
            table.search(this.value).draw();
        });
    });
</script>
