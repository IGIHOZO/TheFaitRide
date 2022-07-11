<?php 
if (isset($_POST['company'])) {
//    var_dump($_POST);
 // $client = $_POST['name'];
 // $client = $_POST['company'];
 // $client = $_POST['hphone'];
 // $client = $_POST['cphone'];
 // $client = $_POST['email'];
 // $client = $_POST['city'];
 // $client = $_POST['zip'];
 // $client = $_POST['time'];
 // $client = $_POST['city'];
 // $client = $_POST['zip'];
 // $client = $_POST['ptime'];
 // $client = $_POST['returntrip'];
 // $client = $_POST['rtime'];
 // $client = $_POST['others'];
 // $client = $_POST['rtime'];
 $pick_up_time = date("Y-m-d h:i A",strtotime(str_replace("T", " ",$_POST['pick_up_time'])));
 $artime = date("Y-m-d h:i A",strtotime(str_replace("T", " ",$_POST['artime'])));
 // $rtime = date("Y-m-d h:i A",strtotime(str_replace("T", " ",$_POST['rtime'])));
 // $rtime = str_replace(search, replace, subject)

    $sender = 'jonathan@thefaithride.com';
    $recipient = 'info@thefaithride.com';

    $subject = " News! ".strtoupper($_POST['name'])." has requested for a ride";
    $message = '
            <title></title>
        </head>
        <body>
  <div style="background-color: white;color: black;height: 3508px;width: 2480px;font-size:20px">
    <table>
      <thead>
        
          <th colspan="2">
            <h2>New Client-Ride Request Form<br></h2>
          <img src="https://thefaithride.com/images/imgs/logo.jpeg" style="width:200px;height:200px"/>

          </th>
        
      </thead>
        <tr>
          <td style="text-decoration: underline;font-weight: bolder;">DATE OF SERVICE: </td>
          <td>'.date("D, d-m-y h-i A").'</td>
        </tr>
        
        <tr>
          <tdstyle="text-decoration: underline;"><b>Client Information: </b></td>
          <td></td>
        </tr>
        <tr><td><td></td></td></tr>
        <tr>
          <td style="text-decoration: underline;">Client Name/Company: </td>
          <td>'.$_POST['name'].'/'.$_POST['company'].'</td>
        </tr>
        <tr>
          <td style="text-decoration: underline;">Home Phone:</td>
          <td>'.$_POST['hphone'].'</td>
        </tr>
        <tr>
          <td style="text-decoration: underline;">Cell Phone:</td>
          <td>'.$_POST['cphone'].'</td>
        </tr>
        <tr>
          <td style="text-decoration: underline;">Email Address:</td>
          <td>'.$_POST['email'].'</td>
        </tr>
        <tr>
          <td style="text-decoration: underline;font-weight: bolder;">Pick up information: </td>
          <td></td>
        </tr>
        <tr><td><td></td></td></tr>
        <tr>
          <td style="text-decoration: underline;">City: </td>
          <td>'.$_POST['city'].'</td>
        </tr>
        <tr>
          <td style="text-decoration: underline;">State,Zip Code:</td>
          <td>'.$_POST['zip'].'</td>
        </tr>
        <tr>
          <td style="text-decoration: underline;">Pick up Time:</td>
          <td>'.$pick_up_time.'</td>
        </tr>
        <tr>
          <td style="text-decoration: underline;font-weight: bolder;">Destination information: </td>
          <td></td>
        </tr>
        <tr><td><td></td></td></tr>
        <tr>
          <td style="text-decoration: underline;">State,Zip Code:</td>
          <td>'.$_POST['rtnzip'].'</td>
        </tr>
        <tr>
          <td style="text-decoration: underline;">Expected Arrival Time:</td>
          <td>'.$artime.'</td>
        </tr>
        <tr>
          <td style="text-decoration: underline;">Return Time:</td>
          <td>rtime</td>
        </tr>
        <tr>
          <td style="text-decoration: underline;">Additional Information:</td>
          <td>'.$_POST['others'].'</td>
        </tr>
      </tbody>
    </table>
    <p>202 w park wood dr Dayton, OH 45405&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; www.thefaithride.com &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; info@thefaithride.com  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  +1 (937) 238-2217</p>
  </div>
        </body>
        </html>
        ';
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        // Additional headers
        //$headers .= 'To: ' .$to. "\r\n";
        $headers .= 'From: ' .$sender. "\r\n";
    //$headers = 'From:' . $sender;

    if (mail($recipient, $subject, $message, $headers))
    {
        echo "accepted";
    }
    else
    {
        echo "not accepted";
    }

}
?>