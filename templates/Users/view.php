<!-- C:\xampp\htdocs\CakePHP\newCrud\crud\templates\Users\view.ctp -->

<h1>User Details</h1>
<table>
    <tr>
        <th>ID</th>
        <td><?= $user->id ?></td>
    </tr>
    <tr>
        <th>Last Name</th>
        <td><?= h($user->lastname) ?></td>
    </tr>
    <tr>
        <th>First Name</th>
        <td><?= h($user->firstname) ?></td>
    </tr>
    <tr>
        <th>Gender</th>
        <td><?= h($user->gender) ?></td>
    </tr>
    <tr>
        <th>Birthdate</th>
        <td><?= h($user->birthdate->format('Y-m-d')) ?></td>
    </tr>
    <tr>
        <th>Age</th>
        <td><?= $user->age ?></td>
    </tr>
    <tr>
        <th>Strength</th>
        <td><?= h($user->strength) ?></td>
    </tr>
    <tr>
        <th>Year Level</th>
        <td><?= h($user->year_level) ?></td>
    </tr>
    <tr>
        <th>Email</th>
        <td><?= h($user->email) ?></td>
    </tr>
    <tr>
        <th>Section</th>
        <td><?= h($user->section) ?></td>
    </tr>
    <tr>
        <th>Organization</th>
        <td><?= h($user->organization) ?></td>
    </tr>
</table>

<?= $this->Html->link('Back', ['action' => 'index']) ?>
