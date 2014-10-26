<?php

// Maak een nieuwe class aan
class Message {

    // Ken variabelen toe aan het object (properties)
    public $id;
    public $title;
    public $content;

    // Ken waarden aan de variabelen (properties) toe van het object
    public function __construct($id, $title, $content) {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
    }

    // Beschrijf de functies van het object (methods)
    //opslaan

    public function save() {
        include 'connect.php';
        $sql = "INSERT INTO message (title, content) VALUES ('$this->title','$this->content')";
        $result = mysqli_query($conn, $sql);
        return "De Message met titel " . $this->title . " en tekst " . $this->content . " is opgeslagen!";
    }

    //Alle berichten laten zien
    public function selectall() {
        include 'connect.php';
        $sql = "SELECT * FROM message";
        $result = mysqli_query($conn, $sql);
        echo "<table><tr><th>Titel</th><th>Bericht</th><th>Bericht weergeven</th></tr>";
        while (list($id, $titel, $tekst) = mysqli_fetch_row($result)) {
            echo "<tr><td>$titel</td><td>$tekst</td><td><a href='bericht_weergeven.php?id=$id'>Weergeven</a></td>";
        }
        echo "</table>";
    }

    //Een bericht laten zien
    public function selectone() {
        include 'connect.php';
        $sql = "SELECT * FROM message WHERE id='$this->id'";
        $result = mysqli_query($conn, $sql);
        echo "<table>";
        while (list($id, $titel, $tekst) = mysqli_fetch_row($result)) {
            echo "<tr><td>$titel</td></tr><tr><td>$tekst</td></tr>";
        }
        echo "</table>";
    }

    /* ////////////////////////////////////////////////////////
      // Vanaf hier alle functies voor het admin gedeelte     //
      // Hier kunnen berichten worden weggehaald en veranderd //
     */////////////////////////////////////////////////////////
    //geef alle berichten weer inclusief de mogelijkheid om een bericht te veranderen of weg te halen

    public function selectallAdmin() {
        include 'connect.php';
        $sql = "SELECT * FROM message";
        $result = mysqli_query($conn, $sql);
        echo "<table><tr><th>Titel</th><th>Bericht</th><th>Weergeven</th><th>Bewerken</th><th>Weghalen</th></tr>";
        while (list($id, $titel, $tekst) = mysqli_fetch_row($result)) {
            echo "<tr><td>$titel</td><td>$tekst</td>
			<td><a href='bericht_weergeven.php?id=$id'>Weergeven</a></td>
			<td><a href='bericht_bewerken_form.php?id=$id'>Bewerken</a></td>
			<td><a href='bericht_weghalen_form.php?id=$id'>Weghalen</a></td></tr>";
        }
        echo "</table>";
    }

    //Een bericht veranderen
    public function update() {
        include 'connect.php';
        $sql = "UPDATE message SET title='$this->title', content='$this->content' WHERE id='$this->id'";
        $result = mysqli_query($conn, $sql);
        return "De Message met titel " . $this->title . " en tekst " . $this->content . " is opgeslagen!";
    }

    //Een bericht weghalen
    public function delete() {
        include 'connect.php';
        $sql = "DELETE FROM message WHERE id='$this->id'";
        $result = mysqli_query($conn, $sql);
        return "De Message met nummer " . $this->id . " is weggehaald!";
    }

}

?>  