<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='styl_1.css'>
    <script src='main.js'></script>
</head>
<body>
    <header>
        <h1>Portal dla wędkarzy</h1>
    </header>
    <content>
        <div id="l">
            <div id="l1">
                <h3>Ryby zamieszkujące rzeki</h3>
                
                <ol>
                    <?php
                        $conn=mysqli_connect('localhost', 'root','','wedkowanie');
                        $sql1="SELECT ryby.nazwa, lowisko.akwen, lowisko.wojewodztwo FROM ryby INNER JOIN lowisko on ryby.id=lowisko.Ryby_id  WHERE lowisko.rodzaj = 3;";
                        $resultat1=mysqli_query($conn, $sql1);
                        while ($row=mysqli_fetch_array($resultat1)) 
                        {
                            echo "<li>$row[0] plywa w rzece $row[1], $row[2]</li>";
                        }
                    ?>
                    
                </ol>
            </div>
            <div id="l2">
                <h3>Ryby drapieżne naszych wód</h3>
                <table>
                    <tr>
                        <th>L.p.</th>
                        <th>Gatunek</th>
                        <th>Występowanie</th>
                    </tr>
                    <?php
                        $sql2="SELECT id,nazwa,wystepowanie FROM ryby WHERE styl_zycia=1;";
                        $resultat2=mysqli_query($conn, $sql2);
                        while ($row=mysqli_fetch_array($resultat2)) 
                        {
                            echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
                        }
                    ?>
                </table>
                <h3>ryby chronone w styczniu i marcu</h3>
                <?php
                        $sql3="SELECT id,nazwa FROM `ryby` WHERE styl_zycia=1;";
                        $resultat3=mysqli_query($conn, $sql3);
                        while ($row=mysqli_fetch_array($resultat3)) 
                        {
                            echo "$row[0] $row[1]<br>";
                        }
                        $mysqli_close();
                    ?>
            </div>
        </div>
        <div id="p">
            <img src="ryba1.jpg" alt="Sum"><br>
            <a href="kwerendy.txt">Pobierz kwerendy</a>
        </div>
    </content>
    <footer>
        <p>strone wykonal:0000000000000</p>
    </footer>
</body>
</html>