<!--
Połącz tabele kina i filmy poprzez relację wiele do wielu (film może być
wyświetlany w wielu kinach, kino może mieć wiele filmów).
Dodatkowo stworzoną tabele nazwij seans.
-->
<?php
$servername = "localhost";
$username = "root";
$password = "coderslab";
$baseName = "kino_1";
$conn = new mysqli($servername, $username, $password, $baseName);


$sql = "CREATE TABLE Seance(
        id int AUTO_INCREMENT,
        Cinemas_id int NOT NULL,
        Movies_id int NOT NULL,
        PRIMARY KEY (id),
        UNIQUE KEY Seance_id (Cinemas_id, Movies_id),
        FOREIGN KEY (Cinemas_id) REFERENCES Cinemas (id),
        FOREIGN KEY (Movies_id) REFERENCES Movies (id)
        ON DELETE CASCADE )";