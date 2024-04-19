<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zjazd 2</title>
</head>
<body>
    <form action="zad3.php" method="post">
    <div style="display: flex; flex-direction: column; width: 20%; float: left;">
   <label for="">Imie</label>
    <input type="text" name="name">
    <label for="">Nazwisko</label>
    <input type="text" name="surname">
    <label for="">Adres</label>
    <input type="text" name="address">
    <label for="">Email</label>
    <input type="text" name="email">
    <label for="">Konto bankowe</label>
    <input type="number" name="bankAccount">
    <label for="">Ilość gości</label>
    <select name="guest" id="" required onchange="showPersonForms(this.value)">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select>
    <div id="person_forms"></div>
        <br>
    <script>
        function showPersonForms(quantity) {
            var personForms = document.getElementById('person_forms');
            personForms.innerHTML = ''; // Clear previous forms

            for (var i = 1; i <= quantity; i++) {
                personForms.innerHTML += `
                        <label>Osoba ${i}</label><br>
                        <label for="name${i}">Imię i nazwisko: </label>
                        <input type="text" id="name${i}" name="name${i}" required>
                        <br>`;
            }
        }
    </script>
    <label for="">Łózko dla dziecka</label>
    <input type="checkbox" name="kidBed">
    <label for="">Pokój dla palących</label>
    <input type="checkbox" name="smokingRoom">
    <input type="submit" name="calc">
</div>
</form>
</body>
</html>