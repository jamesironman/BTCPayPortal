<!-- Good ol' fashioned DOCTYPE for good ol' fashioned browsers -->
<!DOCTYPE>
<html>
    <head>
        <!-- Feel free to change the title... -->
        <title> Bitcoin Payment Test </title>
        
        <!-- Need to include what we just set up! -->
        <?php
            include 'authentication.php';
        ?>
        
        <!-- 90's CSS for a 90's looking webpage. -->
        <style>
            .center {
                display: block;
                margin-left: auto;
                margin-right: auto
            }
            
            .textcenter{
                text-align: center;
                font-family: serif;
            }
        </style>
        

    </head>
    <body>
        
        <!-- Title. Can be changed. Really mostly everything can be changed... -->
        <h1 class="textcenter">Make a Bitcoin Payment</h1>
        
        <!-- Begin the monstrosity of my PHP -->
        <?php
        
        //Check if we have already set an address cookie.
        if(!isset($_COOKIE["address"])){
            // If not proceed to generate one and get all the info on it.
            $addressArray = $block_io->get_new_address();
            $address = $addressArray->data->address;
            $label = $addressArray->data->label;
            $balance_array = $block_io->get_address_balance(array('addresses' => $address));
            $balance = $balance_array->data->available_balance + $balance_array->data->pending_received_balance;

            // Making the cookie last one day.
            setcookie("address", $address, time() + 86400, "/");
        
        // But if we've already set the address cookie...
        } else {
          
            //Read it...
            $address = $_COOKIE["address"];
            //Check if there's any money on the address yet...
            $balance_array = $block_io->get_address_balance(array('addresses' => $address));
            $balance = $balance_array->data->available_balance + $balance_array->data->pending_received_balance;
            
            //If there is...
            if ($balance > 0){
                //Here is where you add your own code to do whatever when they've deposited bitcoin...
                echo "<h3 class='textcenter'> " . $balance . " " . $currency . " deposited.";
                //Sets the cookie to dissapear after we close or refresh the page.
                setcookie("address", $address, 0, "/");
            //Or if nothing...
            }else{
                //Put whatever you want here but this is what I have here now...
                echo "<h3 class='textcenter'>No " . $currency . " Deposited.";
            }
        }
            //Telling the person what address to deposit to, with a nice QR code, thanks to blockchain.info.
            echo "<h3 class='textcenter'>To address: " . $address . " </h3> <br> <img class='center' src='https://blockchain.info/qr?data=" . $address . "&size=200' >";
        
            //The end of most of the page.
        ?>

        <!-- A little refresh button to check if anything has been deposited. -->
        <form class="center">
            <input class="center" type="button" onClick="history.go(0)" value="I Deposited">
        </form>

        
        <!-- The End -->
    </body>
</html>