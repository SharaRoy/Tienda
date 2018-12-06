<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $titulo; ?></title>

        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <!-- Cargamos las hojas de estilo y complementos para la vista -->
        <?php if(isset($header)): ?>
            <?php echo $header; ?>
        <?php endif; ?>

    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <!-- Encabezado del panel -->
            <?php if(isset($header_navegation)): ?>
                <?php echo $header_navegation; ?>
            <?php endif; ?>
            <!-- !Encabezado del panel -->

            <!-- Panel izquierdo (opciones del modulos) -->
            <?php if(isset($menu)): ?>
                <?php echo $menu; ?>
            <?php endif; ?>
            <!-- !Panel izquierdo (opciones del modulos) -->

            <!-- Panel derecho (contenido ) -->
            <div class="content-wrapper">
                <?php if(isset($contenido)): ?>
                    <?php echo $contenido; ?>
                <?php endif; ?>
            </div>
            <!-- Panel derecho (contenido) -->

        </div>

        <!-- Cargamos los script para la plantilla -->
        <?php if(isset($footer)): ?>
            <?php echo $footer; ?>
        <?php endif; ?>
    </body>
</html>
