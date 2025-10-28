<?php
    function get_categorias() {
        $query = query("SELECT * FROM categorias");
        while($row = arrayAssoc($query)) {
            echo "<option value='{$row["id"]}'>{$row['nombre']}</option>";
        }
    }
?>