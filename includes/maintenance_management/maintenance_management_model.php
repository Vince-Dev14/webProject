<?php 

function check_if_user_is_tenant(object $pdo, $user_id){
    $query = "SELECT dormlink_tenants.*, rooms.*  FROM dormlink_tenants JOIN rooms ON dormlink_tenants.room_id = rooms.room_id WHERE dormlink_tenants.user_id = :user_id;";   
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":user_id", $user_id, PDO::PARAM_INT);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function submit_maintenance_request(object $pdo, $tenant_id, $user_id, $name, $email, $room_id, $category, $maintenance_urgency, $description, $date){
    $query = "INSERT INTO dormlink_maintenance_request (tenant_id, user_id, name, email, room_id, category, maintenance_urgency, description, date) VALUES (:tenant_id, :user_id, :name, :email, :room_id, :category, :maintenance_urgency, :description, :date);";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":tenant_id", $tenant_id);
    $stmt->bindParam(":user_id", $user_id);
    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":room_id", $room_id);
    $stmt->bindParam(":category", $category);
    $stmt->bindParam(":maintenance_urgency", $maintenance_urgency);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":date", $date);
    $stmt->execute();
}

function get_maintenance_request(object $pdo){
    $query = "SELECT * FROM dormlink_maintenance_request WHERE is_deleted = 0;";   
    $stmt = $pdo->prepare($query);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}



