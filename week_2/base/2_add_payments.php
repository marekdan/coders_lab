<!--Stwórz tabele do płatności. Ma mieć takie same dane jak wczoraj z tym tylko
założeniem że ma być powiązana relacją 1-1 z tabelą bilety (wpłynie to na
kolumnę id).
Relacja pomiędzy biletem a płatnością jest następująca: bilet ma 1 lub 0
płatności (jest wtedy nieopłacony), płatność musi być przypisana do biletu.-->
<?php
$servername = "localhost";
$username = "root";
$password = "coderslab";
$baseName = "kino_1";
$conn = new mysqli($servername, $username, $password, $baseName);

$sql = "CREATE TABLE Payments (
        id int NOT NULL,
        type varchar(255),
        p_date date,
        PRIMARY KEY (id),
        FOREIGN KEY(id) REFERENCES Tickets (id)
        ON DELETE CASCADE)";

$result = $conn->query($sql);