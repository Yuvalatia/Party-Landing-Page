<div class="container">
    <form name="payment-form" action="index.html" method="GET" onsubmit="return valForm()">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="name">שם מלא</label>
                <input  dir="rtl" type="text" class="form-control" id="name" name="name">
                <div class="invalid-feedback">
                    שם מלא חייב להכיל רק אותיות
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="email">אימייל</label>
                <input type="email" class="form-control" id="email" name="email">
                <div class="invalid-feedback">
                    נא להזין אימייל
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="prePhoneNumber">קידומת פלאפון</label>
                <input type="text" class="form-control" id="prePhoneNumber" name="prePhoneNumber">
                <div class="invalid-feedback">
                    052,053,054,055,057,058
                </div>
            </div>
            <div class="form-group col-md-4">
                <label for="phoneNumber">מספר פלאפון</label>
                <input type="text" class="form-control" id="phoneNumber" name="phoneNumber">
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
                <input type="text" class="form-control" id="numOfGuests" name="numOfGuests">
                <div class="invalid-feedback">
                    מספר גדול מ0
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="comment">הערות נוספות</label>
                <textarea class="form-control" name="comment" aria-describedby="commentHelp" id="comment" cols="30" rows="10"></textarea>

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