<?php
    function get_categorias($edit_cat_id) {
        $query = query("SELECT * FROM categorias");
        while($row = arrayAssoc($query)) {
            if(isset($edit_cat_id) && $edit_cat_id == $row['id']) {
                echo "<option value='{$row["id"]}' selected>{$row['nombre']}</option>";
                continue;
            }
            echo "<option value='{$row["id"]}'>{$row['nombre']}</option>";
        }
    }

    function get_catStr($cat_it) {
        return arrayAssoc(query("SELECT nombre FROM categorias WHERE id = " . escape($cat_it)))['nombre'];
    }
?>