<?php
session_start();


if (!isset($_SESSION["username"])) {
    echo "<script>
    alert('Brak dostępu bez logowania');
    window.location.href='index.php';
    </script>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zjazd 4</title>
</head>
<body>
    <h2>Witaj <?php echo $_COOKIE["username"] ?></h2>
    <form action="logout.php" method="post">
        <input type="submit" name="logout" value="Log out">
    </form>
    
    <form action="form.php" method="post">
        <div style="display: flex; flex-direction: column; width: 20%; float: left;">
            <label for="">Imie</label>
            <input type="text" name="name" value="<?php echo isset($_COOKIE['name']) ? $_COOKIE['name'] : ''; ?>">
            <label for="">Nazwisko</label>
            <input type="text" name="surname" value="<?php echo isset($_COOKIE['surname']) ? $_COOKIE['surname'] : ''; ?>">
            <label for="">Adres</label>
            <input type="text" name="address" value="<?php echo isset($_COOKIE['address']) ? $_COOKIE['address'] : ''; ?>">
            <label for="">Email</label>
            <input type="text" name="email" value="<?php echo isset($_COOKIE['email']) ? $_COOKIE['email'] : ''; ?>">
            <label for="">Konto bankowe</label>
            <input type="number" name="bankAccount" value="<?php echo isset($_COOKIE['bankAccount']) ? $_COOKIE['bankAccount'] : ''; ?>">
            <label for="">Ilość gości</label>
            <select name="guest" id="" required onchange="showPersonForms(this.value)">
            <script>
            function showPersonForms(quantity) {
            var personForms = document.getElementById('person_forms');
            personForms.innerHTML = ''; 

            for (var i = 1; i <= quantity; i++) {
                personForms.innerHTML += `
                        <label>Osoba ${i}</label><br>
                        <label for="name${i}">Imię i nazwisko: </label>
                        <input type="text" id="name${i}" name="name${i}" required>
                        <br>`;
            }
        }
        </script>
                <option value="0" <?php if (isset($_COOKIE['guest']) && $_COOKIE['guest'] == '0') echo 'selected'; ?>>0</option>
                <option value="1" <?php if (isset($_COOKIE['guest']) && $_COOKIE['guest'] == '1') echo 'selected'; ?>>1</option>
                <option value="2" <?php if (isset($_COOKIE['guest']) && $_COOKIE['guest'] == '2') echo 'selected'; ?>>2</option>
                <option value="3" <?php if (isset($_COOKIE['guest']) && $_COOKIE['guest'] == '3') echo 'selected'; ?>>3</option>
                <option value="4" <?php if (isset($_COOKIE['guest']) && $_COOKIE['guest'] == '4') echo 'selected'; ?>>4</option>
            </select>
            <div id="person_forms">
                <?php 
                if (isset($_COOKIE['guest'])) {
                    $guest = $_COOKIE['guest'];
                    for ($i = 1; $i <= $guest; $i++) { ?>
                        <label>Osoba <?php echo $i; ?></label><br>
                        <label for="name<?php echo $i; ?>">Imię i nazwisko: </label>
                        <input type="text" id="name<?php echo $i; ?>" name="name<?php echo $i; ?>" value="<?php echo isset($_COOKIE["name$i"]) ? $_COOKIE["name$i"] : ''; ?>" required>
                        <br>
                    <?php } 
                } ?>
            </div>
            <label for="">Łóżko dla dziecka</label>
            <input type="checkbox" name="kidBed" <?php if (isset($_COOKIE['kidBed']) && $_COOKIE['kidBed'] == 'Tak') echo 'checked'; ?>>
            <label for="">Pokój dla palących</label>
            <input type="checkbox" name="smokingRoom" <?php if (isset($_COOKIE['smokingRoom']) && $_COOKIE['smokingRoom'] == 'Tak') echo 'checked'; ?>>
            <input type="submit" name="calc">
            <input type="submit" name="clear" value="Clear">
            
        </div>
    </form>
</body>
</html>
