<!-- C:\xampp\htdocs\CakePHP\newCrud\crud\templates\Users\edit.ctp -->

<h1>Edit User</h1>
<?= $this->Form->create($user) ?>
<?= $this->Form->control('lastname', ['label' => 'Last Name']) ?>
<?= $this->Form->control('firstname', ['label' => 'First Name']) ?>
<?= $this->Form->control('gender', ['type' => 'radio', 'options' => ['M' => 'Male', 'F' => 'Female'], 'label' => 'Gender']) ?>
<?= $this->Form->control('birthdate', ['type' => 'date', 'label' => 'Birthdate']) ?>
<?= $this->Form->control('age', ['type' => 'number', 'label' => 'Age']) ?>

<!-- Radio buttons for selecting one strength -->
<?= $this->Form->control('strength', [
    'type' => 'select',
    'multiple' => 'checkbox',
    'label' => 'Strength',
    'options' => [
        'Programmer' => 'Programmer',
        'UXdesigner' => 'UX Designer',
        'QualityAssurance' => 'Quality Assurance',
        'BusinessAnalyst' => 'Business Analyst',
        'ProjectManager' => 'Project Manager',
    ],
    'default' => array_map('trim', explode(',', $user->strength)),
    'value' => array_map('trim', explode(',', $user->strength)), // Set the 'value' attribute to ensure checkboxes are checked
]) ?>

<?= $this->Form->control('year_level', ['type' => 'radio', 'options' => [1 => 'First Year', 2 => 'Second Year', 3 => 'Third Year', 4 => 'Fourth Year'], 'label' => 'Year Level']) ?>
<?= $this->Form->control('email', ['label' => 'Email']) ?>
<?= $this->Form->control('section', ['label' => 'Section']) ?>
<?= $this->Form->control('organization', ['type' => 'select', 'options' => ['ACSS' => 'ACSS', 'LITS' => 'LITS', 'GOOGLE' => 'GOOGLE', 'NONE' => 'NONE'], 'label' => 'Organization']) ?>
<?= $this->Form->button('Submit') ?>
<?= $this->Html->link('Back', ['action' => 'index'], ['class' => 'button', 'style' => 'margin-left: 10px']) ?>
<?= $this->Form->end() ?>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.querySelector('form');

        form.addEventListener('submit', function (event) {
            if (!validateForm()) {
                event.preventDefault();
            }
        });

        function validateForm() {
            const lastName = document.getElementById('lastname').value.trim();
            const firstName = document.getElementById('firstname').value.trim();
            const gender = document.querySelector('input[name="gender"]:checked');
            const birthdate = document.getElementById('birthdate').value.trim();
            const age = document.getElementById('age').value.trim();
            const strength = document.querySelectorAll('input[name="strength[]"]:checked');
            const yearLevel = document.querySelector('input[name="year_level"]:checked');
            const email = document.getElementById('email').value.trim();
            const section = document.getElementById('section').value.trim();
            const organization = document.getElementById('organization').value;

            // Add similar conditions for other fields
            if (lastName === '') {
                alert('Last Name is required.');
                return false;
            }

            if (firstName === '') {
                alert('First Name is required.');
                return false;
            }

            if (!gender) {
                alert('Gender is required.');
                return false;
            }

            if (birthdate === '') {
                alert('Birthdate is required.');
                return false;
            }

            if (age === '') {
                alert('Age is required.');
                return false;
            }

            if (strength.length === 0) {
                alert('Strength is required.');
                return false;
            }

            if (!yearLevel) {
                alert('Year Level is required.');
                return false;
            }

            if (email === '') {
                alert('Email is required.');
                return false;
            }

            if (section === '') {
                alert('Section is required.');
                return false;
            }

            if (organization === '') {
                alert('Organization is required.');
                return false;
            }

            return true; // Form is valid
        }
    });
</script>
