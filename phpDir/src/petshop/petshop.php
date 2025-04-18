<?php
session_start();

abstract class Pet
{
    protected $name;
    protected $age;

    public function __construct($name, $age)
    {
        $this->name = htmlspecialchars($name);
        $this->age = (int)$age;
    }

    abstract public function getType();
    abstract public function speak();
    abstract public function doAction();

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }
}


class Dog extends Pet
{
    public function getType()
    {
        return "Dog";
    }

    public function speak()
    {
        return "Woof!";
    }

    public function doAction()
    {
        return "fetches a ball ";
    }
}


class Cat extends Pet
{
    public function getType()
    {
        return "Cat";
    }

    public function speak()
    {
        return "Meow!";
    }

    public function doAction()
    {
        return "climbs the curtain 🐾";
    }
}


class Bird extends Pet
{
    public function getType()
    {
        return "Bird";
    }

    public function speak()
    {
        return "Chirp!";
    }

    public function doAction()
    {
        return "flies around the cage ";
    }
}

// PetShop class
class PetShop
{
    public function addPet($type, $name, $age)
    {
        $pet = null;
        switch ($type) {
            case "Dog":
                $pet = new Dog($name, $age);
                break;
            case "Cat":
                $pet = new Cat($name, $age);
                break;
            case "Bird":
                $pet = new Bird($name, $age);
                break;
        }
        if ($pet) {
            $_SESSION['pets'][] = $pet;
        }
    }

    public function deletePet($index)
    {
        if (isset($_SESSION['pets'][$index])) {
            unset($_SESSION['pets'][$index]);
            $_SESSION['pets'] = array_values($_SESSION['pets']); // reindex
        }
    }

    public function getPets()
    {
        return $_SESSION['pets'] ?? [];
    }
}

// Initialize session
if (!isset($_SESSION['pets'])) {
    $_SESSION['pets'] = [];
}

$shop = new PetShop();

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add'])) {
        $type = $_POST['type'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $shop->addPet($type, $name, $age);
    }

    if (isset($_POST['delete'])) {
        $index = $_POST['index'];
        $shop->deletePet($index);
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>🐾 PetShop</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: white;
            padding: 30px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            background: #fff;
            padding: 20px;
            max-width: 400px;
            margin: auto;
            border-radius: 10px;
            box-shadow: 0 0 15px #ddd;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        select,
        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
        }

        button {
            margin-top: 15px;
            padding: 10px;
            background-color: #4caf50;
            color: white;
            border: none;
            cursor: pointer;
            width: 100%;
            border-radius: 5px;
        }

        .pet-list {
            max-width: 700px;
            margin: 30px auto;
        }

        .pet-card {
            background: #fff;
            margin-bottom: 15px;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 0 10px #ccc;
        }

        .pet-card h3 {
            margin: 0 0 10px;
            color: #0077cc;
        }

        .delete-btn {
            background-color: #ff4444;
            margin-top: 10px;
        }
    </style>
</head>

<body>

    <h1>Pet Shop</h1>

    <form method="post">
        <label>Type:</label>
        <select name="type" required>
            <option value="">Select a pet</option>
            <option value="Dog">Dog</option>
            <option value="Cat">Cat</option>
            <option value="Bird">Bird</option>
        </select>

        <label>Name:</label>
        <input type="text" name="name" required>

        <label>Age:</label>
        <input type="number" name="age" min="0" required>

        <button type="submit" name="add">Add Pet</button>
    </form>

    <div class="pet-list">
        <?php foreach ($shop->getPets() as $index => $pet): ?>
            <div class="pet-card">
                <h3><?= $pet->getType(); ?>: <?= $pet->getName(); ?> (Age: <?= $pet->getAge(); ?>)</h3>
                <p><strong>Sound:</strong> <?= $pet->speak(); ?></p>
                <p><strong>Action:</strong> <?= $pet->doAction(); ?></p>
                <form method="post" style="margin:0;">
                    <input type="hidden" name="index" value="<?= $index; ?>">
                    <button class="delete-btn" type="submit" name="delete">Delete</button>
                </form>
            </div>
        <?php endforeach; ?>
    </div>

</body>

</html>