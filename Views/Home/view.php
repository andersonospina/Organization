<?php

/**
 * █ ---------------------------------------------------------------------------------------------------------------------
 * █ ░FRAMEWORK                                                                    2024-02-04 21:27:00
 * █ ░█▀▀█ █▀▀█ █▀▀▄ █▀▀ ░█─░█ ─▀─ █▀▀▀ █▀▀▀ █▀▀ [App\Modules\Organization\Home\breadcrumb.php]
 * █ ░█─── █──█ █──█ █▀▀ ░█▀▀█ ▀█▀ █─▀█ █─▀█ ▀▀█ Copyright 2024 - CloudEngine S.A.S., Inc. <admin@cgine.com>
 * █ ░█▄▄█ ▀▀▀▀ ▀▀▀─ ▀▀▀ ░█─░█ ▀▀▀ ▀▀▀▀ ▀▀▀▀ ▀▀▀ Para obtener información completa sobre derechos de autor y licencia,
 * █                                                                                         consulte la LICENCIA archivo que se distribuyó con este código fuente.
 * █ ---------------------------------------------------------------------------------------------------------------------
 * █ EL SOFTWARE SE PROPORCIONA -TAL CUAL-, SIN GARANTÍA DE NINGÚN TIPO, EXPRESA O
 * █ IMPLÍCITA, INCLUYENDO PERO NO LIMITADO A LAS GARANTÍAS DE COMERCIABILIDAD,
 * █ APTITUD PARA UN PROPÓSITO PARTICULAR Y NO INFRACCIÓN. EN NINGÚN CASO SERÁ
 * █ LOS AUTORES O TITULARES DE LOS DERECHOS DE AUTOR SERÁN RESPONSABLES DE CUALQUIER
 * █ RECLAMO, DAÑOS U OTROS RESPONSABILIDAD, YA SEA EN UNA ACCIÓN DE CONTRATO,
 * █ AGRAVIO O DE OTRO MODO, QUE SURJA DESDE, FUERA O EN RELACIÓN CON EL SOFTWARE
 * █ O EL USO U OTROS NEGOCIACIONES EN EL SOFTWARE.
 * █ ---------------------------------------------------------------------------------------------------------------------
 * █ @Author Jose Alexis Correa Valencia <jalexiscv@gmail.com>
 * █ @link https://www.codehiggs.com
 * █ @Version 1.5.0 @since PHP 7, PHP 8
 * █ ---------------------------------------------------------------------------------------------------------------------
 * █ Datos recibidos desde el controlador - @ModuleController
 * █ ---------------------------------------------------------------------------------------------------------------------
 * █ @authentication, @request, @dates, @parent, @component, @view, @oid, @views, @prefix
 * █ ---------------------------------------------------------------------------------------------------------------------
 **/
//[vars]----------------------------------------------------------------------------------------------------------------
/** @var object $parent */
/** @var string $component */
/** @var string $view */
/** @var object $authentication */
/** @var object $request */
generate_organization_permissions();
$bootstrap = service("bootstrap");
$card = $bootstrap->get_Card("card-view-Organization", array(
    "class" => "mb-3",
    "title" => lang("Organization.module") . "",
    "header-back" => "/",
    "image" => "/themes/assets/images/header/module-organization.svg",
    "image-class" => "img-fluid p-3",
    "content" => lang("Organization.intro-1")
));
echo($card);

if ($authentication->get_LoggedIn() && $authentication->has_Permission("organization-access")) {
    $shortcuts = $bootstrap->get_Shortcuts(array("id" => "shortcuts-panel"));
    $shortcuts->add($bootstrap->get_Shortcut(array("href" => "/organization/characterization/view/" . lpk(), "icon" => ICON_ORGANIZATION, "value" => "Caracterización", "description" => "Empresarial")));
    $shortcuts->add($bootstrap->get_Shortcut(array("href" => "/organization/macroprocesses/list/" . lpk(), "icon" => ICON_PLANS, "value" => lang("App.Processes"), "description" => "Herramienta")));
    $shortcuts->add($bootstrap->get_Shortcut(array("href" => "/organization/plans/list/" . lpk(), "icon" => ICON_PLANS, "value" => "Políticas", "description" => "Institucionales")));
    echo($shortcuts);
}
?>