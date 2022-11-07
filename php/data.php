<?php 
   
// for users included in users and search
while($row = mysqli_fetch_assoc($sql)){
    // for mes
    $sql2 = "SELECT * FROM messages WHERE (incoming_mes_id = {$row['unique_id']}
            OR outgoin_mes_id = {$row['unique_id']}) AND (outgoin_mes_id = {$outgoing_id}
            OR incoming_mes_id = {$outgoing_id}) ORDER BY mes_id DESC LIMIT 1";
    $query2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_assoc($query2);
    if(mysqli_num_rows($query2) > 0){
      $result = $row2['mes'];
    }else{
      $result = "No message available";
    }
          
    (strlen($result) > 28) ? $msg = substr($result, 0 , 28). '...' : $msg = $result;
    ($outgoing_id == $row2['outgoin_mes_id']) ? $you = "You: " : $you = "";


    // check user is online or offline;
    ($row['status'] == "Offline now") ? $offline = "offline" : $offline = "";

    $output .= '<a href="chat.php?user_id='. $row['unique_id'] .'">
                  <div class="content">
                        <img src="php/images/'. $row["img"] . '"  alt="">
                        <div class="details">
                            <span>' . $row["fname"] . " " . $row["lname"] .'</span>
                            <p>'. $you .$msg .'</p>
                        </div>
                    </div>
                  <div class="status-dot '. $offline .'"><i class="fas fa-circle"></i></div>
                </a>
                ';
}



?>