<?php

function mostrarTablaDe2($nombreDeTabla, $var1, $var2)
{
    include '../../../config.php';

    if ($conn->connect_error) {
        echo "Error en la conexion";
    } else {

        $sql = "SELECT * FROM $nombreDeTabla";
        $resultado = $conn->query($sql);

        if ($resultado->num_rows > 0) {
            echo "<table>";
            echo "<tr>
            <th>$var1</th>
            <th>$var2</th>
            </tr>";
            while ($row = $resultado->fetch_assoc()) {
                echo "<tr>";
                echo ("<td>" . $row["$var1"] . "</td>");
                echo ("<td>" . $row["$var2"] . "</td>");
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "NO ROWS";
        }
    }
    $conn->close();
}
function mostrarTablaDe3($nombreDeTabla, $var1, $var2, $var3)
{
    include '../../../config.php';

    if ($conn->connect_error) {
        echo "Error en la conexion";
    } else {

        $sql = "SELECT * FROM $nombreDeTabla";
        $resultado = $conn->query($sql);

        if ($resultado->num_rows > 0) {
            echo "<table>";
            echo "<tr>
            <th>$var1</th>
            <th>$var2</th>
            <th>$var3</th>
            </tr>";
            while ($row = $resultado->fetch_assoc()) {
                echo "<tr>";
                echo ("<td>" . $row["$var1"] . "</td>");
                echo ("<td>" . $row["$var2"] . "</td>");
                echo ("<td>" . $row["$var3"] . "</td>");
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "NO ROWS";
        }
    }
    $conn->close();
}
function mostrarTablaDe4($nombreDeTabla, $var1, $var2, $var3, $var4)
{
    include '../../../config.php';

    if ($conn->connect_error) {
        echo "Error en la conexion";
    } else {

        $sql = "SELECT * FROM $nombreDeTabla";
        $resultado = $conn->query($sql);

        if ($resultado->num_rows > 0) {
            echo "<table>";
            echo "<tr>
            <th>$var1</th>
            <th>$var2</th>
            <th>$var3</th>
            <th>$var4</th>
            </tr>";
            while ($row = $resultado->fetch_assoc()) {
                echo "<tr>";
                echo ("<td>" . $row["$var1"] . "</td>");
                echo ("<td>" . $row["$var2"] . "</td>");
                echo ("<td>" . $row["$var3"] . "</td>");
                echo ("<td>" . $row["$var4"] . "</td>");
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "NO ROWS";
        }
    }
    $conn->close();
}

function mostrarTablaDe5($nombreDeTabla, $var1, $var2, $var3, $var4, $var5)
{
    include '../../../config.php';

    if ($conn->connect_error) {
        echo "Error en la conexion";
    } else {

        $sql = "SELECT * FROM $nombreDeTabla";
        $resultado = $conn->query($sql);

        if ($resultado->num_rows > 0) {
            echo "<table>";
            echo "<tr>
            <th>$var1</th>
            <th>$var2</th>
            <th>$var3</th>
            <th>$var4</th>
            <th>$var5</th>
            </tr>";
            while ($row = $resultado->fetch_assoc()) {
                echo "<tr>";
                echo ("<td>" . $row["$var1"] . "</td>");
                echo ("<td>" . $row["$var2"] . "</td>");
                echo ("<td>" . $row["$var3"] . "</td>");
                echo ("<td>" . $row["$var4"] . "</td>");
                echo ("<td>" . $row["$var5"] . "</td>");
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "NO ROWS";
        }
    }
    $conn->close();
}
function mostrarTablaDe6($nombreDeTabla, $var1, $var2, $var3, $var4, $var5, $var6)
{
    include '../../../config.php';

    if ($conn->connect_error) {
        echo "Error en la conexion";
    } else {

        $sql = "SELECT * FROM $nombreDeTabla";
        $resultado = $conn->query($sql);

        if ($resultado->num_rows > 0) {
            echo "<table>";
            echo "<tr>
            <th>$var1</th>
            <th>$var2</th>
            <th>$var3</th>
            <th>$var4</th>
            <th>$var5</th>
            <th>$var6</th>
            </tr>";
            while ($row = $resultado->fetch_assoc()) {
                echo "<tr>";
                echo ("<td>" . $row["$var1"] . "</td>");
                echo ("<td>" . $row["$var2"] . "</td>");
                echo ("<td>" . $row["$var3"] . "</td>");
                echo ("<td>" . $row["$var4"] . "</td>");
                echo ("<td>" . $row["$var5"] . "</td>");
                echo ("<td>" . $row["$var6"] . "</td>");
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "NO ROWS";
        }
    }
    $conn->close();
}
function mostrarTablaDe7($nombreDeTabla, $var1, $var2, $var3, $var4, $var5, $var6, $var7)
{
    include '../../../config.php';

    if ($conn->connect_error) {
        echo "Error en la conexion";
    } else {

        $sql = "SELECT * FROM $nombreDeTabla";
        $resultado = $conn->query($sql);

        if ($resultado->num_rows > 0) {
            echo "<table>";
            echo "<tr>
            <th>$var1</th>
            <th>$var2</th>
            <th>$var3</th>
            <th>$var4</th>
            <th>$var5</th>
            <th>$var6</th>
            <th>$var7</th>
            </tr>";
            while ($row = $resultado->fetch_assoc()) {
                echo "<tr>";
                echo ("<td>" . $row["$var1"] . "</td>");
                echo ("<td>" . $row["$var2"] . "</td>");
                echo ("<td>" . $row["$var3"] . "</td>");
                echo ("<td>" . $row["$var4"] . "</td>");
                echo ("<td>" . $row["$var5"] . "</td>");
                echo ("<td>" . $row["$var6"] . "</td>");
                echo ("<td>" . $row["$var7"] . "</td>");
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "NO ROWS";
        }
    }
    $conn->close();
}
function mostrarTablaDe8($nombreDeTabla, $var1, $var2, $var3, $var4, $var5, $var6, $var7, $var8)
{
    include '../../../config.php';

    if ($conn->connect_error) {
        echo "Error en la conexion";
    } else {

        $sql = "SELECT * FROM $nombreDeTabla";
        $resultado = $conn->query($sql);

        if ($resultado->num_rows > 0) {
            echo "<table>";
            echo "<tr>
            <th>$var1</th>
            <th>$var2</th>
            <th>$var3</th>
            <th>$var4</th>
            <th>$var5</th>
            <th>$var6</th>
            <th>$var7</th>
            <th>$var8</th>
            </tr>";
            while ($row = $resultado->fetch_assoc()) {
                echo "<tr>";
                echo ("<td>" . $row["$var1"] . "</td>");
                echo ("<td>" . $row["$var2"] . "</td>");
                echo ("<td>" . $row["$var3"] . "</td>");
                echo ("<td>" . $row["$var4"] . "</td>");
                echo ("<td>" . $row["$var5"] . "</td>");
                echo ("<td>" . $row["$var6"] . "</td>");
                echo ("<td>" . $row["$var7"] . "</td>");
                echo ("<td>" . $row["$var8"] . "</td>");
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "NO ROWS";
        }
    }
    $conn->close();
}

function mostrarTablaDe9($nombreDeTabla, $var1, $var2, $var3, $var4, $var5, $var6, $var7, $var8, $var9)
{
    include '../../../config.php';

    if ($conn->connect_error) {
        echo "Error en la conexion";
    } else {

        $sql = "SELECT * FROM $nombreDeTabla";
        $resultado = $conn->query($sql);

        if ($resultado->num_rows > 0) {
            echo "<table>";
            echo "<tr>
            <th>$var1</th>
            <th>$var2</th>
            <th>$var3</th>
            <th>$var4</th>
            <th>$var5</th>
            <th>$var6</th>
            <th>$var7</th>
            <th>$var8</th>
            <th>$var9</th>
            </tr>";
            while ($row = $resultado->fetch_assoc()) {
                echo "<tr>";
                echo ("<td>" . $row["$var1"] . "</td>");
                echo ("<td>" . $row["$var2"] . "</td>");
                echo ("<td>" . $row["$var3"] . "</td>");
                echo ("<td>" . $row["$var4"] . "</td>");
                echo ("<td>" . $row["$var5"] . "</td>");
                echo ("<td>" . $row["$var6"] . "</td>");
                echo ("<td>" . $row["$var7"] . "</td>");
                echo ("<td>" . $row["$var8"] . "</td>");
                echo ("<td>" . $row["$var9"] . "</td>");
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "NO ROWS";
        }
    }
    $conn->close();
}


?>