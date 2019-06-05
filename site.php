<?php
    //from validation

    if(isset($_GET['submit'])){
        // User press the submit form button

        // Validation tools
        $letters = "/^[א-תA-Za-z ]+$/";
        $numbers = "/^[0-9]+$/";


        // Variables
        $name = $_GET['name'];
        $email = $_GET['email'];
        $prePhone = $_GET['prePhoneNumber'];
        $phone = $_GET['phoneNumber'];
        $arrival = $_GET['arrival'];
        $guests = $_GET['numOfGuests'];
        $commet = $_GET['comment'];


            $allGood = true;

            // Email validation
            if (!filter_var($email, FILTER_VALIDATE_EMAIL) || empty($email)) {
                $emailError = "Invalid email";
                $allGood = false;
            }
            // Name validation
            if(!preg_match($letters,$name) || $name == " " || empty($name)){
                $nameError = "Invalid name";
                $allGood = false;
            }
            // PrePhone validation
            if(!preg_match($numbers,$prePhone) || empty($prePhone) || strlen($prePhone) != 3 ){
                $preError = "Invalid pre";
                $allGood = false;
            }
            // Phone validation
            if(!preg_match($numbers,$phone) || empty($phone) || strlen($phone) != 7 ){
                $phoneError = "Invalid phone";
                $allGood = false;
            }
            // Guests validation
            if(!preg_match($numbers,$guests) || $guests <= 0 || empty($guests)){
                $guestsError = "Invalid guests";
                $allGood = false;
            }
            // Commit validation
            if(strlen($commet) > 200){
                $commitError = "Invalid commit";
                $allGood = false;
            }

            // Form sent check
            if($allGood){
                // Form sent successfully
                ?>

                <!-- The Modal -->
                <div class="modal fade" id="successModal" tabindex="-1" role="dialog" >
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">הזמנה בוצעה בהצלחה</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <p>.<span>Ashkelon Party</span> על הזמנתך לאירוע  <span><?php echo $name ?></span> תודה</p>
                                <p>.<span><?php echo $guests ?></span> :מספר מוזמנים   </p>
                                <img src="imgs/success.png" alt="success" id="sucPic">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- jQuery -->
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
                <!-- Script for modal open -->
                <script>$('#successModal').modal('show') </script>

<?php
            }


    }

?>
<?php
    include ('header.php');
?>


<?php
    include ('footer.php');
?>
