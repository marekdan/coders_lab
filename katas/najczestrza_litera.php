<?php
/*
 * Napisz funkcję która pobiera napis, a zwróci tablice w której pierwszyme lementem będzie najczęściej występujący znak,
 * a drugim ile razy ten znak wystapił z tym napisie.
 * W przypadku w ktorym kilka znaków ma taką samą ilość powtórzeń powinien być zwrócony ten który wystepuje najwcześniej w podanym napisie
 *
 * Przykłady:
 * mostOftenCharacter("Ala ma kota") => ['a', 3] // Duża litera A to inny znak
 * mostOftenCharacter("kkkeefflll") => ['k', 3] // k i l majątyle samo powtórzeń ale k jest wcześniej
 */



function mostOftenCharacter(){
}


/*
 * Kod popniżej służy wygenerowaniu testów i strony poglądaowej - nie modyfikujcie go!
 */

$testCases = [["Ala ma kota", ['a', 3]], ["kkkeefflll",  ['k', 3]], ["elkkeldsllael", ["l", 5]], ["ertTTtrr", ["r", 3]]];
$results = "";
foreach($testCases as $case){
    if(($funcValue = mostOftenCharacter($case[0])) === $case[1]){
        $results .= "<tr class='success'><td> Ok </td><td>{$case[0]}</td><td>[".implode($case[1], ",")."]</td><td>[".implode($funcValue, ",")."]</td></tr>";
    }
    else{
        $results .= "<tr class='danger'><td> Fail </td><td>{$case[0]}</td><td>[".implode($case[1], ",")."]</td><td>[".implode($funcValue, ",")."]</td></tr>";
    }
}

echo("
<!DOCTYPE html>
<html lang='pl'>
  <head>
    <meta charset='utf-8'>
    <title>Najczęściej występujący znak</title>
    <link href='./css/bootstrap.min.css' rel='stylesheet'>

  </head>

  <body>

    <div class='container'>
      <div class='jumbotron'>
        <h1>Najczęściej występujący znak</h1>
        <p><a class='btn btn-lg btn-success' href='javascript:window.location.reload();' role='button'>Odświerz</a></p>
      </div>

      <div class='row'>
          <h1>Testy:</h1>
          <table class='table'>
            <thead>
              <tr>
                <th>Stan testu:</th>
                <th>Dane:</th>
                <th>Wartość spodziewana:</th>
                <th>Wartość otrzymana:</th>
              </tr>
            </thead>
            <tbody>
                $results
            </tbody>
          </table>
      </div>
    </div>
  </body>
</html>
");