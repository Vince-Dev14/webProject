<?php

function display_message(string $var_name)
{
    if (isset($_SESSION[$var_name])) {
        $var = $_SESSION[$var_name];

        echo $var;
    }
}

function unset_session_variable(string $var_name){
    unset($_SESSION[$var_name]);
}

function current_date(){
    date_default_timezone_set('Asia/Manila');
    $current_date = date("Y-m-d");

    $_SESSION["current_date"] = $current_date;
}

function show_total_tenants(object $pdo){
    require_once "tenant_management_model.php";
    $result = get_total_tenants($pdo);
    echo $result["total_tenants"];
}

function getUserTenantId(object $pdo, $user_id){
    require_once "tenant_management_model.php";
    $result = get_user_tenant_id($pdo, $user_id);
    echo $result["tenant_id"];
}

