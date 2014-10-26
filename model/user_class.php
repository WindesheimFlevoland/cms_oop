
<?php

// Maak een nieuwe class aan
class User {

    // Ken variabelen toe aan het object (properties)
    public $id;
    public $firstname;
    public $lastname;
    public $email;
    public $password;
    public $admin;

    // Ken waarden aan de variabelen (properties) toe van het object
    public function __construct($id, $firstname, $lastname, $email, $password, $admin) {
        $this->id = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->password = $password;
        $this->admin = $admin;
    }

    // Beschrijf de functies van het object (methods)
    //inloggen: controleer of de user bestaat in de database en controleer zijn rechten

    public function login() {
        include 'connect.php';
        $sql = "SELECT * FROM user WHERE firstname='$this->firstname' AND password='$this->password'";
        $result = mysqli_query($conn, $sql) or die("FOUT: " . mysql_error());
        while (list($id, $firstname, $lastname, $email, $password, $admin) = mysqli_fetch_row($result)) {
            echo "$id, $firstname,$lastname, $email, $password, $admin";

            //variabelen wegschrijven als sessievariabelen

            $_SESSION['firstname'] = $firstname;
            $_SESSION['lastname'] = $lastname;
            $_SESSION['password'] = $password;
            $_SESSION['admin'] = $admin;
        }
    }

    /* ////////////////////////////////////////////////////////
      // Vanaf hier alle functies voor het admin gedeelte     //
      // Hier kunnen gebruikers worden weggehaald en veranderd //
     */////////////////////////////////////////////////////////

    public function save() {
        include 'connect.php';
        $sql = "INSERT INTO user (firstname, lastname, email, password, admin) 
			VALUES 
			('$this->firstname','$this->lastname', '$this->email','$this->password', '$this->admin')";
        $result = mysqli_query($conn, $sql);
        return "De User met voornaam " . $this->firstname . " en achternaam " . $this->lastname . " is opgeslagen!";
    }

    //alle gebruikers selecteren
    public function selectallUsersAdmin() {
        include 'connect.php';
        $sql = "SELECT * FROM user";
        $result = mysqli_query($conn, $sql);
        echo "<table><tr><th>Voornaam</th><th>Achternaam</th><th>Admin</th><th></th><th></th></tr>";
        while (list($id, $firstname, $lastname, $email, $password, $admin) = mysqli_fetch_row($result)) {
            echo "<tr><td>$firstname</td><td>$lastname</td><td>$admin</td>
			<td><a href='user_bewerken_form.php?id=$id'>Bewerken</a></td>
			<td><a href='user_weghalen_form.php?id=$id'>Weghalen</a></td></tr>";
        }
        echo "</table>";
    }

    //een gebruiker weghalen
    public function delete() {
        include 'connect.php';
        $sql = "DELETE FROM user WHERE id='$this->id'";
        $result = mysqli_query($conn, $sql);
        return "De User met nummer " . $this->id . " is weggehaald!";
    }

    //een gebruiker veranderen
    public function update() {
        include 'connect.php';
        $sql = "UPDATE user SET firstname='$this->firstname', lastname='$this->lastname', email='$this->email', password='$this->password', 
			admin='$this->admin' WHERE id='$this->id'";
        $result = mysqli_query($conn, $sql);
        return "De User met voornaam " . $this->firstname . " en achternaam " . $this->lastname . " is aangepast!";
    }

}
?>
</p>
</body>
</html>