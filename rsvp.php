<div class="container">
    <form name="payment-form" action="" method="GET" onsubmit="return valForm()">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="name">שם מלא</label>
                <input  dir="rtl" type="text" class="form-control <?php
                if(isset($nameError)){
                    echo "is-invalid";
                }
                ?>" id="name" name="name" <?php
                if(isset($_GET['name'])){
                    echo "value='".$_GET['name']."'";
                }
                ?>>
                <div class="invalid-feedback">
                    שם מלא חייב להכיל רק אותיות
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="email">אימייל</label>
                <input type="email" class="form-control <?php
                if(isset($emailError)){
                    echo "is-invalid";
                }
                ?>" id="email" name="email" <?php
                if(isset($_GET['email'])){
                    echo "value='".$_GET['email']."'";
                }
                ?>>
                <div class="invalid-feedback">
                    נא להזין אימייל
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="prePhoneNumber">קידומת פלאפון</label>
                <input type="text" class="form-control <?php
                if(isset($preError)){
                    echo "is-invalid";
                }
                ?>" id="prePhoneNumber" name="prePhoneNumber" <?php
                if(isset($_GET['prePhoneNumber'])){
                    echo "value='".$_GET['prePhoneNumber']."'";
                }
                ?>>
                <div class="invalid-feedback">
                    052,053,054,055,057,058
                </div>
            </div>
            <div class="form-group col-md-4">
                <label for="phoneNumber">מספר פלאפון</label>
                <input type="text" class="form-control <?php
                if(isset($phoneError)){
                    echo "is-invalid";
                }
                ?>" id="phoneNumber" name="phoneNumber" <?php
                if(isset($_GET['phoneNumber'])){
                    echo "value='".$_GET['phoneNumber']."'";
                }
                ?>>
                <div class="invalid-feedback">
                    7 מספרים בלבד
                </div>
            </div>
            <div class="form-group col-md-3">
                <label for="arrival">דרכי הגעה</label>
                <select name="arrival" id="arrival" class="custom-select">
                    <option value="0">* הגעה עצמית *</option>
                    <option value="1">יהודה עטיה</option>
                    <option value="2">יובל עטיה</option>
                    <option value="3">משה פייגלין</option>
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="numOfGuests">מספר אורחים</label>
                <input type="text" class="form-control <?php
                if(isset($guestsError)){
                    echo "is-invalid";
                }
                ?>" id="numOfGuests" name="numOfGuests" <?php
                if(isset($_GET['numOfGuests'])){
                    echo "value='".$_GET['numOfGuests']."'";
                }
                ?>>
                <div class="invalid-feedback">
                    מספר גדול מ0
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="comment">הערות נוספות</label>
                <textarea class="form-control <?php
                if(isset($commitError)){
                    echo "is-invalid";
                }
                ?>" name="comment" aria-describedby="commentHelp" id="comment" cols="30" rows="10"><?php
                    if(isset($_GET['comment'])){
                        echo $_GET['comment'];
                    }
                    ?></textarea>

                <div class="invalid-feedback">
                    מקסימום 200 תווים
                </div>
                <small id="commentHelp" class="form-text text-muted">200   :מספר תווים שנשאר </small>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">המשך לתשלום</button>
            </div>

        </div>
    </form>
</div>